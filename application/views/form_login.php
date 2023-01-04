<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan')?>
                                        <form method="post" class="user" action="<?php echo base_url('auth/login') ?>" class="needs-validation">
                                            <div class="form-group">
                                                <input type="text" name="username"  class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Enter username">
                                                <?php echo form_error('username', '<div class="alert alert-danger small ml-2">','</div>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                                <?php echo form_error('password', '<div class="alert alert-danger small ml-2">','</div>'); ?>
                                            </div>


                                            <button type="submit" class="btn btn-primary form-control">
                                                Login
                                            </button>
                                            <hr>
                                        </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href=" <?php echo base_url('registrasi/index');?>">
                                         Create an Account
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>