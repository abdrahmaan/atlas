@extends('layout.master')
@section('title',"بحث مواعيد العملاء")
    

@section('content')

<div>
    <h4 class="mb-4">بحث فى مواعيد العملاء</h4>
</div>


<div class="row">

        
    <div class="col-12">
        <form id="new-car" action="/appointments" method="GET">
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
                            <div class="col-lg-4 my-1">
                              <div class="form-group  mx-2 d-block">
                                  <label for="id" class="text-right w-100 my-1">رقم الملف</label>
                                  <input name="id" type="number" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم الملف">
                              </div>
                            </div>
                              <!-- الإسم -->
                            <div class="col-lg-4 my-1">
                              <div class="form-group  mx-2 d-block">
                                  <label for="fullName" class="text-right w-100 my-1">إسم العميل</label>
                                  <input name="fullName" type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="إسم العميل">
                              </div>
                            </div>
                              <!-- رقم التليفون -->
                              <div class="col-lg-4 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="phone" class="text-right w-100 my-1">رقم التليفون</label>
                                    <input name="phone" type="number" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم التليفون">
                                </div>
                              </div>
                               <!-- الحالة -->
                               <div class="col-lg-3 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="status" class="text-right w-100 my-1">حالة الموعد</label>
                                    <select class="form-control" name="status" id="">
                                        <option value="الكل">الكل</option>
                                        <option value="سارى">سارى</option>
                                        <option value="مؤجل">مؤجل</option>
                                        <option value="مكتمل">مكتمل</option>
                                        <option value="ملغى">ملغى</option>
                                      
                                    </select>
                                  </div>
                              </div>

                              <!-- تاريخ البداية -->
                              <div class="col-lg-3 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="sDate" class="text-right w-100 my-1">تاريخ البداية</label>
                                    <input name="sDate" type="date" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم الهوية">
                                </div>
                              </div>
                              <!-- تاريخ النهاية -->
                              <div class="col-lg-3 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="eDate" class="text-right w-100 my-1">تاريخ النهاية</label>
                                    <input name="eDate" type="date" class="form-control text-right" id="exampleInputEmail1" placeholder="رقم الهوية">
                                </div>
                              </div>
                              
                             
                              <!-- عدد النتائج -->
                              <div class="col-lg-3 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="perPage" class="text-right w-100 my-1">عدد النتائج/الصفحة</label>
                                    <select class="form-control" name="perPage" id="">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="1000">1000</option>
                                    </select>
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
                  <th>رقم التليفون</th>
                  <th>رقم تليفون أخر</th>
                  <th>العنوان</th>
                  <th>الحى</th>
                  <th>المدينة</th>
                  <th>تاريخ الموعد</th>
                  <th>اليوم</th>
                  <th>الساعة</th>
                  <th>حالة الموعد</th>
                  <th>الموظف</th>
                  <th>تاريخ الإضافة</th>
                  <th>التغييرات</th>
             
                </tr>
                </thead>
                <tbody>
                    {{-- table body data --}}

                    @foreach ($Data as $row)
                        <tr>
                          <td>{{$row->client_id}}</td>
                           <td>
                             <a  href="/profile/{{$row->client_id}}">{{$row->fullName}}</a>
                            </td>
                           <td>{{$row->phone}}</td>
                           <td>{{$row->phoneTwo}}</td>
                           <td>{{$row->address}}</td>
                           <td>{{$row->district}}</td>
                           <td>{{$row->city}}</td>
                           <td>{{$row->dateOfAppointment}}</td>
                           <td>{{$row->dayOfAppointment}}</td>
                           <td>{{$row->timeOfAppointment}}</td>
                           <td>{{$row->status}}</td>
                           <td>{{$row->op}}</td>
                           <td>{{$row->created_at}}</td>
                            <td>
                              <button onclick="displayReason(event)" data-reason='{{$row->reason}}' id="btnReason" class="btn btn-primary">سبب الموعد</button>
                              <button onclick="displayDescription(event)" data-opdesc='{{$row->op_description}}' id="btnInfo" class="btn btn-primary">ملاحظات</button>
                                <a href="/appointment-edit/{{$row->id}}" class="btn btn-success">
                                  <i class="link-arrow fs-5" data-feather="edit-2"></i>
                                </a>
                               
                            </td>
                        </tr>
                    @endforeach
                 
                </tbody>
                <tfoot>
                    <tr>
                      <th>رقم الملف</th>
                      <th>الإسم</th>
                      <th>رقم التليفون</th>
                      <th>رقم تليفون أخر</th>
                      <th>العنوان</th>
                      <th>الحى</th>
                      <th>المدينة</th>
                      <th>تاريخ الموعد</th>
                      <th>اليوم</th>
                      <th>الساعة</th>
                      <th>حالة الموعد</th>
                      <th>الموظف</th>
                      <th>تاريخ الإضافة</th>
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

      {{-- <script>
        // Get all date inputs
        const dateInputs = document.querySelectorAll('input[type="date"]');

        // Get today's date
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');
        const formattedDate = `${year}-${month}-${day}`;

        // Set value of each date input to today's date
        dateInputs.forEach(input => {
            input.value = formattedDate;
        });
    </script> --}}

    <script>

            function displayReason(event) {
              let reason = event.target.dataset.reason;
              Swal.fire({
                icon: "info",
                title: "سبب الموعد",
                text: `${reason}`,
                confirmButtonColor: "red",
                confirmButtonText: "رجوع"
              });
            }
     
            function displayDescription(event) {
              
              let desc = event.target.dataset.opdesc;
              console.log(event.target);
              Swal.fire({
                icon: "info",
                title: "ملاحظات على الموعد",
                text: `${desc}`,
                confirmButtonColor: "red",
                confirmButtonText: "رجوع"
              });
            }
     
    </script>
@endsection