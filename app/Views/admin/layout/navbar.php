<!-- Start navbar -->
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="/">GAIA</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <?php if (logged_in()) : ?>
                <a class="nav-link" href="/logout">Sign Out</a>
            <?php else : ?>
                <a class="nav-link" href="/login">Sign In</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
<!-- end navbar -->

<!-- Start Sidebar -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="/admin">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link" href="/admin">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li> -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/customers">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- End Sidebar -->