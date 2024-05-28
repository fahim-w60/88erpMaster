
       @can('rlp-module') 
      <li class="nav-item dropdown remove_from_header">
        <a class="nav-link" data-toggle="dropdown" href="#">
           {{ __('label.pm_module') }} <i class="right fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
       <p style="padding-left: 20px;"><b>Project Management</b></p>
       <div class="dropdown-divider"></div>
        
         <div style="display: flex;">
         <a href="{{route('tender.index')}}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> {{ __('label.tender-info') }}
          </a>
          <a  href="{{route('tender.create')}}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>

        <div style="display: flex;">
         <a href="{{ route('pm-workorder.create')}}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Project Info
          </a>
          <a  href="{{ route('pm-workorder.create')}}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>

        <div style="display: flex;">
         <a href="{{ route('stage.index') }}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Project Stage
          </a>
          <a  href="{{ route('stage.create') }}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>

        <div style="display: flex;">
         <a href="{{ route('task.index') }}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Task/Activities
          </a>
          <a  href="{{ route('task.create') }}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>

        <div style="display: flex;">
         <a href="{{ route('pm_documents.index') }}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Documents
          </a>
          <a  href="{{ route('pm_documents.create') }}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>
       
       
      </li>
    @endcan