@extends('layouts.admin')



@section('content')



<div class="content-header row">

  <div class="content-header-left col-12 mb-2 mt-1">

    <div class="row breadcrumbs-top">

      <div class="col-12">

        <h5 class="content-header-title float-left pr-1 mb-0">Users Management</h5>

        <div class="breadcrumb-wrapper float-left col-7">

          <ol class="breadcrumb p-0 mb-0">

            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>

            </li>

            <li class="breadcrumb-item active"> Manage Users

            </li>

          </ol>

        </div>

        <div class="button-wrapper float-right">

          <a class="btn btn-success btn-sm" href="{{ route('users.create') }}"> Create New User</a>

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



   <!-- users list start -->

<section class="users-list-wrapper">

    

    <div class="users-list-table">

        <div class="card">

            <div class="card-content">

                <div class="card-body">

                    <!-- datatable start -->

                    <div class="table-responsive">

                        <table id="users-list" class="table table-striped table-bordered custom-datatable">

                            <thead>

                                <tr>

                                    <th>Id</th>

                                    <!-- <th>username</th> -->

                                    <th>name</th>

                                    <th>Email</th>

                                    <th>last activity</th>

                                    <th>verified</th>

                                    <th>role</th>

                                    <th>status</th>

                                    <th>Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($data as $key => $user)

                                 <tr>

                                  <td>{{ ++$i }}</td>

                                  <!-- <td>{{$user->uname}}</td> -->

                                  <td>{{ $user->name }}</td>

                                  <td>{{ $user->email }}</td>

                                  <td>N/A</td>

                                  <td>N/A</td>

                                  <td>

                                    @if(!empty($user->getRoleNames()))

                                    @foreach($user->getRoleNames() as $v)

                                    <span class="badge badge-success">{{ $v }}</span>

                                    @endforeach

                                    @endif

                                  </td>

                                  <td>@if($user->status=='active')<span class="badge badge-light-success">Active</span>

                                    @else

                                    <span class="badge badge-light-danger">Inactive</span>

                                    @endif



                                  </td>

                                  <td>

                                   <a class="btn btn-primary btn-icon" href="{{ route('users.edit',$user->id) }}"><i class="bx bxs-edit"></i></a>

                                   {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

                                   {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-icon']) !!}

                                   {!! Form::close() !!}

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

{!! $data->render() !!}



@endsection