@extends('layout')
@section('maincontent')

<!-- Slider Area Start -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
	  <img src="images/slider/home1/slide2.jpg" alt="Slider1" width="100%" height="400">
		<div class="carousel-caption">
		<h1>Dejure Institute Of Law</h1>
			<p>No 1 Institute of Law in Nepal.</p>
		</div>
    </div>
    <div class="carousel-item">
	  <img src="images/slider/home1/slide3.jpg" alt="Slider2" width="100%" height="400">
	  	<div class="carousel-caption">
		  <h1>Dejure Institute Of Law</h1>
			<p>No 1 Institute of Law in Nepal.</p>
		</div>
    </div>
    <div class="carousel-item">
	  <img src="images/slider/home1/slide1.jpg" alt="Slider3" width="100%" height="400">
	  	<div class="carousel-caption">
		  <h1>Dejure Institute Of Law</h1>
			<p>No 1 Institute of Law in Nepal.</p>
	  	</div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
        	
<!-- Slider Area End -->



<!-- Contact Section Start -->
<div class="contact-page-section sec-spacer">
        	<div class="container">
        		<div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.45388768615!2d85.31747231506198!3d27.703268982793567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c28fbf12c5%3A0x481ca8f8a791493a!2sdejure%20institute%20of%20law!5e0!3m2!1sen!2snp!4v1611383885617!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
        		<div class="row contact-address-section">
    				<div class="col-md-4 pl-0">
    					<div class="contact-info contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address</h4>
    						<p>Adwaitmarg, Putalisadak</p>
    						<p>Just Behind Nepal Law Campus</p>
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="contact-info contact-phone">
    						<i class="fa fa-phone"></i>
    						<h4>Phone Number</h4>
    						<a href="tel:+977-9843651534">+977-9843651534</a>
    						<a href="tel:+977-9816239309">+977-9816239309</a>
    					</div>
    				</div>
    				<div class="col-md-4 pr-0">
    					<div class="contact-info contact-email">
    						<i class="fa fa-envelope"></i>
    						<h4>Email Address</h4>
    						<a href="mailto:infodejure1@domain.com"><p>infodejure1@domain.com</p></a>
    						<p>Dejure Institure Of Law</p>
        				</div>
        			</div>
        		</div>

        		<div class="contact-comment-section">
        			<h3>Leave Comment</h3>
                    <div id="form-messages"></div>
					<form id="contact-form" method="post" action="AddContact">
						@csrf
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Full Name*</label>
										<input name="name" id="name" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Contact*</label>
										<input name="contact" id="lname" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="email" id="email" class="form-control" type="email">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Address *</label>
										<input name="address" id="address" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row"> 
								<div class="col-md-12 col-sm-12">    
									<div class="form-group">
										<label>Message *</label>
										<textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
									</div>
								</div>
							</div>							        
							<div class="form-group mb-0">
								<input class="btn-send" type="submit" value="Submit Now">
							</div>
							   
						</fieldset>
					</form>						
        		</div>
        	</div>
        </div>
        <!-- Contact Section End -->  

@endsection