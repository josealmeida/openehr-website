<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>Welcome to openEHR - Homepage</title>

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

	<link rel="stylesheet" href="styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="styles/home.css"  type="text/css"> 
	<link rel="stylesheet" href="styles/menu.css" type="text/css"> 
	
	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="menu/dropdown.js"></script> 
	
</head>


<body>
<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include 'panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
		<div class="nav">
		<?php include 'menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="height:840px">

		<div id="HomeFrame1">
			<div id="FoundationFrame">
				<h2>Welcome to openEHR</h2>
				<p style="text-align:justify;">The openEHR Foundation works to enable semantic interoperaility and intelligent computing in health information systems. 
				It does this by defining an open, knowledge-driven platform, based on a standardised Electronic Health Record (EHR). 
				openEHR's work is organised in the four Programmes below.<br/>
				<a href="about/foundation" style="line-height:200%;">Learn more</a></p>
			</div>
		
		
			<div id="WikiFrame">
				<h2>Join & Learn</h2>
				<p><a href="http://www.openehr.org/wiki/dashboard.action">Wiki</a></p>
				<p><a href="http://www.openehr.org/new-ws/site/community/mailinglists">Mailing Lists</a></p>
				<p><a href="http://www.openehr.org/new-ws/site/resources/learningcentre">Learning Centre</a></p>
				
			</div>
		</div>
			
		<div id="SpecificationFrame">
			<img src="gui/SpecificationFrame.png" usemap="#specification"/>
			<map name="specification">
			  <area shape="rect" coords="0,0,220,150" href="programs/specification/programhome" alt="Specification Program" />
			</map> 
			<div id="TextFrame">
			<h1>Specifications <br/>Program</h1>
			<p>Specifications for health information, archetypes, querying and services.
			<br/><a href="programs/specification/programhome" style="line-height:200%;">Learn more</a></p>
			</div>
		</div>

		
		<div id="ModelsFrame">
			<img src="gui/ModelsFrame.png" usemap="#models"/>
			<map name="models">
			  <area shape="rect" coords="0,0,220,150" href="programs/clinicalmodels/programhome" alt="Clinical Models Program" />
			</map> 
			<div id="TextFrame">
			<h1>Clinical Models <br/>Program</h1>
			<p>Clinician-built archetypes, templates and ref-sets for e-health applications.
			<br/><a href="programs/clinicalmodels/programhome" style="line-height:200%;">Learn more</a></p>
			</div>
		</div>

		
		<div id="SoftwareFrame">
			<img src="gui/SoftwareFrame.png" usemap="#software"/>
			<map name="software">
			  <area shape="rect" coords="0,0,220,150" href="programs/software/programhome" alt="Software Program" />
			</map> 
			<div id="TextFrame">
			<h1>Software <br/>Program</h1>
			<p>Software tools and components for clinical modelling and EHR platform.
			<br/><a href="programs/software/programhome"  style="line-height:200%;">Learn more</a></p>
			</div>
		</div>
			
			
		<div id="LocalisationFrame">
			<img src="gui/LocalisationFrame.png" usemap="#localisation"/>
			<map name="localisation">
			  <area shape="rect" coords="0,0,220,150" href="programs/localisation/programhome" alt="Localisation Program" />
			</map> 
			<div id="TextFrame">
			<h1>Localisation <br/>Program</h1>
			<p>Education, translation, and dissemination - making openEHR work everywhere.
			<br/><a href="programs/localisation/programhome" style="line-height:200%;">Learn more</a></p>
			</div> 
		</div>
		
		<div id="HomeFrame2">
			<div id="TwitterFrame">
				<h2>openEHR Live News</h2>
				<div style="position: absolute; top:30px; padding-left:1px; padding-right:10px; word-wrap:break-word; ">
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					 version: 2,
					 type: 'search',
					 search: 'openEHR AND -openehrCKM',
					 interval: 30000,
					 title: '',
					 subject: '',
					 width: 190,
					 height: 250,
					 theme: {
					   shell: {
						 background: 'none',
						 color: '#3386AE'
					   },
					   tweets: {
						 background: 'none',
						 color: '#000000',
						 links: '#3386AE'
					   }
					 },
					 features: {
					   scrollbar: false,
					   loop: true,
					   live: true,
					   behavior: 'default'
					 }
					}).render().start();
					</script>
				</div>
			</div>
			
			
			<div id="NewsFrame">
				<h2>Clinical Model News</h2>
				<div style="position: absolute; top:30px; padding-left:1px; padding-right:10px; word-wrap:break-word; ">
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'search',
					  search: 'clinicalmodels OR openehrCKM',
					  interval: 30000,
					  title: '',
					  subject: '',
					  width: 190,
					  height: 250,
					  theme: {
						shell: {
						  background: 'none',
						  color: '#3386AE'
						},
						tweets: {
						  background: 'none',
						  color: '#000000',
						  links: '#3386AE'
						}
					  },
					  features: {
						scrollbar: false,
						loop: true,
						live: true,
						behavior: 'default'
					  }
					}).render().start();
					</script>
				</div>
			</div>
			
			
			<div id="ReleasesFrame">
			<div id="LinksFrame">
				<h2>News & Events</h2>
				<a href="news_events/openehrnews/news21">ADL - syntax highlight for Notepad++</a>
				<h6>13. August 2012</h6>
				<br/>
				<a href="news_events/openehrevents/events7">HL7 Australia Seminar on Future HL7 Standards</a>
				<h6>2. July 2012</h6>
				<br/>
				<a href="news_events/openehrevents/events6">openEHR @ HINZ</a>
				<h6>21.-22. June 2012</h6>
				<br/>
				<a href="news_events/openehrnews/news20">Brazil re-affirms commitement to openEHR</a>
				<h6>16. May 2012</h6>
				<br/>
				<a href="news_events/openehrannouncements/announcement10">Board statement on Clinical Knowledge Manager</a>
				<h6>15. May 2012</h6>
				</div>
			</div>
			
			<div id="UsersFrame">
				<div id="LinksFrame">
				<h2>Releases</h2>
				<a href="news_events/openehrreleases/release19">ADL 1.5 Workbench - beta release 8</a>
				<h6>2. August 2012</h6>
				<br/>
				<a href="news_events/openehrreleases/release18">ADL 1.5 Workbench - beta release 4</a>
				<h6>9. September 2011</h6>
				<br/>
				<a href="news_events/openehrreleases/release17">First open source release of openEHR.NET</a>
				<h6>4. March 2011</h6>
				<br/>
				<a href="news_events/openehrreleases/release16">ADL 1.5 Workbench - beta release 3</a>
				<h6>14. January 2011</h6>
				<br/>
				<a href="news_events/openehrreleases/release15">Achetype Editor 2.2 beta release</a>
				<h6>28. December 2010</h6>
				</div>
			</div>	 
		</div>
	</div>

	
	<div id="BottomMenu">
	<?php include 'menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include 'panel/bottompanel.php' ?>
	</div>

</div>
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>