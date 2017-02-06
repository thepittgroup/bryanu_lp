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
	            <input type="text" class="form-control" id="email_address" name="email_address" placeholder="" required>
	        </div>
	    </div>
	    <div class="row">
	    	<button type="submit" class="" id="submit" value="">Submit</button>
	        <p class="disclaimer">Clicking the “Submit” button above constitutes your express written consent to be called and/or texted by Bryan University at the number(s) you provided, regarding furthering your education. You understand that these calls may be generated using an automated technology.</p>
	    </div>
	    
	    <input type="hidden" name="lp_offer_id" value="45" />
	    <input type="hidden" name="lp_campaign_id" value="559ec6a90af38" />
        <input type="hidden" name="csrc" value="<?php if(isset($_SESSION['leadsource'])) { echo $_SESSION['leadsource'];} else echo "PPC"; ?>"/> 
        <input type="hidden" name="search" value="<?php echo $_SESSION['utm_source']; ?>"/>     
        <input type="hidden" name="keyword" value="<?php echo $_SESSION['utm_term']; ?>"/> 
        <input type="hidden" name="tcpa_compliant" value="Yes" />
	    <input type="hidden" name="lp_redirect_url" value="http://explore.bryanu.edu/thank_you.php" />
		<script>
		  jQuery("#contact").validate();
	    </script>
	</form>
</div>