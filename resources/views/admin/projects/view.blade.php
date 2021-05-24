@extends('layouts.admin')



@section('content')



<div class="content-header row">

  <div class="content-header-left col-12 mb-2 mt-1">

    <div class="row breadcrumbs-top">

      <div class="col-12">

        <h5 class="content-header-title float-left pr-1 mb-0">{{ __('general.project_management') }} </h5>

        <div class="breadcrumb-wrapper float-left col-7">

          <ol class="breadcrumb p-0 mb-0">

            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>

            </li>

            <li class="breadcrumb-item active"> List Of Providers
            </li>

          </ol>

        </div>

        <div class="button-wrapper float-right">

          

        </div>

      </div>

        @if ($message = Session::get('success'))

          <div class="alert alert-success">

            <p>{{ $message }}</p>

          </div>

          @endif

          @if ($message = Session::get('error'))

          <div class="alert alert-danger">

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
                  <div class="card no-padding no-border">
                <table class="table table-striped mb-0">
                    <tbody>
                     
                        <tr>
                            <td>
                                <strong>Project Name:</strong>
                            </td>
                            <td>
                               {{$project->name}}
                            </td>
                            <td>
                                <strong>Address:</strong>
                            </td>
                            <td>
                                {{$project->address}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Professional Type:</strong>
                            </td>
                            <td>
                               {{$project->professionalType->type}} 
                            </td>
                            <td>
                                <strong>Professional industry:</strong>
                            </td>
                            <td>
                               {{$project->IndustryType->industry}} 
                               
                            </td>
                        </tr>
                       <tr>
                            <td>
                                <strong>Client Type:</strong>
                            </td>
                            <td>
                               {{$project->clients_type}} 
                            </td>
                            <td>
                                <strong>Budget:</strong>
                            </td>
                            <td>
                               {{$project->budget}} 
                               
                            </td>
                        </tr> <tr>
                            <td>
                                <strong>Payout Option:</strong>
                            </td>
                            <td>
                               {{$project->payout_option}} 
                            </td>
                            <td>
                                <strong>Time Duration:</strong>
                            </td>
                            <td>
                               {{$project->time_duration}} 
                               
                            </td>
                        </tr><tr>
                            <td >
                                <strong>Desription:</strong>
                            </td>
                            <td colspan="3">
                               {{$project->description}} 
                            </td>
                           
                        </tr>
                       
                       
                    </tbody>
                </table>
                  <div class="card no-padding no-border">
                    <br>
                    <h4>Already Assigned Providers</h4>
                <table class="table table-striped mb-0">
                  <thead>
                   <th>Name</th>
                   <th>Mobile Number</th>
                   <th>Email</th>

                  </thead>
                    <tbody>
                    @if(count($assined_users_detail) > 0)
                    @foreach($assined_users_detail as $k=>$user)
                    <tr>
                      <td>
                        {{$user->name}}
                      </td>
                      <td>
                        {{$user->phone}}
                      </td>
                      <td>
                        {{$user->email}}
                      </td>
                    </tr>
                    @endforeach
                    @endif
                       
                    </tbody>
                </table>
            </div>
                </div>
                <div class="card-body">
                 <h4> Matching Providers</h4>
                    <!-- datatable start -->

                    <div class="table-responsive">

                        <table id="users-list" class="table table-striped table-bordered custom-datatable">

                            <thead>

                                <tr>

                                     <th>{{ __('general.id') }}</th>
                                       <th>{{ __('general.name') }}</th>
                                       <th>{{ __('general.phone') }}</th>
                                       <th>{{ __('general.email') }}</th>
                                       <th>{{ __('general.industry') }}</th>
                                       <th>{{ __('general.expertise') }}</th>
                                      

                                    <th>Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($providers as $key => $value)

                                 <tr>

                                  <td>{{$key+1}}</td>
                                       <td>{{$value->name}}</td>
                                       <td>{{$value->phone}}</td>
                                       <td>{{$value->email}}</td>
                                      
                                       <td>{{$value->IndustryType->industry}}</td>
                                      <td>{{$value->professionalType->type}}</td>

                                  

                                  <td>
                                  @if(in_array($value->id,$assined_users))
                                  Assigned
                                  @else
                                    <form method="post" action="{{route('project.assign.user')}}">
                                      @csrf
                                      <input type="hidden" name="user_id" value="{{$value->id}}">
                                      <input type="hidden" name="project_id" value="{{$project->id}}">
                                      <button type="submit" class="btn btn-primary btn-icon">Assign</a>
                                    </form>
                                     @endif
                                  

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



@endsection