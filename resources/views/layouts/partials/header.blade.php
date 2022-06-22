<!-- partial:partials/_horizontal-navbar.html -->
<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container">
            <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">

                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="assets/images/logo-lokerikal.png"
                            alt="logo" /></a>
                    <h3 class="font-weight-bold text-white mb-0">LOKER PETIK</h3> 
                </div>
                <ul class="navbar-nav ml-lg-5 navbar-nav-right">
                    <li class="nav-item <?php if (request()->segment(1) == null || request()->segment(1) == 'register') {
                        echo "display-0";
                    } ?>" >
                        <a class="nav-link text-white" href="/home">
                            HOME
                        </a>
                    </li>
                    <li class="nav-item <?php if (request()->segment(1) == null || request()->segment(1) == 'register') {
                        echo "display-0";
                    } ?>">
                        <a class="nav-link text-white" href="new_loker">
                            LOWONGAN BARU
                        </a>
                    </li>
                    <li class="nav-item <?php if (request()->segment(1) == null || request()->segment(1) == 'register') {
                        echo "display-0";
                    } ?>">
                        <a class="nav-link text-white" href="/mitra-ikal">
                            MITRA IKAL
                        </a>
                    </li>
                    <li class="nav-item <?php if (request()->segment(1) == null || request()->segment(1) == 'register') {
                        echo "display-0";
                    } ?>">
                        <a class="nav-link text-white" href="tentang">
                            TENTANG
                        </a>
                    </li>
                    <li class="nav-item ml-5 <?php if (request()->segment(1) == null || request()->segment(1) == 'register') {
                        echo "display-0";
                    } ?>">
                        <a class="nav-link text-white" href="#">
                            LOGOUT
                        </a>
                    </li>
                    <li class="nav-item nav-toggler-item-right d-lg-none">
                        <button class="navbar-toggler align-self-center" type="button"
                            data-toggle="horizontal-menu-toggle">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </li>
                </ul>
                <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
                    <li class="nav-item nav-search d-none d-lg-flex">
                        <form action="search.html" method="get">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="search">
                                        <i class="mdi mdi-magnify"></i>
                                    </span>
                                </div>
                                <input type="text" name="keyword" class="form-control text-white" placeholder="Search"
                                    aria-label="search" aria-describedby="search">
                                <input type="submit" style="display: none;">
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link h-100" href="index.php">
                        <!-- <i class="mdi mdi-view-dashboard-outline menu-icon"></i> -->
                        <span class="menu-title">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h-100" href="lowongan.html">
                        <span class="menu-title">Lowongan Baru</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h-100" href="mitra.html">
                        <span class="menu-title">Daftar Mitra</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h-100" href="berita.html">
                        <span class="menu-title">Berita</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav> --}}
</div>
