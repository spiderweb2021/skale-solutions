@extends('layouts.front')

@section('content')
    
      <!-- User Profile -->
      <section class="section-padding content-wrapper">
         <div class="container">
            <div class="row">
              @include('layouts.sidebarfront')
               <div class="col-lg-9 col-md-9">
                   <h5 class="card-title mb-4">{{ __('general.Dashboard') }}</h5>
                   <div class="row">
        				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        					<div class="widget-card widget-bg1">					 
        						<div class="wc-item">
        							<h4 class="wc-title">
        								My Response
        							</h4>
        							<span class="wc-des">
        								All Status
        							</span>
        							<span class="wc-stats">
        							0
        							</span>		
        							
        						</div>				      
        					</div>
        				</div>
        				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        					<div class="widget-card widget-bg2">					 
        						<div class="wc-item">
        							<h4 class="wc-title">
        								 My project
        							</h4>
        							<span class="wc-des">
        									All Status
        							</span>
                                    <span class="wc-stats">{{$myprojects ?? 0}}</span>
        						
        						</div>				      
        					</div>
        				</div>
        				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        					<div class="widget-card widget-bg3">					 
        						<div class="wc-item">
        							<h4 class="wc-title">
        								My requirement
        							</h4>
        							<span class="wc-des">
        									My requirement 
        							</span>
        							
        						</div>				      
        					</div>
        				</div>
        				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        					<div class="widget-card widget-bg4">					 
        						<div class="wc-item">
        							<h4 class="wc-title">
        								My Orders
        							</h4>
        							<span class="wc-des">
        								All my transations
        							</span>
        							<span class="wc-stats counter">0</span>		
        						
        						</div>				      
        					</div>
        				</div>
        			</div>
     
                    
               </div>
            </div>
         </div>
      </section>
      <!-- End User Profile -->
   
@endsection
