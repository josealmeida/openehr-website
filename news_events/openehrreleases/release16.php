<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Releases</title>

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

	<div id="MainArea" style="height:500px;">
	
		<div id="SideMenu">
		<?php $current = 3; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h2>ADL 1.5 Workbench - beta release 3</h2>
			<h6>14. January 2011 | from: Thomas Beale</h6>
			<br/>
			<p>The latest beta of the ADL 1.5 Workbench for Windows, Mac and Linux can now
			be downloaded from the
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/TRUNK/apps/adl_workbench/doc/web/index.html">help
			page</a>.</p>
			<p>It includes significant UI improvements, and an implementation of annotations
			as recently discussed on the lists. Release notes
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/TRUNK/apps/adl_workbench/doc/web/release_notes.html">here</a>.
			As indicated in the online documentation, please report all problems on the
			<a href="http://www.openehr.org/issues/browse/AWBPR">dedicated Jira issue
			tracker</a>.As this is a beta, the more people who download and test the tool on all
			platforms, the faster the quality improves.</p>
			<p>Foretaste of the future: as well as XML operational templates, we now are
			looking at adding editing capabilities and also UI form visualisation....</p>
			<br/>
			<a href="../releases">>> Back to Releases</a>
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