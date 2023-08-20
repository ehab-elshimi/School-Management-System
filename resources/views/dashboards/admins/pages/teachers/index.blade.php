@extends('dashboards.admins.layout')
@section('page-body')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Teachers Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fa-solid fa-person-chalkboard"></i></span>

            <div class="info-box-content">
              <span class="info-box-text font-weight-bold">All Teachers</span>
              <span class="info-box-number">{{$countTeachers}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><a href="{{route('admin.teachers.create')}}"><i class="fa-solid fa-user-plus"></i></a></span>

            <div class="info-box-content">
              <a href="{{route('admin.teachers.create')}}"><span class="info-box-text font-weight-bold">Add New Teacher</span></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>


      <div class="card">
        <div class="card-header d-flex justify-content-between w-100">
          <h3 class="card-title">All Teachers In School</h3>
        </div>
        <!-- /.card-header -->


        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>BirthDate</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
    <tr class="font-weight-bold">
        <td>{{ $teacher->id }}</td>
        <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
        <td>{{ $teacher->email }}</td>
        <td>{{ $teacher->dob }}</td>
        <td>{{ $teacher->gender }}</td>
        <td>{{ $teacher->phone_number }}</td>
        <td>
            <a class="btn btn-success" href="{{ route('admin.teachers.show', ['teacher' => $teacher->id]) }}">
                <i class="fas fa-eye"></i> Show
            </a>
            <a class="btn btn-primary" href="{{ route('admin.teachers.edit', ['teacher' => $teacher->id]) }}">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a class="btn btn-danger" href="{{ route('admin.teachers.destroy', ['teacher' => $teacher->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-teacher-{{ $teacher->id }}').submit();">
                <i class="fas fa-trash"></i> Delete
            </a>
            <form id="delete-teacher-{{ $teacher->id }}" action="{{ route('admin.teachers.destroy', ['teacher' => $teacher->id]) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </td>
    </tr>
@endforeach
              
              <tr class="font-weight-bold">
                <td>2</td>
                <td>Sara Kamel</td>
                <td>sds@gamil.com</td>
                <td>22/5/2023</td>
                <td>female</td>
                <td>01202153215</td>
                <td>
                  <a class="btn btn-success">
                    <i class="fas fa-eye"></i> Show
                  </a>
                  <a class="btn btn-primary">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <a class="btn btn-danger">
                    <i class="fas fa-trash"></i> Delete
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
      
  @endpush
  @push('scripts')
        <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('dist/js/demo.js')}}"></script>

  <!-- DataTables  & Plugins -->
  <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  @endpush
@endsection