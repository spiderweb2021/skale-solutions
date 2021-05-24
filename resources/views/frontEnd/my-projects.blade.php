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
                                       <th>{{ __('general.professional_needed') }}</th>
                                       <th>{{ __('general.industry') }}</th>
                                       <th>{{ __('general.budget') }}</th>
                                       <th>{{ __('general.status') }}</th>
                                       <th>Action</th>
                                      
                                      
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
                                        <td>
                                          <a href="{{url('edit-project')}}/{{$value->id}}" class="btn btn-primary text-white">Modify Details</a>

                                          <a href="{{url('project/details')}}/{{$value->id}}" class="btn btn-primary text-white">View</a>
                                       
                                        {!! Form::open( ['method' => 'delete', 'url' => route('project.destroy', ['id' => $value->id]), 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
        <button type="submit" class="btn btn-secondary text-white">
            ❌
        </button>
    {!! Form::close() !!}</td>
                                       
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
