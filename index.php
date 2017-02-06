<!-- ////////////////// END HEADER ////////////////// -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bryan University Explore | Be Inspired. Be Changed. Be Ready</title>
<link rel="icon" href="img/bryan-fave.png" type="image/png">
<link rel="shortcut icon" href="img/bryan-fave.png" type="image/png">

<!-- Bootstrap -->
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">

<script src="https://use.typekit.net/pki8lgb.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="./js/scripts.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- ////////////////// BEGIN NAVIGATION ////////////////// -->
<nav class="navbar navbar-default">
  <div class="container-fluid top-phone">
    <div class="container">
      <p><span class="call">Call Us:</span>&nbsp; 855-566-0650</p>
    </div>
  </div>
  <div class="container-fluid header">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"><img src="img/BU-Logo.png" alt="Bryan University Logo" /></a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Programs<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="mbc.php">Medical Billing & Coding</a></li>
              <li><a href="pt.php">Physical Training</a></li>
              <li><a href="cj.php">Criminal Justice</a></li>
              <li><a href="ma.php">Medical Assistant</a></li>
            </ul>
          </li>
          <li class="<?php if ($page_name == 'accreditations') echo "active"; ?>"><a href="locations.php">Locations</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      
       
    </div>
    <!-- /.container-fluid --> 
  </div>
</nav>
<!-- ////////////////// END NAVIGATION ////////////////// -->

<!-- ////////////////// END HEADER ////////////////// -->


<!-- ////////////////// BEGIN MAIN CONTENT ////////////////// -->
<div class="container main_content">
  
  <div class="row">
    <div class="col-md-4 pull-right" id="ontop">
    	<!-- ////////////////// BEGIN FORM ////////////////// -->
        <div class="row formHeader">
        	<h2>REQUEST INFORMATION</h2>
        </div>
        <div class="row formBody">
        <form id="contact" name="contact" method="post" action="http://leads.leadpitt.com/post.do">
        	<div class="row">
            	<label>Select a Campus <span class="required">*</span></label>
                <select class="form-control" id="campus" name="campus" onChange="PopulatePrograms()" required>
                    <option value=""> </option>
                    <option value="Columbia">Columbia, Missouri</option>
                    <option value="Rogers">Rogers, Arkansas</option>
                    <option value="Springfield">Springfield, Missouri</option>
                    <option value="Topeka">Topeka, Kansas</option>
                    <option value="Online">Online</option>
                </select>
            </div>
            <div class="row">
            	<label>Select a Program <span class="required">*</span></label>
            	<select class="form-control" id="program" name="program" required>
                  <option value=""> </option>              
                </select>
            </div>
            <div class="row">
            	<div class="col-md-6">
                	<label>First Name <span class="required">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
                </div>
                <div class="col-md-6">
                	<label>Last Name <span class="required">*</span></label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-6">
                	<label>Phone <span class="required">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone_home" placeholder="" required>
                </div>
                <div class="col-md-6">
                	<label>Email <span class="required">*</span></label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="" required>
                </div>
            </div>
            <div class="row">
            	<button type="submit" class="" id="submit" value="">Submit</button>
                <p class="disclaimer">Clicking the “Submit” button above constitutes your express written consent to be called and/or texted by Bryan University at the number(s) you provided, regarding furthering your education. You understand that these calls may be generated using an automated technology.</p>
            </div>
            
            <input type="hidden" name="lp_offer_id" value="45" />
            <input type="hidden" name="lp_campaign_id" value="559ec6a90af38" />
            <input type="hidden" name="lp_redirect_url" value="http://explore.bryanu.edu/thank_you.php" />
			<script>
			  $("#contact").validate();
            </script>
        </form>
        </div>
        <!-- ////////////////// END FORM ////////////////// -->
    </div>
  	<div class="col-md-8">
    	<img src="img/slide-2.jpg" alt="Be Inspired. Be Changed. Be Ready." width="100%" />
    </div>
  </div>
  <div class="row alignCenter">
  	<h1>Welcome to BU</h1>
    <p>Bryan University can help you move your professional life in a new direction. With career-focused programs in business, health and wellness, criminal justice, healthcare, IT and technical, you can get your career on the fast-track toward success. No matter which program you choose, you can benefit from real-world training and relevant courses that directly apply to your field of study. When you earn your diploma or Associate degree, you can start a new professional journey with the skills to compete in today’s job market. Get your career on the fast track with an education that moves at the speed of life! Explore this site to learn more about the Bryan University experience.</p>
  </div>
  
</div>
<!-- ////////////////// END MAIN CONTENT ////////////////// -->


<!-- ////////////////// BEGIN FOOTER ////////////////// -->
<footer>
	<div class="container-fluid footer-content">
    	<div class="container">
          <div class="row">
              <div class="col-md-4">
                  <h3>Program Areas</h3>
                  <ul>
                      <li><a href="mbc.php">Medical Billing & Coding</a></li>
                      <li><a href="pt.php">Physical Training</a></li>
                      <li><a href="cj.php">Criminal Justice</a></li>
                      <li><a href="ma.php">Medical Assistant</a></li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <h3>Locations</h3>
                  <ul>
                      <li>Online Learning</li>
                      <li>Columbia, Missouri</li>
                      <li>Rogers, Arkansas</li>
                      <li>Springfield, Missouri</li>
                      <li>Topeka, Kansas</li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <h3>Call Us</h3>
                  <p>If you have questions about our programs or campus locations please call us at:</p>
                  <h2>1-877-566-6415</h2>
              </div>
          </div>
        </div>
    </div>
    <div class="container-fluid bottom-footer">
    	<div class="container">
          <div class="row">
              <div class="col-md-6">
                  <p>&copy; <?php echo date("Y"); ?> Bryan University. All Rights Reserved.</p>
              </div>
              <div class="col-md-6 rAlign">
                  <p><a href="http://bryanu.edu/explore/about-us/consumer-information/">Consumer Info</a>&nbsp;<a href="http://bryanu.edu/explore/disclosures/">Disclosures</a></p>
              </div>
          </div>
        </div>
     </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="./js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="./js/bootstrap.js"></script>
</body>
</html>
<!-- ////////////////// END FOOTER ////////////////// -->
