<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'gender'=>'required',
            'phone'=>'required'

        ]);

        $patient = Patient::create([

            'patient_code'=>'PAT'.time(),

            'name'=>$request->name,

            'gender'=>$request->gender,

            'dob'=>$request->dob,

            'phone'=>$request->phone,

            'email'=>$request->email,

            'address'=>$request->address

        ]);

        return response()->json([

            'message'=>'Patient created successfully',
            'data'=>$patient

        ],201);

    }
}