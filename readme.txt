=== WP-KaTeX ===
Contributors: ascom
Donate link: https://andrewsun.com/donate/
Tags: katex, latex, mathjax, math, equation, equations, tex
Requires at least: 3.9
Tested up to: 4.9
Stable tag: 1.8.3
Requires PHP: 5.3
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Integrates the super-fast KaTeX LaTeX equation typesetting engine with WordPress. Create beautiful, yet performant math in your posts and pages.

== Description ==
The KaTeX WordPress plugin integrates the super-fast [KaTeX math typesetting engine](https://github.com/Khan/KaTeX) with your WordPress website. The plugin allows you to put LaTeX in a `[latex]...[/latex]` shortcode, and beautiful math appears on your post or page. 

The plugin also has an option to use the excellent [jsDelivr CDN](http://www.jsdelivr.com) to load the KaTeX scripts, further increasing the performance of the plugin.

Equations in `[latex display="true"]...[/latex]` will be rendered in display mode (rather than inline mode) and centered on its own line.

[Plugin Website](https://andrewsun.com/projects/wp-katex/)

== Installation ==
1. Upload the `katex` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the `[latex]` shortcode in your posts and pages

== Frequently Asked Questions ==
= Wait - I use MathJax and it's fine! =

KaTeX is fast. It's really fast, compared to MathJax. In fact, it's a staggering 35 times faster than MathJax. Your page will load much faster with KaTeX, especially if it's heavy with equations.

= How about Jetpack? =

Jetpack has a LaTeX plugin that uses the WordPress.com service to render the equations. However, it uses images, which look ugly when zoomed in, or on high-DPI ("retina") displays. Also, it depends on WordPress.com's servers, and a lot of equations can make the page slow (too many requests).

== Screenshots ==

1. Various equations rendered with WP-KaTeX

== Changelog ==
= 1.9.0 =
* Code cleanup and other minor improvements
* Updated KaTeX library to 0.9.0
    * Bug fixes:
        * Improve JS spacing (#1103)
        * Fix handling of Unicode characters ð, Å, å (#1157)
        * Padding over \sqrt and Paths for frac-line (#1143)
    * New Features:
        * Italic Greek capital letters (#1118)
        * Add support for \mathring (#1125)
        * add support for unicode angle brackets, single vertical bar, double vertical bar (#1123)
        * Enable spacing functions in text mode (#1139)
        * Support Reaction Arrows (#1078)
        * Add \nobreakspace (#1145)
        * Support Unicode colon equals (#1151)
        * Support \underline in text mode (#1159)

= 1.8.3 =
* Updated KaTeX library to 0.8.0
    * Breaking changes:
        * Implicit `\color`, explicitly grouped `\textcolor`
    * New features:
        * added some international operators (`\arctg`, `\arcctg`, `\ch`, `\cosec`, `\cotg`, `\ctg`, `\cth`, `\sh`, `\tanh`, `\tg`, `\th`)
        * Old font command support: `\rm`, `\sf`, `\tt`, `\bf`, `\it`
        * Builtin macros, macro arguments, `\overset` and `\underset`
        * Add `\iff`, `\implies`, `\impliedby` support
        * Support `<`, `>`, `|` and many `\text...` commands in text mode
        * Implement `$...$` via styling node
        * Support Windows high-contrast mode
        * Add `\jot` lineskip to aligned environment, switch contents to displaystyle, and add gathered
        * Fix high contrast mode better, thanks to @GeeLaw
        * Support stretchy wide elements.
        * Implement `\coloneqq`, `\colonequals`, etc. based on mathtools and colonequals
        * Support absolute TeX units
    * Other changes:
        * Revert "Remove trailing commas for IE 9 compatibility"
        * Fix all AMS mathord symbols
        * Fix `x'^2`
        * Use utils.deflt for Settings
        * Fix font typo math -> main
        * Fix spaces before `\middle`
        * Refactor and comment space splicing code
        * Fix issue with multiple superscripts.
        * Fix interaction between styles and sizes.
        * Vertically center single-character `\mathop`.
        * Correct handling of unbraced kerns followed by spaces.
        * Associate font metrics with Options, not Style.
        * Set maxFontSize on rules.
        * Correct computation of TeX sizes.
        * Use `\displaystyle` within `\over`/`\underbrace`
        * Shrinkwrap `vlists` in table-like CSS.
        * Solve Safari rendering issues with font-size overrides.
        * Improve rule coding, including for `\sqrt`.
* Updated KaTeX library to 0.8.1
* Updated KaTeX library to 0.8.2
    * New features:
        * Accept all existing Greek letters using unicode characters in math mode
    * Bug fixes:
        * Fix MathML output for `'` and large operators with limits
        * Fix color support for `stretchy`, `strikethrough`, and `fbox`
* Updated KaTeX library to 0.8.3
    * New features:
        * Add latin-1 letters as math symbols
        * Support CJK full-width punctuation + Unicode dots
        * Support for `'` `` ` `` `^` `~` `=` `\u` `.` `"` `\r` `\H` `\v` text-mode accents
        * Added support for `\not`
    * Bug fixes:
        * Use inline SVG for stretchy elements
        * Improve `\sqrt`


= 1.7.0 =
* New rendering method - improved experience for users with JavaScript disabled
* Updated KaTeX library to 0.7.0
    * Add `\kern`
    * Add `\mod`, `\bmod`, `\pmod`, and `\pod`
    * Add `\middle`
    * Add `\ldots`, `\textellipsis`, and `\mathellipsis`
    * Add `\#`, `\&`, `\$`, `\%`, `\_`, `\{`, and `\}` in text mode
    * Add `\stackrel`
    * Add `\atop`
    * Add `--`, `---`, `` ` ``, `'`, `` `​` ``, `''`, `\degree`, `\pounds`, `\maltese`
    * Add `\mathord`, `\mathbin`, `\mathrel`, `\mathopen`, `\mathclose`, `\mathpunct`, `\mathinner`, and `\mathop`
    * Add `\textrm`, `\textit`, `\textbf`, `\texttt`, `\textsf`, and `\textnormal`
    * Combine adjacent spans in text mode (performance)
    * Don't apply italic correction in text mode (bug fix)
    * Fix the MathML fence attribute on delimiters (bug fix)
    * Fix converting bins to ords (bug fix)
    * Make `\llap` and `\rlap` produce ords (bug fix)
    * Fix spacing around `\color`, `\mathbf`, and in other places (bug fix)
    * Add per-style font metrics (bug fix)
    * Fix subscript positioning with changed-font bases (bug fix)
    * Fix superscript/subscript centering in fractions (bug fix)

= 1.6.0+1 =
* Removed dependency on jQuery
* Code cleanup
* Accessibility improvements
* Minor text fixes

= 1.6.0 =
* Update KaTeX library to 0.6.0
    * Introduce the `aligned` environment.
    * Add `\gt` and `\lt`.
    * Fix sub- and super-scripts not being centered inside of math display.
    * Add `\underline` support.
    * Remove 3px border around rules (bug fix).
    * Set the greediness of font functions to 2 so that `e^\mathbf{x}` will parse (bug fix).
* Optimize script loading (again)

= 1.5.1+1 =
* Fix issue with wptexturize causing syntax errors
* Optimize script loading

= 1.5.1 =
* Update KaTeX library to 0.5.1
    * Add the font changing functions `\mathrm`, `\mathit`, `\mathbf`, `\mathbb`, `\mathcal`, `\mathfrak`, `\mathscr`, `\mathsf`, `\mathtt`, `\Bbb`, `\bold`, and `\frak`.
    * Add the `\limits` and `\nolimits` functions.
    * Add support for `|` column delimiters in the `array` environment.
    * Add `\lVert` and `\rVert` symbols.
    * Allow `\lvert`, `\rvert`, `\lVert`, `\rVert`, `\lgroup`, `\rgroup`, `\lmoustache`, and `\rmoustache` in delimiters.
    * Fix the spacing of the `\ulcorner`, `\urcorner`, `\llcorner`, `\lrcorner`, `\barwedge`, `\veebar`, `\circledcirc`, `\boxdot`, `\uparrow`, `\Uparrow`, `\downarrow`, `\Downarrow`, `\updownarrow`, `\Updownarrow`, and `\ldots` symbols.

= 1.5.0 =
* Update KaTeX library to 0.5.0
    * Add the `cases` and `Bmatrix` environments.
    * Add `\checkmark` and `\circledR` symbols.
	* Improve display of fonts at smaller sizes.
	* Improve the spacing inside fractions.
	* Correctly set environments to the ord type.
= 1.4.3 =
* Update KaTeX library to 0.4.3
    * Added support for some `\begin ... \end` environments, including support for `array`, `matrix`, `pmatrix`, `bmatrix`, `vmatrix`, and `Vmatrix`
    * Added support for optional `\sqrt` arguments, e.g. `\sqrt[3]{x}`
= 1.3.0.1 =
* New: render equations in display mode with `[latex display="true"]...[/latex]`
* Update KaTeX library to 0.3.0
    * Added accessibility through the use of MathML
    * Add support for new symbols: `\#`, `\&`, `\aleph`, `\amalg`, `\approxeq`, `\ast`, `\asymp`, `\backepsilon`, `\backprime`, `\backsim`, `\backsimeq`, `\Bbbk`, `\because`, `\beth`, `\between`, `\bigcirc`, `\bigstar`, `\blacklozenge`, `\blacksquare`, `\blacktriangle`, `\blacktriangledown`, `\blacktriangleleft`, `\blacktriangleright`, `\bowtie`, `\Box`, `\boxminus`, `\boxplus`, `\boxtimes`, `\bullet`, `\bumpeq`, `\Bumpeq`, `\Cap`, `\cdotp`, `\centerdot`, `\circeq`, `\circlearrowleft`, `\circlearrowright`, `\circledast`, `\circleddash`, `\circledS`, `\clubsuit`, `\complement`, `\Cup`, `\curlyeqprec`, `\curlyeqsucc`, `\curlyvee`, `\curlywedge`, `\curvearrowleft`, `\curvearrowright`, `\dag`, `\daleth`, `\dashleftarrow`, `\dashrightarrow`, `\dashv`, `\ddag`, `\ddagger`, `\diagdown`, `\diagup`, `\Diamond`, `\diamondsuit`, `\digamma`, `\divideontimes`, `\doteq`, `\Doteq`, `\doteqdot`, `\dotplus`, `\doublebarwedge`, `\doublecap`, `\doublecup`, `\downdownarrows`, `\downharpoonleft`, `\downharpoonright`, `\ell`, `\eqcirc`, `\eqsim`, `\eqslantgtr`, `\eqslantless`, `\equiv`, `\eth`, `\exists`, `\fallingdotseq`, `\Finv`, `\flat`, `\forall`, `\frown`, `\Game`, `\geqq`, `\geqslant`, `\gg`, `\ggg`, `\gggtr`, `\gimel`, `\gnapprox`, `\gneq`, `\gneqq`, `\gnsim`, `\gtrapprox`, `\gtrdot`, `\gtreqless`, `\gtreqqless`, `\gtrless`, `\gtrsim`, `\gvertneqq`, `\hbar`, `\heartsuit`, `\hookleftarrow`, `\hookrightarrow`, `\hslash`, `\Im`, `\intercal`, `\Join`, `\ldotp`, `\leadsto`, `\Leftarrow`, `\leftarrowtail`, `\leftharpoondown`, `\leftharpoonup`, `\leftleftarrows`, `\leftrightarrow`, `\Leftrightarrow`, `\leftrightarrows`, `\leftrightharpoons`, `\leftrightsquigarrow`, `\leftthreetimes`, `\leqq`, `\leqslant`, `\lessapprox`, `\lessdot`, `\lesseqgtr`, `\lesseqqgtr`, `\lessgtr`, `\lesssim`, `\lgroup`, `\lhd`, `\ll`, `\llcorner`, `\Lleftarrow`, `\lll`, `\llless`, `\lmoustache`, `\lnapprox`, `\lneq`, `\lneqq`, `\lnsim`, `\longleftarrow`, `\Longleftarrow`, `\longleftrightarrow`, `\Longleftrightarrow`, `\longmapsto`, `\longrightarrow`, `\Longrightarrow`, `\looparrowleft`, `\looparrowright`, `\lozenge`, `\lrcorner`, `\Lsh`, `\ltimes`, `\lvertneqq`, `\mapsto`, `\measuredangle`, `\mho`, `\mid`, `\mp`, `\multimap`, `\nabla`, `\natural`, `\ncong`, `\nearrow`, `\nexists`, `\ngeqq`, `\ngeqslant`, `\ngtr`, `\ni`, `\nleftarrow`, `\nLeftarrow`, `\nleftrightarrow`, `\nLeftrightarrow`, `\nleqq`, `\nleqslant`, `\nless`, `\nmid`, `\nparallel`, `\nprec`, `\npreceq`, `\nrightarrow`, `\nRightarrow`, `\nshortmid`, `\nshortparallel`, `\nsim`, `\nsubseteqq`, `\nsucc`, `\nsucceq`, `\nsupseteqq`, `\ntriangleleft`, `\ntrianglelefteq`, `\ntriangleright`, `\ntrianglerighteq`, `\nvdash`, `\nvDash`, `\nVdash`, `\nVDash`, `\nwarrow`, `\ominus`, `\owns`, `\parallel`, `\perp`, `\phantom`, `\pitchfork`, `\prec`, `\precapprox`, `\preccurlyeq`, `\preceq`, `\precnapprox`, `\precneqq`, `\precnsim`, `\precsim`, `\propto`, `\Re`, `\restriction`, `\rgroup`, `\rhd`, `\Rightarrow`, `\rightarrowtail`, `\rightharpoondown`, `\rightharpoonup`, `\rightleftarrows`, `\rightleftharpoons`, `\rightrightarrows`, `\rightsquigarrow`, `\rightthreetimes`, `\risingdotseq`, `\rmoustache`, `\Rrightarrow`, `\Rsh`, `\rtimes`, `\searrow`, `\sharp`, `\shortmid`, `\shortparallel`, `\sim`, `\simeq`, `\smallfrown`, `\smallsetminus`, `\smallsmile`, `\smile`, `\spadesuit`, `\sphericalangle`, `\sqcap`, `\sqcup`, `\sqsubset`, `\sqsubseteq`, `\sqsupset`, `\sqsupseteq`, `\square`, `\Subset`, `\subseteqq`, `\subsetneq`, `\subsetneqq`, `\succ`, `\succapprox`, `\succcurlyeq`, `\succeq`, `\succnapprox`, `\succneqq`, `\succnsim`, `\succsim`, `\Supset`, `\supseteqq`, `\supsetneq`, `\supsetneqq`, `\swarrow`, `\therefore`, `\thickapprox`, `\thicksim`, `\triangledown`, `\trianglelefteq`, `\triangleq`, `\trianglerighteq`, `\twoheadleftarrow`, `\twoheadrightarrow`, `\ulcorner`, `\unlhd`, `\unrhd`, `\upharpoonleft`, `\upharpoonright`, `\uplus`, `\upuparrows`, `\urcorner`, `\varkappa`, `\varpropto`, `\varsubsetneq`, `\varsubsetneqq`, `\varsupsetneq`, `\varsupsetneqq`, `\vartriangle`, `\vartriangleleft`, `\vartriangleright`, `\vdash`, `\vDash`, `\Vdash`, `\Vvdash`, `\wp`, `\wr`, `\yen`

= 1.1.1 = 
* Fix bug with script enqueueing

= 1.1.0 =
* Update the KaTeX library to version 0.1.1

= 1.0.1 =
* Fix `\displaystyle` equations not being put on a new line

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.8.3 =
Lots of commands and features now supported

= 1.7.0 =
New rendering method and a few new commands now supported

= 1.6.0 = 
Add support for `aligned`, `\gt`, `\lt`, and `\underline`

= 1.5.1+1 =
Fixed issue with wptexturize causing syntax errors

= 1.5.0 =
Updated KaTeX library - adds support for more TeX commands

= 1.4.0 =
Updated KaTeX library - adds support for more TeX commands

= 1.3.0.1 =
Add support for a lot of LaTeX symbols
