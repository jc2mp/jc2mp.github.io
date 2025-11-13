<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8"/>
<title>Lua/Client/Key - JC2-MP Documentation</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE"/>
<meta name="generator" content="MediaWiki 1.23.9"/>
<meta name="robots" content="noindex,follow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1439098721,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"3d4685a8242fc8ea9ad5ff8147ae6aeb",petok:"2d4c3c4896eb4b438a203c937191831e2c041859-1439263843-1800",betok:"41d2201ede7c12ad39e929897b8f397a9afbee25-1439263843-120",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=d134393e0a/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Client/Key","wgTitle":"Lua/Client/Key","wgCurRevisionId":25985,"wgRevisionId":25985,"wgArticleId":3659,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Client/Key","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:7f77fa4f43bf4c4bcff833b005ee38c1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Client_Key skin-cavendish action-view"><script type="text/javascript">
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
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FClient%2FKey&amp;returntoquery=printable%3Dyes">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Client/Key - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Client/Key" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Client/Key&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Client/Key&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Client/Key&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Client/Key" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Client/Key" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Client/Key&amp;oldid=25985" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Client/Key&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Lua/Client/Key</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a>&lrm; | <a href="/Lua/Client" title="Lua/Client">Client</a></span></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p><b>Note: As of 0.1.2, the statics are part of VirtualKey, not Key. This was an oversight and it will likely be merged into Key.</b>
</p>
<div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Functions"><span class="tocnumber">1</span> <span class="toctext">Functions</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Statics"><span class="tocnumber">2</span> <span class="toctext">Statics</span></a>
<ul>
<li class="toclevel-2 tocsection-3"><a href="#Common"><span class="tocnumber">2.1</span> <span class="toctext">Common</span></a></li>
<li class="toclevel-2 tocsection-4"><a href="#Full_list"><span class="tocnumber">2.2</span> <span class="toctext">Full list</span></a></li>
</ul>
</li>
</ul>
</div>
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
<td align="right"> boolean
</td>
<td align="left"> <a href="/Lua/Client/Key/Functions/IsDown" title="Lua/Client/Key/Functions/IsDown">IsDown</a>(number)
</td></tr></table> </font>
<h2><span class="mw-headline" id="Statics">Statics</span></h2>
<p>These are based on virtual-key codes used by the Windows API. <a rel="nofollow" class="external text" href="http://msdn.microsoft.com/en-us/library/windows/desktop/dd375731%28v=vs.85%29.aspx">See here for reference</a>.
</p>
<h4><span class="mw-headline" id="Common">Common</span></h4>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="200"> Name
</th>
<th width="40"> Value
</th></tr>
<tr>
<td align="left"> Add
</td>
<td align="left"> 107
</td></tr>
<tr>
<td align="left"> Back
</td>
<td align="left"> 8
</td></tr>
<tr>
<td align="left"> Control
</td>
<td align="left"> 17
</td></tr>
<tr>
<td align="left"> Decimal
</td>
<td align="left"> 110
</td></tr>
<tr>
<td align="left"> Delete
</td>
<td align="left"> 46
</td></tr>
<tr>
<td align="left"> Divide
</td>
<td align="left"> 111
</td></tr>
<tr>
<td align="left"> Down
</td>
<td align="left"> 40
</td></tr>
<tr>
<td align="left"> End
</td>
<td align="left"> 35
</td></tr>
<tr>
<td align="left"> Escape
</td>
<td align="left"> 27
</td></tr>
<tr>
<td align="left"> F1
</td>
<td align="left"> 112
</td></tr>
<tr>
<td align="left"> F2
</td>
<td align="left"> 113
</td></tr>
<tr>
<td align="left"> F3
</td>
<td align="left"> 114
</td></tr>
<tr>
<td align="left"> F4
</td>
<td align="left"> 115
</td></tr>
<tr>
<td align="left"> F5
</td>
<td align="left"> 116
</td></tr>
<tr>
<td align="left"> F6
</td>
<td align="left"> 117
</td></tr>
<tr>
<td align="left"> F7
</td>
<td align="left"> 118
</td></tr>
<tr>
<td align="left"> F8
</td>
<td align="left"> 119
</td></tr>
<tr>
<td align="left"> F9
</td>
<td align="left"> 120
</td></tr>
<tr>
<td align="left"> F10
</td>
<td align="left"> 121
</td></tr>
<tr>
<td align="left"> F11
</td>
<td align="left"> 122
</td></tr>
<tr>
<td align="left"> F12
</td>
<td align="left"> 123
</td></tr>
<tr>
<td align="left"> Home
</td>
<td align="left"> 36
</td></tr>
<tr>
<td align="left"> Insert
</td>
<td align="left"> 45
</td></tr>
<tr>
<td align="left"> LButton
</td>
<td align="left"> 1
</td></tr>
<tr>
<td align="left"> LControl
</td>
<td align="left"> 162
</td></tr>
<tr>
<td align="left"> LMenu
</td>
<td align="left"> 164
</td></tr>
<tr>
<td align="left"> LShift
</td>
<td align="left"> 160
</td></tr>
<tr>
<td align="left"> Left
</td>
<td align="left"> 37
</td></tr>
<tr>
<td align="left"> MButton
</td>
<td align="left"> 4
</td></tr>
<tr>
<td align="left"> Menu
</td>
<td align="left"> 18
</td></tr>
<tr>
<td align="left"> Multiply
</td>
<td align="left"> 106
</td></tr>
<tr>
<td align="left"> Next
</td>
<td align="left"> 34
</td></tr>
<tr>
<td align="left"> Numlock
</td>
<td align="left"> 144
</td></tr>
<tr>
<td align="left"> Numpad0
</td>
<td align="left"> 96
</td></tr>
<tr>
<td align="left"> Numpad1
</td>
<td align="left"> 97
</td></tr>
<tr>
<td align="left"> Numpad2
</td>
<td align="left"> 98
</td></tr>
<tr>
<td align="left"> Numpad3
</td>
<td align="left"> 99
</td></tr>
<tr>
<td align="left"> Numpad4
</td>
<td align="left"> 100
</td></tr>
<tr>
<td align="left"> Numpad5
</td>
<td align="left"> 101
</td></tr>
<tr>
<td align="left"> Numpad6
</td>
<td align="left"> 102
</td></tr>
<tr>
<td align="left"> Numpad7
</td>
<td align="left"> 103
</td></tr>
<tr>
<td align="left"> Numpad8
</td>
<td align="left"> 104
</td></tr>
<tr>
<td align="left"> Numpad9
</td>
<td align="left"> 105
</td></tr>
<tr>
<td align="left"> Prior
</td>
<td align="left"> 33
</td></tr>
<tr>
<td align="left"> RButton
</td>
<td align="left"> 2
</td></tr>
<tr>
<td align="left"> RControl
</td>
<td align="left"> 163
</td></tr>
<tr>
<td align="left"> RMenu
</td>
<td align="left"> 165
</td></tr>
<tr>
<td align="left"> RShift
</td>
<td align="left"> 161
</td></tr>
<tr>
<td align="left"> Return
</td>
<td align="left"> 13
</td></tr>
<tr>
<td align="left"> Right
</td>
<td align="left"> 39
</td></tr>
<tr>
<td align="left"> Scroll
</td>
<td align="left"> 145
</td></tr>
<tr>
<td align="left"> Shift
</td>
<td align="left"> 16
</td></tr>
<tr>
<td align="left"> Snapshot
</td>
<td align="left"> 44
</td></tr>
<tr>
<td align="left"> Space
</td>
<td align="left"> 32
</td></tr>
<tr>
<td align="left"> Subtract
</td>
<td align="left"> 109
</td></tr>
<tr>
<td align="left"> Tab
</td>
<td align="left"> 9
</td></tr>
<tr>
<td align="left"> Up
</td>
<td align="left"> 38
</td></tr>
<tr>
<td align="left"> XButton1
</td>
<td align="left"> 5
</td></tr>
<tr>
<td align="left"> XButton2
</td>
<td align="left"> 6
</td></tr></table> </font>
<h4><span class="mw-headline" id="Full_list">Full list</span></h4>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="200"> Name
</th>
<th width="40"> Value
</th></tr>
<tr>
<td align="left"> Accept
</td>
<td align="left"> 30
</td></tr>
<tr>
<td align="left"> Add
</td>
<td align="left"> 107
</td></tr>
<tr>
<td align="left"> Apps
</td>
<td align="left"> 93
</td></tr>
<tr>
<td align="left"> Attn
</td>
<td align="left"> 246
</td></tr>
<tr>
<td align="left"> Back
</td>
<td align="left"> 8
</td></tr>
<tr>
<td align="left"> BrowserBack
</td>
<td align="left"> 166
</td></tr>
<tr>
<td align="left"> BrowserFavorites
</td>
<td align="left"> 171
</td></tr>
<tr>
<td align="left"> BrowserForward
</td>
<td align="left"> 167
</td></tr>
<tr>
<td align="left"> BrowserHome
</td>
<td align="left"> 172
</td></tr>
<tr>
<td align="left"> BrowserRefresh
</td>
<td align="left"> 168
</td></tr>
<tr>
<td align="left"> BrowserSearch
</td>
<td align="left"> 170
</td></tr>
<tr>
<td align="left"> BrowserStop
</td>
<td align="left"> 169
</td></tr>
<tr>
<td align="left"> Cancel
</td>
<td align="left"> 3
</td></tr>
<tr>
<td align="left"> Capital
</td>
<td align="left"> 20
</td></tr>
<tr>
<td align="left"> Clear
</td>
<td align="left"> 12
</td></tr>
<tr>
<td align="left"> Control
</td>
<td align="left"> 17
</td></tr>
<tr>
<td align="left"> Convert
</td>
<td align="left"> 28
</td></tr>
<tr>
<td align="left"> Crsel
</td>
<td align="left"> 247
</td></tr>
<tr>
<td align="left"> Decimal
</td>
<td align="left"> 110
</td></tr>
<tr>
<td align="left"> Delete
</td>
<td align="left"> 46
</td></tr>
<tr>
<td align="left"> Divide
</td>
<td align="left"> 111
</td></tr>
<tr>
<td align="left"> Down
</td>
<td align="left"> 40
</td></tr>
<tr>
<td align="left"> End
</td>
<td align="left"> 35
</td></tr>
<tr>
<td align="left"> Ereof
</td>
<td align="left"> 249
</td></tr>
<tr>
<td align="left"> Escape
</td>
<td align="left"> 27
</td></tr>
<tr>
<td align="left"> Execute
</td>
<td align="left"> 43
</td></tr>
<tr>
<td align="left"> Exsel
</td>
<td align="left"> 248
</td></tr>
<tr>
<td align="left"> F1
</td>
<td align="left"> 112
</td></tr>
<tr>
<td align="left"> F10
</td>
<td align="left"> 121
</td></tr>
<tr>
<td align="left"> F11
</td>
<td align="left"> 122
</td></tr>
<tr>
<td align="left"> F12
</td>
<td align="left"> 123
</td></tr>
<tr>
<td align="left"> F13
</td>
<td align="left"> 124
</td></tr>
<tr>
<td align="left"> F14
</td>
<td align="left"> 125
</td></tr>
<tr>
<td align="left"> F15
</td>
<td align="left"> 126
</td></tr>
<tr>
<td align="left"> F16
</td>
<td align="left"> 127
</td></tr>
<tr>
<td align="left"> F17
</td>
<td align="left"> 128
</td></tr>
<tr>
<td align="left"> F18
</td>
<td align="left"> 129
</td></tr>
<tr>
<td align="left"> F19
</td>
<td align="left"> 130
</td></tr>
<tr>
<td align="left"> F2
</td>
<td align="left"> 113
</td></tr>
<tr>
<td align="left"> F20
</td>
<td align="left"> 131
</td></tr>
<tr>
<td align="left"> F21
</td>
<td align="left"> 132
</td></tr>
<tr>
<td align="left"> F22
</td>
<td align="left"> 133
</td></tr>
<tr>
<td align="left"> F23
</td>
<td align="left"> 134
</td></tr>
<tr>
<td align="left"> F24
</td>
<td align="left"> 135
</td></tr>
<tr>
<td align="left"> F3
</td>
<td align="left"> 114
</td></tr>
<tr>
<td align="left"> F4
</td>
<td align="left"> 115
</td></tr>
<tr>
<td align="left"> F5
</td>
<td align="left"> 116
</td></tr>
<tr>
<td align="left"> F6
</td>
<td align="left"> 117
</td></tr>
<tr>
<td align="left"> F7
</td>
<td align="left"> 118
</td></tr>
<tr>
<td align="left"> F8
</td>
<td align="left"> 119
</td></tr>
<tr>
<td align="left"> F9
</td>
<td align="left"> 120
</td></tr>
<tr>
<td align="left"> Final
</td>
<td align="left"> 24
</td></tr>
<tr>
<td align="left"> Hangeul
</td>
<td align="left"> 21
</td></tr>
<tr>
<td align="left"> Hangul
</td>
<td align="left"> 21
</td></tr>
<tr>
<td align="left"> Hanja
</td>
<td align="left"> 25
</td></tr>
<tr>
<td align="left"> Help
</td>
<td align="left"> 47
</td></tr>
<tr>
<td align="left"> Home
</td>
<td align="left"> 36
</td></tr>
<tr>
<td align="left"> Ico00
</td>
<td align="left"> 228
</td></tr>
<tr>
<td align="left"> IcoHelp
</td>
<td align="left"> 227
</td></tr>
<tr>
<td align="left"> Insert
</td>
<td align="left"> 45
</td></tr>
<tr>
<td align="left"> Junja
</td>
<td align="left"> 23
</td></tr>
<tr>
<td align="left"> Kana
</td>
<td align="left"> 21
</td></tr>
<tr>
<td align="left"> Kanji
</td>
<td align="left"> 25
</td></tr>
<tr>
<td align="left"> LButton
</td>
<td align="left"> 1
</td></tr>
<tr>
<td align="left"> LControl
</td>
<td align="left"> 162
</td></tr>
<tr>
<td align="left"> LMenu
</td>
<td align="left"> 164
</td></tr>
<tr>
<td align="left"> LShift
</td>
<td align="left"> 160
</td></tr>
<tr>
<td align="left"> LWin
</td>
<td align="left"> 91
</td></tr>
<tr>
<td align="left"> LaunchApp1
</td>
<td align="left"> 182
</td></tr>
<tr>
<td align="left"> LaunchApp2
</td>
<td align="left"> 183
</td></tr>
<tr>
<td align="left"> LaunchMail
</td>
<td align="left"> 180
</td></tr>
<tr>
<td align="left"> LaunchMediaSelect
</td>
<td align="left"> 181
</td></tr>
<tr>
<td align="left"> Left
</td>
<td align="left"> 37
</td></tr>
<tr>
<td align="left"> MButton
</td>
<td align="left"> 4
</td></tr>
<tr>
<td align="left"> MediaNextTrack
</td>
<td align="left"> 176
</td></tr>
<tr>
<td align="left"> MediaPlayPause
</td>
<td align="left"> 179
</td></tr>
<tr>
<td align="left"> MediaPrevTrack
</td>
<td align="left"> 177
</td></tr>
<tr>
<td align="left"> MediaStop
</td>
<td align="left"> 178
</td></tr>
<tr>
<td align="left"> Menu
</td>
<td align="left"> 18
</td></tr>
<tr>
<td align="left"> Modechange
</td>
<td align="left"> 31
</td></tr>
<tr>
<td align="left"> Multiply
</td>
<td align="left"> 106
</td></tr>
<tr>
<td align="left"> Next
</td>
<td align="left"> 34
</td></tr>
<tr>
<td align="left"> Noname
</td>
<td align="left"> 252
</td></tr>
<tr>
<td align="left"> Nonconvert
</td>
<td align="left"> 29
</td></tr>
<tr>
<td align="left"> Numlock
</td>
<td align="left"> 144
</td></tr>
<tr>
<td align="left"> Numpad0
</td>
<td align="left"> 96
</td></tr>
<tr>
<td align="left"> Numpad1
</td>
<td align="left"> 97
</td></tr>
<tr>
<td align="left"> Numpad2
</td>
<td align="left"> 98
</td></tr>
<tr>
<td align="left"> Numpad3
</td>
<td align="left"> 99
</td></tr>
<tr>
<td align="left"> Numpad4
</td>
<td align="left"> 100
</td></tr>
<tr>
<td align="left"> Numpad5
</td>
<td align="left"> 101
</td></tr>
<tr>
<td align="left"> Numpad6
</td>
<td align="left"> 102
</td></tr>
<tr>
<td align="left"> Numpad7
</td>
<td align="left"> 103
</td></tr>
<tr>
<td align="left"> Numpad8
</td>
<td align="left"> 104
</td></tr>
<tr>
<td align="left"> Numpad9
</td>
<td align="left"> 105
</td></tr>
<tr>
<td align="left"> Oem1
</td>
<td align="left"> 186
</td></tr>
<tr>
<td align="left"> Oem102
</td>
<td align="left"> 226
</td></tr>
<tr>
<td align="left"> Oem2
</td>
<td align="left"> 191
</td></tr>
<tr>
<td align="left"> Oem3
</td>
<td align="left"> 192
</td></tr>
<tr>
<td align="left"> Oem4
</td>
<td align="left"> 219
</td></tr>
<tr>
<td align="left"> Oem5
</td>
<td align="left"> 220
</td></tr>
<tr>
<td align="left"> Oem6
</td>
<td align="left"> 221
</td></tr>
<tr>
<td align="left"> Oem7
</td>
<td align="left"> 222
</td></tr>
<tr>
<td align="left"> Oem8
</td>
<td align="left"> 223
</td></tr>
<tr>
<td align="left"> OemAttn
</td>
<td align="left"> 240
</td></tr>
<tr>
<td align="left"> OemAuto
</td>
<td align="left"> 243
</td></tr>
<tr>
<td align="left"> OemAx
</td>
<td align="left"> 225
</td></tr>
<tr>
<td align="left"> OemBacktab
</td>
<td align="left"> 245
</td></tr>
<tr>
<td align="left"> OemClear
</td>
<td align="left"> 254
</td></tr>
<tr>
<td align="left"> OemComma
</td>
<td align="left"> 188
</td></tr>
<tr>
<td align="left"> OemCopy
</td>
<td align="left"> 242
</td></tr>
<tr>
<td align="left"> OemCusel
</td>
<td align="left"> 239
</td></tr>
<tr>
<td align="left"> OemEnlw
</td>
<td align="left"> 244
</td></tr>
<tr>
<td align="left"> OemFinish
</td>
<td align="left"> 241
</td></tr>
<tr>
<td align="left"> OemFjJisho
</td>
<td align="left"> 146
</td></tr>
<tr>
<td align="left"> OemFjLoya
</td>
<td align="left"> 149
</td></tr>
<tr>
<td align="left"> OemFjMasshou
</td>
<td align="left"> 147
</td></tr>
<tr>
<td align="left"> OemFjRoya
</td>
<td align="left"> 150
</td></tr>
<tr>
<td align="left"> OemFjTouroku
</td>
<td align="left"> 148
</td></tr>
<tr>
<td align="left"> OemJump
</td>
<td align="left"> 234
</td></tr>
<tr>
<td align="left"> OemMinus
</td>
<td align="left"> 189
</td></tr>
<tr>
<td align="left"> OemNecEqual
</td>
<td align="left"> 146
</td></tr>
<tr>
<td align="left"> OemPa1
</td>
<td align="left"> 235
</td></tr>
<tr>
<td align="left"> OemPa2
</td>
<td align="left"> 236
</td></tr>
<tr>
<td align="left"> OemPa3
</td>
<td align="left"> 237
</td></tr>
<tr>
<td align="left"> OemPeriod
</td>
<td align="left"> 190
</td></tr>
<tr>
<td align="left"> OemPlus
</td>
<td align="left"> 187
</td></tr>
<tr>
<td align="left"> OemReset
</td>
<td align="left"> 233
</td></tr>
<tr>
<td align="left"> OemWsctrl
</td>
<td align="left"> 238
</td></tr>
<tr>
<td align="left"> Pa1
</td>
<td align="left"> 253
</td></tr>
<tr>
<td align="left"> Packet
</td>
<td align="left"> 231
</td></tr>
<tr>
<td align="left"> Pause
</td>
<td align="left"> 19
</td></tr>
<tr>
<td align="left"> Play
</td>
<td align="left"> 250
</td></tr>
<tr>
<td align="left"> Print
</td>
<td align="left"> 42
</td></tr>
<tr>
<td align="left"> Prior
</td>
<td align="left"> 33
</td></tr>
<tr>
<td align="left"> Processkey
</td>
<td align="left"> 229
</td></tr>
<tr>
<td align="left"> RButton
</td>
<td align="left"> 2
</td></tr>
<tr>
<td align="left"> RControl
</td>
<td align="left"> 163
</td></tr>
<tr>
<td align="left"> RMenu
</td>
<td align="left"> 165
</td></tr>
<tr>
<td align="left"> RShift
</td>
<td align="left"> 161
</td></tr>
<tr>
<td align="left"> RWin
</td>
<td align="left"> 92
</td></tr>
<tr>
<td align="left"> Return
</td>
<td align="left"> 13
</td></tr>
<tr>
<td align="left"> Right
</td>
<td align="left"> 39
</td></tr>
<tr>
<td align="left"> Scroll
</td>
<td align="left"> 145
</td></tr>
<tr>
<td align="left"> Select
</td>
<td align="left"> 41
</td></tr>
<tr>
<td align="left"> Separator
</td>
<td align="left"> 108
</td></tr>
<tr>
<td align="left"> Shift
</td>
<td align="left"> 16
</td></tr>
<tr>
<td align="left"> Sleep
</td>
<td align="left"> 95
</td></tr>
<tr>
<td align="left"> Snapshot
</td>
<td align="left"> 44
</td></tr>
<tr>
<td align="left"> Space
</td>
<td align="left"> 32
</td></tr>
<tr>
<td align="left"> Subtract
</td>
<td align="left"> 109
</td></tr>
<tr>
<td align="left"> Tab
</td>
<td align="left"> 9
</td></tr>
<tr>
<td align="left"> Up
</td>
<td align="left"> 38
</td></tr>
<tr>
<td align="left"> VolumeDown
</td>
<td align="left"> 174
</td></tr>
<tr>
<td align="left"> VolumeMute
</td>
<td align="left"> 173
</td></tr>
<tr>
<td align="left"> VolumeUp
</td>
<td align="left"> 175
</td></tr>
<tr>
<td align="left"> XButton1
</td>
<td align="left"> 5
</td></tr>
<tr>
<td align="left"> XButton2
</td>
<td align="left"> 6
</td></tr>
<tr>
<td align="left"> Zoom
</td>
<td align="left"> 251
</td></tr></table> </font>
 
 
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Client/Key&amp;oldid=25985">http://wiki.jc-mp.com/index.php?title=Lua/Client/Key&amp;oldid=25985</a>"</div>
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
<li id="f-lastmod"> This page was last modified on 3 February 2014, at 11:28.</li>
<li id="f-viewcount">This page has been accessed 2,161 times.</li>
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
mw.config.set({"wgBackendResponseTime":136});
}</script></body></html>