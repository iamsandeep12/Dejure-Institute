@extends('AdminLayout')
@section('AdminContent')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-2">All Questions</h3>
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item"><a href="/AdminDashBoard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Questions</li> &nbsp; &nbsp;
                            <li><a class="btn-primary" title="New Questions" href="/AddNewQuestion"><i class="fas fa-plus-circle"></i></a></li>
                        </ol>               
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="bg-primary">
                                            <tr>
                                                <td>ID</td>
                                                <td>Questions</td>                                                
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tfoot class="bg-primary">
                                            <tr>
                                                <td>ID</td>
                                                <td>Questions</td>                                                
                                                <td>Action</td>
                                            </tr>
                                        </tfoot>
                                        <tbody>  
                                            @foreach($data as $item)                                          
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->question}}</td>                                                
                                                <td> <a href='deletequestions/{{$item->id}}'><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                                                     <a href='EditQuestions/{{$item->id}}'><i class="fa fa-edit"></i></a>
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