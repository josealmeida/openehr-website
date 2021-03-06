<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Modelling Tools</title>

	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="copyright" content="The openEHR Foundation">
	<meta name="design" content="Adriana Danilakova">
	<meta name="distribution" content="Global">
	
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="http://www.openehr.org/new-ws/site/styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="http://www.openehr.org/new-ws/site/styles/programs.css"  type="text/css"> 
	<link rel="stylesheet" href="http://www.openehr.org/new-ws/site/styles/menu.css" type="text/css"> 
	
	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="http://www.openehr.org/new-ws/site/menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include 'http://www.openehr.org/new-ws/site/panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		 <?php include 'http://www.openehr.org/new-ws/site/menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
		
		<div id="SideMenu">
		<?php include 'menu/adlmenu.php' ?>
		</div>

		<div id="TextArea">
			<h1>EN 13606</h1>
			
			<h2>Overview</h2>
			<p>A draft version of the EN13606-1 schema for the AWB has been developed,
			along with some example archetypes. This is intended to show how ADL / AOM 1.5 functions for archetypes built
			on a different reference model, and also to enable organisations working with EN13606 to have a more formal
			tool basis for developing archetypes, templates and generally migrating to ADL/AOM 1.5.
			The entire EN13606 model can be viewed in the AWB RM schema and Class tools, and comparisons can be made with classes in the openEHR reference model.</p>
			
			
			<h2>EN13606 schema for AWB</h2>
			<p>An initial schema for EN13606-1 has been included in the set of RM schemas used by AWB.
			This was produced by Christoph Rinner (Medical University of Vienna) and Thomas Beale (Ocean Informatics).
			The definitive copy of this resides in the openEHR <a href="http://www.openehr.org/svn/knowledge2/TRUNK/rm_schemas/">knowledge2</a> repository.
			If you are interested in being added to the committers list to work on this schema, please email webmaster@openehr.org.</p>
			<a href="images/rm_schema_en13606.png"><img border="0" alt="RM Schema EN13606 schema view" src="images/rm_schema_en13606.png" width="150"/></a>
			
			
			<h2>Comparison of 13606 and openEHR Classes</h2>
			<p>The entire EN13606 model can be viewed in the AWB RM schema and Class tools, and comparisons can be made with classes in the openEHR reference model.</p>
			<a href="images/rm_schema_tool_duplex_classes.png"><img border="0" alt="RM Schema Tool duplex class view" src="images/rm_schema_tool_duplex_classes.png" width="150"/></a>
			
			
			<h2>EN13606 archetypes</h2>
			<p>Some initial 13606 archetypes have been created <a href="http://www.openehr.org/svn/knowledge2/TRUNK/archetypes/">here</a> in the knowledge2 repository.
			These are currently purely experimental and unreviewed.</p>

		</div>

	</div>

	<div id="BottomMenu">
	<?php include 'http://www.openehr.org/new-ws/site/menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include 'http://www.openehr.org/new-ws/site/panel/bottompanel.php' ?>
	</div>

</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>