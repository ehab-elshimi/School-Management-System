
@extends('dashboards.admins.layout')
@section('page-body')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create Subject</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Subject</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card card-success">
      <div class="card-header d-flex justify-content-between w-100">
        <h3 class="card-title"><i class="fa-solid fa-plus mr-2"></i>New Subject</h3>
      </div>
      <!-- /.card-header -->


      <div class="card-body">
        <form action="{{ route('admin.subjects.store') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <!-- Subject Code -->
              <div class="form-group">
                <label for="sub_code">Subject Code</label>
                @error('subject_code')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input id="sub_code" type="text" class="form-control" name="subject_code" placeholder="example: CH211" value="{{ old('subject_code') }}">
              </div>

              <!-- Capacity -->
              <div class="form-group">
                <label for="sub_name">Subject Name</label>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input id="sub_name" type="text" class="form-control" name="name" placeholder="example: Mathematics II" value="{{ old('name') }}">
              </div>
            </div>
            <div class="col-sm-6">
              <!-- Description -->
              <div class="form-group">
                <label>Description</label>
                @error('desc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <textarea class="form-control" name="desc" rows="4" placeholder="Enter Description...">{{ old('desc') }}</textarea>
              </div>
            </div>

            <div class="col-md-12 d-flex justify-content-end w-100">
              <button type="submit" class="btn btn-primary"><i class="fa fa-plus mr-2"></i>Create Subject</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

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