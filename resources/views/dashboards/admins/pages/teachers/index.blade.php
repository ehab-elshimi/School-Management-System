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
              <li class="breadcrumb-item active">Teachers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">

          <div class="info-box border border-info">
            <span class="info-box-icon bg-info"><i class="fa-solid fa-person-chalkboard"></i></span>

            <div class="info-box-content">
              <span class="info-box-text font-weight-bold" style="font-size: 18px;">Teachers</span>
              <span class="info-box-number" style="font-size: 17px;">60</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">

            <div class="info-box border border-info">
              <span class="info-box-icon bg-info"><i class="fa-solid fa-user-plus"></i></span>

              <div class="info-box-content">
                <a href="{{route('admin.teachers.create')}}" class="text-dark">
                  <span class="info-box-text font-weight-bold m-0 add_teacher" style="font-size: 17px;">+ Add New Teacher</span>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
          <!-- /.info-box -->
        </div>
      </div>


      <div class="card">
        <div class="card-header text-light" style="background-color: #3c8ab8;">
          <h3 class="card-title">All Teachers In the School</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
              <tr class="bg-info">
                <th>N</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>BirthDate</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="font-weight-bold">
                <td>1</td>
                <td>Mahmod Kamel</td>
                <td>email@gamil.com</td>
                <td>12/2/2023</td>
                <td>Male</td>
                <td>01202153654</td>
                <td>
                    <a class="btn btn-success" href="{{route('admin.teachers.show', 1)}}">
                      <i class="fas fa-eye"></i> Show
                    </a>
                    <a class="btn btn-primary" href="{{route('admin.teachers.edit', 1)}}">
                      <i class="fas fa-edit"></i> Edit
                    </a>
                    
                    <a class="btn btn-danger" href="{{ route('admin.teachers.destroy', 1) }}" onclick="event.preventDefault(); document.getElementById('delete-teacher').submit();">
                      <i class="fas fa-trash"></i> Delete
                  </a>
                  <form id="delete-teacher" action="{{ route('admin.teachers.destroy', 1) }}" method="POST" style="display: none;">
                      @csrf
                      @method('DELETE')
                  </form>
                  </td>
              </tr>
              <tr class="font-weight-bold">
                <td>2</td>
                <td>Sara Kamel</td>
                <td>sds@gamil.com</td>
                <td>22/5/2023</td>
                <td>female</td>
                <td>01202153215</td>
                <td>
                    <a class="btn btn-success" href="{{route('admin.teachers.show', 1)}}">
                      <i class="fas fa-eye"></i> Show
                    </a>
                    <a class="btn btn-primary" href="{{route('admin.teachers.edit', 1)}}">
                      <i class="fas fa-edit"></i> Edit
                    </a>
                    
                    <a class="btn btn-danger" href="{{ route('admin.teachers.destroy', 1) }}" onclick="event.preventDefault(); document.getElementById('delete-teacher').submit();">
                      <i class="fas fa-trash"></i> Delete
                  </a>
                  <form id="delete-teacher" action="{{ route('admin.teachers.destroy', 1) }}" method="POST" style="display: none;">
                      @csrf
                      @method('DELETE')
                  </form>
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
<style>
    .std_btn:hover {
      background-color: #0055aa !important;
      transition: all .4s ease 0s;
    }
    .add_teacher:hover {
    color: #0055aa !important;
    transition: all .4s ease 0s;
    }
</style>
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
    $(function() {
        $("#example1").DataTable({
            "responsive": true
            , "lengthChange": false
            , "autoWidth": false
            , "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true
            , "lengthChange": false
            , "searching": false
            , "ordering": true
            , "info": true
            , "autoWidth": false
            , "responsive": true
        , });
    });

</script>
@endpush
@endsection
