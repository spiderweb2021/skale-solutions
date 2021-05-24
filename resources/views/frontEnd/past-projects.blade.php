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
                           <h5 class="card-title mb-4">{{ __('general.past_project') }}</h5>
                           
                           <table class="table table-bordered table-striped">
                               <thead>
                                   <tr>
                                       <th>{{ __('general.id') }}</th>
                                       <th>{{ __('general.name') }}</th>
                                       <th>{{ __('general.professional_needed') }}</th>
                                       <th>{{ __('general.industry') }}</th>
                                       <th>{{ __('general.budget') }}</th>
                                       <th>{{ __('general.status') }}</th>
                                      
                                      
                                   </tr>
                               </thead>
                               <tbody>
                               	@if(count($result)>0)
                                @foreach($result  as $key=>$value) 
                                   <tr>
                                       <td>{{$key+1}}</td>
                                       <td>{{$value->name}}</td>
                                       <td>{{$value->professionalType->type}}</td>
                                       <td>{{$value->IndustryType->industry}}</td>
                                       <td>{{$value->budget}}</td>
                                       <td>{{$value->status}}</td>
                                       
                                   </tr>
                                   @endforeach
                                    <tr>
                                    	 <td colspan="6">
                                   {!! $result->render() !!}</td>
                                    </tr>
                                   @else
                                   <tr>
                                      <td colspan="6"> {{ __('general.no_data_found') }}</td>
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
