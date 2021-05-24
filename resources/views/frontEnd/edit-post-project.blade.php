@extends('layouts.front')

@section('content')

<!-- User Profile -->
<section class="section-padding content-wrapper">
 <div class="container">
  <div class="row">
    
     @include('layouts.sidebarfront')
<div class="col-lg-9 col-md-9">
  <form class="form-horizontal" role="form" action="{{ route('update-project', [$item->id]) }}" method="POST" enctype="multipart/form-data">
                    
                      {{ csrf_field() }}
   <div class="card padding-card">
    <div class="card-body">
     <h5 class="card-title mb-4">Edit Project Posting</h5>
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
      <div class="form-group col-md-6">
        <label>Name and last name<span class="text-danger">*</span></label>
      <input class="form-control" placeholder="Enter Name" value="{{$item->name}}" type="text" name="name" required="required">
      @if ($errors->has('name'))
        <div class="text-danger">{{ $errors->first('name') }}</div>
        @endif
      </div>
      <div class="form-group col-md-6">
        <label>Address  <span class="text-danger">*</span></label>
        <textarea type="text" name="address" placeholder="Enter Address" required class="form-control" rows="1">{{$item->address}}</textarea>
        @if ($errors->has('address'))
        <div class="text-danger">{{ $errors->first('address') }}</div>
        @endif
      </div>

    </div>
    <div class="row">
     
     <div class="form-group col-md-6">
       <label>Type of professional needed <span class="text-danger">*</span></label>
        <select class="form-control no-radius" name="professional_type" required="required" data-placeholder="Select Type of professional needed ">
      <option value="">Please Select</option>
       @foreach($parentTypes as $key=>$value)
     <optgroup label="{{$value->type}}">
           <?php $childTypes=\App\ProfessionalType::where('parent_id','!=','0')->where('status','0')->where('parent_id',$value->id)->get();?>
             @foreach($childTypes as $key1=>$value1)
             <option @if($value1->id==$item->professional_type) selected @endif value="{{$value1->id}}">{{$value1->type}}</option>
             
           @endforeach
          </optgroup>
    @endforeach
     
         
    </select>
        @if ($errors->has('professional_type'))
        <div class="text-danger">{{ $errors->first('professional_type') }}</div>
        @endif
      
    </div>
    <div class="form-group col-md-6">
     <label>The industry of the professional<span class="text-danger">*</span></label>
     <select class="form-control no-radius" name="professional_industry" required="required" data-placeholder="Select The industry of the professional">
      <option value="">Please Select</option>
       @foreach($industries as $key=>$value)
     <option @if($value->id==$item->professional_industry) selected @endif value="{{$value->id}}">{{$value->industry}}</option>
    @endforeach
 
      </select>
       @if ($errors->has('professional_industry'))
        <div class="text-danger">{{ $errors->first('professional_industry') }}</div>
        @endif
  </div>
  <div class="form-group col-md-6">
   <label>Type of client are you <span class="text-danger">*</span></label>
   <select class="form-control no-radius " name="clients_type" required="required"  data-placeholder="Type of client are you">
    <option value="">Please Select</option>
    <option @if($item->clients_type=='Individual') selected @endif value="Individual">Individual</option>
    <option @if($item->clients_type=='Business-owner') selected @endif value="Business-owner">Business owner</option>
    <option @if($item->clients_type=='self-employed') selected @endif value="self-employed">Self-employed </option>
   
  </select>
   @if ($errors->has('clients_type'))
        <div class="text-danger">{{ $errors->first('clients_type') }}</div>
        @endif
</div>
<div class="form-group col-md-6">
 <label>Budget <span class="text-danger">*</span></label>
 <input type="text" class="form-control no-radius" name="budget" value="{{$item->budget}}" required="required" placeholder="Budget">
  @if ($errors->has('budget'))
        <div class="text-danger">{{ $errors->first('budget') }}</div>
        @endif
</div>
<div class="form-group col-md-6">
 <label>How do you want to pay <span class="text-danger">*</span></label>
 <select class="form-control no-radius"  name="payout_option" data-placeholder="How do you want to pay">
   <option value="">Please Select</option>
    <option @if($item->payout_option=='hourly') selected @endif value="hourly">hourly</option>
    <option @if($item->payout_option=='project-based') selected @endif value="project-based">Project-based</option>
    <option @if($item->payout_option=='no-preference') selected @endif value="no-preference">No preference</option>
    
 
 </select>
   @if ($errors->has('payout_option'))
        <div class="text-danger">{{ $errors->first('payout_option') }}</div>
        @endif
</div>
<div class="form-group col-md-6">
 <label>The 3 of 10 best qualities of the professional <span class="text-danger"></span></label>
 <select class="form-control no-radius"  name="professional_quality[]" multiple="multiple" required="required" data-placeholder="The 3 of 10 best qualities of the professiona">
    @foreach($qualities as $key=>$value)
     <option value="{{$value->id}}">{{$value->quality}}</option>
    @endforeach
 
 </select>
   @if ($errors->has('professional_quality'))
        <div class="text-danger">{{ $errors->first('professional_quality') }}</div>
        @endif
</div>
<div class="form-group col-md-6">
 <label>When do you need the project <span class="text-danger">*</span></label>
 <select class="form-control no-radius" name="time_duration" required="required"  data-placeholder="When do you need the project">
   <option value="">Please Select</option>
   <option @if($item->time_duration=='asap') selected @endif value="asap">Asap</option>
   <option @if($item->time_duration=='week') selected @endif value="week">In a week</option>
   <option @if($item->time_duration=='year') selected @endif value="year">In a year</option>
    
   
 </select>
 @if ($errors->has('time_duration'))
        <div class="text-danger">{{ $errors->first('time_duration') }}</div>
        @endif
</div>
<div class="form-group col-md-6">
 <label>Status <span class="text-danger">*</span></label>
 <select class="form-control no-radius" name="status" required="required"  data-placeholder="status">
   <option value="">Please Select</option>
   <option @if($item->status=='active') selected @endif value="active">Active</option>
   <option @if($item->status=='inactive') selected @endif value="inactive">In-Active</option>
   <option @if($item->status=='inprocess') selected @endif value="inprocess">In-Process</option>
   <option @if($item->status=='completed') selected @endif value="completed">Completed</option>
    
   
 </select>
 @if ($errors->has('status'))
        <div class="text-danger">{{ $errors->first('status') }}</div>
        @endif
</div>
<div class="form-group col-md-12">
 <label>Project Description <span class="text-danger">*</span></label>
   <textarea type="text" name="description" placeholder="Project Description" required class="form-control" rows="5">{{$item->description}}</textarea>
 @if ($errors->has('description'))
 <div class="text-danger">{{ $errors->first('description') }}</div>
 @endif
</div>


<div class="form-group col-md-12">
 <label>Attachment</label>
 <input type="file" class="form-control" name="attachment" placeholder="">
 @if ($errors->has('attachment'))
        <div class="text-danger">{{ $errors->first('attachment') }}</div>
        @endif
</div>
</div>

</div>
</div>


<button type="submit" class="btn btn-primary btn-lg">Update</button>

</form>
</div>
</div>
</div>
</section>
<!-- End User Profile -->


@endsection

