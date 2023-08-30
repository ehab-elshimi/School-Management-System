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
            <li class="breadcrumb-item active">Class Rooms</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">

        <div class="info-box" style="border:1px solid #7d4b1b;">
          <span class="info-box-icon text-light" style="background-color: #fff;">
            <img class="p-2" src="../../dist/img/icons/classroom.png" alt="">
          </span>

          <div class="info-box-content">
            <span class="info-box-text font-weight-bold" style="font-size: 18px;">Class Rooms</span>
            <span class="info-box-number" style="font-size: 17px;">{{$classroomsCount}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">

          <div class="info-box" style="border:1px solid #7d4b1b;">
            <span class="info-box-icon text-light" style="background-color: #fff;">
              <img class="p-2" src="../../dist/img/icons/chalkboard.png" alt="">
            </span>

            <div class="info-box-content">
              <a href="{{route('admin.classrooms.create')}}" class="text-dark">
                <span class="info-box-text font-weight-bold m-0 add_classroom" style="font-size: 17px;">+ Add New Class</span>
              </a>
            </div>
            <!-- /.info-box-content -->
          </div>
        <!-- /.info-box -->
      </div>
    </div>


    <div class="card">
      <div class="card-header text-light" style="background-color: #875625;">
        <h3 class="card-title">All Class Rooms In the School</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
          <thead>
            <tr class="bg-dark">
              <th>N</th>
              <th>Class Room</th>
              <th>Section</th>
              <th>Room Type</th>
              <th>Capacity</th>
              <th>Currently In Used</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($classrooms as $classroom)
            <tr class="font-weight-bold">
              <td>{{ $loop->iteration }}.</td>
              <td>{{$classroom->name}}</td>
              <td>{{$classroom->section}}</td>
              <td>{{$classroom->room_type}}</td>
              <td>{{$classroom->capacity}} Student</td>
              <td>{{$classroom->capacity-10}} Student</td>
              <td>
                <a class="btn btn-success" href="{{route('admin.classrooms.show', $classroom->id)}}">
                  <i class="fas fa-eye"></i> Show
                </a>
                <a class="btn btn-primary" href="{{route('admin.classrooms.edit', $classroom->id)}}">
                  <i class="fas fa-edit"></i> Edit
                </a>
                
                <a class="btn btn-danger" href="{{ route('admin.classrooms.destroy', $classroom->id) }}" onclick="event.preventDefault(); document.getElementById('delete-classroom-{{$classroom->id}}').submit();">
                  <i class="fas fa-trash"></i> Delete
              </a>
              <form id="delete-classroom-{{$classroom->id}}" action="{{ route('admin.classrooms.destroy', $classroom->id) }}" method="POST" style="display: none;">
                  @csrf
                  @method('DELETE')
              </form>
              </td>
            </tr>
            @endforeach
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
  <!-- hoda adds  -->
  <style>
    .std_btn:hover {
      background-color: #0055aa !important;
      transition: all .4s ease 0s;
    }
    .add_classroom:hover {
    color: #0055aa !important;
    transition: all .4s ease 0s;
    }
  </style>
  <!-- end hoda adds  -->
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
