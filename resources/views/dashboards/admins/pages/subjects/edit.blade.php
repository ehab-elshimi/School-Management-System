@extends('dashboards.admins.layout')
@section('page-body')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Subject</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Subject</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card card-info">
      <div class="card-header d-flex justify-content-between w-100">
        <h3 class="card-title"><i class="fa-solid fa-edit mr-2"></i>Edit Subject</h3>
      </div>
      <!-- /.card-header -->


      <div class="card-body">
        <form action="{{ route('admin.subjects.update', $subject->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-sm-6">
              <!-- Subject Code -->
              <div class="form-group">
                <label for="sub_code">Subject Code</label>
                @error('subject_code')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input id="sub_code" type="text" class="form-control" name="subject_code" value="{{ old('subject_code', $subject->subject_code) }}" placeholder="example: CH211">
              </div>

              <!-- Capacity -->
              <div class="form-group">
                <label for="sub_name">Subject Name</label>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input id="sub_name" type="text" class="form-control" name="name" value="{{ old('name', $subject->name) }}" placeholder="example: Mathematics II">
              </div>
            </div>
            <div class="col-sm-6">
              <!-- Description -->
              <div class="form-group">
                <label>Description</label>
                @error('desc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <textarea class="form-control" name="desc" rows="4" placeholder="Enter Description...">{{ old('desc', $subject->desc) }}</textarea>
              </div>
            </div>

            <div class="col-md-12 d-flex justify-content-end w-100">
              <button type="submit" class="btn btn-info"><i class="fa fa-check mr-2"></i>Update Subject</button>
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