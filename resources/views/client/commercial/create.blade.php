@extends('layout.master')
@section('title',"إضافة عميل تجارى")
    

@section('content')

<div>
    <h4 class="mb-4">إضافة عميل تجارى</h4>
</div>

<div class="row">

        
    <div class="col-12">
        <form id="new-car" action="/new-commercial-client" method="POST">
            @csrf

                <!-- بيانات العميل -->
            <div class="card my-3">
                <div class="card-header d-flex align-items-center">   
                    <h3 class="card-title m-0">بيانات العميل التجارى</h3>
                    <div class="card-tools mx-3">
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#car-dim" aria-expanded="true" aria-controls="car-dim">
                            <i data-feather="plus"></i>
                        </button>
                    </div>
                </div>
                <div class="collapse show" id="car-dim">
                    <div class="card-body">
                        <div class="row justify-content-start">
                        
                            <!-- الإسم التجارى  -->
                                <div class="col-lg-4 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="tradeName" class="text-right w-100 my-1">الإسم التجارى</label>
                                            <input name="tradeName" type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="الإسم التجارى">
                                        </div>
                                </div>
                            <!-- الإسم ثلاثى  -->
                                <div class="col-lg-4 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="fullName" class="text-right w-100 my-1">الإسم ثلاثى</label>
                                            <input name="fullName" type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="الإسم ثلاثى ممثل النشاط">
                                        </div>
                                </div>
                                <!-- الجنس -->
                             <div class="col-lg-4 my-1">
                                <div class="form-group mx-2 d-block">
                                    <label for="gender" class="text-right w-100 my-1">الجنس</label>
                                    <select name="gender" class="form-control text-right" style="min-width: 121px">
                                        <option value="ذكر">ذكر</option>
                                        <option value="أنثى">أنثى</option>

                                    </select>
                                </div>
                            </div>
                            <!-- رقم الضريبي  -->
                                <div class="col-lg-3 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="taxNumber" class="text-right w-100 my-1">رقم الضريبي</label>
                                            <input name="taxNumber" type="number" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم الضريبي">
                                        </div>
                                </div>
                            <!-- رقم السجل التجارى  -->
                                <div class="col-lg-3 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="registerNumber" class="text-right w-100 my-1">رقم السجل التجارى</label>
                                            <input name="registerNumber" type="number" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم السجل التجارى">
                                        </div>
                                </div>
                            <!-- رقم التليفون  -->
                                <div class="col-lg-3 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="phone" class="text-right w-100 my-1">رقم التليفون</label>
                                            <input name="phone" type="number" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم التليفون">
                                        </div>
                                </div>
                            <!--  2 رقم التليفون  -->
                                <div class="col-lg-3 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="phoneTwo" class="text-right w-100 my-1">رقم تليفون أخر</label>
                                            <input name="phoneTwo" type="number" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم تليفون أخر">
                                        </div>
                                </div>
                           
                             
                            <!--  الإيميل -->
                            <div class="col-lg-3 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="email" class="text-right w-100 my-1">البريد الإلكترونى</label>
                                    <input name="email" type="email" class="form-control text-right" id="exampleInputEmail1" placeholder="البريد الإلكترونى">
                                </div>
                            </div>
                            <!--  العنوان -->
                            <div class="col-lg-9 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="address" class="text-right w-100 my-1">العنوان</label>
                                    <input name="address" type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="العنوان">
                                </div>
                            </div>

                            <!-- الحي -->
                            <div class="col-lg-4 my-1">
                                <div class="form-group mx-2 d-block">
                                    <label for="district" class="text-right w-100 my-1">الحي</label>
                                    <select name="district" class="form-control text-right" style="min-width: 121px">
                                        <option value="الخبر">الخبر</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <!-- المدينة -->
                            <div class="col-lg-4 my-1">
                                <div class="form-group mx-2 d-block">
                                    <label for="city" class="text-right w-100 my-1">المدينة</label>
                                    <select name="city" class="form-control text-right" style="min-width: 121px">
                                        <option value="الرياض">الرياض</option>
                                        
                                    </select>
                                </div>
                            </div>
                             <!--  الرمز البريدي -->
                             <div class="col-lg-4 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="postalCode" class="text-right w-100 my-1">الرمز البريدي</label>
                                    <input name="postalCode" type="number" class="form-control text-right" id="exampleInputEmail1" placeholder="الرمز البريدى">
                                </div>
                            </div>
                               
                        </div>
    
                
                    </div>
    
                    <div class="card-footer text-right">
                        <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                            <button  type="submit" class="btn btn-success">تسجيل البيانات</button>
                            بيانات خاصة بالعميل التجارى لتسجيل العقود وعروض الأسعار 
    
                        </div>
    
                    </div>
                </div>

            </div>

        </form>

    </div>


</div>
@endsection


@section('script')
    <script>
         $(function () {
            $('#new-car').validate({
            rules: {
                tradeName : {
                    required: true,
                },
                fullName : {
                    required: true,
                },
                gender: {
                    required: true
                },
                taxNumber: {
                    required: true
                },
                registerNumber: {
                    required: true
                },
                phone : {
                    required: true,
                },
                phoneTwo : {
                    required: true,
                },
                email : {
                    required: true,
                    email: true,
                },
                
                district: {
                    required: true
                },
                city: {
                    required: true
                },
                address: {
                    required: true
                },
                postalCode: {
                    required: true
                },
                
              
            },
            messages: {
                tradeName : {
                    required: "الإسم التجارى مطلوب",
                },
                fullName : {
                    required: "الإسم الثلاثى مطلوب",
                },
                phone : {
                    required: "رقم التليفون مطلوب",
                },
                phoneTwo : {
                    required: "رقم تليفون أخر مطلوب",
                },
                email : {
                    required: "البريد الإلكترونى مطلوب",
                    email: "أدخل بريد إلكترونى صحيح",
                },
                gender: {
                    required: "الجنس مطلوب"
                },
                taxNumber: {
                    required: "الرقم الضريبي مطلوب"
                },
                registerNumber: {
                    required: "السجل التجارى مطلوب"
                },
                district: {
                    required: "الحى مطلوب"
                },
                city: {
                    required: "المدينة مطلوبة"
                },
                address: {
                    required: "العنوان مطلوب"
                },
                postalCode: {
                    required: "الرمز البريدي مطلوب"
                },
                national_id: {
                    required: "رقم الهوية مطلوب"
                },
                dateOfBirth: {
                    required: "تاريخ الميلاد مطلوب"
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
            $(element).addClass('is-valid');

            }
        });
    });
    </script>

      {{-- *********** Errors ************* --}}
      @if($errors->any())
        <script>
            @foreach($errors->all() as $error)
                    toastr.error('{{$error}}');
                    toastr.options.closeDuration = 5000;
            @endforeach
        </script>
     @endif

  {{-- ********* Error Message ********** --}}
  @if(session()->has('error'))
      <script>
          toastr.error("{{session('error')}}");
          toastr.options.closeDuration = 5000;
      </script>
  @endif

  {{-- ********* Success Message ********** --}}
  @if(session()->has('message'))
      <script>
          toastr.success("{{session('message')}}");
          toastr.options.closeDuration = 5000;
      </script>
  @endif

@endsection