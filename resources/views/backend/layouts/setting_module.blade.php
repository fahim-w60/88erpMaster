<li class="nav-item dropdown remove_from_header">
        <a class="nav-link" data-toggle="dropdown" href="#">
          
          {{ __('label.Settings') }} <i class="right fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
          
       @can('role-list')
         <div class="dropdown-divider"></div>
        <div style="display: flex;">
         <a href="{{url('roles')}}" class="dropdown-item">
          <i class="fa fa-server  mr-2" aria-hidden="true"></i>{{ __('label.Roles') }}
          </a>
           <a    
          class="dropdown-item text-right "
           
            href="{{route('roles.create')}}"> 
            <i class="nav-icon fas fa-plus"></i> </a>
        </div>
        @endcan
        @can('user-list')
         <div class="dropdown-divider"></div>
        <div style="display: flex;">
         <a href="{{url('users')}}" class="dropdown-item">
            <i class="fas fa-users  mr-2"></i> {{ __('label.Users') }}
          </a>
          <a   href="#None" 
          class="dropdown-item text-right "
            href="{{route('users.create')}}"> 
            <i class="nav-icon fas fa-plus"></i> </a>
        </div>
          
         @endcan
        
        @can('branch-list')
         <div class="dropdown-divider"></div>
        <div style="display: flex;">
          <a href="{{url('branch')}}" class="dropdown-item">
            <i class="fa fa-share-alt mr-2" aria-hidden="true"></i> {{ __('label.Branch') }} 
          </a>
           <a   
          class="dropdown-item text-right "
            href="{{route('branch.create')}}"> 
            <i class="nav-icon fas fa-plus"></i> </a>
        </div>
         
         @endcan
     
       
       
      
       
        
              
              
      </li>