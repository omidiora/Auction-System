<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="{{route("AdminUserDashboard")}}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Manage Users
                </p>
            </a>
        </li>
        <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="{{route("AdminProduct")}}" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>
                <p>
                    Manage Products
                </p>
            </a>
        </li>
        <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="{{route("AdminCategory")}}" class="nav-link">
                <i class="nav-icon fas fa-pencil-alt"></i>
                <p>
                    Manage Categories
                </p>
            </a>
        </li>
        {{-- <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="managebid/html" class="nav-link">
                <i class="nav-icon far fa-credit-card"></i>
                <p>
                    Manage Bids
                </p>
            </a>
        </li> --}}
        {{-- <li class="nav-item menu-open mb-3 pb-3 user-panel">
            <a href="updatelanguage.html" class="nav-link">
                <i class="nav-icon fas fa-language"></i>
                <p>
                    Update Language
                </p>
            </a>
        </li> --}}
        
        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            <a id='logout-form' type="submit" >
                <i class="nav-icon fas fa-sign-out-alt"></i>
               
                <p id="logout-form">
                    LogOut
                </p>

                
                   

                   
                </form>
            </a>
        </li>
    </ul>
</nav>