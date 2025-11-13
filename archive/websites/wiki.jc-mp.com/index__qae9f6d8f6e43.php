<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8" />
<title>Lua/Shared - JC2-MP Documentation</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta name="generator" content="MediaWiki 1.23.11" />
<meta name="robots" content="noindex,nofollow" />
<script src="/cdn-cgi/apps/head/M5tUShgACKN8efwMnCwRw1ud1RM.js"></script><link rel="shortcut icon" href="/favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)" />
<link rel="EditURI" type="application/rsd+xml" href="https://wiki.jc-mp.com/api.php?action=rsd" />
<link rel="copyright" href="https://www.gnu.org/copyleft/fdl.html" />
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="https://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.ui.button&amp;only=styles&amp;skin=cavendish&amp;*" />
<link rel="stylesheet" href="/skins/cavendish/print.css?303" media="print" />
<link rel="stylesheet" href="/skins/cavendish/cavendish.css?303" media="screen" />
<!--[if IE 6]><link rel="stylesheet" href="/skins/cavendish/IE60Fixes.css?303" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="/skins/cavendish/IE70Fixes.css?303" media="screen" /><![endif]-->
<link rel="stylesheet" href="/skins/cavendish/colors/jcmp.css?303" media="screen" />
<link rel="stylesheet" href="/skins/cavendish/extensions.css?303" media="screen" />
<link rel="stylesheet" href="/skins/cavendish/style.php?303" media="screen" /><meta name="ResourceLoaderDynamicStyles" content="" />
<link rel="stylesheet" href="https://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;skin=cavendish&amp;*" />
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}
/* cache key: wiki:resourceloader:filter:minify-css:7:29b70323345a439ab9ed7007e0c178a6 */</style>
<script src="https://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Shared","wgTitle":"Lua/Shared","wgCurRevisionId":27286,"wgRevisionId":27286,"wgArticleId":2808,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Shared","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:7f77fa4f43bf4c4bcff833b005ee38c1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Shared skin-cavendish action-view">
<div id="internal"></div>

<div id="globalWrapper" class="view">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FShared&amp;returntoquery=oldid%3D27286">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Shared - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Shared" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Shared&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Shared&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Shared&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
<div id="p-search" class="portlet" role="search">
<h3><label for="searchInput">Search</label></h3>
<div id="searchBody" class="pBody">
<form action="/index.php" id="searchform">
<input type='hidden' name="title" value="Special:Search" />
<input type="search" name="search" placeholder="Search" title="Search JC2-MP Documentation [f]" accesskey="f" id="searchInput" />
<input type="submit" name="go" value="Go" title="Go to a page with this exact name if exists" id="searchGoButton" class="searchButton" />&#160;
<input type="submit" name="fulltext" value="Search" title="Search the pages for this text" id="mw-searchButton" class="searchButton" />
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Shared" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Shared" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-print"><a href="/index.php?title=Lua/Shared&amp;oldid=27286&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Shared&amp;oldid=27286" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Shared&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Lua/Shared</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a></span><div id="mw-revision-info">Revision as of 11:59, 4 September 2015 by <a href="/User:Fkids" class="mw-redirect mw-userlink" title="User:Fkids">Fkids</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:Fkids&amp;action=edit&amp;redlink=1" class="new" title="User talk:Fkids (page does not exist)">Talk</a> | <a href="/Special:Contributions/Fkids" title="Special:Contributions/Fkids">contribs</a>)</span></div><br />
<div id="mw-revision-nav">(<a href="/index.php?title=Lua/Shared&amp;diff=prev&amp;oldid=27286" title="Lua/Shared">diff</a>) <a href="/index.php?title=Lua/Shared&amp;direction=prev&amp;oldid=27286" title="Lua/Shared">← Older revision</a> | Latest revision (diff) | Newer revision → (diff)</div></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div> 
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Global_classes"><span class="tocnumber">1</span> <span class="toctext">Global classes</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Classes"><span class="tocnumber">2</span> <span class="toctext">Classes</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Enums"><span class="tocnumber">3</span> <span class="toctext">Enums</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Events"><span class="tocnumber">4</span> <span class="toctext">Events</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Functions"><span class="tocnumber">5</span> <span class="toctext">Functions</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Additions_to_standard_Lua_libraries"><span class="tocnumber">6</span> <span class="toctext">Additions to standard Lua libraries</span></a></li>
</ul>
</div>
<h2><span class="mw-headline" id="Global_classes">Global classes</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Shared/BaseEventManager" title="Lua/Shared/BaseEventManager">BaseEventManager</a></b>
</p>
<dl>
<dd><a href="/Lua/Shared/Console" title="Lua/Shared/Console">Console</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Shared/Events" title="Lua/Shared/Events">Events</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Shared/Network" title="Lua/Shared/Network">Network</a>
</dd>
</dl>
<p></font>
</p>
<h2><span class="mw-headline" id="Classes">Classes</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Shared/Angle" title="Lua/Shared/Angle">Angle</a></b>
</p><p><b><a href="/Lua/Shared/Color" title="Lua/Shared/Color">Color</a></b>
</p><p><b><a href="/Lua/Shared/Event" title="Lua/Shared/Event">Event</a></b>
</p><p><b><a href="/Lua/Shared/MD5" title="Lua/Shared/MD5">MD5</a></b>
</p><p><b><a href="/Lua/Shared/SHA1" title="Lua/Shared/SHA1">SHA1</a></b>
</p><p><b><a href="/Lua/Shared/SHA256" title="Lua/Shared/SHA256">SHA256</a></b>
</p><p><b><a href="/Lua/Shared/SharedObject" title="Lua/Shared/SharedObject">SharedObject</a></b>
</p><p><b><a href="/Lua/Shared/SteamId" title="Lua/Shared/SteamId">SteamId</a></b>
</p><p><b><a href="/Lua/Shared/Timer" title="Lua/Shared/Timer">Timer</a></b>
</p><p><b><a href="/Lua/Shared/Transform2" title="Lua/Shared/Transform2">Transform2</a></b>
</p><p><b><a href="/Lua/Shared/Transform3" title="Lua/Shared/Transform3">Transform3</a></b>
</p><p><b><a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Vector3</a></b>
</p><p><b><a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a></b>
</p><p><b><a href="/Lua/Shared/Weapon" title="Lua/Shared/Weapon">Weapon</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Enums">Enums</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Shared/AnimationState" title="Lua/Shared/AnimationState">AnimationState</a></b>
</p><p><b><a href="/Lua/Shared/AssetLocation" title="Lua/Shared/AssetLocation">AssetLocation</a></b>
</p><p><b><a href="/Lua/Shared/CharacterId" title="Lua/Shared/CharacterId">CharacterId</a></b>
</p><p><b><a href="/Lua/Shared/DamageEntity" title="Lua/Shared/DamageEntity">DamageEntity</a></b>
</p><p><b><a href="/Lua/Shared/PlayerState" title="Lua/Shared/PlayerState">PlayerState</a></b>
</p><p><b><a href="/Lua/Shared/VehicleClass" title="Lua/Shared/VehicleClass">VehicleClass</a></b>
</p><p><b><a href="/Lua/Shared/VehicleId" title="Lua/Shared/VehicleId">VehicleId</a></b>
</p><p><b><a href="/Lua/Shared/VehicleSeat" title="Lua/Shared/VehicleSeat">VehicleSeat</a></b>
</p><p><b><a href="/Lua/Shared/WeaponSlot" title="Lua/Shared/WeaponSlot">WeaponSlot</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Events">Events</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Events/Shared/EntitySpawn" title="Lua/Events/Shared/EntitySpawn">EntitySpawn</a></b>
</p><p><b><a href="/Lua/Events/Shared/EntityDespawn" title="Lua/Events/Shared/EntityDespawn">EntityDespawn</a></b>
</p><p><b><a href="/Lua/Events/Shared/ModuleError" title="Lua/Events/Shared/ModuleError">ModuleError</a></b>
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
<h2><span class="mw-headline" id="Functions">Functions</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Shared/Functions/IsNaN" title="Lua/Shared/Functions/IsNaN">IsNaN(object)</a></b>
</p><p><b><a href="/Lua/Shared/Functions/IsValid" title="Lua/Shared/Functions/IsValid">IsValid(object)</a></b>
</p><p><b><a href="/Lua/Shared/Functions/IsValid" title="Lua/Shared/Functions/IsValid">IsValid(object, boolean)</a></b>
</p><p><b><a href="/Lua/Shared/Functions/Copy" title="Lua/Shared/Functions/Copy">Copy(object)</a></b>
</p><p><b><a href="/Lua/Shared/Functions/FNV" title="Lua/Shared/Functions/FNV">FNV(string)</a></b>
</p><p><b><a href="/Lua/Shared/Functions/FNV" title="Lua/Shared/Functions/FNV">FNV(string, number)</a></b>
</p><p><b><a href="/Lua/Shared/Functions/SetUnicode" title="Lua/Shared/Functions/SetUnicode">SetUnicode(boolean)</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Additions_to_standard_Lua_libraries">Additions to standard Lua libraries</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Shared/string/split" title="Lua/Shared/string/split">string.split(string, string [, boolean])</a></b>
</p><p><b><a href="/Lua/Shared/string/trim" title="Lua/Shared/string/trim">string.trim(string)</a></b>
</p><p><b><a href="/Lua/Shared/table/count" title="Lua/Shared/table/count">table.count(table)</a></b>
</p><p><b><a href="/Lua/Shared/table/find" title="Lua/Shared/table/find">table.find(table, object)</a></b>
</p><p><b><a href="/Lua/Shared/table/randomvalue" title="Lua/Shared/table/randomvalue">table.randomvalue(table)</a></b>
</p><p><b><a href="/Lua/Shared/math/clamp" title="Lua/Shared/math/clamp">math.clamp(number, number, number)</a></b>
</p><p><b><a href="/Lua/Shared/math/lerp" title="Lua/Shared/math/lerp">math.lerp(object, object, number)</a></b>
</p><p></font>
</p>


</div><div class="printfooter">
Retrieved from "<a href="https://wiki.jc-mp.com/index.php?title=Lua/Shared&amp;oldid=27286">https://wiki.jc-mp.com/index.php?title=Lua/Shared&amp;oldid=27286</a>"</div>
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
<div id="f-copyrightico"><a href="https://www.gnu.org/copyleft/fdl.html"><img src="/skins/common/images/gnu-fdl.png" alt="GNU Free Documentation License 1.3 or later" width="88" height="31" /></a></div> </td>
<td align="center">
<ul id="f-list">
<li id="f-lastmod"> This page was last modified on 4 September 2015, at 11:59.</li>
<li id="f-viewcount">This page has been accessed 32,196 times.</li>
<li id="f-copyright">Content is available under <a class="external" rel="nofollow" href="https://www.gnu.org/copyleft/fdl.html">GNU Free Documentation License 1.3 or later</a> unless otherwise noted.</li>
<li id="f-privacy"><a href="/Project:Privacy_policy" title="Project:Privacy policy">Privacy policy</a></li>
<li id="f-about"><a href="/Project:About" title="Project:About">About JC2-MP Documentation</a></li>
<li id="f-disclaimer"><a href="/Project:General_disclaimer" title="Project:General disclaimer">Disclaimers</a></li>
</ul></td>
<td rowspan="2" class="f-iconsection">
<div id="f-poweredbyico"><a href="//www.mediawiki.org/"><img src="/skins/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" width="88" height="31" /></a></div>
</td>
</tr>
<tr>
<td><div id="skin-info">
Mozilla Cavendish Theme based on Cavendish style by Gabriel Wicke modified by <a href="http://www.dasch-tour.de" title="DaSch-Tour Blog" target="_blank">DaSch</a> for the <a href="http://www.wecowi.de/" title="Web Community Wiki">Web Community Wiki</a><br />
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
<script src="https://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":140});
}</script></body></html>