<div class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-logo">
            <img src="{{ url('/assets/images/logo.png') }}" height="30" alt="Logo" loading="lazy">
        </a>
        <a href="#" class="sidebar-logo-text">e<span>-Pay</span></a>
    </div>

    <div class="sidebar-body">
        <ul class="nav-sidebar style-one">
            @if (Auth::guard('admin')->check())
                <li class='nav-item'>
                    <a href='{{ route('admin.home') }}' class='nav-link'>
                        <i data-feather='package'></i><span>Dashboard</span>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='{{ url('admin/admins') }}' class='nav-link'>
                        <i data-feather='users'></i><span>Admins</span>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='{{ url('admin/schools') }}' class='nav-link'>
                        <i data-feather='framer'></i><span>Schools</span>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='{{ url('admin/cafeteria') }}' class='nav-link'>
                        <i data-feather='coffee'></i><span>Cafeteria</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i data-feather="calendar"></i><span>Calendar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i data-feather="briefcase"></i><span>Customers</span>
                    </a>
                </li>
            @elseif(Auth::guard('cafe_staff')->check())
                <li class='nav-item'>
                    <a href='{{ route('cafeteria.home') }}' class='nav-link'>
                        <i data-feather='package'></i><span>Dashboard</span>
                    </a>
                </li>
                @if (Auth::user()->role == 'ADMIN')
                    <li class='nav-item'>
                        <a href='{{ url('cafeteria/staffs') }}' class='nav-link'>
                            <i data-feather='users'></i><span>Staffs</span>
                        </a>
                    </li>
                @endif
                <li class='nav-item'>
                    <a href='{{ url('cafeteria/foods') }}' class='nav-link'>
                        <i data-feather='coffee'></i><span>Foods</span>
                    </a>
                </li>
            @endif

        </ul>
        <hr>
        <ul class="nav-sidebar">
            <li class='nav-item'>
                <a href='' class='nav-link with-sub'>
                    <i data-feather='settings'></i><span>Preference</span>
                </a>
                <nav class='nav-sub'>
                    <a href='' class='sub-link' onclick='add_category()'>Add Category</a>
                    <a href='' class='sub-link' onclick='vendor_list()'>Vendors</a>
                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link" onclick="activity_logs()">
                    <i data-feather="activity"></i><span>Activity Logs</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-footer">
        <a href="" class="avatar online"><span class="avatar-initial">s</span></a>
        <div class="avatar-body">
            <div class="d-flex align-items-center justify-content-between">
                <h6>{{ Auth::user()->getFullNameAttribute() }}</h6>
            </div>
            <span>{{ Auth::user()->role }}</span>
        </div>
    </div>
</div>
