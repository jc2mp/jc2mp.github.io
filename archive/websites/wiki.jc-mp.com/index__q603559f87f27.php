<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8" />
<title>Server/Getting started/Linux Server - JC2-MP Documentation</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta name="generator" content="MediaWiki 1.23.11" />
<meta name="robots" content="noindex,nofollow" />
<script src="/cdn-cgi/apps/head/M5tUShgACKN8efwMnCwRw1ud1RM.js"></script><link rel="shortcut icon" href="/favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)" />
<link rel="EditURI" type="application/rsd+xml" href="https://wiki.jc-mp.com/api.php?action=rsd" />
<link rel="copyright" href="https://www.gnu.org/copyleft/fdl.html" />
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="https://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=ext.geshi.local%7Cmediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.ui.button&amp;only=styles&amp;skin=cavendish&amp;*" />
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Server/Getting_started/Linux_Server","wgTitle":"Server/Getting started/Linux Server","wgCurRevisionId":27496,"wgRevisionId":22680,"wgArticleId":2836,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Server/Getting_started/Linux_Server","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:7f77fa4f43bf4c4bcff833b005ee38c1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
<style type="text/css">/*<![CDATA[*/
.source-lua {line-height: normal;}
.source-lua li, .source-lua pre {
	line-height: normal; border: 0px none white;
}
/**
 * GeSHi Dynamically Generated Stylesheet
 * --------------------------------------
 * Dynamically generated stylesheet for lua
 * CSS class: source-lua, CSS id: 
 * GeSHi (C) 2004 - 2007 Nigel McNie, 2007 - 2008 Benny Baumann
 * (http://qbnz.com/highlighter/ and http://geshi.org/)
 * --------------------------------------
 */
.lua.source-lua .de1, .lua.source-lua .de2 {font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;font-family: monospace, monospace;}
.lua.source-lua  {font-family:monospace;}
.lua.source-lua .imp {font-weight: bold; color: red;}
.lua.source-lua li, .lua.source-lua .li1 {font-weight: normal; vertical-align:top;}
.lua.source-lua .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;}
.lua.source-lua .li2 {font-weight: bold; vertical-align:top;}
.lua.source-lua .kw1 {color: #aa9900; font-weight: bold;}
.lua.source-lua .kw2 {color: #aa9900; font-weight: bold;}
.lua.source-lua .kw3 {color: #0000aa;}
.lua.source-lua .kw4 {color: #aa9900;}
.lua.source-lua .kw5 {color: #aa9900;}
.lua.source-lua .co1 {color: #808080; font-style: italic;}
.lua.source-lua .co2 {color: #ff0000;}
.lua.source-lua .coMULTI {color: #808080; font-style: italic;}
.lua.source-lua .es0 {color: #000099; font-weight: bold;}
.lua.source-lua .es1 {color: #000099; font-weight: bold;}
.lua.source-lua .es2 {color: #000099; font-weight: bold;}
.lua.source-lua .br0 {color: #66cc66;}
.lua.source-lua .sy0 {color: #66cc66;}
.lua.source-lua .st0 {color: #ff6666;}
.lua.source-lua .nu0 {color: #cc66cc;}
.lua.source-lua .me0 {color: #aa9900;}
.lua.source-lua .ln-xtra, .lua.source-lua li.ln-xtra, .lua.source-lua div.ln-xtra {background-color: #ffc;}
.lua.source-lua span.xtra { display:block; }

/*]]>*/
</style></head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Server_Getting_started_Linux_Server skin-cavendish action-view">
<div id="internal"></div>

<div id="globalWrapper" class="view">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Server%2FGetting+started%2FLinux+Server&amp;returntoquery=oldid%3D22680">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Server/Getting started/Linux Server - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Server/Getting_started/Linux_Server" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Server/Getting_started/Linux_Server&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Server/Getting_started/Linux_Server&amp;action=edit&amp;oldid=22680" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Server/Getting_started/Linux_Server&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Server/Getting_started/Linux_Server" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Server/Getting_started/Linux_Server" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-print"><a href="/index.php?title=Server/Getting_started/Linux_Server&amp;oldid=22680&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
<li id="t-permalink"><a href="/index.php?title=Server/Getting_started/Linux_Server&amp;oldid=22680" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Server/Getting_started/Linux_Server&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Server/Getting started/Linux Server</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Server" title="Server">Server</a></span><div id="mw-revision-info">Revision as of 02:59, 7 December 2013 by <a href="/User:RedCat" title="User:RedCat" class="mw-userlink">RedCat</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:RedCat&amp;action=edit&amp;redlink=1" class="new" title="User talk:RedCat (page does not exist)">Talk</a> | <a href="/Special:Contributions/RedCat" title="Special:Contributions/RedCat">contribs</a>)</span></div><br />
<div id="mw-revision-nav">(diff) ← Older revision | <a href="/Server/Getting_started/Linux_Server" title="Server/Getting started/Linux Server">Latest revision</a> (<a href="/index.php?title=Server/Getting_started/Linux_Server&amp;diff=cur&amp;oldid=22680" title="Server/Getting started/Linux Server">diff</a>) | <a href="/index.php?title=Server/Getting_started/Linux_Server&amp;direction=next&amp;oldid=22680" title="Server/Getting started/Linux Server">Newer revision →</a> (<a href="/index.php?title=Server/Getting_started/Linux_Server&amp;diff=next&amp;oldid=22680" title="Server/Getting started/Linux Server">diff</a>)</div></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div> 
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p>Welcome to the JC2-MP Linux server tutorial. This page will explain the very basics of setting up a Linux server. This tutorial assumes you already have some basic Linux knowledge.
</p><p><br />
</p>
<div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Downloading_SteamCMD"><span class="tocnumber">1</span> <span class="toctext">Downloading SteamCMD</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Running_SteamCMD_and_downloading_the_server"><span class="tocnumber">2</span> <span class="toctext">Running SteamCMD and downloading the server</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Changing_the_server_options"><span class="tocnumber">3</span> <span class="toctext">Changing the server options</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Starting_up_the_server_in_screen"><span class="tocnumber">4</span> <span class="toctext">Starting up the server in screen</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Updating_the_server"><span class="tocnumber">5</span> <span class="toctext">Updating the server</span></a></li>
</ul>
</div>
<h2><span class="mw-headline" id="Downloading_SteamCMD">Downloading SteamCMD</span></h2>
<p>First we need to download SteamCMD. For more information on SteamCMD please <a rel="nofollow" class="external text" href="https://developer.valvesoftware.com/wiki/SteamCMD">click here</a>
</p><p>Login to your server with SSH, then head over to the home directory, we will make our Steam folder there.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">cd <span class="sy0">/</span>home
mkdir steam
cd steam</pre></div></div>
<p><br />
Now we can download SteamCMD and unpack it.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">wget http<span class="sy0">://</span>media<span class="sy0">.</span>steampowered<span class="sy0">.</span>com<span class="sy0">/</span>client<span class="sy0">/</span>steamcmd_linux<span class="sy0">.</span>tar<span class="sy0">.</span>gz
tar <span class="sy0">-</span>xvzf steamcmd_linux<span class="sy0">.</span>tar<span class="sy0">.</span>gz
rm steamcmd_linux<span class="sy0">.</span>tar<span class="sy0">.</span>gz</pre></div></div>
<p><br />
</p>
<h2><span class="mw-headline" id="Running_SteamCMD_and_downloading_the_server">Running SteamCMD and downloading the server</span></h2>
<p>Now we need to run SteamCMD.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="sy0">./</span>steamcmd<span class="sy0">.</span>sh</pre></div></div>
<p>SteamCMD will now update and it might download some files, wait till it finishes.
</p><p><br />
Now let's download the latest server version!
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">force_install_dir <span class="sy0">./</span>jcmp
app_update <span class="nu0">261140</span></pre></div></div>
<p>It will now download the latest server version. Once it is done downloading we can safely exit SteamCMD.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">quit</pre></div></div>
<p><br />
</p>
<h2><span class="mw-headline" id="Changing_the_server_options">Changing the server options</span></h2>
<p>First lets move to the JC2-MP server directory.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">cd jcmp</pre></div></div>
<p><br />
Now use your favorite editor to edit the server's configuration file, I personally use nano.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">nano config<span class="sy0">.</span>lua</pre></div></div>
<p>Every possible server option is explained in the configuration file. Simply follow the instructions.
</p><p><br />
</p>
<h2><span class="mw-headline" id="Starting_up_the_server_in_screen">Starting up the server in screen</span></h2>
<p>Now that we have successfully downloaded the server and configured it, we can now start it up. We will do this in a screen.
</p><p><br />
If you do not have screen installed type:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">apt<span class="sy0">-</span>get install screen</pre></div></div>
<p>And follow the instructions.
</p><p><br />
Now start the screen and the server.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">screen <span class="sy0">-</span>S jcmp <span class="sy0">-</span>d <span class="sy0">-</span>m <span class="sy0">./</span>Jcmp<span class="sy0">-</span>Server</pre></div></div>
<p>This will run a silent screen in the background.
</p><p><br />
To access the screen / JC2-MP server type the following:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">screen <span class="sy0">-</span>d <span class="sy0">-</span>R jcmp</pre></div></div>
<p>It should now say that the server has successfully started. You can press CTRL + A then CTRL + D to exit the screen safely without stopping the server.
</p><p><br />
You are now ready to play on your own server and you can start adding scripts and gamemodes.
</p><p><br />
</p>
<h2><span class="mw-headline" id="Updating_the_server">Updating the server</span></h2>
<p>To update the server to the latest version we will need to run SteamCMD again.
</p><p><br />
First cd to your Steam directory.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">cd <span class="sy0">/</span>home<span class="sy0">/</span>steam</pre></div></div>
<p><br />
Now run SteamCMD.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="sy0">./</span>steamcmd<span class="sy0">.</span>sh</pre></div></div>
<p>Now let's update to the latest server version!
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">force_install_dir <span class="sy0">./</span>jcmp
app_update <span class="nu0">261140</span></pre></div></div>
<p><br />
You can now quit SteamCMD.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">quit</pre></div></div>
<p><br />
Congratulations your server is now updated to the latest version!
</p>

</div><div class="printfooter">
Retrieved from "<a href="https://wiki.jc-mp.com/index.php?title=Server/Getting_started/Linux_Server&amp;oldid=22680">https://wiki.jc-mp.com/index.php?title=Server/Getting_started/Linux_Server&amp;oldid=22680</a>"</div>
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
mw.config.set({"wgBackendResponseTime":206});
}</script></body></html>