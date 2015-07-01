# PROJECT_NAME website

## By Mark Bain Design

### Version 0.0.0

## 1. Setup

* Open project directory in terminal and run `npm install` to install all grunt plugins
* Run `bower install` to download Bower components (and their dependencies) as listed in bower.js and place them in the "/assets" directory.
* Run `grunt copyassets`to copy assets from bower_components to the theme.

## 2. Usage

* Run `grunt` to execute default tasks
* Run `grunt build` to output build files
* Load all styles/scripts via `functions.php`and concat/uglify with a plugin

### Installing and updating packages
After running `npm install`/`bower install`, or updating packages to newer versions, run the grunt task `grunt copyassets`to update these assets across the project. 

### Deployment
This project comes with a set of shell scripts to aid with deployment. 

For the moment, these must be run via the CLI. 