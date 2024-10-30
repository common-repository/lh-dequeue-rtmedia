=== LH Dequeue RtMedia ===
Contributors:      shawfactor
Donate link: 	   https://lhero.org/portfolio/lh-dequeue-rtmedia/
Tags:              rtmedia, Buddypress, style, script, dequeue
Requires at least: 3.0
Tested up to:      5.2
Stable tag: 	   trunk
License:           GPLv2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.html

Removes the huge numbers of styles, scripts etc, that RTmedia adds for non logged in visitors.

== Description ==

This plugin does two things

1. For non logged in users it removes the scrips and styles that RTmedia adds to your site. Logged in users who need the RTmedia functionality are not effected (the scripts are not removed for them)

Thus speeding up the experience of normal vistors

2. More the RtMedia menu to a sub menu under settings, thus not cconfusing the already crowded admin experience.

== Frequently Asked Questions ==

= Can I see an example of a site using this plugin? =
Sure my sports league uses this plugin: https://princesparktouch.com/


= Will this effect my buddypress members experience? =
No for logged in users scris and styles remain the same.

== Installation ==

1. Upload lh-dequeue-rtmedia folder to the /wp-content/plugins/ directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. That is it


== Changelog ==

**1.00 November 09, 2017**  
Initial release.

**1.01 December 29, 2017**  
Moved to OOP.

**1.02 February 20, 2018**  
Singleton Pattern.

**1.03 June 13, 2019**  
Added move menu functionality.