Wordpress theme for contentmine.org built upon Sage
==============

[contentmine.org](https://www.contentmine.org/) is based on [WordPress](http://wordpress.org) with an own developed theme built upon [sage](https://roots.io/sage/). 

This repository provides the [Issue Tracker](https://github.com/ContentMine/sage_contentmine.org) for all code, bugs, and feature requests related to the website.

## WordPress
The latest version of WordPress is available at: http://wordpress.org/download/

### Theme
The theme is provided in the `/sage_contentmine.org/` folder. The theme is based on [sage](https://roots.io/sage/), a WordPress starter theme based on HTML5 Boilerplate, gulp, Bower, and Bootstrap, that will help you make better themes.

* Source: [https://github.com/roots/sage](https://github.com/roots/sage)
* Homepage: [https://roots.io/sage/](https://roots.io/sage/)
* Documentation: [https://roots.io/sage/docs/](https://roots.io/sage/docs/)

#### Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js 0.12.x  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |

#### Extensions
**Fonts**
- [League Spartan](https://www.theleagueofmoveabletype.com/league-spartan) 
- [Font Awesome](http://fortawesome.github.io/Font-Awesome/) ([SIL OFL 1.1, CC BY 3.0 & MIT License](http://fortawesome.github.io/Font-Awesome/license/)) (SIL’s Open Font License)

### Plugins
See the [plugins](PLUGINS.md) page for a list of all the plugins used.

### Deployment
This is a standard WordPress install, so please refer to the [WordPress Docs](http://codex.wordpress.org/Installing_WordPress).

After installation those things need to be done:
- create pages "Landing Page", "Blog" and "Events"
- copy custom fields (works via export and import function)
- activate templates for landing page, blog page and events page 
- copy forms for contact

The configuration of wordpress can be found in [configuration](CONFIGURATION.md)

## Server
On the server following software is installed:
- apache2
- git
- svn
- mysql
- php
- npm -> gulp, bower

## Contributing

In the spirit of free software, everyone is encouraged to help improve this project.

Here are some ways you can contribute:

- by reporting bugs
- by writing or editing documentation
- by writing specifications
- by writing code (**no pull request is too small**: fix typos in the user interface, add code comments, clean up inconsistent whitespace)
- by refactoring code
- by closing issues
- by reviewing pull requests

When you are ready, submit a [Pull Request](https://github.com/ContentMine/sage_contentmine.org/pulls).

## Submitting an Issue
We use the [GitHub Issue Tracker](https://github.com/ContentMine/sage_contentmine.org/issues) to track bugs and features. Before submitting a bug report or feature request, check to make sure it hasn't already been submitted. When submitting a bug report, please try to provide a screenshot that demonstrates the problem.

## Documentation
We are still in progress to improve the documentation. Please [contact us](https://www.contentmine.org/contact) for further information about our installations.

## Community

Keep track of development and community news.

* Follow [@TheContentMine on Twitter](https://twitter.com/TheContentMine)
* Read and subscribe to the [ContentMine Blog](https://contentmine.org/blog/)
* Subscribe to the [ContentMine Google Group]()

## License
The project utilizes code licensed under the terms of the MIT License from the [sage wordpress theme](https://roots.io/sage/) and GPLv3 from the [event-organizer plugin]().

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

Visit [http://www.gnu.org/licenses/](http://www.gnu.org/licenses/) to learn more about the GNU General Public License.

http://www.gnu.org/licenses/
