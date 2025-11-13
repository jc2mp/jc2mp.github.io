<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8"/><title>Lua/Tutorials/Beginner/Client-side scripts - JC2-MP Documentation</title>
<meta name="generator" content="MediaWiki 1.22.1"/>
<meta name="robots" content="noindex,follow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok2v=964071af18/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"28a0341ec71bff3a55163a76b545f595383a97f6-1390193691-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok2v=221574e73d/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.jc-mp.com/api.php?action=rsd"/>
<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html"/>
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom"/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=ext.geshi.local%7Cmediawiki.legacy.commonPrint%2Cshared&amp;only=styles&amp;printable=1&amp;skin=cavendish&amp;*"/>
<link rel="stylesheet" href="/skins/cavendish/print.css?303" media=""/><meta name="ResourceLoaderDynamicStyles" content=""/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;printable=1&amp;skin=cavendish&amp;*"/>
<style>a:lang(ar),a:lang(ckb),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}</style>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;printable=1&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Tutorials/Beginner/Client-side_scripts","wgTitle":"Lua/Tutorials/Beginner/Client-side scripts","wgCurRevisionId":24768,"wgRevisionId":24768,"wgArticleId":3735,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Tutorials/Beginner/Client-side_scripts","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function(){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"disablesuggest":0,"editfont":"default","editondblclick":0,"editsection":1,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":0,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"justify":0,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nocache":0,"noconvertlink":0,"norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rememberpassword":0,"rows":25,"searchlimit":20,"showhiddencats":0,"shownumberswatching":1,"showtoc":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"vector-simplesearch":1,"watchcreations":0,"watchdefault":0,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":
0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function(){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:d6cee38fd88e62c412a64f3888b013b1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
<style type="text/css">.source-lua{line-height:normal;}.source-lua li,.source-lua pre{line-height:normal;border:0px none white;}.lua.source-lua .de1,.lua.source-lua .de2{font:normal normal 1em/1.2em monospace;margin:0;padding:0;background:none;vertical-align:top;font-family:monospace,monospace;}.lua.source-lua{font-family:monospace;}.lua.source-lua .imp{font-weight:bold;color:red;}.lua.source-lua li,.lua.source-lua .li1{font-weight:normal;vertical-align:top;}.lua.source-lua .ln{width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;}.lua.source-lua .li2{font-weight:bold;vertical-align:top;}.lua.source-lua .kw1{color:#aa9900;font-weight:bold;}.lua.source-lua .kw2{color:#aa9900;font-weight:bold;}.lua.source-lua .kw3{color:#0000aa;}.lua.source-lua .kw4{color:#aa9900;}.lua.source-lua .kw5{color:#aa9900;}.lua.source-lua .co1{color:#808080;font-style:italic;}.lua.source-lua .co2{color:#ff0000;}.lua.source-lua .coMULTI{color:#808080;font-style:italic;}.lua.source-lua .es0{color:#000099;font-weight:bold;}.lua.source-lua .es1{color:#000099;font-weight:bold;}.lua.source-lua .es2{color:#000099;font-weight:bold;}.lua.source-lua .br0{color:#66cc66;}.lua.source-lua .sy0{color:#66cc66;}.lua.source-lua .st0{color:#ff6666;}.lua.source-lua .nu0{color:#cc66cc;}.lua.source-lua .me0{color:#aa9900;}.lua.source-lua .ln-xtra,.lua.source-lua li.ln-xtra,.lua.source-lua div.ln-xtra{background-color:#ffc;}.lua.source-lua span.xtra{display:block;}</style></head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Tutorials_Beginner_Client-side_scripts skin-cavendish action-view">
<div id="internal"></div>
 
<div id="globalWrapper" class="view">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FTutorials%2FBeginner%2FClient-side+scripts&amp;returntoquery=printable%3Dyes">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Tutorials/Beginner/Client-side scripts - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Tutorials/Beginner/Client-side_scripts" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Tutorials/Beginner/Client-side_scripts&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Tutorials/Beginner/Client-side_scripts&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Tutorials/Beginner/Client-side_scripts&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
<div id="p-search" class="portlet" role="search">
<h3><label for="searchInput">Search</label></h3>
<div id="searchBody" class="pBody">
<form action="/index.php" id="searchform">
<input type='hidden' name="title" value="Special:Search"/>
<input type="search" name="search" placeholder="Search" title="Search JC2-MP Documentation [f]" accesskey="f" id="searchInput"/>
<input type="submit" name="go" value="Go" title="Go to a page with this exact name if exists" id="searchGoButton" class="searchButton"/>&#160;
<input type="submit" name="fulltext" value="Search" title="Search the pages for this text" id="mw-searchButton" class="searchButton"/>
</form>
</div>
</div>
</div>
<div id="mBody">
<div id="side">
<div id="nav">
<div class="generated-sidebar portlet" id="p-Main" role="navigation">
<h3>Main</h3>
<div class='pBody'>
<ul>
<li id="n-mainpage-description"><a href="/Main_Page" title="Visit the main page [z]" accesskey="z">Main page</a></li>
<li id="n-Web-site"><a href="http://www.jc-mp.com" rel="nofollow">Web site</a></li>
<li id="n-Recent-changes"><a href="/Special:RecentChanges">Recent changes</a></li>
</ul>
</div>
</div>
<div class="generated-sidebar portlet" id="p-Lua" role="navigation">
<h3>Lua</h3>
<div class='pBody'>
<ul>
<li id="n-Tutorials"><a href="/Lua/Tutorials">Tutorials</a></li>
<li id="n-Server"><a href="/Lua/Server">Server</a></li>
<li id="n-Client"><a href="/Lua/Client">Client</a></li>
<li id="n-Shared"><a href="/Lua/Shared">Shared</a></li>
</ul>
</div>
</div>
<div class="portlet" id="p-tb" role="navigation">
<h3>Tools</h3>
<div class="pBody">
<ul>
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Tutorials/Beginner/Client-side_scripts" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Tutorials/Beginner/Client-side_scripts" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Tutorials/Beginner/Client-side_scripts&amp;oldid=24768" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Tutorials/Beginner/Client-side_scripts&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Lua/Tutorials/Beginner/Client-side scripts</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a>&lrm; | <a href="/Lua/Tutorials" title="Lua/Tutorials">Tutorials</a></span></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p>Client-side scripts work very similarly to server scripts. The server automatically sends clients scripts when they join, and also when a module is reloaded. But other than that, the only difference is the classes and functions available. Clients cannot spawn vehicles or set their own health, for example; server scripts must do that.
</p>
<h2><span class="mw-headline" id="Render_event">Render event</span></h2>
<p>An important feature of client-side scripts is the ability to render text, images, and primitives. The Render and PostRender events are where you should call <a href="/Lua/Client/Render" title="Lua/Client/Render">drawing functions</a>. They will not work anywhere else.
</p>
<h4><span class="mw-headline" id="Draw_a_red_dot_in_the_center_of_the_screen">Draw a red dot in the center of the screen</span></h4>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="kw1">function</span> Foo<span class="br0">&#40;</span><span class="br0">&#41;</span>
	Render<span class="sy0">:</span>FillCircle<span class="br0">&#40;</span>Render<span class="sy0">.</span>Size <span class="sy0">/</span> <span class="nu0">2</span><span class="sy0">,</span> <span class="nu0">5</span><span class="sy0">,</span> Color<span class="br0">&#40;</span><span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">0</span><span class="sy0">,</span> <span class="nu0">0</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;Render&quot;</span><span class="sy0">,</span> Foo<span class="br0">&#41;</span></pre></div></div>
<p>This is the most simple example. The Render:FillCircle function takes a <a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a> for screen position in pixels, a number for the circle radius, and a color. Render.Size is a Vector2 that is the size of the screen in pixels. If we divide that by two, we get the center of the screen. The radius is also in pixels.
</p>
<h2><span class="mw-headline" id="See_also">See also</span></h2>
<p><a href="/Lua/Tutorials/Intermediate/Creating_a_speedometer" title="Lua/Tutorials/Intermediate/Creating a speedometer">Creating a speedometer</a>
</p>
 
 
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Tutorials/Beginner/Client-side_scripts&amp;oldid=24768">http://wiki.jc-mp.com/index.php?title=Lua/Tutorials/Beginner/Client-side_scripts&amp;oldid=24768</a>"</div>
<div id='catlinks' class='catlinks catlinks-allhidden'></div>  
</div>
</div> 
</div>
</div> 
<div class="visualClear"></div>
<div id="footer">
<table>
<tr>
<td rowspan="2" class="f-iconsection">
<div id="f-copyrightico"><a href="http://www.gnu.org/copyleft/fdl.html"><img src="/skins/common/images/gnu-fdl.png" alt="GNU Free Documentation License 1.3 or later" width="88" height="31"/></a></div> </td>
<td align="center">
<ul id="f-list">
<li id="f-lastmod"> This page was last modified on 28 December 2013, at 12:29.</li>
<li id="f-viewcount">This page has been accessed 2,061 times.</li>
<li id="f-copyright">Content is available under <a class="external" rel="nofollow" href="http://www.gnu.org/copyleft/fdl.html">GNU Free Documentation License 1.3 or later</a> unless otherwise noted.</li>
<li id="f-privacy"><a href="/Project:Privacy_policy" title="Project:Privacy policy">Privacy policy</a></li>
<li id="f-about"><a href="/Project:About" title="Project:About">About JC2-MP Documentation</a></li>
<li id="f-disclaimer"><a href="/Project:General_disclaimer" title="Project:General disclaimer">Disclaimers</a></li>
</ul></td>
<td rowspan="2" class="f-iconsection">
<div id="f-poweredbyico"><a href="//www.mediawiki.org/"><img src="/skins/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" width="88" height="31"/></a></div>
</td>
</tr>
<tr>
<td><div id="skin-info">
Mozilla Cavendish Theme based on Cavendish style by Gabriel Wicke modified by <a href="http://www.dasch-tour.de" title="DaSch-Tour Blog" target="_blank">DaSch</a> for the <a href="http://www.wecowi.de/" title="Web Community Wiki">Web Community Wiki</a><br/>
<a href="https://github.com/DaSchTour/Cavendish" title="github projectpage">github Projectpage</a> &ndash; <a href="https://github.com/DaSchTour/Cavendish/issues" title="Bug reporting at github">Report Bug</a> &ndash; Skin-Version: 2.3.2 </div></td>
</tr>
</table>
</div> 
</div> 
 
<script>/*<![CDATA[*/window.jQuery && jQuery.ready();/*]]>*/</script><script>if(window.mw){
mw.loader.state({"site":"loading","user":"ready","user.groups":"ready"});
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.action.view.postEdit","mediawiki.user","mediawiki.hidpi","mediawiki.page.ready","mediawiki.searchSuggest"],null,true);
}</script>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;printable=1&amp;skin=cavendish&amp;*"></script>
 </body></html>