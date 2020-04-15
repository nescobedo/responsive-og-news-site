# Responsive Oil & Gas News Redesign templates

This is a site theme that I designed for Drilling Data in 2015.  It's a responsive update to their desktop only site. 

It's made up of over 40 templates.  Mostly HTML/CSS besides some very minor Javascript.  PHP is used only for templating purposes to include re-usable elements (header/footer/etc).  For this client, I would create these types of coded templates to pass off to the back-end development team.  This would enable rapid site development between myself and the product owner.  

This design uses the awesome Museo Sans Rounded font available here: https://www.myfonts.com/fonts/exljbris/museo-sans-rounded/

This also uses the YAMM 3 mega menu for Bootstrap - a life-saver at the time for the amount of sub links requested.  Learn more about YAMM here: http://geedmo.github.com/yamm3

It's also a working Node.js development environment utilizing Grunt , Browsersync, Bootstrap 3, Babel, Less, and css/js minification.

## How to get started?

1. Clone this repo
2. yarn or npm install to install the required dependencies
3. Use 'gulp emulate' to kickoff the dev PHP server it will automatically open the browser window. Use 'gulp' if you will use your own php server environment and just want to watch for changes.  
4. Edit html files in /public, and less files in /src/less or any js files in /src/js. Browser-sync will reload after any changes.