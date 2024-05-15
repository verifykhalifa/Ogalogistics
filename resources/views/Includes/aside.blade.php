<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            <li class="nav-static-title"></li>
            <li><a href="/dashboard" aria-expanded="false"><i class="dashicons dashicons-admin-home"></i><span class="nav-title">Home</span></a> </li>
            <li><a href="/orderallocation" aria-expanded="false"><i class="fa fa-cart-arrow-down"></i><span class="nav-title">Order Allocation</span></a> </li>
            <li><a href="/alluser" aria-expanded="false"><i class="fa fa-users"></i><span class="nav-title">Customer</span></a> </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-motorcycle"></i><span class="nav-title">Driver</span></a>
                <ul aria-expanded="false">
                    <li> <a href='/driverreg'>Create Driverr</a> </li>
                    <li> <a href='/managedriver'>Manage Driver</a> </li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="dashicons dashicons-groups"></i><span class="nav-title">Estimate</span></a>
                <ul aria-expanded="false">
                    <li> <a href='{{route('customer.index')}}'>Manage Estimates</a> </li>
                    {{-- <li> <a href='{{route('customer.edit', auth()->user()->id)}}'>Manage Estimates</a> </li> --}}
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="dashicons dashicons-groups"></i><span class="nav-title">Partner</span></a>
                <ul aria-expanded="false">
                    <li> <a href='/partnersreg'>Create Partner</a> </li>
                    <li> <a href='/managepartners'>Manage Partner</a> </li>
                </ul>
            </li>
            
            <li class="nav-static-title">Administrator Settings</li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-title">Admin User</span></a>
                <ul aria-expanded="false">
                    <li> <a href='/adminuserreg'>Create Admin User</a> </li>
                    <li> <a href='/manageadminuser'>Manage Admin User</a> </li>
                </ul>
            </li>
            
           
        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>