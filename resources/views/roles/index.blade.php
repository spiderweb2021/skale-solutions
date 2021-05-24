@extends('layouts.admin')
@section('content')


<div class="content-header row">
  <div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h5 class="content-header-title float-left pr-1 mb-0">Role Management</h5>
        <div class="breadcrumb-wrapper float-left col-7">
          <ol class="breadcrumb p-0 mb-0">
            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active"> Manage Role
            </li>
          </ol>
        </div>
        <div class="button-wrapper float-right">
            @can('role-create')
            <a class="btn btn-success btn-sm" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
        </div>
      </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
        @endif
    </div>
  </div>
</div>
<div class="content-body">

   <!-- Bus list start -->
<section class="role-list-wrapper">
    
    <div class="roles-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <!-- datatable start -->
                    <div class="table-responsive">
                        <table id="role-list" class="table table-striped table-bordered custom-datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                       
                                        @can('role-edit')
                                        <a class="btn btn-primary btn-icon" href="{{ route('roles.edit',$role->id) }}"><i class="bx bxs-edit"></i></a>
                                        @endcan
                                        @can('role-delete')
                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-icon']) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </div>
        </div>
    </div>
</section>
</div>


{!! $roles->render() !!}
@endsection