
     
      <li class="nav-item dropdown remove_from_header">
        <a class="nav-link" data-toggle="dropdown" href="#">
           Fixed Assets <i class="right fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
       
      
        <p style="padding-left: 20px;"><b>Fixed Assets</b></p>
       <div class="dropdown-divider"></div>
        
         <div style="display: flex;">
         <a href="{{route('assets_info.index')}}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Assets Info
          </a>
          <a  href="{{route('assets_info.create')}}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>
       

      
         <div style="display: flex;">
         <a href="{{ route('assign-fixed-asset.create') }}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Assign
          </a>
          <a  href="{{ route('assign-fixed-asset.create') }}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>
       

        <div style="display: flex;">
         <a href="{{ route('transfer-fixed-asset.create') }}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Transfer
          </a>
          <a  href="{{ route('transfer-fixed-asset.create') }}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>

        <div style="display: flex;">
         <a href="{{ route('return-fixed-asset.create') }}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Return
          </a>
          <a  href="{{ route('return-fixed-asset.create') }}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>

        <div style="display: flex;">
         <a href="{{ route('disposal-fixed-asset.create') }}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Disposal
          </a>
          <a  href="{{ route('disposal-fixed-asset.create') }}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>

        <div style="display: flex;">
         <a href="#" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Depreciation Rate
          </a>
          <a  href="#" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>


        <div style="display: flex;">
         <a href="#" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Depreciation
          </a>
          <a  href="#" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>


       </div>
      </li>
 