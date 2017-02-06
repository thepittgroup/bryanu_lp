<?php
  session_start();
  
  
  
  $page_name = 'home';
  $page_title = 'Success';
  $feature = '';
  
  include('includes/header.php');

?>

<!-- ////////////////// END HEADER ////////////////// -->


<!-- ////////////////// BEGIN MAIN CONTENT ////////////////// -->
<div class="container main_content">
  
  <div class="row thank-you">
  	<div class="col-md-12 clearfix">
    	<h1>Submission Successful!</h1>
	    <p>Thank you for your interest in Bryan University! A representative from our school will be in contact with you soon. In the meantime, stay connected with us.</p>
	    <p>&nbsp;</p>
	    <h2>Stay Connected with BU on our social networks!</h2>
	    <ul class="social-links">
	    	<li class="facebook"><a href="https://www.facebook.com/LearnatBryan">Facebook</a></li>
	    	<li class="twitter"><a href="https://twitter.com/LearnAtBryan">Twitter</a></li>
	    	<li class="gplus"><a href="https://plus.google.com/112400318469636171983">Google Plus</a></li>
	    	<li class="youtube"><a href="https://www.youtube.com/user/LearnAtBryan">YouTube</a></li>
	    </ul>
    </div>
  </div>  
</div>
<!-- ////////////////// END MAIN CONTENT ////////////////// -->

<script>
fbq('track', 'Lead', {
value: 10.00,
currency: 'USD'
});
</script>

<!-- Google Code for Lead Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1056788095;
var google_conversion_language = "en";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "ZTOyCK-WUxD_nPX3Aw";
var google_conversion_value = 1.00;
var google_conversion_currency = "USD";
var google_remarketing_only = false;f
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1056788095/?value=1.00&amp;currency_code=USD&amp;label=ZTOyCK-WUxD_nPX3Aw&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- ////////////////// BEGIN FOOTER ////////////////// -->
<?php include('includes/footer.php'); ?>
