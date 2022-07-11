<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use App\Models\Termini;
use Notification;
use App\Notifications\SendEmailNotification;



class AdminController extends Controller
{
    public function addview(){

        if(Auth::id()) {
            if(Auth::user()->usertype==1) {
                return view('admin.add_doctor_view');
            }
            else {
                return redirect()->back();
            }
        }
    else {
        return redirect('login');
    }
    }

    public function upload(Request $request) {
        
        $doctor=new doctor;
        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;
        $doctor->emri=$request->emri;
        $doctor->numri=$request->numri;
        $doctor->specializimi=$request->specializimi;
        $doctor->dhoma=$request->dhoma;

        $doctor->save();

        return redirect()->back()->with('message','Regjistrim i suksesshem!...');

    }

        public function shfaq_terminet() {

            $data=termini::all();

            return view('admin.shfaq_terminet',compact('data'));

        }

        public function pranuar($id) {

            $data=termini::find($id);

            $data->status='pranuar';

            $data->save();

            return redirect()->back();
        }

        public function anuluar($id) {

            $data=termini::find($id);

            $data->status='anuluar';

            $data->save();

            return redirect()->back();
        }

        public function shfaq_doktorret() {

            $data=doctor::all();

            return view('admin.shfaq_doktorret',compact('data'));
        }

        public function anulo_doktorrin($id) {

            $data=doctor::find($id);

            $data->delete();

            return redirect()->back();
        }

        public function ndrysho_doktorret($id) {

            $data = doctor::find($id);

            return view('admin.ndrysho_doktorret',compact('data'));
        }

        public function editdoctor(Request $request , $id) {

            $doctor = doctor::find($id);

            $doctor->emri=$request->emri;

            $doctor->numri=$request->numri;

            $doctor->specializimi=$request->specializimi;

            $doctor->dhoma=$request->dhoma;

            $image=$request->file;

            if($image)
            {

     $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->file->move('doctorimage',$imagename);

            $doctor->image=$imagename;

            }

            $doctor->save();

            return redirect()->back()->with('message','Te dhenat jane ndryshuar me sukses!.');
        }

        public function emailview($id) {

            $data=termini::find($id);

            return view('admin.email_view',compact('data'));
        }

        public function dergo_email(Request $request,$id) {

            $data = termini::find($id);

            $details = [

                'greeting' => $request->greeting,
                'body' => $request->body,
                'actiontext' => $request->actiontext,
                'actionurl' => $request->actionurl,
                'endpart' => $request->endpart

            ];

            Notification::send($data,new SendEmailNotification($details));

            return redirect()->back();
        }

}
