@extends('dashboards.admins.layout')
@section('page-body')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Classroom</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Classroom</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-info">
        <div class="card-header d-flex justify-content-between w-100">
          Edit Classroom Information
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <form action="{{ route('admin.classrooms.update', $classroom->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-sm-6">
                <!-- Name -->
                <div class="form-group">
                  <label for="name">Name</label>
                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $classroom->name) }}" placeholder="Enter Name like 3 / 1...">
                </div>

                <!-- Capacity -->
                <div class="form-group">
                  <label for="capacity">Capacity</label>
                  @error('capacity')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <input id="capacity" type="number" class="form-control" name="capacity" value="{{ old('capacity', $classroom->capacity) }}" placeholder="Number of Students => 60">
                </div>
              </div>
              <div class="col-sm-6">
                <!-- Section -->
                <div class="form-group">
                  <label for="section">Section</label>
                  @error('section')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  <input id="section" type="text" class="form-control" name="section" value="{{ old('section', $classroom->section) }}" placeholder="Enter a Section like A3...">
                </div>

                <!-- Room -->
                <div class="form-group">
                  <label for="room">Room Time</label>
                  @error('room_type')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <select id="room_type" name="room_type" class="form-control">
                    <option value="classroom" {{ (old('room_type', $classroom->room_type) === 'classroom') ? 'selected' : '' }}>Classroom</option>
                    <option value="computers_lab" {{ (old('room_type', $classroom->room_type) === 'computers_lab') ? 'selected' : '' }}>Computer Lab</option>
                    <option value="auditorium" {{ (old('room_type', $classroom->room_type) === 'auditorium') ? 'selected' : '' }}>Auditorium</option>
                    <!-- Add more options if needed -->
                  </select>
                </div>
              </div>
              <div class="col-md-12 d-flex justify-content-end w-100">
                <button type="submit" class="btn btn-info"><i class="fa fa-check mr-2"></i>Update Classroom</button>
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