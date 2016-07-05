=== CSS Theme Override ===
Contributors: jcummings1974
Donate link: https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=ud1KMFDaos3i-N3a6-LEQZrU9LBGJ-ObM6eY4LhHUz7cNKCLzSJyy_yZBMu&dispatch=5885d80a13c0db1f8e263663d3faee8d6cdb53fcfca2b5941339e576d7e42259
Tags: css, theme, stylesheet, styles, override style, overrides
Author URI: http://www.jcummings.net
Plugin URI: http://wordpress.org/plugins/css-theme-override/
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: /trunk/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a settings panel to the Wordpress admin that allows you to specify css class or id styles and pages/posts to apply them to.

== Description ==

If you've ever wanted to control how a particular part of your page or posts looks without having to modify the theme files or stylesheets, 
this is a simple plugin that allows you to do that. 

Once installed and activated, you'll have a new settings panel in the Wordpress admin that will provide you with a text area block 
where you can include any styling you'd like to use, and a second input field that allows you to insert a comma delimited list of page 
or post IDs to apply these styles to. 

Alternatively, you can enter 'ALL', and have your styles applied on every page/post.

**Bug Reports or Feature Requests**
https://trello.com/b/9Bio6kHl

**Follow me on Twitter**
https://twitter.com/jcummings1974

== Installation ==

1. Upload the plugin to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Visit the `CSS Override` section of the settings menu.
4. Enter the id or class style that you want to use as an override, without the style tags.
5. Choose a specific page/post ID, or enter 'ALL', and save.
6. Visit your page in the browser to view your style override in action.

== Frequently Asked Questions ==

= What restrictions are there on the styling you can add? =

None that I can think of.

= Why isn't the styling showing up? =

Make sure that when you enter your styles in the options panel, that you haven't included the style tags, which the plugin adds for you. 
Make sure that you clear/update any caching plugin that you may be using. If you have doubts as to whether your style is being injected
in to the page, view the source of your page and look for the css you've supplied in the head section of the HTML for that page.


== Upgrade Notice ==

== Screenshots ==

== Changelog ==

= 1.1.2 =
* Wordpress 4.0 compatibility release

= 1.1.1 =

* Improved instructions in the settings panel
* Clarified the "Enter CSS Style" error in the admin when incorrect text is entered in the form field.
* Appended an !important to the custom class defined to insure that style is applied.

= 1.1 =

* Added the ability to use the 'ALL' page id to have the changes apply to all pages/posts

= 1.0 =

* Initial release