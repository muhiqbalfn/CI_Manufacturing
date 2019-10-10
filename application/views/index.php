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
                        <i>Dashboard</i>
                        <small>Page</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                       <div class="col-lg-12">
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                           <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-xs-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="<?php echo base_url('assets/img/credit/visa.png'); ?>" alt="Visa"/>
                                    <img src="<?php echo base_url('assets/img/credit/mastercard.png'); ?>" alt="Mastercard"/>
                                    <img src="<?php echo base_url('assets/img/credit/american-express.png'); ?>" alt="American Express"/>
                                    <img src="<?php echo base_url('assets/img/credit/paypal2.png'); ?>" alt="Paypal"/>
                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </p>
                                </div>
                            </div>
                       </div>
                    </div>
                </section>

            </aside>
        </div>

        <?php $this->load->view('sub/footer'); ?>
    </body>
</html>