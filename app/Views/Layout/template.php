<!-- BAGIAN HEADER -->
<?= $this->include('layout\header'); ?>

<div class="app header-default side-nav-dark side-nav-folded">
    <div class="layout">

        <!-- BAGIAN NAVIGASI BAR ATAS -->
        <?= $this->include('layout\navbar'); ?>

        <!-- BAGIAN NAVIGASI SAMPING -->
        <?= $this->include('layout\sidebar'); ?>

        <!-- Page Container START -->
        <div class="page-container">
            <!-- Content Wrapper START -->
            <div class="main-content">

                <!-- BAGIAN BREADCRUMB -->
                <!--  -->
                <div class="container-fluid">
                    <!-- Title Count Start -->
                    <div class="card-group">
                        <!-- BAGIAN KONTEN WEB -->
                        <?= $this->renderSection('konten'); ?>
                    </div>
                </div>
            </div>

            <!-- BAGIAN FOOTER ATAS -->
            <?= $this->include('layout\footer_atas'); ?>
        </div>
    </div>
</div>

<!-- BAGIAN FOOTER BAWAH JS INCLUDE -->
<?= $this->include('layout\footer'); ?>