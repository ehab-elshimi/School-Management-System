
@extends('dashboards.admins.layout')
@section('page-body')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Parents Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Parent</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="card card-success">
        <div class="card-header d-flex justify-content-between w-100">
          <h3 class="card-title"><i class="fa-solid fa-plus mr-2"></i>New Parent</h3>
        </div>
        <!-- /.card-header -->


        <div class="card-body">
          <div class="row">

            <div class="col-sm-6">

              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title font-weight-bold">Basic Data</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- first name -->
                      <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input id="firstName" type="text" class="form-control" name="firstName" placeholder="Enter First Name...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- last name -->
                      <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input id="lastName" type="text" class="form-control" name="lastName" placeholder="Enter Last Name...">
                      </div>
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

                  <!-- Personal Photo -->
                  <div class="form-group">
                    <label for="customFile">Personal Photo</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="teacherPhoto" accept="image/*">
                      <label class="custom-file-label" for="teacherPhoto" name="teacherPhoto" onclick="$('.file-upload-input').trigger( 'click' )">Choose file</label>
                    </div>
                  </div>

                  <!-- Gender Radio -->
                  <div class="form-group m-0">
                    <label class="">Gender:</label>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" checked id="male">
                      <label class="form-check-label font-weight-bold" for="male">Male</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="female">
                      <label class="form-check-label font-weight-bold" for="female">Female</label>
                    </div>
                  </div>
                </div>
              </div>



            </div>

            <div class="col-md-6">
              <div class="card card-secondary" style="height: 424px;">
                <div class="card-header">
                  <h3 class="card-title">Authentication</h3>
                </div>
                <div class="card-body">

                  <div class="form-group" style="position: relative;height: 100%;display: flex;flex-direction: column;justify-content: space-around;">
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
                 </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Contacts</h3>
                </div>
                <div class="card-body">

                  <div class="form-group ">
                    <!-- phone mask -->
                    <div class="form-group">
                      <label>Parent Phone:</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control"
                              data-inputmask="'mask': ['999-999-99999 ', '99 99 99 9999-9']" data-mask>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Address -->
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" rows="3" placeholder="Enter Address..."></textarea>
                    </div>
                 </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header" style="background-color: #d3c11c;">
                  <h3 class="card-title font-weight-bold">National ID Card Info</h3>
                </div>
                <div class="card-body">

                  <div class="form-group ">
                    <!-- phone mask -->
                    <div class="form-group">
                      <label>National ID</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="background-color: #fff;"><i class="fa-solid fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control"
                        data-inputmask="'mask': ['9999-9999-9999-99', '9999 999 99 999 99']" data-mask>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- national id face -->
                    <div class="form-group">
                      <label for="customFile">National ID (face)</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="national_id_face" accept="image/*">
                        <label class="custom-file-label" for="national_id_face" name="national_id_face" onclick="$('.file-upload-input').trigger( 'click' )">Choose file</label>
                      </div>
                    </div>
                    <!-- national id background -->
                    <div class="form-group">
                      <label for="customFile">National ID (background)</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="national_id_back" accept="image/*">
                        <label class="custom-file-label" for="national_id_back" name="national_id_back" onclick="$('.file-upload-input').trigger( 'click' )">Choose file</label>
                      </div>
                    </div>
                 </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

            <div class="col-md-12 d-flex justify-content-end w-100">
              <button class="btn btn-primary"><i class="fa fa-plus mr-2"></i>Create Parent</button>
            </div>
          </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @push('scripts')
    <!-- hoda1 adds  -->
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
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
   <!-- end hoda1 adds  -->
  @endpush
@endsection