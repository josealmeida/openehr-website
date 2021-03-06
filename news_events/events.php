<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Events</title>

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

	<link rel="stylesheet" href="../styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="../styles/programs.css"  type="text/css"> 
	<link rel="stylesheet" href="../styles/menu.css" type="text/css"> 

	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/inforamtion/sitemap.html">

	<script type="text/javascript" src="../menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		
		<div class="nav">
   		 <?php include '../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="height:600px;">
	
		<div id="SideMenu">
		<?php $current = 2; include 'menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Events</h1>
			<br/>
			<a href="openehrevents/events7">HL7 Australia Seminar on Future HL7 Standards</a>
			<h6>2. July 2012, Sydney</h6>
			<p>This HL7 Australia "Future of eHealth Standards" Seminar will outline the recent developments
			in the use of openEHR Archetypes in HL7, the FHIR work (an Aussie development that is taking
			the global HL7 community by storm) as well as the Clinical Information Modeling Initiative (CIMI).</p>
			<br>
			<a href="openehrevents/events6">openEHR @ HINZ</a>
			<h6>21. - 22. June 2012, New Zeland</h6>
			<p>Two days of strategic events on healthcare interoperability in June in New Zealand.</p>
			<br>
			<a href="openehrevents/events5">Interconnected Health 2012</a>
			<h6>2. - 4. April 2012, Chicago</h6>
			<p>Interconnected Health 2012 will focus on approaches, challenges,
			and solutions affecting the ability to connect health organizations
			and systems, and the role of IT as an enabler in achieving this connectivity. </p>
			<br>
			<a href="openehrevents/events4">CIMI forum - 5th meeting</a>
			<h6>12. - 14. January 2012, San Antonio</h6>
			<p>CIMI held its 5th group meeting in San Antonio, January 12 – 14, 2012.
			Over 35 people attended in person with an additional 5 participants attending via WebEx.</p>
			<br/>
			<a href="openehrevents/events3">MIE 2011</a>
			<h6>28. - 31. August 2011, Oslo</h6>
			<p>MIE 2011 is the 23rd International Conference of EFMI - the European Federation for Medical Informatics,
			and takes place in Oslo, August 28 – 31, 2011. The conference will cover various topics in the area of e-health,
			health informatics, telemedicine etc. </p>
			<br>
			<a href="openehrevents/events2">openEHR sessions at HL7</a>
			<h6>9. -14. January 2011, Sydney</h6>
			<p>Two openEHR sessions are scheduled at the next HL7 WGM in Sydney,
			both on Friday 14 January, the last day of the meeting. The first session is
			'openEHR - Introduction to openEHR, Archetypes & Templates'. The second is 'openEHR - 
			Application of openEHR with HL7 & SNOMED'.</p>
			<br>
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>	
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>