=== Gmagick ===
Contributors: markoheijnen, DH-Shredder, CodeKitchen
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7ECGSYJLNB4T8
Tags: image
Requires at least: 3.5
Tested up to: 4.0
Stable tag: 1.3

Enables Gmagick in WordPress

== Description ==

In WordPress 3.5 all of the GD functionality has been abstracted out and with that power Imagick has been including to WordPress 3.5 too. Gmagick needs to wait a little bit more but with this plugin you can already use it.

If you want to know a little bit more about the changes you can look at:
* http://make.wordpress.org/core/2012/12/06/wp_image_editor-is-incoming/
* http://markoheijnen.com/wordpress-new-image-manipulation/
* http://www.slideshare.net/markoheijnen/image-manipulation-in-wordpress-35

== Installation ==

1. Upload the folder `gmagick` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.3 (2014-09-03) =
* Sync with WordPress 3.9 and 4.0

= 1.2 (2012-12-30) =
* Checking if we always dealing with Gmagick objects
* Small bugfix after WordPress 3.8 when setting quality could end up not working

= 1.1 (2012-12-30) =
* Fix loading gmagick only once

= 1.0 (2012-12-9) =
* First version