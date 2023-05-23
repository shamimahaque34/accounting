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
            @can('registration_access')
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#registrations" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Registration</span>
                </a>
                <div class="collapse" id="registrations">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('registrations')}}">Manage Registrations Info</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endcan

            @can('user_access')
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#users" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span>User</span>
                    </a>
                    <div class="collapse" id="users">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{route('users.index')}}">Manage Users Info</a>
                            </li>
                        </ul>
                    </div>

           
                  
             
        </li>
        @endcan
@can('role_access')
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
     @endcan

     @can('permission_access')
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
     @endcan

     @can('company_access')   
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
            @endcan

                @can('company_ibs_access')
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#companyIbs" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span>Company Ibs</span>
                    </a>
                    <div class="collapse" id="companyIbs">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{route('company_ibses.index')}}">Manage Company Ibs Info</a>
                            </li>
                        </ul>
                    </div>

               
                      
                 
            </li>
            @endcan

           

            @can('currency_access')
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
 @endcan

 @can('category_access')
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
 @endcan

 @can('customer_access')
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
 @endcan

 @can('vendor_access')
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
 @endcan

 @can('tax_access')
 
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
 @endcan

 @can('item_access')
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

 @endcan

 @can('income_access')
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
 @endcan

 @can('expense_access')
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
 @endcan

 @can('invoice_access')
 <li class="side-nav-item">
                
    <a data-bs-toggle="collapse" href="#invoice" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
        <i class="uil-home-alt"></i>
        <span>Invoice</span>
    </a>
    <div class="collapse" id="invoice">
    <ul class="side-nav-third-level">
        <li>
            <a href="{{route('invoices.index')}}">Manage Invoice Info</a>
        </li>
    </ul>
    </div>
</li>
@endcan


       </ul>

       
    </div>
    <!-- Sidebar -left -->

</div>

<div class="clearfix"></div>

