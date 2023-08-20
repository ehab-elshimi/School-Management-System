@extends('dashboards.super-admins.pages.roles-permissions.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="mb-2" style="float: left">
            <span class="h4 ">Show Role</span>
        </div>
        <div class="mb-2" style="float: right">
            @can('role-list')
            <a class="btn btn-success" href="{{ route('super-admin.roles.index') }}"> Back</a>
            @endcan
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection