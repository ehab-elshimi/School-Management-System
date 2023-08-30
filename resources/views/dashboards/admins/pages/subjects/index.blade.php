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
              <li class="breadcrumb-item active">Subjects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">

          <div class="info-box border border-dark">
            <span class="info-box-icon text-light" style="background-color: #fff;">
              <img class="p-2" src="{{asset('dist/img/icons/text-books.png')}}" alt="">
            </span>

            <div class="info-box-content">
              <span class="info-box-text font-weight-bold" style="font-size: 18px;">Subjects</span>
              <span class="info-box-number" style="font-size: 17px;">{{$subjectsCount}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">

            <div class="info-box border border-dark">
              <span class="info-box-icon text-light" style="background-color: #fff;">
                <img class="p-2" src="{{asset('dist/img/icons/math-book.png')}}" alt="">
              </span>

              <div class="info-box-content">
                <a href="{{route('admin.subjects.create')}}" class="text-dark">
                  <span class="info-box-text font-weight-bold m-0 add_subject" style="font-size: 17px;">+ Add New Subject</span>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
          <!-- /.info-box -->
        </div>
      </div>


      <div class="card">
        <div class="card-header text-light bg-dark">
          <h3 class="card-title">All Subjects In the School</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
              <tr style="background-color: #125c33;" class="text-light">
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>About</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($subjects as $subject)
              <tr class="font-weight-bold">
                <td>{{$subject->subject_code}}</td>
                <td>{{$subject->name}}</td>
                <td>{{$subject->desc}}</td>
                <td>
                    <a class="btn btn-success" href="{{route('admin.subjects.show', $subject->id)}}">
                      <i class="fas fa-eye"></i> Show
                    </a>
                    <a class="btn btn-primary" href="{{route('admin.subjects.edit', $subject->id)}}">
                      <i class="fas fa-edit"></i> Edit
                    </a>
                    
                    <a class="btn btn-danger" href="{{ route('admin.subjects.destroy', $subject->id) }}" onclick="event.preventDefault(); document.getElementById('delete-subject-{{$subject->id}}').submit();">
                      <i class="fas fa-trash"></i> Delete
                  </a>
                  <form id="delete-subject-{{$subject->id}}" action="{{ route('admin.subjects.destroy', $subject->id) }}" method="POST" style="display: none;">
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
    .add_subject:hover {
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
