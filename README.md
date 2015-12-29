# MBD Project

## By Mark Bain Design

### Version 1.1.0

# WP Project setup checklist #

## Staging server ##
- [X] Configure sub-domain 
- [X] Configure database

## Local environment ##
- [x] Configure hosts

### Install WordPress ###
- [x] In /htdocs, `git clone https://github.com/WordPress/WordPress.git NEW_PROJECT-NAME/httpdocs` 
- [x] Delete .git
- [x] wp-config.php `git clone https://gist.github.com/4e216af02104e87f6b7a.git`
- [x] [Get salts](https://api.wordpress.org/secret-key/1.1/salt/)
- [x] Go to URL and follow setup procedure

### Install deploy scripts ###
*Do not commit `config.sh`to your repo!*
- [ ] `git clone https://github.com/markbaindesign/mbd-wp-deploy-scripts.git NEW_PROJECT-NAME/scripts` 
- [ ] `cd NEW_PROJECT-NAME`
- [ ] `mkdir import`
- [ ] `mkdir export`
- [ ] `cp config-sample.sh config.sh`
- [ ] Edit `config.sh`with your project's environmental variables

### Git ###
- [ ] Gitignore: `git clone https://gist.github.com/b41e14fc9fc40f578a6d.git`

### Various ###

#### Sublime ####

- [ ] `git clone https://gist.github.com/81ad104299df655284b7.git`

#### Grunt ####
- [x] Edit `Gruntfile.js`

#### npm ####
- [x] Run `npm install`

#### Bower ####
_[Bower](http://bower.io/) is a package manager for the web._
- [x] Edit `bower.json`with your project name and dependencies
- [ ] Run `bower install`
- [ ] Run `grunt copyassets`

- [ ] [Install theme boilerplate](https://github.com/markbaindesign/mbd-grunt-wp-theme/blob/dev/README.md)
- [ ] Configure sub-domain
- [ ] Configure sub-domain
- [ ] Configure sub-domain
- [ ] Configure sub-domain
- [ ]
- [ ]
- [ ]
- [ ]
- [ ]
- [ ]
- [ ]
- [ ]
- Set up dev environment

- [ ]set up hide-my-site plugin (customise if required)
- [ ]set discourage search engines
[ ]Add salts to wp-config.php
[ ]Set up 
[ ]Set up & test deploy scripts
[ ]Export local site 

[ ]Get access to server FTP/database
[ ]Get access to hosting panel
[ ]Access to domain registrar
[ ]MailChimp