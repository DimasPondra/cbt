<div class="col-12 col-lg-3 col-navbar d-none d-xl-block">
    <aside class="sidebar">
        <a href="#" class="sidebar-logo">
            <div
                class="d-flex justify-content-start align-items-center"
            >
                <img src="{{ asset('template/assets/img/global/logo.svg') }}" alt="" />
                <span>Admin Panel</span>
            </div>

            <button id="toggle-navbar" onclick="toggleNavbar()">
                <img
                    src="{{ asset('template/assets/img/global/navbar-times.svg') }}"
                    alt=""
                />
            </button>
        </a>

        <h5 class="sidebar-title">Daily Use</h5>

        <a href="index.html" class="sidebar-item active">
            <img
                src="{{ asset('template/assets/img/global/grid.svg') }}"
                width="18"
                height="18"
                alt="icon"
                class="me-3"
            />
            <span>Overview</span>
        </a>

        <!-- <a href="#" class="sidebar-item">
            <img src="./assets/img/global/users.svg" width="18" height="18" alt="icon" class="me-3" />

            <span>Employees</span>
        </a>

        <a href="#" class="sidebar-item">
            <img src="./assets/img/global/dollar-sign.svg" width="18" height="18" alt="icon" class="me-3" />

            <span>Payroll</span>
        </a> -->

        <h5 class="sidebar-title">Others</h5>

        <a href="form.html" class="sidebar-item">
            <img
                src="{{ asset('template/assets/img/global/box.svg') }}"
                width="18"
                height="18"
                alt="icon"
                class="me-3"
            />
            <span>Form</span>
        </a>

        <a href="table.html" class="sidebar-item">
            <img
                src="{{ asset('template/assets/img/global/home.svg') }}"
                width="18"
                height="18"
                alt="icon"
                class="me-3"
            />
            <span>Table</span>
        </a>

        <a href="details.html" class="sidebar-item">
            <img
                src="{{ asset('template/assets/img/global/gift.svg') }}"
                width="18"
                height="18"
                alt="icon"
                class="me-3"
            />
            <span>Details</span>
        </a>

        <!-- <a href="#" class="sidebar-item">
            <img src="./assets/img/global/settings.svg" width="18" height="18" alt="icon" class="me-3" />
            <span>Settings</span>
        </a> -->

        <a href="#" class="sidebar-item">
            <img
                src="{{ asset('template/assets/img/global/log-out.svg') }}"
                width="18"
                height="18"
                alt="icon"
                class="me-3"
            />
            <span>Logout</span>
        </a>
    </aside>
</div>