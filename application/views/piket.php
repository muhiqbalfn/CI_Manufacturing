<!DOCTYPE html>
<html>
    <!-- Head -->
    <?php $this->load->view('sub/head'); ?>

    <body class="skin-blue">
        <!-- Header -->
        <?php $this->load->view('sub/header'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left-menu -->
            <?php $this->load->view('sub/left-menu'); ?>

            <!-- Tittle -->
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        <i>Jadwal piket</i>
                        <small>Page</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                       <div class="col-lg-12">
                           <!-- Piket -->
                           <?php foreach ($data as $key) {  ?>
                           <div class="col-lg-4">
                                <div class="box">
                                    <div class="box-header">
                                        <i class="ion ion-clipboard"></i>
                                        <h3 class="box-title"><?php echo $key->nama_hari ?></h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <ul class="todo-list">
                                            <li>
                                                <span class="handle">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>
                                                <span class="text"><?php echo $key->nama_penghuni ?></span>
                                                <div class="tools">
                                                    <i class="fa fa-edit"></i>
                                                    <i class="fa fa-trash-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                       </div>
                    </div>
                </section>

            </aside>
        </div>

        <?php $this->load->view('sub/footer'); ?>
    </body>
</html>