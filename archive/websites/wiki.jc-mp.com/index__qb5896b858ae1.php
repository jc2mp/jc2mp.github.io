<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<title>Lua/Tutorials/Intermediate/Creating a speedometer - JC2-MP Documentation</title>
<meta charset="UTF-8"/>
<meta name="generator" content="MediaWiki 1.21.3"/>
<meta name="robots" content="noindex,follow"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1387493058,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/acv=964071af181a077355d1f55fe9f452a3/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"b36b15364adf31bc890ac81bf5b83f8b86323096-1387596649-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/acv=5e636c62d6cb8f43b6b5209b9924b437/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
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
<style>a:lang(ar),a:lang(ckb),a:lang(fa),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}</style>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;printable=1&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Tutorials/Intermediate/Creating_a_speedometer","wgTitle":"Lua/Tutorials/Intermediate/Creating a speedometer","wgCurRevisionId":24564,"wgArticleId":3741,"wgIsArticle":true,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Tutorials/Intermediate/Creating_a_speedometer","wgRestrictionEdit":[],"wgRestrictionMove":[]});
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
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Tutorials_Intermediate_Creating_a_speedometer skin-cavendish action-view">
<div id="internal"></div>
 
<div id="globalWrapper" class="view">
<div id="p-personal" class="portlet">
<h5>Personal tools</h5>
<div class="pBody">
<ul>
<li id="pt-login" class="top-nav-element">
<span class="top-nav-left">&nbsp;</span>
<a class="top-nav-mid " href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FTutorials%2FIntermediate%2FCreating+a+speedometer&amp;returntoquery=printable%3Dyes">
Log in</a>
<span class="top-nav-right">&nbsp;</span></li>
</ul>
</div>
</div>
<div id="header">
<a name="top" id="contentTop"></a>
<h6>
<a href="/Main_Page" title="Main Page">Lua/Tutorials/Intermediate/Creating a speedometer - JC2-MP Documentation</a></h6>
<div id="p-cactions" class="portlet"><ul>
<li id="ca-nstab-main" class="selected"><a href="/Lua/Tutorials/Intermediate/Creating_a_speedometer" title="View the content page">Page</a></li>
<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Tutorials/Intermediate/Creating_a_speedometer&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
<li id="ca-viewsource"><a href="/index.php?title=Lua/Tutorials/Intermediate/Creating_a_speedometer&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
<li id="ca-history"><a href="/index.php?title=Lua/Tutorials/Intermediate/Creating_a_speedometer&amp;action=history" title="Past revisions of this page">History</a></li> </ul></div>
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
<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Tutorials/Intermediate/Creating_a_speedometer" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Tutorials/Intermediate/Creating_a_speedometer" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-permalink"><a href="/index.php?title=Lua/Tutorials/Intermediate/Creating_a_speedometer&amp;oldid=24564" title="Permanent link to this revision of the page">Permanent link</a></li>
<li id="t-info"><a href="/index.php?title=Lua/Tutorials/Intermediate/Creating_a_speedometer&amp;action=info">Page information</a></li>
</ul>
</div>
</div>
</div>
</div>
</div> 
<div id="column-content">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Lua/Tutorials/Intermediate/Creating a speedometer</h1>
<div id="bodyContent">
<h3 id="siteSub">From JC2-MP Documentation</h3>
<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a>&lrm; | <a href="/Lua/Tutorials" title="Lua/Tutorials">Tutorials</a></span></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p>One of the really simple and cool things you can do on the client is draw a speedometer. In this first test, we'll print the raw velocity vector to the screen. <a href="/Lua/Client/Vehicle/Functions/GetLinearVelocity" title="Lua/Client/Vehicle/Functions/GetLinearVelocity">Vehicle:GetLinearVelocity</a> returns a <a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Vector3</a>, and we want to turn it into a string, so we can use the <i>tostring</i> function.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">DrawSpeedometer <span class="sy0">=</span> <span class="kw1">function</span><span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="kw1">local</span> vehicle <span class="sy0">=</span> LocalPlayer<span class="sy0">:</span>GetVehicle<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="co1">-- If vehicle is nil, we're not in a vehicle.</span>
	<span class="kw1">if</span> vehicle <span class="kw1">then</span>
		<span class="kw1">local</span> velocity <span class="sy0">=</span> vehicle<span class="sy0">:</span>GetLinearVelocity<span class="br0">&#40;</span><span class="br0">&#41;</span>
		Render<span class="sy0">:</span>DrawText<span class="br0">&#40;</span>Render<span class="sy0">.</span>Size <span class="sy0">/</span> <span class="nu0">2</span><span class="sy0">,</span> <span class="kw3">tostring</span><span class="br0">&#40;</span>velocity<span class="br0">&#41;</span><span class="sy0">,</span> Color<span class="br0">&#40;</span><span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">255</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
	<span class="kw1">end</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;Render&quot;</span><span class="sy0">,</span> DrawSpeedometer<span class="br0">&#41;</span></pre></div></div>
<p><a href="/File:Lua_Tutorials_Speedometer_Image1.jpeg" class="image"><img alt="Lua Tutorials Speedometer Image1.jpeg" src="/images/3/31/Lua_Tutorials_Speedometer_Image1.jpeg" width="800" height="404"/></a>
</p><p>The primary problem with this is that it prints our velocity relative to the world; X is always east, but we want it to be relative to our vehicle. We need to rotate the velocity vector by the vehicle's (inverse) angle:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="kw1">local</span> velocity <span class="sy0">=</span> <span class="sy0">-</span>vehicle<span class="sy0">:</span>GetAngle<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">*</span> vehicle<span class="sy0">:</span>GetLinearVelocity<span class="br0">&#40;</span><span class="br0">&#41;</span>
Render<span class="sy0">:</span>DrawText<span class="br0">&#40;</span>Render<span class="sy0">.</span>Size <span class="sy0">/</span> <span class="nu0">2</span><span class="sy0">,</span> <span class="kw3">tostring</span><span class="br0">&#40;</span>velocity<span class="br0">&#41;</span><span class="sy0">,</span> Color<span class="br0">&#40;</span><span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">255</span><span class="br0">&#41;</span><span class="br0">&#41;</span></pre></div></div>
<p><a href="/File:Lua_Tutorials_Speedometer_Image2.jpeg" class="image"><img alt="Lua Tutorials Speedometer Image2.jpeg" src="/images/f/fe/Lua_Tutorials_Speedometer_Image2.jpeg" width="800" height="404"/></a>
</p><p>If you play around with this change, you will notice that Z matches your negative forward velocity. This is what we want:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="kw1">local</span> velocity <span class="sy0">=</span> <span class="sy0">-</span>vehicle<span class="sy0">:</span>GetAngle<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">*</span> vehicle<span class="sy0">:</span>GetLinearVelocity<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="kw1">local</span> forwardVelocity <span class="sy0">=</span> <span class="sy0">-</span>velocity<span class="sy0">.</span>z
Render<span class="sy0">:</span>DrawText<span class="br0">&#40;</span>Render<span class="sy0">.</span>Size <span class="sy0">/</span> <span class="nu0">2</span><span class="sy0">,</span> <span class="kw3">tostring</span><span class="br0">&#40;</span>forwardVelocity<span class="br0">&#41;</span><span class="sy0">,</span> Color<span class="br0">&#40;</span><span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">255</span><span class="br0">&#41;</span><span class="br0">&#41;</span></pre></div></div>
<p><a href="/File:Lua_Tutorials_Speedometer_Image3.jpeg" class="image"><img alt="Lua Tutorials Speedometer Image3.jpeg" src="/images/5/54/Lua_Tutorials_Speedometer_Image3.jpeg" width="800" height="404"/></a>
</p><p>We can use <i>string.format</i> to make it look better:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="kw1">local</span> velocity <span class="sy0">=</span> <span class="sy0">-</span>vehicle<span class="sy0">:</span>GetAngle<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">*</span> vehicle<span class="sy0">:</span>GetLinearVelocity<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="kw1">local</span> forwardVelocity <span class="sy0">=</span> <span class="sy0">-</span>velocity<span class="sy0">.</span>z
<span class="kw1">local</span> speedString <span class="sy0">=</span> <span class="kw3">string.format</span><span class="br0">&#40;</span><span class="st0">&quot;%i&quot;</span><span class="sy0">,</span> forwardVelocity <span class="sy0">*</span> <span class="nu0">3.6</span><span class="br0">&#41;</span><span class="sy0">..</span><span class="st0">&quot; km/h&quot;</span>
Render<span class="sy0">:</span>DrawText<span class="br0">&#40;</span>Render<span class="sy0">.</span>Size <span class="sy0">/</span> <span class="nu0">2</span><span class="sy0">,</span> speedString<span class="sy0">,</span> Color<span class="br0">&#40;</span><span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">255</span><span class="br0">&#41;</span><span class="br0">&#41;</span></pre></div></div>
<p><a href="/File:Lua_Tutorials_Speedometer_Image4.jpeg" class="image"><img alt="Lua Tutorials Speedometer Image4.jpeg" src="/images/d/d2/Lua_Tutorials_Speedometer_Image4.jpeg" width="800" height="404"/></a>
</p><p>We are going to position the text at the bottom and make it larger. This is the final product:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">DrawSpeedometer <span class="sy0">=</span> <span class="kw1">function</span><span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="kw1">local</span> vehicle <span class="sy0">=</span> LocalPlayer<span class="sy0">:</span>GetVehicle<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="kw1">if</span> vehicle <span class="kw1">then</span>
		<span class="kw1">local</span> velocity <span class="sy0">=</span> <span class="sy0">-</span>vehicle<span class="sy0">:</span>GetAngle<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">*</span> vehicle<span class="sy0">:</span>GetLinearVelocity<span class="br0">&#40;</span><span class="br0">&#41;</span>
		<span class="kw1">local</span> forwardVelocity <span class="sy0">=</span> <span class="sy0">-</span>velocity<span class="sy0">.</span>z
		<span class="kw1">local</span> speedString <span class="sy0">=</span> <span class="kw3">string.format</span><span class="br0">&#40;</span><span class="st0">&quot;%i&quot;</span><span class="sy0">,</span> forwardVelocity <span class="sy0">*</span> <span class="nu0">3.6</span><span class="br0">&#41;</span><span class="sy0">..</span><span class="st0">&quot; km/h&quot;</span>
&#160;
		<span class="co1">-- Set position to the middle bottom of the screen.</span>
		<span class="kw1">local</span> position <span class="sy0">=</span> Vector2<span class="br0">&#40;</span>Render<span class="sy0">.</span>Width<span class="sy0">/</span><span class="nu0">2</span><span class="sy0">,</span> Render<span class="sy0">.</span>Height<span class="br0">&#41;</span>
		<span class="co1">-- Move up by the text height.</span>
		position<span class="sy0">.</span>y <span class="sy0">=</span> position<span class="sy0">.</span>y <span class="sy0">-</span> Render<span class="sy0">:</span>GetTextHeight<span class="br0">&#40;</span>speedString<span class="sy0">,</span> TextSize<span class="sy0">.</span>Large<span class="br0">&#41;</span>
		<span class="co1">-- Center the text.</span>
		position<span class="sy0">.</span>x <span class="sy0">=</span> position<span class="sy0">.</span>x <span class="sy0">-</span> Render<span class="sy0">:</span>GetTextWidth<span class="br0">&#40;</span>speedString<span class="sy0">,</span> TextSize<span class="sy0">.</span>Large<span class="br0">&#41;</span> <span class="sy0">/</span> <span class="nu0">2</span>
&#160;
		Render<span class="sy0">:</span>DrawText<span class="br0">&#40;</span>position<span class="sy0">,</span> speedString<span class="sy0">,</span> Color<span class="br0">&#40;</span><span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">255</span><span class="sy0">,</span> <span class="nu0">255</span><span class="br0">&#41;</span><span class="sy0">,</span> TextSize<span class="sy0">.</span>Large<span class="br0">&#41;</span>
	<span class="kw1">end</span>
<span class="kw1">end</span>
&#160;
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;Render&quot;</span><span class="sy0">,</span> DrawSpeedometer<span class="br0">&#41;</span></pre></div></div>
<p><a href="/File:Lua_Tutorials_Speedometer_Image5.jpeg" class="image"><img alt="Lua Tutorials Speedometer Image5.jpeg" src="/images/5/50/Lua_Tutorials_Speedometer_Image5.jpeg" width="800" height="404"/></a>
</p>
 
 
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Tutorials/Intermediate/Creating_a_speedometer&amp;oldid=24564">http://wiki.jc-mp.com/index.php?title=Lua/Tutorials/Intermediate/Creating_a_speedometer&amp;oldid=24564</a>"</div>
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
<li id="f-lastmod"> This page was last modified on 16 December 2013, at 21:03.</li>
<li id="f-viewcount">This page has been accessed 869 times.</li>
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
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;printable=1&amp;skin=cavendish&amp;*"></script>
 </body></html>