<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Posts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="post">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.all.posts')}}"> All Posts </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.add.posts')}}"> Add </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.add.categories')}}"> Category </a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.all.users')}}"> All user </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.logout')}}"> Logout </a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
