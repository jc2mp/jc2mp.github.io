<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<title>Revision history of "Lua/Server/Server/Functions/GetPlayers" - JC2-MP Documentation</title>
<meta charset="UTF-8"/>
<meta name="generator" content="MediaWiki 1.21.3"/>
<meta name="robots" content="noindex,nofollow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1387493058,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/acv=964071af18/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"1d927a6955570b3009f34af7ae62258f7fdf83be-1387603894-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/acv=5e636c62d6/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.jc-mp.com/api.php?action=rsd"/>
<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html"/>
<link rel="alternate" type="application/atom+xml" title="&quot;Lua/Server/Server/Functions/GetPlayers&quot; Atom feed" href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;feed=atom&amp;action=history"/>
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom"/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared&amp;only=styles&amp;skin=cavendish&amp;*"/>
<link rel="stylesheet" href="/skins/cavendish/print.css?303" media="print"/>
<link rel="stylesheet" href="/skins/cavendish/cavendish.css?303" media="screen"/>
<!--[if IE 6]><link rel="stylesheet" href="/skins/cavendish/IE60Fixes.css?303" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="/skins/cavendish/IE70Fixes.css?303" media="screen" /><![endif]-->
<link rel="stylesheet" href="/skins/cavendish/colors/jcmp.css?303" media="screen"/>
<link rel="stylesheet" href="/skins/cavendish/extensions.css?303" media="screen"/>
<link rel="stylesheet" href="/skins/cavendish/style.php?303" media="screen"/><meta name="ResourceLoaderDynamicStyles" content=""/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;skin=cavendish&amp;*"/>
<style>a:lang(ar),a:lang(ckb),a:lang(fa),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}</style>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Server/Server/Functions/GetPlayers","wgTitle":"Lua/Server/Server/Functions/GetPlayers","wgCurRevisionId":24678,"wgArticleId":2961,"wgIsArticle":false,"wgAction":"history","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Server/Server/Functions/GetPlayers","wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function(){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"disablesuggest":0,"editfont":"default","editondblclick":0,"editsection":1,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":0,"extendwatchlist":0,"externaldiff":0,"externaleditor":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"justify":0,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nocache":0,"noconvertlink":0,"norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"quickbar":5,"rcdays":7,"rclimit":50,"rememberpassword":0,"rows":25,"searchlimit":20,"showhiddencats":0,"showjumplinks":1,"shownumberswatching":1,"showtoc":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":0,"watchdefault":0,"watchdeletion":0,"watchlistdays":3,
"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,"variant":"en","language":"en","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false});;},{},{});mw.loader.implement("user.tokens",function(){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});;},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:f5b9fac6fb050c90bde40b6c6fc6eac8 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
<script type="text/javascript">window.tamBaseUrl='/extensions/TreeAndMenu'</script>
<script type="text/javascript" src="/extensions/TreeAndMenu/dtree.js"></script>
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Server_Server_Functions_GetPlayers skin-cavendish action-history">
<div id="internal"></div>
 
<div id="globalWrapper" class="history">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FServer%2FServer%2FFunctions%2FGetPlayers&amp;returntoquery=action%3Dhistory">
Log in</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Revision history of &quot;Lua/Server/Server/Functions/GetPlayers&quot; - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Server/Server/Functions/GetPlayers" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Server/Server/Functions/GetPlayers&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history" class="selected"><a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
<div id="p-search" class="portlet" role="search">
<h3><label for="searchInput">Search</label></h3>
<div id="searchBody" class="pBody">
<form action="/index.php" id="searchform">
<input type='hidden' name="title" value="Special:Search"/>
<input type="search" name="search" title="Search JC2-MP Documentation [f]" accesskey="f" id="searchInput"/>
<input type="submit" name="go" value="Go" title="Go to a page with this exact name if exists" id="searchGoButton" class="searchButton"/>&#160;
<input type="submit" name="fulltext" value="Search" title="Search the pages for this text" id="mw-searchButton" class="searchButton"/>
</form>
</div>
</div>
</div>
<div id="mBody">
<div id="side">
<div id="nav">
<div class="generated-sidebar portlet" id="p-navigation" role="navigation">
<h3>Navigation</h3>
<div class='pBody'>
<ul>
<li id="n-mainpage-description"><a href="/Main_Page" title="Visit the main page [z]" accesskey="z">Main page</a></li>
<li id="n-Web-site"><a href="http://www.jc-mp.com" rel="nofollow">Web site</a></li>
<li id="n-Recent-changes"><a href="/Special:RecentChanges">Recent changes</a></li>
</ul>
</div>
</div>
<div class="portlet" id="p-tb" role="navigation">
<h3>Tools</h3>
<div class="pBody">
<ul>
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Server/Server/Functions/GetPlayers" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Server/Server/Functions/GetPlayers" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="feedlinks"><a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;feed=atom&amp;action=history" id="feed-atom" rel="alternate" type="application/atom+xml" class="feedlink" title="Atom feed for this page">Atom</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Revision history of "Lua/Server/Server/Functions/GetPlayers"</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><a href="/index.php?title=Special:Log&amp;page=Lua%2FServer%2FServer%2FFunctions%2FGetPlayers" title="Special:Log">View logs for this page</a></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text"><form action="/index.php" method="get" id="mw-history-searchform"><fieldset id="mw-history-search">
<legend>Browse history</legend>
<input type="hidden" value="Lua/Server/Server/Functions/GetPlayers" name="title"/>
<input type="hidden" value="history" name="action"/>
<label for="year">From year (and earlier):</label> <input id="year" maxlength="4" size="7" type="number" value="2013" name="year"/> <label for="month">From month (and earlier):</label> <select id="month" name="month" class="mw-month-selector"><option value="-1">all</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option></select>&#160;<input type="submit" value="Go"/>
</fieldset></form><div class="mw-history-legend">
<p>Diff selection: Mark the radio boxes of the revisions to compare and hit enter or the button at the bottom.<br/>
Legend: <b>(cur)</b> = difference with latest revision, <b>(prev)</b> = difference with preceding revision, <b>m</b> = minor edit.
</p>
</div>
<form action="/index.php" id="mw-history-compare">
<input type="hidden" value="Lua/Server/Server/Functions/GetPlayers" name="title"/>
<input type="hidden" value="historysubmit" name="action"/>
<div><input type="submit" value="Compare selected revisions" class="historysubmit mw-history-compareselectedversions-button" title="See the differences between the two selected revisions of this page [v]" accesskey="v"/>
</div><ul id="pagehistory">
<li><span class="mw-history-histlinks">(cur | <a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;diff=24678&amp;oldid=24594" title="Lua/Server/Server/Functions/GetPlayers">prev</a>)</span><input type="radio" value="24678" style="visibility:hidden" name="oldid" id="mw-oldid-null"/><input type="radio" value="24678" checked="checked" name="diff" id="mw-diff-24678"/> <a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;oldid=24678" title="Lua/Server/Server/Functions/GetPlayers" class="mw-changeslist-date">04:19, 20 December 2013</a>‎ <span class='history-user'><a href="/User:Dreadmullet" title="User:Dreadmullet" class="mw-userlink">Dreadmullet</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:Dreadmullet&amp;action=edit&amp;redlink=1" class="new" title="User talk:Dreadmullet (page does not exist)">Talk</a> | <a href="/Special:Contributions/Dreadmullet" title="Special:Contributions/Dreadmullet">contribs</a>)</span></span>‎ <span class="mw-changeslist-separator">. .</span> <span class="history-size">(119 bytes)</span> <span dir="ltr" class="mw-plusminus-pos" title="119 bytes after change">(+18)</span>‎</li>
<li><span class="mw-history-histlinks">(<a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;diff=24678&amp;oldid=24594" title="Lua/Server/Server/Functions/GetPlayers">cur</a> | <a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;diff=24594&amp;oldid=22936" title="Lua/Server/Server/Functions/GetPlayers">prev</a>)</span><input type="radio" value="24594" checked="checked" name="oldid" id="mw-oldid-24594"/><input type="radio" value="24594" name="diff" id="mw-diff-24594"/> <a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;oldid=24594" title="Lua/Server/Server/Functions/GetPlayers" class="mw-changeslist-date">00:49, 17 December 2013</a>‎ <span class='history-user'><a href="/User:Dreadmullet" title="User:Dreadmullet" class="mw-userlink">Dreadmullet</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:Dreadmullet&amp;action=edit&amp;redlink=1" class="new" title="User talk:Dreadmullet (page does not exist)">Talk</a> | <a href="/Special:Contributions/Dreadmullet" title="Special:Contributions/Dreadmullet">contribs</a>)</span></span>‎ <span class="mw-changeslist-separator">. .</span> <span class="history-size">(101 bytes)</span> <span dir="ltr" class="mw-plusminus-neg" title="101 bytes after change">(-17)</span>‎</li>
<li><span class="mw-history-histlinks">(<a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;diff=24678&amp;oldid=22936" title="Lua/Server/Server/Functions/GetPlayers">cur</a> | <a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;diff=22936&amp;oldid=22935" title="Lua/Server/Server/Functions/GetPlayers">prev</a>)</span><input type="radio" value="22936" name="oldid" id="mw-oldid-22936"/><input type="radio" value="22936" name="diff" id="mw-diff-22936"/> <a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;oldid=22936" title="Lua/Server/Server/Functions/GetPlayers" class="mw-changeslist-date">15:13, 15 December 2013</a>‎ <span class='history-user'><a href="/User:Dreadmullet" title="User:Dreadmullet" class="mw-userlink">Dreadmullet</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:Dreadmullet&amp;action=edit&amp;redlink=1" class="new" title="User talk:Dreadmullet (page does not exist)">Talk</a> | <a href="/Special:Contributions/Dreadmullet" title="Special:Contributions/Dreadmullet">contribs</a>)</span></span>‎ <abbr class='minoredit' title='This is a minor edit'>m</abbr> <span class="mw-changeslist-separator">. .</span> <span class="history-size">(118 bytes)</span> <span dir="ltr" class="mw-plusminus-null" title="118 bytes after change">(0)</span>‎ <span class="mw-changeslist-separator">. .</span> <span class="comment">(1 revision)</span></li>
<li><span class="mw-history-histlinks">(<a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;diff=24678&amp;oldid=22935" title="Lua/Server/Server/Functions/GetPlayers">cur</a> | prev)</span><input type="radio" value="22935" name="oldid" id="mw-oldid-22935"/><input type="radio" value="22935" name="diff" id="mw-diff-22935"/> <a href="/index.php?title=Lua/Server/Server/Functions/GetPlayers&amp;oldid=22935" title="Lua/Server/Server/Functions/GetPlayers" class="mw-changeslist-date">15:13, 15 December 2013</a>‎ <span class='history-user'><a href="/User:Dreadmullet" title="User:Dreadmullet" class="mw-userlink">Dreadmullet</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:Dreadmullet&amp;action=edit&amp;redlink=1" class="new" title="User talk:Dreadmullet (page does not exist)">Talk</a> | <a href="/Special:Contributions/Dreadmullet" title="Special:Contributions/Dreadmullet">contribs</a>)</span></span>‎ <span class="mw-changeslist-separator">. .</span> <span class="history-size">(118 bytes)</span> <span dir="ltr" class="mw-plusminus-pos" title="118 bytes after change">(+118)</span>‎ <span class="mw-changeslist-separator">. .</span> <span class="comment">(Autogenerated)</span></li>
</ul>
<div><input type="submit" value="Compare selected revisions" class="historysubmit mw-history-compareselectedversions-button" title="See the differences between the two selected revisions of this page [v]" accesskey="v"/>
</div></form></div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/Lua/Server/Server/Functions/GetPlayers">http://wiki.jc-mp.com/Lua/Server/Server/Functions/GetPlayers</a>"</div>
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
 
<script>if(window.mw){
mw.loader.state({"site":"loading","user":"missing","user.groups":"ready"});
}</script>
<script>if(window.mw){
mw.loader.load(["ext.treeandmenu","mediawiki.action.history","mediawiki.user","mediawiki.page.ready","mediawiki.searchSuggest","mediawiki.hidpi"], null, true);
}</script>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;skin=cavendish&amp;*"></script>
 </body></html>