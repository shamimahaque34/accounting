<div class="leftside-menu">

    <!-- LOGO -->
    <!-- <a href="{{ route('dashboard') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('/') }}backend/assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/') }}backend/assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a> -->

    <!-- LOGO -->
    <a href="{{ route('dashboard') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('/') }}backend/assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/') }}backend/assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <!-- <li class="side-nav-title side-nav-item">Menu Options</li> -->
            <li class="side-nav-item {{ request()->is('dashboard') ? 'menuitem-active' : '' }}">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>
<!-- 
            <li class="side-nav-title side-nav-item">Only for admin</li> -->
         
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#company" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Company</span>
                </a>
                <div class="collapse" id="company">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('companies.index')}}">Manage Company Info</a>
                        </li>
                    </ul>
                </div>

               
                      
                 
            </li>

            <li class="side-nav-item">
                
                <a data-bs-toggle="collapse" href="#role" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Role</span>
                </a>
                <div class="collapse" id="role">
                <ul class="side-nav-third-level">
                    <li>
                        <a href="{{route('roles.index')}}">Manage Role Info</a>
                    </li>
                </ul>
                </div>
         </li>


         <li class="side-nav-item">
                
                        <a data-bs-toggle="collapse" href="#permission" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span>Permission</span>
                        </a>
                        <div class="collapse" id="permission">
                        <ul class="side-nav-third-level">
                            <li>
                                <a href="{{route('permissions.index')}}">Manage Permission Info</a>
                            </li>
                        </ul>
                        </div>
         </li>


         <li class="side-nav-item">
                
                <a data-bs-toggle="collapse" href="#currency" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Currency</span>
                </a>
                <div class="collapse" id="currency">
                <ul class="side-nav-third-level">
                    <li>
                        <a href="{{route('currencies.index')}}">Manage Currency Info</a>
                    </li>
                </ul>
                </div>
 </li>


 <li class="side-nav-item">
                
                <a data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Category</span>
                </a>
                <div class="collapse" id="category">
                <ul class="side-nav-third-level">
                    <li>
                        <a href="{{route('categories.index')}}">Manage Category Info</a>
                    </li>
                </ul>
                </div>
 </li>


 <li class="side-nav-item">
                
                <a data-bs-toggle="collapse" href="#customer" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Customer</span>
                </a>
                <div class="collapse" id="customer">
                <ul class="side-nav-third-level">
                    <li>
                        <a href="{{route('customers.index')}}">Manage Customer Info</a>
                    </li>
                </ul>
                </div>
 </li>

 <li class="side-nav-item">
                
                <a data-bs-toggle="collapse" href="#vendor" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Vendor</span>
                </a>
                <div class="collapse" id="vendor">
                <ul class="side-nav-third-level">
                    <li>
                        <a href="{{route('vendors.index')}}">Manage Vendor Info</a>
                    </li>
                </ul>
                </div>
 </li>


 
 <li class="side-nav-item">
                
                <a data-bs-toggle="collapse" href="#tax" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Tax</span>
                </a>
                <div class="collapse" id="tax">
                <ul class="side-nav-third-level">
                    <li>
                        <a href="{{route('taxes.index')}}">Manage Tax Info</a>
                    </li>
                </ul>
                </div>
 </li>


 <li class="side-nav-item">
                
                <a data-bs-toggle="collapse" href="#item" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Item</span>
                </a>
                <div class="collapse" id="item">
                <ul class="side-nav-third-level">
                    <li>
                        <a href="{{route('items.index')}}">Manage Item Info</a>
                    </li>
                </ul>
                </div>
 </li>


 <li class="side-nav-item">
                
                <a data-bs-toggle="collapse" href="#income" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Income</span>
                </a>
                <div class="collapse" id="income">
                <ul class="side-nav-third-level">
                    <li>
                        <a href="{{route('incomes.index')}}">Manage Income Info</a>
                    </li>
                </ul>
                </div>
 </li>


 <li class="side-nav-item">
                
                <a data-bs-toggle="collapse" href="#expense" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Expense</span>
                </a>
                <div class="collapse" id="expense">
                <ul class="side-nav-third-level">
                    <li>
                        <a href="{{route('expenses.index')}}">Manage Expense Info</a>
                    </li>
                </ul>
                </div>
 </li>


       </ul>

       
    </div>
    <!-- Sidebar -left -->

</div>

<div class="clearfix"></div>

