<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use App\Patient;
use App\User;
use App\Medication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title = 'Dashboard Main page';
        $user = Auth::user();
        $patients = Patient::where('doctor_id', $user->id)->orderBy('id','desc')->get();
        $serial = 1;
        return view('Doctors.Pages.Dashboard.DashboardMainPage',compact('title','user','patients','serial'));
    }

    public function medication($id)
    {
        $title = 'Medication page';
        $medications = Medication::where('patient_id', $id)->orderBy('id','desc')->get();
        $serial = 1;
        return view('Doctors.Pages.Dashboard.Medication',compact('title','medications','serial'));
    }

    public function create($id)
    {
        $data['title'] = 'Create Medication';
        $data['medication'] = Medication::findOrFail($id);
        $data['users'] = User::all();
        $data['patients'] = Patient::all();
        return  view('Doctors.Pages.Dashboard.Medication',$data);
    }


}
