@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

          
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('admin/home') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            @if(auth()->user()->can('users_manage') || auth()->user()->can('users_download') )
  

            <li class="{{ $request->segment(2) == 'register' ? 'active' : '' }}">
                <a href="{{ route('admin.register.index') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">Consultar</span>
                </a>
            </li>
           @endif
            @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Control de Usuarios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Permisos
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Roles
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                Usuarios
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">Cerrar Sessión</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
