> ⚠️ **This repository is archived and no longer maintained.**  
> Please use the actively maintained version here: [digitalocean/sample-laravel](https://github.com/digitalocean/sample-laravel)

# Getting Started

These steps will get this sample Laravel API running for you using DigitalOcean.

![](https://i.imgur.com/JBsQfSG.png)

**Note: Following these steps will result in charges for the use of DigitalOcean services**

You can view the following API routes:

1. Get all posts: `GET` /api/posts
1. Create a post: `POST` /api/posts
1. Get a single post: `GET` /api/posts/{postId}
1. Update a post: `PUT/PATCH` /api/posts/{postId}
1. Delete a post: `DELETE` /api/posts/{postId}

## Requirements

You need a DigitalOcean account. If you don't already have one, you can sign up at https://cloud.digitalocean.com/registrations/new

## Forking the Sample App Source Code

To use all the features of App Platform, you need to be running against your own copy of this application. To make a copy, click the Fork button above and follow the on-screen instructions. In this case, you'll be forking this repo as a starting point for your own app (see [Github documentation](https://docs.github.com/en/github/getting-started-with-github/fork-a-repo) to learn more about forking repos.

After forking the repo, you should now be viewing this README in your own github org (e.g. `https://github.com/<your-org>/sample-laravel-api`)

## Deploying the App

[![Deploy to DO](https://mp-assets1.sfo2.digitaloceanspaces.com/deploy-to-do/do-btn-blue.svg)](https://cloud.digitalocean.com/apps/new?repo=https://github.com/digitalocean/sample-laravel-api/tree/main)

You can use the Deploy to DigitalOcean button to deploy this repo directly to App Platform.

## Deploying the App Manually

1. Visit https://cloud.digitalocean.com/apps (if you're not logged in, you may see an error message. Visit https://cloud.digitalocean.com/login directly and authenticate, then try again)
1. Click "Launch App" or "Create App"
1. Choose GitHub and authenticate with your GitHub credentials.
1. Under Repository, choose this repository (e.g. `<your-org>/sample-laravel-api`)
1. On the Builds screen, add `php artisan migrate` to the Build Command. Leave the Run Command
1. Click "Launch App"
1. You should see a "Building..." progress indicator. And you can click "Deployments"→"Details" to see more details of the build.
1. It can currently take 5-6 minutes to build this app, so please be patient. Live build logs are coming soon to provide much more feedback during deployments.
1. Add a Database. Go to Components -> Create Component
1. Look through `.env.example` and add the relevant ones to your environment variables. Required are `APP_NAME`, `APP_ENV`, `APP_KEY`
1. Once you have your database credentials, add them to your environment variables as `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
1. Once the build completes successfully, click the "Live App" link in the header and you should see your running application in a new tab

## Making Changes to Your App

As long as you left the default Autodeploy option enabled when you first launched this app, you can now make code changes and see them automatically reflected in your live application. During these automatic deployments, your application will never pause or stop serving request because the App Platform offers zero-downtime deployments.

## Learn More

You can learn more about the App Platform and how to manage and update your application at https://www.digitalocean.com/docs/apps/.

## Deleting the App

When you no longer need this sample application running live, you can delete it by following these steps:

Visit the Apps control panel at https://cloud.digitalocean.com/apps
Navigate to the sample-react app
Choose "Settings"->"Destroy"
This will delete the app and destroy any underlying DigitalOcean resources

Note: If you don't delete your app, charges for the use of DigitalOcean services will continue to accrue.
