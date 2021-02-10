@extends('AdminLayout')
@section('AdminContent')
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                        <h3 class="mt-2">Update Question</h3>
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item"><a href="/AdminDashBoard">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="/questionsList">Questions</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol> 
                        <!--Edit Members form-->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-body">
                                        <form method="post" action="{{'EditQuestions'}}">
                                            @csrf                                            
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label><span class="required">*</span> Question</label>
                                                    <input type="hidden" name="id" value="{{$data->id}}">
                                                    <input type="text" value="{{$data->question}}" class="form-control" name="question">
                                                    </div>
                                                </div>                                                
                                            </div>    
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label><span class="required">*</span> A:</label>
                                                    <input type="text" value="{{$data->a}}" class="form-control" name="opa">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label>*</span> B:</label>
                                                    <input type="text" value="{{$data->b}}" class="form-control" name="opb">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label>*</span> C:</label>
                                                    <input type="text" value="{{$data->c}}" class="form-control" name="opc">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label><span class="required">*</span> D:</label>
                                                    <input type="text" value="{{$data->d}}" class="form-control" name="opd">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row"> 
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label>*</span> Answer:</label>
                                                    <select name="ans" class="form-control">
                                                        <option value="a">A</option>
                                                        <option value="b">B</option>
                                                        <option value="c">C</option>
                                                        <option value="d">D</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>                                                                                     
                                            <div class="form-group mb-0"><button type="submit" class="btn btn-primary btn-block">ADD</button></div>
                                        
                                        </form> 
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>                      
                </div>
            </main>                
        </div>
@endsection