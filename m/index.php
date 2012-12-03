<?php
  $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
  $pos_blackberry = strrpos($ua, "blackberry");
  $pos_webkit = strrpos($ua, "webkit");
  $url = "http://thedorseygroup.org/b";

  if (!($pos_blackberry === false) && !($pos_webkit === false))
  {
      header("Location: " . $url);
  }
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="apple-touch-icon" sizes="114x114" href="images/icon.png">
<link rel="apple-touch-startup-image" href="images/startup2.png" />
<title>Dorsey Group</title>
<link href="styles/style.css" rel="stylesheet" type="text/css">
<link href="styles/type.css" rel="stylesheet" type="text/css">
<link href="styles/buttons.css" rel="stylesheet" type="text/css">
<link href="styles/add2home.css" rel="stylesheet" type="text/css">
<link href="styles/flexslider.css" rel="stylesheet" type="text/css">
<link href="styles/photoswipe.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://dorsey.cajohnsononline.com/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="script/tweetable.js"></script>
<script type="text/javascript" src="script/jquery.easing.js"></script>
<script type="text/javascript" src="script/jquery.scrollTo-min.js"></script>
<script type="text/javascript" src="script/flexslider.js"></script>
<script type="text/javascript" src="script/klass.min.js"></script>
<script type="text/javascript" src="script/photoswipe.js"></script>
<script type="text/javascript" src="script/add2home.js"></script>
<script type="text/javascript" src="script/contact.js"></script>
<script type="text/javascript" src="script/custom.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32484888-1']);
  _gaq.push(['_setDomainName', 'thedorseygroup.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div class="wrapper" id="top-box">
	<div class="top-logo"><img class="image-deco responsive-image" src="images/logo.png" alt="img"></div>
        <a href="#home"><img class="image-deco responsive-image" src="images/blueNavHome.png" alt="img"></a>
        <a href="#performance"><img class="image-deco responsive-image" src="images/blueNavPerformance.png" alt="img"></a>
        <a href="#clients"><img class="image-deco responsive-image" src="images/blueNavClients.png" alt="img"></a>
        <a href="#about"><img class="image-deco responsive-image" src="images/blueNavAbout.png" alt="img"></a>
        <a href="#contact" style="margin-bottom:8px"><img class="image-deco responsive-image" src="images/blueNavContact.png" alt="img"></a>      
        <a href="mailto:info@thedorseygroup.org" class="navicons"><img src="images/icon02.png" alt="img"></a>
        <a href="tel:+1-954-384-8774" class="navicons"><img src="images/icon03.png" alt="img"></a>
        <a href="http://youtu.be/HDYZMcRBucc" class="navicons"><img src="images/icon04.png" alt="img"></a>
        <a href="http://thedorseygroup.org/?mobile=false" class="navicons"><img src="images/icon05.png" alt="img"></a>     
    </div>
</div>
<div class="wrapper" id="home">
<a href="#home" style="margin-bottom:0"><img class="image-deco responsive-image" src="images/blueNavWelcome.png" alt="img" style="margin-bottom:0"></a>
<img class="image-deco responsive-image" src="images/masthead-home.png" alt="img" style="margin-top:-8px">
<div class="content-box">
        <div class="slider-heading">
				<iframe width="280" height="190" frameborder="0" src="http://www.youtube.com/embed/HDYZMcRBucc?modestbranding=0&amp;showinfo=0&amp;rel=0&amp;controls=0"></iframe>
            <p>Watch this short video from our President, Tim Dorsey, about how we improve operational excellence.</p>
<div class="decoration"></div>
<h4>Unleash your potential</h4>
<p><strong>The Dorsey Group will help you build a dynamic culture that propels your business success.</strong><br>
  <br>
• Optimize performance with our proven methodologies, ensuring success<br>
<br>
• Empower your people, harnessing your greatest resource<br>
<br>
• Achieve sustainable results through an engaged, dynamic business culture.</p>
        </div>
	</div>
    <div class="main-wrapper-bottom-center">
        <div class="main-wrapper-bottom-start"></div>
        <div class="main-wrapper-bottom-body"></div>
        <div class="main-wrapper-bottom-end"></div>
    </div>
</div>

<div class="wrapper" id="performance">
 <a href="#performance"  style="margin-bottom:0px"><img class="image-deco responsive-image" src="images/blueNavPerformance.png" alt="img"  style="margin-bottom:0px"></a>
	<img class="image-deco responsive-image" src="images/masthead-performance.png" alt="img" style="margin-top:-8px">
    <div class="content-box">
   	  <div class="paragraph">
<div class="paragraph">
            	<h4>What we do</h4>
       	<p><strong>The Dorsey Group </strong>gets results for clients by teaching  them to tackle strategies, develop people, analyze performance and make  lasting operational improvements — greatly enhancing their competitive  positions.<br>
          <br>
Through our training and inspiration, The Dorsey Group empowers your  company to become more dynamic, efficient and profitable. We&rsquo;ve  contributed to the success of a prominent list of global corporations,  local businesses and government agencies — we look forward to doing the  same for you!<br>
<br>
We create operational excellence: inspiring employees to peak performance for proven, sustainable business success.</p>
        </div>
   	  <br>
   	  <div class="decoration"></div>
            <div class="paragraph">
           	  <h4>Our performance services</h4>
       	<p>The Dorsey Group&rsquo;s high-performance framework is designed to  transition organizations from their current level of performance to a  much higher level of performance, usually making significant headway  within four months of program initiation. Our program has three major  components:<br>
       	  <br>
       	</p>
        <strong>Consulting</strong><br>
        <p>Our practical and proven methodology improves performance and  reduces waste. We rapidly develop the infrastructure, provide the tools  and train your line and management people to become more skilled in  operating high-performance work teams that achieve measurable results.</p>
        <p><br>
          You quickly achieve employee buy-in and ownership for dramatic  improvements in communication, accountability, quality, productivity,  customer service and profits.<br>
          <br>
        </p>
        <strong>TIMs</strong><br>
        <p>TIMs is our proven software system for improving your performance  and communications. Focused on creating synergy between process and  people, our computer-based training program is specifically designed to  equip your organization with the tools, processes and know-how to meet  your performance goals.<br>
        </p>
        <strong><br>
        Workshops</strong><br>
        <p>These comprehensive hands-on workshops are designed to equip your  team with the tools, processes, and knowledge to meet your performance  improvement goals. We will be sharing more information about this  exciting opportunity in the near future.</p>
        </div>
            <div class="clear"></div>
      </div>        
	</div>
    <div class="main-wrapper-bottom-center">
        <div class="main-wrapper-bottom-start"></div>
        <div class="main-wrapper-bottom-body"></div>
        <div class="main-wrapper-bottom-end"></div>
    </div>
</div>
<div class="wrapper" id="clients">
<a href="#clients" style="margin-bottom:0px"><img class="image-deco responsive-image" src="images/blueNavClients.png" alt="img" style="margin-bottom:0px"></a>
	<img class="image-deco responsive-image" src="images/masthead-clients2.png" alt="img" style="margin-top:-8px">
    <div class="content-box">
   	  <div class="paragraph">
   	  <div class="paragraph">
      <p>We have been honored to work with prestigious and successful companies – large and small, public and private as well as government – in a variety of industries. Although each is unique with diverse performance issues and needs, our approach has led each client to achieve significant results.</p></div>
            <div class="flexslider">
            <ul class="slides">
                <li><img src="images/slider/1.png" alt="img"/></li>
                <li><img src="images/slider/2.png" alt="img"/></li>
                <li><img src="images/slider/3.png" alt="img"/></li>
                <li><img src="images/slider/4.png" alt="img"/></li>
                <li><img src="images/slider/5.png" alt="img"/></li>
                <li><img src="images/slider/6.png" alt="img"/></li>
            </ul>
        </div>
      </div>        
	</div>
    <div class="main-wrapper-bottom-center">
        <div class="main-wrapper-bottom-start"></div>
        <div class="main-wrapper-bottom-body"></div>
        <div class="main-wrapper-bottom-end"></div>
    </div>
</div>
<div class="wrapper" id="about">
   <a href="#about" style="margin-bottom:0px"><img class="image-deco responsive-image" src="images/blueNavAbout.png" alt="img" style="margin-bottom:0px"></a>
   <img class="image-deco responsive-image" src="images/masthead-about.png" alt="img" style="margin-top:-8px">
   <div class="content-box">
    <div class="paragraph">
      <div class="paragraph"> <h4>Who we are</h4>
        <p><strong>The Dorsey Group</strong> inspires people to peak performance — maximizing operational excellence for proven, sustainable business success.</p>
        <p>Through our training and processes, The Dorsey Group gets results  for businesses and organizations by teaching them to create strategies,  develop people, analyze performance and make lasting operational  improvements.</p>
        <p>We&rsquo;ve contributed to the success of a prominent list of global  corporations, local businesses and government agencies — and we can do  the same for you — making your company more dynamic, efficient, and  profitable.</p>
        <p>Unleash your potential by building a dynamic culture that propels your business success.</p>
<br/>
<strong>Meet our team</strong><br>

<p>At The Dorsey Group, we improve operational excellence through teamwork, communication and employee engagement. Our experienced professionals share their expertise through training and hands-on support, giving you the tools to create a culture of success for your company.<br>
</p><br>
<p class="two-column">
  » Tim Dorsey</p>  <p class="two-column last-column">» Carla Dorsey</p>
<p class="two-column">» Hank Messemer</p> <p class="two-column last-column">» John Simmons</p>
<p class="two-column">» Steve Speer</p><p class="two-column last-column">» Jerry Horton</p>
      </div>
      <br clear="all" />
      <div class="decoration"></div>
      <div class="paragraph"> <h4>Raise The Bar</h4>
        <p>The Dorsey Group has more than 17 years experience in developing and implementing results-oriented performance improvement initiatives. Specific areas of expertise include: Communications through the integration of your vision, goals, indicators and expectations; Team Building to improve interpersonal skills, participation, buyin and ownership; Process Improvement to increase quality, productivity and on-time delivery; and Problem Solving with the focus, time and dedication to deliver results by design, not chance.</p>
</div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="main-wrapper-bottom-center">
    <div class="main-wrapper-bottom-start"></div>
    <div class="main-wrapper-bottom-body"></div>
    <div class="main-wrapper-bottom-end"></div>
  </div>
</div>
<div class="wrapper" id="contact">
   <a href="#contact" style="margin-bottom:0px"><img class="image-deco responsive-image" src="images/blueNavContact.png" alt="img" style="margin-bottom:0px"></a>
   <img class="image-deco responsive-image" src="images/masthead-contact.png" alt="img" style="margin-top:-8px">
   <div class="content-box">
        <p class="paragraph">We welcome comments, questions or information requests. Please select one of the methods listed below or you may use our online email submission form to send your inquiry.</p>
<p>The Dorsey Group<br />
354 Coconut Circle<br />
Weston, Florida 33326<br />
Office: 954.384.8774<br />
Cell: 954.629.7893<br />
Email: info@TheDorseyGroup.org</p>
    </p>
        <form id="contactForm">
            <fieldset>
                <label for="contactName" id="name_label">Name (required)</label>
                <input type="text" name="contactName" id="contactName" size="30" value="" class="text-input" />
                <span class="error" id="nameError">Please enter your name !</span>
              <label for="contactEmail" id="email_label">Email (required)</label>
                <input type="text" name="contactEmail" id="contactEmail" size="30" value="" class="text-input" />
                <span class="error" id="emailError">Please enter your email address !</span> 
                <span class="error" id="emailError2">Please enter a valid email address !</span>
          <label for="contactMessage" id="message_label">Message</label>
                <textarea  name="contactMessage" id="contactMessage" class="text-input"></textarea>
                <span class="error" id="messageError">Please enter message !</span>
                <p>
                  <input type="submit" name="submitMessage" class="contactButton button grey" id="contactSubmitBtn" value="Send It!"/>
                    <a class="contactBut button grey" href="tel:+9543848774">Phone!</a>
                    <a class="contactBut button grey" href="sms:+9546297893">SMS!</a>
                    <a class="contactBut button grey" href="mailto:info@thedorseygroup.org">E-Mail!</a>
                </p>
            </fieldset>
        </form>
	</div>
</div>
<div class="wrapper" id="contact" style="text-align:center; padding 6px"><a href="http://www.thedorseygroup.org/?mobile=false">View the complete website</a></div>
</body>
</html>