<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="/"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Users</span> </a>
            <ul class="ml-menu">
                <li><a href="{{route('users.index')}}">All users</a></li>
                <li><a href="{{route('users.create')}}">Create users</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Courses</span> </a>
            <ul class="ml-menu">

                <li><a href="{{route('task.index')}}">All Courses</a></li>
                <li><a href="{{route('task.create')}}">Add Courses</a></li>
                <li><a href="courses-info.html">Courses Info</a></li>
            </ul>
        </li>

        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Solutions</span> </a>
            <ul class="ml-menu">

                <li><a href="{{route('solution.index')}}">All Courses</a></li>
                <li><a href="{{route('solution.create')}}">My Solutions</a></li>
                <li><a href="courses-info.html">Courses Info</a></li>
            </ul>
        </li>

    </ul>
</div>