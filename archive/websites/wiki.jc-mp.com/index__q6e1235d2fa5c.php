<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8"/>
<title>View source for Lua/Client/Key - JC2-MP Documentation</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE"/>
<meta name="generator" content="MediaWiki 1.23.9"/>
<meta name="robots" content="noindex,nofollow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1439098721,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"3d4685a8242fc8ea9ad5ff8147ae6aeb",petok:"c985dc4d848690c4f6129e9ae15011d8b37456c5-1439263575-1800",betok:"442b0f79a14f2347b7b5ce8b6e24b9262bf803ce-1439263575-120",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=d134393e0a/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Client/Key","wgTitle":"Lua/Client/Key","wgCurRevisionId":25985,"wgRevisionId":0,"wgArticleId":3659,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"edit","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Client/Key","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:7f77fa4f43bf4c4bcff833b005ee38c1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Client_Key skin-cavendish action-edit"><script type="text/javascript">
//<![CDATA[
try{(function(a){var b="http://",c="wiki.jc-mp.com",d="/cdn-cgi/cl/",e="img.gif",f=new a;f.src=[b,c,d,e].join("")})(Image)}catch(e){}
//]]>
</script>
<div id="internal"></div>
 
<div id="globalWrapper" class="edit">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FClient%2FKey&amp;returntoquery=action%3Dedit">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">View source for Lua/Client/Key - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Client/Key" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Client/Key&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource" class="selected"><a href="/index.php?title=Lua/Client/Key&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
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
<h1 id="firstHeading" class="firstHeading">View source for Lua/Client/Key</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub">← <a href="/Lua/Client/Key" title="Lua/Client/Key">Lua/Client/Key</a></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text"><p>You do not have permission to edit this page, for the following reason:
</p>
<div class="permissions-errors">
<p>The action you have requested is limited to users in the group: <a href="/index.php?title=Project:Users&amp;action=edit&amp;redlink=1" class="new" title="Project:Users (page does not exist)">Users</a>.
</p>
</div>
<hr/>
<p>You can view and copy the source of this page:
</p><textarea readonly="" accesskey="," id="wpTextbox1" cols="80" rows="25" style="" lang="en" dir="ltr" name="wpTextbox1">'''Note: As of 0.1.2, the statics are part of VirtualKey, not Key. This was an oversight and it will likely be merged into Key.'''

==Functions==

{{Lua/Table_Prefix}}
{| {{Lua/Table_Header}}
!{{Lua/Column_Style/Returns_List}} | Returns
!{{Lua/Column_Style/Prototype_List}} | Prototype
|-
|{{Lua/Cell_Style/Returns_List}} | boolean
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Client/Key/Functions/IsDown|IsDown]](number)
|} {{Lua/Table_Suffix}}
==Statics==

These are based on virtual-key codes used by the Windows API. [http://msdn.microsoft.com/en-us/library/windows/desktop/dd375731%28v=vs.85%29.aspx See here for reference].

====Common====

{{Lua/Table_Prefix}}
{| {{Lua/Table_Header}}
!{{Lua/Column_Style/Enum_List_Name}} | Name
!{{Lua/Column_Style/Enum_List_Value}} | Value
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Add
|{{Lua/Cell_Style/Enum_List_Value}} | 107
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Back
|{{Lua/Cell_Style/Enum_List_Value}} | 8
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Control
|{{Lua/Cell_Style/Enum_List_Value}} | 17
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Decimal
|{{Lua/Cell_Style/Enum_List_Value}} | 110
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Delete
|{{Lua/Cell_Style/Enum_List_Value}} | 46
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Divide
|{{Lua/Cell_Style/Enum_List_Value}} | 111
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Down
|{{Lua/Cell_Style/Enum_List_Value}} | 40
|-
|{{Lua/Cell_Style/Enum_List_Name}} | End
|{{Lua/Cell_Style/Enum_List_Value}} | 35
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Escape
|{{Lua/Cell_Style/Enum_List_Value}} | 27
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F1
|{{Lua/Cell_Style/Enum_List_Value}} | 112
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F2
|{{Lua/Cell_Style/Enum_List_Value}} | 113
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F3
|{{Lua/Cell_Style/Enum_List_Value}} | 114
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F4
|{{Lua/Cell_Style/Enum_List_Value}} | 115
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F5
|{{Lua/Cell_Style/Enum_List_Value}} | 116
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F6
|{{Lua/Cell_Style/Enum_List_Value}} | 117
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F7
|{{Lua/Cell_Style/Enum_List_Value}} | 118
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F8
|{{Lua/Cell_Style/Enum_List_Value}} | 119
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F9
|{{Lua/Cell_Style/Enum_List_Value}} | 120
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F10
|{{Lua/Cell_Style/Enum_List_Value}} | 121
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F11
|{{Lua/Cell_Style/Enum_List_Value}} | 122
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F12
|{{Lua/Cell_Style/Enum_List_Value}} | 123
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Home
|{{Lua/Cell_Style/Enum_List_Value}} | 36
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Insert
|{{Lua/Cell_Style/Enum_List_Value}} | 45
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LButton
|{{Lua/Cell_Style/Enum_List_Value}} | 1
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LControl
|{{Lua/Cell_Style/Enum_List_Value}} | 162
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LMenu
|{{Lua/Cell_Style/Enum_List_Value}} | 164
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LShift
|{{Lua/Cell_Style/Enum_List_Value}} | 160
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Left
|{{Lua/Cell_Style/Enum_List_Value}} | 37
|-
|{{Lua/Cell_Style/Enum_List_Name}} | MButton
|{{Lua/Cell_Style/Enum_List_Value}} | 4
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Menu
|{{Lua/Cell_Style/Enum_List_Value}} | 18
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Multiply
|{{Lua/Cell_Style/Enum_List_Value}} | 106
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Next
|{{Lua/Cell_Style/Enum_List_Value}} | 34
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numlock
|{{Lua/Cell_Style/Enum_List_Value}} | 144
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad0
|{{Lua/Cell_Style/Enum_List_Value}} | 96
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad1
|{{Lua/Cell_Style/Enum_List_Value}} | 97
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad2
|{{Lua/Cell_Style/Enum_List_Value}} | 98
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad3
|{{Lua/Cell_Style/Enum_List_Value}} | 99
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad4
|{{Lua/Cell_Style/Enum_List_Value}} | 100
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad5
|{{Lua/Cell_Style/Enum_List_Value}} | 101
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad6
|{{Lua/Cell_Style/Enum_List_Value}} | 102
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad7
|{{Lua/Cell_Style/Enum_List_Value}} | 103
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad8
|{{Lua/Cell_Style/Enum_List_Value}} | 104
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad9
|{{Lua/Cell_Style/Enum_List_Value}} | 105
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Prior
|{{Lua/Cell_Style/Enum_List_Value}} | 33
|-
|{{Lua/Cell_Style/Enum_List_Name}} | RButton
|{{Lua/Cell_Style/Enum_List_Value}} | 2
|-
|{{Lua/Cell_Style/Enum_List_Name}} | RControl
|{{Lua/Cell_Style/Enum_List_Value}} | 163
|-
|{{Lua/Cell_Style/Enum_List_Name}} | RMenu
|{{Lua/Cell_Style/Enum_List_Value}} | 165
|-
|{{Lua/Cell_Style/Enum_List_Name}} | RShift
|{{Lua/Cell_Style/Enum_List_Value}} | 161
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Return
|{{Lua/Cell_Style/Enum_List_Value}} | 13
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Right
|{{Lua/Cell_Style/Enum_List_Value}} | 39
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Scroll
|{{Lua/Cell_Style/Enum_List_Value}} | 145
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Shift
|{{Lua/Cell_Style/Enum_List_Value}} | 16
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Snapshot
|{{Lua/Cell_Style/Enum_List_Value}} | 44
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Space
|{{Lua/Cell_Style/Enum_List_Value}} | 32
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Subtract
|{{Lua/Cell_Style/Enum_List_Value}} | 109
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Tab
|{{Lua/Cell_Style/Enum_List_Value}} | 9
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Up
|{{Lua/Cell_Style/Enum_List_Value}} | 38
|-
|{{Lua/Cell_Style/Enum_List_Name}} | XButton1
|{{Lua/Cell_Style/Enum_List_Value}} | 5
|-
|{{Lua/Cell_Style/Enum_List_Name}} | XButton2
|{{Lua/Cell_Style/Enum_List_Value}} | 6
|} {{Lua/Table_Suffix}}

====Full list====

{{Lua/Table_Prefix}}
{| {{Lua/Table_Header}}
!{{Lua/Column_Style/Enum_List_Name}} | Name
!{{Lua/Column_Style/Enum_List_Value}} | Value
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Accept
|{{Lua/Cell_Style/Enum_List_Value}} | 30
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Add
|{{Lua/Cell_Style/Enum_List_Value}} | 107
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Apps
|{{Lua/Cell_Style/Enum_List_Value}} | 93
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Attn
|{{Lua/Cell_Style/Enum_List_Value}} | 246
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Back
|{{Lua/Cell_Style/Enum_List_Value}} | 8
|-
|{{Lua/Cell_Style/Enum_List_Name}} | BrowserBack
|{{Lua/Cell_Style/Enum_List_Value}} | 166
|-
|{{Lua/Cell_Style/Enum_List_Name}} | BrowserFavorites
|{{Lua/Cell_Style/Enum_List_Value}} | 171
|-
|{{Lua/Cell_Style/Enum_List_Name}} | BrowserForward
|{{Lua/Cell_Style/Enum_List_Value}} | 167
|-
|{{Lua/Cell_Style/Enum_List_Name}} | BrowserHome
|{{Lua/Cell_Style/Enum_List_Value}} | 172
|-
|{{Lua/Cell_Style/Enum_List_Name}} | BrowserRefresh
|{{Lua/Cell_Style/Enum_List_Value}} | 168
|-
|{{Lua/Cell_Style/Enum_List_Name}} | BrowserSearch
|{{Lua/Cell_Style/Enum_List_Value}} | 170
|-
|{{Lua/Cell_Style/Enum_List_Name}} | BrowserStop
|{{Lua/Cell_Style/Enum_List_Value}} | 169
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Cancel
|{{Lua/Cell_Style/Enum_List_Value}} | 3
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Capital
|{{Lua/Cell_Style/Enum_List_Value}} | 20
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Clear
|{{Lua/Cell_Style/Enum_List_Value}} | 12
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Control
|{{Lua/Cell_Style/Enum_List_Value}} | 17
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Convert
|{{Lua/Cell_Style/Enum_List_Value}} | 28
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Crsel
|{{Lua/Cell_Style/Enum_List_Value}} | 247
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Decimal
|{{Lua/Cell_Style/Enum_List_Value}} | 110
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Delete
|{{Lua/Cell_Style/Enum_List_Value}} | 46
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Divide
|{{Lua/Cell_Style/Enum_List_Value}} | 111
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Down
|{{Lua/Cell_Style/Enum_List_Value}} | 40
|-
|{{Lua/Cell_Style/Enum_List_Name}} | End
|{{Lua/Cell_Style/Enum_List_Value}} | 35
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Ereof
|{{Lua/Cell_Style/Enum_List_Value}} | 249
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Escape
|{{Lua/Cell_Style/Enum_List_Value}} | 27
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Execute
|{{Lua/Cell_Style/Enum_List_Value}} | 43
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Exsel
|{{Lua/Cell_Style/Enum_List_Value}} | 248
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F1
|{{Lua/Cell_Style/Enum_List_Value}} | 112
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F10
|{{Lua/Cell_Style/Enum_List_Value}} | 121
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F11
|{{Lua/Cell_Style/Enum_List_Value}} | 122
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F12
|{{Lua/Cell_Style/Enum_List_Value}} | 123
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F13
|{{Lua/Cell_Style/Enum_List_Value}} | 124
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F14
|{{Lua/Cell_Style/Enum_List_Value}} | 125
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F15
|{{Lua/Cell_Style/Enum_List_Value}} | 126
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F16
|{{Lua/Cell_Style/Enum_List_Value}} | 127
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F17
|{{Lua/Cell_Style/Enum_List_Value}} | 128
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F18
|{{Lua/Cell_Style/Enum_List_Value}} | 129
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F19
|{{Lua/Cell_Style/Enum_List_Value}} | 130
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F2
|{{Lua/Cell_Style/Enum_List_Value}} | 113
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F20
|{{Lua/Cell_Style/Enum_List_Value}} | 131
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F21
|{{Lua/Cell_Style/Enum_List_Value}} | 132
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F22
|{{Lua/Cell_Style/Enum_List_Value}} | 133
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F23
|{{Lua/Cell_Style/Enum_List_Value}} | 134
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F24
|{{Lua/Cell_Style/Enum_List_Value}} | 135
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F3
|{{Lua/Cell_Style/Enum_List_Value}} | 114
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F4
|{{Lua/Cell_Style/Enum_List_Value}} | 115
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F5
|{{Lua/Cell_Style/Enum_List_Value}} | 116
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F6
|{{Lua/Cell_Style/Enum_List_Value}} | 117
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F7
|{{Lua/Cell_Style/Enum_List_Value}} | 118
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F8
|{{Lua/Cell_Style/Enum_List_Value}} | 119
|-
|{{Lua/Cell_Style/Enum_List_Name}} | F9
|{{Lua/Cell_Style/Enum_List_Value}} | 120
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Final
|{{Lua/Cell_Style/Enum_List_Value}} | 24
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Hangeul
|{{Lua/Cell_Style/Enum_List_Value}} | 21
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Hangul
|{{Lua/Cell_Style/Enum_List_Value}} | 21
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Hanja
|{{Lua/Cell_Style/Enum_List_Value}} | 25
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Help
|{{Lua/Cell_Style/Enum_List_Value}} | 47
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Home
|{{Lua/Cell_Style/Enum_List_Value}} | 36
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Ico00
|{{Lua/Cell_Style/Enum_List_Value}} | 228
|-
|{{Lua/Cell_Style/Enum_List_Name}} | IcoHelp
|{{Lua/Cell_Style/Enum_List_Value}} | 227
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Insert
|{{Lua/Cell_Style/Enum_List_Value}} | 45
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Junja
|{{Lua/Cell_Style/Enum_List_Value}} | 23
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Kana
|{{Lua/Cell_Style/Enum_List_Value}} | 21
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Kanji
|{{Lua/Cell_Style/Enum_List_Value}} | 25
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LButton
|{{Lua/Cell_Style/Enum_List_Value}} | 1
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LControl
|{{Lua/Cell_Style/Enum_List_Value}} | 162
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LMenu
|{{Lua/Cell_Style/Enum_List_Value}} | 164
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LShift
|{{Lua/Cell_Style/Enum_List_Value}} | 160
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LWin
|{{Lua/Cell_Style/Enum_List_Value}} | 91
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LaunchApp1
|{{Lua/Cell_Style/Enum_List_Value}} | 182
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LaunchApp2
|{{Lua/Cell_Style/Enum_List_Value}} | 183
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LaunchMail
|{{Lua/Cell_Style/Enum_List_Value}} | 180
|-
|{{Lua/Cell_Style/Enum_List_Name}} | LaunchMediaSelect
|{{Lua/Cell_Style/Enum_List_Value}} | 181
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Left
|{{Lua/Cell_Style/Enum_List_Value}} | 37
|-
|{{Lua/Cell_Style/Enum_List_Name}} | MButton
|{{Lua/Cell_Style/Enum_List_Value}} | 4
|-
|{{Lua/Cell_Style/Enum_List_Name}} | MediaNextTrack
|{{Lua/Cell_Style/Enum_List_Value}} | 176
|-
|{{Lua/Cell_Style/Enum_List_Name}} | MediaPlayPause
|{{Lua/Cell_Style/Enum_List_Value}} | 179
|-
|{{Lua/Cell_Style/Enum_List_Name}} | MediaPrevTrack
|{{Lua/Cell_Style/Enum_List_Value}} | 177
|-
|{{Lua/Cell_Style/Enum_List_Name}} | MediaStop
|{{Lua/Cell_Style/Enum_List_Value}} | 178
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Menu
|{{Lua/Cell_Style/Enum_List_Value}} | 18
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Modechange
|{{Lua/Cell_Style/Enum_List_Value}} | 31
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Multiply
|{{Lua/Cell_Style/Enum_List_Value}} | 106
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Next
|{{Lua/Cell_Style/Enum_List_Value}} | 34
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Noname
|{{Lua/Cell_Style/Enum_List_Value}} | 252
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Nonconvert
|{{Lua/Cell_Style/Enum_List_Value}} | 29
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numlock
|{{Lua/Cell_Style/Enum_List_Value}} | 144
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad0
|{{Lua/Cell_Style/Enum_List_Value}} | 96
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad1
|{{Lua/Cell_Style/Enum_List_Value}} | 97
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad2
|{{Lua/Cell_Style/Enum_List_Value}} | 98
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad3
|{{Lua/Cell_Style/Enum_List_Value}} | 99
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad4
|{{Lua/Cell_Style/Enum_List_Value}} | 100
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad5
|{{Lua/Cell_Style/Enum_List_Value}} | 101
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad6
|{{Lua/Cell_Style/Enum_List_Value}} | 102
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad7
|{{Lua/Cell_Style/Enum_List_Value}} | 103
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad8
|{{Lua/Cell_Style/Enum_List_Value}} | 104
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Numpad9
|{{Lua/Cell_Style/Enum_List_Value}} | 105
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Oem1
|{{Lua/Cell_Style/Enum_List_Value}} | 186
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Oem102
|{{Lua/Cell_Style/Enum_List_Value}} | 226
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Oem2
|{{Lua/Cell_Style/Enum_List_Value}} | 191
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Oem3
|{{Lua/Cell_Style/Enum_List_Value}} | 192
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Oem4
|{{Lua/Cell_Style/Enum_List_Value}} | 219
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Oem5
|{{Lua/Cell_Style/Enum_List_Value}} | 220
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Oem6
|{{Lua/Cell_Style/Enum_List_Value}} | 221
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Oem7
|{{Lua/Cell_Style/Enum_List_Value}} | 222
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Oem8
|{{Lua/Cell_Style/Enum_List_Value}} | 223
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemAttn
|{{Lua/Cell_Style/Enum_List_Value}} | 240
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemAuto
|{{Lua/Cell_Style/Enum_List_Value}} | 243
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemAx
|{{Lua/Cell_Style/Enum_List_Value}} | 225
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemBacktab
|{{Lua/Cell_Style/Enum_List_Value}} | 245
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemClear
|{{Lua/Cell_Style/Enum_List_Value}} | 254
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemComma
|{{Lua/Cell_Style/Enum_List_Value}} | 188
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemCopy
|{{Lua/Cell_Style/Enum_List_Value}} | 242
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemCusel
|{{Lua/Cell_Style/Enum_List_Value}} | 239
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemEnlw
|{{Lua/Cell_Style/Enum_List_Value}} | 244
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemFinish
|{{Lua/Cell_Style/Enum_List_Value}} | 241
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemFjJisho
|{{Lua/Cell_Style/Enum_List_Value}} | 146
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemFjLoya
|{{Lua/Cell_Style/Enum_List_Value}} | 149
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemFjMasshou
|{{Lua/Cell_Style/Enum_List_Value}} | 147
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemFjRoya
|{{Lua/Cell_Style/Enum_List_Value}} | 150
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemFjTouroku
|{{Lua/Cell_Style/Enum_List_Value}} | 148
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemJump
|{{Lua/Cell_Style/Enum_List_Value}} | 234
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemMinus
|{{Lua/Cell_Style/Enum_List_Value}} | 189
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemNecEqual
|{{Lua/Cell_Style/Enum_List_Value}} | 146
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemPa1
|{{Lua/Cell_Style/Enum_List_Value}} | 235
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemPa2
|{{Lua/Cell_Style/Enum_List_Value}} | 236
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemPa3
|{{Lua/Cell_Style/Enum_List_Value}} | 237
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemPeriod
|{{Lua/Cell_Style/Enum_List_Value}} | 190
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemPlus
|{{Lua/Cell_Style/Enum_List_Value}} | 187
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemReset
|{{Lua/Cell_Style/Enum_List_Value}} | 233
|-
|{{Lua/Cell_Style/Enum_List_Name}} | OemWsctrl
|{{Lua/Cell_Style/Enum_List_Value}} | 238
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Pa1
|{{Lua/Cell_Style/Enum_List_Value}} | 253
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Packet
|{{Lua/Cell_Style/Enum_List_Value}} | 231
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Pause
|{{Lua/Cell_Style/Enum_List_Value}} | 19
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Play
|{{Lua/Cell_Style/Enum_List_Value}} | 250
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Print
|{{Lua/Cell_Style/Enum_List_Value}} | 42
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Prior
|{{Lua/Cell_Style/Enum_List_Value}} | 33
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Processkey
|{{Lua/Cell_Style/Enum_List_Value}} | 229
|-
|{{Lua/Cell_Style/Enum_List_Name}} | RButton
|{{Lua/Cell_Style/Enum_List_Value}} | 2
|-
|{{Lua/Cell_Style/Enum_List_Name}} | RControl
|{{Lua/Cell_Style/Enum_List_Value}} | 163
|-
|{{Lua/Cell_Style/Enum_List_Name}} | RMenu
|{{Lua/Cell_Style/Enum_List_Value}} | 165
|-
|{{Lua/Cell_Style/Enum_List_Name}} | RShift
|{{Lua/Cell_Style/Enum_List_Value}} | 161
|-
|{{Lua/Cell_Style/Enum_List_Name}} | RWin
|{{Lua/Cell_Style/Enum_List_Value}} | 92
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Return
|{{Lua/Cell_Style/Enum_List_Value}} | 13
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Right
|{{Lua/Cell_Style/Enum_List_Value}} | 39
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Scroll
|{{Lua/Cell_Style/Enum_List_Value}} | 145
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Select
|{{Lua/Cell_Style/Enum_List_Value}} | 41
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Separator
|{{Lua/Cell_Style/Enum_List_Value}} | 108
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Shift
|{{Lua/Cell_Style/Enum_List_Value}} | 16
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Sleep
|{{Lua/Cell_Style/Enum_List_Value}} | 95
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Snapshot
|{{Lua/Cell_Style/Enum_List_Value}} | 44
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Space
|{{Lua/Cell_Style/Enum_List_Value}} | 32
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Subtract
|{{Lua/Cell_Style/Enum_List_Value}} | 109
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Tab
|{{Lua/Cell_Style/Enum_List_Value}} | 9
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Up
|{{Lua/Cell_Style/Enum_List_Value}} | 38
|-
|{{Lua/Cell_Style/Enum_List_Name}} | VolumeDown
|{{Lua/Cell_Style/Enum_List_Value}} | 174
|-
|{{Lua/Cell_Style/Enum_List_Name}} | VolumeMute
|{{Lua/Cell_Style/Enum_List_Value}} | 173
|-
|{{Lua/Cell_Style/Enum_List_Name}} | VolumeUp
|{{Lua/Cell_Style/Enum_List_Value}} | 175
|-
|{{Lua/Cell_Style/Enum_List_Name}} | XButton1
|{{Lua/Cell_Style/Enum_List_Value}} | 5
|-
|{{Lua/Cell_Style/Enum_List_Name}} | XButton2
|{{Lua/Cell_Style/Enum_List_Value}} | 6
|-
|{{Lua/Cell_Style/Enum_List_Name}} | Zoom
|{{Lua/Cell_Style/Enum_List_Value}} | 251
|} {{Lua/Table_Suffix}}
</textarea><div class="templatesUsed"><div class="mw-templatesUsedExplanation"><p>Templates used on this page:
</p></div><ul>
<li><a href="/Template:Lua/Cell_Style/Enum_List_Name" title="Template:Lua/Cell Style/Enum List Name">Template:Lua/Cell Style/Enum List Name</a> (<a href="/index.php?title=Template:Lua/Cell_Style/Enum_List_Name&amp;action=edit" title="Template:Lua/Cell Style/Enum List Name">view source</a>) </li><li><a href="/Template:Lua/Cell_Style/Enum_List_Value" title="Template:Lua/Cell Style/Enum List Value">Template:Lua/Cell Style/Enum List Value</a> (<a href="/index.php?title=Template:Lua/Cell_Style/Enum_List_Value&amp;action=edit" title="Template:Lua/Cell Style/Enum List Value">view source</a>) </li><li><a href="/Template:Lua/Cell_Style/Prototype_List" title="Template:Lua/Cell Style/Prototype List">Template:Lua/Cell Style/Prototype List</a> (<a href="/index.php?title=Template:Lua/Cell_Style/Prototype_List&amp;action=edit" title="Template:Lua/Cell Style/Prototype List">view source</a>) </li><li><a href="/Template:Lua/Cell_Style/Returns_List" title="Template:Lua/Cell Style/Returns List">Template:Lua/Cell Style/Returns List</a> (<a href="/index.php?title=Template:Lua/Cell_Style/Returns_List&amp;action=edit" title="Template:Lua/Cell Style/Returns List">view source</a>) </li><li><a href="/Template:Lua/Column_Style/Enum_List_Name" title="Template:Lua/Column Style/Enum List Name">Template:Lua/Column Style/Enum List Name</a> (<a href="/index.php?title=Template:Lua/Column_Style/Enum_List_Name&amp;action=edit" title="Template:Lua/Column Style/Enum List Name">view source</a>) </li><li><a href="/Template:Lua/Column_Style/Enum_List_Value" title="Template:Lua/Column Style/Enum List Value">Template:Lua/Column Style/Enum List Value</a> (<a href="/index.php?title=Template:Lua/Column_Style/Enum_List_Value&amp;action=edit" title="Template:Lua/Column Style/Enum List Value">view source</a>) </li><li><a href="/Template:Lua/Column_Style/Prototype_List" title="Template:Lua/Column Style/Prototype List">Template:Lua/Column Style/Prototype List</a> (<a href="/index.php?title=Template:Lua/Column_Style/Prototype_List&amp;action=edit" title="Template:Lua/Column Style/Prototype List">view source</a>) </li><li><a href="/Template:Lua/Column_Style/Returns_List" title="Template:Lua/Column Style/Returns List">Template:Lua/Column Style/Returns List</a> (<a href="/index.php?title=Template:Lua/Column_Style/Returns_List&amp;action=edit" title="Template:Lua/Column Style/Returns List">view source</a>) </li><li><a href="/Template:Lua/Table_Header" title="Template:Lua/Table Header">Template:Lua/Table Header</a> (<a href="/index.php?title=Template:Lua/Table_Header&amp;action=edit" title="Template:Lua/Table Header">view source</a>) </li><li><a href="/Template:Lua/Table_Prefix" title="Template:Lua/Table Prefix">Template:Lua/Table Prefix</a> (<a href="/index.php?title=Template:Lua/Table_Prefix&amp;action=edit" title="Template:Lua/Table Prefix">view source</a>) </li><li><a href="/Template:Lua/Table_Suffix" title="Template:Lua/Table Suffix">Template:Lua/Table Suffix</a> (<a href="/index.php?title=Template:Lua/Table_Suffix&amp;action=edit" title="Template:Lua/Table Suffix">view source</a>) </li></ul></div><p id="mw-returnto">Return to <a href="/Lua/Client/Key" title="Lua/Client/Key">Lua/Client/Key</a>.</p>
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/Lua/Client/Key">http://wiki.jc-mp.com/Lua/Client/Key</a>"</div>
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
 
<script>/*<![CDATA[*/window.jQuery && jQuery.ready();/*]]>*/</script><script>if(window.mw){
mw.loader.state({"site":"loading","user":"ready","user.groups":"ready"});
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.action.edit.collapsibleFooter","mediawiki.user","mediawiki.hidpi","mediawiki.page.ready","mediawiki.searchSuggest"],null,true);
}</script>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":192});
}</script></body></html>