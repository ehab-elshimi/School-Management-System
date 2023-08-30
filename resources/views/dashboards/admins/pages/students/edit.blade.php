@extends('dashboards.admins.layout')
@section('page-body')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Student Data</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"><span class="fas fa-edit"></span> Edit Student</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">

          <div class="col-sm-6">
            <!-- date name -->
            <div class="form-group">
              <label>Date of Join</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="text" class="form-control" name="joinDate" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
              </div>
            </div>
            <div class="form-group">
              <label>Student Code</label>
              <input type="text" class="form-control" name="stdCode" placeholder="Enter ...">
            </div>

            <!-- email -->
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" type="email" class="form-control" name="email" placeholder="Enter email...">
            </div>

            <!-- Password -->
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control" name="password" placeholder="Enter password...">
            </div>

            <!-- rePassword -->
            <div class="form-group">
              <label for="rePassword">Password Confirmation</label>
              <input id="rePassword" type="password" class="form-control" name="password-confirmation" placeholder="Re-enter password...">
            </div>

            <!-- Personal Photo -->
            <div class="form-group">
              <label for="customFile">Personal Photo</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="teacherPhoto" accept="image/*">
                <label class="custom-file-label" for="teacherPhoto" name="teacherPhoto" onclick="$('.file-upload-input').trigger( 'click' )">Choose file</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6 ">
            
            <!-- first name -->
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input id="firstName" type="text" class="form-control" name="firstName" placeholder="Enter First Name...">
            </div>
            <!-- last name -->
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input id="lastName" type="text" class="form-control" name="lastName" placeholder="Enter Last Name...">
            </div>

            <!-- Gender Radio -->
            <div class="form-group">
              <label class="m-0">Gender:</label>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" checked id="male">
                <label class="form-check-label" for="male">Male</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female">
                <label class="form-check-label" for="female">Female</label>
              </div>
            </div>

            <!-- BirthDate  -->
            <div class="form-group">
              <label>Date Of Birth:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
              </div>
            </div>
            <!-- Phone  -->
            <div class="form-group ">
              <!-- phone mask -->
              <div class="form-group">
                <label>Parent Phone:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="text" class="form-control"
                        data-inputmask="'mask': ['999-999-99999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
            <div class="form-group ">
                  <!-- Address -->
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" placeholder="Enter Address..."></textarea>
                  </div>
               </div>
          </div>
          </div>


          <div class="col-md-12 d-flex justify-content-end w-100">
            <button class="btn btn-info"><i class="fa fa-check mr-2"></i>Update Student</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@push('scripts')
<!-- hoda adds  -->
 <!-- bs-custom-file-input -->
 <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
 <!-- InputMask -->
 <script src="../../plugins/moment/moment.min.js"></script>
 <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- end hoda adds  -->
<!-- Page specific script -->
 <!-- hoda adds  -->
 <script>
   //Datemask dd/mm/yyyy
   $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
   //Datemask2 mm/dd/yyyy
   $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
   //Money Euro
   $('[data-mask]').inputmask();

   $(function () {
     bsCustomFileInput.init();
   });
 </script>
<!-- end hoda adds  -->
@endpush
@endsection