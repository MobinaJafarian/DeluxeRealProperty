
    <!-- BEGIN: Main Menu-->
    <!-- <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true"> -->
    <div class="menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0"></h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class=""></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <ul class=" navigation-header"><span>Links</span></ul>

                <li class="bg-gradient-warning btn text-white nav-item <?= sidebarActive(route('admin.index'), false) ?>"><a href="<?= route('admin.index') ?>"><i class="feather icon-mail text-white"></i><span class="menu-title text-white" data-i18n="Email">Home</span></a></li>

                <li class="text-gradient-success bg-success btn text-white  nav-item <?= sidebarActive(route('admin.category.index')) ?> "><a href="<?= route('admin.category.index') ?>"><i class="feather icon-message-square text-white"></i><span class="menu-title text-white" data-i18n="Chat">Category</span></a></li>

                <li class="bg-gradient-danger btn nav-item <?= sidebarActive(route('admin.post.index')) ?>"><a href="<?= route('admin.post.index') ?>"><i class="feather icon-check-square text-white"></i><span class="menu-title text-white" data-i18n="Todo">Post</span></a></li>

                <li class="bg-gradient-primary btn nav-item <?= sidebarActive(route('admin.ads.index')) ?>"><a href="<?= route('admin.ads.index') ?>"><i class="feather icon-calendar text-white"></i><span class="menu-title text-white" data-i18n="Calender">Ads</span></a></li>

                <li class="bg-gradient-info btn nav-item  <?= sidebarActive(route('admin.slide.index')) ?>"><a href="<?= route('admin.slide.index') ?>"><i class="feather icon-calendar text-white"></i><span class="menu-title text-white" data-i18n="Calender">Slide</span></a></li>

                <li class="bg-gradient-secondary btn nav-item <?= sidebarActive(route("admin.comment.index")) ?>"><a href="<?= route("admin.comment.index") ?>"><i class="feather icon-calendar text-white"></i><span class="menu-title text-white" data-i18n="Calender">Comment</span></a></li>
                
                <li class="bg-gradient-dark btn nav-item <?= sidebarActive(route("admin.user.index")) ?>"><a href="<?= route("admin.user.index") ?>"><i class="feather icon-calendar text-white"></i><span class="menu-title text-white" data-i18n="Calender">Users</span></a></li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->