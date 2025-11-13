<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8" />
<title>Server/Getting started/Windows Server/SteamCMD - JC2-MP Documentation</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta name="generator" content="MediaWiki 1.23.11" />
<meta name="robots" content="noindex,nofollow" />
<script src="/cdn-cgi/apps/head/M5tUShgACKN8efwMnCwRw1ud1RM.js"></script><link rel="shortcut icon" href="/favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)" />
<link rel="EditURI" type="application/rsd+xml" href="https://wiki.jc-mp.com/api.php?action=rsd" />
<link rel="copyright" href="https://www.gnu.org/copyleft/fdl.html" />
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="https://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=ext.geshi.local%7Cmediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.ui.button&amp;only=styles&amp;printable=1&amp;skin=cavendish&amp;*" />
<link rel="stylesheet" href="/skins/cavendish/print.css?303" media="" /><meta name="ResourceLoaderDynamicStyles" content="" />
<link rel="stylesheet" href="https://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;printable=1&amp;skin=cavendish&amp;*" />
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}
/* cache key: wiki:resourceloader:filter:minify-css:7:29b70323345a439ab9ed7007e0c178a6 */</style>
<script src="https://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;printable=1&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Server/Getting_started/Windows_Server/SteamCMD","wgTitle":"Server/Getting started/Windows Server/SteamCMD","wgCurRevisionId":26735,"wgRevisionId":26735,"wgArticleId":3734,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Server/Getting_started/Windows_Server/SteamCMD","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
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
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Server_Getting_started_Windows_Server_SteamCMD skin-cavendish action-view">
<div id="internal"></div>

<div id="globalWrapper" class="view">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Server%2FGetting+started%2FWindows+Server%2FSteamCMD&amp;returntoquery=oldid%3D26735%26printable%3Dyes">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Server/Getting started/Windows Server/SteamCMD - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Server/Getting_started/Windows_Server/SteamCMD" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Server/Getting_started/Windows_Server/SteamCMD&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Server/Getting_started/Windows_Server/SteamCMD&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Server/Getting_started/Windows_Server/SteamCMD&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Server/Getting_started/Windows_Server/SteamCMD" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Server/Getting_started/Windows_Server/SteamCMD" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-permalink"><a href="/index.php?title=Server/Getting_started/Windows_Server/SteamCMD&amp;oldid=26735" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Server/Getting_started/Windows_Server/SteamCMD&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Server/Getting started/Windows Server/SteamCMD</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Server" title="Server">Server</a>&lrm; | <a href="/Server/Getting_started/Windows_Server" title="Server/Getting started/Windows Server">Getting started/Windows Server</a></span><div id="mw-revision-info">Revision as of 23:34, 20 October 2014 by <a href="/User:Jman100" title="User:Jman100" class="mw-userlink">Jman100</a> <span class="mw-usertoollinks">(<a href="/index.php?title=User_talk:Jman100&amp;action=edit&amp;redlink=1" class="new" title="User talk:Jman100 (page does not exist)">Talk</a> | <a href="/Special:Contributions/Jman100" title="Special:Contributions/Jman100">contribs</a>)</span></div><br />
<div id="mw-revision-nav">(<a href="/index.php?title=Server/Getting_started/Windows_Server/SteamCMD&amp;diff=prev&amp;oldid=26735" title="Server/Getting started/Windows Server/SteamCMD">diff</a>) <a href="/index.php?title=Server/Getting_started/Windows_Server/SteamCMD&amp;direction=prev&amp;oldid=26735" title="Server/Getting started/Windows Server/SteamCMD">← Older revision</a> | Latest revision (diff) | Newer revision → (diff)</div></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div> 
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Introduction"><span class="tocnumber">1</span> <span class="toctext">Introduction</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Requirements"><span class="tocnumber">2</span> <span class="toctext">Requirements</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Step_1:_Installing_JC2-MP_using_SteamCMD"><span class="tocnumber">3</span> <span class="toctext">Step 1: Installing JC2-MP using SteamCMD</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Step_2:_Configuring_JC2-MP"><span class="tocnumber">4</span> <span class="toctext">Step 2: Configuring JC2-MP</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Step_3:_Running_JC2-MP"><span class="tocnumber">5</span> <span class="toctext">Step 3: Running JC2-MP</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Step_4:_Updating_the_server"><span class="tocnumber">6</span> <span class="toctext">Step 4: Updating the server</span></a></li>
<li class="toclevel-1 tocsection-7"><a href="#FAQ"><span class="tocnumber">7</span> <span class="toctext">FAQ</span></a></li>
</ul>
</div>
<h2><span class="mw-headline" id="Introduction">Introduction</span></h2>
<p>This is a guide to running the server software for JC2-MP under Windows using SteamCMD.
</p>
<h2><span class="mw-headline" id="Requirements">Requirements</span></h2>
<p>The JC2-MP server <b>requires</b> the <a rel="nofollow" class="external text" href="https://www.microsoft.com/en-us/download/details.aspx?id=30679">Visual C++ Redistributable for Visual Studio 2012</a>. These are packaged with the server and can be executed from _CommonRedist\vcredist\2012\vcredist_x86.exe.
</p>
<h2><span class="mw-headline" id="Step_1:_Installing_JC2-MP_using_SteamCMD">Step 1: Installing JC2-MP using SteamCMD</span></h2>
<p>First, we need to set up SteamCMD. First make a directory for it somewhere, and download the following file:
</p><p><a rel="nofollow" class="external free" href="https://steamcdn-a.akamaihd.net/installer/steamcmd.zip">http://media.steampowered.com/installer/steamcmd.zip</a>
</p><p>Unzip the folder, and you should find an executable file called "SteamCMD". Double click this executable, and wait until a CMD prompt appears.
</p><p>Once it has finished loading, run
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">login anonymous</pre></div></div>
<p>Now we need to set a directory for the server to install to. You can set this to anything you have permission to write to. Therefore, unless you're an administrator, it is recommended to place this somewhere within your user area.
</p><p>To do this, you would enter the following:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">force_install_dir C<span class="sy0">:</span>\Users\<span class="br0">&#91;</span>yourname<span class="br0">&#93;</span>\jcmp</pre></div></div>
<p>Now we need to download the game itself, this is also the command used to update the game. The validate keyword performs a checksum on the downloaded files to ensure that everything is intact.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">app_update <span class="nu0">261140</span> validate</pre></div></div>
<p>If you wish to update to the latest beta version, run the following instruction instead:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">app_update <span class="nu0">261140</span> <span class="sy0">-</span>beta publicbeta validate</pre></div></div>
<p>Once this has finished, type the following to exit:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">quit</pre></div></div>
<h2><span class="mw-headline" id="Step_2:_Configuring_JC2-MP">Step 2: Configuring JC2-MP</span></h2>
<p>There are a couple of changes to be made to the JC2-MP server itself before running it for the first time.
</p><p>- First, rename "default_config.lua" to "config.lua", and then open the file with a text editor (such as notepad) to change any settings such as the server's name.
</p><p>The next step is to install the latest versions of any official scripts you want. The scripts that ship with the server are outdated and usually non-functional, the best way to grab the latest versions are as follows:
</p><p>- Make a "scripts" directory inside the folder you installed JC2-MP to.
</p><p>Open the following link in a web browser: <a rel="nofollow" class="external free" href="https://github.com/jc2mp/scripts">https://github.com/jc2mp/scripts</a>
</p><p>Click on one of the scripts listed (such as Racing, freeroam etc.), then click "Download zip" on the right hand side. Copy the zip folder to the scripts folder, and extract it there.
</p>
<h2><span class="mw-headline" id="Step_3:_Running_JC2-MP">Step 3: Running JC2-MP</span></h2>
<p>Now that we have successfully downloaded the server and configured it, we can now start it up.
</p><p>Double click JcmpServer.exe. It should now say that the server has successfully started. This means that the server is running correctly, and you are now ready to play.
</p>
<h2><span class="mw-headline" id="Step_4:_Updating_the_server">Step 4: Updating the server</span></h2>
<p>To update the server to the latest version, simply follow the instructions in step 1 from the point where you run SteamCMD.exe.
</p>
<h2><span class="mw-headline" id="FAQ">FAQ</span></h2>
<p>Q: The server is running fine, and I can connect, but nobody else can!
</p><p>A: This likely means that you're running the server from home, and you haven't set up port forwarding correctly. The first thing to do is to find out which port your server is set to run on, to do this, open up the "config" file in the same folder that contains JcmpServer.exe, and look for the line that says "BindPort". Next, find out what model of router you are running (it will say on the router itself somewhere). Finally, head over to www.portforward.com and find instructions on how to forward a port on your router.
</p>


</div><div class="printfooter">
Retrieved from "<a href="https://wiki.jc-mp.com/index.php?title=Server/Getting_started/Windows_Server/SteamCMD&amp;oldid=26735">https://wiki.jc-mp.com/index.php?title=Server/Getting_started/Windows_Server/SteamCMD&amp;oldid=26735</a>"</div>
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
<li id="f-lastmod"> This page was last modified on 20 October 2014, at 23:34.</li>
<li id="f-viewcount">This page has been accessed 47,652 times.</li>
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
<script src="https://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;printable=1&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":144});
}</script></body></html>