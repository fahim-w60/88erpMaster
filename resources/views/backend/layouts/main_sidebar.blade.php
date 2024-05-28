<aside class="main-sidebar sidebar-dark-primary ">
    <!-- Brand Logo -->
    
@php
   $current_url = Route::current()->getName();
@endphp
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
     
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li>
            <a href="{{url('home')}}" class="brand-link">
      <img src="{{asset('/')}}{{$settings->logo ?? ''}}" alt="{{$settings->name ?? '' }}" class="brand-image  elevation-3" >
      <span class="brand-text font-weight-light"></span>
    </a>
          </li>
          <li class="nav-item ">
            <a href="{{url('home')}}" class="nav-link {{ ( $current_url=='home' ) ? 'nest_active' : '' }}"  >
              <i class="fa fa-credit-card nav-icon" aria-hidden="true"></i>
              <p>
                  {{ __('label.Dashboard') }}
              </p>
            </a>
          </li>


          <li class="nav-item {{ Route::is('roles.*') || Route::is('users.*') || Route::is('sms-send')  || Route::is('all-lock') || Route::is('invoice-prefix') || Route::is('database-backup') || Route::is('admin-settings') || Route::is('branch.*') || Route::is('social_media.*') || Route::is('cost-center.*') || Route::is('store-house.*')  ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link {{ Route::is('roles.*') || Route::is('users.*') || Route::is('admin-settings') || Route::is('branch.*')  || Route::is('cost-center.*')|| Route::is('sms-send') || Route::is('invoice-prefix')  || Route::is('database-backup')  || Route::is('all-lock')  || Route::is('store-house.*')   ? 'active' : '' }}">
            
               <i class="fas fa-cog nav-icon"></i> 
              <p>
                {{ __('label.Settings') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               
            
              
              
           
               @can('role-list')
              <li class="nav-item">
                <a href="{{url('roles')}}" class="nav-link {{Route::is('roles.*')   ? 'active' : '' }}">
                  <i class="fa fa-server nav-icon"></i>
                  <p>{{ __('label.Roles') }}</p>
                </a>
              </li>
              @endcan
              @can('user-list')
              <li class="nav-item">
                <a href="{{url('users')}}" class="nav-link {{Route::is('users.*')   ? 'active' : '' }}">
                  <i class="fas fa-users nav-icon"></i>
                  <p>{{ __('label.Users') }}</p>
                </a>
              </li>
              @endcan
              @can('branch-list')
              <li class="nav-item">
                <a href="{{url('branch')}}" class="nav-link {{Route::is('branch.*')   ? 'active' : '' }}">
                 <i class="fa fa-share-alt nav-icon"></i>
                  <p>{{ __('label.Branch') }} </p>
                </a>
              </li>
              @endcan
             
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>