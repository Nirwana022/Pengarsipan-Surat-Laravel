   <!-- topbar -->
   <div class="header header-one">
        <div class="header-left header-left-one pt-3">
            <h4>Surat</h4>
        </div>
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>

        <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
        </a>
        <ul class="nav nav-tabs user-menu">
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                        <img src="assets/img/profiles/pemandangan.jpg" alt="">
                        <span class="status online"></span>
                    </span>
                    
                </a>
                <div class="dropdown-menu">

                    <a class="dropdown-item" href="{{ url('/logout') }}"><i data-feather="log-out" class="me-1"></i>
                        Logout</a>
                </div>
            </li>
        </ul>
    </div>