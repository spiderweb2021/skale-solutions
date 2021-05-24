@extends('layouts.admin')



@section('content')



<div class="content-header row">

  <div class="content-header-left col-12 mb-2 mt-1">

    <div class="row breadcrumbs-top">

      <div class="col-12">

        <h5 class="content-header-title float-left pr-1 mb-0">{{ __('general.project_management') }} </h5>

        <div class="breadcrumb-wrapper float-left col-7">

          <ol class="breadcrumb p-0 mb-0">

            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>

            </li>

            <li class="breadcrumb-item active"> 
            </li>

          </ol>

        </div>

        <div class="button-wrapper float-right">

          

        </div>

      </div>

        @if ($message = Session::get('success'))

          <div class="alert alert-success">

            <p>{{ $message }}</p>

          </div>

          @endif

    </div>

  </div>

</div>

<div class="content-body">



   <!-- users list start -->

<section class="users-list-wrapper">

    

    <div class="users-list-table">

        <div class="card">

            <div class="card-content">

                <div class="card-body">

                    <!-- datatable start -->

                    <div class="table-responsive">

                        <table id="users-list" class="table table-striped table-bordered custom-datatable">

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

                                @foreach ($result as $key => $value)

                                 <tr>

                                  <td>{{$key+1}}</td>
                                       <td>{{$value->name}}</td>
                                       <td>{{$value->professionalType->type}}</td>
                                       <td>{{$value->IndustryType->industry}}</td>
                                       <td>{{$value->budget}}</td>
                                       <td>{{$value->status}}</td>

                                  

                                  <td>

                                  <!--  <a class="btn btn-primary btn-icon" href="{{ route('projects.edit',$value->id) }}"><i class="bx bxs-edit"></i></a> -->
                                   <a class="btn btn-primary btn-icon" href="{{ route('projects.show',$value->id) }}">View</a>

                                   {!! Form::open(['method' => 'DELETE','route' => ['projects.destroy', $value->id],'style'=>'display:inline']) !!}

                                   {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-icon']) !!}

                                   {!! Form::close() !!}

                                 </td>

                               </tr>

                               @endforeach

                            </tbody>

                        </table>

                    </div>

                    <!-- datatable ends -->

                </div>

            </div>

        </div>

    </div>

</section>



</div>

{!! $result->render() !!}



@endsection