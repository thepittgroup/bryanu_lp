<?php 

  //Set Tracking Params to $_SESSION
  if(isset($_GET['utm_source'])){
	  $source = $_GET['utm_source'];
	  $_SESSION['utm_source'] = $source;
  } 
  
  if(isset($_GET['utm_term'])){
	  $term = $_GET['utm_term'];
	  $_SESSION['utm_term'] = $term;
  } 
  
  if(isset($_GET['utm_network'])){
	  $network = $_GET['utm_network'];
	  $_SESSION['utm_network'] = $network;
  } 
  
  if(isset($_GET['utm_matchtype'])){
	  $matchtype = $_GET['utm_matchtype'];
	  $_SESSION['utm_matchtype'] = $matchtype;
  } 
  
  if(isset($_GET['utm_content'])){
	  $content = $_GET['utm_content'];
	  $_SESSION['utm_content'] = $content;
  } 
  
  if(isset($_GET['utm_adposition'])){
	  $adposition = $_GET['utm_adposition'];
	  $_SESSION['utm_adposition'] = $adposition;
  } 
  
  if(isset($_GET['utm_campaign'])){
	  $campaign = $_GET['utm_campaign'];
	  $_SESSION['utm_campaign'] = $campaign;
  } 
  
  if(isset($_GET['utm_medium'])){
	  $medium = $_GET['utm_medium'];
	  $_SESSION['utm_medium'] = $medium;
  } 
  
  if(isset($_GET['LeadSource'])){
	  $leadsource = $_GET['LeadSource'];
	  $_SESSION['leadsource'] = $leadsource;
  }

  ////Tracking Phone Number Switching Script
  if(isset($_GET['LeadSource']) && $_GET['LeadSource']=='Pandora'){
	$phone = "1-855-417-5262";
  }else{
	//Default
	$phone = "1-855-978-9752";
  };


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bryan University Explore | <?php echo $page_title; ?></title>
<link rel="icon" href="img/bryan-fave.png" type="image/png">
<link rel="shortcut icon" href="img/bryan-fave.png" type="image/png">

<!-- Bootstrap -->
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">

<script src="https://use.typekit.net/pki8lgb.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="./js/scripts.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="./js/jquery-1.11.2.min.js"></script>
        
        <script src="./js/jquery.validate.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38840459-2', 'auto');
  ga('send', 'pageview');

</script>
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '208749586170441'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=208749586170441&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
    
</head>
<body>

<!-- ////////////////// BEGIN NAVIGATION ////////////////// -->
<?php include('includes/nav.php'); ?>
<!-- ////////////////// END NAVIGATION ////////////////// -->