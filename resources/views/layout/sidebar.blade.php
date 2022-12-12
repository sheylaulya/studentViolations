
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" id="titles" href="/">
            <img src="{{asset('assets/images/LogoTB.png')}}" alt="">
            SViolations
        </a>
        <a class="sidebar-brand brand-logo-mini" id="mini-titles" href="/">
            <img src="{{asset('assets/images/LogoTB.png')}}" alt="">    
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <iconify-icon  style="font-size: 42px" icon="ic:baseline-account-circle"></iconify-icon>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Admin</h5>
                        <span>Kesiswaan</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                        class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items" >
            <a class="nav-link" href="/">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/student">
                <span class="menu-icon">
                    <iconify-icon icon="mdi:account-student" style="color: #CB1C8D; font-size:15px;"></iconify-icon>
                </span>
                <span class="menu-title">Students</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/teacher">
                <span class="menu-icon">
                    <iconify-icon icon="ph:chalkboard-teacher-bold" style="color: #68B984;  font-size:15px;"></iconify-icon>
                </span>
                <span class="menu-title">Teachers</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/violations">
                <span class="menu-icon">
                    <iconify-icon icon="mdi:whistle" style="color: #cf0a0a; font-size:20px;"></iconify-icon>
                </span>
                <span class="menu-title">Violations</span>
            </a>
        </li>
    </ul>
</nav>
