<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="direction: rtl;">
    <div class="container"> 
        <!-- <a class="navbar-brand" href="">Deluxe <span>Real Property</span></a> -->
        <a class="navbar-brand" href="<?= route('home.index') ?>">Deluxe <span>Real Property</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> menu
      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= (currentUrl() == route('home.index')) ? 'active' : '' ?>"><a href="<?= route('home.index') ?>" class="nav-link">Home</a></li>
                <li class="nav-item <?= (currentUrl() == route('home.all.ads')) ? 'active' : '' ?>"><a href="<?= route('home.all.ads') ?>" class="nav-link">Advertising</a></li>
                <li class="nav-item <?= (currentUrl() == route('home.about')) ? 'active' : '' ?>"><a href="<?= route('home.about') ?>" class="nav-link">AboutUs</a></li>
                <li class="nav-item <?= (currentUrl() == route('home.all.post')) ? 'active' : '' ?>""><a href="<?= route('home.all.post') ?>" class="nav-link">Blog</a></li>
                <?php if(\System\Auth\Auth::checkLogin()) { ?>
                <?php if(\System\Auth\Auth::user()->user_type == 'admin') { ?>
                    <li class="nav-item btn-dark"><a href="<?= route('admin.index') ?>" class="nav-link text-white"><span class="icon-user m-2"></span>Admin Panel</a></li>
                    <?php } ?>
                    <li class="nav-item btn-dark"><a href="<?= route('auth.logout') ?>" class="nav-link text-white"><span class="icon-user m-2"></span> <?= \System\Auth\Auth::user()->first_name . ' ' . \System\Auth\Auth::user()->last_name ?></a></li>
                    <!-- <li class="nav-item btn-dark"><a href="<?= route('auth.logout') ?>" class="nav-link text-white"><span class="icon-user m-2"></span>Logout</a></li> -->
                    <?php } else { ?>
                <li class="nav-item btn-dark"><a href="<?= route('auth.login.view') ?>" class="nav-link"><span class="icon-user m-2"></span>Login</a></li>
                <li class="nav-item btn-dark"><a href="<?= route('auth.register.view') ?>" class="nav-link"><span class="icon-pencil m-2"></span>Register</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->