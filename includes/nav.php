<!-- ////////////////// BEGIN NAVIGATION ////////////////// -->
<nav class="navbar navbar-default">
  <div class="container-fluid top-phone">
    <div class="container">
      <p><span class="call">Call Us:</span>&nbsp; <?php echo $phone; ?></p>
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
          <li class="dropdown <?php if ($page_name == 'programs') echo "active"; ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Programs<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="mbc.php">Medical Billing & Coding</a></li>
              <li><a href="pt.php">Personal Trainer</a></li>
              <li><a href="cj.php">Criminal Justice</a></li>
              <li><a href="ma.php">Medical Assistant</a></li>
              <li><a href="hvac.php">Heating, Ventilation, Air Conditioning and Refrigeration </a></li>
            </ul>
          </li>
          <li class="<?php if ($page_name == 'locations') echo "active"; ?>"><a href="locations.php">Locations</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      
       
    </div>
    <!-- /.container-fluid --> 
  </div>
</nav>
<!-- ////////////////// END NAVIGATION ////////////////// -->