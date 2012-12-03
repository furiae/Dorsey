<?php session_start(); ?>
<?php $page = 'home' ?>
<?php include("header.php"); ?>
<div class="masthead"></div>
<div class="slideshow"><div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="img/Site_Slider1_Dorsey_03.png" alt="" data-transition="fade" />
                <img src="img/Site_Slider2_Lifestyle_03.png" alt="" data-transition="fade" style="display:none" />
                <img src="img/Site_Slider3_GE_03.png" alt="" data-transition="fade" style="display:none" />
                <img src="img/Site_Slider4_HamburgSud_03.png" alt="" data-transition="fade" style="display:none" />
                <img src="img/Site_Slider5_GameStop_03.png" alt="" data-transition="fade" style="display:none"/>
                <img src="img/Site_Slider6_Nipro_03.png" alt="" data-transition="fade" style="display:none"/>
            </div> 
        </div></div>
<div class="mainContent">
<div class="leftColumn">
<h2>Welcome</h2>
<iframe src="http://www.youtube.com/embed/HDYZMcRBucc?modestbranding=0&showinfo=0&rel=0&controls=0" width="280" height="190" frameborder="0"></iframe>
<br />
<p style="line-height:16px; color:#DeDeDe"><span class="quote">Watch this short video from our President, Tim Dorsey, about how we improve operational excellence.</span><br/></p></div>
<div class="rightColumn">
  <h2>Unleash your potential</h2>
  <p style="font-size:14px"><strong>The Dorsey Group will help you build a dynamic culture that propels your business success.</strong><br />
    <br />
• Optimize performance with our proven methodologies, ensuring success<br />
<br />
• Empower your people, harnessing your greatest resource<br />
<br />
• Achieve sustainable results through an engaged, dynamic<br />
&nbsp;&nbsp;business culture<br />
  </p>
<div class="newsletterbox" style="text-align:center; background-position:-495px -204px">
<!--Stay connected  by providing your email - we don’t want you to miss a thing! -->
<!-- BEGIN: Constant Contact Stylish Email Newsletter Form -->
<!--form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:3;" -->
<!--input type="text" name="ea" size="20" value="" class="textbox"-->
<a href="http://thedorseygroup.org/whats-new.php" class="button">
<img src="img/Button_WhatsNew.png" width="205" height="41"/></a><a href="http://thedorseygroup.org/whats-new.php" class="newsLink" style="color:#fff; margin-left:155px"><br />See the latest happenings</a> 
<!--input type="hidden" name="llr" value="ywvd8ljab">
<input type="hidden" name="m" value="1109572835032">
<input type="hidden" name="p" value="oi">
</form -->
</div>
</div></div>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<?php include("footer.php"); ?>