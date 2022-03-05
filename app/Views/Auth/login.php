<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.login') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>

<div class="card">
    <div class="card-body login-card-body rounded25">
      <p class="login-box-msg">
          <h3 style="text-align:center;">Assalamualaikum<br/>Silakan login akun</h3>
      </p>

      <form action="<?= route_to('login') ?>" method="post">
        <?= csrf_field() ?> 

        <!-- Email -->
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- Password -->
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="<?= lang('Auth.password') ?>" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- Remember -->
        <?php if ($allowRemember) : ?>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                <?= lang('Auth.rememberMe') ?> 
              </label>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <br/>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-success btn-block">
              MASUK
              <!--?= lang('Auth.login') ?-->
            </button>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <?php endif ?>

      </form>

      <!-- Sign in via FB & Google
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      !-- /.social-auth-links -->


      <br/>

      <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
      <p class="mb-1">
        <?= lang('Auth.forgotPassword') ?> 
        <a href="<?= route_to('magic-link') ?>"><?= lang('Auth.useMagicLink') ?></a>
      </p>
      <?php endif ?>

      <?php if (setting('Auth.allowRegistration')) : ?>
      <p class="mb-0">
        <?= lang('Auth.needAccount') ?>
        <a href="<?= route_to('register') ?>" class="text-center"><?= lang('Auth.register') ?></a>
      </p>
      <?php endif ?>

    </div>
    <!-- /.login-card-body -->
  </div>

<?= $this->endSection() ?>
