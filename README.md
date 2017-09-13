# Automate Git Deployment Using Webhooks on Cloudways

## Setup
1. Install this plugin
2. Setup link between [Cloudways](https://www.cloudways.com/en/?id=34059) and GitHub
    1. Go to your Cloudways dashboard and generate SSH Keys  
    (Your app > Deployment Via Git > Generate SSH Keys)
    2. Download ssh keys
    3. Go to your GitHub repo settings > Deploy keys and add key previously downloaded
    4. Back to Cloudways (Your app > Deployment Via Git) and set Git Remote address, branch and click Start Deployment 

3. Create a Cloudways API key
    1. Log into the [Cloudways](https://www.cloudways.com/en/?id=34059) Platform
    2. Generate your API key using this link https://platform.cloudways.com/api
    3. Copy the Key and Email (it will be required in the settings of the plugin)

4. Configure your plugin in the "Settings area"
    * You can find your App id in the URL  
    ex: `https://platform.cloudways.com/apps/42/access_detail` mean app id `42`
    * Server ID can be found with by the same way  
    ex: `https://platform.cloudways.com/server/15/access_detail` mean server id `15`
    * Don't forget to change the GitHub URL for match your repos 

5. Add a Webhook in Your Git Repository
    1. Copy **WebHook URL:** displayed on plugin settings
    2. Go to your GitHub repo settings > Webhooks
    3. Click on Add Webhook
    4. Paste WebHook URL in Payload URL field and click Add webhook

> more informations about setting up Git deployment for Cloudways  
 https://support.cloudways.com/using-git-for-deployment/

## Author
inetis is a webdesign agency in Vufflens-la-Ville, Switzerland. We love coding and creating powerful apps and sites  [see our website](https://inetis.ch).
