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
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Erik Sundvall and the openEHR software community">
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

		<h1>Governance</h1>
		<p>The governance structure of the openEHR software program/group is mosly mail-list based
		   and inspired by the <a href="http://www.apache.org/foundation/">Apache Software Foundation</a>
		   and <a href="http://www.apache.org/foundation/how-it-works.html#management">the way it works</a>.
		   That is combined with the <a href="https://sites.google.com/a/openehrfoundation.org/foundation/home/foundation-committees">general
		   governance structure of the openEHR foundation</a> that requires both a <em>Program Committee</em> and 
		   a list of <em>Program Qualified Members</em>.</p>
		
		<h2>Mailing list and Program Qualified Members</h2>
		
		<p>The majority of the work and technical decisions is discussed on the 
		   <a href="/community/mailinglists.php">openehr-implementers mailing list</a>
		   where anybody can contribute to the concensus-targeted discussion, and if voting is needed then
		   votes from <em>Program Qualified Members</em> will be evaluated using <a 
		   href="http://www.apache.org/foundation/voting.html" Apache style voting</a>.
		</p>
		
		<h3>Curent Program Qualified Members</h3>
		<ul>
			<li>David Moner</li>
			<li>Diego Boscá</li>
			<li>Erik Sundvall (coordinator)</li>
			<li>Heath Frankel</li>
			<li>Heather Leslie</li>
			<li>Koray Atalag</li>
			<li>Pablo Pazos</li>
			<li>Ricardo Correia</li>
			<li>Rong Chen</li>
			<li>Sam Heard</li>
			<li>Seref Arikan</li>
			<li>Sergio Freire</li>
			<li>Shinji Kobayashi</li>
			<li>Thomas Beale</li>
			<li>Tony Shannon</li>
		</ul>
		
		
		<h2>Program Committee</h2>
		<p>The <em>Program Committee</em> is according to openEHR foundation 
		<a href="https://sites.google.com/a/openehrfoundation.org/foundation/home/foundation-committees">program rules</a>
		limited to a maximum of 9 and minimum of 5 Qualified Members. During committee formation we have strived
		to set it up in a way so that no specific company or institution is represented more than
		once (since the number of seats is limited).
		</p>
		
		<h3>Curent Program Committee Members</h3>
		<ul>
			<li>...</li>
		</ul>
		
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