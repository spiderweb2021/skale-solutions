@extends('layouts.front')

@section('content')
    
      <!-- User Profile -->
      <section class="section-padding content-wrapper">
         <div class="container">
            <div class="row">
             @include('layouts.sidebarfront')
               <div class="col-lg-9 col-md-9">
                  <div class="card padding-card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">{{__('general.project_details')}}</h5>
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
            </div>
                </div>
            </div>
            @if(\Auth::user()->roles[0]->id=='2')
<div class="card padding-card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Already Assigned Providers</h5>
            <div class="card no-padding no-border">
                   
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
    </div>
    @endif
        </div>
    </div>
</div>
</section>
@endsection