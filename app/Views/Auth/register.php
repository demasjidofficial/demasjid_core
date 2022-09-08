<?= $this->extend('master') ?>

<?= $this->section('title') ?><?= lang('Auth.register') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>

<!--div class="container d-flex justify-content-center p-5"-->
    <div class="card col-12 shadow-sm">
        <div class="card-body">
            <!--h5 class="card-title mb-5">< ?= lang('Auth.register') ?></h5-->

            <p class="login-box-msg">
                <h3 style="text-align:center;">Assalamualaikum<br/>Silakan registrasi akun</h3>
            </p>
            {alerts}
            <form action="<?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <!-- Email -->
                <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required />
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <!-- Username -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" autocomplete="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required />
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <!-- Password -->
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="password" autocomplete="password"
                               placeholder="<?= lang('Auth.password') ?>"
                               onkeyup="checkStrength()" required
                        />
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <!-- ReType Password -->
                <div class="input-group mb-3">
                <input type="password" class="form-control" name="pass_confirm" id="pass_confirm" autocomplete="pass_confirm"
                               placeholder="<?= lang('Auth.passwordConfirm') ?>" required onkeyup="checkPasswordMatch()" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="d-grid col-23 mx-auto m-3">
                    <button type="submit" class="btn btn-primary btn-block btn-lg"><?= lang('Auth.register') ?></button>
                </div>

                <p class="text-center"><?= lang('Auth.haveAccount') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.login') ?></a></p>

            </form>
        </div>
    </div>
<!--/div-->

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<?= asset_link('auth/js/passStrength.js', 'js') ?>
<script src="/zxcvbn.js"></script>
<?= $this->endSection() ?>
