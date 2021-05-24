 <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
              <div class="brand-logo"><img class="logo" src=""/></div>
              </a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0 mt-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-large-1 primary"></i><i class="toggle-icon bx bx-menu-alt-left font-large-1 d-none d-xl-block primary" data-ticon="bx-menu-alt-left"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
          <li class=" nav-item"><a href="{{ route('dashboard') }}"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">{{ __('general.Dashboard') }}</span></a>
            
          </li>
          <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="User">{{ __('general.user_management') }}</span></a>
            <ul class="menu-content">
              <li><a href="{{ route('users.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Edit user">{{ __('general.manage_users') }}</span></a>
              </li>
           
              <li><a href="{{ route('roles.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Manage Role">{{ __('general.manage_role') }}</span></a>
              </li>
              </li>


            </ul>

           
         
          

          
          
          <li class=" nav-item"><a href="{{route('setting')}}"><i class="menu-livicon" data-icon="user"></i><span class="menu-title" data-i18n="Profile">{{ __('general.profile_setting') }}</span></a>
          </li>
          
          <li class=" nav-item"><a href="{{ route('projects.index') }}"><i class="menu-list" data-icon="download"></i><span class="menu-title" data-i18n="Profile">{{ __('general.project') }}</span></a>
          </li>
          
        
      </div>
    </div>
