<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::paginate(50);

        return view ('patient.list', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->patient_id = 'p'.rand(10000,99999);
        $patient->patient_name = $request->patient_name;
        $patient->patient_ic = $request->patient_ic;
        $patient->patient_email = $request->patient_email;
        $patient->patient_no = $request->patient_no;
        $patient->patient_address = $request->patient_address;
        $patient->blood_type = $request->blood_type;
        $patient->patient_weight = $request->patient_weight . " Kg";
        $patient->patient_height = $request->patient_height . " cm";
        $patient->patient_mhistory = $request->patient_mhistory;
        $patient->created_at = today();
        $patient->updated_at = today();

        $patient-> save();
        return redirect ('patientlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::destroy($id);
            return redirect('patientlist');
    }
}
