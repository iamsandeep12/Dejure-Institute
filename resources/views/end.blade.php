<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dejure Institure Of Law</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
</head>
<body>
<br>
    <div class="container">       
        <div class="row">
            <div class="col-3">
            
            </div>
            <div class="col-6">
				<h4>Enter Your Details & Finished the Quiz.</h4>
				<center>
                <label>Correct: <small>{{Session::get('correctans')}}</small></label>
                <label>InCorrect: <small>{{Session::get('wrongans')}}</small></label>
                <label>Result: <small>{{Session::get('correctans')}}/{{Session::get('correctans')+Session::get('wrongans')}}</small></label>   
                </center><br>             
                <form id="contact-form" method="post" action="AddResults">
						@csrf
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Full Name*</label>
										<input name="name" id="name" class="form-control" type="text" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Contact*</label>
										<input name="contact" id="contact" class="form-control" type="text" pattern="[9][0-9]{9}"required>
									</div>
								</div>
                            </div>
                            <div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">										
										<input name="result" id="result" type="hidden" class="form-control" value="{{Session::get('correctans')}}/{{Session::get('correctans')+Session::get('wrongans')}}">
									</div>
                                </div>
                            </div>			        
							<div class="form-group mb-0">
								<input class="btn btn-primary center" type="submit" value="Finish Quiz">
							</div>
							   
						</fieldset>
					</form>	               
            </div>
            <div class="col-3">
            
            </div>
        </div>             
    </div><br>
	</body>
</html>
