<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8" />
<title>Lua/Tutorials/Class basics - JC2-MP Documentation</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta name="generator" content="MediaWiki 1.23.7" />
<meta name="robots" content="noindex,follow" />
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"18e551c24bf0de1f962f19ce340d4682",petok:"d37ed90331c10af4277491c688584defc644a41d-1422347245-1800",zone:"jc-mp.com",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=919620257c/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)" />
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.jc-mp.com/api.php?action=rsd" />
<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html" />
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=ext.geshi.local%7Cmediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.ui.button&amp;only=styles&amp;printable=1&amp;skin=cavendish&amp;*" />
<link rel="stylesheet" href="/skins/cavendish/print.css?303" media="" /><meta name="ResourceLoaderDynamicStyles" content="" />
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;printable=1&amp;skin=cavendish&amp;*" />
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}
/* cache key: wiki:resourceloader:filter:minify-css:7:29b70323345a439ab9ed7007e0c178a6 */</style>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;printable=1&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Lua/Tutorials/Class_basics","wgTitle":"Lua/Tutorials/Class basics","wgCurRevisionId":26082,"wgRevisionId":26082,"wgArticleId":3942,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Lua/Tutorials/Class_basics","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});
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
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Lua_Tutorials_Class_basics skin-cavendish action-view"><script type="text/javascript">
//<![CDATA[
try{(function(a){var b="http://",c="wiki.jc-mp.com",d="/cdn-cgi/cl/",e="img.gif",f=new a;f.src=[b,c,d,e].join("")})(Image)}catch(e){}
//]]>
</script>
<div id="internal"></div>
<!-- Skin-Version: 2.3.2 //Please leave this for bugtracking purpose//-->
<div id="globalWrapper" class="view">
	<div id="p-personal" class="portlet">
		<h5>Personal tools</h5>
		<div class="pBody">
			<ul >
						
			<li id="pt-login" class="top-nav-element">
				<span class="top-nav-left">&nbsp;</span>
				<a class="top-nav-mid " 
				   href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FTutorials%2FClass+basics&amp;returntoquery=printable%3Dyes">
				   Click here to login with your JC2-MP account</a>
				<span class="top-nav-right">&nbsp;</span></li>
							
			</ul>
		</div>
	</div>
	<div id="header">
		<a name="top" id="contentTop"></a>
		<h6>
		<a
		href="/Main_Page"
		title="Main Page">Lua/Tutorials/Class basics - JC2-MP Documentation</a></h6>
		<div id="p-cactions" class="portlet"><ul>

				<li id="ca-nstab-main" class="selected"><a href="/Lua/Tutorials/Class_basics" title="View the content page">Page</a></li>
				<li id="ca-talk" class="new"><a href="/index.php?title=Talk:Lua/Tutorials/Class_basics&amp;action=edit&amp;redlink=1" title="Discussion about the content page">Discussion</a></li>
				<li id="ca-viewsource"><a href="/index.php?title=Lua/Tutorials/Class_basics&amp;action=edit" title="This page is protected.&#10;You can view its source">View source</a></li>
				<li id="ca-history"><a href="/index.php?title=Lua/Tutorials/Class_basics&amp;action=history" title="Past revisions of this page">History</a></li>			</ul></div>
				<div id="p-search" class="portlet" role="search">
		<h3><label for="searchInput">Search</label></h3>
		<div id="searchBody" class="pBody">
			<form action="/index.php" id="searchform">
				<input type='hidden' name="title" value="Special:Search"/>
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
				<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Lua/Tutorials/Class_basics" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
				<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Lua/Tutorials/Class_basics" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
				<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
				<li id="t-permalink"><a href="/index.php?title=Lua/Tutorials/Class_basics&amp;oldid=26082" title="Permanent link to this revision of the page">Permanent link</a></li>
				<li id="t-info"><a href="/index.php?title=Lua/Tutorials/Class_basics&amp;action=info">Page information</a></li>
			</ul>
		</div>
	</div>
</div>
</div>
		</div><!-- end of SIDE div -->
		<div id="column-content">
			<div id="content">
				<a id="top"></a>
								<h1 id="firstHeading" class="firstHeading">Lua/Tutorials/Class basics</h1>
				<div id="bodyContent">
					<h3 id="siteSub">From JC2-MP Documentation</h3>
					<div id="contentSub"><span class="subpages">&lt; <a href="/Lua" title="Lua">Lua</a>&lrm; | <a href="/Lua/Tutorials" title="Lua/Tutorials">Tutorials</a></span></div>
															<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>					<!-- start content -->
					<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p>Classes are used everywhere in the JC2-MP API. <a href="/Lua/Server/Player" title="Lua/Server/Player">Player</a> is a class, as is <a href="/Lua/Server/Vehicle" title="Lua/Server/Vehicle">Vehicle</a> and <a href="/Lua/Shared/Vector3" title="Lua/Shared/Vector3">Vector3</a>. You can also define your own classes, which is covered in this tutorial.
</p><p>Classes are not a standard language feature of Lua. However, because Lua is a simple and extendable language, you can create your own class system. There are various class systems you can find out there, but JC2-MP helpfully provides all the features of a class system for you.
</p>
<div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Features"><span class="tocnumber">1</span> <span class="toctext">Features</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Constructors"><span class="tocnumber">2</span> <span class="toctext">Constructors</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Member_variables"><span class="tocnumber">3</span> <span class="toctext">Member variables</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Member_functions"><span class="tocnumber">4</span> <span class="toctext">Member functions</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Using_events"><span class="tocnumber">5</span> <span class="toctext">Using events</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Static_variables_and_functions"><span class="tocnumber">6</span> <span class="toctext">Static variables and functions</span></a></li>
<li class="toclevel-1 tocsection-7"><a href="#Additional_notes"><span class="tocnumber">7</span> <span class="toctext">Additional notes</span></a>
<ul>
<li class="toclevel-2 tocsection-8"><a href="#Member_function_declarations"><span class="tocnumber">7.1</span> <span class="toctext">Member function declarations</span></a></li>
<li class="toclevel-2 tocsection-9"><a href="#Calling_member_functions"><span class="tocnumber">7.2</span> <span class="toctext">Calling member functions</span></a></li>
<li class="toclevel-2 tocsection-10"><a href="#Events:Subscribe"><span class="tocnumber">7.3</span> <span class="toctext">Events:Subscribe</span></a></li>
</ul>
</li>
</ul>
</div>

<h2><span class="mw-headline" id="Features">Features</span></h2>
<p>Classes can have the following features:
</p>
<ul>
<li> Static variables
</li>
<li> Static functions
</li>
<li> Member variables
</li>
<li> Member functions
<ul>
<li> A constructor
</li>
<li> Operators
</li>
</ul>
</li>
</ul>
<h2><span class="mw-headline" id="Constructors">Constructors</span></h2>
<p>In order to create an instance of a class, you <b>must</b> define a constructor. This is done by defining a member function called <i>__init</i>.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="co1">-- Declare a class called MyClass.</span>
class<span class="br0">&#40;</span><span class="st0">&quot;MyClass&quot;</span><span class="br0">&#41;</span>
&#160;
<span class="co1">-- Define the constructor for MyClass. Note how ':' is used.</span>
<span class="kw1">function</span> MyClass<span class="sy0">:</span>__init<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="kw3">print</span><span class="br0">&#40;</span><span class="st0">&quot;Hello&quot;</span><span class="br0">&#41;</span>
<span class="kw1">end</span>
&#160;
<span class="co1">-- Create an instance of MyClass.</span>
instance <span class="sy0">=</span> MyClass<span class="br0">&#40;</span><span class="br0">&#41;</span></pre></div></div>
<p>This will print "Hello".
</p>
<h2><span class="mw-headline" id="Member_variables">Member variables</span></h2>
<p>Class instances can have variables. In this respect, classes work a little similarly to tables.
</p><p>While inside of a class function, the <i>self</i> keyword refers to the current instance of the class.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">class<span class="br0">&#40;</span><span class="st0">&quot;Person&quot;</span><span class="br0">&#41;</span>
&#160;
<span class="kw1">function</span> Person<span class="sy0">:</span>__init<span class="br0">&#40;</span><span class="br0">&#41;</span>
    self<span class="sy0">.</span>name <span class="sy0">=</span> <span class="st0">&quot;Unnamed&quot;</span>
<span class="kw1">end</span>
&#160;
instance <span class="sy0">=</span> Person<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="kw3">print</span><span class="br0">&#40;</span>instance<span class="sy0">.</span>name<span class="br0">&#41;</span>
instance<span class="sy0">.</span>name <span class="sy0">=</span> <span class="st0">&quot;Fredward&quot;</span>
<span class="kw3">print</span><span class="br0">&#40;</span>instance<span class="sy0">.</span>name<span class="br0">&#41;</span></pre></div></div>
<p>This will print "Unnamed" and then "Fredward".
</p>
<h2><span class="mw-headline" id="Member_functions">Member functions</span></h2>
<p>Note how you must use <i>:</i> to declare and call member functions.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">class<span class="br0">&#40;</span><span class="st0">&quot;MyClass&quot;</span><span class="br0">&#41;</span>
&#160;
<span class="kw1">function</span> MyClass<span class="sy0">:</span>__init<span class="br0">&#40;</span><span class="br0">&#41;</span>
    self<span class="sy0">.</span>value <span class="sy0">=</span> <span class="nu0">1</span>
<span class="kw1">end</span>
&#160;
<span class="kw1">function</span> MyClass<span class="sy0">:</span>DoubleValue<span class="br0">&#40;</span><span class="br0">&#41;</span>
    self<span class="sy0">.</span>value <span class="sy0">=</span> self<span class="sy0">.</span>value <span class="sy0">*</span> <span class="nu0">2</span>
<span class="kw1">end</span>
&#160;
<span class="kw1">function</span> MyClass<span class="sy0">:</span>SetValue<span class="br0">&#40;</span>newValue<span class="br0">&#41;</span>
    self<span class="sy0">.</span>value <span class="sy0">=</span> newValue
<span class="kw1">end</span>
&#160;
<span class="kw1">function</span> MyClass<span class="sy0">:</span>PrintValue<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="kw3">print</span><span class="br0">&#40;</span><span class="st0">&quot;My value is &quot;</span><span class="sy0">..</span><span class="kw3">tostring</span><span class="br0">&#40;</span>self<span class="sy0">.</span>value<span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="kw1">end</span>
&#160;
instance <span class="sy0">=</span> MyClass<span class="br0">&#40;</span><span class="br0">&#41;</span>
instance<span class="sy0">:</span>PrintValue<span class="br0">&#40;</span><span class="br0">&#41;</span>
instance<span class="sy0">:</span>SetValue<span class="br0">&#40;</span><span class="nu0">32</span><span class="br0">&#41;</span>
instance<span class="sy0">:</span>DoubleValue<span class="br0">&#40;</span><span class="br0">&#41;</span>
instance<span class="sy0">:</span>PrintValue<span class="br0">&#40;</span><span class="br0">&#41;</span></pre></div></div>
<p>The results will be 1 and 64.
</p><p><i>Remember: variables use '.', while functions use ':'.</i>
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">instance<span class="sy0">.</span>myVariable <span class="sy0">=</span> <span class="nu0">123</span>
instance<span class="sy0">:</span>DoSomething<span class="br0">&#40;</span><span class="br0">&#41;</span></pre></div></div>
<h2><span class="mw-headline" id="Using_events">Using events</span></h2>
<p>To subscribe to an event using a class function, you must use the Events:Subscribe function which takes a class function and a class instance.
</p><p>This example is self-explanatory; a DelayedPrint waits for a specified time and then prints. Note how the event subscription is kept track of and removed later.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">class<span class="br0">&#40;</span><span class="st0">&quot;DelayedPrint&quot;</span><span class="br0">&#41;</span>
&#160;
<span class="kw1">function</span> DelayedPrint<span class="sy0">:</span>__init<span class="br0">&#40;</span>message<span class="sy0">,</span> delay<span class="br0">&#41;</span>
    self<span class="sy0">.</span>message <span class="sy0">=</span> message
    self<span class="sy0">.</span>delay <span class="sy0">=</span> delay
    self<span class="sy0">.</span>timer <span class="sy0">=</span> Timer<span class="br0">&#40;</span><span class="br0">&#41;</span>
    self<span class="sy0">.</span>event <span class="sy0">=</span> Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PreTick&quot;</span><span class="sy0">,</span> self<span class="sy0">,</span> self<span class="sy0">.</span>PreTickFunction<span class="br0">&#41;</span>
<span class="kw1">end</span>
&#160;
<span class="kw1">function</span> DelayedPrint<span class="sy0">:</span>PreTickFunction<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="kw1">if</span> self<span class="sy0">.</span>timer<span class="sy0">:</span>GetSeconds<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">&gt;</span> self<span class="sy0">.</span>delay <span class="kw1">then</span>
        <span class="kw3">print</span><span class="br0">&#40;</span>self<span class="sy0">.</span>message<span class="br0">&#41;</span>
        Events<span class="sy0">:</span>Unsubscribe<span class="br0">&#40;</span>self<span class="sy0">.</span>event<span class="br0">&#41;</span>
    <span class="kw1">end</span>
<span class="kw1">end</span>
&#160;
DelayedPrint<span class="br0">&#40;</span><span class="st0">&quot;This will print after 5 seconds&quot;</span><span class="sy0">,</span> <span class="nu0">5</span><span class="br0">&#41;</span>
DelayedPrint<span class="br0">&#40;</span><span class="st0">&quot;This will print after 1 second&quot;</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span></pre></div></div>
<p>Note the differences between how Events:Subscribe is used in previous tutorials:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="co1">-- Regular function:</span>
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PreTick&quot;</span><span class="sy0">,</span> MyFunction<span class="br0">&#41;</span>
<span class="co1">-- Class function:</span>
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;PreTick&quot;</span><span class="sy0">,</span> self<span class="sy0">,</span> self<span class="sy0">.</span>MyFunction<span class="br0">&#41;</span></pre></div></div>
<p>Classes can be a powerful feature. The DelayedPrint example could be done without using classes. You would have the global variables <i>timer</i> and <i>event</i>. But what if you want to create two delayed prints? You would have to create more variables, or store them in tables, which can get messy very quickly. However, using a class, you can very easily create as many as you want without worry.
</p><p>A practical example would be a client script that allows you to fire rockets where you're aiming. You could have a Rocket class, which is given an initial position and velocity in its constructor and travels along until it hits something, using <a href="/Lua/Client/Physics/Functions/Raycast" title="Lua/Client/Physics/Functions/Raycast">raycasts</a>. Like with the DelayedPrint example, Rocket would subscribe to PreTick and, when it hits something, unsubscribe from the event and explode. The glory of classes comes in when you quickly fire rockets everywhere and have all these class instances doing their thing, having their own events run and checking their own raycasts, and the code for it is very easy to work with and understand.
</p>
<h2><span class="mw-headline" id="Static_variables_and_functions">Static variables and functions</span></h2>
<p>These don't require instances of classes. They are very similar to tables in this way, so their usefulness is limited.
</p><p>When classes are constructed, they inherit any static variables and functions.
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">class<span class="br0">&#40;</span><span class="st0">&quot;MyClass&quot;</span><span class="br0">&#41;</span>
&#160;
MyClass<span class="sy0">.</span>myStaticVariable <span class="sy0">=</span> <span class="st0">&quot;I'm a static variable&quot;</span>
&#160;
<span class="kw1">function</span> MyClass<span class="sy0">.</span>MyStaticFunction<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="kw3">print</span><span class="br0">&#40;</span>MyClass<span class="sy0">.</span>myStaticVariable<span class="br0">&#41;</span>
<span class="kw1">end</span>
&#160;
<span class="kw1">function</span> MyClass<span class="sy0">:</span>__init<span class="br0">&#40;</span><span class="br0">&#41;</span>
    self<span class="sy0">.</span>MyStaticFunction<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="kw1">end</span>
&#160;
instance <span class="sy0">=</span> MyClass<span class="br0">&#40;</span><span class="br0">&#41;</span>
instance<span class="sy0">.</span>MyStaticFunction<span class="br0">&#40;</span><span class="br0">&#41;</span></pre></div></div>
<p>This will print "I'm a static variable" twice.
</p>
<h2><span class="mw-headline" id="Additional_notes">Additional notes</span></h2>
<h4><span class="mw-headline" id="Member_function_declarations">Member function declarations</span></h4>
<p>With <i>function MyClass:MyFunction() end</i>, the ':' automatically adds a <i>self</i> variable as the first arg.
</p><p>When you do something like:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="kw1">function</span> MyClass<span class="sy0">:</span>MyFunction<span class="br0">&#40;</span>arg1<span class="sy0">,</span> arg2<span class="br0">&#41;</span>
<span class="kw1">end</span></pre></div></div>
<p>It's the same as writing it as:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1"><span class="kw1">function</span> MyClass<span class="sy0">.</span>MyFunction<span class="br0">&#40;</span>self<span class="sy0">,</span> arg1<span class="sy0">,</span> arg2<span class="br0">&#41;</span>
<span class="kw1">end</span></pre></div></div>
<h4><span class="mw-headline" id="Calling_member_functions">Calling member functions</span></h4>
<p>When doing <i>myInstance:MyFunction(1, 2)</i>, it's the same as doing <i>MyClass.MyFunction(myInstance, 1, 2)</i>
</p>
<h4><span class="mw-headline" id="Events:Subscribe">Events:Subscribe</span></h4>
<p>There are many ways to use Events:Subscribe. All of this is valid:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="lua source-lua"><pre class="de1">class<span class="br0">&#40;</span><span class="st0">&quot;MyClass&quot;</span><span class="br0">&#41;</span>
&#160;
<span class="kw1">function</span> MyClass<span class="sy0">:</span>__init<span class="br0">&#40;</span><span class="br0">&#41;</span>
    Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;SomeEvent&quot;</span><span class="sy0">,</span> self<span class="sy0">,</span> self<span class="sy0">.</span>MyFunction<span class="br0">&#41;</span>
    Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;SomeEvent&quot;</span><span class="sy0">,</span> self<span class="sy0">,</span> MyClass<span class="sy0">.</span>MyFunction<span class="br0">&#41;</span>
<span class="kw1">end</span>
&#160;
<span class="kw1">function</span> MyClass<span class="sy0">:</span>MyFunction<span class="br0">&#40;</span><span class="br0">&#41;</span>
&#160;
<span class="kw1">end</span>
&#160;
instance <span class="sy0">=</span> MyClass<span class="br0">&#40;</span><span class="br0">&#41;</span>
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;SomeEvent&quot;</span><span class="sy0">,</span> instance<span class="sy0">,</span> instance<span class="sy0">.</span>MyFunction<span class="br0">&#41;</span>
Events<span class="sy0">:</span>Subscribe<span class="br0">&#40;</span><span class="st0">&quot;SomeEvent&quot;</span><span class="sy0">,</span> instance<span class="sy0">,</span> MyClass<span class="sy0">.</span>MyFunction<span class="br0">&#41;</span></pre></div></div>

<!-- 
NewPP limit report
CPU time usage: 0.064 seconds
Real time usage: 0.070 seconds
Preprocessor visited node count: 123/1000000
Preprocessor generated node count: 244/1000000
Post‐expand include size: 0/2097152 bytes
Template argument size: 0/2097152 bytes
Highest expansion depth: 2/40
Expensive parser function count: 0/100
-->

<!-- Saved in parser cache with key wiki:pcache:idhash:3942-0!*!0!!en!*!* and timestamp 20150126194936 and revision id 26082
 -->
</div><div class="printfooter">
Retrieved from "<a href="http://wiki.jc-mp.com/index.php?title=Lua/Tutorials/Class_basics&amp;oldid=26082">http://wiki.jc-mp.com/index.php?title=Lua/Tutorials/Class_basics&amp;oldid=26082</a>"</div>
					<div id='catlinks' class='catlinks catlinks-allhidden'></div>					<!-- end content -->
									</div>
			</div><!-- end of MAINCONTENT div -->	
		</div>
	</div><!-- end of MBODY div -->
	<div class="visualClear"></div>
	<div id="footer">
		<table>
			<tr>
				<td rowspan="2" class="f-iconsection">
		<div id="f-copyrightico"><a href="http://www.gnu.org/copyleft/fdl.html"><img src="/skins/common/images/gnu-fdl.png" alt="GNU Free Documentation License 1.3 or later" width="88" height="31" /></a></div>				</td>
				<td align="center">
			<ul id="f-list">
					<li id="f-lastmod"> This page was last modified on 4 March 2014, at 10:52.</li>
					<li id="f-viewcount">This page has been accessed 814 times.</li>
					<li id="f-copyright">Content is available under <a class="external" rel="nofollow" href="http://www.gnu.org/copyleft/fdl.html">GNU Free Documentation License 1.3 or later</a> unless otherwise noted.</li>
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
					Mozilla Cavendish Theme based on Cavendish style by Gabriel Wicke modified by <a href="http://www.dasch-tour.de" title="DaSch-Tour Blog" target="_blank">DaSch</a> for the <a href="http://www.wecowi.de/" title="Web Community Wiki">Web Community Wiki</a><br/>
					<a href="https://github.com/DaSchTour/Cavendish" title="github projectpage">github Projectpage</a> &ndash; <a href="https://github.com/DaSchTour/Cavendish/issues" title="Bug reporting at github">Report Bug</a> &ndash; Skin-Version: 2.3.2				</div></td>
			</tr>
		</table>
	</div><!-- end of the FOOTER div -->
</div><!-- end of the CONTAINER div -->
<!-- scripts and debugging information -->
<script>/*<![CDATA[*/window.jQuery && jQuery.ready();/*]]>*/</script><script>if(window.mw){
mw.loader.state({"site":"loading","user":"ready","user.groups":"ready"});
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.action.view.postEdit","mediawiki.user","mediawiki.hidpi","mediawiki.page.ready","mediawiki.searchSuggest"],null,true);
}</script>
<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;printable=1&amp;skin=cavendish&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":172});
}</script></body></html>