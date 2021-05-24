@extends('layouts.front')

@section('content')
    
      <!-- User Profile -->
      <section class="section-padding content-wrapper">
         <div class="container">
            <div class="row">
             @include('layouts.sidebarfront')
               <div class="col-lg-9 col-md-9">
                      @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
                  <form method="post" action="{{route('postpassword')}}">
                    @csrf
                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">Change Password</h5>
                           <div class="form-group">
                              <label>Password <span class="text-danger">*</span></label>
                              <input type="password" name="password" class="form-control" required="required" placeholder="">@if ($errors->has('password'))
        <div class="text-danger">{{ $errors->first('password') }}</div>
        @endif
                           </div>
                           <div class="form-group">
                              <label>Confirm Password <span class="text-danger">*</span></label>
                              <input type="password" name="password_confirmation" class="form-control" required="required" placeholder="">
                              @if ($errors->has('password_confirmation'))
        <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
        @endif
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary btn-lg">Save Details</button>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- End User Profile -->
   
@endsection
