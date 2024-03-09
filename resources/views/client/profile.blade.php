@extends('layout.master')
@section('title',"ملف العميل")
    

@section('content')
    <div class="page-content" style="margin-top: 0px !important">

        <div class="row">
        <div class="col-12 grid-margin">
            <div class="card mt-5 p-3">
            <div class="position-relative">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <img class="wd-70 rounded-circle" src="../../../assets/images/faces/face1.jpg" alt="profile">
                    <span class="h4 ms-3 text-dark my-2">{{$Data->fullName}}</span>
                </div>
             
            </div>
            <div class="d-none d-flex justify-content-center p-3 rounded-bottom">
                <ul class="d-flex align-items-center m-0 p-0">
                <li class="d-flex align-items-center active">
                    <i class="me-1 icon-md text-primary" data-feather="columns"></i>
                    <a class="pt-1px d-none d-md-block text-primary" href="#">Timeline</a>
                </li>
                <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="user"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">About</a>
                </li>
                <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="users"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Friends <span class="text-muted tx-12">3,765</span></a>
                </li>
                <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="image"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Photos</a>
                </li>
                <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="video"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Videos</a>
                </li>
               
                </ul>
              
            </div>
            {{-- User Buttons --}}
            <div class="d-flex w-100">
                <ul class="d-flex align-items-center m-0 p-0 justify-content-center w-100">
                    <li class="ms-3 ps-3 d-flex align-items-center">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn rounded" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="me-1 icon-md" data-feather="file-text"></i>
                              إنشاء عقد
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                              <a class="dropdown-item" href="#">عقد توريد وتركيب مصعد</a>
                              <a class="dropdown-item" href="#">عقد تحديث مصعد</a>
                              <a class="dropdown-item" href="#">عقد صيانة</a>
                            </div>
                          </div>
                    </li>
                    <li class="ms-3 ps-3 border-start d-flex align-items-center">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn  rounded" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="me-1 icon-md" data-feather="file-plus"></i>
                              إنشاء عرض سعر
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                              <a class="dropdown-item" href="#">عرض سعر توريد مصعد</a>
                              <a class="dropdown-item" href="#">عرض سعر تحديث مصعد</a>
                              <a class="dropdown-item" href="#">عرض سعر صيانة</a>
                            </div>
                          </div>
                    </li>
                    <li class="ms-3 ps-3 border-start d-flex align-items-center">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn  rounded" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="me-1 icon-md" data-feather="edit-3"></i>
                              إنشاء معاملة
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                              <a class="dropdown-item" href="/new-appointment/{{$Data->id}}">إنشاء موعد جديد</a>
                              <a class="dropdown-item" href="/new-letter/{{$Data->id}}">إنشاء خطاب للعميل</a>
                              <a class="dropdown-item" href="/new-financial-request/{{$Data->id}}">إنشاء مطالبة مالية</a>
                              <a class="dropdown-item" href="#">إنشاء دفعة مالية</a>
                            </div>
                          </div>
                    </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
        <div class="row profile-body flex-row-reverse">
            <!-- middle wrapper start -->
                <div class="col-md-8 col-xl-8 middle-wrapper">
                    <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="img-xs rounded-circle" src="../../../assets/images/faces/face1.jpg" alt="">													
                                <div class="ms-2">
                                <p>Mike Popescu</p>
                                <p class="tx-11 text-muted">1 min ago</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="meh" class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="corner-right-up" class="icon-sm me-2"></i> <span class="">Go to post</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="share-2" class="icon-sm me-2"></i> <span class="">Share</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="copy" class="icon-sm me-2"></i> <span class="">Copy link</span></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                            <img class="img-fluid" src="../../../assets/images/photos/img2.jpg" alt="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex post-actions">
                            <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                <i class="icon-md" data-feather="heart"></i>
                                <p class="d-none d-md-block ms-2">Like</p>
                            </a>
                            <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                <i class="icon-md" data-feather="message-square"></i>
                                <p class="d-none d-md-block ms-2">Comment</p>
                            </a>
                            <a href="javascript:;" class="d-flex align-items-center text-muted">
                                <i class="icon-md" data-feather="share"></i>
                                <p class="d-none d-md-block ms-2">Share</p>
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card rounded">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="img-xs rounded-circle" src="../../../assets/images/faces/face1.jpg" alt="">													
                                <div class="ms-2">
                                <p>Mike Popescu</p>
                                <p class="tx-11 text-muted">5 min ago</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="meh" class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="corner-right-up" class="icon-sm me-2"></i> <span class="">Go to post</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="share-2" class="icon-sm me-2"></i> <span class="">Share</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="copy" class="icon-sm me-2"></i> <span class="">Copy link</span></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <img class="img-fluid" src="../../../assets/images/photos/img1.jpg" alt="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex post-actions">
                            <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                <i class="icon-md" data-feather="heart"></i>
                                <p class="d-none d-md-block ms-2">Like</p>
                            </a>
                            <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                <i class="icon-md" data-feather="message-square"></i>
                                <p class="d-none d-md-block ms-2">Comment</p>
                            </a>
                            <a href="javascript:;" class="d-flex align-items-center text-muted">
                                <i class="icon-md" data-feather="share"></i>
                                <p class="d-none d-md-block ms-2">Share</p>
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            <!-- middle wrapper end -->
            {{-- Left Wrapper --}}
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                  <div class="card-body">
                    <div class="d-none d-flex align-items-center justify-content-between mb-2">
                      <h6 class="card-title mb-0">About</h6>
                      <div class="dropdown">
                        <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-branch icon-sm me-2"><line x1="6" y1="3" x2="6" y2="15"></line><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><path d="M18 9a9 9 0 0 1-9 9"></path></svg> <span class="">Update</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View all</span></a>
                        </div>
                      </div>
                    </div>
                    <p class="d-none">Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>
                    {{-- رقم الملف --}}
                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">رقم الملف:</label>
                      <p class="text-muted">{{$Data->id}}</p>
                    </div>
                    {{-- الإسم النشاط --}}
                    @isset($Data->tradeName)
                        <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">إسم النشاط:</label>
                        <p class="text-muted">{{$Data->tradeName}}</p>
                        </div>      
                    @endisset
                    {{-- الإسم الثلاثى --}}
                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">الإسم الثلاثى:</label>
                      <p class="text-muted">{{$Data->fullName}}</p>
                    </div>
                    {{-- الجنس --}}
                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">الجنس:</label>
                      <p class="text-muted">{{$Data->gender}}</p>
                    </div>
                    {{-- رقم الضريبي --}}
                    @isset($Data->taxNumber)
                        <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">رقم الضريبى:</label>
                        <p class="text-muted">{{$Data->taxNumber}}</p>
                        </div>      
                    @endisset
                    {{-- الإسم النشاط --}}
                    @isset($Data->registerNumber)
                        <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">رقم السجل:</label>
                        <p class="text-muted">{{$Data->registerNumber}}</p>
                        </div>      
                    @endisset
                    {{-- رقم التليفون --}}
                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">رقم التليفون:</label>
                      <p class="text-muted">{{$Data->phone}}</p>
                    </div>
                    {{-- رقم تليفون أخر --}}
                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">رقم تليفون اخر:</label>
                      <p class="text-muted">{{$Data->phoneTwo}}</p>
                    </div>
                    {{-- العنوان --}}
                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">العنوان:</label>
                      <p class="text-muted">{{$Data->address}}</p>
                    </div>
                    {{-- الحى --}}
                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">الحى:</label>
                      <p class="text-muted">{{$Data->district}}</p>
                    </div>
                    {{-- المدينة --}}
                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">المدينة:</label>
                      <p class="text-muted">{{$Data->city}}</p>
                    </div>
                    {{-- رقم الهوية --}}
                    @isset($Data->national_id)
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">رقم الهوية:</label>
                            <p class="text-muted">{{$Data->national_id}}</p>
                        </div>
                    @endisset
                    {{-- الرمز البريدى --}}
                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">الرمز البريدى:</label>
                      <p class="text-muted">{{$Data->postalCode}}</p>
                    </div>             
                    {{-- تاريخ الميلاد --}}
                    @isset($Data->dateOfBirth)
                        <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">تاريخ الميلاد:</label>
                        <p class="text-muted">{{$Data->dateOfBirth}}</p>
                        </div>
                        
                    @endisset
                   
                    <div class="d-none mt-3 d-flex social-links">
                      <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                      </a>
                      <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                      </a>
                      <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            {{-- Left Wrapper End --}}
       
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
                gender: {
                    required: true
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
                national_id: {
                    required: true
                },
                dateOfBirth: {
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
                gender: {
                    required: "الجنس مطلوب"
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