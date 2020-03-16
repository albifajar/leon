            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav sb-sidenav-dark" style="max-height: 100vh; position: sticky; top:0;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu" style="overflow-x: auto">
                        <div class="nav">
                            <a class="nav-link" href="<?=base_url()?>admin"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pelelang
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
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