<?php session_start(); ?>
<?php $page = 'clients' ?>
<?php include("header.php"); ?>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="css/fancybox.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			$("a#fancybox").fancybox();
		});
	</script>
<div class="masthead"></div>
<div class="subContent">
<!--div class="clientsMenu"><a href="#">Manufacturing</a> | <a href="#">Service</a> | <a href="#">Pharmaceutical</a> | <a href="#">Distribution</a> | <a href="#">Government</a> <div -->
<div class="rightColumn">
  <h2>Industries we serve</h2>
  <p>We’ve been privileged to work with prestigious and successful companies in a variety of industries. Working with companies both big and small; public and private — we understand the nuances of these industries and customize each engagement to your unique goals and needs. <span style="color:#F76F1C">Click the photo for a list of clients</span></p>
  <h3>Manufacturing</h3>
    <a href="casestudy01.php" id="fancybox" class="casestudy02 iframe"><img src="img/iStock_000019959000XSmall_crop.jpg" width="475" height="135" /></a>
 <h3>Service</h3>
    <a href="casestudy02.php" id="fancybox" class="casestudy02 iframe"><img src="img/iStock_000005762584Small_crop.jpg" width="475" height="135" /></a>
 <h3>Pharmaceutical</h3>
   <a href="casestudy03.php" id="fancybox" class="casestudy02 iframe"><img src="img/iStock_000014986937Small_crop.jpg" width="475" height="135" /></a>
 <h3>Distribution</h3>
   <a href="casestudy04.php" id="fancybox" class="casestudy02 iframe"><img src="img/iStock_000003437524Small_crop.jpg" width="475" height="135" /></a>
 <h3>Government</h3>
   <a href="casestudy05.php" id="fancybox" class="casestudy02 iframe"><img src="img/iStock_000009607893Small_crop.jpg" width="475" height="135" /></a>
</div>
<div class="leftColumn">
    <h2>Testimonials</h2>
    <p><span class="bigquoteStart"><img src="img/quoteStart.png" width="16" height="16" /></span>I have used the Dorsey Group to launch teams at 3 different companies across 3 different industries —
every one of them has been a major success. Their methodology zeros in on all areas that short circuit
results and every step in the training process is designed to convert effort to the bottom line. We had a
41% improvement in Gross Margins.<span class="bigquoteEnd"><img src="img/quoteEnd.png" width="16" height="16"/></span></p>
<p><a href="testimonial01.php" class="testLink">Brett Petrie</a>, Senior Director of Manufacturing, Life Technologies</p>
<hr />
    <p><span class="bigquoteStart"><img src="img/quoteStart.png" width="16" height="16" /></span>Our company was operating very successfully prior to working with the Dorsey Group. However, after bringing in Tim and his Partners in Performance processes, we were able to establish more meaningful metrics and team accountability for achieving and exceeding our production goals.<span class="bigquoteEnd"><img src="img/quoteEnd.png" width="16" height="16"/></span></p>
<p><a href="testimonial02.php" class="testLink">Patrick Graesch</a> — Executive Director of Manufacturing Operations
2011 SFMA and MAF "Manufacturer of the Year"</p>
<hr />
    <p><span class="bigquoteStart"><img src="img/quoteStart.png" width="16" height="16" /></span>We invested considerable time and efforts in finding the right partner to accompany us on our teaming journey. We found that The Dorsey Group distinguished itself by offering a structured, comprehensive & systemic approach to teaming.<span class="bigquoteEnd"><img src="img/quoteEnd.png" width="16" height="16"/></span></p>
<p><a href="testimonial03.php" class="testLink">Benoit Cloutier</a>, President, CFAN (a GE Aviation/Snecma Joint Venture)</p>
<hr />
<p><span class="bigquoteStart"><img src="img/quoteStart.png" width="16" height="16" /></span>Using the Dorsey methodologies we have seen year after year improvements in both production and quality. The Dorsey Group’s innovative methodology achieves its results by training, educating and inspiring the company’s most important asset: its people.<span class="bigquoteEnd"><img src="img/quoteEnd.png" width="16" height="16"/></span></p>
<p><a href="testimonial04.php" class="testLink">Pat Sweetall</a>, Divisional VP, GameStop Distribution</p>
<hr />
<p><span class="bigquoteStart"><img src="img/quoteStart.png" width="16" height="16" /></span>Choosing The Dorsey Group was an easy decision. They conducted sessions resulting in the streamlining of operations, eliminating duplicate efforts and better understanding of the company’s processes… all of which contributed to significant cost reductions throughout the company.<span class="bigquoteEnd"><img src="img/quoteEnd.png" width="16" height="16"/></span></p>
<p><a href="testimonial05.php" class="testLink">Aleida Hernandez</a>, Director, Human Resources & Administration, Hamburg Sud</p>
</div></div>
<?php include("footer.php"); ?>