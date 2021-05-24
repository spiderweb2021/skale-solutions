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
                           <h5 class="card-title mb-4">{{ __('general.my_project') }}</h5>
                           
                           <table class="table table-bordered table-striped">
                               <thead>
                                   <tr>
                                       <th>{{ __('general.id') }}</th>
                                       <th>{{ __('general.name') }}</th>
                                      
                                       <th>{{ __('general.payout') }}</th>
                                       <th>{{ __('general.budget') }}</th>
                                       <th>Action</th>
                                      
                                      
                                   </tr>
                               </thead>
                               <tbody>
                               	@if(count($result)>0)
                                @foreach($result  as $key=>$value) 
                                   <tr>
                                       <td>{{$key+1}}</td>
                                       <td>{{$value->project->name}}</td>
                                       
                                       <td>{{$value->project->payout_option}}</td>
                                       <td>{{$value->project->budget}}</td>
                                       
                                        <td><a href="{{route('project.user.details',['id'=>$value->project->id])}}" class="btn btn-primary text-white">View Details</a></td>
                                       
                                   </tr>
                                   @endforeach
                                    <tr>
                                    	 <td colspan="7">
                                   {!! $result->render() !!}</td>
                                    </tr>
                                   @else
                                   <tr>
                                      <td colspan="7"> {{ __('general.no_data_found') }}</td>
                                   </tr>

                                   @endif
                               </tbody>

                           </table>
                           
                        </div>
                     </div>
                     
                  
	<!-- Row / End -->
               </div>
            </div>
         </div>
      </section>
      <!-- End User Profile -->
   
@endsection
