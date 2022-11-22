<header>
    <nav class=" navbar-expand d-flex justify-content-between justify-items-center text-white">
        <div>
        </div>
        <div class="p-4">
            Bonjour Mr ___ <b><?=$_SESSION['first_name_admin']?> </b>
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
                                            colors="primary:#FFFFFF,secondary:#038dfe"
                                            style="width:3.5rem; height:3.5rem;">
                                        </lord-icon>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" >
                                <li>
                                    <a class="dropdown-item" type="button" href="/pages/settings.php">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-gear-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Setting</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/admin/script.php?log-out=true">
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