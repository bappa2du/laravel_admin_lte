<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>btcl</title>
	<base href="/">
    <!-- Bootstrap -->
    <link href="assets/web/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom css -->
    <link href="assets/web/css/style.css" rel="stylesheet">
	<!-- font-awesome -->
	<link href="assets/web/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	 <link href="assets/web/css/jquery.signaturepad.css" rel="stylesheet">
	<!-- google fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
  </head>
  <body>
  
   <div class="container">
   <div class="form_wrapper">
	<div class="row">
		<div class="col-md-12">
			<header class="text-center">
				<img src="assets/web/images/logo.png" class="img-responsive center-block" alt="">
				<h1>Bangladesh Telecommunications Company Limited</h2>
				<p>DIGITAL DATA NETWORK ACCESS APPLICATION FORM</p>
				
				
			</header>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="note">
				<h3>Please read the following note before filling out this form.</h3>
				<p><span class="denger"><i class="fa fa-bell"></i> Note:</span> By completing this form and submitting it to us, you are agreeing to be bound by the terms and conditions
					set forth in the Digital Data Network Access Agreement. You must have to submit the following papers along
					with the filled up Application Form.</p>
					<p><i class="fa fa-hand-o-right color_icon"></i> Network Diagram</p>
					<p><i class="fa fa-hand-o-right color_icon"></i> Attested 2 copies of Passport Size Photograph (for private applicant).</p>
					<p><i class="fa fa-hand-o-right color_icon"></i> Related supporting documents if the account is eligible for discount.</p>
			</div>
		</div>
	</div>
  
   
   
   

<div class="row">
    <div class="col-md-10 col-md-offset-1">
    	<form role="form">
			<div class="form_headding"><h3>REGISTRANT INFORMATION</h3></div>
			<!-- <hr class="colorgraph"> -->
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Registrant Name *</label>
					<div class="form-group">
                        <input type="text" name="reg_name" id="reg_name" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Address *</label>
					<div class="form-group">
						<input type="text" name="address" id="address" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>City *</label>
					<div class="form-group">
						<input type="text" name="city" id="city" class="form-control input-lg" placeholder="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Postal Code *</label>
					<div class="form-group">
                        <input type="number" name="number" id="number" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Email Address *</label>
					<div class="form-group">
						<input type="text" name="email" id="email" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Phone *</label>
					<div class="form-group">
						<input type="number" name="number" id="number" class="form-control input-lg" placeholder="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<label>Fax *</label>
					<div class="form-group">
                        <input type="text" name="fax" id="fax" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
				 <label>Registrant Category</label>
					<select id="subject" name="subject" class="form-control input-lg">
						<option value="na" selected="">Choose One:</option>
						<option value="service">Educational</option>
						<option value="suggestions">Government</option>
						<option value="product">Industrial</option>
						<option value="product">ISP</option>
						<option value="suggestions">International Org.</option>
						<option value="product">Foreign Org.</option>
						<option value="product">Others.</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<label>Registrant Status</label>
					<select id="subject" name="subject" class="form-control input-lg">
						<option value="na" selected="">Choose One:</option>
						<option value="service">Government</option>
						<option value="suggestions">Autonomous</option>
						<option value="product">Private</option>
						<option value="product">Others</option>
					</select>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
				 <label>Connection Type</label>
					<select id="subject" name="subject" class="form-control input-lg">
						<option value="na" selected="">Choose One:</option>
						<option value="service">Permanent</option>
						<option value="suggestions">Temporary</option>
						<option value="product">Others.</option>
					</select>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
				<label style="margin-top:20px;">Connection Eligible for Discount
				 <input type="checkbox" name="sex" value="yes" checked> Yes
				<input type="checkbox" name="sex" value="no"> No
				</label>
				</div>
			</div>
				<!-- <div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3">
						<span class="button-checkbox">
							<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
							<input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
						</span>
					</div>
				</div>
			<hr class="colorgraph"> -->
			<div class="form_headding"><h3>CONTACT INFORMATION</h3></div>
			<h3>[A] Administrative Contact</h3>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Full Name *</label>
					<div class="form-group">
                        <input type="text" name="full_name" id="full_name" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Title/Occupation *</label>
					<div class="form-group">
						<input type="text" name="title" id="title" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Organisation (if applicable) *</label>
					<div class="form-group">
						<input type="text" name="subject" id="subject" class="form-control input-lg" placeholder="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Address *</label>
					<div class="form-group">
                        <input type="text" name="address" id="address" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>City *</label>
					<div class="form-group">
						<input type="text" name="city" id="city" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Post Code *</label>
					<div class="form-group">
						<input type="number" name="number" id="number" class="form-control input-lg" placeholder="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Email Address *</label>
					<div class="form-group">
                        <input type="text" name="email" id="email" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Phone *</label>
					<div class="form-group">
						<input type="number" name="number" id="number" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Fax *</label>
					<div class="form-group">
						<input type="fax" name="fax" id="fax" class="form-control input-lg" placeholder="">
					</div>
				</div>
			</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div method="post" action="" class="sigPad">
					<label>Signature *</label>
					<ul class="sigNav">
					  <li class="drawIt"><a href="#draw-it" >Draw It</a></li>
					  <li class="clearButton"><a href="#clear">Clear</a></li>
					</ul>
					<div class="sig sigWrapper">
					  <div class="typed"></div>
					  <canvas class="pad" width="198" height="55"></canvas>
					  <input type="hidden" name="output" class="output">
					</div>
				<!-- <button type="submit">I accept the terms of this agreement.</button> -->
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<label>Date *</label>
				<div class="form-group">
					<input type="date" name="date" id="date" class="form-control input-lg" placeholder="">
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<label>Choose image *</label>
				<div class="form-group">
					<input id="file-input" type="file"/>
				</div>
			</div>
		</div>

		
			<h3>[B] Technical Contact</h3>
			<p>If this information is the same as the Administrative Contact information, you may keep it
				blank. Otherwise, please complete this section with the appropriate information.</p>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Full Name *</label>
					<div class="form-group">
                        <input type="text" name="full_name" id="full_name" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Title/Occupation *</label>
					<div class="form-group">
						<input type="text" name="title" id="title" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Organisation (if applicable) *</label>
					<div class="form-group">
						<input type="text" name="subject" id="subject" class="form-control input-lg" placeholder="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Address *</label>
					<div class="form-group">
                        <input type="text" name="address" id="address" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>City *</label>
					<div class="form-group">
						<input type="text" name="city" id="city" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Post Code *</label>
					<div class="form-group">
						<input type="number" name="number" id="number" class="form-control input-lg" placeholder="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Email Address *</label>
					<div class="form-group">
                        <input type="text" name="email" id="email" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Phone *</label>
					<div class="form-group">
						<input type="number" name="number" id="number" class="form-control input-lg" placeholder="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<label>Fax *</label>
					<div class="form-group">
						<input type="fax" name="fax" id="fax" class="form-control input-lg" placeholder="">
					</div>
				</div>
			</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div method="post" action="" class="sigPad">
					<label>Signature *</label>
					<ul class="sigNav">
					  <li class="drawIt"><a href="#draw-it" >Draw It</a></li>
					  <li class="clearButton"><a href="#clear">Clear</a></li>
					</ul>
					<div class="sig sigWrapper">
					  <div class="typed"></div>
					  <canvas class="pad" width="198" height="55"></canvas>
					  <input type="hidden" name="output" class="output">
					</div>
				<!-- <button type="submit">I accept the terms of this agreement.</button> -->
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<label>Date *</label>
				<div class="form-group">
					<input type="date" name="date" id="date" class="form-control input-lg" placeholder="">
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<label>Choose image *</label>
				<div class="form-group">
					<input id="file-input" type="file"/>
				</div>
			</div>
		</div>
		<div class="submit_button">
			<button type="button" class="btn btn-default">Reset</button>
			<button type="button" class="btn btn-primary">Save</button>
		</div>
		</form>
	</div>
</div>

    </div>
  </div> 
   
   
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/web/js/bootstrap.min.js"></script>
	
	
	<script src="assets/web/js/jquery.signaturepad.js"></script>
  <script>
    $(document).ready(function() {
      $('.sigPad').signaturePad({drawOnly:true});
    });
  </script>
  <script src="assets/web/js/json2.min.js"></script>
  </body>
</html>