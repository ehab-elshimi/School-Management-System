@extends('dashboards.admins.layout')
@section('page-body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Parents Page</h1>
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
    {{-- <style>
      .json-output {
          background-color: #f7f7f7;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          font-family: 'Courier New', monospace;
          white-space: pre-wrap;
      }
  </style>
  
  <div class="json-output">
    {{ "parents Count => " . json_encode($countparents, JSON_PRETTY_PRINT) }}
    {{ "parents => " . json_encode($parents, JSON_PRETTY_PRINT) }}
</div> --}}
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fa-solid fa-person-chalkboard"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text font-weight-bold">All parents</span>
                    <span class="info-box-number">{{$countparents}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><a href="{{route('admin.parents.create')}}"><i class="fa-solid fa-user-plus"></i></a></span>

                <div class="info-box-content">
                    <a href="{{route('admin.parents.create')}}"><span class="info-box-text font-weight-bold">Add New parent</span></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                {{-- <span class="info-box-icon bg-info"><a href="{{route('api-get-parents')}}"><i class="fa-solid fa-users"></i></a></span> --}}

                <div class="info-box-content">
                    <button id="btnData" onclick="getData('{{route('api-get-parents')}}')" data-url="{{route('api-get-parents')}}"><span class="info-box-text font-weight-bold">Get parents</span></button>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>


    <div class="card">
        <div class="card-header d-flex justify-content-between w-100">
            <h3 class="card-title">All parents In School</h3>
        </div>
        <!-- /.card-header -->


        <div class="card-body">
            <table id="example1 parentsDataTable" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>BirthDate</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tblBody">
                    @foreach ($parents as $parent)
                    <tr class="font-weight-bold">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $parent->first_name }}</td>
                        <td>{{ $parent->last_name }}</td>
                        <td>{{ $parent->dob }}</td>
                        <td>{{ $parent->gender }}</td>
                        <td>{{ $parent->phone_number }}</td>
                        <td>
                            {{-- <a class="btn btn-success" href="{{ route('admin.parents.show', ['parent' => $parent->id]) }}">
                            <i class="fas fa-eye"></i> Show
                            </a> --}}
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-xl">
                                <i class="fas fa-eye"></i> Show
                            </button>
                            <a class="btn btn-primary" href="{{ route('admin.parents.edit', ['parent' => $parent->id]) }}">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a class="btn btn-danger" href="{{ route('admin.parents.destroy', ['parent' => $parent->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-parent-{{ $parent->id }}').submit();">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                            <form id="delete-parent-{{ $parent->id }}" action="{{ route('admin.parents.destroy', ['parent' => $parent->id]) }}" method="POST" style="display: none;">
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
        <div class="modal fade" id="modal-xl">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">parent Name</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>One fine body&hellip;</p>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>
        <!-- /.modal-dialog -->
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
