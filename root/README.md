# PROJECT_NAME website

## By Mark Bain Design

### Version 0.0.0

## 1. Setup

- Open project directory in terminal and run `npm install` to install all grunt plugins (See [NPM])
- Run `bower install` to download Bower components (and their dependencies) as listed in bower.js and place them in the "/assets" directory.
- Run `grunt copyassets`to copy assets from bower_components to the theme.

## 2. Development

- Run `grunt` to execute default tasks
- Run `grunt build` to output build files to `/release`
- Load all styles/scripts via `functions.php`and concat/uglify with a plugin

### Installing and updating packages
After running `npm install`/`bower install`, or updating packages to newer versions, run the grunt task `grunt copyassets`to update these assets across the project. 

## 3. Deployment

### Scripts

This project comes with a set of shell scripts to aid with deployment. These scripts can either be run manually, or via grunt tasks:

- Run `grunt import`to run the import script and install the archive currently in `/import`to your local environment.
- Run `grunt export`to run the export script which creates an archive of your local install in `/export`, ready to upload to your remote environment (staging/production).

### Replacing URLs

Once you have run the import script, you need to change all the URLs in the database. I suggest using this script: 

[NPM]: https://www.npmjs.com/