@extends('dashboards.super-admins.pages.roles-permissions.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="col-lg-12 margin-tb">
            <div class="mb-2" style="float: left">
                <span class="h4 ">Role Management</span>
            </div>
            <div class="mb-2" style="float: right">
                @can('role-create')
            <a class="btn btn-success" href="{{ route('super-admin.roles.create') }}"> Create New Role</a>
            @endcan
            </div>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('super-admin.roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('super-admin.roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['super-admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{{-- {!! $super-admin.roles->render() !!} --}}


@endsection