<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\FinancialRequest;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        
        $client_id = $request->id;
        $fullName = $request->fullName;
        $phone = $request->phone;
        $contract_id = $request->contract_id;
        $sDate = $request->sDate;
        $eDate = $request->eDate;
        $perPage = $request->perPage ?? 20;



        
        $Financial = FinancialRequest::query();

                
        
        if (isset($client_id) && $client_id !== null) {
             $Financial->where("client_id",$client_id);
        }

        if (isset($fullName) && $fullName !== null) {

             $Financial->where('fullName', 'like', '%' . $fullName . '%');
        }

        if (isset($phone) && $phone !== null) {

             $Financial->where('phone', 'like', '%' . $phone . '%');
                   
        }

        if (isset($contract_id) && $contract_id !== null) {

             $Financial->where('contract_id',$contract_id);
                   
        }

        if (isset($sDate) && isset($eDate) && $sDate !== null && $eDate !== null) {

             $Financial->whereDate('dateOfPay', '>=', $sDate)
             ->whereDate('dateOfPay', '<=', $eDate);
        }

      $lastData = $Financial->paginate($perPage)->withQueryString();


        return view("financial.view" , ["Data"=> $lastData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $client_id = $request->id;
        $client =  Client::findOrFail($client_id);
        return view("financial.create" , ["Data"=> $client]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "client_id" => "required",
            "fullName" => "required",
            "phone" => "required",
            "contract_id" => "required",
            "amount" => "required",
            "amount_letters" => "required",
            "dateOfPay" => "required",
        ],[
            "client_id.required" => "رقم ملف العميل مطلوب",
            "fullName.required" => "إسم العميل مطلوب",
            "phone.required" => "رقم التليفون مطلوب",
            "contract_id.required" => "رقم العقد مطلوب",
            "amount.required" => "القيمة بالأرقام مطلوبة",
            "amount_letters.required" => "القيمة بالأحرف العربية مطلوبة",
            "dateOfPay.required" => "تاريخ السداد مطلوب",
        ]);

        $insert = FinancialRequest::create($request->all());

        
        if ($insert) {

            session()->flash("message","تم إرسال المطالبة المالية بنجاح");
            return redirect()->back();

        } else {

            session()->flash("error","يوجد مشكلة فى إرسال المطالبة المالية للعميل");
            return redirect()->back();

        }

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
        //
    }
}
