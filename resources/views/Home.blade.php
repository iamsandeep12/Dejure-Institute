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


<!-- Services Start -->
<div class="rs-services rs-services-style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	    	<i class="fa fa-american-sign-language-interpreting rs-animation-scale-up"></i>                    	        
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Trending Courses</h4>
                    	        <p>We Run Preparation Classes For B.A.LL.B. , LLB & LLM Entrance.</p>
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">                    	        
                    	        <i class="fa fa-book rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Books & Liberary</h4>
                    	        <p>We Provide Free Books, No extra charges.</p>
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	        <i class="fa fa-user rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Certified Teachers</h4>
                    	        <p>Classes by experienced & certified law teachers</p>
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	        <i class="fa fa-graduation-cap rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Certification</h4>
                    	        <p>We Provide Certificate Once You Complete The Courses</p>
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Services End -->

		<!-- About Us Start -->
        <div id="rs-about" class="rs-about sec-spacer">
            <div class="container">				
				<div class="about-desc">
                	<h2 class="text-center"><a href="">WELCOME TO DEJURE INSTITUTE OF LAW.</a> </h2>  
                	<p>Dejure Institute of Law and Legal Affairs Pvt. Ltd. is a company
intended to promote rule of law by enhancing quality education and
producing legal manpower through workshop, training and
conference on legal issues. Future more we run preparation classes for
B.A.LL.B. , LLB & LLM Entrance. We also run preparation class for
Advocate license. We have published objective book for B.A.LL.B.
Entrance named “MCQS: Password to BALLB”. One of our major
goal as institution is to promote legal Education by promoting
research culture in Nepal. We believe in providing common learning
platform for those who wants to pursue their carrier in legal field. We
promote cooperation and mutual understanding to build the
foundation of our legal system through coordination among various
agencies.
</p>
                </div>                
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12">                    	
						<div id="accordion" class="rs-accordion-style1">
						    <div class="card">
						        <div class="card-header" id="headingOne">
						            <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Registration Process:
						            </h3>
						        </div>
						        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						            <div class="card-body">
										<ol>
											<li>Each Students need to pay registration charge on time .</li>
											<li>Registration charge should be paid through e-sewa/ Khalti or Bank transfer.</li>
											<li>Students need to send the copy /photos of payment through mail or massage for confirmation.</li>
											<li>Each Student shall be provided with individual user name and code after registration.</li>
											<li>Scholarship and Discount shall be provided based on the individual performance in daily test during online class.</li>
											<li>No trial classes are available and 40 students shall only be admitted for virtual class on first come first basis. There shall be no trial classes.</li>
											<li>Students shall contact at 9843651534/9816239309 for technical information regarding online class.</li>
										</ol>										
									</div>
						        </div>
						    </div>
						    
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us End -->
@endsection