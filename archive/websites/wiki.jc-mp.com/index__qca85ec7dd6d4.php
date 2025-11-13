<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8"/>
<title>Lua/Client - JC2-MP Documentation</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE"/>
<meta name="generator" content="MediaWiki 1.23.11"/>
<meta name="robots" content="noindex,nofollow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"3d4685a8242fc8ea9ad5ff8147ae6aeb",petok:"24b4fca8948121fb846ba02f538ec945828a044d-1449341844-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}},sha2test:0}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=38857570ac/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.jc-mp.com/api.php?action=rsd"/>
<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html"/>
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom"/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.ui.button&amp;only=styles&amp;skin=cavendish&amp;*"/>
<link rel="stylesheet" href="/skins/cavendish/print.css?303" media="print"/>
<link rel="stylesheet" href="/skins/cavendish/cavendish.css?303" media="screen"/>
<!--[if IE 6]><link rel="stylesheet" href="/skins/cavendish/IE60Fixes.css?303" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="/skins/cavendish/IE70Fixes.css?303" media="screen" /><![endif]-->
<link rel="stylesheet" href="/skins/cavendish/colors/jcmp.css?303" media="screen"/>
<link rel="stylesheet" href="/skins/cavendish/extensions.css?303" media="screen"/>
<link rel="stylesheet" href="/skins/cavendish/style.php?303" media="screen"/><meta name="ResourceLoaderDynamicStyles" content=""/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;skin=cavendish&amp;*"/>
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}</style>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Client","wgTitle":"Lua/Client","wgCurRevisionId":27457,"wgRevisionId":27457,"wgArticleId":2809,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Client","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:7f77fa4f43bf4c4bcff833b005ee38c1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Client skin-cavendish action-view"><script type="text/javascript">
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
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FClient&amp;returntoquery=oldid%3D27457">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Client - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Client" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Client&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Client&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Client&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Client" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Client" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-print"><a href="/index.php?title=Lua/Client&amp;oldid=27457&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Client&amp;oldid=27457" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Client&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Lua/Client</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a></span><div id="mw-revision-info">Revision as of 19:20, 8 November 2015 by <a href="/User:Fkids" title="User:Fkids" class="mw-userlink">Fkids</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:Fkids&amp;action=edit&amp;redlink=1" class="new" title="User talk:Fkids (page does not exist)">Talk</a> | <a href="/Special:Contributions/Fkids" title="Special:Contributions/Fkids">contribs</a>)</span></div><br/>
<div id="mw-revision-nav">(<a href="/index.php?title=Lua/Client&amp;diff=prev&amp;oldid=27457" title="Lua/Client">diff</a>) <a href="/index.php?title=Lua/Client&amp;direction=prev&amp;oldid=27457" title="Lua/Client">← Older revision</a> | Latest revision (diff) | Newer revision → (diff)</div></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Global_classes"><span class="tocnumber">1</span> <span class="toctext">Global classes</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Classes"><span class="tocnumber">2</span> <span class="toctext">Classes</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#GWEN_Classes"><span class="tocnumber">3</span> <span class="toctext">GWEN Classes</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Enums"><span class="tocnumber">4</span> <span class="toctext">Enums</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Events"><span class="tocnumber">5</span> <span class="toctext">Events</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Shared_events"><span class="tocnumber">6</span> <span class="toctext">Shared events</span></a></li>
</ul>
</div>
<h2><span class="mw-headline" id="Global_classes">Global classes</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Client/Camera" title="Lua/Client/Camera">Camera</a></b>
</p><p><b><a href="/Lua/Client/Chat" title="Lua/Client/Chat">Chat</a></b>
</p><p><b><a href="/Lua/Client/Client" title="Lua/Client/Client">Client</a></b>
</p><p><b><a href="/Lua/Client/Game" title="Lua/Client/Game">Game</a></b>
</p><p><b><a href="/Lua/Client/Input" title="Lua/Client/Input">Input</a></b>
</p><p><b><a href="/Lua/Client/Key" title="Lua/Client/Key">Key</a></b>
</p><p><b><a href="/Lua/Client/Mouse" title="Lua/Client/Mouse">Mouse</a></b>
</p><p><b><a href="/Lua/Client/Physics" title="Lua/Client/Physics">Physics</a></b>
</p><p><b><a href="/Lua/Client/LocalPlayer" title="Lua/Client/LocalPlayer">LocalPlayer</a></b>
</p><p><b><a href="/Lua/Client/Render" title="Lua/Client/Render">Render</a></b>
</p><p><b><a href="/Lua/Client/Waypoint" title="Lua/Client/Waypoint">Waypoint</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Classes">Classes</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Client/BaseStaticObject" title="Lua/Client/BaseStaticObject">BaseStaticObject</a></b>
</p>
<dl>
<dd><a href="/Lua/Client/ClientStaticObject" title="Lua/Client/ClientStaticObject">ClientStaticObject</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/StaticObject" title="Lua/Client/StaticObject">StaticObject</a>
</dd>
</dl>
<p><b><a href="/Lua/Client/Bone" title="Lua/Client/Bone">Bone</a></b>
</p><p><b><a href="/Lua/Client/Character" title="Lua/Client/Character">Character</a></b>
</p>
<dl>
<dd><a href="/Lua/Client/ClientActor" title="Lua/Client/ClientActor">ClientActor</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/Player" title="Lua/Client/Player">Player</a>
</dd>
</dl>
<p><b><a href="/Lua/Client/ClientEntity" title="Lua/Client/ClientEntity">ClientEntity</a></b>
</p>
<dl>
<dd><a href="/Lua/Client/ClientActor" title="Lua/Client/ClientActor">ClientActor</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/ClientEffect" title="Lua/Client/ClientEffect">ClientEffect</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/ClientLight" title="Lua/Client/ClientLight">ClientLight</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/ClientParticleSystem" title="Lua/Client/ClientParticleSystem">ClientParticleSystem</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/ClientSound" title="Lua/Client/ClientSound">ClientSound</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/ClientStaticObject" title="Lua/Client/ClientStaticObject">ClientStaticObject</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/ShapeTrigger" title="Lua/Client/ShapeTrigger">ShapeTrigger</a>
</dd>
</dl>
<p><b><a href="/Lua/Client/ClientStreamableObject" title="Lua/Client/ClientStreamableObject">ClientStreamableObject</a></b>
</p>
<dl>
<dd><a href="/Lua/Client/Player" title="Lua/Client/Player">Player</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/StaticObject" title="Lua/Client/StaticObject">StaticObject</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/Vehicle" title="Lua/Client/Vehicle">Vehicle</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/WorldNetworkObject" title="Lua/Client/WorldNetworkObject">WorldNetworkObject</a>
</dd>
</dl>
<p><b><a href="/Lua/Client/Image" title="Lua/Client/Image">Image</a></b>
</p><p><b><a href="/Lua/Client/GUIEvent" title="Lua/Client/GUIEvent">GUIEvent</a></b>
</p><p><b><a href="/Lua/Client/Model" title="Lua/Client/Model">Model</a></b>
</p><p><b><a href="/Lua/Client/NetworkObject" title="Lua/Client/NetworkObject">NetworkObject</a></b>
</p><p><b><a href="/Lua/Client/VehicleAerodynamics" title="Lua/Client/VehicleAerodynamics">VehicleAerodynamics</a></b>
</p><p><b><a href="/Lua/Client/VehicleSuspension" title="Lua/Client/VehicleSuspension">VehicleSuspension</a></b>
</p><p><b><a href="/Lua/Client/VehicleTransmission" title="Lua/Client/VehicleTransmission">VehicleTransmission</a></b>
</p><p><b><a href="/Lua/Client/Vertex" title="Lua/Client/Vertex">Vertex</a></b>
</p><p><b><a href="/Lua/Client/World" title="Lua/Client/World">World</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="GWEN_Classes">GWEN Classes</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Client/BaseWindow" title="Lua/Client/BaseWindow">BaseWindow</a></b>
</p>
<dl>
<dd><a href="/Lua/Client/Label" title="Lua/Client/Label">Label</a>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/StatusBar" title="Lua/Client/StatusBar">StatusBar</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/ProgressBar" title="Lua/Client/ProgressBar">ProgressBar</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/GroupBox" title="Lua/Client/GroupBox">GroupBox</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/Button" title="Lua/Client/Button">Button</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/LabelClickable" title="Lua/Client/LabelClickable">LabelClickable</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/CheckBox" title="Lua/Client/CheckBox">CheckBox</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/RadioButton" title="Lua/Client/RadioButton">RadioButton</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/ComboBox" title="Lua/Client/ComboBox">ComboBox</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/MenuItem" title="Lua/Client/MenuItem">MenuItem</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/TabButton" title="Lua/Client/TabButton">TabButton</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/TextBox" title="Lua/Client/TextBox">TextBox</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/PasswordTextBox" title="Lua/Client/PasswordTextBox">PasswordTextBox</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/TextBoxMultiline" title="Lua/Client/TextBoxMultiline">TextBoxMultiline</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/TextBoxNumeric" title="Lua/Client/TextBoxNumeric">TextBoxNumeric</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/Numeric" title="Lua/Client/Numeric">Numeric</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/ImagePanel" title="Lua/Client/ImagePanel">ImagePanel</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/Rectangle" title="Lua/Client/Rectangle">Rectangle</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/LabeledCheckBox" title="Lua/Client/LabeledCheckBox">LabeledCheckBox</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/LabeledRadioButton" title="Lua/Client/LabeledRadioButton">LabeledRadioButton</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/RadioButtonController" title="Lua/Client/RadioButtonController">RadioButtonController</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/Slider" title="Lua/Client/Slider">Slider</a>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/HorizontalSlider" title="Lua/Client/HorizontalSlider">HorizontalSlider</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/VerticalSlider" title="Lua/Client/VerticalSlider">VerticalSlider</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/ColorPicker" title="Lua/Client/ColorPicker">ColorPicker</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/HSVColorPicker" title="Lua/Client/HSVColorPicker">HSVColorPicker</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/ScrollControl" title="Lua/Client/ScrollControl">ScrollControl</a>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/CollapsibleList" title="Lua/Client/CollapsibleList">CollapsibleList</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/ListBox" title="Lua/Client/ListBox">ListBox</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/Menu" title="Lua/Client/Menu">Menu</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/MenuStrip" title="Lua/Client/MenuStrip">MenuStrip</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/TableRow" title="Lua/Client/TableRow">TableRow</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/Table" title="Lua/Client/Table">Table</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/CrossSplitter" title="Lua/Client/CrossSplitter">CrossSplitter</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/CollapsibleCategory" title="Lua/Client/CollapsibleCategory">CollapsibleCategory</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/SortedList" title="Lua/Client/SortedList">SortedList</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/TreeNode" title="Lua/Client/TreeNode">TreeNode</a>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/Tree" title="Lua/Client/Tree">Tree</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><dl>
<dd><a href="/Lua/Client/PropertyTree" title="Lua/Client/PropertyTree">PropertyTree</a>
</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/PropertyBase" title="Lua/Client/PropertyBase">PropertyBase</a>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/PropertyText" title="Lua/Client/PropertyText">PropertyText</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/PropertyCheckBox" title="Lua/Client/PropertyCheckBox">PropertyCheckBox</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/PropertyColorSelector" title="Lua/Client/PropertyColorSelector">PropertyColorSelector</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/PropertyComboBox" title="Lua/Client/PropertyComboBox">PropertyComboBox</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/PropertyRow" title="Lua/Client/PropertyRow">PropertyRow</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/Properties" title="Lua/Client/Properties">Properties</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/ResizableControl" title="Lua/Client/ResizableControl">ResizableControl</a>
</dd>
</dl>
<dl>
<dd><dl>
<dd><a href="/Lua/Client/Window" title="Lua/Client/Window">Window</a>
</dd>
</dl>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/TabControl" title="Lua/Client/TabControl">TabControl</a>
</dd>
</dl>
<dl>
<dd><a href="/Lua/Client/PageControl" title="Lua/Client/PageControl">PageControl</a>
</dd>
</dl>
<p></font>
</p>
<h2><span class="mw-headline" id="Enums">Enums</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Client/Action" title="Lua/Client/Action">Action</a></b>
</p><p><b><a href="/Lua/Client/AssetLocation" title="Lua/Client/AssetLocation">AssetLocation</a></b>
</p><p><b><a href="/Lua/Client/AvatarSize" title="Lua/Client/AvatarSize">AvatarSize</a></b>
</p><p><b><a href="/Lua/Client/ClimateZone" title="Lua/Client/ClimateZone">ClimateZone</a></b>
</p><p><b><a href="/Lua/Client/CursorType" title="Lua/Client/CursorType">CursorType</a></b>
</p><p><b><a href="/Lua/Client/GUIState" title="Lua/Client/GUIState">GUIState</a></b>
</p><p><b><a href="/Lua/Client/GameSetting" title="Lua/Client/GameSetting">GameSetting</a></b>
</p><p><b><a href="/Lua/Client/GwenPosition" title="Lua/Client/GwenPosition">GwenPosition</a></b>
</p><p><b><a href="/Lua/Client/HeatLevel" title="Lua/Client/HeatLevel">HeatLevel</a></b>
</p><p><b><a href="/Lua/Client/TextSize" title="Lua/Client/TextSize">TextSize</a></b>
</p><p><b><a href="/Lua/Client/Topology" title="Lua/Client/Topology">Topology</a></b>
</p><p><b><a href="/Lua/Client/TriggerType" title="Lua/Client/TriggerType">TriggerType</a></b>
</p><p><b><a href="/Lua/Client/VehicleSeat" title="Lua/Client/VehicleSeat">VehicleSeat</a></b>
</p><p><b><a href="/Lua/Client/VehicleTriggerType" title="Lua/Client/VehicleTriggerType">VehicleTriggerType</a></b>
</p><p><b><a href="/Lua/Client/VirtualKey" title="Lua/Client/VirtualKey">VirtualKey</a></b>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Events">Events</span></h2>
<p><font size="3">
</p><p><b><a href="/Lua/Events/Client/CalcView" title="Lua/Events/Client/CalcView">CalcView</a></b>
</p><p><b><a href="/Lua/Events/Client/CharPress" title="Lua/Events/Client/CharPress">CharPress</a></b>
</p><p><b><a href="/Lua/Events/Client/GameLoad" title="Lua/Events/Client/GameLoad">GameLoad</a></b>
</p><p><b><a href="/Lua/Events/Client/GameRender" title="Lua/Events/Client/GameRender">GameRender</a></b>
</p><p><b><a href="/Lua/Events/Client/InputPoll" title="Lua/Events/Client/InputPoll">InputPoll</a></b>
</p><p><b><a href="/Lua/Events/Client/KeyDown" title="Lua/Events/Client/KeyDown">KeyDown</a></b>
</p><p><b><a href="/Lua/Events/Client/KeyUp" title="Lua/Events/Client/KeyUp">KeyUp</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerBulletHit" title="Lua/Events/Client/LocalPlayerBulletHit">LocalPlayerBulletHit</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerChat" title="Lua/Events/Client/LocalPlayerChat">LocalPlayerChat</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerDeath" title="Lua/Events/Client/LocalPlayerDeath">LocalPlayerDeath</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerEjectVehicle" title="Lua/Events/Client/LocalPlayerEjectVehicle">LocalPlayerEjectVehicle</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerEnterVehicle" title="Lua/Events/Client/LocalPlayerEnterVehicle">LocalPlayerEnterVehicle</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerExitVehicle" title="Lua/Events/Client/LocalPlayerExitVehicle">LocalPlayerExitVehicle</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerExplosionHit" title="Lua/Events/Client/LocalPlayerExplosionHit">LocalPlayerExplosionHit</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerForcePulseHit" title="Lua/Events/Client/LocalPlayerForcePulseHit">LocalPlayerForcePulseHit</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerInput" title="Lua/Events/Client/LocalPlayerInput">LocalPlayerInput</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerMoneyChange" title="Lua/Events/Client/LocalPlayerMoneyChange">LocalPlayerMoneyChange</a></b>
</p><p><b><a href="/Lua/Events/Client/LocalPlayerWorldChange" title="Lua/Events/Client/LocalPlayerWorldChange">LocalPlayerWorldChange</a></b>
</p><p><b><a href="/Lua/Events/Client/MouseDown" title="Lua/Events/Client/MouseDown">MouseDown</a></b>
</p><p><b><a href="/Lua/Events/Client/MouseMove" title="Lua/Events/Client/MouseMove">MouseMove</a></b>
</p><p><b><a href="/Lua/Events/Client/MouseScroll" title="Lua/Events/Client/MouseScroll">MouseScroll</a></b>
</p><p><b><a href="/Lua/Events/Client/MouseUp" title="Lua/Events/Client/MouseUp">MouseUp</a></b>
</p><p><b><a href="/Lua/Events/Client/PlayerAchievementUnlock" title="Lua/Events/Client/PlayerAchievementUnlock">PlayerAchievementUnlock</a></b>
</p><p><b><a href="/Lua/Events/Client/PostRender" title="Lua/Events/Client/PostRender">PostRender</a></b>
</p><p><b><a href="/Lua/Events/Client/Render" title="Lua/Events/Client/Render">Render</a></b>
</p><p><b><a href="/Lua/Events/Client/ResolutionChange" title="Lua/Events/Client/ResolutionChange">ResolutionChange</a></b>
</p><p><b><a href="/Lua/Events/Client/ShapeTriggerEnter" title="Lua/Events/Client/ShapeTriggerEnter">ShapeTriggerEnter</a></b>
</p><p><b><a href="/Lua/Events/Client/ShapeTriggerExit" title="Lua/Events/Client/ShapeTriggerExit">ShapeTriggerExit</a></b>
</p><p><b><a href="/Lua/Events/Client/VehicleCollide" title="Lua/Events/Client/VehicleCollide">VehicleCollide</a></b>
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
 
 
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Client&amp;oldid=27457">http://wiki.jc-mp.com/index.php?title=Lua/Client&amp;oldid=27457</a>"</div>
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
<li id="f-lastmod"> This page was last modified on 8 November 2015, at 19:20.</li>
<li id="f-viewcount">This page has been accessed 25,805 times.</li>
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
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":128});
}</script></body></html>