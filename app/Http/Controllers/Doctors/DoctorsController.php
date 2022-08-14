<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function view()
    {
        $data['title'] = 'Doctor List Page';
        $data['users'] = User::orderBy('id','desc')->get();
        $data['serial'] = 1;
        return  view('Doctors.pages.ListOfDoctor.DoctorsListPage',$data);
    }

    public function create()
    {
        $data['title']='New Doctor';
        return view('Doctors.pages.ListOfDoctor.Add_and_Edit',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'    =>'required|email|unique:users,email',
            'phone'    => 'required',
            'degree'   => 'required',
            'usertype' => 'required',
            'status'   => 'required',
            'image'    => 'required'
        ]);

        $data = new User();
        $data->creator              = auth()->user()->name;
        $data->name                 = $request->name;
        $data->email                = $request->email;
        $data->phone                = $request->phone;
        $data->degree               = $request->degree;
        $data->usertype               = $request->usertype;
        $data->status               = $request->status;

        if ($request->file('image')) {
            $file = $request->file('image');
            $file_name = date('d.m.Y') . '_' . time() . '_' . rand(0000, 9999) . '_' . 'DOCTOR_' . $file->getClientOriginalName();
            $file->move(public_path('Doctors/images/doctors_images/'), $file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        session()->flash('message', 'New Doctor Posted successfully');
        return redirect()->route('doctor.view');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Doctors Info';
        $data['editData'] = User::findOrFail($id);
        return  view('Doctors.pages.ListOfDoctor.Add_and_Edit',$data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'email'    =>"required|email|unique:users,email,$id"
        ]);

        $data = User::find($id);
        $data->updater              = auth()->user()->name;
        $data->name                 = $request->name;
        $data->email                = $request->email;
        $data->phone                = $request->phone;
        $data->degree               = $request->degree;
        $data->usertype             = $request->usertype;
        $data->status               = $request->status;

        if($request->file('image'))
        {
            $file = $request->file('image');
            @unlink(public_path('Doctors/images/doctors_images/'.$data->image));
            $file_name = date('d.m.Y').'_'.time().'_'.rand(0000,9999).'_'.'DOCTOR_'.$file->getClientOriginalName();
            $file->move(public_path('Doctors/images/doctors_images/'),$file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        session()->flash('message','Doctors Info has been updated successfully');
        return redirect()->route('doctor.view');
    }

    public function delete($id)
    {
        $doctor = User::findOrFail($id);

        if(file_exists('public/Doctors/images/doctors_images/'.$doctor->image) AND !empty($doctor->image))
        {
            unlink('public/Doctors/images/doctors_images/'.$doctor->image);
        }

        $doctor->delete();

        session()->flash('message','Doctors Info has been deleted permanently');
        return redirect()->route('doctor.view');
    }

    public function details($id)
    {
        $data['title'] = 'Doctors Details';
        $data['editData'] = User::findOrFail($id);
        return view('Doctors.pages.ListOfDoctor.DoctorsDetails',$data);
    }
}
