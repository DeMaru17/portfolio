<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{url('dashboard')}}"><img src="{{asset('adm/dist/assets/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item">
                    <a href="{{url('dashboard')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{url('portfolio')}}" class='sidebar-link'>
                        <i class="bi bi-diamond-fill"></i>
                        <span>Portfolio</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Master Data</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('profil.index')}}">Profile</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('education.index')}}">Education</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('experience.index')}}">Experience</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('skill.index')}}">Skill</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('certification.index')}}">Certification</a>
                        </li>
                    </ul>
                </li>


        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
