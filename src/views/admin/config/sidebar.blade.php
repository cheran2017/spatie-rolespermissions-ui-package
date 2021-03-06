<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{ asset('rolespermissions/images/faces/face1.jpg') }}" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                <span class="text-secondary text-small">
                  @if(!empty($roles=Auth::user()->roles))
                    {{implode(" ",$roles->pluck('name')->toArray())}}
                  @endif
                </span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          @if(Auth::user()->hasPermissionTo('Dashboard'))
          <li class="nav-item">
            <a class="nav-link" href="{{url('/roles-permissions/dashboard')}}">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          @endif
          @if(Auth::user()->hasPermissionTo('Users'))
          <li class="nav-item">
            <a class="nav-link" href="/users">
              <span class="menu-title">Users</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          @endif
          @if(Auth::user()->hasPermissionTo('Roles') || Auth::user()->hasPermissionTo('Permissions') || Auth::user()->hasPermissionTo('Permission Groups'))
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Roles and Permissions</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                 @if(Auth::user()->hasPermissionTo('Permissions'))
                <li class="nav-item"> <a class="nav-link" href="{{url('permissions')}}">Permissions</a></li>
                @endif
                 @if(Auth::user()->hasPermissionTo('Permission Groups'))
                <li class="nav-item"> <a class="nav-link" href="{{url('permissions-groups')}}">Permissions Groups</a></li>
                @endif
                 @if(Auth::user()->hasPermissionTo('Roles'))
                <li class="nav-item"> <a class="nav-link" href="{{url('roles')}}">Roles</a></li>
                @endif
              </ul>
            </div>
          </li>
          @endif
        </ul>
      </nav>