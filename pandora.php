<?php
  session_start();
  
  
  
  $page_name = 'home';
  $page_title = 'Welcome';
  $feature = '';
  
  include('includes/header.php');

?>

<!-- ////////////////// END HEADER ////////////////// -->


<!-- ////////////////// BEGIN MAIN CONTENT ////////////////// -->
<div class="container main_content">
  
  <div class="row">
    <div class="col-md-4 pull-right Form" id="ontop">
    	<!-- ////////////////// BEGIN FORM ////////////////// -->
        <?php include('includes/form.php'); ?>
        <!-- ////////////////// END FORM ////////////////// -->
    </div>
  	<div class="col-md-8 clearfix">
   		<img src="img/pandora-hero.jpg" width="100%" class="hidden-xs hidden-sm"/><br />
    	<h1>How Will Your Next Chapter Begin?</h1>

		<p>Success. Advancement. Enjoyment. Growth. The next chapter of your life is bound for greatness, and we want to be a part of your story. With a degree from Bryan University, you can receive personalized instruction from experienced faculty, course scheduling that fits your life, and career and academic resources to help you succeed.</p>
		<p>At Bryan, we make sure you can create your story at your pace, on your time, and at your convenience. Your journey is just beginning. Start writing the next chapter of your life by learning about our degree programs today.</p>


    </div>
  </div>
  <div class="row text-center">
  	<div class="col-md-12">   <hr /><h2>Our Programs<br />&nbsp;</h2></div>
  	<div class="col-md-3"><img src="http://bryanu.edu/wp-content/uploads/2015/01/business-CIA.jpg" alt="Business Programs" title="Business Programs" /><p>&nbsp;</p></div>
  	<div class="col-md-3"><img src="http://bryanu.edu/wp-content/uploads/2015/01/IT-CIA.jpg" alt="Information Technology" title="Information Technology" /><p>&nbsp;</p></div>
  	<div class="col-md-3"><img src="http://bryanu.edu/wp-content/uploads/2015/01/allied-health-CIA.jpg" alt="Allied Health" title="Allied Health" /><p>&nbsp;</p></div>
  	<div class="col-md-3"><img src="http://bryanu.edu/wp-content/uploads/2015/01/criminal-justice-CIA.jpg" alt="Criminal Justice" title="Criminal Justice" /><p>&nbsp;</p></div>
</div>
<div class="row hidden-xs hidden-sm"><div class="col-md-12"><p>&nbsp;</p></div></div>
<div class="row text-center">
  	<div class="col-md-offset-1 col-md-3"><img src="http://bryanu.edu/wp-content/uploads/2015/01/health-wellness-CIA.jpg" alt="Criminal Justice" title="Criminal Justice" /><p>&nbsp;</p></div>
  	<div class="col-md-4"><img src="http://bryanu.edu/wp-content/uploads/2015/02/Programs-home.jpg" alt="Criminal Justice" title="Criminal Justice" /><p>&nbsp;</p></div>
  	<div class="col-md-3"><img src="http://bryanu.edu/wp-content/uploads/2015/01/ESL-CIA.jpg" alt="Criminal Justice" title="Criminal Justice" /><p>&nbsp;</p></div>
  	
  </div> 
  
   <div class="row text-center">
   <hr />
   	<div class="col-md-12"><h2>What Our Students Say<br />&nbsp;</h2></div>
</div>
<div class="row">
   	<div class="col-md-4">
   		<div class="row testimonial-item">
   			<div class="col-md-12"><p>“The experience from Bryan University was set apart from most traditional schooling methods and teachings. The attention and patience the teachers give you is undivided.”</p></div>
   			<div class="col-md-3"><div class="circle-crop"><img src="http://bryanu.edu/wp-content/uploads/2015/02/Ryan-Bayless-60x60.jpg" /></div></div>
   			<div class="col-md-9">
   				<h4>Ryan Bayless</h4><br>
   				<p style="bluetxt">Computer Information Systems - Networking Graduate</p>
			</div>
   		</div>
   	</div>
   	<div class="col-md-4">
   		<div class="row testimonial-item">
   			<div class="col-md-12"><p>“The staff at Bryan has helped me get on my way to a whole new future and lifestyle. For once in my life, I have everything I could possibly want: a wonderful family, a house, and a career that I love.”</p></div>
   			<div class="col-md-3"><div class="circle-crop"><img src="http://bryanu.edu/wp-content/uploads/2015/02/selena-barclay-60x60.jpg" /></div></div>
   			<div class="col-md-9">
   				<h4>Selena Barclay</h4><br>
   				<p style="bluetxt">Medical Assistant</p>
			</div>
   		</div>
   	</div>
   	<div class="col-md-4">
   		<div class="row testimonial-item">
   			<div class="col-md-12"><p>“The entire staff was more than I could have asked for. I may not have finished if it was not for the teachers, support, “suck it up cupcake,” attitude and friendship.”</p></div>
   			<div class="col-md-3"><div class="circle-crop"><img src="http://bryanu.edu/wp-content/uploads/2015/02/Kendra-Bell-60x60.jpg" /></div></div>
   			<div class="col-md-9">
   				<h4>Kendra Bell</h4><br>
   				<p style="bluetxt">Medical Assistant Graduate</p>
			</div>
   		</div>
   	</div>
   </div> 
</div>
<!-- ////////////////// END MAIN CONTENT ////////////////// -->


<!-- ////////////////// BEGIN FOOTER ////////////////// -->
<?php include('includes/footer.php'); ?>
