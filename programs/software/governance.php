<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Software Program - Governance</title>

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

		<h1>Governance & Members</h1>
		
		<p>Most current openEHR-related software projects are self-governed sparate entities. The 
		   principles below only govern the common openEHR Software Programme itself and it's 
		   provided resources (sometimes including code donated to the openEHR foundation). 
		</p>
		
		<p>The governance structure of the openEHR software program/group is mosly mail-list based
		   and inspired by the <a href="http://www.apache.org/foundation/">Apache Software Foundation</a>
		   and <a href="http://www.apache.org/foundation/how-it-works.html#management">the way it works</a>.
		   That is combined with the <a href="https://sites.google.com/a/openehrfoundation.org/foundation/home/foundation-committees">general
		   governance structure of the openEHR foundation</a> that requires both a <em>Program Committee</em> and 
		   a list of <em>Program Qualified Members</em>.</p>
		
		<h2>Community, including Program Qualified Members</h2>
		
		<p>The majority of the work and software decisions should be discussed on the 
		   <a href="/community/mailinglists.php">openehr-implementers mailing list</a>
		   where anybody can contribute to the concensus-targeted discussion (no qualified membership required).
		</p>

		<p>If voting is needed then
		   votes from <em>Program Qualified Members</em> will be evaluated using <a 
		   href="http://www.apache.org/foundation/voting.html"> Apache style voting and interpretation</a>.
		</p>

		<p>Qualified Membership should be based on meritocracy and willingness to contribute. 
		   Qualified Membership is not time-limited. Qualified Membership can be ended if the 
		   member requests to be removed.
		</p> 

		<p>If three independent* <em>Qualified Members</em> agree to suggest a 
		   new member and presents the candidate (including openEHR related merits), 
		   then the <em>Program Committee</em> should discuss and consider if the 
		   new member should be: 
		   a) approved at present or 
		   b) be recommended  to first gain more experience in order to get suggested again later. 
		</p> 

		<p>If thorny vendor/institution-related issues arise that at least three independent*
		   Qualified Members think would benefit from vendor/institution balance, then the issue
		   can be transferred to the program committee instead.
		</p>
		 
		<p>*) Independent in this case refers to not being dependent on the same organisation 
			for salary or other benefits.
		</p>
		
		<h3>Current Program Qualified Members</h3>
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
		
		<p>The <em>Program Committee</em> is responsible for reporting to and relating to the openEHR foundation board
		and it also maintains the official (and incubating) openEHR software project listings and approves new 
		<em>Program Qualified Member</em> suggestions (as described above).	
		</p>

		<p> The <em>Program Committee</em> is according to openEHR foundation 
			<a href="https://sites.google.com/a/openehrfoundation.org/foundation/home/foundation-committees">program rules</a>
			limited to a maximum of 9 and minimum of 5 Qualified Members. During initial/bootstrap committee formation we have strived
			to set it up in a way so that no specific company or institution is represented more than
			once (since the number of seats is limited).
		</p>
		
		<p> The <em>Program Committee</em> positions should be renewed or changed on a regular basis 
			as decided by the openEHR foundation. The <em>Software Program Qualified Members</em> suggest 
			new and/or renewed positions in the <em>Software Program Committee</em> to the openEHR foundation
			board that does final approval (or asks the <em>Software Program Qualified Members</em> for a new suggestion).
		</p> 
		
		<h3>Current Program Committee Members</h3>
		<ul>
			<li>Alan James</li>
			<li>Diego Bosca</li>
			<li>Erik Sundvall (coordinator)</li>
			<li>Pablo Pazos</li>
			<li>Rong Chen</li>
			<li>Seref Arikan</li>
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