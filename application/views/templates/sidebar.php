        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo base_url('dashboard/index')?>">Toko bersama</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('dashboard/index')?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Model Motor
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo base_url('model/Yamaha')?>">Yamaha</a>
                        <a class="dropdown-item" href="<?php echo base_url('model/Honda')?>">Honda</a>
                       <a class="dropdown-item" href="<?php echo base_url('model/Suzuki')?>">Suzuki</a>
                        </div>
                    </li>
                </ul>
                    <form class="d-flex m">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"><?php     
                                    $keranjang =  $this->cart->total_items() . 'items'
                                    ?>
                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?></i>
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                        </button>
                    </form>
                    </div> 
                    <nav>
                        <button  class="btn btn-outline-primary " type="submit" id="text">
                         <?php if($this->session->userdata('username')) {?>
                            <div>Selamat datang  <?php echo $this->session->userdata('username');?></div>
                            <li class="ml-2"><?php echo anchor('auth/logout' , 'Logout')?></li>
                            <?php } else{ ?>
                                <li><?php echo anchor('auth/login','login'); ?></li>
                                <?php } ?>
                        </button>
                         <button  class="btn btn-outline-info " type="submit" id="text">
                            Register
                        </button>
                    </nav>
                </div>
            </div>
        </nav>
 <!-- Header-->