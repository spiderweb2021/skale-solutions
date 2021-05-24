@extends('layouts.admin')
@section('content')
<div class="content-header row">
  <div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h5 class="content-header-title float-left pr-1 mb-0">Profile Settings</h5>
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb p-0 mb-0">
            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item"><a href="#">Profile Settings</a>
            </li>
        </ol>
    </div>
</div>
</div>
</div>
</div>
<div class="content-body">
    <!-- account setting page start -->
    <section id="page-account-settings">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-3 mb-2 mb-md-0 pills-stacked">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" id="account-pill-general" data-toggle="pill"
                                href="#account-vertical-general" aria-expanded="true">
                                <i class="bx bx-cog"></i>
                                <span>General</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="account-pill-info" data-toggle="pill"
                            href="#account-vertical-info" aria-expanded="false">
                            <i class="bx bx-info-circle"></i>
                            <span>Info</span>
                        </a>
                    </li>
                   
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" id="account-pill-password" data-toggle="pill"
                    href="#account-vertical-password" aria-expanded="false">
                    <i class="bx bx-lock"></i>
                    <span>Change Password</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- right content section -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="tab-content">
                      
                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                        aria-labelledby="account-pill-general" aria-expanded="true">
                          <form novalidate action="{{ route("updateGenral", [$user->id]) }}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="media">
                            <a href="javascript: void(0);">
                               @if(!empty($user->profile_pic))
                               <img src="{{ url('user') }}/{{ $user->profile_pic }}" class="rounded mr-75" alt="profile image" height="64" width="64"/>
                               @else
                               <img src="app-assets/images/portrait/small/avatar-s-16.jpg"
                               class="rounded mr-75" alt="profile image" height="64" width="64">
                               @endif
                           </a>
                           <div class="media-body mt-25">
                            <div
                            class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                            <label for="select-files" class="btn btn-sm btn-light-primary ml-50 mb-50 mb-sm-0">
                              <span>Upload new photo</span>
                              <input id="select-files" name="propic" type="file" accept="image/*" hidden>
                          </label>
                          <button class="btn btn-sm btn-light-secondary ml-50">Reset</button>
                      </div>
                      <p class="text-muted ml-1 mt-50"><small>Allowed JPG, GIF or PNG. Max
                        size of
                    800kB</small></p>
                </div>
            </div>
            <hr>
           
                <div class="row">
                   
                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name"  value="{{ old('name', isset($user) ? $user->name : '') }}" placeholder="Name"
                                value="Hermione Granger" required
                                data-validation-required-message="This name field is required">
                                @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label>E-mail</label>
                                <input type="email" class="form-control" placeholder="Email"
                                 required name="email" value="{{ old('email', isset($user) ? $user->email : '') }}" 
                                data-validation-required-message="This email field is required">
                                @if($errors->has('email'))
                                <p class="help-block">
                                    {{ $errors->first('email') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if(is_null($user->email_verified_at))
                    <!-- <div class="col-12">
                        <div class="alert bg-rgba-warning alert-dismissible mb-2"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <p class="mb-0">
                        Your email is not confirmed. Please check your inbox.
                    </p>
                    <a href="javascript: void(0);">Resend confirmation</a>
                </div>
            </div> -->
            @endif
            <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label>Phone</label>
                        <input type="text" class="form-control" required name="phone" value="{{ old('phone', isset($user) ? $user->phone : '') }}"
                        placeholder="Phone number" 
                        data-validation-required-message="This phone number field is required">
                        @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Date of Birth</label>
                    <div class="controls position-relative has-icon-left">
                        <input type="text" value="{{ old('dob', isset($user) ? $user->dob : '') }}"  name="dob" class="form-control custom-picker" required placeholder="Date of birth" data-validation-required-message="This birthdate field is required">
                        <div class="form-control-position">
                          <i class='bx bx-calendar'></i>
                      </div>
                      @if($errors->has('dob'))
                      <p class="help-block">
                        {{ $errors->first('dob') }}
                    </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
            <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
            changes</button>
            <button type="reset" class="btn btn-light mb-1">Cancel</button>
        </div>
    </div>


</form>
</div>
<div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
aria-labelledby="account-pill-info" aria-expanded="false">
   <form novalidate action="{{ route("updateInfo", [$user->id]) }}" method="POST" enctype="multipart/form-data">
                       @csrf
    <div class="row">
      <div class="col-12">  
        <div class="form-group">
            <div class="controls">
                <label>Address</label>
                <input type="text" name="address" value="{{ old('address', isset($user) ? $user->address : '') }}" class="form-control" placeholder="Address"
                data-validation-required-message="This Address field is required">
                @if($errors->has('address'))
                <p class="help-block">
                    {{ $errors->first('address') }}
                </p>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12">                                                <div class="form-group">
        <div class="controls">
            <label>City / District</label>
            <input type="text" class="form-control" value="{{ old('city', isset($user) ? $user->city : '') }}" name="city" placeholder="City / District"
            data-validation-required-message="This City / District field is required">
            @if($errors->has('city'))
            <p class="help-block">
                {{ $errors->first('city') }}
            </p>
            @endif
        </div>
    </div>
</div>
<div class="col-12">
 <div class="form-group">
    <label>State</label>
    <select class="form-control select2" name="state" id="state">
        @foreach($states as $key=>$value)
        <option value="{{$value->id}}" @if($value->id==$user->state) selected @endif>{{$value->name}}</option>
        @endforeach
    </select>
    @if($errors->has('state'))
    <p class="help-block">
        {{ $errors->first('state') }}
    </p>
    @endif
</div>
</div>
<div class="col-12">
 <div class="form-group">
    <div class="controls">
        <label>Pincode</label>
        <input type="text" name="pincode" class="form-control" placeholder="Pincode"
        data-validation-required-message="The Pincode field is required" value="{{ old('pincode', isset($user) ? $user->pincode : '') }}">
        @if($errors->has('pincode'))
        <p class="help-block">
            {{ $errors->first('pincode') }}
        </p>
        @endif
    </div>
</div>
</div>
<div class="col-12">
    <div class="form-group">
        <label>Country</label>
        <select class="form-control select2" name="country" id="country">
            <option value="101" selected="selected">India</option>
        </select>
    </div>
</div>

<div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
    <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
    changes</button>
    <button type="reset" class="btn btn-light mb-1">Cancel</button>
</div>
</div>
</form>
</div>

<div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
aria-labelledby="account-pill-password" aria-expanded="false">
 <form novalidate action="{{ route('change-password') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                          @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label>Current Password</label>
                    <input type="password" class="form-control" required
                    placeholder="Old Password" name="current_password" autocomplete="current-password"
                    data-validation-required-message="This old password field is required">
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label>New Password</label>
                    <input type="password" name="new_password" autocomplete="current-password" class="form-control"
                    placeholder="New Password" required
                    data-validation-required-message="The password field is required"
                    minlength="6">
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label>Retype new Password</label>
                    <input type="password" name="new_confirm_password" autocomplete="current-password"
                    class="form-control" required
                    data-validation-match-match="new_password"
                    placeholder="New Password"
                    data-validation-required-message="The Confirm password field is required"
                    minlength="6">
                </div>
            </div>
        </div>
        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
            <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
            changes</button>
            <button type="reset" class="btn btn-light mb-1">Cancel</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- account setting page ends -->
</div>
@endsection