<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		Demo: Dijit Layout
	</title>
	<link rel="stylesheet" href="../../../resources/style/demo.css" media="screen" type="text/css">
	<?php
		include_once($_SERVER['DOCUMENT_ROOT'] . implode('/', array_slice(explode('/', dirname($_SERVER['PHP_SELF'])), 0, 4)) . '/Utils.php');
		Utils::printClaroCss();
	?>
	<link rel="stylesheet" href="style.css" media="screen" type="text/css">
	<style type="text/css">
	html, body {
	    height: 100%;
	    margin: 0;
	    overflow: hidden;
	    padding: 0;
	}
	</style>
</head>
<body class="claro">
	<!-- This demo uses the declarative style of scripting and the dojo/parser to parse the document -->
	<div id="appLayout" class="demoLayout" data-dojo-type="dijit.layout.BorderContainer" data-dojo-props="design: 'headline'">
		<div class="centerPanel" data-dojo-type="dijit.layout.TabContainer" data-dojo-props="region: 'center', tabPosition: 'bottom'">
			<div data-dojo-type="dijit.layout.ContentPane" data-dojo-props="title: 'Group 1'">
				<h4>
					Group 1 Content
				</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div data-dojo-type="dijit.layout.ContentPane" data-dojo-props="title: 'Group Two'">
				<h4>
					Group 2 Content
				</h4>
			</div>
			<div data-dojo-type="dijit.layout.ContentPane" data-dojo-props="title: 'Long Tab Label for this One'">
				<h4>
					Group 3 Content
				</h4>
			</div>
		</div>
		<div class="edgePanel" data-dojo-type="dijit.layout.ContentPane" data-dojo-props="region: 'top'">
			<h1 id="mainHeading">
				Demo: Dijit Layout
			</h1>
		</div>
		<div id="leftCol" class="edgePanel" data-dojo-type="dijit.layout.ContentPane" data-dojo-props="region: 'left', splitter: true">
			Sidebar content (left)
		</div>
	</div>

	<?php
		include_once($_SERVER['DOCUMENT_ROOT'] . implode('/', array_slice(explode('/', dirname($_SERVER['PHP_SELF'])), 0, 4)) . '/Utils.php');
		Utils::printDojoScript("async: true");
	?>
	<script>
		require([
			"dojo/parser",
			"dijit/layout/BorderContainer",
			"dijit/layout/TabContainer",
			"dijit/layout/ContentPane",
			"dojo/domReady!"
		], function(parser){
			parser.parse();
		});
	</script>
</body>
</html>
