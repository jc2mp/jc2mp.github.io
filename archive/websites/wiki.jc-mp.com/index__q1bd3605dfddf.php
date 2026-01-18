<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8"/><title>View source for Lua/Tutorials/Beginner/Beginner - JC2-MP Documentation</title>
<meta name="generator" content="MediaWiki 1.22.2"/>
<meta name="robots" content="noindex,nofollow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok8v=02fcfa4f56/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"3235b730483bce79b614eefb4240e07469d16b7a-1392946775-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok8v=221574e73d/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
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
<style>a:lang(ar),a:lang(ckb),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}</style>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Tutorials/Beginner/Beginner","wgTitle":"Lua/Tutorials/Beginner/Beginner","wgCurRevisionId":24764,"wgRevisionId":0,"wgArticleId":2833,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"edit","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Tutorials/Beginner/Beginner","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function(){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"disablesuggest":0,"editfont":"default","editondblclick":0,"editsection":1,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":0,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"justify":0,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nocache":0,"noconvertlink":0,"norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rememberpassword":0,"rows":25,"searchlimit":20,"showhiddencats":0,"shownumberswatching":1,"showtoc":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"vector-simplesearch":1,"watchcreations":0,"watchdefault":0,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":
0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function(){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:d6cee38fd88e62c412a64f3888b013b1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Tutorials_Beginner_Beginner skin-cavendish action-edit">
<div id="internal"></div>
 
<div id="globalWrapper" class="edit">
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
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FTutorials%2FBeginner%2FBeginner&amp;returntoquery=action%3Dedit">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">View source for Lua/Tutorials/Beginner/Beginner - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Tutorials/Beginner/Beginner" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Tutorials/Beginner/Beginner&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource" class="selected"><a href="/index.php?title=Lua/Tutorials/Beginner/Beginner&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
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
<h1 id="firstHeading" class="firstHeading">View source for Lua/Tutorials/Beginner/Beginner</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub">← <a href="/Lua/Tutorials/Beginner/Beginner" title="Lua/Tutorials/Beginner/Beginner">Lua/Tutorials/Beginner/Beginner</a></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text"><p>You do not have permission to edit this page, for the following reason:
</p>
<div class="permissions-errors">
<p>The action you have requested is limited to users in the group: <a href="/index.php?title=Project:Users&amp;action=edit&amp;redlink=1" class="new" title="Project:Users (page does not exist)">Users</a>.
</p>
</div>
<hr/>
<p>You can view and copy the source of this page:
</p><textarea readonly="" accesskey="," id="wpTextbox1" cols="80" rows="25" style="" lang="en" dir="ltr" name="wpTextbox1">Welcome to the beginner's JC2-MP Lua tutorial. This will explain the very basics of scripting in JC2-MP. We will be making a simple script that teleports you 3km into the sky when you type "/skydive" into the chat.

This tutorial assumes you have an understanding of a few basic features of Lua. I strongly encourage you to learn these features for this tutorial:
* [http://lua-users.org/wiki/LuaTypesTutorial Types]
* [http://lua-users.org/wiki/ControlStructureTutorial Control structures]
** This tutorial only uses the 'if' statement.
* [http://lua-users.org/wiki/TablesTutorial Tables]
** Tables can get complex, but this tutorial uses a simple case.
* [http://lua-users.org/wiki/FunctionsTutorial Functions]
* [http://lua-users.org/wiki/ScopeTutorial Scope]

You can find more resources for learning the language at [[Lua/Tutorials/Beginner/Learning Lua|Learning Lua]].

This tutorial assumes you have a Windows server set up correctly. See [[Server/Getting started/Windows Server|Getting started on Windows]]. Your server should look like this, if there are no scripts installed:

[[File:Lua Tutorials Beginner Server_Console 1.png|frame|center]]

==Setting up the Lua module==

First, we need to set up the directories on the server for a new Lua module. Add a ''Skydive'' directory to the server's ''scripts'' directory.

Inside a module's directory, there are three directory names that are recognised:
* server - Server-side scripts.
* client - Client-side scripts.
* shared - Loaded by both client and server.

As this is a purely server-sided script, we'll use ''server''. When the module is loaded (either when the server starts or by manually loading it using the [[Server/Console | server console]]), any files that end in ".lua" will be loaded.

Inside ''scripts/Skydive/server'', create ''Skydive.lua'' (The name doesn't matter).

[[File:Lua Tutorials Beginner Creating_Directories.png|frame|center]]


Try loading the ''Skydive'' module to make sure it works (type ''load Skydive'' into the server console). The server should say that it was loaded.

[[File:Lua Tutorials Beginner Server_Console 2-2.png|frame|center]]


I'm sure there's some confusion about the difference between scripts and modules, so let me clarify:
* ''script'' - A single lua file, such as "Skydive.lua". People may also use it to refer to an entire module, confusingly.
* ''module'' - All lua files located in one directory that the server loads at once, such as ''scripts/Skydive/''. In our case, the module is called Skydive.

==Writing the script==

Finally, we can begin the fun part. Open up Skydive.lua in your text editor of choice ([http://notepad-plus-plus.org/ Notepad++] is free and includes syntax highlighting). Using Lua's built-in ''print'' function, we'll make it output "Hello, Panau!" when the module is loaded:

&lt;syntaxhighlight>
print("Hello, Panau!")
&lt;/syntaxhighlight>

This will print to the server console, and also server.log.

[[File:Lua Tutorials Beginner Server_Console 3.png|frame|center]]

==Using the JC2-MP API==

[[Lua/Server]] lists all of the classes specific to the server, and [[Lua/Shared]] lists classes available on both the server and client. They can be divided into a few categories:
* Classes: These are classes that there can be instances of; functions are called like, ''somePlayerInstance:GetName()''
** [[Lua/Server/Player|Player]], [[Lua/Server/Vehicle|Vehicle]], [[Lua/Server/World|World]], [[Lua/Shared/Vector3|Vector3]], [[Lua/Shared/Timer|Timer]]
* Global classes: These have functions you can call like, ''Class:Function()''
** [[Lua/Server/Server|Server]], [[Lua/Server/Chat|Chat]]
* Enums: These are, in a way, lists of values. Used like, ''WeaponSlot.Primary''
** [[Lua/Server/CollisionGroup|CollisionGroup]], [[Lua/Shared/AnimationState|AnimationState]], [[Lua/Shared/WeaponSlot|WeaponSlot]]


&lt;syntaxhighlight>
-- Print the number of players in the server.
print(Server:GetPlayerCount())
&lt;/syntaxhighlight>

==Using events==

Events are an extremely important feature of scripting in JC2-MP. They allow you to run code when something happens in the game, such as a player chatting, dying, or joining the server. You can find the full list of server events [[Lua/Server#Events|here]]. Generally, 99% of script code will run inside of an event somewhere.

To use events, it is very simple. You create a function, then you ''subscribe'' that function to an ''event''. When JC2-MP fires the event for you, your function is called. Here is our Hello Panau program using the PlayerChat event:

&lt;syntaxhighlight>
-- Define the function.
function Hello()
	print("Hello, Panau!")
end
-- Subscribe our function to the PlayerChat event.
Events:Subscribe("PlayerChat", Hello)
&lt;/syntaxhighlight>

When a player sends any chat message, the server will print "Hello, Panau!". Now we're getting somewhere, but we want to know what their chat message was, right? Every event function is given an argument table; for the PlayerChat event, this table includes ''text'' and ''player'':

&lt;syntaxhighlight>
-- You can name the argument table anything; 'args' is commonly used.
function OnPlayerChat(args)
	print(args.player, args.text)
end

Events:Subscribe("PlayerChat", OnPlayerChat)
&lt;/syntaxhighlight>

The output in the server console should be something like, ''[Skydive] Rico&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Some day, they'll write books about all of this.''

You can unsubscribe from events using ''Events:Unsubscribe'':

&lt;syntaxhighlight>
eventSubscription = Events:Subscribe("PreTick", function() end)
Events:Unsubscribe(eventSubscription)
&lt;/syntaxhighlight>

One last thing about events: some events allow you to return true or false. In the case of the PlayerChat event, returning true lets the message through (which is the default), returning false blocks it. This will come in handy later when we don't want the "/skydive" message to show up in the chat.

&lt;syntaxhighlight>
function OnPlayerChat(args)
	if args.text == "Block this message!" then
		return false
	else
		return true
	end
end

Events:Subscribe("PlayerChat", OnPlayerChat)
&lt;/syntaxhighlight>

==Vectors==

[[Lua/Shared/Vector3|Vectors]] are also a critical part of scripting. Players and vehicles have 3D positions in the world, represented as Vectors. You can read more about Vectors [[Lua/Tutorials/Vectors|here]]. In short, positive X is east, positive Y is up, and positive Z is south. Vector3(0, 200, 0) is the center of Panau at water level. Here are a few ways to use them:

&lt;syntaxhighlight>
-- Create a Vector3.
local vec = Vector3(1, 2, 3)
-- Add another vector3 to it.
vec = vec + Vector3(4, 5, 6)
-- Scale it by half.
vec = vec * 0.5
-- Print it.
print(vec) -- [Skydive] 2.500000, 3.500000, 4.500000
&lt;/syntaxhighlight>

==Player functions==

''Player'' is a class. If you have an instance of a Player, you can call functions on it. You can find a list of all the Player functions [[Lua/Server/Player|here]]. Note how you must use ''''':''''' to call it.

&lt;syntaxhighlight>
function OnPlayerChat(args)
	if args.text == "Kill me!" then
		args.player:SetHealth(0)
	end
	
	return true
end

Events:Subscribe("PlayerChat", OnPlayerChat)
&lt;/syntaxhighlight>

==Putting it all together==

&lt;syntaxhighlight>
function OnPlayerChat(args)
	if args.text == "/skydive" then
		local currentPosition = args.player:GetPosition()
		local newPosition = currentPosition + Vector3(0, 3000, 0)
		args.player:SetPosition(newPosition)
		
		return false
	end
	
	return true
end

Events:Subscribe("PlayerChat", OnPlayerChat)
&lt;/syntaxhighlight>

And that's all there is to it. I hope you've gained a solid grasp of how JC2-MP scripting works.

[[File:Lua Tutorials Beginner Skydive.jpg|frame|center]]
</textarea><div class="templatesUsed"></div><p id="mw-returnto">Return to <a href="/Lua/Tutorials/Beginner/Beginner" title="Lua/Tutorials/Beginner/Beginner">Lua/Tutorials/Beginner/Beginner</a>.</p>
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/Lua/Tutorials/Beginner/Beginner">http://wiki.jc-mp.com/Lua/Tutorials/Beginner/Beginner</a>"</div>
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
 </body></html>