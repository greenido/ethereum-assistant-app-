<?php
/**
* @what Goolgle Apps for Assistant that give you details about Ethereum.
* Currently: Ethereum price, market cap and last 24h volume.

* @author Ido Green | @greenido
* @date 7/2017
* @see https://greenido.wordpress.com
*/

//
// Entry point to all the different request that this webhook will get
//
function processMessage($update) {
    $endPointURL = 'https://coinmarketcap.com/currencies/ethereum/';
    if( $update["result"]["action"] === "price") {
      $rawHtml = file_get_contents($endPointURL);
      $inx1 = strpos($rawHtml, "quote_price") + 13;
      $inx2 = strpos($rawHtml, "<", $inx1);
      $price = substr($rawHtml, $inx1, $inx2 - $inx1);
      $tmpStr = "Right now the price of 1 Ethereum is $price USD. What else do you wish to know?";
        sendMessage(array(
            "source" => "eth-price-sample",
            "speech" => $tmpStr,
            "displayText" => $tmpStr
        ));
    }
    elseif ($update["result"]["action"] === "marketcap" ) {
      $rawHtml = file_get_contents($endPointURL);
      $inx1 = strpos($rawHtml, "coin-summary-item-detail") + 26;
      $inx2 = strpos($rawHtml, "<", $inx1);
      $marketCap = substr($rawHtml, $inx1, $inx2 - $inx1);
      $tmpStr = "Right now the Ethereum market cap is {$marketCap}. What else do you wish to know?";
        sendMessage(array(
            "source" => "eth-marketcap-sample",
            "speech" => $tmpStr,
            "displayText" => $tmpStr
        ));
    }
    elseif ($update["result"]["action"] === "volume24h" ) {
      $rawHtml = file_get_contents($endPointURL);
                              //123456789012345678901234567890  
      $inx1 = strpos($rawHtml, "coin-summary-item-detail") + 26;
      // let's get the second ancor for the vol.
      $inx1 = strpos($rawHtml, "coin-summary-item-detail", $inx1) + 26;
      $inx2 = strpos($rawHtml, "<", $inx1);
      $vol = substr($rawHtml, $inx1, $inx2 - $inx1);
      $tmpStr = "The Ethereum volume in the last 24 hours is {$vol}. What else do you wish to know?";
        sendMessage(array(
            "source" => "eth-volume-sample",
            "speech" => $tmpStr,
            "displayText" => $tmpStr
        ));
    }
    //
}

//
// Util function to return results
//
function sendMessage($parameters) {
  header('Content-Type: application/json');
  $retObj = json_encode($parameters);
  error_log("\n== returning: $retObj \n");
  echo $retObj;
}

//
// Start the party. Get the $_POST data and work with it.
//
$response = file_get_contents("php://input");
error_log("\n== STARTING and Got: $response \n\n");
$update = json_decode($response, true);
if (isset($update["result"]["action"])) {
    processMessage($update);
}
else {
  error_log("\nError: $update \n");
  // A simple 'error msg' that will guide the user to provide something that we can work with
  echo '{ "speech": "Sorry but I did not understand. Try: price or market cap or 24h volume",
    "source": "eth-price-sample",
    "displayText": "Sorry but I did not understand. Try: price or market cap or 24h volume." }';
}
