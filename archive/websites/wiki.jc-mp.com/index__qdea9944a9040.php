<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<title>Lua/Shared/Vector3 - JC2-MP Documentation</title>
<meta charset="UTF-8"/>
<meta name="generator" content="MediaWiki 1.21.3"/>
<meta name="robots" content="noindex,nofollow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1387493058,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/adv=964071af18/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"0ebd298da70c6ad6fa268b9accc5a3dc52fa7e58-1388197256-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/adv=5e636c62d6/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Shared/Vector3","wgTitle":"Lua/Shared/Vector3","wgCurRevisionId":24719,"wgArticleId":3729,"wgIsArticle":true,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Shared/Vector3","wgRestrictionEdit":[],"wgRestrictionMove":[]});
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
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Shared_Vector3 skin-cavendish action-view">
<div id="internal"></div>
 
<div id="globalWrapper" class="view">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FShared%2FVector3&amp;returntoquery=oldid%3D24719">
Log in</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Shared/Vector3 - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Shared/Vector3" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Shared/Vector3&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Shared/Vector3&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Shared/Vector3" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Shared/Vector3" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-print"><a href="/index.php?title=Lua/Shared/Vector3&amp;oldid=24719&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Shared/Vector3&amp;oldid=24719" title="Permanent link to this revision of the page">Permanent link</a></li>
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
<h1 id="firstHeading" class="firstHeading">Lua/Shared/Vector3</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a>&lrm; | <a href="/Lua/Shared" title="Lua/Shared">Shared</a></span><div id="mw-revision-info">Revision as of 11:33, 21 December 2013 by <a href="/User:Dreadmullet" title="User:Dreadmullet" class="mw-userlink">Dreadmullet</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:Dreadmullet&amp;action=edit&amp;redlink=1" class="new" title="User talk:Dreadmullet (page does not exist)">Talk</a> | <a href="/Special:Contributions/Dreadmullet" title="Special:Contributions/Dreadmullet">contribs</a>)</span></div><br/>
<div id="mw-revision-nav">(<a href="/index.php?title=Lua/Shared/Vector3&amp;diff=prev&amp;oldid=24719" title="Lua/Shared/Vector3">diff</a>) <a href="/index.php?title=Lua/Shared/Vector3&amp;direction=prev&amp;oldid=24719" title="Lua/Shared/Vector3">← Older revision</a> | Latest revision (diff) | Newer revision → (diff)</div></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><table id="toc" class="toc"><tr><td><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Static_functions"><span class="tocnumber">1</span> <span class="toctext">Static functions</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Constructors"><span class="tocnumber">2</span> <span class="toctext">Constructors</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Functions"><span class="tocnumber">3</span> <span class="toctext">Functions</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Operators"><span class="tocnumber">4</span> <span class="toctext">Operators</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Properties"><span class="tocnumber">5</span> <span class="toctext">Properties</span></a></li>
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
<td align="right"> Vector3
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Static_Functions/Cross" title="Lua/Shared/Vector3/Static Functions/Cross">Cross</a>(Vector3, Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Static_Functions/Distance" title="Lua/Shared/Vector3/Static Functions/Distance">Distance</a>(Vector3, Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Static_Functions/Distance2D" title="Lua/Shared/Vector3/Static Functions/Distance2D">Distance2D</a>(Vector3, Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Static_Functions/DistanceSqr" title="Lua/Shared/Vector3/Static Functions/DistanceSqr">DistanceSqr</a>(Vector3, Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Static_Functions/DistanceSqr2D" title="Lua/Shared/Vector3/Static Functions/DistanceSqr2D">DistanceSqr2D</a>(Vector3, Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Static_Functions/Dot" title="Lua/Shared/Vector3/Static Functions/Dot">Dot</a>(Vector3, Vector3)
</td></tr></table> </font>
<h2> <span class="mw-headline" id="Constructors">Constructors</span></h2>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="450"> Constructor
</th></tr>
<tr>
<td align="left"> <a href="/Lua/Shared/Vector3/Constructor" title="Lua/Shared/Vector3/Constructor">Vector3</a>(number, number, number)
</td></tr>
<tr>
<td align="left"> <a href="/Lua/Shared/Vector3/Constructor" title="Lua/Shared/Vector3/Constructor">Vector3</a>()
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
<td align="right"> Vector3
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Functions/Cross" title="Lua/Shared/Vector3/Functions/Cross">Cross</a>(Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Functions/Distance" title="Lua/Shared/Vector3/Functions/Distance">Distance</a>(Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Functions/Distance2D" title="Lua/Shared/Vector3/Functions/Distance2D">Distance2D</a>(Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Functions/DistanceSqr" title="Lua/Shared/Vector3/Functions/DistanceSqr">DistanceSqr</a>(Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Functions/DistanceSqr2D" title="Lua/Shared/Vector3/Functions/DistanceSqr2D">DistanceSqr2D</a>(Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Functions/Dot" title="Lua/Shared/Vector3/Functions/Dot">Dot</a>(Vector3)
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Functions/Length" title="Lua/Shared/Vector3/Functions/Length">Length</a>()
</td></tr>
<tr>
<td align="right"> number
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Functions/LengthSqr" title="Lua/Shared/Vector3/Functions/LengthSqr">LengthSqr</a>()
</td></tr>
<tr>
<td align="right">
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Functions/Normalize" title="Lua/Shared/Vector3/Functions/Normalize">Normalize</a>()
</td></tr>
<tr>
<td align="right"> Vector3
</td>
<td align="left"> <a href="/Lua/Shared/Vector3/Functions/Normalized" title="Lua/Shared/Vector3/Functions/Normalized">Normalized</a>()
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
<td align="right"> Vector3
</td>
<td align="left"> Vector3 + Vector3
</td></tr>
<tr>
<td align="right"> Vector3
</td>
<td align="left"> Vector3 / number
</td></tr>
<tr>
<td align="right"> boolean
</td>
<td align="left"> Vector3 == Vector3
</td></tr>
<tr>
<td align="right"> Vector3
</td>
<td align="left"> Vector3 * number
</td></tr>
<tr>
<td align="right"> Vector3
</td>
<td align="left"> number * Vector3
</td></tr>
<tr>
<td align="right"> Vector3
</td>
<td align="left"> Vector3 - Vector3
</td></tr>
<tr>
<td align="right"> string
</td>
<td align="left"> tostring(Vector3)
</td></tr>
<tr>
<td align="right"> Vector3
</td>
<td align="left"> -Vector3
</td></tr></table> </font>
<h2> <span class="mw-headline" id="Properties">Properties</span></h2>
<p><font size="3">
</p>
<table class="wikitable sortable">
<tr>
<th width="160"> Name
</th>
<th width="130"> Type
</th></tr>
<tr>
<td align="left"> <a href="/Lua/Shared/Vector3/Properties/x" title="Lua/Shared/Vector3/Properties/x">x</a>
</td>
<td align="left"> number
</td></tr>
<tr>
<td align="left"> <a href="/Lua/Shared/Vector3/Properties/y" title="Lua/Shared/Vector3/Properties/y">y</a>
</td>
<td align="left"> number
</td></tr>
<tr>
<td align="left"> <a href="/Lua/Shared/Vector3/Properties/z" title="Lua/Shared/Vector3/Properties/z">z</a>
</td>
<td align="left"> number
</td></tr></table> </font>
 
 
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Shared/Vector3&amp;oldid=24719">http://wiki.jc-mp.com/index.php?title=Lua/Shared/Vector3&amp;oldid=24719</a>"</div>
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
<li id="f-lastmod"> This page was last modified on 21 December 2013, at 11:33.</li>
<li id="f-viewcount">This page has been accessed 735 times.</li>
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