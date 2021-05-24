@extends('layouts.front')
@section('head')
<style>
  #modal-credit .modal-dialog {
    margin-top: 120px;
}

#modal-credit .input-group span, #modal-credit .form-group span, #modal-credit .form-inline span,
#modal-register .input-group span, #modal-register .form-group span, #modal-register .form-inline span{
    font-weight: bold;
    margin-bottom: 10px;
}

#modal-credit .modal-dialog {
  margin-top: 120px;
}
#modal-credit label {
  margin-bottom: 5px;
}
#modal-credit .modal-body {
  padding-bottom: 7px;
}
#modal-credit .modal-body .form-group.social-login {
  line-height: 54px;
}
#modal-credit .modal-body .form-group:first-child {
  margin-bottom: 26px;
  display: table;
}
#modal-credit .modal-body .form-group:nth-child(2) {
  margin-bottom: 5px;
  display: table;
}
#modal-credit .modal-body input {
  outline: none;
}
#modal-credit .modal-body input:-webkit-autofill {
  -moz-box-shadow: inset 0 0 0 50px #fff !important;
  -webkit-box-shadow: inset 0 0 0 50px #fff !important;
  box-shadow: inset 0 0 0 50px #fff !important;
  -webkit-text-fill-color: #999 !important;
  color: #999 !important;
}
#modal-credit .modal-footer span:first-child {
  margin-top: 2px;
}
#modal-credit .mdi {
  width: 15px;
  height: 15px;
  position: absolute;
  right: 40px;
 font-size: 24px;
  color: #ddd;
}
#modal-credit .social-login, #modal-register .social-login {
  text-transform: uppercase;
  font-size: 85%;
}
#modal-credit .social-login .col-md-6, #modal-register .social-login .col-md-6  {
  padding: 0;
}
#modal-credit .social-login .mdi, #modal-register .social-login .mdi {
  position: static;
  margin: 0 5px 0 0;
  font-size: 15px;
  color: inherit;
}
#modal-credit .social-login .fb-login, #modal-register .social-login .fb-login {
  background-color: #3b5998;
  color:#fff;
  padding: 7px 15px;
  border-radius: 2px;
}
#modal-credit .social-login .google-login, #modal-register .social-login .google-login {
  background-color: #db5138;
  color:#fff;
  padding: 7px 15px;
  border-radius: 2px;
}


.btn:hover{color:#212529;}
.btn:focus{outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25);}
.btn:disabled{pointer-events:none;opacity:.65;}
.btn-primary{color:#fff;background-color:#0d6efd;border-color:#0d6efd;}
.btn-primary:hover{color:#fff;background-color:#0b5ed7;border-color:#0a58ca;}
.btn-primary:focus{color:#fff;background-color:#0b5ed7;border-color:#0a58ca;box-shadow:0 0 0 .25rem rgba(49,132,253,.5);}
.btn-primary:active{color:#fff;background-color:#0a58ca;border-color:#0a53be;}
.btn-primary:active:focus{box-shadow:0 0 0 .25rem rgba(49,132,253,.5);}
.btn-primary:disabled{color:#fff;background-color:#0d6efd;border-color:#0d6efd;}
.alert{position:relative;padding:1rem 1rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem;}
.alert-success{color:#0f5132;background-color:#d1e7dd;border-color:#badbcc;}
.alert-danger{color:#842029;background-color:#f8d7da;border-color:#f5c2c7;}
.modal-open .modal{overflow-x:hidden;overflow-y:auto;}
.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0;}
.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none;}
.modal.show .modal-dialog{transform:none;}
.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0;}
.modal-header{display:flex;flex-shrink:0;align-items:center;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px);}
.modal-body{position:relative;flex:1 1 auto;padding:1rem;}
.modal-footer{display:flex;flex-wrap:wrap;flex-shrink:0;align-items:center;justify-content:flex-end;padding:.75rem;border-top:1px solid #dee2e6;border-bottom-right-radius:calc(.3rem - 1px);border-bottom-left-radius:calc(.3rem - 1px);}
.modal-footer>*{margin:.25rem;}
@media (min-width:576px){
.modal-dialog{max-width:500px;margin:1.75rem auto;}
}
.clearfix::after{display:block;clear:both;content:"";}
.text-center{text-align:center!important;}
/*! CSS Used from: http://skale.localhost/css/style.css */
a{color:#4154f1;text-decoration:none;}
a:hover{color:#717ff5;text-decoration:none;}
h2{font-family:"Nunito", sans-serif;}
/*! CSS Used from: http://skale.localhost/css/roshan.css */
h2{color:#333333;}
a{transition:color 300ms ease 0s, background-color 300ms ease 0s;text-decoration:none!important;}
a:hover{transition:color 300ms ease 0s, background-color 300ms ease 0s;}
a,a:hover{text-decoration:none;color:#8114a5;}
a:focus{outline:medium none;outline-offset:0;}
.btn{border-radius:2px;font-size:13px;font-weight:bold;}
.btn-primary{background:#8114a5 none repeat scroll 0 0;box-shadow:0 5px 7px #c8d0f3;color:rgba(255, 255, 255, 0.82);border-color:#8114a5;}
.btn-primary:hover,.btn-primary:focus{background-color:#8114a5;border-color:#8114a5;color:rgba(255, 255, 255, 0.82);}
.modal-dialog{width:380px;}
#modal-credit h2{font-size:25px;margin-top:8px;display:block;}
#modal-credit span{font-weight:normal;}
#modal-credit .modal-header{background:#f2f2f2;border-bottom:0;}
#modal-credit .modal-header span{color:#8c9397;display:block;}
#modal-credit .modal-body .form-group{width:100%;line-height:41px;padding-left:5px;}
#modal-credit .modal-footer{margin-top:0;padding-top:0;padding-bottom:0;background:#fff;border-top:0;display:block;}
#modal-credit .modal-footer span{margin-bottom:2px;text-align:right;font-size:12px;white-space:nowrap;color:#8c9397;float:left;}
#modal-credit .text-center{height:auto;}
#modal-credit .modal-header{display:block;}
#modal-credit .btn{width:125px;padding:10px 0;margin:0 0 10px 0;outline:none;}
.clearfix{width:100%;}
.modal-body .form-group input{padding:0 10px;width:100%;border:0px;border-bottom:1px solid #e6e6e6;}
.modal-body .form-group ::-webkit-input-placeholder{color:#35393B;font-weight:bold;}
.modal-body .form-group :-moz-placeholder{color:#35393B;opacity:1;font-weight:bold;}
.modal-body .form-group ::-moz-placeholder{color:#35393B;opacity:1;font-weight:bold;}
.modal-body .form-group :-ms-input-placeholder{color:#35393B;font-weight:bold;}
#modal-credit .form-group span{font-weight:bold;margin-bottom:10px;}
#modal-credit .modal-dialog{margin-top:120px;}
#modal-credit .modal-body{padding-bottom:7px;}
#modal-credit .modal-body .form-group.social-login{line-height:54px;}
#modal-credit .modal-body .form-group:first-child{margin-bottom:26px;display:table;}
#modal-credit .modal-body .form-group:nth-child(2){margin-bottom:5px;display:table;}
#modal-credit .modal-body input{outline:none;}
#modal-credit .modal-body input:-webkit-autofill{-moz-box-shadow:inset 0 0 0 50px #fff!important;-webkit-box-shadow:inset 0 0 0 50px #fff!important;box-shadow:inset 0 0 0 50px #fff!important;-webkit-text-fill-color:#999!important;color:#999!important;}
#modal-credit .modal-footer span:first-child{margin-top:2px;}
#modal-credit .mdi{width:15px;height:15px;position:absolute;right:40px;font-size:24px;color:#ddd;}
#modal-credit .social-login{text-transform:uppercase;font-size:85%;}
#modal-credit .social-login .col-md-6{padding:0;}
#modal-credit .social-login .mdi{position:static;margin:0 5px 0 0;font-size:15px;color:inherit;}
#modal-credit .social-login .fb-login{background-color:#3b5998;color:#fff;padding:7px 15px;border-radius:2px;}
#modal-credit .social-login .google-login{background-color:#db5138;color:#fff;padding:7px 15px;border-radius:2px;}
@media (min-width: 0px) and (max-width: 767px){
.btn{font-size:13px;font-weight:bold;padding:9px 27px;}
}
</style>
@endsection
@section('content')
    
      <!-- User Profile -->
      <section class="section-padding content-wrapper">
         <div class="container">
            <div class="row">
             @include('layouts.sidebarfront')
               <div class="col-lg-9 col-md-9">
                  <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">{{ __('general.my_notification_list') }}</h5>
                           
                           <table class="table table-bordered table-striped">
                               <thead>
                                   <tr>
                                       <th>{{ __('general.message') }}</th>
                                       <th>Action</th>
                                      
                                      
                                   </tr>
                               </thead>
                               <tbody>
                               	@if(count($notifications)>0)
                                @foreach($notifications  as $key=>$notification) 
                                   <tr>
                                       <td>{{$notification->author->name}} has sent you a project name :<strong> {{$notification->project->name}} 
                                       </strong></td>
                                       
                                        <td><a href="" onclick="accept_project_popup({{$notification->id}})" data-toggle="modal" data-target="#modal-credit" class="btn btn-primary text-white">Accept</a>
                                       
                                        {!! Form::open( ['method' => 'delete', 'url' => route('project.assignment.destroy', ['id' => $notification->id]), 'onSubmit' => 'return confirm("Are yous sure wanted to reject it?")']) !!}
        <button type="submit" class="btn btn-secondary text-white">
            ❌
        </button>
    {!! Form::close() !!}</td>
                                       
                                   </tr>
                                   @endforeach
                                    <tr>
                                    	 <td colspan="7">
                                   </td>
                                    </tr>
                                   @else
                                   <tr>
                                      <td colspan="7"> {{ __('general.no_record_found') }}</td>
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

      <div id="modal-credit" class="modal" role="dialog" style="display: none; padding-right: 17px;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h5>Aaccount Credit: <span id="credit_info">{{Auth::user()->account_credits}}</span></h5>
          @if(Auth::user()->account_credits <1)
          <span>You do not have enought credit, Please add credit first!</span>
          @endif
        </div>
      <form method="post" id="creditform">
          <div class="alert alert-danger logindanger" id="failed" style="display:none"></div>
          <div class="alert alert-success loginsuccess" id="success" style="display:none"></div>
          @csrf
          <input type="hidden" name="project_accept_id" id="project_accept_id" value="">
          <div class="modal-body">
            <div class="form-group">
              <label>Add Credit</label>
              <select name="addcredit" class="form-control">
                <option value="">Select</option>
                <option value="10">10</option>
                 <option value="20">20</option>
              </select>
              <span class="mdi mdi-at"></span>
            </div>
          <div class="modal-footer">
            <div class="form-group clearfix">
             
              <button type="button" id="ajaxAddCreditSubmit" class="btn btn-primary float-right">Add Credit</button> 
              &nbsp;
              @if(Auth::user()->account_credits > 0)
              <button type="button" id="ajaxAcceptAssignmentSubmit" class="btn btn-success float-right">Accept</button>    
              @endif     
            </div>
          </div>    
        </form>
      </div>
    </div>
    </div>
    </div>
      <!-- End User Profile -->
   
@endsection

@section('footer')
<script>
  function accept_project_popup(id){
    $("#project_accept_id").val(id);

    }

  $(document).ready(function(){
    
    $("#ajaxAcceptAssignmentSubmit").on('click',function(){

      var project_id = $('#project_accept_id').val();

      if(project_id > 0){

        $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'POST',
                    url:'{{ route("project.assignment.accept") }}',
                    dataType: "JSON",
                    async: false,
                    data: {'project_id': project_id},
                    success:function(data){
                      if(data.status =='success'){
                        window.location.replace(data.redirect_url);

                      }
                       
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    
                    },
                    completed: function(){
    
                    }
                });

      }

    });

  });
  
</script>
@endsection
