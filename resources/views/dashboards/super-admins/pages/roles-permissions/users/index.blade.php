@extends('dashboards.super-admins.pages.roles-permissions.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="mb-2" style="float: left">
            <span class="h4">School Stuff</span>
        </div>
        <div class="mb-2" style="float: right">
            <a class="btn btn-success" href="{{ route('super-admin.users.create') }}">Add New User</a>
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
        <th style="text-align:center">Email</th>
        <th>Roles</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($data as $key => $user)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name }}</td>
        <td style="text-align:center">{{ $user->email }}</td>
        <td>
            @if(!empty($user->roles()->get()))
                @foreach($user->getRoleNames() as $v)
                <label class="badge bg-success">{{ $v }}</label>
                @endforeach
            @endif
        </td>
        <td>
            <a class="btn btn-info" href="{{ route('super-admin.users.show',$user->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('super-admin.users.edit',$user->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['super-admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>

@endsection
