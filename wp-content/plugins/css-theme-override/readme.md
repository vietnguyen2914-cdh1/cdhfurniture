=== CSS Theme Override ===
Contributors: jcummings1974
Donate link: http://www.jcummings.net
Tags: cache, caching
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows you to specify CSS overrides per page/post for any theme.

== Description ==

There are times when it is necessary to be able to allow editors to specify overrides for specific class of id styling.Ideally it's a good idea to do this without modifying your core theme files if possible. This plugin, once activated, adds a settings menu item that provides a text area where you can specify css class and id overrides, along with a comma delimited list of page or post ids that you want those styles to apply to.

== Installation ==

This plugin was built specifically for multisite networks, but should work on any Wordpress site.  The obvious benefit though, will be when you're hosting multiple Wordpress sites from a single installation/server and need to adjust the caching instructions sent by just one site.


1. Upload the plugin to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Visit the `CSS Override` section of your settings menu to set the types of instructions you want to use.

== Frequently Asked Questions ==

= What restrictions are there on the styling you can add? =

There aren't any restrictions, per se, though you shouldn't include the style tags in the text area field. The plugin itself will add those once it identifies the page or post it needs to run on.

== Upgrade Notice ==

== Screenshots ==

== Changelog ==

= 1.1.2 =
* Wordpress 4.0 compatibility release

= 1.1 =
* Added the ability to use the 'ALL' id to have the CSS modifications apply to all pages/posts
= 1.0 =
* Initial release