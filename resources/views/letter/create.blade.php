@extends('layout.master')
@section('title',"إرسال خطاب لعميل")
    

@section('content')

<div>
    <h4 class="mb-4">إرسال خطاب لعميل</h4>
</div>

<div class="row">

        
    <div class="col-12">
        <form id="new-car" action="/save-letter" method="POST">
            @csrf
                <!-- بيانات العميل -->
            <div class="card my-3">
                <div class="card-header d-flex align-items-center">   
                    <h3 class="card-title m-0">بيانات الخطاب</h3>
                    <div class="card-tools mx-3">
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#car-dim" aria-expanded="true" aria-controls="car-dim">
                            <i data-feather="plus"></i>
                        </button>
                    </div>
                </div>
                <div class="collapse show" id="car-dim">
                    <div class="card-body">
                        <div class="row justify-content-start">
                        

                            <!-- ID  -->
                                            <input name="client_id" value="{{$Data->id}}" hidden type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="الإسم ثلاثى">
                            <!-- الإسم ثلاثى  -->
                                <div class="col-lg-4 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="fullName" class="text-right w-100 my-1">الإسم ثلاثى</label>
                                            <input name="fullName" readonly value="{{$Data->tradeName ?? $Data->fullName}}" type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="الإسم ثلاثى">
                                        </div>
                                </div>
                              
                            <!-- رقم التليفون  -->
                                <div class="col-lg-4 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="phone" class="text-right w-100 my-1">رقم التليفون</label>
                                            <input name="phone" readonly value="{{$Data->phone}}" type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم التليفون">
                                        </div>
                                </div>
                            <!--  2 رقم التليفون  -->
                                <div class="col-lg-4 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="phoneTwo" class="text-right w-100 my-1">رقم تليفون أخر</label>
                                            <input name="phoneTwo" readonly value="{{$Data->phoneTwo}}" type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم تليفون أخر">
                                        </div>
                                </div>       
                           
                            <!--  الخطاب -->
                            <div class="col-12 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="letter_description" class="text-right w-100 my-1">الخطاب</label>
                                <textarea name="letter_description" id="" class="form-control text-right" cols="30" rows="6"></textarea>
                                    </div>
                            </div>

                          
                        </div>
    
                
                    </div>
    
                    <div class="card-footer text-right">
                        <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                            <button  type="submit" class="btn btn-success">إرسال الخطاب</button>
                            بيانات خاصة بإرسال خطاب إلى العميل 
    
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
                fullName : {
                    required: true,
                },
                phone : {
                    required: true,
                },
                phoneTwo : {
                    required: true,
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
                dayOfAppointment: {
                    required: true
                },
                dateOfAppointment: {
                    required: true
                },
                timeOfAppointment: {
                    required: true
                },
                letter_description: {
                    required: true
                },
              
            },
            messages: {
                fullName : {
                    required: "الإسم الثلاثى مطلوب",
                },
                phone : {
                    required: "رقم التليفون مطلوب",
                },
                phoneTwo : {
                    required: "رقم تليفون أخر مطلوب",
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
                dayOfAppointment: {
                    required: "يوم الموعد مطلوب"
                },
                dateOfAppointment: {
                    required: "تاريخ الموعد مطلوب"
                },
                timeOfAppointment: {
                    required: "ساعة الموعد مطلوبة"
                },
                letter_description: {
                    required: "الخطاب مطلوب"
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