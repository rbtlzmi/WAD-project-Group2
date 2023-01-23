<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;
use Illuminate\Support\Facades\DB;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $billings = Billing::paginate(50);

        return view ('billing.list', compact('billings'));
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

        return view ('billing.view',['patients'=>$patients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $billing = new Billing;
        $billing->bill_id = 'b'.rand(10000,99999);
        $billing->patient_name = $request->patient_name;
        $billing->payment_method = $request->payment_method;
        $billing->payment_status = $request->payment_status;
        $billing->invoice_title = $request->invoice_title;
        $billing->invoice_amount = $request->invoice_amount;
        $billing->created_at = today();
        $billing->updated_at = today();
        $billing->save();

        return redirect('billinglist');
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
        Billing::destroy($id);
            return redirect('billinglist');

    }
}
