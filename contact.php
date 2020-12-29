<?php
	include "include/header.php";
?>
<div class="section contact-background">
<div class="container">
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-8">
		<form>
			<div class="row form-group">
                <div class="col-sm-12 col-md-12 col-lg-8">
                  <label for="fullname">Full Name</label>
                  <input type="text" class="form-control" placeholder="Full Name">
                </div>
            </div>
			<div class="row form-group">
                <div class="col-sm-12 col-md-12 col-lg-8">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" placeholder="Email Address">
                </div>
            </div>
			<div class="row form-group">
                <div class="col-sm-12 col-md-12 col-lg-8">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" placeholder="Phone #">
                </div>
            </div>
			<div class="row form-group">
                <div class="col-sm-12 col-md-12 col-lg-8">
                  <label for="message">Message</label> 
                  <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
            </div>
			<div class="row form-group">
                <div class="col-sm-12 col-md-12 col-lg-8">
                  <input type="submit" value="Send Message" class="btn">
                </div>
            </div>
		</form>
	</div>
	<div class="col-sm-12 col-md-12 col-lg-4">
		<h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="font-weight-bold">Address</p>
              <p>203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="font-weight-bold">Phone</p>
              <p>+1 232 3235 324</p>

              <p class="font-weight-bold">Email Address</p>
              <p>youremail@domain.com</p>
	</div>
</div>
</div>
</div>
<?php
	include "include/footer.php";
?>