<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('registrasi/index');?>" class="user">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-user"
                                        placeholder="Nama anda">
                                        <?php echo form_error('name','<div class="text-danger small ml-2">','</div>');?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" 
                                        placeholder="Username anda">
                                         <?php echo form_error('username','<div class="text-danger small ml-2">','</div>');?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password_1" type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password Anda">
                                             <?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>');?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="password_2" type="password" class="form-control form-control-user"
                                             placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type ="submit" class="btn btn-primary btn-user btn-block">Create Account</button>
                                <hr>
                            </form>
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> -->
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login')?>">Already have an account?  Now Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>