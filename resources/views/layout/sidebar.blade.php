        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PORTFOLIO<sup>&nbsp;Dz</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            {{-- Dashboard --}}
            <li class="nav-item  {{ request()->path() == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>Dashboard</span></a>
            </li>


            {{-- About Us --}}
            <li class="nav-item {{ request()->path() == 'abouts-us' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('abouts.index') }}">
                    <i class="fa-regular fa-address-card"></i>
                    <span>About Us</span></a>
            </li>



            {{-- Skill --}}
            <li
                class="nav-item {{ request()->path() == 'skill' || request()->path() == 'category-skill' ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#skill"
                    aria-expanded="true" aria-controls="skill">
                    <i class="fa-solid fa-puzzle-piece"></i>
                    <span>Skill</span>
                </a>
                <div id="skill"
                    class="collapse {{ request()->path() == 'skill' || request()->path() == 'category-skill' ? 'show' : '' }}"
                    aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <h6 class="collapse-header">Custom Utilities:</h6> --}}
                        <a class="collapse-item" href="{{ route('skill.index') }}">skills</a>
                        <a class="collapse-item" href="{{ route('category-skill.index') }}">category skills</a>
                    </div>
                </div>
            </li>


            {{-- Qualification --}}
            <li
                class="nav-item {{ request()->path() == 'qualification' || request()->path() == 'type-qualification' ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#qualification"
                    aria-expanded="true" aria-controls="qualification">
                    <i class="fa-solid fa-sitemap"></i>
                    <span>Qualification</span>
                </a>
                <div id="qualification"
                    class="collapse {{ request()->path() == 'qualification' || request()->path() == 'type-qualification' ? 'show' : '' }}"
                    aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <h6 class="collapse-header">Custom Utilities:</h6> --}}
                        <a class="collapse-item" href="{{ route('qualification.index') }}">qualification</a>
                        <a class="collapse-item" href="{{ route('typeQualification.index') }}">type</a>
                    </div>
                </div>
            </li>



            {{-- Service --}}
            <li class="nav-item  {{ request()->path() == 'services' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('services.index') }}">
                    <i class="fa-solid fa-people-carry-box"></i>
                    <span>Service</span></a>
            </li>


            {{-- Client --}}
            <li class="nav-item  {{ request()->path() == 'client' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('client.index') }}">
                    <i class="fa-solid fa-users"></i>
                    <span>Client</span></a>
            </li>



            {{-- Portfolio --}}
            <li class="nav-item  {{ request()->path() == 'portfolio' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('portfolio.index') }}">
                    <i class="fa-brands fa-dropbox"></i>
                    <span>Portfolio</span></a>
            </li>



            {{-- Message --}}
            <li class="nav-item  {{ request()->path() == 'message' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('message.index') }}">
                    <i class="fa-regular fa-envelope"></i>
                    <span>Message</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->
