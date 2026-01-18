<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<title>Lua/Tutorials/Beginner/Your first gamemode - JC2-MP Documentation</title>
<meta charset="UTF-8"/>
<meta name="generator" content="MediaWiki 1.21.3"/>
<meta name="robots" content="noindex,nofollow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1387493058,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/acv=4125811108/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"28605fd966f9383f8729ebfe3552e89fc9292a74-1387586368-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/acv=616370821/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.jc-mp.com/api.php?action=rsd"/>
<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html"/>
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom"/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=ext.geshi.local%7Cmediawiki.legacy.commonPrint%2Cshared&amp;only=styles&amp;skin=cavendish&amp;*"/>
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Tutorials/Beginner/Your_first_gamemode","wgTitle":"Lua/Tutorials/Beginner/Your first gamemode","wgCurRevisionId":24640,"wgArticleId":2841,"wgIsArticle":true,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Tutorials/Beginner/Your_first_gamemode","wgRestrictionEdit":[],"wgRestrictionMove":[]});
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
<style type="text/css">.source-lua{line-height:normal;}.source-lua li,.source-lua pre{line-height:normal;border:0px none white;}.lua.source-lua .de1,.lua.source-lua .de2{font:normal normal 1em/1.2em monospace;margin:0;padding:0;background:none;vertical-align:top;font-family:monospace,monospace;}.lua.source-lua{font-family:monospace;}.lua.source-lua .imp{font-weight:bold;color:red;}.lua.source-lua li,.lua.source-lua .li1{font-weight:normal;vertical-align:top;}.lua.source-lua .ln{width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;}.lua.source-lua .li2{font-weight:bold;vertical-align:top;}.lua.source-lua .kw1{color:#aa9900;font-weight:bold;}.lua.source-lua .kw2{color:#aa9900;font-weight:bold;}.lua.source-lua .kw3{color:#0000aa;}.lua.source-lua .kw4{color:#aa9900;}.lua.source-lua .kw5{color:#aa9900;}.lua.source-lua .co1{color:#808080;font-style:italic;}.lua.source-lua .co2{color:#ff0000;}.lua.source-lua .coMULTI{color:#808080;font-style:italic;}.lua.source-lua .es0{color:#000099;font-weight:bold;}.lua.source-lua .es1{color:#000099;font-weight:bold;}.lua.source-lua .es2{color:#000099;font-weight:bold;}.lua.source-lua .br0{color:#66cc66;}.lua.source-lua .sy0{color:#66cc66;}.lua.source-lua .st0{color:#ff6666;}.lua.source-lua .nu0{color:#cc66cc;}.lua.source-lua .me0{color:#aa9900;}.lua.source-lua .ln-xtra,.lua.source-lua li.ln-xtra,.lua.source-lua div.ln-xtra{background-color:#ffc;}.lua.source-lua span.xtra{display:block;}</style></head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Tutorials_Beginner_Your_first_gamemode skin-cavendish action-view">
<div id="internal"></div>
 
<div id="globalWrapper" class="view">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FTutorials%2FBeginner%2FYour+first+gamemode&amp;returntoquery=oldid%3D24640">
Log in</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Tutorials/Beginner/Your first gamemode - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Tutorials/Beginner/Your_first_gamemode" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Tutorials/Beginner/Your_first_gamemode&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Tutorials/Beginner/Your_first_gamemode" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Tutorials/Beginner/Your_first_gamemode" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-print"><a href="/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;oldid=24640&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;oldid=24640" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Lua/Tutorials/Beginner/Your first gamemode</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a>&lrm; | <a href="/Lua/Tutorials" title="Lua/Tutorials">Tutorials</a></span><div id="mw-revision-info">Revision as of 20:13, 18 December 2013 by <a href="/index.php?title=User:FabioGNR&amp;action=edit&amp;redlink=1" class="new mw-userlink" title="User:FabioGNR (page does not exist)">FabioGNR</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:FabioGNR&amp;action=edit&amp;redlink=1" class="new" title="User talk:FabioGNR (page does not exist)">Talk</a> | <a href="/Special:Contributions/FabioGNR" title="Special:Contributions/FabioGNR">contribs</a>)</span></div><br/>
<div id="mw-revision-nav">(<a href="/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;diff=prev&amp;oldid=24640" title="Lua/Tutorials/Beginner/Your first gamemode">diff</a>) <a href="/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;direction=prev&amp;oldid=24640" title="Lua/Tutorials/Beginner/Your first gamemode">← Older revision</a> | Latest revision (diff) | Newer revision → (diff)</div></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p>For this tutorial, we will be creating an extremely simple gamemode called Last Rico Standing. When a game starts, players will spawn inside the dome and be given machine guns. When they die, they will spawn above the dome without weapons. When there is only one person left, they are declared the winner and the game restarts.
</p><p>It is assumed you have read the <a href="/Lua/Tutorials/Beginner/Beginner" title="Lua/Tutorials/Beginner/Beginner">Beginner's Tutorial</a>.
</p>
<table id="toc" class="toc"><tr><td><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Setup"><span class="tocnumber">1</span> <span class="toctext">Setup</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Spawn_points"><span class="tocnumber">2</span> <span class="toctext">Spawn points</span></a>
<ul>
<li class="toclevel-2 tocsection-3"><a href="#Chat_command"><span class="tocnumber">2.1</span> <span class="toctext">Chat command</span></a></li>
<li class="toclevel-2 tocsection-4"><a href="#Server_console"><span class="tocnumber">2.2</span> <span class="toctext">Server console</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-5"><a href="#Spawning_everyone_on_module_load"><span class="tocnumber">3</span> <span class="toctext">Spawning everyone on module load</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Adding_functionality"><span class="tocnumber">4</span> <span class="toctext">Adding functionality</span></a></li>
<li class="toclevel-1 tocsection-7"><a href="#Tracking_players_and_declaring_a_winner"><span class="tocnumber">5</span> <span class="toctext">Tracking players and declaring a winner</span></a></li>
<li class="toclevel-1 tocsection-8"><a href="#Conclusion"><span class="tocnumber">6</span> <span class="toctext">Conclusion</span></a></li>
</ul>
</td></tr></table>
<h2> <span class="mw-headline" id="Setup">Setup</span></h2>
<p>As before, we will create the lua file in the required directory structure: <i>scripts/MyFirstGamemode/server/LastRicoStanding.lua</i>
</p>
<h2> <span class="mw-headline" id="Spawn_points">Spawn points</span></h2>
<p>First, we need some spawn points. It will be useful to have a way to print our position. This can be done in a few ways, shown below. Either way, you can open server.log to copy their output.
</p>
<h4> <span class="mw-headline" id="Chat_command">Chat command</span></h4>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">PlayerChat <span class="sy0">=</span> <span class="kw1">function</span><span class="br0">&#40;</span>args<span class="br0">&#41;</span>
	<span class="kw1">if</span> args<span class="sy0">.</span>text <span class="sy0">==</span> <span class="st0">&quot;/pos&quot;</span> <span class="kw1">then</span>
		<span class="kw3">print</span><span class="br0">&#40;</span>args<span class="sy0">.</span>player<span class="sy0">:</span>GetPosition<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
		<span class="kw1">return</span> <span class="kw4">false</span>
	<span class="kw1">end</span>
&#160;
	<span class="kw1">return</span> <span class="kw4">true</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PlayerChat&quot;</span><span class="sy0">,</span> PlayerChat<span class="br0">&#41;</span></pre></div></div>
<h4> <span class="mw-headline" id="Server_console">Server console</span></h4>
<p>If you want to play around with the server console, type this: (assuming the module is loaded and you're the only person in the server)
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">lua MyFirstGamemode <span class="kw3">print</span><span class="br0">&#40;</span>Player<span class="sy0">.</span>GetById<span class="br0">&#40;</span><span class="nu0">0</span><span class="br0">&#41;</span><span class="sy0">:</span>GetPosition<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span></pre></div></div>
<h2> <span class="mw-headline" id="Spawning_everyone_on_module_load">Spawning everyone on module load</span></h2>
<p>For our first test, we will make it so when the module is loaded everyone in the server is teleported to a random spawn. You can test it by reloading the module from the console.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">spawns <span class="sy0">=</span> <span class="br0">&#123;</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14197.319336</span><span class="sy0">,</span> <span class="nu0">458.649567</span><span class="sy0">,</span> <span class="nu0">14382.654297</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14053.989258</span><span class="sy0">,</span> <span class="nu0">451.647766</span><span class="sy0">,</span> <span class="nu0">14313.827148</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14192.114258</span><span class="sy0">,</span> <span class="nu0">438.649567</span><span class="sy0">,</span> <span class="nu0">14359.311523</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14109.357422</span><span class="sy0">,</span> <span class="nu0">423.588654</span><span class="sy0">,</span> <span class="nu0">14350.410156</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14162.669922</span><span class="sy0">,</span> <span class="nu0">434.653503</span><span class="sy0">,</span> <span class="nu0">14290.238281</span><span class="br0">&#41;</span>
<span class="br0">&#125;</span>
&#160;
StartGame <span class="sy0">=</span> <span class="kw1">function</span><span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="kw1">for</span> player <span class="kw2">in</span> Server<span class="sy0">:</span>GetPlayers<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw1">do</span>
		<span class="kw1">local</span> randomIndex <span class="sy0">=</span> <span class="kw3">math.random</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span> <span class="sy0">#</span>spawns<span class="br0">&#41;</span>
		<span class="kw1">local</span> spawnPosition <span class="sy0">=</span> spawns<span class="br0">&#91;</span>randomIndex<span class="br0">&#93;</span>
		player<span class="sy0">:</span>SetPosition<span class="br0">&#40;</span>spawnPosition<span class="br0">&#41;</span>
	<span class="kw1">end</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;ModuleLoad&quot;</span><span class="sy0">,</span> StartGame<span class="br0">&#41;</span></pre></div></div>
<p><i>spawns</i> is a table used like an array. You can also declare it as an empty table, like <i>spawns = {}</i>, then use <i>table.insert(spawns, Vector3(1, 2, 3))</i>, but either syntax works. You can get the third spawn point by doing <i>local position = spawns[3]</i>. Note that arrays in Lua start at 1, not 0 like most other languages.
</p><p>You can use <i>Server:GetPlayers()</i> to iterate through every player in the server. It doesn't return a table as you might expect, it returns a fancy iterator function. (You don't need to know that, you can simply use it like above.)
</p>
<h2> <span class="mw-headline" id="Adding_functionality">Adding functionality</span></h2>
<p>This script will start a game when you reload the module from the console. Players spawn with machine guns and full health. If someone respawns while a game is in progress, they are teleported to the top of the dome with no weapons. The game won't end, however; we'll fix that later.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">spawns <span class="sy0">=</span> <span class="br0">&#123;</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14197.319336</span><span class="sy0">,</span> <span class="nu0">458.649567</span><span class="sy0">,</span> <span class="nu0">14382.654297</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14053.989258</span><span class="sy0">,</span> <span class="nu0">451.647766</span><span class="sy0">,</span> <span class="nu0">14313.827148</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14192.114258</span><span class="sy0">,</span> <span class="nu0">438.649567</span><span class="sy0">,</span> <span class="nu0">14359.311523</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14109.357422</span><span class="sy0">,</span> <span class="nu0">423.588654</span><span class="sy0">,</span> <span class="nu0">14350.410156</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14162.669922</span><span class="sy0">,</span> <span class="nu0">434.653503</span><span class="sy0">,</span> <span class="nu0">14290.238281</span><span class="br0">&#41;</span>
<span class="br0">&#125;</span>
deathSpawn <span class="sy0">=</span> Vector3<span class="br0">&#40;</span><span class="nu0">14130.737305</span><span class="sy0">,</span> <span class="nu0">528.022278</span><span class="sy0">,</span> <span class="nu0">14341.015625</span><span class="br0">&#41;</span>
textColor <span class="sy0">=</span> Color<span class="br0">&#40;</span><span class="nu0">115</span><span class="sy0">,</span> <span class="nu0">170</span><span class="sy0">,</span> <span class="nu0">220</span><span class="br0">&#41;</span>
&#160;
StartGame <span class="sy0">=</span> <span class="kw1">function</span><span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="kw1">local</span> message <span class="sy0">=</span> <span class="st0">&quot;Starting game with &quot;</span><span class="sy0">..</span>Server<span class="sy0">:</span>GetPlayerCount<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">..</span><span class="st0">&quot; players&quot;</span>
	Chat<span class="sy0">:</span>Broadcast<span class="br0">&#40;</span><span class="st0">&quot;[Last Rico Standing] &quot;</span><span class="sy0">..</span>message<span class="sy0">,</span> textColor<span class="br0">&#41;</span>
&#160;
	<span class="kw1">for</span> player <span class="kw2">in</span> Server<span class="sy0">:</span>GetPlayers<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw1">do</span>
		<span class="kw1">local</span> randomIndex <span class="sy0">=</span> <span class="kw3">math.random</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span> <span class="sy0">#</span>spawns<span class="br0">&#41;</span>
		<span class="kw1">local</span> spawnPosition <span class="sy0">=</span> spawns<span class="br0">&#91;</span>randomIndex<span class="br0">&#93;</span>
		player<span class="sy0">:</span>SetPosition<span class="br0">&#40;</span>spawnPosition<span class="br0">&#41;</span>
		<span class="co1">-- Give them a machine gun in the primary slot (2).</span>
		player<span class="sy0">:</span>ClearInventory<span class="br0">&#40;</span><span class="br0">&#41;</span>
		<span class="kw1">local</span> weapon <span class="sy0">=</span> Weapon<span class="br0">&#40;</span><span class="nu0">28</span><span class="br0">&#41;</span>
		player<span class="sy0">:</span>GiveWeapon<span class="br0">&#40;</span><span class="nu0">2</span><span class="sy0">,</span> weapon<span class="br0">&#41;</span>
		<span class="co1">-- Reset their health to 100%, just in case.</span>
		player<span class="sy0">:</span>SetHealth<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span>
	<span class="kw1">end</span>
<span class="kw1">end</span>
&#160;
PlayerSpawn <span class="sy0">=</span> <span class="kw1">function</span><span class="br0">&#40;</span>args<span class="br0">&#41;</span>
	<span class="co1">-- Remove all of their weapons.</span>
	args<span class="sy0">.</span>player<span class="sy0">:</span>ClearInventory<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="co1">-- Teleport them to the top of the dome.</span>
	args<span class="sy0">.</span>player<span class="sy0">:</span>SetPosition<span class="br0">&#40;</span>deathSpawn<span class="br0">&#41;</span>
	<span class="co1">-- Send them a chat message.</span>
	<span class="kw1">local</span> message <span class="sy0">=</span> <span class="st0">&quot;[Last Rico Standing] A game in progress, please wait&quot;</span>
	args<span class="sy0">.</span>player<span class="sy0">:</span>SendChatMessage<span class="br0">&#40;</span>message<span class="sy0">,</span> textColor<span class="br0">&#41;</span>
	<span class="co1">-- Return false to override the default spawn position set in config.lua.</span>
	<span class="kw1">return</span> <span class="kw4">false</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;ModuleLoad&quot;</span><span class="sy0">,</span> StartGame<span class="br0">&#41;</span>
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PlayerSpawn&quot;</span><span class="sy0">,</span> PlayerSpawn<span class="br0">&#41;</span></pre></div></div>
<h2> <span class="mw-headline" id="Tracking_players_and_declaring_a_winner">Tracking players and declaring a winner</span></h2>
<p>In order to declare a winner, we need to store which players are currently in the game and, when someone dies or quits, check if there's only one left. This is done in our PlayerDeathOrQuit function, called by both the PlayerDeath and PlayerQuit events. Then the game restarts.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">spawns <span class="sy0">=</span> <span class="br0">&#123;</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14197.319336</span><span class="sy0">,</span> <span class="nu0">458.649567</span><span class="sy0">,</span> <span class="nu0">14382.654297</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14053.989258</span><span class="sy0">,</span> <span class="nu0">451.647766</span><span class="sy0">,</span> <span class="nu0">14313.827148</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14192.114258</span><span class="sy0">,</span> <span class="nu0">438.649567</span><span class="sy0">,</span> <span class="nu0">14359.311523</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14109.357422</span><span class="sy0">,</span> <span class="nu0">423.588654</span><span class="sy0">,</span> <span class="nu0">14350.410156</span><span class="br0">&#41;</span><span class="sy0">,</span>
	Vector3<span class="br0">&#40;</span><span class="nu0">14162.669922</span><span class="sy0">,</span> <span class="nu0">434.653503</span><span class="sy0">,</span> <span class="nu0">14290.238281</span><span class="br0">&#41;</span>
<span class="br0">&#125;</span>
deathSpawn <span class="sy0">=</span> Vector3<span class="br0">&#40;</span><span class="nu0">14130.737305</span><span class="sy0">,</span> <span class="nu0">528.022278</span><span class="sy0">,</span> <span class="nu0">14341.015625</span><span class="br0">&#41;</span>
textColor <span class="sy0">=</span> Color<span class="br0">&#40;</span><span class="nu0">115</span><span class="sy0">,</span> <span class="nu0">170</span><span class="sy0">,</span> <span class="nu0">220</span><span class="br0">&#41;</span>
players <span class="sy0">=</span> <span class="br0">&#123;</span><span class="br0">&#125;</span>
&#160;
StartGame <span class="sy0">=</span> <span class="kw1">function</span><span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="kw1">local</span> message <span class="sy0">=</span> <span class="st0">&quot;Starting game with &quot;</span><span class="sy0">..</span>Server<span class="sy0">:</span>GetPlayerCount<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">..</span><span class="st0">&quot; players&quot;</span>
	Chat<span class="sy0">:</span>Broadcast<span class="br0">&#40;</span><span class="st0">&quot;[Last Rico Standing] &quot;</span><span class="sy0">..</span>message<span class="sy0">,</span> textColor<span class="br0">&#41;</span>
&#160;
	<span class="kw1">for</span> player <span class="kw2">in</span> Server<span class="sy0">:</span>GetPlayers<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw1">do</span>
		<span class="kw3">table.insert</span><span class="br0">&#40;</span>players<span class="sy0">,</span> player<span class="br0">&#41;</span>
&#160;
		<span class="kw1">local</span> randomIndex <span class="sy0">=</span> <span class="kw3">math.random</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span> <span class="sy0">#</span>spawns<span class="br0">&#41;</span>
		<span class="kw1">local</span> spawnPosition <span class="sy0">=</span> spawns<span class="br0">&#91;</span>randomIndex<span class="br0">&#93;</span>
		player<span class="sy0">:</span>SetPosition<span class="br0">&#40;</span>spawnPosition<span class="br0">&#41;</span>
		<span class="co1">-- Give them a machine gun in the primary slot (2).</span>
		player<span class="sy0">:</span>ClearInventory<span class="br0">&#40;</span><span class="br0">&#41;</span>
		<span class="kw1">local</span> weapon <span class="sy0">=</span> Weapon<span class="br0">&#40;</span><span class="nu0">28</span><span class="br0">&#41;</span>
		player<span class="sy0">:</span>GiveWeapon<span class="br0">&#40;</span><span class="nu0">2</span><span class="sy0">,</span> weapon<span class="br0">&#41;</span>
		<span class="co1">-- Reset their health to 100%, just in case.</span>
		player<span class="sy0">:</span>SetHealth<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span>
	<span class="kw1">end</span>
<span class="kw1">end</span>
&#160;
PlayerSpawn <span class="sy0">=</span> <span class="kw1">function</span><span class="br0">&#40;</span>args<span class="br0">&#41;</span>
	<span class="co1">-- If the current game doesn't have enough players and the server has enough</span>
	<span class="co1">-- to create a game, do so.</span>
	<span class="kw1">if</span> <span class="sy0">#</span>players <span class="sy0">&lt;</span> <span class="nu0">2</span> <span class="kw2">and</span> Server<span class="sy0">:</span>GetPlayerCount<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">&gt;=</span> <span class="nu0">2</span> <span class="kw1">then</span>
		StartGame<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="co1">-- Otherwise, a game is currently running fine and we either joined the server</span>
	<span class="co1">-- or died and respawned.</span>
	<span class="kw1">else</span>
		<span class="co1">-- Remove all of their weapons.</span>
		args<span class="sy0">.</span>player<span class="sy0">:</span>ClearInventory<span class="br0">&#40;</span><span class="br0">&#41;</span>
		<span class="co1">-- Teleport them to the top of the dome.</span>
		args<span class="sy0">.</span>player<span class="sy0">:</span>SetPosition<span class="br0">&#40;</span>deathSpawn<span class="br0">&#41;</span>
		<span class="co1">-- Send them a chat message.</span>
		<span class="kw1">local</span> message <span class="sy0">=</span> <span class="st0">&quot;[Last Rico Standing] A game is in progress, please wait.&quot;</span>
		args<span class="sy0">.</span>player<span class="sy0">:</span>SendChatMessage<span class="br0">&#40;</span>message<span class="sy0">,</span> textColor<span class="br0">&#41;</span>
	<span class="kw1">end</span>
&#160;
	<span class="co1">-- Return false to override the default spawn position set in config.lua.</span>
	<span class="kw1">return</span> <span class="kw4">false</span>
<span class="kw1">end</span>
&#160;
PlayerDeathOrQuit <span class="sy0">=</span> <span class="kw1">function</span><span class="br0">&#40;</span>args<span class="br0">&#41;</span>
	<span class="co1">-- If they're in the players table, remove them.</span>
	<span class="kw1">for</span> index<span class="sy0">,</span> player <span class="kw2">in</span> <span class="kw3">ipairs</span><span class="br0">&#40;</span>players<span class="br0">&#41;</span> <span class="kw1">do</span>
		<span class="kw1">if</span> player <span class="sy0">==</span> args<span class="sy0">.</span>player <span class="kw1">then</span>
			<span class="kw3">table.remove</span><span class="br0">&#40;</span>players<span class="sy0">,</span> index<span class="br0">&#41;</span>
			<span class="kw1">break</span>
		<span class="kw1">end</span>
	<span class="kw1">end</span>
	<span class="co1">-- If there is only one player left, declare them the winner.</span>
	<span class="kw1">if</span> <span class="sy0">#</span>players <span class="sy0">==</span> <span class="nu0">1</span> <span class="kw1">then</span>
		<span class="kw1">local</span> message <span class="sy0">=</span>
			<span class="st0">&quot;[Last Rico Standing] &quot;</span><span class="sy0">..</span>players<span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span><span class="sy0">:</span>GetName<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">..</span><span class="st0">&quot; has won the game!&quot;</span>
		Chat<span class="sy0">:</span>Broadcast<span class="br0">&#40;</span>message <span class="sy0">,</span> textColor<span class="br0">&#41;</span>
	<span class="kw1">end</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;ModuleLoad&quot;</span><span class="sy0">,</span> StartGame<span class="br0">&#41;</span>
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PlayerSpawn&quot;</span><span class="sy0">,</span> PlayerSpawn<span class="br0">&#41;</span>
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PlayerDeath&quot;</span><span class="sy0">,</span> PlayerDeathOrQuit<span class="br0">&#41;</span>
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PlayerQuit&quot;</span><span class="sy0">,</span> PlayerDeathOrQuit<span class="br0">&#41;</span></pre></div></div>
<h2> <span class="mw-headline" id="Conclusion">Conclusion</span></h2>
<p>Get someone else to test with you and have fun with it. Add a score system to track who has won the most. Create a table of <a href="/Lua/Shared/Weapon" title="Lua/Shared/Weapon">weapons</a> and assign people random ones when a game starts. The possibilities are endless.
</p><p>As you may have noticed, this is an entirely server-sided script. Adding a client-side component would be extremely powerful; we could add a player counter, scoreboard text, replace the chat messages with text on screen, or add a spectator camera. But client-side scripts will be part of another tutorial.
</p>
 
 
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;oldid=24640">http://wiki.jc-mp.com/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;oldid=24640</a>"</div>
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
<li id="f-lastmod"> This page was last modified on 18 December 2013, at 20:13.</li>
<li id="f-viewcount">This page has been accessed 2,707 times.</li>
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