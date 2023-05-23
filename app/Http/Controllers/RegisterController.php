<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;


class RegisterController extends Controller
{
    public function create(){
        return view('frontend.registration.add');
    }


    public function index()
    {
        return view('backend.registration.manage',[
            'registrations'=>Register::orderBy('id', 'asc')->take(500)->get()]);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'image' => 'required',
            
        // ]);

        Register::saveData($request);
        return redirect()->route('registrations')->with('success','Registration Info Create successfully');
}

public function destroy($id)
    {
        $this->registration = Register::find($id);

        if(file_exists($this->registration->image)){
            unlink($this->registration->image);
        }

        if(file_exists($this->registration->id_card_image)){
            unlink($this->registration->id_card_image);
        }

        if(file_exists($this->registration->parent_id_card_image)){
            unlink($this->registration->parent_id_card_image);
        }

        if(file_exists($this->registration->cv)){
            unlink($this->registration->cv);
        }

        $this->registration->delete();
        return redirect()->route('registrations')->with('success','Registration Delete successfully');

}

public function deleteMultiple(Request $request)
    {
        $ids = $request->ids;
        Register::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'success'=>"Registration deleted successfully."]);
         
    }

}
