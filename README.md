# Google Assistant App ["Ether-Info"](https://assistant.google.com/services/a/id/33c7d34e77de3124/)

#### This [assistant app](https://assistant.google.com/services/a/id/33c7d34e77de3124/) give you details about Ethereum: price, market cap and last 24h volume.
In case you have Google home or Android or iPhone with the assistant app - you can try it by saying: "Talk to Ethereum-Info"

#### What is Ethereum?
[Ethereum](https://www.ethereum.org/) is a digital currency invented in 2013 — a full 4 years after the release of Bitcoin. It has since grown to be the second largest digital currency in the world by market cap — around $20 billion, compared to Bitcoin’s $40 billion. Psst... Want to get a cool intro to bitcoin? Checkout this [short video](https://www.youtube.com/watch?v=TN7cmfoH06w) I made.

Ethereum uses its blockchain to record state transitions in a gigantic distributed computer. Ethereum’s corresponding digital currency, ether, is essentially a side effect of powering this massive computer. To put it another way, Ethereum is literally a computer that spans the entire world. Anyone who runs the Ethereum software on their computer is participating in the operations of this world-computer, the Ethereum Virtual Machine (EVM). Because the EVM was designed to be Turing-complete (ignoring gas limits), it can do almost anything that can be expressed in a computer program.

![ether logo](https://greenido.files.wordpress.com/2017/07/ethereum-logo-big.png)

## Now, you got two (good) options:
1. Create a [pull-request](https://github.com/greenido/ethereum-assistant-app-/pulls) or [open an issue](https://github.com/greenido/ethereum-assistant-app-/issues) and improve this app.
2. Clone this repo and create your own app. All the details are below.

## Setup Instructions

### Pre-requisites
 1. API.AI account: [https://api.ai](https://api.ai)
 2. Google Cloud project: [https://console.cloud.google.com/project](https://console.cloud.google.com/project)

See the developer guide and release notes at [https://developers.google.com/actions/](https://developers.google.com/actions/) for more details.

### Steps
1. Create a new agent in API.AI [https://api.ai](https://api.ai). You can also take this repo as a zip and import it to API.AI
2. Deploy this action to your preferred hosting environment
 (we recommend [Google Cloud Functions](https://cloud.google.com/functions/docs/tutorials/http)).
3. Set the "Fulfillment" webhook URL to the hosting URL.
4. In any relevant intents (*price* and *total*), enable the Fulfillment for the response.
5. Build out your agent and business logic by adding function handlers for API.AI actions.
6. For each API.AI action, set a new key/value pair on the actionMap, reflecting
 the action name and corresponding function handler on the actionMap in **index.js**.
1. Make sure all domains are turned off.
1. Enable Actions on Google in the Integrations.
1. Provide an invocation name for the action.
1. Authorize and preview the action in the [web simulator](https://developers.google.com/actions/tools/web-simulator).

For more detailed information on deployment, see the [documentation](https://developers.google.com/actions/samples/).

## References and How to report bugs
* Actions on Google documentation: [https://developers.google.com/actions/](https://developers.google.com/actions/).
* If you find any issues, please open a bug here on GitHub.
* Questions are answered on [StackOverflow](https://stackoverflow.com/questions/tagged/actions-on-google).

## How to make contributions?
Please read and follow the steps in the CONTRIBUTING.md.

## License
See LICENSE.md.

## Terms
Your use of this sample is subject to, and by using or downloading the sample files you agree to comply with, the [Google APIs Terms of Service](https://developers.google.com/terms/).

## Google+
* [+GreenIdo](http://plus.google.com/+greenido)
* Actions on Google Developers Community on Google+ [https://g.co/actionsdev](https://g.co/actionsdev)

### [Privacy Policy](https://sites.google.com/view/ethereum-info/home)
