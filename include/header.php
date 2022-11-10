<header>
    <nav class="navbar navbar-expand d-flex justify-content-between justify-items-center text-white">
        <div>
            <img src="/assets/images/youbook.png"  class="logo mx-5" alt="logo">
        </div>
        <div>
            Bonjour Mr ...
        </div>
        <div>
            <div class="top-navbar-right">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle mx-3" href="#" data-bs-toggle="dropdown">
                                <div class="">
                                    <div class="rounded-circle">
                                        <lord-icon
                                            src="https://cdn.lordicon.com/dxjqoygy.json"
                                            trigger="hover"
                                            colors="primary:#FFFFFF,secondary:#038dfe">
                                        </lord-icon>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" >
                                <li>
                                    <a class="dropdown-item" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" href="#" (click)="$event.preventDefault()">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-gear-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Setting</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/pages/signe-in.php">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
    </nav>
</header>