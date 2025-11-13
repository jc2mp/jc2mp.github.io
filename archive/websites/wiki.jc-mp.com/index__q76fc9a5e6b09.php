<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<title>Lua/Server/Player - JC2-MP Documentation</title>
<meta charset="UTF-8"/>
<meta name="generator" content="MediaWiki 1.21.3"/>
<meta name="robots" content="noindex,nofollow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1387493058,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/acv=964071af18/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"8b9192cd4a09d6897e04e54e9115e87c7bd748e3-1387622595-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/acv=5e636c62d6/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.jc-mp.com/api.php?action=rsd"/>
<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html"/>
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Server/Player","wgTitle":"Lua/Server/Player","wgCurRevisionId":24580,"wgArticleId":3624,"wgIsArticle":true,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Server/Player","wgRestrictionEdit":[],"wgRestrictionMove":[]});
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
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Server_Player skin-cavendish action-view">
<div id="internal"></div>
 
<div id="globalWrapper" class="view">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FServer%2FPlayer&amp;returntoquery=oldid%3D24580">
Log in</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Server/Player - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Server/Player" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Server/Player&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Server/Player&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Server/Player&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Server/Player" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Server/Player" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-print"><a href="/index.php?title=Lua/Server/Player&amp;oldid=24580&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Server/Player&amp;oldid=24580" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Server/Player&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Lua/Server/Player</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a>&lrm; | <a href="/Lua/Server" title="Lua/Server">Server</a></span><div id="mw-revision-info">Revision as of 00:01, 17 December 2013 by <a href="/User:Dreadmullet" title="User:Dreadmullet" class="mw-userlink">Dreadmullet</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:Dreadmullet&amp;action=edit&amp;redlink=1" class="new" title="User talk:Dreadmullet (page does not exist)">Talk</a> | <a href="/Special:Contributions/Dreadmullet" title="Special:Contributions/Dreadmullet">contribs</a>)</span></div><br/>
<div id="mw-revision-nav">(<a href="/index.php?title=Lua/Server/Player&amp;diff=prev&amp;oldid=24580" title="Lua/Server/Player">diff</a>) <a href="/index.php?title=Lua/Server/Player&amp;direction=prev&amp;oldid=24580" title="Lua/Server/Player">← Older revision</a> | Latest revision (diff) | Newer revision → (diff)</div></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><table id="toc" class="toc"><tr><td><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Static_functions"><span class="tocnumber">1</span> <span class="toctext">Static functions</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Functions"><span class="tocnumber">2</span> <span class="toctext">Functions</span></a>
<ul>
<li class="toclevel-2 tocsection-3"><a href="#Functions_inherited_from_StreamableObject"><span class="tocnumber">2.1</span> <span class="toctext">Functions inherited from StreamableObject</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-4"><a href="#Operators"><span class="tocnumber">3</span> <span class="toctext">Operators</span></a></li>
</ul>
</td></tr></table>
<h2> <span class="mw-headline" id="Static_functions">Static functions</span></h2>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="135"> Returns
</th>
<th width="450"> Prototype
</th></tr>
<tr>
<td align="right"> Player
</td>
<td align="left"> <a href="/Lua/Server/Player/Static_Functions/GetById" title="Lua/Server/Player/Static Functions/GetById">GetById</a>(number)
</td></tr>
<tr>
<td align="right"> table
</td>
<td align="left"> <a href="/Lua/Server/Player/Static_Functions/Match" title="Lua/Server/Player/Static Functions/Match">Match</a>(string)
</td></tr></table> </font>
<h2> <span class="mw-headline" id="Functions">Functions</span></h2>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="135"> Returns
</th>
<th width="450"> Prototype
</th></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/Ban" title="Lua/Server/Player/Functions/Ban">Ban</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/Ban" title="Lua/Server/Player/Functions/Ban">Ban</a>(string)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/ClearInventory" title="Lua/Server/Player/Functions/ClearInventory">ClearInventory</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/DisableAutoAim" title="Lua/Server/Player/Functions/DisableAutoAim">DisableAutoAim</a>(Player)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/DisableCollision" title="Lua/Server/Player/Functions/DisableCollision">DisableCollision</a>(<a href="/Lua/Server/CollisionGroup" title="Lua/Server/CollisionGroup">CollisionGroup</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/EnableAutoAim" title="Lua/Server/Player/Functions/EnableAutoAim">EnableAutoAim</a>(Player)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/EnableCollision" title="Lua/Server/Player/Functions/EnableCollision">EnableCollision</a>(<a href="/Lua/Server/CollisionGroup" title="Lua/Server/CollisionGroup">CollisionGroup</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/EnterVehicle" title="Lua/Server/Player/Functions/EnterVehicle">EnterVehicle</a>(<a href="/Lua/Server/Vehicle" title="Lua/Server/Vehicle">Vehicle</a>, <a href="/Lua/Server/VehicleSeat" title="Lua/Server/VehicleSeat">VehicleSeat</a>)
</td></tr>
<tr>
<td align="right"> object
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetAimTarget" title="Lua/Server/Player/Functions/GetAimTarget">GetAimTarget</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Angle" title="Lua/Shared/Angle">Angle</a>
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetAngle" title="Lua/Server/Player/Functions/GetAngle">GetAngle</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Vector3</a>
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetCameraPosition" title="Lua/Server/Player/Functions/GetCameraPosition">GetCameraPosition</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Color" title="Lua/Shared/Color">Color</a>
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetColor" title="Lua/Server/Player/Functions/GetColor">GetColor</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetEquippedSlot" title="Lua/Server/Player/Functions/GetEquippedSlot">GetEquippedSlot</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Weapon" title="Lua/Shared/Weapon">Weapon</a>
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetEquippedWeapon" title="Lua/Server/Player/Functions/GetEquippedWeapon">GetEquippedWeapon</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetHealth" title="Lua/Server/Player/Functions/GetHealth">GetHealth</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetId" title="Lua/Server/Player/Functions/GetId">GetId</a>()
</td></tr>
<tr>
<td align="right"> object
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetInventory" title="Lua/Server/Player/Functions/GetInventory">GetInventory</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Vector3</a>
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetLinearVelocity" title="Lua/Server/Player/Functions/GetLinearVelocity">GetLinearVelocity</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetModelId" title="Lua/Server/Player/Functions/GetModelId">GetModelId</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetMoney" title="Lua/Server/Player/Functions/GetMoney">GetMoney</a>()
</td></tr>
<tr>
<td align="right"> string
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetName" title="Lua/Server/Player/Functions/GetName">GetName</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetParachuting" title="Lua/Server/Player/Functions/GetParachuting">GetParachuting</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetPing" title="Lua/Server/Player/Functions/GetPing">GetPing</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Vector3</a>
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetPosition" title="Lua/Server/Player/Functions/GetPosition">GetPosition</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/PlayerState" title="Lua/Shared/PlayerState">PlayerState</a>
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetState" title="Lua/Server/Player/Functions/GetState">GetState</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/SteamId" title="Lua/Shared/SteamId">SteamId</a>
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetSteamId" title="Lua/Server/Player/Functions/GetSteamId">GetSteamId</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Server/Vehicle" title="Lua/Server/Vehicle">Vehicle</a>
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetVehicle" title="Lua/Server/Player/Functions/GetVehicle">GetVehicle</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GetWeatherSeverity" title="Lua/Server/Player/Functions/GetWeatherSeverity">GetWeatherSeverity</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/GiveWeapon" title="Lua/Server/Player/Functions/GiveWeapon">GiveWeapon</a>(number, <a href="/Lua/Shared/Weapon" title="Lua/Shared/Weapon">Weapon</a>)
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/HasVehicleDLC" title="Lua/Server/Player/Functions/HasVehicleDLC">HasVehicleDLC</a>(<a href="/Lua/Shared/VehicleId" title="Lua/Shared/VehicleId">VehicleId</a>)
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/HasWeaponDLC" title="Lua/Server/Player/Functions/HasWeaponDLC">HasWeaponDLC</a>(WeaponId)
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/InVehicle" title="Lua/Server/Player/Functions/InVehicle">InVehicle</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/IsFullyAuthenticated" title="Lua/Server/Player/Functions/IsFullyAuthenticated">IsFullyAuthenticated</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/Kick" title="Lua/Server/Player/Functions/Kick">Kick</a>(string)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/Kick" title="Lua/Server/Player/Functions/Kick">Kick</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/SendChatMessage" title="Lua/Server/Player/Functions/SendChatMessage">SendChatMessage</a>(string, <a href="/Lua/Shared/Color" title="Lua/Shared/Color">Color</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/SetAngle" title="Lua/Server/Player/Functions/SetAngle">SetAngle</a>(<a href="/Lua/Shared/Angle" title="Lua/Shared/Angle">Angle</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/SetColor" title="Lua/Server/Player/Functions/SetColor">SetColor</a>(<a href="/Lua/Shared/Color" title="Lua/Shared/Color">Color</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/SetHealth" title="Lua/Server/Player/Functions/SetHealth">SetHealth</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/SetModelId" title="Lua/Server/Player/Functions/SetModelId">SetModelId</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/SetMoney" title="Lua/Server/Player/Functions/SetMoney">SetMoney</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/SetPosition" title="Lua/Server/Player/Functions/SetPosition">SetPosition</a>(<a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Vector3</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/SetWeatherSeverity" title="Lua/Server/Player/Functions/SetWeatherSeverity">SetWeatherSeverity</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/Player/Functions/Teleport" title="Lua/Server/Player/Functions/Teleport">Teleport</a>(<a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Vector3</a>, <a href="/Lua/Shared/Angle" title="Lua/Shared/Angle">Angle</a>)
</td></tr></table> </font>
<h3> <span class="mw-headline" id="Functions_inherited_from_StreamableObject">Functions inherited from <a href="/Lua/Server/StreamableObject" title="Lua/Server/StreamableObject">StreamableObject</a></span></h3>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="135"> Returns
</th>
<th width="450"> Prototype
</th></tr>
<tr>
<td align="right"> <a href="/Lua/Server/CellID" title="Lua/Server/CellID">CellID</a>
</td>
<td align="left"> <a href="/Lua/Server/StreamableObject/Functions/GetCellId" title="Lua/Server/StreamableObject/Functions/GetCellId">GetCellId</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Server/StreamableObject/Functions/GetEnabled" title="Lua/Server/StreamableObject/Functions/GetEnabled">GetEnabled</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Server/StreamableObject/Functions/GetStreamDistance" title="Lua/Server/StreamableObject/Functions/GetStreamDistance">GetStreamDistance</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Server/World" title="Lua/Server/World">World</a>
</td>
<td align="left"> <a href="/Lua/Server/StreamableObject/Functions/GetWorld" title="Lua/Server/StreamableObject/Functions/GetWorld">GetWorld</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/StreamableObject/Functions/SetEnabled" title="Lua/Server/StreamableObject/Functions/SetEnabled">SetEnabled</a>(boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/StreamableObject/Functions/SetStreamDistance" title="Lua/Server/StreamableObject/Functions/SetStreamDistance">SetStreamDistance</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Server/StreamableObject/Functions/SetWorld" title="Lua/Server/StreamableObject/Functions/SetWorld">SetWorld</a>(<a href="/Lua/Server/World" title="Lua/Server/World">World</a>)
</td></tr></table> </font>
<h2> <span class="mw-headline" id="Operators">Operators</span></h2>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="135"> Returns
</th>
<th width="450"> Prototype
</th></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> Player == Player
</td></tr>
<tr>
<td align="right"> string
</td>
<td align="left"> tostring(Player)
</td></tr></table> </font>
 
 
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Server/Player&amp;oldid=24580">http://wiki.jc-mp.com/index.php?title=Lua/Server/Player&amp;oldid=24580</a>"</div>
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
<li id="f-lastmod"> This page was last modified on 17 December 2013, at 00:01.</li>
<li id="f-viewcount">This page has been accessed 1,782 times.</li>
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
 
<script>if(window.mw){
mw.loader.state({"site":"loading","user":"missing","user.groups":"ready"});
}</script>
<script>if(window.mw){
mw.loader.load(["ext.treeandmenu","mediawiki.action.view.postEdit","mediawiki.user","mediawiki.page.ready","mediawiki.searchSuggest","mediawiki.hidpi"], null, true);
}</script>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;skin=cavendish&amp;*"></script>
 </body></html>