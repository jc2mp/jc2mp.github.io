<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8"/><title>View source for Lua/Tutorials/Beginner/Your first gamemode - JC2-MP Documentation</title>
<meta name="generator" content="MediaWiki 1.22.2"/>
<meta name="robots" content="noindex,nofollow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok8v=02fcfa4f56/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"1a2842caf5a441fbee95d25679abdda455ec95b0-1392945946-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok8v=221574e73d/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Tutorials/Beginner/Your_first_gamemode","wgTitle":"Lua/Tutorials/Beginner/Your first gamemode","wgCurRevisionId":24769,"wgRevisionId":0,"wgArticleId":2841,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"edit","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Tutorials/Beginner/Your_first_gamemode","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function(){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"disablesuggest":0,"editfont":"default","editondblclick":0,"editsection":1,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":0,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"justify":0,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nocache":0,"noconvertlink":0,"norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rememberpassword":0,"rows":25,"searchlimit":20,"showhiddencats":0,"shownumberswatching":1,"showtoc":1,"showtoolbar":1,"skin":"cavendish","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"vector-simplesearch":1,"watchcreations":0,"watchdefault":0,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":
0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,"useeditwarning":1,"prefershttps":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function(){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: wiki:resourceloader:filter:minify-js:7:d6cee38fd88e62c412a64f3888b013b1 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Tutorials_Beginner_Your_first_gamemode skin-cavendish action-edit">
<div id="internal"></div>
 
<div id="globalWrapper" class="edit">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FTutorials%2FBeginner%2FYour+first+gamemode&amp;returntoquery=action%3Dedit">
Click here to login with your JC2-MP account</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">View source for Lua/Tutorials/Beginner/Your first gamemode - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Tutorials/Beginner/Your_first_gamemode" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Tutorials/Beginner/Your_first_gamemode&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource" class="selected"><a href="/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Tutorials/Beginner/Your_first_gamemode&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Tutorials/Beginner/Your_first_gamemode" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Tutorials/Beginner/Your_first_gamemode" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
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
<h1 id="firstHeading" class="firstHeading">View source for Lua/Tutorials/Beginner/Your first gamemode</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub">← <a href="/Lua/Tutorials/Beginner/Your_first_gamemode" title="Lua/Tutorials/Beginner/Your first gamemode">Lua/Tutorials/Beginner/Your first gamemode</a></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text"><p>You do not have permission to edit this page, for the following reason:
</p>
<div class="permissions-errors">
<p>The action you have requested is limited to users in the group: <a href="/index.php?title=Project:Users&amp;action=edit&amp;redlink=1" class="new" title="Project:Users (page does not exist)">Users</a>.
</p>
</div>
<hr/>
<p>You can view and copy the source of this page:
</p><textarea readonly="" accesskey="," id="wpTextbox1" cols="80" rows="25" style="" lang="en" dir="ltr" name="wpTextbox1">For this tutorial, we will be creating an extremely simple gamemode called Last Rico Standing. When a game starts, players will spawn inside the dome and be given machine guns. When they die, they will spawn above the dome without weapons. When there is only one person left, they are declared the winner and the game restarts.

It is assumed you have read the [[Lua/Tutorials/Beginner/Beginner|Beginner's Tutorial]].

==Setup==

As before, we will create the lua file in the required directory structure: ''scripts/MyFirstGamemode/server/LastRicoStanding.lua''

==Spawn points==

First, we need some spawn points. It will be useful to have a way to print our position. This can be done in a few ways, shown below. Either way, you can open server.log to copy their output.

====Chat command====

&lt;syntaxhighlight>
function PlayerChat(args)
	if args.text == "/pos" then
		print(args.player:GetPosition())
		return false
	end
	
	return true
end

Events:Subscribe("PlayerChat", PlayerChat)
&lt;/syntaxhighlight>

====Server console====

If you want to play around with the server console, type this: (assuming the module is loaded and you're the only person in the server)

&lt;syntaxhighlight>
lua MyFirstGamemode print(Player.GetById(0):GetPosition())
&lt;/syntaxhighlight>

==Spawning everyone on module load==

For our first test, we will make it so when the module is loaded everyone in the server is teleported to a random spawn. You can test it by reloading the module from the console.

&lt;syntaxhighlight>
spawns = {
	Vector3(14197.319336, 458.649567, 14382.654297),
	Vector3(14053.989258, 451.647766, 14313.827148),
	Vector3(14192.114258, 438.649567, 14359.311523),
	Vector3(14109.357422, 423.588654, 14350.410156),
	Vector3(14162.669922, 434.653503, 14290.238281)
}

function StartGame()
	for player in Server:GetPlayers() do
		local randomIndex = math.random(1, #spawns)
		local spawnPosition = spawns[randomIndex]
		player:SetPosition(spawnPosition)
	end
end

Events:Subscribe("ModuleLoad", StartGame)
&lt;/syntaxhighlight>

''spawns'' is a table used like an array. You can also declare it as an empty table, like ''spawns = {}'', then use ''table.insert(spawns, Vector3(1, 2, 3))'', but either syntax works. You can get the third spawn point by doing ''local position = spawns[3]''. Note that arrays in Lua start at 1, not 0 like most other languages.

You can use ''Server:GetPlayers()'' to iterate through every player in the server. It doesn't return a table as you might expect, it returns a fancy iterator function. (You don't need to know that, you can simply use it like above.)

==Adding functionality==

This script will start a game when you reload the module from the console. Players spawn with machine guns and full health. If someone respawns while a game is in progress, they are teleported to the top of the dome with no weapons. The game won't end, however; we'll fix that later.

&lt;syntaxhighlight>
spawns = {
	Vector3(14197.319336, 458.649567, 14382.654297),
	Vector3(14053.989258, 451.647766, 14313.827148),
	Vector3(14192.114258, 438.649567, 14359.311523),
	Vector3(14109.357422, 423.588654, 14350.410156),
	Vector3(14162.669922, 434.653503, 14290.238281)
}
deathSpawn = Vector3(14130.737305, 528.022278, 14341.015625)
textColor = Color(115, 170, 220)

function StartGame()
	local message = "Starting game with "..Server:GetPlayerCount().." players"
	Chat:Broadcast("[Last Rico Standing] "..message, textColor)
	
	for player in Server:GetPlayers() do
		local randomIndex = math.random(1, #spawns)
		local spawnPosition = spawns[randomIndex]
		player:SetPosition(spawnPosition)
		-- Give them a machine gun in the primary slot (2).
		player:ClearInventory()
		local weapon = Weapon(28)
		player:GiveWeapon(2, weapon)
		-- Reset their health to 100%, just in case.
		player:SetHealth(1)
	end
end

function PlayerSpawn(args)
	-- Remove all of their weapons.
	args.player:ClearInventory()
	-- Teleport them to the top of the dome.
	args.player:SetPosition(deathSpawn)
	-- Send them a chat message.
	local message = "[Last Rico Standing] A game in progress, please wait"
	args.player:SendChatMessage(message, textColor)
	-- Return false to override the default spawn position set in config.lua.
	return false
end

Events:Subscribe("ModuleLoad", StartGame)
Events:Subscribe("PlayerSpawn", PlayerSpawn)
&lt;/syntaxhighlight>

==Tracking players and declaring a winner==

In order to declare a winner, we need to store which players are currently in the game and, when someone dies or quits, check if there's only one left. This is done in our PlayerDeathOrQuit function, called by both the PlayerDeath and PlayerQuit events. Then the game restarts.

&lt;syntaxhighlight>
spawns = {
	Vector3(14197.319336, 458.649567, 14382.654297),
	Vector3(14053.989258, 451.647766, 14313.827148),
	Vector3(14192.114258, 438.649567, 14359.311523),
	Vector3(14109.357422, 423.588654, 14350.410156),
	Vector3(14162.669922, 434.653503, 14290.238281)
}
deathSpawn = Vector3(14130.737305, 528.022278, 14341.015625)
textColor = Color(115, 170, 220)
players = {}

function StartGame()
	local message = "Starting game with "..Server:GetPlayerCount().." players"
	Chat:Broadcast("[Last Rico Standing] "..message, textColor)
	
	for player in Server:GetPlayers() do
		table.insert(players, player)
		
		local randomIndex = math.random(1, #spawns)
		local spawnPosition = spawns[randomIndex]
		player:SetPosition(spawnPosition)
		-- Give them a machine gun in the primary slot (2).
		player:ClearInventory()
		local weapon = Weapon(28)
		player:GiveWeapon(2, weapon)
		-- Reset their health to 100%, just in case.
		player:SetHealth(1)
	end
end

function PlayerSpawn(args)
	-- If the current game doesn't have enough players and the server has enough
	-- to create a game, do so.
	if #players &lt; 2 and Server:GetPlayerCount() >= 2 then
		StartGame()
	-- Otherwise, a game is currently running fine and we either joined the server
	-- or died and respawned.
	else
		-- Remove all of their weapons.
		args.player:ClearInventory()
		-- Teleport them to the top of the dome.
		args.player:SetPosition(deathSpawn)
		-- Send them a chat message.
		local message = "[Last Rico Standing] A game is in progress, please wait."
		args.player:SendChatMessage(message, textColor)
	end
	
	-- Return false to override the default spawn position set in config.lua.
	return false
end

function PlayerDeathOrQuit(args)
	-- If they're in the players table, remove them.
	for index, player in ipairs(players) do
		if player == args.player then
			table.remove(players, index)
			break
		end
	end
	-- If there is only one player left, declare them the winner.
	if #players == 1 then
		local message =
			"[Last Rico Standing] "..players[1]:GetName().." has won the game!"
		Chat:Broadcast(message , textColor)
	end
end

Events:Subscribe("ModuleLoad", StartGame)
Events:Subscribe("PlayerSpawn", PlayerSpawn)
Events:Subscribe("PlayerDeath", PlayerDeathOrQuit)
Events:Subscribe("PlayerQuit", PlayerDeathOrQuit)
&lt;/syntaxhighlight>

==Conclusion==

Get someone else to test with you and have fun with it. Add a score system to track who has won the most. Create a table of [[Lua/Shared/Weapon|weapons]] and assign people random ones when a game starts. The possibilities are endless.

As you may have noticed, this is an entirely server-sided script. Adding a client-side component would be extremely powerful; we could add a player counter, scoreboard text, replace the chat messages with text on screen, or add a spectator camera. But client-side scripts will be part of another tutorial.
</textarea><div class="templatesUsed"></div><p id="mw-returnto">Return to <a href="/Lua/Tutorials/Beginner/Your_first_gamemode" title="Lua/Tutorials/Beginner/Your first gamemode">Lua/Tutorials/Beginner/Your first gamemode</a>.</p>
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/Lua/Tutorials/Beginner/Your_first_gamemode">http://wiki.jc-mp.com/Lua/Tutorials/Beginner/Your_first_gamemode</a>"</div>
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