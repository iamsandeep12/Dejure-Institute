@extends('AdminLayout')
@section('AdminContent')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-2">Result of All Students</h3>
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item"><a href="/AdminDashBoard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Result</li>
                        </ol>               
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="bg-primary">
                                            <tr>
                                                <td>ID</td>
                                                <td>Name</td>  
                                                <td>Contact</td>   
                                                <td>Result</td>                                           
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tfoot class="bg-primary">
                                            <tr>
                                                <td>ID</td>
                                                <td>Name</td>  
                                                <td>Contact</td>   
                                                <td>Result</td>                                           
                                                <td>Action</td>
                                            </tr>
                                        </tfoot>
                                        <tbody>  
                                            @foreach($data as $item)                                          
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->Name}}</td> 
                                                <td>+977-{{$item->Conatct}}</td>
                                                <td>{{$item->Results}}</td>                                                 
                                                <td> <a href='deletequestions/{{$item->id}}'><i class="fa fa-trash"></i></a>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                </main>                
            </div>
@endsection