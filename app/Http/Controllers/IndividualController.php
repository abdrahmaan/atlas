<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class IndividualController extends Controller
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
        $national_id = $request->national_id;
        $perPage = $request->perPage ?? 20;


        
        $Clients = Client::query();
        
        
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

        if (isset($national_id) && $national_id !== null) {

             $Clients->where('national_id', 'like', '%' . $national_id . '%');
        }



      $lastData = $Clients->where("client_type","individual")->paginate($perPage)->withQueryString();

      return view("client.individual.view" ,[ "Data"=> $lastData] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("client.individual.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request["client_type"] = 'individual';

        $request->validate([
            "fullName" => "required",
            "gender" => "required",
            "phone" => "required",
            "phoneTwo" => "required",
            "address" => "required",
            "district" => "required",
            "city" => "required",
            "postalCode" => "required",
            "dateOfBirth" => "required",
        ],[
            "fullName.required" => "الإسم الثلاثى مطلوب",
            "gender.required" => "الجنس مطلوب",
            "phone.required" => "رقم التليفون مطلوب",
            "phoneTwo.required" => "رقم تليفون أخر مطلوب",
            "address.required" => "العنوان مطلوب",
            "district.required" => "الحى مطلوب",
            "city.required" => "المدينة مطلوبة",
            "postalCode.required" => "الرمز البريدي مطلوب",
            "dateOfBirth.required" => "تاريخ الميلاد مطلوب",
        ]);

       $insert =  Client::create($request->all());

       if ($insert) {

            session()->flash("message","تم إضافة العميل بنجاح");
            return redirect()->back();

        } else {

            session()->flash("error","يوجد مشكلة فى إضافة العميل");
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

        $client = Client::findOrFail( $id);

        return view("client.profile", ["Data" => $client]);
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
