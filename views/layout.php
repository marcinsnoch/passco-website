<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo isset($this->data['title']) ? $this->data['title'] : '' . ' - ' . base_url(); ?>
    </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Questrial&amp;subset=latin-ext">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
    <div class="container">
        <header class="row">
            <div class="col-md-3 header-left">
                <h1 class="passco_pl"><a href="<?php echo base_url() ?>" title="<?php echo SITE_NAME ?>">www.passco.pl</a></h1>
                <h2 class="passco_de"><a href="http://www.passco.de/" title="www.passco.de" target="_blank">www.passco.de »</a></h2>
            </div>
            <div class="col-md-9 header-right hidden-xs">
                <img src="<?php echo base_url() ?>assets/img/passco+co.png" alt="www.passco.pl" class="img-responsive">
            </div>
        </header>
        <section class="row">
            <aside class="col-md-3 sidebar">
                <div class="sidebar-menu">
                    <ul id="menu-menu-glowne" class="nav nav-pills nav-stacked">
                        <li><a href="<?php echo base_url(); ?>" title="Strona Główna"><i class="fa fa-home"></i> Strona Główna</a></li>
                        <li><a href="<?php echo base_url('katalogi/passco'); ?>" title="Katalogi Passco"><i class="fa fa-folder-open"></i> Katalogi Passco</a></li>
                        <li><a href="<?php echo base_url('katalogi/tertu'); ?>" title="Katalogi Tertu"><i class="fa fa-folder-open"></i> Katalogi Tertu</a></li>
                        <li><a href="<?php echo base_url('partnerzy'); ?>" title="Nasi Partnerzy"><i class="fa fa-users"></i> Nasi Partnerzy</a></li>
                        <li><a href="<?php echo base_url('kontakt'); ?>" title="Kontakt"><i class="fa fa-envelope"></i> Kontakt</a></li>
                    </ul>
                </div>
                <div class="sidebar-middle">
                    <div class="widget">
                        <h3>PASS+CO Sp. Z o. o.</h3>
                        <div class="textwidget">ul. Skrajna 86<br>
                            25-650 Kielce<br>
                            Polska<br>
                            Tel. +48 41 346 27 55<br>
                            Tel. +48 41 346 27 56<br>
                            Fax. +48 41 346 37 87<br>
                            passco@passco.pl</div>
                    </div>
                    <div class="widget">
                        <h3>PASS+CO GMBH</h3>
                        <div class="textwidget"><a href="http://www.passco.de/" title="www.passco.de">www.passco.de</a></div>
                    </div>
                </div>
                <div class="sidebar-bottom hidden-xs">
                    <div class="widget_text widget">
                        <h3>Nasi Partnerzy</h3>
                        <div class="textwidget custom-html-widget">
                            <ul class="list-unstyled text-center">
                                <li>
                                    <a href="http://www.lindem.pl/" title="www.lindem.pll" target="_blank">
                                        <img src="<?php echo base_url('uploads/partnerzy/Lindem/lindem.jpg'); ?>" alt="Lindem" class="img-responsive">
                                        <span>www.lindem.pl</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.tertu.com/" title="www.tertu.com" target="_blank">
                                        <img src="<?php echo base_url('uploads/partnerzy/Tertu/logo-tertu.jpg'); ?>" alt="Lindem" class="img-responsive">
                                        <span>www.tertu.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <main class="col-md-9 content">
                <?php if (isset($_SESSION['flash_msg'])) : ?>
                <div class="alert alert-info">
                    <p>
                        <?php echo $_SESSION['flash_msg']; ?>
                    </p>
                </div>
                <?php endif; ?>
                <?php echo $this->data['yield']; ?>
            </main>
        </section>
        <footer class="row">
            <div class="col-md-3 footer-left">
                <p>Copyright 2018 by <a href="https://www.passco.pl" title="www.passco.pl">www.passco.pl</a></p>
            </div>
            <div class="col-md-9 footer-right">
                <p style="color:transparent">Web design by <a href="mailto:marcin.msx@gmail.com" style="color:transparent">Marcin Snoch</a></p>
            </div>
        </footer>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>

</html>