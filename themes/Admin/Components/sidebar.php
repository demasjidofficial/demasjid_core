<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/<?= ADMIN_AREA ?>" class="brand-link">
      <img src="/assets/admin/images/demasjid-logo-icon.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
          <?= setting('App.siteName') ?? 'Demasjid' ?> Panel
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/admin/images/user.png" class="img-circle elevation-2" alt="">
        </div>
        <div class="info">
          <a href="/<?= ADMIN_AREA ?>/users/<?= auth()->id() ?>" class="d-block">
            <?= auth()->user()->renderAvatar(32) ?>
          </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <!-- List Menu -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link <?= url_is('/' . ADMIN_AREA) ? 'active' : '' ?>" href="/<?= ADMIN_AREA ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dasbor<!--i class="right fas fa-angle-left"></i--></p>
            </a>
          </li>

          

          <!-- Menu Collections -->
          <?php if (isset($menu)) : ?>
          <?php foreach ($menu->collections() as $collection) : ?>

          <?php if ($collection->isCollapsible()) : ?> 
          <li class="nav-item">
            <a href="#" class="nav-link <?= $collection->isActive() ? 'active' : '' ?>">
              <!--i class="nav-icon far fa-arrow-right"-->
              <?= $collection->icon ?>
              <p><?= $collection->title ?><i class="right fas fa-angle-left"></i></p>
            </a>
            <!-- Sub Menu List -->
            <ul class="nav nav-treeview">
            <?php foreach ($collection->items() as $item) : ?>
              <?php if ($item->userCanSee()): ?>
              <li class="nav-item">
                <a class="nav-link <?= url_is($item->url . '*') ? 'active' : '' ?>" href="<?= $item->url ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?= $item->title ?></p>
                </a>
              </li>
              <?php endif ?>
            <?php endforeach ?>
            </ul>
          </li> 

          <?php else : ?>
          
          <li class="nav-item">
            <a href="#" class="nav-link <?= $collection->isActive() ? 'active' : '' ?>">
              <?= $collection->icon ?>
              <p><?= $collection->title ?></p>
            </a>
          </li>
          
          <?php endif ?>

          <!--?php if (!$collection->isCollapsible()) : ?>
          <li class="nav-item">
            <a href="#">Tes</a>
          </li>
          < ?php endif ?-->

          <?php endforeach ?>
          <?php endif ?>

          <li class="nav-item">
            <a href="<?= route_to('logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-arrow-right"></i>
              <p>Keluar</p>
            </a>
          </li> 

        </ul>
        <!-- /List Menu -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<!--
<a class="px-3 d-block fs-3 text-light text-decoration-none me-0" href="/< ?= ADMIN_AREA ?>">
    <div class="site-stamp rounded d-inline-flex align-content-center justify-content-center">
        < ?= substr(setting('App.siteName') ?? 'bonfire', 0, 1) ?>
    </div>
    <span class="site-name">< ?= setting('App.siteName') ?? 'bonfire' ?></span>
</a>
<div class="pt-3">

    < !-- Dashboard --
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link < ?= url_is('/' . ADMIN_AREA) ? 'active' : '' ?>" href="/< ?= ADMIN_AREA ?>" title="Dashboard">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
    </ul>

    < ?php if (isset($menu)) : ?>
        < ?php foreach ($menu->collections() as $collection) : ?>

        <div>
            <ul class="nav flex-column px-0">
                < ?php if ($collection->isCollapsible()) : ?>
                    <li class="nav-item">
                        <a class="nav-link < ?= $collection->isActive() ? 'active' : '' ?>" href="#">
                            < ?= $collection->icon ?>
                            <span>< ?= $collection->title ?></span>
                        </a>
                    </li>
                    <ul class="nav subnav flex-column mb-2  < ?= $collection->isActive() ? 'active' : 'flyout' ?>">
                        <li class="nav-item nav-title">
                            <a class="nav-link">
                                < ?= $collection->title ?>
                            </a>
                        </li>
                < ?php endif ?>


                < ?php foreach ($collection->items() as $item) : ?>
                    < ?php if ($item->userCanSee()): ?>
                        <li class="nav-item">
                            <a class="nav-link < ?= url_is($item->url . '*') ? 'active' : '' ?>" href="< ?= $item->url ?>">
                                < ?php if (! $collection->isCollapsible()) : ?>
                                    < ?= $item->icon ?>
                                < ?php endif ?>
                                <span>< ?= $item->title ?></span>
                            </a>
                        </li>
                    < ?php endif ?>
                < ?php endforeach ?>
                < ?php if ($collection->isCollapsible()) : ?>
                    </ul>
                < ?php endif ?>
            </ul>
        </div>
        < ?php endforeach ?>
    < ?php endif ?>
</div-->
