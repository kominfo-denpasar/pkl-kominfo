<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, severny design, severny dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Severny is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Kominfo</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x15" href="assets/images/logodps.png">
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin1" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="relative" data-boxed-layout="full">
        <div class="app-container" data-navbarbg="skin1"></div>
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin1">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="dashboard.html">
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Light Logo icon -->
                                <img style="width:100px;" src="assets/images/logodps.jpg" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin1">
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav w-100 align-items-center">
                        <li class="nav-item ml-0 ml-md-3 ml-lg-0">
                            <a class="nav-link search-bar" href="javascript:void(0)">
                                <form class="my-2 my-lg-0">
                                    <div class="customize-input customize-input-v4">
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <li class="nav-item ml-auto">
                            <div class="upgrade-btn">
                                <a href="login/index-login.php"
                                    class="btn btn-success text-white" >Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="user-profile text-center pt-2">
                <div class="d-flex align-items-center justify-content-center pb-3">
                    <div class="dropdown sub-dropdown">
                        <button class="btn profile-pic rounded-circle position-relative" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="badge rounded-circle badge-success profile-dd text-center"><i
                                    class="fas fa-angle-down"></i></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-circle text-success font-12 mr-2"></i>
                                Active
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-circle text-warning font-12 mr-2"></i>
                                Away
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-circle text-danger font-12 mr-2"></i>
                                Do not Disturb
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-circle text-muted font-12 mr-2"></i>
                                Invisible
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-section">
                    <p class="font-weight-light mb-0 font-18">Admin</p>
                    <span class="op-7 font-14">Diskominfo Denpasar</span>
                    <div class="row border-top border-bottom mt-3 no-gutters">
                        <div class="col-4 border-right">
                            <a class="p-3 d-block menubar-height" href="javascript:void(0)" id="bell"
                                data-display="static" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon op-7"></i></span>
                                <span class="badge badge-danger badge-no rounded-circle">5</span>
                            </a>
                        </div>
                        <div class="col-4 border-right">
                            <a class="p-3 d-block menubar-height" id="bottom-sidebar" href="javascript:void(0)"
                                role="button">
                                <span><i data-feather="settings" class="svg-icon op-7"></i></span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="p-3 d-block menubar-height" href="javascript:void(0)" role="button"
                                data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span><i data-feather="message-square" class="svg-icon op-7"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><span class="hide-menu">Pages</span></li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="dashboard.html" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="databarang.php" aria-expanded="false">
                                <i data-feather="users" class="feather-icon"></i>
                                <span class="hide-menu">Kebutuhan Barang</span>
                            </a>
                        </li> 
                         <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                                <i data-feather="users" class="feather-icon"></i>
                                <span class="hide-menu">Data Barang</span>
                            </a>
                        </li>    
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">DATA IDENTIFIKASI KEBUTUHAN BARANG</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="dashboard.html" class="text-muted">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select form-control">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                
                <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"select * from kebutuhan_barang");
                    while($d = mysqli_fetch_array($data)){
                ?>

              

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                            <a href="insertbarang.php" class="btn btn-primary"> + Data Barang </a><br><br><br>

                            <a href="form-edit.php?id_kebutuhan=<?php echo$d['id_kebutuhan']; ?>" class = "btn btn-warning" >EDIT</a>
              
                            <div class="table-responsive table-hover">

                             <input type="hidden" name="id_kebutuhan" >
                             
                            <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row"> Perubahan Ke</th>
                                            <td> <?php echo $d['perubahan']; ?> </td>
                                        </tr>

                                         <tr>
                                            <th scope="row" width="350px"> Tanggal Perubahan </th>
                                            <td>  <?php echo $d['tanggal']; ?>  </td>
                                        </tr>
                                    </tbody>
                            </table>


                            <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row"> Nama K/L/D</th>
                                            <td> <?php echo $d['namakld']; ?> </td>
                                        </tr>

                                         <tr>
                                            <th scope="row" width="350px"> Satuan Kerja </th>
                                            <td> <?php echo $d['satker']; ?> </td>
                                        </tr>

                                          <tr>
                                            <th scope="row" width="350px"> Pejabat Pembuat Komitmen </th>
                                            <td> <?php echo $d['ppk']; ?> </td>
                                        </tr>

                                         <tr>
                                            <th scope="row" width="350px"> Program (Sesuai DIPA) </th>
                                            <td> <?php echo $d['program']; ?> </td>
                                        </tr>

                                          <tr>
                                            <th scope="row" width="350px"> Kegiatan </th>
                                            <td>  <?php echo $d['kegiatan']; ?> </td>
                                        </tr>

                                          <tr>
                                            <th scope="row" width="350px"> Sub Kegiatan (Sesuai DIPA) </th>
                                            <td> <?php echo $d['subkegiatan']; ?> </td>
                                        </tr>

                                         <tr>
                                            <th scope="row" width="350px"> Output (Sesuai DIPA) </th>
                                            <td>  <?php echo $d['output']; ?>  </td>
                                        </tr>
                                    </tbody>
                            </table>


                            <h7 class="page-title text-truncate text-dark font-weight-medium mb-1"> Identifikasi kode Barang Milik Negara (BMN) </h7>
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                    <tbody>
                                         <tr>
                                            <th width=" 350px">Kode barang (BMN) dan nama barang pada SIMAK BMN/Persediaan <br><br>
                                            Isikan kode barang yang dibutuhkan ini nantinya akan dimasukkan dicatat dengan kode barang apa baik pada SIMAK BMN maupun aplikasi persediaan</th>
                                            
                                            <td>
                                             <table class="table table-bordered"  width="100%" cellspacing="0">
                                                <tr>
                                                <th>Kode BMN/ Persediaan</th>
                                                    <td> <?php echo $d['kodebmn']; ?> </td>
                                                </tr>
                                            
                                                <tr>
                                                <th width="200px">Nama BMN/ Persediaan</th>
                                                <td>  <?php echo $d['namabmn']; ?> </td>
                                                </tr> 
                                              </table>

                                              
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                              

                            <h7 class="page-title text-truncate text-dark font-weight-medium mb-1"> Identifikasi Kebutuhan Barang </h7>
                            <table class="table table-bordered">
                                    <tbody>
                                       
                                        <tr>
                                            <th scope="row" width="350px"> Nama Barang </th>
                                            <td> <?php echo $d['namabarang']; ?> </td>
                                        </tr>

                                         <tr>
                                            <th scope="row" width="350px"> Jelaskan kriteria INDIKATOR KINERJA/SPESIFIKASI KINERJA yang dibutuhkan untuk pengadaan barang ini </th>
                                            <td> <?php echo $d['spesifikasi']; ?>  </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px"> Jelaskan Fungsi atau Kegunaan Barang Tersebut </th>
                                            <td> <?php echo $d['kegunaan']; ?>  </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px"> Jelaskan Ukuran atau Kapasitas Barang Tersebut </th>
                                            <td> <?php echo $d['kapasitas']; ?>  </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px"> Jelaskan macam garansi yang dibutuhkan/disyaratkan untuk pengadaan barang ini
                                             </th>
                                            <td> <?php echo $d['garansi']; ?>  </td>
                                        </tr>

                                        
                                        <tr>
                                            <th scope="row" width="350px"> Jelaskan Jumlah Barang yang dibutuhkan 
                                                <br> 
                                                (Dalam Satuan Unit)

                                             </th>
                                          
                                        <td>
                                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                                <tr>
                                                    <th> Nama Barang </th>
                                                    <th> Volume </th> 
                                                    <th> Satuan </th> 
                                                    
                                                </tr>
                                                <?php 
                                                    include 'koneksi.php';
                                                    $data = mysqli_query($koneksi,"select * from barang");
                                                    while($d2 = mysqli_fetch_array($data)){
                                                 ?>
                                                <tr>
                                                    <td><?php echo $d2['nama_barang']; ?></td>
                                                    <td><?php echo $d2['volume']; ?></td>
                                                    <td><?php echo $d2['satuan']; ?></td>    
                                                </tr> <?php } ?>
                                                
                                            </table>

                                        <tr>
                                        <th scope="row" width="350px"> 
                                            Jelaskan kapan barang ini direncanakan akan dimanfaatkan
                                        </th>
                                            <td> <?php echo $d['tglpemakaian']; ?>  </td>
                                        </tr>

                                         <tr>
                                            <th scope="row" width="350px"> Jelaskan pihak yang akan mengelola Barang

                                             </th>
                                            <td> <?php echo $d['pengelola']; ?>  </td>
                                        </tr>

                                          <tr>
                                            <th scope="row" width="350px"> Jelaskan Total perkiraan waktu pengadaan Barang (termasuk waktu pengiriman barang sampai tiba di lokasi). 
                                            <br>
                                            <br>
                                                Isikan dalam satuan hari/minggu/bulan. Jadi anda isikan perkiraan JANGKA WAKTU PELAKSANAAN KONTRAK

                                             </th>
                                            <td> <?php echo $d['estimasiwaktu']; ?> </td>
                                        </tr>

                                         

                                          <tr>
                                            <th scope="row" width="350px"> Apakah barang ini Terdapat di e-Katalog LKPP

                                             </th>
                                            <td> <?php echo $d['adalkpp']; ?> </td>
                                        </tr>

                                          <tr>
                                            <th scope="row" width="350px"> Jelaskan Tingkat prioritas kebutuhan Barang. Bila perlu mohon dijelaskan pada pilihan lainnya
                                             </th>
                                            <td> <?php echo $d['prioritas']; ?> </td>
                                        </tr>

                                         <tr>
                                            <th scope="row" width="350px"> Perkiraan Biaya
                                             </th>
                                            <td> <?php echo $d['perkiraanbiaya']; ?> </td>
                                        </tr>


                                        <tr>
                                            <th scope="row" width="350px"> Atas perkiraan biaya di atas, jelaskan rincian perhitungannya 
                                            </th>
                                          
                                                <td>
                                                    <table class="table table-bordered"  width="100%" cellspacing="0">
                                                       
                                                        <tr>
                                                            <th> Nama Barang        </th>
                                                            <th> Volume             </th> 
                                                            <th> Satuan             </th> 
                                                            <th width="100px"> Harga</th> 
                                                        </tr>
                                                         <?php 
                                                            include 'koneksi.php';
                                                            $data = mysqli_query($koneksi,"select * from barang");
                                                            while($d3 = mysqli_fetch_array($data)){
                                                         ?>
                                                        <tr>
                                                            <td><?php echo $d3['nama_barang']; ?></td>
                                                            <td><?php echo $d3['volume']; ?></td>
                                                            <td><?php echo $d3['satuan']; ?></td>
                                                            <td><?php echo $d3['harga']; ?></td>
                                                        </tr>
                                                    <?php  } ?>
                                                </td>
                                          </table>
                                    </tbody>
                            </table>


                            <h7 class="page-title text-truncate text-dark font-weight-medium mb-1"> Identifikasi Manajemen Penunjang Tugas dan Fungsi PPK </h7>
                            <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row" width="350px"> Jumlah pegawai dalam unit kerja. (dalam tim pengelolaan manajemen PPK)</th>
                                            <td> <?php echo $d['jumlah']; ?></td>
                                        </tr>

                                         <tr>
                                            <th scope="row" width="350px"> Apakah PPK dibantu oleh Tim atau Tenaga Ahli. Jelaskan pada kotak "Lainnya" </th>
                                                
                                                <td>
                                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                                 <?php echo $d['tenagaahli']; ?>  
                                                 <br><br><br>

                                                    <tr>
                                                        <p> Daftar Tim atau Tenaga Ahli dan Identitas singkat 
                                                        </p> 

                                                        <th> No       </th>
                                                        <th> Nama     </th> 
                                                        <th> Tugas    </th> 
                                                       
                                                    </tr>
                                                    
                                                    <?php 
                                                        include 'koneksi.php';
                                                        $no=1;
                                                        $data = mysqli_query($koneksi,"select * from tenaga_ahli");
                                                        while($d4 = mysqli_fetch_array($data)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $d4['nama_ahli']?></td>
                                                        <td><?php echo $d4['tugas_ahli']?></td>
                                                    </tr>
                                                <?php } ?>
                                                </table>
                                                </td>
                                            </tr>
                                            
                                              
                                            <tr>
                                                <th scope="row" width="350px"> Tingkat beban tugas dan tanggung jawab pegawai dalam melaksanakan tugas dan fungsi Tim Pengelolaan Manajemen PPK </th>
                                                <td>  <?php echo $d['tingkatbeban']; ?></td>
                                            </tr>

                                            <tr>
                                                <th scope="row" width="350px"> Apakah Jumlah barang yang telah tersedia/dimiliki/dikuasai saat ini sudah dapat memenuhi kebutuhan pada unit kerja PPK saat ini </th>
                                                <td><?php echo $d['jumlahbrg']; ?>  </td>
                                            </tr>

                                            <tr>
                                                <th scope="row" width="350px"> Apabila jumlah barang saat ini belum memenuhi kebutuhan, Jelaskan kebutuhan barang </th>
                                                <td><?php echo $d['memenuhikebutuhan']; ?></td>
                                            </tr>

                                       
                                    </tbody>
                            </table>


                            <table class="table table-bordered">
                                <h7 class="page-title text-truncate text-dark font-weight-medium mb-1"> Identifikasi Barang Yang Telah Tersedia/Dimiliki/Dikuasai</h7>
                                    <tbody>
                                       
                                        <tr>
                                            <th scope="row"> Jumlah barang (kode barang ini) yang telah tersedia /dimiliki/dikuasasi</th>
                                            <td><?php echo $d['jumlahbarang']; ?> </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px">Jumlah barang (kode barang ini) yang berstatus LAYAK PAKAI</th>
                                            <td><?php echo $d['layakpakai']; ?> </td>
                                        </tr>

                                        <tr>
                                            <th scope="row"> Jumlah barang (kode barang ini) yang berstatus RUSAK RINGAN</th>
                                            <td><?php echo $d['rusakringan']; ?> </td>
                                        </tr>

                                        <tr>
                                            <th scope="row"> Jumlah barang (kode barang ini) yang berstatus RUSAK BERAT</th>
                                            <td><?php echo $d['rusakberat']; ?> </td>
                                        </tr>

                                        <tr>
                                            <th scope="row"> Jelaskan lokasi keberadaan barang terdapat di ruang apa, bagian apa, satker apa</th>
                                            <td><?php echo $d['lokasi']; ?> </td>
                                        </tr>

                                        <tr>
                                            <th scope="row"> Jelaskan sumber dana pengadaan barang tersebut pada pengadaan tahun-tahun sebelumnya</th>
                                            <td><?php echo $d['sumberdana']; ?> </td>
                                        </tr>
                                    </tbody>
                            </table>



                            <h7 class="page-title text-truncate text-dark font-weight-medium mb-1"> Identifikasi Pasokan / supply barang </h7>
                            <table class="table table-bordered">

                                    <tbody>
                                         <tr>
                                            <th scope="row" width="350px"> Kemudahan memperoleh Barang di pasaran Indonesia sesuai dengan jumlah yang dibutuhkan</th>
                                            <td> <?php echo $d['kemudahan']; ?></td>
                                         </tr>
                                          
                                   

                                        <tr>
                                            <th scope="row" width="350px"> Terdapat produsen/pelaku usaha yang dinilai mampu dan memenuhi syarat</th>
                                            <td><?php echo $d['produsen']; ?></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px"> Apabila terbatas, jelaskan dan sebutkan nama penyediayang selama memenuhi kebutuhan barang ini. Setiap penyedia jelaskan identitas singkat penyedia, berapa kali berkontrak, berkontrak pada tahun berapa saja, serta jelaskan singkat kinerja penyedia tersebut</th>
                                            <td>

                                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                                   
                                                    <tr>
                                                      
                                                        <th> No              </th>
                                                        <th> Nama Penyedia    </th> 
                                                        <th> Rantai pasok (principal/agen tunggal/ distributor / pengecer    </th> 
                                                       
                                                    </tr>
                                                   
                                                    <?php 
                                                        include 'koneksi.php';
                                                        $no=1;
                                                        $data = mysqli_query($koneksi,"select * from penyedia");
                                                        while($d4 = mysqli_fetch_array($data)){
                                                    ?>

                                                    
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $d4['nama_penyedia']?></td>
                                                        <td><?php echo $d4['rantai_pasok']?></td>
                                                    </tr>
                                                <?php } ?>
                                                </table>
                                            </td>


                                        <tr>
                                            <th scope="row"> Kriteria barang</th>
                                            <td><?php echo $d['kriteriabarang']; ?></td>
                                        </tr>


                                        <tr>
                                            <th scope="row" width="350px"> Persyaratan Barang memiliki nilai TKDN tertentu. apabila Ya, Pada kotak "Lainnya" jelaskan berapa % paling sedikit TKDN </th>
                                            <td><?php echo $d['syaratbarang']; ?> </td> 
                                           
                                         </tr>

                                    </tbody>
                            </table>

                            

                            <h7 class="page-title text-truncate text-dark font-weight-medium mb-1">Identifikasi Persyaratan Lain Yang Diperlukan </h7>
                            <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row" width="350px"> Cara pengiriman dan pengangkutan</th>
                                                <td><?php echo $d['carakirim']; ?></td>   
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px"> Cara pemasangan</th>
                                                <td><?php echo $d['carapasang']; ?></td>  
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px"> Cara penimbunan/penyimpanan</th>
                                                <td><?php echo $d['carasimpan']; ?></td>  
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px"> Cara pengoperasian/penggunaan</th>
                                                <td><?php echo $d['carapakai']; ?></td>  
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px">Kebutuhan pelatihan untuk pengoperasian/pemeliharaan Barang</th>
                                                <td><?php echo $d['kebutuhanpelatihan']; ?></td>  
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px"> Aspek pengadaan berkelanjutan</th>
                                                <td><?php echo $d['pengadaanberkelanjutan']; ?></td>  
                                        </tr>
                                    </tbody>
                            </table>



                            <h7 class="page-title text-truncate text-dark font-weight-medium mb-1">Identifikasi Konsolidasi Pengadaan Barang </h7>
                            <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row" width="350px"> Terdapat pengadaan barang sejenis pada kegiatan lain</th>
                                                <td><?php echo $d['pengadaanlain']; ?></td>   
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px"> Indikasi konsolidasi atas pengadaan Barang</th>
                                                <td><?php echo $d['rencanakonsolidasi']; ?></td>  
                                        </tr>

                                        <tr>
                                            <th scope="row" width="350px"> Apabila direkomendasikan, jelaskan lebih lanjut rencana konsolidasi pengadaan barang tersebut</th>
                                                <td><?php echo $d['bilarekomen']; ?></td>  
                                        </tr>
                                    </tbody>
                            </table>


                             <table class="table table-bordered">
                                    <tbody>
                                       <tr>
                                           <th >Catatan Penting : </th>
                                           <td><?php echo $d['cttpenting']; ?></td>
                                          
                                       </tr>

                                    </tbody>
                            </table>

                            <table class="table table-bordered">
                                    <tbody>
                                       <tr>
                                           <th scope="row" width="400px">Disusun pertama kali tanggal </th>
                                           <td><?php echo $d['susunpertama']; ?></td>
                                       </tr>
                                       <tr>
                                           <th scope="row" width="400px">Disusun oleh </th>
                                           <td><?php echo $d['susunoleh']; ?></td>
                                       </tr>
                                        <tr>
                                           <th scope="row" width="400px">Disetujui oleh </th>
                                           <td><?php echo $d['menyetujui']; ?></td>
                                       </tr>

                                       <tr>
                                           <table class="table table-bordered"  width="100%" cellspacing="0">
                                               <tbody>
                                                   <tr>
                                                        <th width="400px">Disetujui oleh <br>
                                                        Pengguna Anggaran/Kuasa Pengguna Anggaran <br><br><br>
                                                        DR. I Dewa Made Agung, SE, M.Si </th>
                                                        <td> 00 - 00 - 0000 </td> 
                                                   </tr>
                                                   <tr>
                                                         <th width="400px"> <br><br><br><br> </th>
                                                        <td> Mengetahui</td> 
                                                   </tr>
                                                   <tr>
                                                        <th width="400px"> <br>Tenaga Ahli <br><br><br> </th>
                                                        <td><br>Tenaga Ahli <br><br><br></td> 
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </tr>
                                       
                                    </tbody>
                            </table>

<?php } ?>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted"> © 2022 Sistem Informasi by <a
                    href="https://kominfostatistik.denpasarkota.go.id/">KOMINFO STATISTIK DENPASAR</a> </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>


    <script type="text/javascript">
    $(document).ready(function(){
    $(".addCF").click(function(){
        $("#customFields").append('<tr valign="top"><th scope="row"><label for="customFieldNo">Custom Field</label></th><td><input type="text" class="code" id="customFieldNo" name="customFieldNo[]" value="" placeholder="Input No" /> &nbsp; <input type="text" class="code" id="customFieldNama" name="customFieldNama[]" value="" placeholder="Input Nama" />&nbsp; <input type="text" class="code" id="customFieldTugas" name="customFieldTugas[]" value="" placeholder="Input Tugas" /> &nbsp; <a href="javascript:void(0);" class="remCF"><button>Remove</button></a></td></tr>');
    });
    $("#customFields").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
});
</script>
</body>

</html>