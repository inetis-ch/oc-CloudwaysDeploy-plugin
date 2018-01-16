# About
OctoberCMS plugin to automate Git Deployment Using Webhooks on Cloudways.

## Setup
1. Install this plugin
2. Setup the link between [Cloudways](https://www.cloudways.com/en/?id=34059) and GitHub
    1. Go to your Cloudways dashboard and generate SSH Keys
    (Your app > Deployment Via Git > Generate SSH Keys)
    2. Download the SSH keys
    3. Go to your GitHub repo settings > Deploy keys and add the keys previously downloaded
    4. Go to Cloudways (Your app > Deployment Via Git) and set the Git Remote addressa and branch 
    5. Click Start Deployment 

3. Create a Cloudways API key
    1. Log into the [Cloudways](https://www.cloudways.com/en/?id=34059) Platform
    2. Generate your API key using this link https://platform.cloudways.com/api
    3. Copy the Key and Email (it is required in the settings for the plugin)

4. Configure your plugin in the **Settings** menu.
    * You can find your App id in the URL  
    ex: `https://platform.cloudways.com/apps/42/access_detail` means that the app id is `42`
    * Server ID can be found with by the same way  
    ex: `https://platform.cloudways.com/server/15/access_detail` means that the server id is `15`
    * Don't forget to change the GitHub URL to match your repos.

5. Add a Webhook to your Git Repository
    1. Copy the **WebHook URL:** displayed on the plugin settings page
    2. Go to your GitHub repo's Settings > Webhooks section
    3. Click on Add Webhook
    4. Paste the **WebHook URL** provided by the plugin in the **Payload URL** field and click Add webhook

> More informations about setting up Git deployment for Cloudways  
 https://support.cloudways.com/using-git-for-deployment/

## Author
inetis is a webdesign agency in Vufflens-la-Ville, Switzerland. We love coding and creating powerful apps and sites  [see our website](https://inetis.ch).
