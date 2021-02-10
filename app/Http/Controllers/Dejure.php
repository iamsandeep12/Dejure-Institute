<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Questions;
use App\Models\Contacts;
use App\Models\Results;
use Illuminate\Support\Facades\Session;

class Dejure extends Controller
{
    //
    public function Home()
    {
        return view('Home');
    }
    public function About()
    {
        return view('About');
    }
    public function Contact()
    {
        return view('Contact');
    }
    public function Courses()
    {
        return view('Courses');
    }
    public function Package()
    {
        return view('Package');
    }
    public function questionsList()
    {
        $data= Questions::all();
        return view('questionsList',["data"=>$data]);
    }
    public function sign_in(Request $request)
    {
        $request->validate([
    		'username'=>'required',
    		'password'=>'required'
    	]);

    	$userCheck=User::where(['username'=>$request->username,'password'=>$request->password])->count();
    	if($userCheck>0){
            $adminData=User::where(['username'=>$request->username,'password'=>$request->password])->first();
            session(['adminData'=>$adminData]);
    		return redirect('AdminDashBoard');
    	}else{
    		return redirect('login')->with('error','Invalid username/password!!');
    	}
    }
    public function logout(){
        Auth::logout();
        return redirect('Home');
    }
    public function AdminDashBoard()
    {
        return view('AdminDashBoard');
    }
    public function AddNewQuestion()
    {
        return view('AddNewQuestion');
    }
    public function Add(Request $req)
    {
        $this->validate(request(), [
            'question' => 'required',
            'opa' => 'required',
            'opb' => 'required',
            'opc' => 'required',
            'opd' => 'required',
            'ans' => 'required'
        ]);
        $q = new Questions;
        $q->question=$req->input('question');
        $q->a=$req->input('opa');
        $q->b=$req->input('opb');
        $q->c=$req->input('opc');       
        $q->d=$req->input('opd');
        $q->ans=$req->input('ans');
        $q->save();
        return redirect('questionsList');  
    }
    public function EditQuestions($id)
    {
        $data= Questions::find($id);
        return view('UpdateQuestions',["data"=>$data]);
    }
    public function updatequestions(Request $req)
    {         
        $this->validate(request(), [
            'question' => 'required',
            'opa' => 'required',
            'opb' => 'required',
            'opc' => 'required',
            'opd' => 'required',
            'ans' => 'required'
        ]);
        $q = Questions::find($req->input('id'));
        $q->question=$req->input('question');
        $q->a=$req->input('opa');
        $q->b=$req->input('opb');
        $q->c=$req->input('opc');       
        $q->d=$req->input('opd');
        $q->ans=$req->input('ans');
        $q->save();
        return redirect('questionsList'); 
    }
    public function deletequestions($id)
    {
        Questions::find($id)->delete();
        return redirect('questionsList'); 
    }
    public function AddContact(Request $req)
    {
        $this->validate(request(), [
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'address' => 'required',
            'message' => 'required'
        ]);
        $ct = new Contacts;
        $ct->Name=$req->input('name');
        $ct->Contact=$req->input('contact');
        $ct->Email=$req->input('email');
        $ct->Address=$req->input('address');       
        $ct->Message=$req->input('message');
        $ct->save();
        return redirect('Contact');  
    }
    public function ContactsList()
    {
        $data= Contacts::all();
        return view('ContactsList',["data"=>$data]);
    }
    public function DeleteEnquiry($id)
    {
        Contacts::find($id)->delete();
        return redirect('ContactsList'); 
    }
    public function startquiz()
    {
        Session::put('nextq', '1');
        Session::put('wrongans', '0');
        Session::put('correctans', '0');
        $q= Questions::all()->first(); 
        if ($q === null) {
            return view('Home');
        } 
        else 
        {
            return view('AnswerDesk',["question"=>$q]);
        }     
        
    }
    public function submitans(Request $req)
    {
        $nextq=Session::get('nextq');
        $wrongans=Session::get('wrongans');
        $correctans=Session::get('correctans');
        $this->validate(request(), [  
            'ans' => 'required',
            'dbans'=> 'required'
        ]);
       $nextq++;
       if($req->dbans==$req->ans)
       {
           $correctans++;
       }
       else
       {
            $wrongans++;
       }
        Session::put("nextq", $nextq);
        Session::put("wrongans", $wrongans);
        Session::put("correctans", $correctans);

        $i=0;
        $questions= Questions::all();

        foreach($questions as $question)
        {
            $i++;
            if($questions->count() < $nextq)
            {
                return view('end');
            }
            if($i==$nextq)
            {
                return view('AnswerDesk', ["question"=>$question]);                
            }
        }
    }
    public function AddResults(Request $req)
    {
        $this->validate(request(), [
            'name' => 'required',
            'contact' => 'required',
            'result' => 'required'            
        ]);
        $ct = new Results;
        $ct->Name=$req->input('name');
        $ct->Conatct=$req->input('contact');
        $ct->Results=$req->input('result');        
        $ct->save();
        return redirect('Home'); 
    }
    public function ResultsList()
    {
        $data= Results::all();
        return view('ResultsList',["data"=>$data]);
    }
    
}
