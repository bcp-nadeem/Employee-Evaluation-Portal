
<section class="login-admin-auth-section">
    <div class="container-xxl">
    <?php 
        if($error = $this->session->flashdata('login_failed')):?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php endif; ?>
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand auth-logo justify-content-center">
                            <a class="app-brand-link gap-2" href="<?php echo base_url('Login/index'); ?>"> <span class="app-brand-text demo text-body fw-bolder">
                                <img src="<?php echo base_url('assets_admin/img/logo/bimcap_logo.png'); ?>" alt="bimcap_logo">
                            </span> </a>
                        </div>
                        <br>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>
                        <form id="formAuthentication" method="POST" class="mb-3" action="<?php echo base_url('Login/authLogin'); ?>" data-parsley-validate data-toggle="validator" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label" for="email">Username</label> 
                                <input id="email" class="form-control" name="username" type="text" autofocus="" placeholder="Enter your email or username" required data-parsley-trigger="keyup" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input id="password" class="form-control" name="password" type="password" placeholder="············" required data-parsley-trigger="keyup" />
                            </div>
                            <div class="mb-3"><button class="btn btn-primary d-grid w-100" type="submit">Login</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

