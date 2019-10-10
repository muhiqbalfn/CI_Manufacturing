<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php if ($this->session->userdata('status') == "Pengurus"){ ?>
                    <img src="<?php echo base_url('assets/img/avatar5.png'); ?>" class="img-circle" alt="User Image" />
                <?php }else{ ?>
                    <img src="<?php echo base_url('assets/img/avatar04.png'); ?>" class="img-circle" alt="User Image" />
                <?php } ?>
            </div>
            <div class="pull-left info">
                <p>
                <?php 
                if ($this->session->userdata('status') == "Pengurus"){ 
                    echo $this->session->userdata('nama_penghuni');
                }else{
                    echo "Penghuni umum";
                }
                ?>
                </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="<?php echo base_url('HomeController'); ?>">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('PenghuniController'); ?>">
                    <i class="fa fa-user"></i> <span>Daftar penghuni</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('KamarController'); ?>">
                    <i class="fa fa-hdd-o"></i> <span>Daftar kamar</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('PembayaranController'); ?>">
                    <i class="fa fa-money"></i> <span>Pembayaran kos</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('IuranController'); ?>">
                    <i class="fa fa-dropbox"></i> <span>Iuran kos</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('PiketController'); ?>">
                    <i class="fa fa-exchange"></i> <span>Jadwal piket</span>
                </a>
            </li>
            <?php if ($this->session->userdata('status') == "Pengurus"){ ?>
            <li>
                <a href="<?php echo base_url('SettingController'); ?>">
                    <i class="fa fa-wrench"></i> <span>Settings</span>
                </a>
            </li>
            <?php } ?>
            <li>
                <a href="<?php echo base_url('AppController'); ?>">
                    <i class="fa fa-adn"></i> <span>Apps</span>
                    <small class="badge pull-right bg-green">16</small>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('CalendarController'); ?>">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>