<?php
/**
* UNIT TEST
* @what App for the Google Assistant that give you details about Ethereum.

* @author Ido Green | @greenido
* @date 7/2017
* @see https://greenido.wordpress.com
*/

//
// Testing the price
//
function testEndPointPrice() {
    $endPointURL = 'https://coinmarketcap.com/currencies/ethereum/';
      $rawHtml = file_get_contents($endPointURL);
      $inx1 = strpos($rawHtml, "quote_price") + 13;
      $inx1 = strpos($rawHtml, ">", $inx1);
      $inx2 = strpos($rawHtml, "<", $inx1);
      $price = substr($rawHtml, $inx1, $inx2 - $inx1);
      $tmpStr = "Right now the price of 1 Ethereum is $price USD. What else do you wish to know?";
    echo($tmpStr);
}

//
// Start the party. Unit testing
//
$response = file_get_contents("php://input");
error_log("\n== STARTING testing the price.\n\n");
testEndPointPrice();