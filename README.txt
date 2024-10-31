=== RM Head Junk ===
Contributors: Kuuak
Tags: clean, remove, performance, html, link, feed, rss, generator
Requires at least: 4.4
Tested up to: 4.6.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Remove extra links in Head.

== Description ==

Remove the extra unnecessary links in HTML head.
It can slightly increase the performances of your site as it remove data in HTML page.

Links removed:
* `<link rel="alternate" type="application/rss+xml" title="Blog exemple » Feed" href="http://example.com/feed/" />`
* `<link rel="alternate" type="application/rss+xml" title="Blog exemple » Comments Feed" href="http://example.com/comments/feed/" />`
* `<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://example.com/xmlrpc.php?rsd" />`
* `<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://example.com/wp-includes/wlwmanifest.xml" />`
* `<link rel='https://api.w.org/' href='http://example.com/wp-json/' />`
* `<meta name="generator" content="WordPress 4.6.1" />`


== Installation ==

1. Upload `rm-head-junk.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Why this plugin =

This plugin was created after a question asked in [http://wordpress.stackexchange.com](http://wordpress.stackexchange.com/questions/1507/steps-to-take-to-hide-the-fact-a-site-is-using-wordpress).
It is the fastest way to easily remove these links in every WP project without to remember which actions to unhook.

== Changelog ==

= 1.0.0 =
* Initial release
