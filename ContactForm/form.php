<?php
require_once('c:\xampp\htdocs\moodle\config.php');
require_login();
$PAGE->set_url('/form.php');

global $SESSION;
$SESSION->city = 'city';

$city = $USER->city;


?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <title>Training Request Form</title>   
</head>

<body>   

<div class="staticpage-wrapper container">
	<h1 class="staticpage-title">Training Request Form</h1>
    <div class="staticpage-content">
	    <div class="contact-wrapper">
		    <div class="contact-intro mb-5">
			    <p>This form was built using HTML and PHP. </p>
			 
		    </div>
	        <div class="contact-form-box rounded p-lg-5 mb-5">
				<form id="contact-form" class="contact-form" action="emailer.php" method="get">
					<div class="form-row">                                                           
						<div class="form-group col-12 col-xl-6">
							<label for="Training_name">Name of training: </label>
							<input type="text" class="form-control" id="Training_name" name="Training_name" placeholder="Name of training" minlength="2" maxlength="45" required="required">
						</div>                    
						<div class="form-group col-12 col-xl-6">
							<label for="date">Date of training: </label>
							<input type="date" class="form-control" id="date" name="date" placeholder="Date" required="required">
						</div>


						<div id="wrapper">
  						<label for="Accomodation">Do you require accomodation / flights?</label>
						<p>
							<input type="radio" name="Accomodation and/or flights needed" id="RadioYes" value="Yes">Yes</input>
						</p>
						<p>
							<input type="radio" name="Accomodation and/or flights needed" id="RadioNo" value="No">No</input>
						</p>
						</div>

						
						<div class="form-group col-12">
							<label for="Comment">Comments:</label><br>
							<textarea class="form-control" id="Comment" name="Comment" placeholder="Enter your comments" rows="10"></textarea>
						</div>
						
                        
                       <input type="hidden" id="city" name="city" value="<?php echo $city; ?> ">
                  
						<div class="form-group col-12">
							<input type="submit" name="submit" id="submit" value="Send" class="btn btn-block btn-primary py-2">
							
						</div>                           
					</div>
				</form>
			</div>
	    </div> 
	</div>
</div>             
</body>
</HTML>

 