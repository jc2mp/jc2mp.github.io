<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8"/>
<title>Lua/Client/ComboBox - JC2-MP Documentation</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE"/>
<meta name="generator" content="MediaWiki 1.23.2"/>
<meta name="robots" content="noindex,nofollow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok2v=1613a3a185/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"96662fe334ed33dc1d91768df88e5781d21c4193-1413193267-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok2v=919620257c/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Client/ComboBox","wgTitle":"Lua/Client/ComboBox","wgCurRevisionId":25973,"wgRevisionId":25973,"wgArticleId":3647,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Client/ComboBox","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:7f77fa4f43bf4c4bcff833b005ee38c1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Client_ComboBox skin-cavendish action-view"><script type="text/javascript">
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
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FClient%2FComboBox&amp;returntoquery=oldid%3D25973">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Client/ComboBox - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Client/ComboBox" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Client/ComboBox&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Client/ComboBox&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Client/ComboBox&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Client/ComboBox" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Client/ComboBox" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-print"><a href="/index.php?title=Lua/Client/ComboBox&amp;oldid=25973&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Client/ComboBox&amp;oldid=25973" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Client/ComboBox&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Lua/Client/ComboBox</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a>&lrm; | <a href="/Lua/Client" title="Lua/Client">Client</a></span><div id="mw-revision-info">Revision as of 04:49, 3 February 2014 by <a href="/User:Dreadmullet" title="User:Dreadmullet" class="mw-userlink">Dreadmullet</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:Dreadmullet&amp;action=edit&amp;redlink=1" class="new" title="User talk:Dreadmullet (page does not exist)">Talk</a> | <a href="/Special:Contributions/Dreadmullet" title="Special:Contributions/Dreadmullet">contribs</a>)</span></div><br/>
<div id="mw-revision-nav">(<a href="/index.php?title=Lua/Client/ComboBox&amp;diff=prev&amp;oldid=25973" title="Lua/Client/ComboBox">diff</a>) <a href="/index.php?title=Lua/Client/ComboBox&amp;direction=prev&amp;oldid=25973" title="Lua/Client/ComboBox">← Older revision</a> | Latest revision (diff) | Newer revision → (diff)</div></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Events"><span class="tocnumber">1</span> <span class="toctext">Events</span></a>
<ul>
<li class="toclevel-2 tocsection-2"><a href="#Events_inherited_from_Button"><span class="tocnumber">1.1</span> <span class="toctext">Events inherited from Button</span></a></li>
<li class="toclevel-2 tocsection-3"><a href="#Events_inherited_from_BaseWindow"><span class="tocnumber">1.2</span> <span class="toctext">Events inherited from BaseWindow</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-4"><a href="#Static_functions"><span class="tocnumber">2</span> <span class="toctext">Static functions</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Functions"><span class="tocnumber">3</span> <span class="toctext">Functions</span></a>
<ul>
<li class="toclevel-2 tocsection-6"><a href="#Functions_inherited_from_Button"><span class="tocnumber">3.1</span> <span class="toctext">Functions inherited from Button</span></a></li>
<li class="toclevel-2 tocsection-7"><a href="#Functions_inherited_from_Label"><span class="tocnumber">3.2</span> <span class="toctext">Functions inherited from Label</span></a></li>
<li class="toclevel-2 tocsection-8"><a href="#Functions_inherited_from_BaseWindow"><span class="tocnumber">3.3</span> <span class="toctext">Functions inherited from BaseWindow</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-9"><a href="#Operators"><span class="tocnumber">4</span> <span class="toctext">Operators</span></a></li>
</ul>
</div>
<h2><span class="mw-headline" id="Events">Events</span></h2>
<p><font size="3">
</p><p><a href="/Lua/Client/ComboBox/Events/Selection" title="Lua/Client/ComboBox/Events/Selection">Selection</a>
</p>
<h3><span class="mw-headline" id="Events_inherited_from_Button">Events inherited from <a href="/Lua/Client/Button" title="Lua/Client/Button">Button</a></span></h3>
<p><a href="/Lua/Client/Button/Events/DoubleClick" title="Lua/Client/Button/Events/DoubleClick">DoubleClick</a>
</p><p><a href="/Lua/Client/Button/Events/Down" title="Lua/Client/Button/Events/Down">Down</a>
</p><p><a href="/Lua/Client/Button/Events/Press" title="Lua/Client/Button/Events/Press">Press</a>
</p><p><a href="/Lua/Client/Button/Events/RightPress" title="Lua/Client/Button/Events/RightPress">RightPress</a>
</p><p><a href="/Lua/Client/Button/Events/Toggle" title="Lua/Client/Button/Events/Toggle">Toggle</a>
</p><p><a href="/Lua/Client/Button/Events/ToggleOff" title="Lua/Client/Button/Events/ToggleOff">ToggleOff</a>
</p><p><a href="/Lua/Client/Button/Events/ToggleOn" title="Lua/Client/Button/Events/ToggleOn">ToggleOn</a>
</p><p><a href="/Lua/Client/Button/Events/Up" title="Lua/Client/Button/Events/Up">Up</a>
</p>
<h3><span class="mw-headline" id="Events_inherited_from_BaseWindow">Events inherited from <a href="/Lua/Client/BaseWindow" title="Lua/Client/BaseWindow">BaseWindow</a></span></h3>
<p><a href="/Lua/Client/BaseWindow/Events/Blur" title="Lua/Client/BaseWindow/Events/Blur">Blur</a>
</p><p><a href="/Lua/Client/BaseWindow/Events/Focus" title="Lua/Client/BaseWindow/Events/Focus">Focus</a>
</p><p><a href="/Lua/Client/BaseWindow/Events/HoverEnter" title="Lua/Client/BaseWindow/Events/HoverEnter">HoverEnter</a>
</p><p><a href="/Lua/Client/BaseWindow/Events/HoverLeave" title="Lua/Client/BaseWindow/Events/HoverLeave">HoverLeave</a>
</p><p><a href="/Lua/Client/BaseWindow/Events/PostRender" title="Lua/Client/BaseWindow/Events/PostRender">PostRender</a>
</p><p><a href="/Lua/Client/BaseWindow/Events/PreRender" title="Lua/Client/BaseWindow/Events/PreRender">PreRender</a>
</p><p><a href="/Lua/Client/BaseWindow/Events/Render" title="Lua/Client/BaseWindow/Events/Render">Render</a>
</p><p></font>
</p>
<h2><span class="mw-headline" id="Static_functions">Static functions</span></h2>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="135"> Returns
</th>
<th width="450"> Prototype
</th></tr>
<tr>
<td align="right"> ComboBox
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Static_Functions/Create" title="Lua/Client/ComboBox/Static Functions/Create">Create</a>(<a href="/Lua/Client/BaseWindow" title="Lua/Client/BaseWindow">BaseWindow</a>, string)
</td></tr>
<tr>
<td align="right"> ComboBox
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Static_Functions/Create" title="Lua/Client/ComboBox/Static Functions/Create">Create</a>(string)
</td></tr>
<tr>
<td align="right"> ComboBox
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Static_Functions/Create" title="Lua/Client/ComboBox/Static Functions/Create">Create</a>(<a href="/Lua/Client/BaseWindow" title="Lua/Client/BaseWindow">BaseWindow</a>)
</td></tr>
<tr>
<td align="right"> ComboBox
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Static_Functions/Create" title="Lua/Client/ComboBox/Static Functions/Create">Create</a>()
</td></tr></table> </font>
<h2><span class="mw-headline" id="Functions">Functions</span></h2>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="135"> Returns
</th>
<th width="450"> Prototype
</th></tr>
<tr>
<td align="right"> <a href="/Lua/Client/MenuItem" title="Lua/Client/MenuItem">MenuItem</a>
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Functions/AddItem" title="Lua/Client/ComboBox/Functions/AddItem">AddItem</a>(string, string)
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Client/MenuItem" title="Lua/Client/MenuItem">MenuItem</a>
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Functions/AddItem" title="Lua/Client/ComboBox/Functions/AddItem">AddItem</a>(string)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Functions/ClearItems" title="Lua/Client/ComboBox/Functions/ClearItems">ClearItems</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Functions/GetMenuOpen" title="Lua/Client/ComboBox/Functions/GetMenuOpen">GetMenuOpen</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Client/Label" title="Lua/Client/Label">Label</a>
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Functions/GetSelectedItem" title="Lua/Client/ComboBox/Functions/GetSelectedItem">GetSelectedItem</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Functions/RemoveItem" title="Lua/Client/ComboBox/Functions/RemoveItem">RemoveItem</a>(<a href="/Lua/Client/MenuItem" title="Lua/Client/MenuItem">MenuItem</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Functions/SelectItem" title="Lua/Client/ComboBox/Functions/SelectItem">SelectItem</a>(<a href="/Lua/Client/MenuItem" title="Lua/Client/MenuItem">MenuItem</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/ComboBox/Functions/SelectItemByName" title="Lua/Client/ComboBox/Functions/SelectItemByName">SelectItemByName</a>(string)
</td></tr></table> </font>
<h3><span class="mw-headline" id="Functions_inherited_from_Button">Functions inherited from <a href="/Lua/Client/Button" title="Lua/Client/Button">Button</a></span></h3>
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
<td align="left"> <a href="/Lua/Client/Button/Functions/GetPressed" title="Lua/Client/Button/Functions/GetPressed">GetPressed</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/Button/Functions/GetToggleState" title="Lua/Client/Button/Functions/GetToggleState">GetToggleState</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/Button/Functions/GetToggleable" title="Lua/Client/Button/Functions/GetToggleable">GetToggleable</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Button/Functions/SetPressed" title="Lua/Client/Button/Functions/SetPressed">SetPressed</a>(boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Button/Functions/SetTextNormalColor" title="Lua/Client/Button/Functions/SetTextNormalColor">SetTextNormalColor</a>(<a href="/Lua/Shared/Color" title="Lua/Shared/Color">Color</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Button/Functions/SetTextHoveredColor" title="Lua/Client/Button/Functions/SetTextHoveredColor">SetTextHoveredColor</a>(<a href="/Lua/Shared/Color" title="Lua/Shared/Color">Color</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Button/Functions/SetTextPressedColor" title="Lua/Client/Button/Functions/SetTextPressedColor">SetTextPressedColor</a>(<a href="/Lua/Shared/Color" title="Lua/Shared/Color">Color</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Button/Functions/SetTextDisabledColor" title="Lua/Client/Button/Functions/SetTextDisabledColor">SetTextDisabledColor</a>(<a href="/Lua/Shared/Color" title="Lua/Shared/Color">Color</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Button/Functions/SetToggleState" title="Lua/Client/Button/Functions/SetToggleState">SetToggleState</a>(boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Button/Functions/SetToggleable" title="Lua/Client/Button/Functions/SetToggleable">SetToggleable</a>(boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Button/Functions/Toggle" title="Lua/Client/Button/Functions/Toggle">Toggle</a>()
</td></tr></table> </font>
<h3><span class="mw-headline" id="Functions_inherited_from_Label">Functions inherited from <a href="/Lua/Client/Label" title="Lua/Client/Label">Label</a></span></h3>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="135"> Returns
</th>
<th width="450"> Prototype
</th></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/GetAlignment" title="Lua/Client/Label/Functions/GetAlignment">GetAlignment</a>()
</td></tr>
<tr>
<td align="right"> string
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/GetText" title="Lua/Client/Label/Functions/GetText">GetText</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Color" title="Lua/Shared/Color">Color</a>
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/GetTextColor" title="Lua/Client/Label/Functions/GetTextColor">GetTextColor</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/GetTextHeight" title="Lua/Client/Label/Functions/GetTextHeight">GetTextHeight</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/GetTextLength" title="Lua/Client/Label/Functions/GetTextLength">GetTextLength</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/GetTextPadding" title="Lua/Client/Label/Functions/GetTextPadding">GetTextPadding</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/GetTextSize" title="Lua/Client/Label/Functions/GetTextSize">GetTextSize</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/GetTextWidth" title="Lua/Client/Label/Functions/GetTextWidth">GetTextWidth</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/GetWrap" title="Lua/Client/Label/Functions/GetWrap">GetWrap</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetAlignment" title="Lua/Client/Label/Functions/SetAlignment">SetAlignment</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetColorBright" title="Lua/Client/Label/Functions/SetColorBright">SetColorBright</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetColorDark" title="Lua/Client/Label/Functions/SetColorDark">SetColorDark</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetColorHighlight" title="Lua/Client/Label/Functions/SetColorHighlight">SetColorHighlight</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetColorNormal" title="Lua/Client/Label/Functions/SetColorNormal">SetColorNormal</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetText" title="Lua/Client/Label/Functions/SetText">SetText</a>(string, boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetText" title="Lua/Client/Label/Functions/SetText">SetText</a>(string)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetTextColor" title="Lua/Client/Label/Functions/SetTextColor">SetTextColor</a>(<a href="/Lua/Shared/Color" title="Lua/Shared/Color">Color</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetTextPadding" title="Lua/Client/Label/Functions/SetTextPadding">SetTextPadding</a>(<a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>, <a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetTextSize" title="Lua/Client/Label/Functions/SetTextSize">SetTextSize</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SetWrap" title="Lua/Client/Label/Functions/SetWrap">SetWrap</a>(boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/Label/Functions/SizeToContents" title="Lua/Client/Label/Functions/SizeToContents">SizeToContents</a>()
</td></tr></table> </font>
<h3><span class="mw-headline" id="Functions_inherited_from_BaseWindow">Functions inherited from <a href="/Lua/Client/BaseWindow" title="Lua/Client/BaseWindow">BaseWindow</a></span></h3>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="135"> Returns
</th>
<th width="450"> Prototype
</th></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/AbsoluteToRelative" title="Lua/Client/BaseWindow/Functions/AbsoluteToRelative">AbsoluteToRelative</a>(<a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/Blur" title="Lua/Client/BaseWindow/Functions/Blur">Blur</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/BringToFront" title="Lua/Client/BaseWindow/Functions/BringToFront">BringToFront</a>()
</td></tr>
<tr>
<td align="right"> Base
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/FindChildByName" title="Lua/Client/BaseWindow/Functions/FindChildByName">FindChildByName</a>(string)
</td></tr>
<tr>
<td align="right"> Base
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/FindChildByName" title="Lua/Client/BaseWindow/Functions/FindChildByName">FindChildByName</a>(string, boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/Focus" title="Lua/Client/BaseWindow/Functions/Focus">Focus</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetBackgroundVisible" title="Lua/Client/BaseWindow/Functions/GetBackgroundVisible">GetBackgroundVisible</a>()
</td></tr>
<tr>
<td align="right"> BaseWindow
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetChild" title="Lua/Client/BaseWindow/Functions/GetChild">GetChild</a>(number)
</td></tr>
<tr>
<td align="right"> object
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetChildren" title="Lua/Client/BaseWindow/Functions/GetChildren">GetChildren</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetDataBool" title="Lua/Client/BaseWindow/Functions/GetDataBool">GetDataBool</a>(string)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetDataNumber" title="Lua/Client/BaseWindow/Functions/GetDataNumber">GetDataNumber</a>(string)
</td></tr>
<tr>
<td align="right"> object
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetDataObject" title="Lua/Client/BaseWindow/Functions/GetDataObject">GetDataObject</a>(string)
</td></tr>
<tr>
<td align="right"> string
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetDataString" title="Lua/Client/BaseWindow/Functions/GetDataString">GetDataString</a>(string)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetDock" title="Lua/Client/BaseWindow/Functions/GetDock">GetDock</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetEnabled" title="Lua/Client/BaseWindow/Functions/GetEnabled">GetEnabled</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetFocused" title="Lua/Client/BaseWindow/Functions/GetFocused">GetFocused</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetHeight" title="Lua/Client/BaseWindow/Functions/GetHeight">GetHeight</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/index.php?title=Lua/Client/BaseWindow/Functions/GetHeightRel&amp;action=edit&amp;redlink=1" class="new" title="Lua/Client/BaseWindow/Functions/GetHeightRel (page does not exist)">GetHeightRel</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetHovered" title="Lua/Client/BaseWindow/Functions/GetHovered">GetHovered</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetMargin" title="Lua/Client/BaseWindow/Functions/GetMargin">GetMargin</a>()
</td></tr>
<tr>
<td align="right"> string
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetName" title="Lua/Client/BaseWindow/Functions/GetName">GetName</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetNumChildren" title="Lua/Client/BaseWindow/Functions/GetNumChildren">GetNumChildren</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetOnTop" title="Lua/Client/BaseWindow/Functions/GetOnTop">GetOnTop</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetPadding" title="Lua/Client/BaseWindow/Functions/GetPadding">GetPadding</a>()
</td></tr>
<tr>
<td align="right"> BaseWindow
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetParent" title="Lua/Client/BaseWindow/Functions/GetParent">GetParent</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetPosition" title="Lua/Client/BaseWindow/Functions/GetPosition">GetPosition</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetPositionRel" title="Lua/Client/BaseWindow/Functions/GetPositionRel">GetPositionRel</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetSize" title="Lua/Client/BaseWindow/Functions/GetSize">GetSize</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetSizeRel" title="Lua/Client/BaseWindow/Functions/GetSizeRel">GetSizeRel</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetTabNavigation" title="Lua/Client/BaseWindow/Functions/GetTabNavigation">GetTabNavigation</a>()
</td></tr>
<tr>
<td align="right"> BaseWindow
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetToolTip" title="Lua/Client/BaseWindow/Functions/GetToolTip">GetToolTip</a>()
</td></tr>
<tr>
<td align="right"> string
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetType" title="Lua/Client/BaseWindow/Functions/GetType">GetType</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetVisible" title="Lua/Client/BaseWindow/Functions/GetVisible">GetVisible</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/GetWidth" title="Lua/Client/BaseWindow/Functions/GetWidth">GetWidth</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/index.php?title=Lua/Client/BaseWindow/Functions/GetWidthRel&amp;action=edit&amp;redlink=1" class="new" title="Lua/Client/BaseWindow/Functions/GetWidthRel (page does not exist)">GetWidthRel</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/Hide" title="Lua/Client/BaseWindow/Functions/Hide">Hide</a>()
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/IsChild" title="Lua/Client/BaseWindow/Functions/IsChild">IsChild</a>(BaseWindow)
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/RelativeToAbsolute" title="Lua/Client/BaseWindow/Functions/RelativeToAbsolute">RelativeToAbsolute</a>(<a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/Remove" title="Lua/Client/BaseWindow/Functions/Remove">Remove</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/RemoveAllChildren" title="Lua/Client/BaseWindow/Functions/RemoveAllChildren">RemoveAllChildren</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SendToBack" title="Lua/Client/BaseWindow/Functions/SendToBack">SendToBack</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetBackgroundVisible" title="Lua/Client/BaseWindow/Functions/SetBackgroundVisible">SetBackgroundVisible</a>(boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetDataBool" title="Lua/Client/BaseWindow/Functions/SetDataBool">SetDataBool</a>(string, boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetDataNumber" title="Lua/Client/BaseWindow/Functions/SetDataNumber">SetDataNumber</a>(string, number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetDataObject" title="Lua/Client/BaseWindow/Functions/SetDataObject">SetDataObject</a>(string, object)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetDataString" title="Lua/Client/BaseWindow/Functions/SetDataString">SetDataString</a>(string, string)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetDock" title="Lua/Client/BaseWindow/Functions/SetDock">SetDock</a>(<a href="/Lua/Client/GwenPosition" title="Lua/Client/GwenPosition">GwenPosition</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetEnabled" title="Lua/Client/BaseWindow/Functions/SetEnabled">SetEnabled</a>(boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetHeight" title="Lua/Client/BaseWindow/Functions/SetHeight">SetHeight</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/index.php?title=Lua/Client/BaseWindow/Functions/SetHeightRel&amp;action=edit&amp;redlink=1" class="new" title="Lua/Client/BaseWindow/Functions/SetHeightRel (page does not exist)">SetHeightRel</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/index.php?title=Lua/Client/BaseWindow/Functions/SetHeightAutoRel&amp;action=edit&amp;redlink=1" class="new" title="Lua/Client/BaseWindow/Functions/SetHeightAutoRel (page does not exist)">SetHeightAutoRel</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetMargin" title="Lua/Client/BaseWindow/Functions/SetMargin">SetMargin</a>(<a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>, <a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetName" title="Lua/Client/BaseWindow/Functions/SetName">SetName</a>(string)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetPadding" title="Lua/Client/BaseWindow/Functions/SetPadding">SetPadding</a>(<a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>, <a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetParent" title="Lua/Client/BaseWindow/Functions/SetParent">SetParent</a>(BaseWindow)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetPosition" title="Lua/Client/BaseWindow/Functions/SetPosition">SetPosition</a>(<a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetPositionRel" title="Lua/Client/BaseWindow/Functions/SetPositionRel">SetPositionRel</a>(<a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetSize" title="Lua/Client/BaseWindow/Functions/SetSize">SetSize</a>(<a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/index.php?title=Lua/Client/BaseWindow/Functions/SetSizeAutoRel&amp;action=edit&amp;redlink=1" class="new" title="Lua/Client/BaseWindow/Functions/SetSizeAutoRel (page does not exist)">SetSizeAutoRel</a>(<a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetSizeRel" title="Lua/Client/BaseWindow/Functions/SetSizeRel">SetSizeRel</a>(<a href="/Lua/Shared/Vector2" title="Lua/Shared/Vector2">Vector2</a>)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetTabNavigation" title="Lua/Client/BaseWindow/Functions/SetTabNavigation">SetTabNavigation</a>(boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetToolTip" title="Lua/Client/BaseWindow/Functions/SetToolTip">SetToolTip</a>(string)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetVisible" title="Lua/Client/BaseWindow/Functions/SetVisible">SetVisible</a>(boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SetWidth" title="Lua/Client/BaseWindow/Functions/SetWidth">SetWidth</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/index.php?title=Lua/Client/BaseWindow/Functions/SetWidthRel&amp;action=edit&amp;redlink=1" class="new" title="Lua/Client/BaseWindow/Functions/SetWidthRel (page does not exist)">SetWidthRel</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/index.php?title=Lua/Client/BaseWindow/Functions/SetWidthAutoRel&amp;action=edit&amp;redlink=1" class="new" title="Lua/Client/BaseWindow/Functions/SetWidthAutoRel (page does not exist)">SetWidthAutoRel</a>(number)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/Show" title="Lua/Client/BaseWindow/Functions/Show">Show</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SizeToChildren" title="Lua/Client/BaseWindow/Functions/SizeToChildren">SizeToChildren</a>(boolean, boolean)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/SizeToChildren" title="Lua/Client/BaseWindow/Functions/SizeToChildren">SizeToChildren</a>()
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Event" title="Lua/Shared/Event">Event</a>
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/Subscribe" title="Lua/Client/BaseWindow/Functions/Subscribe">Subscribe</a>(string, object, object)
</td></tr>
<tr>
<td align="right"> <a href="/Lua/Shared/Event" title="Lua/Shared/Event">Event</a>
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/Subscribe" title="Lua/Client/BaseWindow/Functions/Subscribe">Subscribe</a>(string, object)
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/Touch" title="Lua/Client/BaseWindow/Functions/Touch">Touch</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Client/BaseWindow/Functions/Unsubscribe" title="Lua/Client/BaseWindow/Functions/Unsubscribe">Unsubscribe</a>(<a href="/Lua/Shared/Event" title="Lua/Shared/Event">Event</a>)
</td></tr></table> </font>
<h2><span class="mw-headline" id="Operators">Operators</span></h2>
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
<td align="left"> ComboBox == ComboBox
</td></tr></table> </font>
 
 
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Client/ComboBox&amp;oldid=25973">http://wiki.jc-mp.com/index.php?title=Lua/Client/ComboBox&amp;oldid=25973</a>"</div>
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
<li id="f-lastmod"> This page was last modified on 3 February 2014, at 04:49.</li>
<li id="f-viewcount">This page has been accessed 438 times.</li>
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
mw.config.set({"wgBackendResponseTime":348});
}</script></body></html>