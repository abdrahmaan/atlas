@extends('layout.master')
@section('title',"بحث العملاء الفرديين")
    

@section('content')

<div>
    <h4 class="mb-4">بحث فى العملاء الفرديين</h4>
</div>


<div class="row">

        
    <div class="col-12">
        <form id="new-car" action="/individual-clients" method="GET">
            <!-- بيانات البحث -->
            <div class="card my-3">
                <div class="card-header d-flex align-items-center">   
                    <h3 class="card-title m-0">بيانات البحث</h3>
                    <div class="card-tools mx-3">
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#car-data" aria-expanded="true" aria-controls="car-data">
                            <i data-feather="plus"></i>
                        </button>
                        
                    </div>
                </div>
                <div class="collapse show" id="car-data">
                    <div class="card-body">
                        <div class="row justify-content-start">

                              <!-- رقم الملف -->
                            <div class="col-lg-3 my-1">
                              <div class="form-group  mx-2 d-block">
                                  <label for="id" class="text-right w-100 my-1">رقم الملف</label>
                                  <input name="id" type="number" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم الملف">
                              </div>
                            </div>
                              <!-- الإسم -->
                            <div class="col-lg-3 my-1">
                              <div class="form-group  mx-2 d-block">
                                  <label for="fullName" class="text-right w-100 my-1">إسم العميل</label>
                                  <input name="fullName" type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="إسم العميل">
                              </div>
                            </div>
                              <!-- رقم التليفون -->
                              <div class="col-lg-3 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="phone" class="text-right w-100 my-1">رقم التليفون</label>
                                    <input name="phone" type="number" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم التليفون">
                                </div>
                              </div>
                              <!-- رقم الهوية -->
                              <div class="col-lg-3 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="national_id" class="text-right w-100 my-1">رقم الهوية</label>
                                    <input name="national_id" type="number" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم الهوية">
                                </div>
                              </div>

  
                           
                      </div>
                      
                
                    </div>
                    <div class="card-footer text-right">
                      <div class="d-flex flex-row-reverse justify-content-between align-items-center">
                          <button  type="submit" class="btn btn-success w-25">بحث</button>
                          بيانات خاصة بالبحث
                      </div>
  
                    </div>
  
                </div>

            </div>


        </form>

    </div>


</div>

<div class="row">
    <div class="col-12">
 
        <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="card-title m-0">بيانات العملاء</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body overflow-auto">
              <table id="cars-table" class="table table-bordered table-striped">
                <div class="col-12"></div>
                <thead>
                <tr>
                    

                  <th>رقم الملف</th>
                  <th>الإسم</th>
                  <th>الجنس</th>
                  <th>رقم التليفون</th>
                  <th>رقم تليفون أخر</th>
                  <th>العنوان</th>
                  <th>الحى</th>
                  <th>المدينة</th>
                  <th>الرمز البريدى</th>
                  <th>رقم الهوية</th>
                  <th>تاريخ الميلاد</th>
                  <th>التغييرات</th>
             
                </tr>
                </thead>
                <tbody>
                    {{-- table body data --}}

                    @foreach ($Data as $row)
                        <tr>
                           <td>{{$row->id}}</td>
                           <td>{{$row->fullName}}</td>
                           <td>{{$row->gender}}</td>
                           <td>{{$row->phone}}</td>
                           <td>{{$row->phoneTwo}}</td>
                           <td>{{$row->address}}</td>
                           <td>{{$row->district}}</td>
                           <td>{{$row->city}}</td>
                           <td>{{$row->postalCode}}</td>
                           <td>{{$row->national_id}}</td>
                           <td>{{$row->dateOfBirth}}</td>
                            <td>
                                <a href="/edit-car/{{$row->id}}" class="btn btn-success">تعديل</a>
                                <a href="/delete-car/{{$row->id}}" class="btn btn-danger">حذف</a>
                            </td>
                        </tr>
                    @endforeach
                 
                </tbody>
                <tfoot>
                    <tr>
                        <th>رقم الملف</th>
                        <th>الإسم</th>
                        <th>الجنس</th>
                        <th>رقم التليفون</th>
                        <th>رقم تليفون أخر</th>
                        <th>العنوان</th>
                        <th>الحى</th>
                        <th>المدينة</th>
                        <th>الرمز البريدى</th>
                        <th>رقم الهوية</th>
                        <th>تاريخ الميلاد</th>
                       <th>التغييرات</th>

                        
                      </tr>
                </tfoot>
              </table>
              <div class="hello my-2">
                Showing {{ $Data->firstItem() }} to {{ $Data->lastItem() }} of {{ $Data->total() }} enteris
                {{ $Data->links() }}
              </div>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
@endsection


@section('script')

<script>

    $(function () {
      $("#cars-table").DataTable({
        "bInfo" : false,
        "paging": false,
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#cars-table_wrapper .col-md-6:eq(0)');

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