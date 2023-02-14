        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>



            <li class="nav-item active">
                <a class="nav-link" href="{{ route('abouts.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>About Us</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#skill"
                    aria-expanded="true" aria-controls="skill">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Skill</span>
                </a>
                <div id="skill" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <h6 class="collapse-header">Custom Utilities:</h6> --}}
                        <a class="collapse-item" href="{{ route('skill.index') }}">skills</a>
                        <a class="collapse-item" href="{{ route('category-skill.index') }}">category skills</a>
                    </div>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#qualification"
                    aria-expanded="true" aria-controls="qualification">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Qualification</span>
                </a>
                <div id="qualification" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <h6 class="collapse-header">Custom Utilities:</h6> --}}
                        <a class="collapse-item" href="{{ route('qualification.index') }}">qualification</a>
                        <a class="collapse-item" href="{{ route('typeQualification.index') }}">type</a>
                    </div>
                </div>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="{{ route('service.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Service</span></a>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="{{ route('client.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Client</span></a>
            </li>




            <li class="nav-item active">
                <a class="nav-link" href="{{ route('portfolio.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Portfolio</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->
