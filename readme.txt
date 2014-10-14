=== KaTeX ===
Contributors: ascom
Tags: katex, latex, mathjax, math, equation, equations
Requires at least: 3.9
Tested up to: 4.0
Stable tag: 1.0
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Integrates the super-fast KaTeX LaTeX equation typesetting engine with WordPress. Create beautiful, yet performant math in your posts and pages.

== Description ==
The KaTeX WordPress plugin integrates the [KaTeX math typesetting engine](https://github.com/Khan/KaTeX) with your WordPress website. The plugin allows you to put LaTeX in a `[latex]...[/latex]` shortcode, and beautiful math appears on your post or page. 

The plugin also has an option to use the excellent [jsDelivr CDN](http://www.jsdelivr.com) to load the KaTeX scripts, further increasing the performance of the plugin.

Equations starting with `\displaystyle` will automatically by wrapped in a `<p>` tags.

[Plugin Website](https://andrewsun.com/projects/wp-katex/)

== Installation ==
1. Upload the `katex` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the `[latex]` shortcode in your posts and pages

== Frequently Asked Questions ==
= Wait - I use MathJax and it's fine! =

KaTeX is fast. It's really fast, compared to MathJax. In fact, it's a staggering 35 times faster than MathJax. Your page will load much faster with KaTeX, especially if it\'s heavy with equations.

= How about Jetpack...? =

Jetpack has a LaTeX plugin that uses the WordPress.com service to render the equations. However, it uses images, which look ugly when zoomed in, or on high-DPI ("retina") displays. Also, it depends on WordPress.com's servers, and a lot of equations can make the page slow (too many requests).

== Changelog ==
= 1.0 =
* Initial release