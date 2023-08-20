@extends('dashboards.super-admins.pages.roles-permissions.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="mb-2" style="float: left">
            <span class="h4 ">Show User</span>
        </div>
        <div class="mb-2" style="float: right">
            <a class="btn btn-primary" href="{{ route('super-admin.users.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roles:</strong>
            @if($user->roles->isNotEmpty())
                @foreach($user->roles as $role)
                    <label class="badge bg-success">{{ $role->name }}</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection