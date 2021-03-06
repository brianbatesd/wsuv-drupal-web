Please see https://admin.vancouver.wsu.edu/marketing-and-communications/branding-style-guidelines for official style guidelines and contact information. Thank you and Go Cougs!

# Theme information and specifications

name = WSU Vancouver Omega  
description = WSU Vancouver HTML5 Omega subtheme  
organization = Washington State University Vancouver  
contributors = Brian Bates, Aaron Thorne, Alan McGinnis  
core = Drupal 7.x  
engine = phptemplate  
base theme = omega  
base theme version = 7.x-3.1  
browser support = IE 8+ (limited IE 7 support), Safari 4+, Firefox 3.5+, Chrome 4+, iOS 6+, Android 3+  

# Setup instructions

* Enable and set as default – WSU Vancouver Omega theme
* Enable necessary Modules and Admin Role permissions
* Admin > Config > People > Accounts – disable new account creation
* Setup new Menu for the site
* Under Main Menu and User Menu disable all links
* Configure Blocks to remove unnecessary defaults (footer, etc.)
* Choose CKEditor for the Filtered HTML text format in WYSIWYG profiles
* Configure allowed HTML tags in Filtered HTML text format (td, tr, etc.)
* Configure Page Titles to [current-page:page-title] - WSU Vancouver
* Set your Site Information to the site name and WSU Vancouver for the [site:slogan]
* Add Taxonomy select menu to necessary Content Types
* Edit and add Available Menus to necessary Content Types
* Configure URL aliases (Clear cache to show Taxonomy term fields), remove /content/
* Setup Google CSE (see below)

# Google CSE (Custom Search Engine) setup

* In /admin/config/search/settings/ enable Google CSE for Active and Default Search Modules
* After saving, add the appropriate Google CSE ID
* Set Permissions so that all users can use Google CSE
* Google CSE requires Clean URLs to be setup to work
* Add a default block to display in the search results with search/ and search/*

# CSS HTML element visual reference

https://admin.vancouver.wsu.edu/marketing-and-communications/web-style-guide

# Additional credits

https://www.drupal.org/  
https://www.drupal.org/project/omega  
https://github.com/drupal/drupal  
https://github.com/viljamis/responsive-nav.js  
https://github.com/alanmcginnis

# Related projects

https://github.com/washingtonstateuniversity
