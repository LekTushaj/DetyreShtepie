<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Termini;



class HomeController extends Controller
{
    public function redirect() {
        if(Auth::id()) {
            if(Auth::user()->usertype=='0') {
               $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else {
                return view('admin.home');
            }
        }
        else {
            return redirect()->back();
        }
    }

    public function index() {

        if(Auth::id()) {
            return redirect('home');
        }
        else {

        $doctor = doctor::all();
        return view('user.home',compact('doctor'));
        }
    }

    public function termini(Request $request) {

        $data = new termini;

        $data->emri=$request->emri;

        $data->email=$request->email;

        $data->tel=$request->tel;

       $data->date=$request->date;

        $data->message=$request->message;

        $data->emri_doktorrit=$request->emri_doktorrit;

        $data->doctor_id=$request->doctor_id;

        $data->emri_doktorrit=$request->emri_doktorrit;

        $data->status="In Progress";

        if(Auth::id()) {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Kerkesa per termin eshte derguar me sukses');
    }

       public function termini_im() {
            if(Auth::id()) {

               $userid=Auth::user()->id;
                $appoint=termini::where('user_id',$userid)->get();
            return view('user.termini_im',compact('appoint'));
            }
            else {
                return redirect()->back();
           }
       }

       public function cancel_appoint($id) {

            $data=termini::find($id);

            $data->delete();

            return redirect()->back();
       }


}
