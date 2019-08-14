# WP-KaTeX 
**Contributors:** ascom  
**Donate link:** https://andrewsun.com/donate/  
**Tags:** katex, latex, mathjax, math, equation, equations, tex  
**Requires at least:** 3.9  
**Tested up to:** 5.2  
**Stable tag:** 1.11.0  
**Requires PHP:** 5.3  
**License:** GPL2  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  

Integrates the super-fast KaTeX LaTeX equation typesetting engine with WordPress. Create beautiful, yet performant math in your posts and pages.


## Description 
The KaTeX WordPress plugin integrates the super-fast [KaTeX math typesetting engine](https://github.com/Khan/KaTeX) with your WordPress website. The plugin allows you to put LaTeX in a `[latex]...[/latex]` shortcode, and beautiful math appears on your post or page. 

The plugin also has an option to use the excellent [jsDelivr CDN](http://www.jsdelivr.com) to load the KaTeX scripts, further increasing the performance of the plugin.

Equations in `[latex display="true"]...[/latex]` will be rendered in display mode (rather than inline mode) and centered on its own line.

[Plugin Website](https://andrewsun.com/projects/wp-katex/)


## Installation 
1. Upload the `katex` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Disable any plugins that may interfere with this plugin, such as Jetpack's Beautiful Math module
1. Use the `[latex]` shortcode in your posts and pages


## Frequently Asked Questions 

### Wait - I use MathJax and it's fine! 

KaTeX is fast. It's really fast, compared to MathJax. In fact, it's a staggering 35 times faster than MathJax. Your page will load much faster with KaTeX, especially if it's heavy with equations.


### How about Jetpack? 

Jetpack has a LaTeX plugin that uses the WordPress.com service to render the equations. However, it uses images, which look ugly when zoomed in, or on high-DPI ("retina") displays. Also, it depends on WordPress.com's servers, and a lot of equations can make the page slow (too many requests).


## Screenshots 

### 1. Various equations rendered with WP-KaTeX
![Various equations rendered with WP-KaTeX](https://ps.w.org/wp-katex/assets/screenshot-1.png)



## Changelog 

### 1.11.0 
* Updated KaTeX library to 0.11.0
    * Added:
        - **BREAKING CHANGE:** trust setting to indicate whether input text is trusted (#1794)
          - `\href` and `\url` will break without adjusting the trust setting
          - This is currently not supported by the plugin
        - Add test for double square brackets to katex-spec (#1956)
        - Add option to render only MathML so that its visible (#1966)
        - Support {smallmatrix}, {subarray}, and \substack (#1969)
        - Enable minRuleThickness in rendering options (#1964)
        - Add \plim (#1952)
        - Support Unicode \digamma (#2010)
        - Support \operatorname* (#1899)
        - Support \includegraphics, with appropriate trust setting (#2053)

    * Changed:
        - Document mhchem \cf not supported (use \ce instead) (#2008)
        - Unicode characters in math render in text mode (#2040)

    * Fixed:
        - Improve output of fonts in MathML (#1965)
        - Fix \pmb (#1924)
        - \color affects following \right, put array cells in their own groups (#1845)
        - Improve MathML for classes (#1929)
        - Prevent gaps in tall delimiters (#1986)
        - Fix \sqrt SVG path (#2009)
        - Do not force sizing groups to display inline-block (#2044)
        - Fix font choice in operators like \log (e.g. \boldsymbol{\log}) (#2041)
        - Fix argument font sizing in \fbox and \raisebox, fix font sizing in \TeX, \LaTeX, \KaTeX (#1787)
* Updated KaTeX library to 0.10.2
    - Added:
        - Approximate font metrics only when metrics don't exist (#1898)
        - Add KaTeX version to stylesheet and troubleshooting guide (#1893)
        - Add symbol double square brackets (#1947, #1954)
        - Support double-square curly braces (#1953)

    - Changed:
        - Added 'katex-element' (#1905)
        - Include extensions mhchem & copy-tex in home-page (#1932)

    - Fixed:
        - Fix \Rho (#1870)
        - Fix nested \dfrac (#1825)
        - Improve MathML accents (#1877)
        - Improve MathML for \overset, \stackrel, and \underset (#1886)
        - Fix \not (U+E020) RBearing (width) (#1878)
        - Fix ApplyFunction character (#1890)
        - Improve MathML for \limits (#1897)
        - Improve MathML for \hphantom and \vphantom (#1883)
        - Improve MathML for \coloneqq, \dblcolon, \eqcolon, and \eqqcolon (#1889)
        - Improve MathML for \brace (#1884)
        - Fix \middle spacing (#1906)
        - Get a tall \middle\vert from MathML (#1911)
        - Improve more coloneq (#1902)
        - Make \smallint small in \displaystyle (#1907)
        - Improve MathML for characters in Unicode private use area (#1908)
        - Improve MathML for extensible arrows (#1901)
        - Improve MathML for \rule (#1912)
        - Improve MathML for fractions (#1882)
        - Improve MathML for \tag (#1915)
        - Improve MathML for \colorbox and \fcolorbox (#1914)
        - Improve MathML for environments (#1910)
        - Improve MathML for \genfrac barline (#1925)
        - Support \textup and \textmd (#1921) 
        - Improve MathML for \not (#1923)
        - Improve MathML for \Bbbk (#1930)
        - Prevent inadvertent tall delims (#1948)

    - Removed
        - Re-added code for \includegraphics but disabled the function until trust settings is merged (#1951) 



### 1.10.1 
* Updated KaTeX library to 0.10.1
    * Added
        - ECMAScript module for contrib (#1624)
        - mhchem extension (#1436)
        - auto-render: optional pre-process callback (#1784)
        - \argmax and \argmin (#1820)
        - \textbackslash and \textasciicircum (#1839)
        - leqno and fleqn support (#1814)

    * Fixed
        - Support blackboard bold in text mode (#1757)
        - Fix spacings in semisimple groups (#1706)
        - Fix parsing comments (#1789)
        - Fix \\ and \newline after operator (#1796)
        - Fix \hphantom width (#1809)
        - Remove double encoding in MathML (#1813)
        - Fix Unicode bigcup (#1836)
        - Fix \genfrac w/ empty delimiter arguments (#1816)
        - \fbox inherits default color (#1847)
        - Fix \not and \neq on Chrome 72 (#1852)


### 1.10.0 
* Updated KaTeX library to 0.10.0
    * Added
        - Unicode: °, delimiters, 1D400-1D7FF, \ll, \lll, ≘≙≚≛≝≞≟, Unicode Mathematical Alphanumeric Symbols, ⟂ ¬ ⊨ ‼ ∌ ≲ ⩽ ⪅ ≶ ⋚ ⪋, corner, ⟦⟧ (#1203, #1207, #1260, #1273, #1274, #1232, #1377, #1389, #1459, #1750)
        - \yen support on text mode (#1208)
        - `\(` (#1213)
        - Add defineSymbol to the main katex object (#1263)
        - Capital Greek letters (#1283, #1285)
        - Add version to katex object (#1279, #1475)
        - \copyright, \textregistered, \textcircled (#1073)
        - Tilde \textasciitilde (#1286)
        - Line breaks for inline formulas (#1287)
        - \hline (#1306)
        - Top-level \newline and `\\` in inline math (#1298)
        - Strict mode, unicode text in math mode (#1117, #1278)
        - Strict setting for \newline display-mode behavior (#1314)
        - Allow all Unicode symbols in nonstrict mode (#1217)
        - \tag, \tag*, and \gdef (#1309)
        - \def, \gdef, and \global\def (#1348, #1425)
        - Change default maxExpand limit to 1000 (#1383)
        - \cfrac (#1392)
        - \arraystretch as a macro definition (#1381)
        - Add ability to create a dashed vertical line in arrays, using ':' (#1395)
        - \widecheck (#1406)
        - \hdashline (#1407)
        - \newcommand, \renewcommand, \providecommand (#1382)
        - Add a utility function (setFontMetrics) to extend builtin fontMetrics (#1269)
        - \oiint and \oiiint (#1430)
        - Remove `match-at` dependency, use RegExp for lexer (#1447)
        - \brace and \brack (#1453)
        - Allow only allowed protocols in \href (#1440)
          - **BREAKING CHANGE:** Only "http", "https", "mailto", and relative URLs are allowed in \href and \url by default.
        - \genfrac and \above (#1455, #1458)
        - \char character escaping and nicer MathML via \html@mathml (#1454)
        - \@binrel (#1487)
        - \pmb (#1418)
        - 6-digit color without # (#1690)
        - \mathnormal (#1700)
        - \lparen and \rparen (#1741)
        - `\>` (#1752)
    * Fixed:
        - Fix nested math mode in non-default text mode (#1111)
        - Fix contenteditable mode (#1179)
        - Work around negative space bug in Chrome (#1194)
        - Fix \nobreakspace (#1200)
        - Fix instant mode switching for $, \(, \text (#1213)
        - Add metrics for \S and \P (#1224)
        - Fix anchor.toMarkup (#1246)
        - Specify height for SVG elements (#1252)
        - Include Bold-Italic fonts for \boldsymbol (#1257)
        - Fix space width in \texttt (#1261)
        - Fix \underset (#1277)
        - Remove special \verb space handling now that space is in Typewriter-Regular (#1258)
        - Switch makeGlue from .mord .rule to .mspace (#1295)
        - Fix ~ in \verb (#1286)
        - Stop throwing ParseError when throwOnError is false (#1169, #1302, #1308)
        - Fix extensible arrow sup vertical alignment (#1256)
        - Adjust \underset alignment and spacing (#1290)
        - Revert frac-lines and \rule to borders (min-height) (#1249, #1417, #1594)
        - Fix vertical alignment of \underbrace (#1304)
        - Use one strut instead of two (#1307)
        - Fix MacroExpander space handling (#1314)
        - Cleanup MathML `<mrow>`, `<mtext>`, `<mn>` (#1338)
        - Fix lap vertical alignment. (#1162)
        - Fix nested \tfrac (#1370)
        - Fix \coloneq etc (#1372)
        - Fix wide character spacing (#1371)
        - Fix auto-render \\[…] bug (#1375)
        - Rewrite spacing commands as macros (#1156)
        - Enable output modules to be used in browser or Node (#1401)
        - Add vertical kern to \vdots (#1402)
        - Implement \neq and \notin via macros like LaTeX's (#1400, #1499)
        - Improve \cancel (#1398)
        - Fix ligatures vs. \tt (#1379)
        - Implement \colon as amsmath does (#1410)
        - Automatic mrel/mbin spacing for \boldsymbol (#1388)
        - Phantom text (#1449)
        - Fix arrowheads for mhchem <--> (#1451)
        - Set `documentFragment.style` to empty object (#1471)
        - Remove tree cloning before building HTML (#1470)
        - Fix \operatorname to support general math functions (#1461)
        - Use \not character without left side-bearing correction (#1267)
        - Remove codes that require expensive polyfill (#1469, #1563, #1591, #1597)
        - Fix \not vertical alignment (#1497)
        - Comments without terminating newlines, \href fixes, \url support (#1529)
        - Fix \textdaggerdbl (#1539)
        - Fix \neq (#1548, #1574)
        - Fix wide characters (#1549)
        - Fix \fbox (#1550)
        - Fix \Large roots (#1485)
        - Remove duplicate defineFunction invocation for \mathop (#1701)
        - Fix tag positioning to live within katex-html parent (#1721)
        - Fix \mathit font and italic correction (#1700)


### 1.9.1 
* Fix bug causing all equations to show in display style


### 1.9.0 
* Code cleanup and other minor improvements
* Updated KaTeX library to 0.9.0
    * Fixed:
        - Fixed exponential behavior in accent production. [#834](https://github.com/Khan/KaTeX/pull/834)
        - Use mpadded for `\raisebox` MathML. [#876](https://github.com/Khan/KaTeX/pull/876)
        - Array/Matrix environments do not trim newlines. Fixed [#337](https://github.com/Khan/KaTeX/issues/337). PR is [#479](https://github.com/Khan/KaTeX/pull/479).
        - Fixed space handling. [#912](https://github.com/Khan/KaTeX/pull/912)
        - Prevents disappearing fraction lines. [#931](https://github.com/Khan/KaTeX/pull/931)
        - Fixed the spacing between columns in the {aligned} environment. [#942](https://github.com/Khan/KaTeX/pull/942)
        - Fixed issue where the {aligned} environment skips the last line if the first column is empty. [#949](https://github.com/Khan/KaTeX/pull/949)
        - Appended `ApplyFunction` to math functions in MathML. [#960](https://github.com/Khan/KaTeX/pull/960)
        - Changed `\undertilde` to `\utilde`. [#948](https://github.com/Khan/KaTeX/pull/948)
        - Changed `frac-line` from border to full span. [#976](https://github.com/Khan/KaTeX/pull/976)
        - Avoid negative space in `\bmod`. [#984](https://github.com/Khan/KaTeX/pull/984)
        - Stacking text commands. [#1009](https://github.com/Khan/KaTeX/pull/1009)
        - Fixed `\vec` by replacing the combining font glyph with an SVG. [#1018](https://github.com/Khan/KaTeX/pull/1018)
        - Made accents zero width. [#1033](https://github.com/Khan/KaTeX/pull/1033)
        - Fixed frac-line. [#1025](https://github.com/Khan/KaTeX/pull/1025)
        - Implemented correct macros for `liminf` and `limsup`. Fixed [#111](https://github.com/Khan/KaTeX/issues/111)
        - `\kern` generates right-margin instead of left-margin. Fixed [#995](https://github.com/Khan/KaTeX/issues/995)
        - Do not inherit SVG style properties from the environment. [#1089](https://github.com/Khan/KaTeX/pull/1089)
        - Update fonts and metrics so that accents are positioned correctly [#1094](https://github.com/Khan/KaTeX/pull/1094)
        - Use correct spacing with tight styles. See [#1106](https://github.com/Khan/KaTeX/pull/1106) for more details.
        - Improved JS spacing [#1103](https://github.com/Khan/KaTeX/pull/1103)
        - Fixed handling of Unicode characters ð, Å, å [#1157](https://github.com/Khan/KaTeX/pull/1157)
        - Padding over `\sqrt` and Paths for frac-line [#1143](https://github.com/Khan/KaTeX/pull/1143)
    * Added:
        - Added `\smash`, laps, spaces, and phantoms. [#833](https://github.com/Khan/KaTeX/pull/833)
        - Support for `\raisebox`, `\operatorname`, `\And`, `\colorbox`, `\fcolorbox` and `\verb`.
        - Added support for comments.
        - Added Unicode Relations and Unicode Symbol support. Supports Unicode ∴, ∵, `\mid`, Arrows, Big Operators, Binary Operators, Negated Relations.
        - Implemented the `alignedat` environment for flexible math spacing. [#930](https://github.com/Khan/KaTeX/pull/930)
        - Implemented `\mathchoice` command. [#969](https://github.com/Khan/KaTeX/pull/969)
        - Implemented `\href` command. [#923](https://github.com/Khan/KaTeX/pull/923)
        - `\hspace*`, `\@ifstar`, `\@ifnextchar`, `\@firstoftwo` (#975)
        - Added `\notni` character `∌`. [#710](https://github.com/Khan/KaTeX/pull/710)
        - `\kern` fixed and support `\hskip`, `\TeX`, `\LaTeX`, `\KaTeX`. See [#974](https://github.com/Khan/KaTeX/pull/974)
        - Supported Unicode middle dot and Unicode accents.
        - Added basic support for Indic scripts in addition to CJK. [#1060](https://github.com/Khan/KaTeX/pull/1060)
        - Added support for bold italic symbols. [#1011](https://github.com/Khan/KaTeX/pull/1011)
        - add `\ae`, `\AE`, `\oe`, `\OE`, `\o`, `\O`, `\ss` with unicode support for those characters in text mode. [#1030](https://github.com/Khan/KaTeX/pull/1030)
        - Added `\i` and `\j` for text mode. [#1029](https://github.com/Khan/KaTeX/pull/1029)
        - Implemented `\TextOrMath`, @secondoftwo. [#1024](https://github.com/Khan/KaTeX/pull/1024)
        - Added support for `\aa`, `\AA`, `\lq`, `\rq`, `\lbrack`, `\rbrack` [#1069](https://github.com/Khan/KaTeX/pull/1069)
        - Added support for more scripts in `\text{}` environments such as Czech, Georgian, Hungarian, Turkish. [#1076](https://github.com/Khan/KaTeX/pull/1076)
        - add Main-BoldItalic font to allow nesting of `\textit` and `\textbf`
        - Added `\S` and `\P` [#1110](https://github.com/Khan/KaTeX/pull/1110)
        - Italic Greek capital letters [#1118](https://github.com/Khan/KaTeX/pull/1103)
        - Added support for `\mathring` [#1125](https://github.com/Khan/KaTeX/pull/1125)
        - Added support for unicode angle brackets, single vertical bar, double vertical bar [#1123](https://github.com/Khan/KaTeX/pull/1123)
        - Added support for Reaction Arrows [#1078](https://github.com/Khan/KaTeX/pull/1078)
        - Added `\nobreakspace` [#1145](https://github.com/Khan/KaTeX/pull/1145)
        - Added support for Unicode colon equals ≔ [#1151](https://github.com/Khan/KaTeX/pull/1151)
        - Added support for `\underline` in text mode [#1159](https://github.com/Khan/KaTeX/pull/1159)
    * Changed:
        - Advanced macro support and magic `\dots`. [#794](https://github.com/Khan/KaTeX/pull/794)
        - Allow sizing commands inside optional groups. [#885](https://github.com/Khan/KaTeX/pull/885)
        - Upgraded `\sqrt` zoom and width. [#890](https://github.com/Khan/KaTeX/pull/890)
        - Single-character macros like active characters. [#973](https://github.com/Khan/KaTeX/pull/973)
        - Changed `\xLongequal` to `\xlongequal`. [#997](https://github.com/Khan/KaTeX/pull/997)
        - Enable spacing functions in text mode [#1139](https://github.com/Khan/KaTeX/pull/1139)
    * Breaking changes:
        - `\llap` and `\rlap` now render contents in math mode. Use `\mathllap` (new) and `\mathrlap` (new) if you need the previous behavior.



### 1.8.3 
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



### 1.7.0 
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


### 1.6.0+1 
* Removed dependency on jQuery
* Code cleanup
* Accessibility improvements
* Minor text fixes


### 1.6.0 
* Update KaTeX library to 0.6.0
    * Introduce the `aligned` environment.
    * Add `\gt` and `\lt`.
    * Fix sub- and super-scripts not being centered inside of math display.
    * Add `\underline` support.
    * Remove 3px border around rules (bug fix).
    * Set the greediness of font functions to 2 so that `e^\mathbf{x}` will parse (bug fix).
* Optimize script loading (again)


### 1.5.1+1 
* Fix issue with wptexturize causing syntax errors
* Optimize script loading


### 1.5.1 
* Update KaTeX library to 0.5.1
    * Add the font changing functions `\mathrm`, `\mathit`, `\mathbf`, `\mathbb`, `\mathcal`, `\mathfrak`, `\mathscr`, `\mathsf`, `\mathtt`, `\Bbb`, `\bold`, and `\frak`.
    * Add the `\limits` and `\nolimits` functions.
    * Add support for `|` column delimiters in the `array` environment.
    * Add `\lVert` and `\rVert` symbols.
    * Allow `\lvert`, `\rvert`, `\lVert`, `\rVert`, `\lgroup`, `\rgroup`, `\lmoustache`, and `\rmoustache` in delimiters.
    * Fix the spacing of the `\ulcorner`, `\urcorner`, `\llcorner`, `\lrcorner`, `\barwedge`, `\veebar`, `\circledcirc`, `\boxdot`, `\uparrow`, `\Uparrow`, `\downarrow`, `\Downarrow`, `\updownarrow`, `\Updownarrow`, and `\ldots` symbols.


### 1.5.0 
* Update KaTeX library to 0.5.0
    * Add the `cases` and `Bmatrix` environments.
    * Add `\checkmark` and `\circledR` symbols.
    * Improve display of fonts at smaller sizes.
    * Improve the spacing inside fractions.
    * Correctly set environments to the ord type.

### 1.4.3 
* Update KaTeX library to 0.4.3
    * Added support for some `\begin ... \end` environments, including support for `array`, `matrix`, `pmatrix`, `bmatrix`, `vmatrix`, and `Vmatrix`
    * Added support for optional `\sqrt` arguments, e.g. `\sqrt[3]{x}`

### 1.3.0.1 
* New: render equations in display mode with `[latex display="true"]...[/latex]`
* Update KaTeX library to 0.3.0
    * Added accessibility through the use of MathML
    * Add support for new symbols: `\#`, `\&`, `\aleph`, `\amalg`, `\approxeq`, `\ast`, `\asymp`, `\backepsilon`, `\backprime`, `\backsim`, `\backsimeq`, `\Bbbk`, `\because`, `\beth`, `\between`, `\bigcirc`, `\bigstar`, `\blacklozenge`, `\blacksquare`, `\blacktriangle`, `\blacktriangledown`, `\blacktriangleleft`, `\blacktriangleright`, `\bowtie`, `\Box`, `\boxminus`, `\boxplus`, `\boxtimes`, `\bullet`, `\bumpeq`, `\Bumpeq`, `\Cap`, `\cdotp`, `\centerdot`, `\circeq`, `\circlearrowleft`, `\circlearrowright`, `\circledast`, `\circleddash`, `\circledS`, `\clubsuit`, `\complement`, `\Cup`, `\curlyeqprec`, `\curlyeqsucc`, `\curlyvee`, `\curlywedge`, `\curvearrowleft`, `\curvearrowright`, `\dag`, `\daleth`, `\dashleftarrow`, `\dashrightarrow`, `\dashv`, `\ddag`, `\ddagger`, `\diagdown`, `\diagup`, `\Diamond`, `\diamondsuit`, `\digamma`, `\divideontimes`, `\doteq`, `\Doteq`, `\doteqdot`, `\dotplus`, `\doublebarwedge`, `\doublecap`, `\doublecup`, `\downdownarrows`, `\downharpoonleft`, `\downharpoonright`, `\ell`, `\eqcirc`, `\eqsim`, `\eqslantgtr`, `\eqslantless`, `\equiv`, `\eth`, `\exists`, `\fallingdotseq`, `\Finv`, `\flat`, `\forall`, `\frown`, `\Game`, `\geqq`, `\geqslant`, `\gg`, `\ggg`, `\gggtr`, `\gimel`, `\gnapprox`, `\gneq`, `\gneqq`, `\gnsim`, `\gtrapprox`, `\gtrdot`, `\gtreqless`, `\gtreqqless`, `\gtrless`, `\gtrsim`, `\gvertneqq`, `\hbar`, `\heartsuit`, `\hookleftarrow`, `\hookrightarrow`, `\hslash`, `\Im`, `\intercal`, `\Join`, `\ldotp`, `\leadsto`, `\Leftarrow`, `\leftarrowtail`, `\leftharpoondown`, `\leftharpoonup`, `\leftleftarrows`, `\leftrightarrow`, `\Leftrightarrow`, `\leftrightarrows`, `\leftrightharpoons`, `\leftrightsquigarrow`, `\leftthreetimes`, `\leqq`, `\leqslant`, `\lessapprox`, `\lessdot`, `\lesseqgtr`, `\lesseqqgtr`, `\lessgtr`, `\lesssim`, `\lgroup`, `\lhd`, `\ll`, `\llcorner`, `\Lleftarrow`, `\lll`, `\llless`, `\lmoustache`, `\lnapprox`, `\lneq`, `\lneqq`, `\lnsim`, `\longleftarrow`, `\Longleftarrow`, `\longleftrightarrow`, `\Longleftrightarrow`, `\longmapsto`, `\longrightarrow`, `\Longrightarrow`, `\looparrowleft`, `\looparrowright`, `\lozenge`, `\lrcorner`, `\Lsh`, `\ltimes`, `\lvertneqq`, `\mapsto`, `\measuredangle`, `\mho`, `\mid`, `\mp`, `\multimap`, `\nabla`, `\natural`, `\ncong`, `\nearrow`, `\nexists`, `\ngeqq`, `\ngeqslant`, `\ngtr`, `\ni`, `\nleftarrow`, `\nLeftarrow`, `\nleftrightarrow`, `\nLeftrightarrow`, `\nleqq`, `\nleqslant`, `\nless`, `\nmid`, `\nparallel`, `\nprec`, `\npreceq`, `\nrightarrow`, `\nRightarrow`, `\nshortmid`, `\nshortparallel`, `\nsim`, `\nsubseteqq`, `\nsucc`, `\nsucceq`, `\nsupseteqq`, `\ntriangleleft`, `\ntrianglelefteq`, `\ntriangleright`, `\ntrianglerighteq`, `\nvdash`, `\nvDash`, `\nVdash`, `\nVDash`, `\nwarrow`, `\ominus`, `\owns`, `\parallel`, `\perp`, `\phantom`, `\pitchfork`, `\prec`, `\precapprox`, `\preccurlyeq`, `\preceq`, `\precnapprox`, `\precneqq`, `\precnsim`, `\precsim`, `\propto`, `\Re`, `\restriction`, `\rgroup`, `\rhd`, `\Rightarrow`, `\rightarrowtail`, `\rightharpoondown`, `\rightharpoonup`, `\rightleftarrows`, `\rightleftharpoons`, `\rightrightarrows`, `\rightsquigarrow`, `\rightthreetimes`, `\risingdotseq`, `\rmoustache`, `\Rrightarrow`, `\Rsh`, `\rtimes`, `\searrow`, `\sharp`, `\shortmid`, `\shortparallel`, `\sim`, `\simeq`, `\smallfrown`, `\smallsetminus`, `\smallsmile`, `\smile`, `\spadesuit`, `\sphericalangle`, `\sqcap`, `\sqcup`, `\sqsubset`, `\sqsubseteq`, `\sqsupset`, `\sqsupseteq`, `\square`, `\Subset`, `\subseteqq`, `\subsetneq`, `\subsetneqq`, `\succ`, `\succapprox`, `\succcurlyeq`, `\succeq`, `\succnapprox`, `\succneqq`, `\succnsim`, `\succsim`, `\Supset`, `\supseteqq`, `\supsetneq`, `\supsetneqq`, `\swarrow`, `\therefore`, `\thickapprox`, `\thicksim`, `\triangledown`, `\trianglelefteq`, `\triangleq`, `\trianglerighteq`, `\twoheadleftarrow`, `\twoheadrightarrow`, `\ulcorner`, `\unlhd`, `\unrhd`, `\upharpoonleft`, `\upharpoonright`, `\uplus`, `\upuparrows`, `\urcorner`, `\varkappa`, `\varpropto`, `\varsubsetneq`, `\varsubsetneqq`, `\varsupsetneq`, `\varsupsetneqq`, `\vartriangle`, `\vartriangleleft`, `\vartriangleright`, `\vdash`, `\vDash`, `\Vdash`, `\Vvdash`, `\wp`, `\wr`, `\yen`


### 1.1.1 
* Fix bug with script enqueueing


### 1.1.0 
* Update the KaTeX library to version 0.1.1


### 1.0.1 
* Fix `\displaystyle` equations not being put on a new line


### 1.0 
* Initial release


## Upgrade Notice 


### 1.8.3 
Lots of commands and features now supported


### 1.7.0 
New rendering method and a few new commands now supported


### 1.6.0 
Add support for `aligned`, `\gt`, `\lt`, and `\underline`


### 1.5.1+1 
Fixed issue with wptexturize causing syntax errors


### 1.5.0 
Updated KaTeX library - adds support for more TeX commands


### 1.4.0 
Updated KaTeX library - adds support for more TeX commands


### 1.3.0.1 
Add support for a lot of LaTeX symbols
