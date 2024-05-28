

      @can('budgets-list') 
      <li class="nav-item dropdown remove_from_header">
        <a class="nav-link" data-toggle="dropdown" href="#">
           {{ __('label.budgets') }} <i class="right fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
       
       <div class="dropdown-divider"></div>
        @can('budgets-list')
         <div style="display: flex;">
         <a href="{{route('budgets.index')}}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> {{ __('label.budgets') }}
          </a>
          <a  href="{{route('budgets.create')}}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>
        @endcan
        
       
      </li>
    @endcan


       @can('rlp-module') 
      <li class="nav-item dropdown remove_from_header">
        <a class="nav-link" data-toggle="dropdown" href="#">
           {{ __('label.procurement') }} <i class="right fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
       <p style="padding-left: 20px;"><b>Settings</b></p>
       <div class="dropdown-divider"></div>
        @can('approval-chain-list')
         <div style="display: flex;">
         <a href="{{route('approval-chain.index')}}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> {{ __('label.approval-chain') }}
          </a>
          <a  href="{{route('approval-chain.create')}}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>
        @endcan
        <p style="padding-left: 20px;"><b>{{ __('label.procurement') }}</b></p>
       <div class="dropdown-divider"></div>
        @can('rlp-list')
         <div style="display: flex;">
         <a href="{{route('rlp.index')}}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> {{ __('label.rlp-info') }}
          </a>
          <a  href="{{route('rlp.create')}}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>
        @endcan

        @can('rlp-list')
         <div style="display: flex;">
         <a href="#" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Purchase Quotation
          </a>
          <a  href="#" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>
        @endcan

        <div style="display: flex;">
         <a href="{{ route('pm-notesheet.index')}}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Notesheet
          </a>
          <a  href="{{ route('pm-notesheet.create')}}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>

        <div style="display: flex;">
         <a href="#" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Qoutation Evaluation/CS
          </a>
          <a  href="#" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>

        <div style="display: flex;">
         <a href="{{ route('pm-workorder.index')}}" class="dropdown-item">
            <i class="fa fa-fax mr-2" aria-hidden="true"></i> Workorder/PO
          </a>
          <a  href="{{ route('pm-workorder.create')}}" class="dropdown-item text-right">
            <i class="nav-icon fas fa-plus"></i>
          </a>
        </div>


       </div>
      </li>
    @endcan