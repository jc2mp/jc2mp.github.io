<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8"/>
<title>Lua/Server - JC2-MP Documentation</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE"/>
<meta name="generator" content="MediaWiki 1.23.11"/>
<meta name="robots" content="noindex,follow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"3d4685a8242fc8ea9ad5ff8147ae6aeb",petok:"2250c5e805ac8708adc685bc928d6cdab92d9518-1446687951-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=b0bfc08c34/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.jc-mp.com/api.php?action=rsd"/>
<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html"/>
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom"/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.ui.button&amp;only=styles&amp;printable=1&amp;skin=cavendish&amp;*"/>
<link rel="stylesheet" href="/skins/cavendish/print.css?303" media=""/><meta name="ResourceLoaderDynamicStyles" content=""/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;printable=1&amp;skin=cavendish&amp;*"/>
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}</style>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;printable=1&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Server","wgTitle":"Lua/Server","wgCurRevisionId":27434,"wgRevisionId":27434,"wgArticleId":2807,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Server","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:7f77fa4f43bf4c4bcff833b005ee38c1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Server skin-cavendish action-view"><script type="text/javascript">
//<![CDATA[
try{(function(a){var b="http://",c="wiki.jc-mp.com",d="/cdn-cgi/cl/",e="img.gif",f=new a;f.src=[b,c,d,e].join("")})(Image)}catch(e){}
//]]>
</script>
<div id="internal"></div>
 
<div id="globalWrapper" class="view">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FServer&amp;returntoquery=printable%3Dyes">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Server - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Server" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Server&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Server&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Server&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Server" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Server" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Server&amp;oldid=27434" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Server&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Lua/Server</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a></span></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Global_classes"><span class="tocnumber">1</span> <span class="toctext">Global classes</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Classes"><span class="tocnumber">2</span> <span class="toctext">Classes</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Enums"><span class="tocnumber">3</span> <span class="toctext">Enums</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Events"><span class="tocnumber">4</span> <span class="toctext">Events</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Shared_events"><span class="tocnumber">5</span> <span class="toctext">Shared events</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Additions_to_standard_Lua_libraries"><span class="tocnumber">6</span> <span class="toctext">Additions to standard Lua libraries</span></a></li>
</ul>
</div>
<h2><span class="mw-headline" id="Global_classes">Global classes</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Server/Config" title="Lua/Server/Config">Config</a></b>
</p><p><b><a href="/Lua/Server/Chat" title="Lua/Server/Chat">Chat</a></b>
</p><p><b><a href="/Lua/Server/Server" title="Lua/Server/Server">Server</a></b>
</p><p><b><a href="/Lua/Server/SQL" title="Lua/Server/SQL">SQL</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Classes">Classes</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Server/CellID" title="Lua/Server/CellID">CellID</a></b>
</p><p><b><a href="/Lua/Server/EntityStorageBase" title="Lua/Server/EntityStorageBase">EntityStorageBase</a></b>
</p><p><b><a href="/Lua/Server/NetworkObject" title="Lua/Server/NetworkObject">NetworkObject</a></b>
</p><p><b><a href="/Lua/Server/SQLStatement" title="Lua/Server/SQLStatement">SQLStatement</a></b>
</p>
<dl>
<dd><a href="/Lua/Server/SQLCommand" title="Lua/Server/SQLCommand">SQLCommand</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Server/SQLQuery" title="Lua/Server/SQLQuery">SQLQuery</a>
</dd>
</dl>
<p><b><a href="/Lua/Server/SQLTransaction" title="Lua/Server/SQLTransaction">SQLTransaction</a></b>
</p><p><b><a href="/Lua/Server/StreamableObject" title="Lua/Server/StreamableObject">StreamableObject</a></b>
</p>
<dl>
<dd><a href="/Lua/Server/Checkpoint" title="Lua/Server/Checkpoint">Checkpoint</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Server/Player" title="Lua/Server/Player">Player</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Server/Vehicle" title="Lua/Server/Vehicle">Vehicle</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Server/StaticObject" title="Lua/Server/StaticObject">StaticObject</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Server/WorldNetworkObject" title="Lua/Server/WorldNetworkObject">WorldNetworkObject</a>
</dd>
</dl>
<p><b><a href="/Lua/Server/UDPSocket" title="Lua/Server/UDPSocket">UDPSocket</a></b>
</p><p><b><a href="/Lua/Server/World" title="Lua/Server/World">World</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Enums">Enums</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Server/CollisionGroup" title="Lua/Server/CollisionGroup">CollisionGroup</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Events">Events</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Events/Server/ClientModuleLoad" title="Lua/Events/Server/ClientModuleLoad">ClientModuleLoad</a></b>
</p><p><b><a href="/Lua/Events/Shared/ClientModulesLoad" title="Lua/Events/Shared/ClientModulesLoad">ClientModulesLoad</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerAuthenticate" title="Lua/Events/Server/PlayerAuthenticate">PlayerAuthenticate</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerDeath" title="Lua/Events/Server/PlayerDeath">PlayerDeath</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerEnterCheckpoint" title="Lua/Events/Server/PlayerEnterCheckpoint">PlayerEnterCheckpoint</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerEnterMG" title="Lua/Events/Server/PlayerEnterMG">PlayerEnterMG</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerEnterStunt" title="Lua/Events/Server/PlayerEnterStunt">PlayerEnterStunt</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerExitCheckpoint" title="Lua/Events/Server/PlayerExitCheckpoint">PlayerExitCheckpoint</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerExitMG" title="Lua/Events/Server/PlayerExitMG">PlayerExitMG</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerExitStunt" title="Lua/Events/Server/PlayerExitStunt">PlayerExitStunt</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerMoneyChange" title="Lua/Events/Server/PlayerMoneyChange">PlayerMoneyChange</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerSpawn" title="Lua/Events/Server/PlayerSpawn">PlayerSpawn</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerStateChange" title="Lua/Events/Server/PlayerStateChange">PlayerStateChange</a></b>
</p><p><b><a href="/Lua/Events/Server/PlayerWorldChange" title="Lua/Events/Server/PlayerWorldChange">PlayerWorldChange</a></b>
</p><p><b><a href="/Lua/Events/Server/ServerStart" title="Lua/Events/Server/ServerStart">ServerStart</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Shared_events"><a href="/Lua/Shared#Events" title="Lua/Shared">Shared events</a></span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Events/Shared/EntitySpawn" title="Lua/Events/Shared/EntitySpawn">EntitySpawn</a></b>
</p><p><b><a href="/Lua/Events/Shared/EntityDespawn" title="Lua/Events/Shared/EntityDespawn">EntityDespawn</a></b>
</p><p><b><a href="/Lua/Events/Shared/ModuleLoad" title="Lua/Events/Shared/ModuleLoad">ModuleLoad</a></b>
</p><p><b><a href="/Lua/Events/Shared/ModuleUnload" title="Lua/Events/Shared/ModuleUnload">ModuleUnload</a></b>
</p><p><b><a href="/Lua/Events/Shared/ModulesLoad" title="Lua/Events/Shared/ModulesLoad">ModulesLoad</a></b>
</p><p><b><a href="/Lua/Events/Shared/NetworkObjectCreate" title="Lua/Events/Shared/NetworkObjectCreate">NetworkObjectCreate</a></b>
</p><p><b><a href="/Lua/Events/Shared/NetworkObjectDestroy" title="Lua/Events/Shared/NetworkObjectDestroy">NetworkObjectDestroy</a></b>
</p><p><b><a href="/Lua/Events/Shared/NetworkObjectValueChange" title="Lua/Events/Shared/NetworkObjectValueChange">NetworkObjectValueChange</a></b>
</p><p><b><a href="/Lua/Events/Shared/PlayerChat" title="Lua/Events/Shared/PlayerChat">PlayerChat</a></b>
</p><p><b><a href="/Lua/Events/Shared/PlayerEnterVehicle" title="Lua/Events/Shared/PlayerEnterVehicle">PlayerEnterVehicle</a></b>
</p><p><b><a href="/Lua/Events/Shared/PlayerExitVehicle" title="Lua/Events/Shared/PlayerExitVehicle">PlayerExitVehicle</a></b>
</p><p><b><a href="/Lua/Events/Shared/PlayerJoin" title="Lua/Events/Shared/PlayerJoin">PlayerJoin</a></b>
</p><p><b><a href="/Lua/Events/Shared/PlayerQuit" title="Lua/Events/Shared/PlayerQuit">PlayerQuit</a></b>
</p><p><b><a href="/Lua/Events/Shared/PostTick" title="Lua/Events/Shared/PostTick">PostTick</a></b>
</p><p><b><a href="/Lua/Events/Shared/PreTick" title="Lua/Events/Shared/PreTick">PreTick</a></b>
</p><p><b><a href="/Lua/Events/Shared/SharedObjectCreate" title="Lua/Events/Shared/SharedObjectCreate">SharedObjectCreate</a></b>
</p><p><b><a href="/Lua/Events/Shared/SharedObjectDestroy" title="Lua/Events/Shared/SharedObjectDestroy">SharedObjectDestroy</a></b>
</p><p><b><a href="/Lua/Events/Shared/SharedObjectValueChange" title="Lua/Events/Shared/SharedObjectValueChange">SharedObjectValueChange</a></b>
</p><p><b><a href="/Lua/Events/Shared/WorldNetworkObjectCreate" title="Lua/Events/Shared/WorldNetworkObjectCreate">WorldNetworkObjectCreate</a></b>
</p><p><b><a href="/Lua/Events/Shared/WorldNetworkObjectDestroy" title="Lua/Events/Shared/WorldNetworkObjectDestroy">WorldNetworkObjectDestroy</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Additions_to_standard_Lua_libraries">Additions to standard Lua libraries</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Shared/io/createdir" title="Lua/Shared/io/createdir">io.createdir(string)</a></b>
</p><p><b><a href="/Lua/Shared/io/directories" title="Lua/Shared/io/directories">io.directories(string)</a></b>
</p><p><b><a href="/Lua/Shared/io/files" title="Lua/Shared/io/files">io.files(string)</a></b>
</p><p></font>
</p>
 
 
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Server&amp;oldid=27434">http://wiki.jc-mp.com/index.php?title=Lua/Server&amp;oldid=27434</a>"</div>
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
<li id="f-lastmod"> This page was last modified on 3 October 2015, at 15:13.</li>
<li id="f-viewcount">This page has been accessed 31,327 times.</li>
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
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":128});
}</script></body></html>