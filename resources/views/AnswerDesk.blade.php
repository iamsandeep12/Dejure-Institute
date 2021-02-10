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
        <form method="post" action="/submitans">
        @csrf
            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-6">
                    <h4>{{Session::get('nextq')}}: {{$question->question}}</h4><br>
                    <input value="a" type="radio" name="ans" checked="true"> (A) <small>{{$question->a}}</small><br>
                    <input value="b" type="radio" name="ans"> (B) <small>{{$question->b}}</small><br>
                    <input value="c" type="radio" name="ans"> (C) <small>{{$question->c}}</small><br>
                    <input value="d" type="radio" name="ans"> (D) <small>{{$question->d}}</small><br>
                    <input value="{{$question->ans}}" style="visibility: hidden;" name="dbans">
                </div>
                <div class="col-3">
                    
                </div>
            </div> 

            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary float-right">Next</button>
                </div>
                <div class="col-5">
                
                </div>
            </div>
        </form>   
    </div>
    <br>
    </body>
</html>
