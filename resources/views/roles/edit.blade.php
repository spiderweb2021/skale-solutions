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
            <li class="breadcrumb-item active"> Edit  Role
            </li>
          </ol>
        </div>
        <div class="button-wrapper float-right">
          <a class="btn btn-success btn-sm" href="{{route('roles.index')}}"> Back</a>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
      </div>
    </div>
  </div>
</div>
<div class="content-body">

  <!-- layout section start -->
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Create New Role</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="form-body">
                 <form novalidate action="{{ route("roles.update", [$role->id]) }}" method="POST" enctype="multipart/form-data">
                       @csrf
                          @method('PUT')
                         
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <div class="controls">
                                    <label>Role Name</label>
                                    <input type="text" name="name" value="{{$role->name}}" class="form-control" placeholder="Role Name"
                                     required data-validation-required-message="This name field is required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="module-list" class="table table-bordered table-striped mt-1">
                                    <thead>
                                        <tr>
                                            <th>Module Permission</th>
                                            <th>Read</th>
                                            <th>Write</th>
                                            <th>Create</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $modulearr=[];?>
                                     @foreach($permission as $key => $value)
                                     
                                        @if(!in_array(explode('-',$value->name)[0],$modulearr))
                                       <tr>
                                        <td>{{$module = $modulearr[]= explode('-',$value->name)[0]}}</td>
                                        <td>
                                            <div class="checkbox"><input type="checkbox"
                                                id="users-checkbox{{$key}}1" class="checkbox-input" @if(in_array($module.'-list', $rolePermissions)) checked @endif value="{{$module}}-list" name="permission[]">
                                                <label for="users-checkbox{{$key}}1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox"><input type="checkbox"
                                                id="users-checkbox{{$key}}2" class="checkbox-input" @if(in_array($module.'-edit', $rolePermissions)) checked @endif value="{{$module}}-edit" name="permission[]"><label
                                                for="users-checkbox{{$key}}2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox"><input type="checkbox"
                                                id="users-checkbox{{$key}}3" class="checkbox-input" @if(in_array($module.'-create', $rolePermissions)) checked @endif value="{{$module}}-create" name="permission[]"><label
                                                for="users-checkbox{{$key}}3"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox"><input type="checkbox"
                                                id="users-checkbox{{$key}}4" class="checkbox-input" @if(in_array($module.'-delete', $rolePermissions)) checked @endif value="{{$module}}-delete" name="permission[]">
                                                <label for="users-checkbox{{$key}}4"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                   
                      
                    @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save changes</button>
                            <button type="reset" class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // layout section end -->
</div>



@endsection