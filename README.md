# Automate Git Deployment Using Webhooks on Cloudways

##Prerequisites
Before using this plugin, you need to configure the exchange of SSH key between Cloudways and the repo. See https://support.cloudways.com/using-git-for-deployment/ for instructions

## Setup
* Install the component
* Create SSH key -> https://support.cloudways.com/using-git-for-deployment/ for instructions
* Create a Cloudways API key: Log into the Cloudways Platform,  and generate your API key using this link. Copy the Key and Email as it will be required in the settings of the plugin
* Configure your plugin in the "Settings area"
<img src="https://pbs.twimg.com/media/DID2FX4XoAAFz8o.jpg:large">
 
### Add a Webhook in Your Git Repository

You can add a webhook in your Github account by:

* Get into your Github repo and click Settings
* Now click Webhooks and Click on Add Webhook
* Name your webhook and add the webhook URL to your app, then Click Save

<img src="https://support.cloudways.com/wp-content/uploads/2016/12/2016-12-08_15h45_54.png">

## Author
inetis is a webdesign agency in Vufflens-la-Ville, Switzerland. We love coding and creating powerful apps and sites  [see our website](https://inetis.ch).
