<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8"/><title>Lua/Tutorials/Beginner/Beginner - JC2-MP Documentation</title>
<meta name="generator" content="MediaWiki 1.22.2"/>
<meta name="robots" content="noindex,follow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok8v=02fcfa4f56/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"2320f72cd943a04496bc32ba70d6e10243d11090-1392946788-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok8v=221574e73d/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.jc-mp.com/api.php?action=rsd"/>
<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html"/>
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom"/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=ext.geshi.local%7Cmediawiki.legacy.commonPrint%2Cshared&amp;only=styles&amp;printable=1&amp;skin=cavendish&amp;*"/>
<link rel="stylesheet" href="/skins/cavendish/print.css?303" media=""/><meta name="ResourceLoaderDynamicStyles" content=""/>
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;printable=1&amp;skin=cavendish&amp;*"/>
<style>a:lang(ar),a:lang(ckb),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}</style>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;printable=1&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Tutorials/Beginner/Beginner","wgTitle":"Lua/Tutorials/Beginner/Beginner","wgCurRevisionId":24764,"wgRevisionId":24764,"wgArticleId":2833,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Tutorials/Beginner/Beginner","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function(){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"disablesuggest":0,"editfont":"default","editondblclick":0,"editsection":1,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":0,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"justify":0,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nocache":0,"noconvertlink":0,"norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rememberpassword":0,"rows":25,"searchlimit":20,"showhiddencats":0,"shownumberswatching":1,"showtoc":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"vector-simplesearch":1,"watchcreations":0,"watchdefault":0,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":
0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function(){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:d6cee38fd88e62c412a64f3888b013b1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
<style type="text/css">.source-lua{line-height:normal;}.source-lua li,.source-lua pre{line-height:normal;border:0px none white;}.lua.source-lua .de1,.lua.source-lua .de2{font:normal normal 1em/1.2em monospace;margin:0;padding:0;background:none;vertical-align:top;font-family:monospace,monospace;}.lua.source-lua{font-family:monospace;}.lua.source-lua .imp{font-weight:bold;color:red;}.lua.source-lua li,.lua.source-lua .li1{font-weight:normal;vertical-align:top;}.lua.source-lua .ln{width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;}.lua.source-lua .li2{font-weight:bold;vertical-align:top;}.lua.source-lua .kw1{color:#aa9900;font-weight:bold;}.lua.source-lua .kw2{color:#aa9900;font-weight:bold;}.lua.source-lua .kw3{color:#0000aa;}.lua.source-lua .kw4{color:#aa9900;}.lua.source-lua .kw5{color:#aa9900;}.lua.source-lua .co1{color:#808080;font-style:italic;}.lua.source-lua .co2{color:#ff0000;}.lua.source-lua .coMULTI{color:#808080;font-style:italic;}.lua.source-lua .es0{color:#000099;font-weight:bold;}.lua.source-lua .es1{color:#000099;font-weight:bold;}.lua.source-lua .es2{color:#000099;font-weight:bold;}.lua.source-lua .br0{color:#66cc66;}.lua.source-lua .sy0{color:#66cc66;}.lua.source-lua .st0{color:#ff6666;}.lua.source-lua .nu0{color:#cc66cc;}.lua.source-lua .me0{color:#aa9900;}.lua.source-lua .ln-xtra,.lua.source-lua li.ln-xtra,.lua.source-lua div.ln-xtra{background-color:#ffc;}.lua.source-lua span.xtra{display:block;}</style></head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Tutorials_Beginner_Beginner skin-cavendish action-view">
<div id="internal"></div>
 
<div id="globalWrapper" class="view">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-anonuserpage" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid new" href="/User:204.236.235.245">
204.236.235.245</a>
<span class="top-nav-right">&nbsp;</span></li>
<li id="pt-anontalk" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid new" href="/User_talk:204.236.235.245">
Talk for this IP address</a>
<span class="top-nav-right">&nbsp;</span></li>
<li id="pt-anonlogin" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FTutorials%2FBeginner%2FBeginner&amp;returntoquery=printable%3Dyes">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Tutorials/Beginner/Beginner - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Tutorials/Beginner/Beginner" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Tutorials/Beginner/Beginner&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Tutorials/Beginner/Beginner&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Tutorials/Beginner/Beginner&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Tutorials/Beginner/Beginner" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Tutorials/Beginner/Beginner" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Tutorials/Beginner/Beginner&amp;oldid=24764" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Tutorials/Beginner/Beginner&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Lua/Tutorials/Beginner/Beginner</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a>&lrm; | <a href="/Lua/Tutorials" title="Lua/Tutorials">Tutorials</a></span></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p>Welcome to the beginner's JC2-MP Lua tutorial. This will explain the very basics of scripting in JC2-MP. We will be making a simple script that teleports you 3km into the sky when you type "/skydive" into the chat.
</p><p>This tutorial assumes you have an understanding of a few basic features of Lua. I strongly encourage you to learn these features for this tutorial:
</p>
<ul>
<li> <a rel="nofollow" class="external text" href="http://lua-users.org/wiki/LuaTypesTutorial">Types</a>
</li>
<li> <a rel="nofollow" class="external text" href="http://lua-users.org/wiki/ControlStructureTutorial">Control structures</a>
<ul>
<li> This tutorial only uses the 'if' statement.
</li>
</ul>
</li>
<li> <a rel="nofollow" class="external text" href="http://lua-users.org/wiki/TablesTutorial">Tables</a>
<ul>
<li> Tables can get complex, but this tutorial uses a simple case.
</li>
</ul>
</li>
<li> <a rel="nofollow" class="external text" href="http://lua-users.org/wiki/FunctionsTutorial">Functions</a>
</li>
<li> <a rel="nofollow" class="external text" href="http://lua-users.org/wiki/ScopeTutorial">Scope</a>
</li>
</ul>
<p>You can find more resources for learning the language at <a href="/Lua/Tutorials/Beginner/Learning_Lua" title="Lua/Tutorials/Beginner/Learning Lua">Learning Lua</a>.
</p><p>This tutorial assumes you have a Windows server set up correctly. See <a href="/Server/Getting_started/Windows_Server" title="Server/Getting started/Windows Server">Getting started on Windows</a>. Your server should look like this, if there are no scripts installed:
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:401px;"><a href="/File:Lua_Tutorials_Beginner_Server_Console_1.png" class="image"><img alt="Lua Tutorials Beginner Server Console 1.png" src="/images/2/28/Lua_Tutorials_Beginner_Server_Console_1.png" width="399" height="98" class="thumbimage"/></a> <div class="thumbcaption"></div></div></div></div>
<div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Setting_up_the_Lua_module"><span class="tocnumber">1</span> <span class="toctext">Setting up the Lua module</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Writing_the_script"><span class="tocnumber">2</span> <span class="toctext">Writing the script</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Using_the_JC2-MP_API"><span class="tocnumber">3</span> <span class="toctext">Using the JC2-MP API</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Using_events"><span class="tocnumber">4</span> <span class="toctext">Using events</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Vectors"><span class="tocnumber">5</span> <span class="toctext">Vectors</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Player_functions"><span class="tocnumber">6</span> <span class="toctext">Player functions</span></a></li>
<li class="toclevel-1 tocsection-7"><a href="#Putting_it_all_together"><span class="tocnumber">7</span> <span class="toctext">Putting it all together</span></a></li>
</ul>
</div>
<h2><span class="mw-headline" id="Setting_up_the_Lua_module">Setting up the Lua module</span></h2>
<p>First, we need to set up the directories on the server for a new Lua module. Add a <i>Skydive</i> directory to the server's <i>scripts</i> directory.
</p><p>Inside a module's directory, there are three directory names that are recognised:
</p>
<ul>
<li> server - Server-side scripts.
</li>
<li> client - Client-side scripts.
</li>
<li> shared - Loaded by both client and server.
</li>
</ul>
<p>As this is a purely server-sided script, we'll use <i>server</i>. When the module is loaded (either when the server starts or by manually loading it using the <a href="/Server/Console" title="Server/Console"> server console</a>), any files that end in ".lua" will be loaded.
</p><p>Inside <i>scripts/Skydive/server</i>, create <i>Skydive.lua</i> (The name doesn't matter).
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:495px;"><a href="/File:Lua_Tutorials_Beginner_Creating_Directories.png" class="image"><img alt="Lua Tutorials Beginner Creating Directories.png" src="/images/1/1f/Lua_Tutorials_Beginner_Creating_Directories.png" width="493" height="131" class="thumbimage"/></a> <div class="thumbcaption"></div></div></div></div>
<p><br/>
Try loading the <i>Skydive</i> module to make sure it works (type <i>load Skydive</i> into the server console). The server should say that it was loaded.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:400px;"><a href="/File:Lua_Tutorials_Beginner_Server_Console_2-2.png" class="image"><img alt="Lua Tutorials Beginner Server Console 2-2.png" src="/images/1/1d/Lua_Tutorials_Beginner_Server_Console_2-2.png" width="398" height="64" class="thumbimage"/></a> <div class="thumbcaption"></div></div></div></div>
<p><br/>
I'm sure there's some confusion about the difference between scripts and modules, so let me clarify:
</p>
<ul>
<li> <i>script</i> - A single lua file, such as "Skydive.lua". People may also use it to refer to an entire module, confusingly.
</li>
<li> <i>module</i> - All lua files located in one directory that the server loads at once, such as <i>scripts/Skydive/</i>. In our case, the module is called Skydive.
</li>
</ul>
<h2><span class="mw-headline" id="Writing_the_script">Writing the script</span></h2>
<p>Finally, we can begin the fun part. Open up Skydive.lua in your text editor of choice (<a rel="nofollow" class="external text" href="http://notepad-plus-plus.org/">Notepad++</a> is free and includes syntax highlighting). Using Lua's built-in <i>print</i> function, we'll make it output "Hello, Panau!" when the module is loaded:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="kw3">print</span><span class="br0">&#40;</span><span class="st0">&quot;Hello, Panau!&quot;</span><span class="br0">&#41;</span></pre></div></div>
<p>This will print to the server console, and also server.log.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:402px;"><a href="/File:Lua_Tutorials_Beginner_Server_Console_3.png" class="image"><img alt="Lua Tutorials Beginner Server Console 3.png" src="/images/a/a7/Lua_Tutorials_Beginner_Server_Console_3.png" width="400" height="87" class="thumbimage"/></a> <div class="thumbcaption"></div></div></div></div>
<h2><span class="mw-headline" id="Using_the_JC2-MP_API">Using the JC2-MP API</span></h2>
<p><a href="/Lua/Server" title="Lua/Server">Lua/Server</a> lists all of the classes specific to the server, and <a href="/Lua/Shared" title="Lua/Shared">Lua/Shared</a> lists classes available on both the server and client. They can be divided into a few categories:
</p>
<ul>
<li> Classes: These are classes that there can be instances of; functions are called like, <i>somePlayerInstance:GetName()</i>
<ul>
<li> <a href="/Lua/Server/Player" title="Lua/Server/Player">Player</a>, <a href="/Lua/Server/Vehicle" title="Lua/Server/Vehicle">Vehicle</a>, <a href="/Lua/Server/World" title="Lua/Server/World">World</a>, <a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Vector3</a>, <a href="/Lua/Shared/Timer" title="Lua/Shared/Timer">Timer</a>
</li>
</ul>
</li>
<li> Global classes: These have functions you can call like, <i>Class:Function()</i>
<ul>
<li> <a href="/Lua/Server/Server" title="Lua/Server/Server">Server</a>, <a href="/Lua/Server/Chat" title="Lua/Server/Chat">Chat</a>
</li>
</ul>
</li>
<li> Enums: These are, in a way, lists of values. Used like, <i>WeaponSlot.Primary</i>
<ul>
<li> <a href="/Lua/Server/CollisionGroup" title="Lua/Server/CollisionGroup">CollisionGroup</a>, <a href="/Lua/Shared/AnimationState" title="Lua/Shared/AnimationState">AnimationState</a>, <a href="/Lua/Shared/WeaponSlot" title="Lua/Shared/WeaponSlot">WeaponSlot</a>
</li>
</ul>
</li>
</ul>
<p><br/>
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="co1">-- Print the number of players in the server.</span>
<span class="kw3">print</span><span class="br0">&#40;</span>Server<span class="sy0">:</span>GetPlayerCount<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span></pre></div></div>
<h2><span class="mw-headline" id="Using_events">Using events</span></h2>
<p>Events are an extremely important feature of scripting in JC2-MP. They allow you to run code when something happens in the game, such as a player chatting, dying, or joining the server. You can find the full list of server events <a href="/Lua/Server#Events" title="Lua/Server">here</a>. Generally, 99% of script code will run inside of an event somewhere.
</p><p>To use events, it is very simple. You create a function, then you <i>subscribe</i> that function to an <i>event</i>. When JC2-MP fires the event for you, your function is called. Here is our Hello Panau program using the PlayerChat event:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="co1">-- Define the function.</span>
<span class="kw1">function</span> Hello<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="kw3">print</span><span class="br0">&#40;</span><span class="st0">&quot;Hello, Panau!&quot;</span><span class="br0">&#41;</span>
<span class="kw1">end</span>
<span class="co1">-- Subscribe our function to the PlayerChat event.</span>
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PlayerChat&quot;</span><span class="sy0">,</span> Hello<span class="br0">&#41;</span></pre></div></div>
<p>When a player sends any chat message, the server will print "Hello, Panau!". Now we're getting somewhere, but we want to know what their chat message was, right? Every event function is given an argument table; for the PlayerChat event, this table includes <i>text</i> and <i>player</i>:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="co1">-- You can name the argument table anything; 'args' is commonly used.</span>
<span class="kw1">function</span> OnPlayerChat<span class="br0">&#40;</span>args<span class="br0">&#41;</span>
	<span class="kw3">print</span><span class="br0">&#40;</span>args<span class="sy0">.</span>player<span class="sy0">,</span> args<span class="sy0">.</span>text<span class="br0">&#41;</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PlayerChat&quot;</span><span class="sy0">,</span> OnPlayerChat<span class="br0">&#41;</span></pre></div></div>
<p>The output in the server console should be something like, <i>[Skydive] Rico&#160;&#160;&#160;&#160;Some day, they'll write books about all of this.</i>
</p><p>You can unsubscribe from events using <i>Events:Unsubscribe</i>:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">eventSubscription <span class="sy0">=</span> Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PreTick&quot;</span><span class="sy0">,</span> <span class="kw1">function</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw1">end</span><span class="br0">&#41;</span>
Events<span class="sy0">:</span>Unsubscribe<span class="br0">&#40;</span>eventSubscription<span class="br0">&#41;</span></pre></div></div>
<p>One last thing about events: some events allow you to return true or false. In the case of the PlayerChat event, returning true lets the message through (which is the default), returning false blocks it. This will come in handy later when we don't want the "/skydive" message to show up in the chat.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="kw1">function</span> OnPlayerChat<span class="br0">&#40;</span>args<span class="br0">&#41;</span>
	<span class="kw1">if</span> args<span class="sy0">.</span>text <span class="sy0">==</span> <span class="st0">&quot;Block this message!&quot;</span> <span class="kw1">then</span>
		<span class="kw1">return</span> <span class="kw4">false</span>
	<span class="kw1">else</span>
		<span class="kw1">return</span> <span class="kw4">true</span>
	<span class="kw1">end</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PlayerChat&quot;</span><span class="sy0">,</span> OnPlayerChat<span class="br0">&#41;</span></pre></div></div>
<h2><span class="mw-headline" id="Vectors">Vectors</span></h2>
<p><a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Vectors</a> are also a critical part of scripting. Players and vehicles have 3D positions in the world, represented as Vectors. You can read more about Vectors <a href="/index.php?title=Lua/Tutorials/Vectors&amp;action=edit&amp;redlink=1" class="new" title="Lua/Tutorials/Vectors (page does not exist)">here</a>. In short, positive X is east, positive Y is up, and positive Z is south. Vector3(0, 200, 0) is the center of Panau at water level. Here are a few ways to use them:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="co1">-- Create a Vector3.</span>
<span class="kw1">local</span> vec <span class="sy0">=</span> Vector3<span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span> <span class="nu0">2</span><span class="sy0">,</span> <span class="nu0">3</span><span class="br0">&#41;</span>
<span class="co1">-- Add another vector3 to it.</span>
vec <span class="sy0">=</span> vec <span class="sy0">+</span> Vector3<span class="br0">&#40;</span><span class="nu0">4</span><span class="sy0">,</span> <span class="nu0">5</span><span class="sy0">,</span> <span class="nu0">6</span><span class="br0">&#41;</span>
<span class="co1">-- Scale it by half.</span>
vec <span class="sy0">=</span> vec <span class="sy0">*</span> <span class="nu0">0.5</span>
<span class="co1">-- Print it.</span>
<span class="kw3">print</span><span class="br0">&#40;</span>vec<span class="br0">&#41;</span> <span class="co1">-- [Skydive] 2.500000, 3.500000, 4.500000</span></pre></div></div>
<h2><span class="mw-headline" id="Player_functions">Player functions</span></h2>
<p><i>Player</i> is a class. If you have an instance of a Player, you can call functions on it. You can find a list of all the Player functions <a href="/Lua/Server/Player" title="Lua/Server/Player">here</a>. Note how you must use <i><b>:</b></i> to call it.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="kw1">function</span> OnPlayerChat<span class="br0">&#40;</span>args<span class="br0">&#41;</span>
	<span class="kw1">if</span> args<span class="sy0">.</span>text <span class="sy0">==</span> <span class="st0">&quot;Kill me!&quot;</span> <span class="kw1">then</span>
		args<span class="sy0">.</span>player<span class="sy0">:</span>SetHealth<span class="br0">&#40;</span><span class="nu0">0</span><span class="br0">&#41;</span>
	<span class="kw1">end</span>
&#160;
	<span class="kw1">return</span> <span class="kw4">true</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PlayerChat&quot;</span><span class="sy0">,</span> OnPlayerChat<span class="br0">&#41;</span></pre></div></div>
<h2><span class="mw-headline" id="Putting_it_all_together">Putting it all together</span></h2>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="kw1">function</span> OnPlayerChat<span class="br0">&#40;</span>args<span class="br0">&#41;</span>
	<span class="kw1">if</span> args<span class="sy0">.</span>text <span class="sy0">==</span> <span class="st0">&quot;/skydive&quot;</span> <span class="kw1">then</span>
		<span class="kw1">local</span> currentPosition <span class="sy0">=</span> args<span class="sy0">.</span>player<span class="sy0">:</span>GetPosition<span class="br0">&#40;</span><span class="br0">&#41;</span>
		<span class="kw1">local</span> newPosition <span class="sy0">=</span> currentPosition <span class="sy0">+</span> Vector3<span class="br0">&#40;</span><span class="nu0">0</span><span class="sy0">,</span> <span class="nu0">3000</span><span class="sy0">,</span> <span class="nu0">0</span><span class="br0">&#41;</span>
		args<span class="sy0">.</span>player<span class="sy0">:</span>SetPosition<span class="br0">&#40;</span>newPosition<span class="br0">&#41;</span>
&#160;
		<span class="kw1">return</span> <span class="kw4">false</span>
	<span class="kw1">end</span>
&#160;
	<span class="kw1">return</span> <span class="kw4">true</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PlayerChat&quot;</span><span class="sy0">,</span> OnPlayerChat<span class="br0">&#41;</span></pre></div></div>
<p>And that's all there is to it. I hope you've gained a solid grasp of how JC2-MP scripting works.
</p>
<div class="center"><div class="thumb tnone"><div class="thumbinner" style="width:565px;"><a href="/File:Lua_Tutorials_Beginner_Skydive.jpg" class="image"><img alt="Lua Tutorials Beginner Skydive.jpg" src="/images/6/6a/Lua_Tutorials_Beginner_Skydive.jpg" width="563" height="250" class="thumbimage"/></a> <div class="thumbcaption"></div></div></div></div>
 
 
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Tutorials/Beginner/Beginner&amp;oldid=24764">http://wiki.jc-mp.com/index.php?title=Lua/Tutorials/Beginner/Beginner&amp;oldid=24764</a>"</div>
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
<li id="f-lastmod"> This page was last modified on 28 December 2013, at 12:26.</li>
<li id="f-viewcount">This page has been accessed 7,360 times.</li>
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
 </body></html>