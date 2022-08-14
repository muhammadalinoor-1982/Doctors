<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Patient;
use App\User;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function view()
    {
        $data['title']='Patient List';
        $data['patients']=Patient::orderBy('id','desc')->get();
        $data['serial']=1;
        return view('Doctors.pages.ListOfPatient.PatientsListPage',$data);
    }

    public function create()
    {
        $data['title']='New Patient';
        $data['users'] = User::all();
        return view('Doctors.pages.ListOfPatient.Add_and_Edit',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'    =>'required|email|unique:patients,email',
            'phone'    => 'required',
            'doctor_id' => 'required|exists:users,id',
            'status' => 'required',
        ]);

        $data = new Patient();
        $data->creator              = auth()->user()->name;
        $data->doctor_id           = $request->doctor_id;
        $data->name                 = $request->name;
        $data->email                = $request->email;
        $data->phone                = $request->phone;
        $data->dob                 = $request->dob;
        $data->age             = $request->age;
        $data->blood_group        = $request->blood_group;
        $data->height        = $request->height;
        $data->weight       = $request->weight;
        $data->religion           = $request->religion;
        $data->gender     = $request->gender;
        $data->marital_status      = $request->marital_status;
        $data->status               = $request->status;

        if ($request->file('image'))
        {
            $file = $request->file('image');
            $file_name = date('d.m.Y') . '_' . time() . '_' . rand(0000, 9999) . '_' . 'PATIENT_' . $file->getClientOriginalName();
            $file->move(public_path('Doctors/images/patients_images/'), $file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        session()->flash('message', 'Patient Created successfully');
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Patient Info';
        $data['editData'] = Patient::findOrFail($id);
        $data['users'] = User::all();
        return  view('Doctors.pages.ListOfPatient.Add_and_Edit',$data);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'email'    =>"required|email|unique:patients,email,$id"
        ]);

        $data = Patient::find($id);
        $data->updater              = auth()->user()->name;
        $data->doctor_id           = $request->doctor_id;
        $data->name                 = $request->name;
        $data->email                = $request->email;
        $data->phone                = $request->phone;
        $data->dob                 = $request->dob;
        $data->age             = $request->age;
        $data->blood_group        = $request->blood_group;
        $data->height        = $request->height;
        $data->weight       = $request->weight;
        $data->religion           = $request->religion;
        $data->gender     = $request->gender;
        $data->marital_status      = $request->marital_status;
        $data->status               = $request->status;

        if($request->file('image'))
        {
            $file = $request->file('image');
            @unlink(public_path('Doctors/images/patients_images/'.$data->image));
            $file_name = date('d.m.Y').'_'.time().'_'.rand(0000,9999).'_'.'PATIENT_'.$file->getClientOriginalName();
            $file->move(public_path('Doctors/images/patients_images/'),$file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        session()->flash('message','Patient Info has been updated successfully');
        return redirect()->route('dashboard');
    }

    public function delete($id)
    {
        $patient = Patient::findOrFail($id);

        if(file_exists('public/Doctors/images/patients_images/'.$patient->image) AND !empty($patient->image))

        {
            unlink('public/Doctors/images/patients_images/'.$patient->image);
        }

        $patient->delete();

        session()->flash('message','Patient has been deleted permanently');
        return redirect()->route('dashboard');
    }

    public function details($id)
    {
        $data['title'] = 'Patient Details';
        $data['editData'] = Patient::findOrFail($id);
        $data['users'] = User::all();
        return view('Doctors.pages.ListOfPatient.PatientsDetails',$data);
    }

}
