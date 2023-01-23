<?php

namespace App\Http\Controllers;
use App\Models\Prescription;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = DB::table('prescriptions')
        ->orderBy('patient_name', 'asc')
        ->get();

        return view ('prescription.list', ['prescriptions'=>$prescriptions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = DB::table('patients')
        ->get();

        return view ('prescription.add',['patients'=>$patients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prescription= new Prescription();
        $prescription->pres_id = 'p'.rand(10000,99999);
        $prescription->patient_name=$request->patient_name;
        $prescription->prescription_drug=$request->prescription_drug;
        $prescription->updated_at=today();
        $prescription->save();
        return redirect('prescriptionlist');
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
        Prescription::destroy($id);
            return redirect('prescriptionlist');
    }
}
