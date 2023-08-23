@extends('dashboards.admins.layout')
@section('page-body')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Parent Page</h1>
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
    <style>
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
      {{ json_encode($teacher, JSON_PRETTY_PRINT) }}
  </div>
  </div>
@endsection