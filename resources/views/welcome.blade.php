<@extends('layouts.front')
@section('content')
<footer id="footer" class="footer">
  <div class="footer-newsletter">
        <div class="flex-center position-ref full-height">
            

            <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h1>Welcome {{ \Auth::user()->name }}</h1>
                            <h4>You register as {{\Auth::user()->roles[0]->name}} </h4>
                        </div>
                    </div>    
                </div>
            </div>    
        </div>
    </div>    
</footer>    
@endsection        
