@extends('layouts.front')
@section('content')
<style type="text/css">
  <style>
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}
/* Hide all steps by default: */
.tab {
  display: none;
}
button:hover {
  opacity: 0.8;
}
#prevBtn {
  background-color: #bbbbbb;
}
/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
.step.active {
  opacity: 1;
}
/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
</style>
<!-- User Profile -->
<section class="section-padding content-wrapper">
 <div class="container">
  <div class="row">
   @include('layouts.sidebarfront')
<div class="col-lg-9 col-md-9">
  <form id="regForm" class="form-horizontal" role="form" action="{{ route('post-profile', [$userdata->id]) }}"  method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      
   <div class="card padding-card">
    <div class="card-body">
     <div class="row">
       <div class="col-md-12">
         <div class="row">
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
           <div class="tab"><h5 class="card-title mb-4">Personal Details</h5>
           <div class="form-group col-md-9">
            <label>Name <span class="text-danger">*</span></label>
            <input type="text" required="required"  name="name" value="{{$userdata->name}}" class="form-control" placeholder="Enter Your Name">
             @if ($errors->has('name'))
        <div class="text-danger">{{ $errors->first('name') }}</div>
        @endif
          </div>
          <div class="form-group col-md-9">
            <label>Email Address <span class="text-danger">*</span> 
            </label>
            <input type="email" name="email" value="{{$userdata->email}}" class="form-control" required="required" placeholder="Enter Email Address">
            @if ($errors->has('email'))
        <div class="text-danger">{{ $errors->first('email') }}</div>
        @endif
          </div>
          <div class="form-group col-md-9">
            <label>Phone <span class="text-danger">*</span> 
            </label>
            <input type="text" name="phone" value="{{$userdata->phone}}" class="form-control" required="required" placeholder="Enter Mobile Phone">
               @if ($errors->has('phone'))
        <div class="text-danger">{{ $errors->first('phone') }}</div>
        @endif
          </div>
          @if(\Auth::user()->roles[0]->id=='2')
          <div class="form-group col-md-9">
            <label>postalcode <span class="text-danger">*</span> 
            </label>
            <input type="text" name="postalcode" value="{{$userdata->pincode}}" class="form-control" required="required" placeholder="Enter postal Code">
               @if ($errors->has('postalcode'))
        <div class="text-danger">{{ $errors->first('postalcode') }}</div>
        @endif
          </div>
          <div class="form-group col-md-9">
            <label>language <span class="text-danger">*</span> 
            </label>
            <input type="text" name="language" value="{{$userdata->language}}" class="form-control" required="required" placeholder="Enter languagee">
               @if ($errors->has('language'))
        <div class="text-danger">{{ $errors->first('language') }}</div>
        @endif
          </div>
          @elseif(\Auth::user()->roles[0]->id=='3')
          <div class="form-group col-md-9">
            <label>Business Name <span class="text-danger">*</span> 
            </label>
            <input type="text" name="business_name" value="{{$userdata->business_name}}" class="form-control" required="required" placeholder="Enter Business Name">
               @if ($errors->has('business_name'))
        <div class="text-danger">{{ $errors->first('business_name') }}</div>
        @endif
          </div>
          @endif
           <div class="form-group col-md-9">
            <label>Password <span class="text-danger"></span> 
            </label>
            <input type="text" name="password"  class="form-control"  placeholder="Enter password">
          </div>
        </div>
        @if(\Auth::user()->roles[0]->id=='3')
        <div class="tab"><h5 class="card-title mb-4">Professionl Details</h5>
          <div class="form-group col-md-9">
     <label>Categories of Service<span class="text-danger">*</span></label>
     <select class="form-control no-radius" name="professional_industry" required="required" data-placeholder="Select The Categories of Service">
      <!-- <option value="">Please Select</option> -->
       @foreach($industries as $key=>$value)
     <option @if($value->id==$userdata->professional_industry) selected @endif value="{{$value->id}}">{{$value->industry}}</option>
    @endforeach
      </select>
       @if ($errors->has('professional_industry'))
        <div class="text-danger">{{ $errors->first('professional_industry') }}</div>
        @endif
  </div>
  <div class="form-group col-md-9">
     <label>Area of Expertise<span class="text-danger">*</span></label>
     <select class="form-control no-radius" name="expertise" required="required" data-placeholder="Select The Area of Expertise">
       <!-- <option value="">Please Select</option> -->
       @foreach($parentTypes as $key=>$value)
     <optgroup label="{{$value->type}}">
           <?php $childTypes=\App\ProfessionalType::where('parent_id','!=','0')->where('status','0')->where('parent_id',$value->id)->get();?>
             @foreach($childTypes as $key1=>$value1)
             <option value="{{$value1->id}}">{{$value1->type}}</option>
             
           @endforeach
          </optgroup>
    @endforeach
      </select>
       @if ($errors->has('expertise'))
        <div class="text-danger">{{ $errors->first('expertise') }}</div>
        @endif
  </div>
          <div class="form-group col-md-9">
 <label>CV</label>
 <input type="file" class="form-control" name="attachment" placeholder="">
</div>
        </div>
          <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" class="btn btn-primary btn-sm" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" class="btn btn-primary btn-sm" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
  </div>
   @else
   <div class="form-group col-md-9">
  <button type="submit"   class="btn btn-primary btn-sm">Submit</button>
</div>
   @endif
        </div>
      </div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</section>
 <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}
function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  // x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  x[currentTab-n].style.display = "none";
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "" && y[i].hasAttribute("required")){
       
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}
function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
@endsection