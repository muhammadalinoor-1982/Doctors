<?php

namespace App\Http\Controllers\Medications;

use App\Http\Controllers\Controller;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use App\Medication;

class MedicationsController extends Controller
{

    public function watch()
    {
        $data['title']='Medication List';
        $data['medications']=Medication::orderBy('id','desc')->get();
        $data['serial']=1;
        return view('Doctors.pages.ListOfMedication.MedicationListPage',$data);
    }

    public function view()
    {
        $data['title']='Medication List';
        $data['medications']=Medication::orderBy('id','desc')->get();
        $data['serial']=1;
        return view('Doctors.pages.ListOfMedication.MedicationListPage',$data);
    }

    public function create()
    {
        $data['title']='New Medication';
        $data['users'] = User::all();
        $data['patients'] = Patient::all();
        return view('Doctors.pages.ListOfMedication.Add_and_Edit',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'doctor_id' => 'required|exists:users,id',
            'patient_id' => 'required|exists:patients,id',
            'status' => 'required',
        ]);

        $data = new Medication();
        $data->creator              = auth()->user()->name;
        $data->doctor_id           = $request->doctor_id;
        $data->patient_id           = $request->patient_id;
        $data->medicine                 = $request->medicine;
        $data->advice                = $request->advice;
        $data->lab_test                = $request->lab_test;
        $data->next_visit                 = $request->next_visit;
        $data->status               = $request->status;

        if ($request->file('lab_report'))
        {
            $file = $request->file('lab_report');
            $file_name = date('d.m.Y') . '_' . time() . '_' . rand(0000, 9999) . '_' . 'Lab_Report_' . $file->getClientOriginalName();
            $file->move(public_path('Doctors/lab_report/'), $file_name);
            $data['lab_report'] = $file_name;
        }

        $data->save();

        $notification = array(
            'message' => 'Medication Created successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('dashboard')->with($notification);

        //session()->flash('message', 'Medication Created successfully');
        //return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Medication Info';
        $data['editData'] = Medication::findOrFail($id);
        $data['users'] = User::all();
        $data['patients'] = Patient::all();
        return  view('Doctors.pages.ListOfMedication.Add_and_Edit',$data);
    }

    public function update(Request $request, $id)
    {

        $data = Medication::find($id);
        $data->updater              = auth()->user()->name;
        $data->doctor_id           = $request->doctor_id;
        $data->patient_id           = $request->patient_id;
        $data->medicine                 = $request->medicine;
        $data->advice                = $request->advice;
        $data->lab_test                = $request->lab_test;
        $data->next_visit                 = $request->next_visit;
        $data->status               = $request->status;

        if($request->file('lab_report'))
        {
            $file = $request->file('lab_report');
            @unlink(public_path('Doctors/lab_report/'.$data->lab_report));
            $file_name = date('d.m.Y').'_'.time().'_'.rand(0000,9999).'_'.'Lab_Report_'.$file->getClientOriginalName();
            $file->move(public_path('Doctors/lab_report/'),$file_name);
            $data['lab_report'] = $file_name;
        }

        $data->save();

        $notification = array(
            'message' => 'Medication Info has been updated successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('dashboard')->with($notification);

        //session()->flash('message','Medication Info has been updated successfully');
        //return redirect()->route('dashboard');
    }

    public function delete($id)
    {
        $medication = Medication::findOrFail($id);

        if(file_exists('public/Doctors/lab_report/'.$medication->lab_report) AND !empty($medication->lab_report))

        {
            unlink('public/Doctors/lab_report/'.$medication->lab_report);
        }

        $medication->delete();

        $notification = array(
            'message' => 'Medication has been deleted successfully',
            'alert-type' => 'warning'
        );
        return redirect()->route('dashboard')->with($notification);

        //session()->flash('message','Medication has been deleted successfully');
        //return redirect()->route('dashboard');
    }

    public function details($id)
    {
        $data['title'] = 'Medication Details';
        $data['editData'] = Medication::findOrFail($id);
        $data['users'] = User::all();
        $data['patients'] = Patient::all();
        return view('Doctors.pages.ListOfMedication.MedicationDetails',$data);
    }
}
