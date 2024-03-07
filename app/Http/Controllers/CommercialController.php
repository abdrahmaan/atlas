<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commercial;


class CommercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $fullName = $request->fullName;
        $phone = $request->phone;
        $registerNumber = $request->registerNumber;


        
        $Clients = Commercial::query();
        
        
        if (isset($id) && $id !== null) {
             $Clients->where("id",$id);
        }

        if (isset($fullName) && $fullName !== null) {

             $Clients->where('fullName', 'like', '%' . $fullName . '%');
        }

        if (isset($phone) && $phone !== null) {

             $Clients->where('phone', 'like', '%' . $phone . '%')
                    ->orWhere("phoneTwo", "like", "%" . $phone . "%");
        }

        if (isset($registerNumber) && $registerNumber !== null) {

             $Clients->where('registerNumber', 'like', '%' . $registerNumber . '%');
        }



      $lastData = $Clients->paginate(15)->withQueryString();

      return view("commercial.view" ,[ "Data"=> $lastData] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("commercial.create");
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
            "tradeName" => "required",
            "fullName" => "required",
            "gender" => "required",
            "taxNumber" => "required",
            "registerNumber" => "required",
            "phone" => "required",
            "phoneTwo" => "required",
            "address" => "required",
            "district" => "required",
            "city" => "required",
            "postalCode" => "required",
        ],[
            "tradeName.required" => "الإسم التجارى مطلوب",
            "fullName.required" => "الإسم الثلاثى مطلوب",
            "gender.required" => "الجنس مطلوب",
            "taxNumber.required" => "الرقم الضريبي مطلوب",
            "registerNumber.required" => "رقم السجل التجارى مطلوب",
            "phone.required" => "رقم التليفون مطلوب",
            "phoneTwo.required" => "رقم تليفون أخر مطلوب",
            "address.required" => "العنوان مطلوب",
            "district.required" => "الحى مطلوب",
            "city.required" => "المدينة مطلوبة",
            "postalCode.required" => "الرمز البريدي مطلوب",
        ]);

        $insert =  Commercial::create($request->all());

       if ($insert) {

            session()->flash("message","تم إضافة العميل بنجاح");
            return redirect()->back();

        } else {

            session()->flash("error","يوجد مشكلة فى إضافة العميل");
            return redirect()->back();

        }

        return dd($request);
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
