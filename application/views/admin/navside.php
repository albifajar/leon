            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav sb-sidenav-dark" style="max-height: 100vh; position: sticky; top:0;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu" style="overflow-x: auto">
                        <div class="nav">
                            <a class="nav-link" href="<?=base_url()?>admin"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Barang" aria-expanded="false" aria-controls="Barang"
                                ><div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                                Barang
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="Barang" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?=base_url()?>admin/goods">Tampilkan</a>
                                <a class="nav-link" href="<?=base_url()?>admin/categories">Kategori</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Pelelang" aria-expanded="false" aria-controls="Pelelang"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                                Pelelang
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="Pelelang" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?=base_url()?>admin/auctioneer">Tampilkan</a>
                                <a class="nav-link" href="<?=base_url()?>admin/registration_auctioneer">Tambah akun</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">            
                        <div style="margin: auto; width: 70px; margin-top: 8px">
                            <img src="<?=base_url()?>source/logo-dark.png" width="100%"></div>
                    </div>
                </nav>
            </div>