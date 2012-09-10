<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Software Program</title>

	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric, archetype editor">
	<meta name="author" content="Erik Sundvall amd the openEHR software community">
	<meta name="copyright" content="The openEHR Foundation">
	<meta name="design" content="Adriana Danilakova">
	<meta name="distribution" content="Global">
	
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="../../styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="../../styles/programs.css"  type="text/css">
	<link rel="stylesheet" href="../../styles/menu.css" type="text/css"> 

	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="../../menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		 <?php include '../../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
			<?php include 'menu/softwaremenu.php' ?>
		</div>
		
		<div id="TextArea">			
			<h1>Software Program</h1>
			<p>
			The openEHR software program aims to support software development based on 
			or related to the openEHR specifications. This page serves as a quick overview 
			with links mainly to more detailed software related openEHR web- and wiki-pages.
			</p>
			
			<h2>Current Activities</h2>
			<p>
			Most current software projects are self-governed and self-funded by various 
			organisations doing research or commercial product development. The <em>openEHR
			Software Program</em> is an arena for sharing experience and ideas between projects.
			Another aim is to increase awareness of available openEHR implementations.
			A separate page <a href="listofsoftware">lists the known open source software projects</a>
			and another page lists other <a href="...***...TODO...***...">openEHR based software and services</a>.		
			</p>
			
			<h2>Potential future activities</h2>
			
			
			Conformance and interoperability test tools - to be developed together with the 
			openEHR Specifications Programme.
			
			<h1>THIS PAGE IS UNDER DEVELOPMENT</h1>
		
			Awareness/Listing of software products -> wiki
			
			Hosting and "branding"
			- Open source
			- Issue tracking
			- stability via committers from independent organisations
			
			List of project suggestions
			- service to e.g. educational or commercial actors wanting to explore 
			  unfulfilled openEHR software needs.
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>