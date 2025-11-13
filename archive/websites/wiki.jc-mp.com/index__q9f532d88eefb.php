<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<title>Log in - JC2-MP Documentation</title>
<meta charset="UTF-8" />
<meta name="generator" content="MediaWiki 1.19.1" />
<meta name="robots" content="noindex,nofollow" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="JC2-MP Documentation (en)" />
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.jc-mp.com/api.php?action=rsd" />
<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html" />
<link rel="alternate" type="application/atom+xml" title="JC2-MP Documentation Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cskins.vector&amp;only=styles&amp;skin=vector&amp;*" />
<meta name="ResourceLoaderDynamicStyles" content="" />
<style>a:lang(ar),a:lang(ckb),a:lang(fa),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}a.new,#quickbar a.new{color:#ba0000}

/* cache key: wiki:resourceloader:filter:minify-css:7:c88e2bcd56513749bec09a7e29cb3ffa */
</style>

<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=vector&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"Special","wgCanonicalSpecialPageName":"Userlogin","wgNamespaceNumber":-1,"wgPageName":"Special:UserLogin","wgTitle":"UserLogin","wgCurRevisionId":0,"wgArticleId":0,"wgIsArticle":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgRelevantPageName":"Special:UserLogin"});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"disablesuggest":0,"editfont":"default","editondblclick":0,"editsection":1,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":0,"extendwatchlist":0,"externaldiff":0,"externaleditor":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"highlightbroken":1,"imagesize":2,"justify":0,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nocache":0,"noconvertlink":0,"norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"quickbar":5,"rcdays":7,"rclimit":50,"rememberpassword":0,"rows":25,"searchlimit":20,"showhiddencats":0,"showjumplinks":1,"shownumberswatching":1,"showtoc":1,"showtoolbar":1,"skin":"vector","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":0,"watchdefault":0,"watchdeletion":0,
"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,"variant":"en","language":"en","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false});;},{},{});mw.loader.implement("user.tokens",function($){mw.user.tokens.set({"editToken":"+\\","watchToken":false});;},{},{});

/* cache key: wiki:resourceloader:filter:minify-js:7:9983699ab6150ffa89a90653b2338ac8 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax"]);
}</script>
<!--[if lt IE 7]><style type="text/css">body{behavior:url("/skins/vector/csshover.min.htc")}</style><![endif]--></head>
<body class="mediawiki ltr sitedir-ltr ns--1 ns-special mw-special-Userlogin page-Special_UserLogin skin-vector action-view">
		<div id="mw-page-base" class="noprint"></div>
		<div id="mw-head-base" class="noprint"></div>
		<!-- content -->
		<div id="content" class="mw-body">
			<a id="top"></a>
			<div id="mw-js-message" style="display:none;"></div>
						<!-- firstHeading -->
			<h1 id="firstHeading" class="firstHeading">
				<span dir="auto">Log in</span>
			</h1>
			<!-- /firstHeading -->
			<!-- bodyContent -->
			<div id="bodyContent">
								<!-- subtitle -->
				<div id="contentSub"></div>
				<!-- /subtitle -->
																<!-- jumpto -->
				<div id="jump-to-nav" class="mw-jump">
					Jump to: <a href="#mw-head">navigation</a>,
					<a href="#p-search">search</a>
				</div>
				<!-- /jumpto -->
								<!-- bodycontent -->
				<div id="mw-content-text">
<div id="loginstart"></div>
<div id="userloginForm">
<form name="userlogin" method="post" action="/index.php?title=Special:UserLogin&amp;action=submitlogin&amp;type=login&amp;returnto=Lua/Server/PlayerDeath">
	<h2>Log in</h2>
	<p id="userloginlink"></p>
		<div id="userloginprompt"><p>You must have cookies enabled to log in to JC2-MP Documentation.
</p></div>
		<table>
		<tr>
			<td class="mw-label"><label for='wpName1'>Username:</label></td>
			<td class="mw-input">
				<input class="loginText" id="wpName1" tabindex="1" size="20" autofocus="" name="wpName" />
			</td>
		</tr>
		<tr>
			<td class="mw-label"><label for='wpPassword1'>Password:</label></td>
			<td class="mw-input">
				<input class="loginPassword" id="wpPassword1" tabindex="2" size="20" type="password" name="wpPassword" />
			</td>
		</tr>
			<tr>
			<td></td>
			<td class="mw-input">
				<input name="wpRemember" type="checkbox" value="1" id="wpRemember" tabindex="8" />&#160;<label for="wpRemember">Remember my login on this browser (for a maximum of 180 days)</label>			</td>
		</tr>
		<tr>
			<td></td>
			<td class="mw-submit">
				<input id="wpLoginAttempt" tabindex="9" type="submit" value="Log in" name="wpLoginAttempt" />&#160;<a href="/index.php/Special:PasswordReset" title="Special:PasswordReset">Forgotten your login details?</a>
			</td>
		</tr>
	</table>
<input type="hidden" name="wpLoginToken" value="d9d9cb8cd7923363329387839f7da7e2" /></form>
</div>
<div id="loginend"></div>
</div>				<!-- /bodycontent -->
								<!-- printfooter -->
				<div class="printfooter">
				Retrieved from "<a href="http://wiki.jc-mp.com/index.php/Special:UserLogin">http://wiki.jc-mp.com/index.php/Special:UserLogin</a>"				</div>
				<!-- /printfooter -->
												<!-- catlinks -->
				<div id='catlinks' class='catlinks catlinks-allhidden'></div>				<!-- /catlinks -->
												<div class="visualClear"></div>
				<!-- debughtml -->
								<!-- /debughtml -->
			</div>
			<!-- /bodyContent -->
		</div>
		<!-- /content -->
		<!-- header -->
		<div id="mw-head" class="noprint">
			
<!-- 0 -->
<div id="p-personal" class="">
	<h5>Personal tools</h5>
	<ul>
		<li id="pt-anonuserpage"><a href="/index.php/User:204.236.235.245" class="new" title="The user page for the IP address you are editing as [.]" accesskey=".">204.236.235.245</a></li>
		<li id="pt-anontalk"><a href="/index.php/User_talk:204.236.235.245" class="new" title="Discussion about edits from this IP address [n]" accesskey="n">Talk for this IP address</a></li>
		<li id="pt-anonlogin" class="active"><a href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FServer%2FPlayerDeath" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>
	</ul>
</div>

<!-- /0 -->
			<div id="left-navigation">
				
<!-- 0 -->
<div id="p-namespaces" class="vectorTabs">
	<h5>Namespaces</h5>
	<ul>
					<li  id="ca-nstab-special" class="selected"><span><a href="/index.php?title=Special:UserLogin&amp;returnto=Lua%2FServer%2FPlayerDeath"  title="This is a special page, you cannot edit the page itself">Special page</a></span></li>
			</ul>
</div>

<!-- /0 -->

<!-- 1 -->
<div id="p-variants" class="vectorMenu emptyPortlet">
	<h4>
		</h4>
	<h5><span>Variants</span><a href="#"></a></h5>
	<div class="menu">
		<ul>
					</ul>
	</div>
</div>

<!-- /1 -->
			</div>
			<div id="right-navigation">
				
<!-- 0 -->
<div id="p-views" class="vectorTabs emptyPortlet">
	<h5>Views</h5>
	<ul>
			</ul>
</div>

<!-- /0 -->

<!-- 1 -->
<div id="p-cactions" class="vectorMenu emptyPortlet">
	<h5><span>Actions</span><a href="#"></a></h5>
	<div class="menu">
		<ul>
					</ul>
	</div>
</div>

<!-- /1 -->

<!-- 2 -->
<div id="p-search">
	<h5><label for="searchInput">Search</label></h5>
	<form action="/index.php" id="searchform">
				<div>
			<input type="search" name="search" title="Search JC2-MP Documentation [f]" accesskey="f" id="searchInput" />			<input type="submit" name="go" value="Go" title="Go to a page with this exact name if exists" id="searchGoButton" class="searchButton" />			<input type="submit" name="fulltext" value="Search" title="Search the pages for this text" id="mw-searchButton" class="searchButton" />					<input type='hidden' name="title" value="Special:Search"/>
		</div>
	</form>
</div>

<!-- /2 -->
			</div>
		</div>
		<!-- /header -->
		<!-- panel -->
			<div id="mw-panel" class="noprint">
				<!-- logo -->
					<div id="p-logo"><a style="background-image: url(/skins/common/images/logo.png);" href="/index.php/Main_Page"  title="Visit the main page"></a></div>
				<!-- /logo -->
				
<!-- navigation -->
<div class="portal" id='p-navigation'>
	<h5>Navigation</h5>
	<div class="body">
		<ul>
			<li id="n-mainpage-description"><a href="/index.php/Main_Page" title="Visit the main page [z]" accesskey="z">Main page</a></li>
			<li id="n-portal"><a href="/index.php/Project:Community_portal" title="About the project, what you can do, where to find things">Community portal</a></li>
			<li id="n-currentevents"><a href="/index.php/Project:Current_events" title="Find background information on current events">Current events</a></li>
			<li id="n-recentchanges"><a href="/index.php/Special:RecentChanges" title="A list of recent changes in the wiki [r]" accesskey="r">Recent changes</a></li>
			<li id="n-randompage"><a href="/index.php/Special:Random" title="Load a random page [x]" accesskey="x">Random page</a></li>
			<li id="n-help"><a href="/index.php/Help:Contents" title="The place to find out">Help</a></li>
		</ul>
	</div>
</div>

<!-- /navigation -->

<!-- SEARCH -->

<!-- /SEARCH -->

<!-- TOOLBOX -->
<div class="portal" id='p-tb'>
	<h5>Toolbox</h5>
	<div class="body">
		<ul>
			<li id="t-specialpages"><a href="/index.php/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
		</ul>
	</div>
</div>

<!-- /TOOLBOX -->

<!-- LANGUAGES -->

<!-- /LANGUAGES -->
			</div>
		<!-- /panel -->
		<!-- footer -->
		<div id="footer">
							<ul id="footer-places">
											<li id="footer-places-privacy"><a href="/index.php/Project:Privacy_policy" title="Project:Privacy policy">Privacy policy</a></li>
											<li id="footer-places-about"><a href="/index.php/Project:About" title="Project:About">About JC2-MP Documentation</a></li>
											<li id="footer-places-disclaimer"><a href="/index.php/Project:General_disclaimer" title="Project:General disclaimer">Disclaimers</a></li>
									</ul>
										<ul id="footer-icons" class="noprint">
					<li id="footer-copyrightico">
						<a href="http://www.gnu.org/copyleft/fdl.html"><img src="/skins/common/images/gnu-fdl.png" alt="GNU Free Documentation License 1.3 or later" width="88" height="31" /></a>
					</li>
					<li id="footer-poweredbyico">
						<a href="//www.mediawiki.org/"><img src="/skins/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" width="88" height="31" /></a>
					</li>
				</ul>
						<div style="clear:both"></div>
		</div>
		<!-- /footer -->
		<script src="http://wiki.jc-mp.com/load.php?debug=false&amp;lang=en&amp;modules=skins.vector&amp;only=scripts&amp;skin=vector&amp;*"></script>
<script>if(window.mw){
mw.loader.load(["mediawiki.user","mediawiki.page.ready"], null, true);
}</script>
<!-- Served in 0.147 secs. -->
	</body>
</html>
