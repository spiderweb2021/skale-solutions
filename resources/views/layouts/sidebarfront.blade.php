  <div class="col-lg-3 col-md-3">
                  <div class="card sidebar-card">
                     <div class="card-body">
                         <ul class="nav-sidebar">
                             <li class="nav-item">
                                <a class="nav-link @if(end(Request::segments())=='userdashboard') active text-success @endif" href="{{ url('/userdashboard') }}">Dashboard</a>
                             </li>
                             @if(\Auth::user()->roles[0]->id == 3)
                             <li>
                                 <a class="nav-link @if(end(Request::segments())=='user-projects') active text-success @endif" href="{{ route('user.projects') }}">{{ __('general.my_project') }}</a>
                             </li>
                             @endif
                             <li class="nav-item">
                                <a class="nav-link @if(end(Request::segments())=='my-profile') active text-success @endif" href="{{ url('/my-profile') }}">{{ __('general.my_profile') }}</a>
                             </li>
                             @if(\Auth::user()->roles[0]->id=='2')
                             <li class="nav-item">
                                <a class="nav-link @if(end(Request::segments())=='post-project') active text-success @endif" href="{{ route('post-project') }}">{{ __('general.post_project') }}</a>
                                <a class="nav-link @if(end(Request::segments())=='my-project') active text-success @endif" href="{{ route('my-project') }}">{{ __('general.my_project') }}</a>
                                <a class="nav-link @if(end(Request::segments())=='ongoing-project') active text-success @endif" href="{{ route('ongoing-project') }}">{{ __('general.ongoing_project') }}</a>
                                <a class="nav-link @if(end(Request::segments())=='past-project') active text-success @endif" href="{{ route('past-project') }}">{{ __('general.past_project') }}</a>
                             </li>
                             @endif
                             
							
			             
                             <li class="nav-item">
                                <a class="nav-link @if(end(Request::segments())=='change-password') active text-success @endif" href="{{url('/change-password')}}">{{ __('general.change_password') }}</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link @if(end(Request::segments())=='my-notification') active text-success @endif" href="{{url('/my-notification')}}">{{ __('general.notification') }} 

                                    @if(get_project_notification_count() > 0)
                                    <span class="danger" style="color: red;">
                                      ( {{get_project_notification_count()}} )
                                    </span>
                                    @endif
                                </a>
                             </li>
                             
                          </ul>
                     </div>
                  </div>
                </div>