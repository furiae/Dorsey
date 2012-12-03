<script type="text/javascript">
(function($){
    $.fn.extend({ 
        //plugin name - rotaterator
        rotaterator: function(options) {
 
            var defaults = {
                fadeSpeed: 600,
                pauseSpeed: 100,
				child:null
            };
             
            var options = $.extend(defaults, options);
         
            return this.each(function() {
                  var o =options;
                  var obj = $(this);                
                  var items = $(obj.children(), obj);
				  items.each(function() {$(this).hide();})
				  if(!o.child){var next = $(obj).children(':first');
				  }else{var next = o.child;
				  }
				  $(next).fadeIn(o.fadeSpeed, function() {
						$(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
							var next = $(this).next();
							if (next.length == 0){
									next = $(obj).children(':first');
							}
							$(obj).rotaterator({child : next, fadeSpeed : o.fadeSpeed, pauseSpeed : o.pauseSpeed});
						})
					});
            });
        }
    });
})(jQuery);

 $(document).ready(function() {
        $('#rotate').rotaterator({fadeSpeed:1200, pauseSpeed:6000});
    }); 

</script>
<div id="rotate">
    <div>
		<p><span>"We were impressed with your commitment and your flexibility in adapting your methodology to our specific circumstances..." <a href="testimonial06-full.php">Read More</a></span></p>
	</div>
    <div>
		<p><span>"We realized a 9% inventory reduction, 41% improvements in gross margins, and a 94% error reduction in the production process..." <a href="testimonial01-full.php">Read More</a></span></p>
	</div>
    <div>
		<p><span>"We were able to establish more meaningful metrics and team accountability for achieving and exceeding our production goals..." <a href="testimonial02-full.php">Read More</a></span></p>
	</div>
   	<div>
		<p><span>"After just a few weeks with The Dorsey Group, our teams had already made substantial progress in solving the challenges we had..." <a href="testimonial03-full.php">Read More</a></span></p>
		</div>
       	<div>
		<p><span>"Their methodology achieves results by training, educating and inspiring the company's most important asset &#151; its people..." <a href="testimonial04-full.php">Read More</a></span></p>
	</div>
        <div>
		<p><span>"By streamlining operations and eliminating duplicate efforts which contributed to significant cost reductions throughout the company..." <a href="testimonial05-full.php">Read More</a></span></p>
	</div>
</div>