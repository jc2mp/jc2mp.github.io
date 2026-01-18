<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<title>View source for Lua/Shared/Vector3 - JC2-MP Documentation</title>
<meta charset="UTF-8"/>
<meta name="generator" content="MediaWiki 1.21.3"/>
<meta name="robots" content="noindex,nofollow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1388226247,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dokv=964071af18/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"2f48d38c251637fedac2bc38c466b8d03b5e7790-1388388347-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dokv=5e636c62d6/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link rel="next" href="http://wiki.jc-mp.com/Lua/Shared/Vector3"/>
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Shared/Vector3","wgTitle":"Lua/Shared/Vector3","wgCurRevisionId":24882,"wgArticleId":3729,"wgIsArticle":false,"wgAction":"edit","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Shared/Vector3","wgRestrictionEdit":[],"wgRestrictionMove":[]});
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
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Shared_Vector3 skin-cavendish action-edit">
<div id="internal"></div>
 
<div id="globalWrapper" class="edit">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FShared%2FVector3&amp;returntoquery=action%3Dedit">
Log in</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">View source for Lua/Shared/Vector3 - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Shared/Vector3" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Shared/Vector3&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource" class="selected"><a href="/index.php?title=Lua/Shared/Vector3&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Shared/Vector3&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Shared/Vector3" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Shared/Vector3" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Shared/Vector3&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">View source for Lua/Shared/Vector3</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub">← <a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Lua/Shared/Vector3</a></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text"><p>You do not have permission to edit this page, for the following reason:
</p>
<div class="permissions-errors">
<p>The action you have requested is limited to users in the group: <a href="/index.php?title=Project:Users&amp;action=edit&amp;redlink=1" class="new" title="Project:Users (page does not exist)">Users</a>.
</p>
</div>
<hr/>
<p>You can view and copy the source of this page:
</p><textarea readonly="" accesskey="," id="wpTextbox1" cols="80" rows="25" style="" lang="en" dir="ltr" name="wpTextbox1">==Static functions==

{{Lua/Table_Prefix}}
{| {{Lua/Table_Header}}
!{{Lua/Column_Style/Returns_List}} | Returns
!{{Lua/Column_Style/Prototype_List}} | Prototype
|-
|{{Lua/Cell_Style/Returns_List}} | Vector3
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Static Functions/Cross|Cross]](Vector3, Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Static Functions/Distance|Distance]](Vector3, Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Static Functions/Distance2D|Distance2D]](Vector3, Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Static Functions/DistanceSqr|DistanceSqr]](Vector3, Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Static Functions/DistanceSqr2D|DistanceSqr2D]](Vector3, Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Static Functions/Dot|Dot]](Vector3, Vector3)
|} {{Lua/Table_Suffix}}
==Constructors==

{{Lua/Table_Prefix}}
{| {{Lua/Table_Header}}
!{{Lua/Column_Style/Constructor_List}} | Constructor
|-
|{{Lua/Cell_Style/Constructor_List}} | [[Lua/Shared/Vector3/Constructor|Vector3]](number, number, number)
|-
|{{Lua/Cell_Style/Constructor_List}} | [[Lua/Shared/Vector3/Constructor|Vector3]]()
|} {{Lua/Table_Suffix}}
==Functions==

{{Lua/Table_Prefix}}
{| {{Lua/Table_Header}}
!{{Lua/Column_Style/Returns_List}} | Returns
!{{Lua/Column_Style/Prototype_List}} | Prototype
|-
|{{Lua/Cell_Style/Returns_List}} | Vector3
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Functions/Cross|Cross]](Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Functions/Distance|Distance]](Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Functions/Distance2D|Distance2D]](Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Functions/DistanceSqr|DistanceSqr]](Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Functions/DistanceSqr2D|DistanceSqr2D]](Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Functions/Dot|Dot]](Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Functions/Length|Length]]()
|-
|{{Lua/Cell_Style/Returns_List}} | number
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Functions/LengthSqr|LengthSqr]]()
|-
|{{Lua/Cell_Style/Returns_List}} | 
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Functions/Normalize|Normalize]]()
|-
|{{Lua/Cell_Style/Returns_List}} | Vector3
|{{Lua/Cell_Style/Prototype_List}} | [[Lua/Shared/Vector3/Functions/Normalized|Normalized]]()
|} {{Lua/Table_Suffix}}
==Operators==

{{Lua/Table_Prefix}}
{| {{Lua/Table_Header}}
!{{Lua/Column_Style/Returns_List}} | Returns
!{{Lua/Column_Style/Prototype_List}} | Prototype
|-
|{{Lua/Cell_Style/Returns_List}} | Vector3
|{{Lua/Cell_Style/Prototype_List}} | Vector3 + Vector3
|-
|{{Lua/Cell_Style/Returns_List}} | Vector3
|{{Lua/Cell_Style/Prototype_List}} | Vector3 / number
|-
|{{Lua/Cell_Style/Returns_List}} | boolean
|{{Lua/Cell_Style/Prototype_List}} | Vector3 == Vector3
|-
|{{Lua/Cell_Style/Returns_List}} | Vector3
|{{Lua/Cell_Style/Prototype_List}} | Vector3 * number
|-
|{{Lua/Cell_Style/Returns_List}} | Vector3
|{{Lua/Cell_Style/Prototype_List}} | number * Vector3
|-
|{{Lua/Cell_Style/Returns_List}} | Vector3
|{{Lua/Cell_Style/Prototype_List}} | Vector3 - Vector3
|-
|{{Lua/Cell_Style/Returns_List}} | string
|{{Lua/Cell_Style/Prototype_List}} | tostring(Vector3)
|-
|{{Lua/Cell_Style/Returns_List}} | Vector3
|{{Lua/Cell_Style/Prototype_List}} | -Vector3
|} {{Lua/Table_Suffix}}

==Properties==

{{Lua/Table_Prefix}}
{| {{Lua/Table_Header}}
!{{Lua/Column_Style/Property_List_Name}} | Name
!{{Lua/Column_Style/Property_List_Type}} | Type
|-
|{{Lua/Cell_Style/Property_List_Name}} | [[Lua/Shared/Vector3/Properties/x|x]]
|{{Lua/Cell_Style/Property_List_Type}} | number
|-
|{{Lua/Cell_Style/Property_List_Name}} | [[Lua/Shared/Vector3/Properties/y|y]]
|{{Lua/Cell_Style/Property_List_Type}} | number
|-
|{{Lua/Cell_Style/Property_List_Name}} | [[Lua/Shared/Vector3/Properties/z|z]]
|{{Lua/Cell_Style/Property_List_Type}} | number
|} {{Lua/Table_Suffix}}
</textarea><div class="templatesUsed"><div class="mw-templatesUsedExplanation"><p>Templates used on this page:
</p></div><ul>
<li><a href="/Template:Lua/Cell_Style/Constructor_List" title="Template:Lua/Cell Style/Constructor List">Template:Lua/Cell Style/Constructor List</a> (<a href="/index.php?title=Template:Lua/Cell_Style/Constructor_List&amp;action=edit" title="Template:Lua/Cell Style/Constructor List">view source</a>) </li><li><a href="/Template:Lua/Cell_Style/Property_List_Name" title="Template:Lua/Cell Style/Property List Name">Template:Lua/Cell Style/Property List Name</a> (<a href="/index.php?title=Template:Lua/Cell_Style/Property_List_Name&amp;action=edit" title="Template:Lua/Cell Style/Property List Name">view source</a>) </li><li><a href="/Template:Lua/Cell_Style/Property_List_Type" title="Template:Lua/Cell Style/Property List Type">Template:Lua/Cell Style/Property List Type</a> (<a href="/index.php?title=Template:Lua/Cell_Style/Property_List_Type&amp;action=edit" title="Template:Lua/Cell Style/Property List Type">view source</a>) </li><li><a href="/Template:Lua/Cell_Style/Prototype_List" title="Template:Lua/Cell Style/Prototype List">Template:Lua/Cell Style/Prototype List</a> (<a href="/index.php?title=Template:Lua/Cell_Style/Prototype_List&amp;action=edit" title="Template:Lua/Cell Style/Prototype List">view source</a>) </li><li><a href="/Template:Lua/Cell_Style/Returns_List" title="Template:Lua/Cell Style/Returns List">Template:Lua/Cell Style/Returns List</a> (<a href="/index.php?title=Template:Lua/Cell_Style/Returns_List&amp;action=edit" title="Template:Lua/Cell Style/Returns List">view source</a>) </li><li><a href="/Template:Lua/Column_Style/Constructor_List" title="Template:Lua/Column Style/Constructor List">Template:Lua/Column Style/Constructor List</a> (<a href="/index.php?title=Template:Lua/Column_Style/Constructor_List&amp;action=edit" title="Template:Lua/Column Style/Constructor List">view source</a>) </li><li><a href="/Template:Lua/Column_Style/Property_List_Name" title="Template:Lua/Column Style/Property List Name">Template:Lua/Column Style/Property List Name</a> (<a href="/index.php?title=Template:Lua/Column_Style/Property_List_Name&amp;action=edit" title="Template:Lua/Column Style/Property List Name">view source</a>) </li><li><a href="/Template:Lua/Column_Style/Property_List_Type" title="Template:Lua/Column Style/Property List Type">Template:Lua/Column Style/Property List Type</a> (<a href="/index.php?title=Template:Lua/Column_Style/Property_List_Type&amp;action=edit" title="Template:Lua/Column Style/Property List Type">view source</a>) </li><li><a href="/Template:Lua/Column_Style/Prototype_List" title="Template:Lua/Column Style/Prototype List">Template:Lua/Column Style/Prototype List</a> (<a href="/index.php?title=Template:Lua/Column_Style/Prototype_List&amp;action=edit" title="Template:Lua/Column Style/Prototype List">view source</a>) </li><li><a href="/Template:Lua/Column_Style/Returns_List" title="Template:Lua/Column Style/Returns List">Template:Lua/Column Style/Returns List</a> (<a href="/index.php?title=Template:Lua/Column_Style/Returns_List&amp;action=edit" title="Template:Lua/Column Style/Returns List">view source</a>) </li><li><a href="/Template:Lua/Table_Header" title="Template:Lua/Table Header">Template:Lua/Table Header</a> (<a href="/index.php?title=Template:Lua/Table_Header&amp;action=edit" title="Template:Lua/Table Header">view source</a>) </li><li><a href="/Template:Lua/Table_Prefix" title="Template:Lua/Table Prefix">Template:Lua/Table Prefix</a> (<a href="/index.php?title=Template:Lua/Table_Prefix&amp;action=edit" title="Template:Lua/Table Prefix">view source</a>) </li><li><a href="/Template:Lua/Table_Suffix" title="Template:Lua/Table Suffix">Template:Lua/Table Suffix</a> (<a href="/index.php?title=Template:Lua/Table_Suffix&amp;action=edit" title="Template:Lua/Table Suffix">view source</a>) </li></ul></div><p id="mw-returnto">Return to <a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Lua/Shared/Vector3</a>.</p>
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/Lua/Shared/Vector3">http://wiki.jc-mp.com/Lua/Shared/Vector3</a>"</div>
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
mw.loader.load(["ext.treeandmenu","mediawiki.user","mediawiki.page.ready","mediawiki.searchSuggest","mediawiki.hidpi"], null, true);
}</script>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;skin=cavendish&amp;*"></script>
 </body></html>