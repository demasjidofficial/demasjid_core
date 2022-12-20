<aside class="main-sidebar elevation-4">
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
            <a href="/admin" class="nav-link <?= url_is('/' . ADMIN_AREA) ? 'active' : '' ?>" href="/<?= ADMIN_AREA ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p><?= lang('app.dashboard')?><!--i class="right fas fa-angle-left"></i--></p>
            </a>
          </li>

          <!-- Menu Collections -->
          <?php if (isset($menu)) : ?>
          <?php foreach ($menu->collections() as $collection) : ?>

          <?php if ($collection->isCollapsible()) : ?> 
          <li class="nav-item <?= $collection->isActive() ? 'menu-is-opening menu-open' : '' ?> ">
            <a href="#" class="nav-link <?= $collection->isActive() ? 'active' : '' ?>">
              <!--i class="nav-icon far fa-arrow-right"-->
              <?= $collection->icon ?>
              <p><?= $collection->title ?><i class="right fas fa-angle-left"></i></p>
            </a>
            <!-- Sub Menu List -->
            <ul class="nav nav-treeview" <?= $collection->isActive() ? 'style="display: block;"' : '' ?> >
            <?php foreach ($collection->items() as $item) : ?>
              <?php if ($item->userCanSee()): ?>
              <li class="nav-item">
                <a class="nav-link <?=  url_is((new \CodeIgniter\HTTP\URI($item->url))->getPath().'*') ? 'active' : '' ?>" href="<?= $item->url ?>" >
                  <?= $item->icon() ?>
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

          <?php endforeach ?>
          <?php endif ?>

          <li class="divider" style="border-top: 1px solid #4F5962;"></li>
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


