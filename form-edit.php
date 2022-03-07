<?php 
include 'koneksi.php'

 ?>

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
    form{
        margin: 20px 0;
    }
    form input, button{
        padding: 5px;
    }
    table{
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #cdcdcd;
    }
    table th, table td{
        padding: 10px;
        text-align: left;
    }
</style>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
    $(document).ready(function(){
        $(".add-row").click(function(){
            var nama_barang = $("#nama_barang").val();
            var volume = $("#volume").val();
            var satuan = $("#satuan").val();
            var harga = $("#harga").val();
            var markup = "<tr><td><input type='checkbox' name='record'> </td> <td>" + nama_barang + "</td> <td>" + volume + "</td> <td>" + satuan + "</td>  <td>" + harga + "</td>  </tr>";
            $("table tbody").append(markup);
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
        </script>


    <link href="scss/summernote.scss"  rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.min.js"></script>
        <script>
                $(document).ready(function(){
                        $('#summernote').summernote();
                });
        </script>

         <script>
                $(document).ready(function(){
                        $('#summernote2').summernote2();
                });
        </script>



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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="databarang.php" class="btn btn-primary"> Kembali </a><br><br><br>
                                <h3 class="text-center">FORM IDENTIFIKASI KEBUTUHAN BARANG</h3><br><br> 


                              <?php 
                                  include 'koneksi.php';
                                  $id_kebutuhan =$_GET['id_kebutuhan'];
                                  $data = mysqli_query($koneksi, "select * from kebutuhan_barang where id_kebutuhan='$id_kebutuhan'");
                                  while ($d= mysqli_fetch_array($data)) {
                                ?>

                               
                                <form method="post" action="update_data.php">
                                    <input type="hidden" name="id_kebutuhan" value="id_kebutuhan" value="<?php echo $d['id_kebutuhan']; ?>">
                                    
                                    <div class="row">
                                        <div class="col">
                                            <input type="number" class="form-control" placeholder="Perubahan Ke " name="perubahan">
                                        </div>
                                        <div class="col">
                                            <input type="date" class="form-control" placeholder="Tanggal Perubahan" name="tanggal"> <br><br>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Nama K/L/D </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="namakld"  value="<?php echo $d['namakld']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Satuan Kerja</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="satker"  value="<?php echo $d['satker']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Pejabat Pembuat Komitmen</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="ppk"  value="<?php echo $d['ppk']; ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Program (sesuai DIPA)</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" name="program"  value="<?php echo $d['program']; ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Kegiatan (sesuai DIPA)</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" name="kegiatan"  value="<?php echo $d['kegiatan']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Sub Kegiatan (sesuai DIPA)</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" name="subkegiatan"  value="<?php echo $d['subkegiatan']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Output (sesuai DIPA)</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" name="output"  value="<?php echo $d['output']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="page-title text-truncate text-dark font-weight-medium mb-1">Identifikasi Kode Barang Milik Negara (BMN) </h5>
                                            <h7 class="page-title text-truncate text-dark mb-1">Kode Barang Milik Negara (BMN) dan nama barang pada SIMAK BMN/Persediaan </h7><br><br>
        
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Kode BMN/Persediaan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="kodebmn"  value="<?php echo $d['kodebmn']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Nama BMN/Persediaan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="namabmn"  value="<?php echo $d['namabmn']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="page-title text-truncate text-dark font-weight-medium mb-1">Identifikasi Kebutuhan Barang </h5>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Nama Barang</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="namabarang"  value="<?php echo $d['namabarang']; ?>" >
                                                </div>
                                            </div>

                                           <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Kriteria Indikator Kinerja</label>
                                                <div class="col-sm-8">
                                                     <textarea id="summernote"  rows="10"></textarea>
                                                <br/>
                                                </div>
                                                <script>
                                                        $('#summernote').summernote({
                                                            placeholder: 'Silakan diisikan disini',
                                                            tabsize: 2,
                                                            height: 100
                                                        });
                                                    </script>
                                                   
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Fungsi Barang Tersebut</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" name="kegunaan" rows="3"  value="<?php echo $d['kegunaan']; ?>"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Ukuran/Kapasitas Barang</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="kapasitas"  value="<?php echo $d['kapasitas']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Garansi yang Dibutuhkan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="garansi"  value="<?php echo $d['garansi']; ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Barang yang Dibutuhkan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama_barang" placeholder="Nama Barang">
                                                    <input type="text" name="volume" placeholder="Volume">
                                                    <input type="text" name="satuan" placeholder="Satuan">
                                                    <input type="text" name="harga" placeholder="Harga">
                                                    <input type="button" class="add-row" value="Add Row"> <br><br>

                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>No</th>
                                                                <th>Nama Barang</th>
                                                                <th>Volume</th>
                                                                <th>Satuan</th>
                                                                <th>Harga</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <?php $no=1 ?>
                                                                <td><input type="checkbox" name="record"></td>
                                                                <td><?php echo $no++ ?></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <button type="button" class="delete-row">Delete Row</button> <br><br>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Kapan Barang ini akan dimanfaatkan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="tglpemakaian"  value="<?php echo $d['tglpemakaian']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Pihak yang akan menggunakan barang</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="pengelola"  value="<?php echo $d['pengelola']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Perkiraan waktu pengadaan barang</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="estimasiwaktu"  value="<?php echo $d['estimasiwaktu']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Barang ini terdapat di LKPP</label>
                                                 <div class="col-sm-8">
                                                     <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_lkpp"  value="ya">
                                                        <label class="form-check-label" > &nbsp; &nbsp; Ya </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_lkpp"  value="tidak">
                                                        <label class="form-check-label" > &nbsp; &nbsp;  Tidak </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Tingkat Prioritas Kebutuhan Barang</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="prioritas">
                                                        <option value="tinggi">Tinggi</option>
                                                        <option value="sedang">Sedang</option>
                                                        <option value="rendah">Rendah</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Prakiraan Biaya</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="perkiraanbiaya"  value="<?php echo $d['perkiraanbiaya']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Rincian Perhitungan</label>
                                                <div class="col-sm-8">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="checkbox" name="record"></td>
                                                                <td>Peter Parker</td>
                                                                <td>peterparker@mail.com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 


                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="page-title text-truncate text-dark font-weight-medium mb-1">Identifikasi Manajemen Penunjang Tugas dan Fungsi PPK </h5>
                                        
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jumlah Pegawai dalam unit kerja</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="jumlah"  value="<?php echo $d['jumlah']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">PPK dibantu oleh tim</label>
                                                <div class="col-sm-8">
                                                     <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_ppk"  value="Ya">
                                                        <label class="form-check-label" > &nbsp; &nbsp; Ya </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_ppk"  value="Tidak">
                                                        <label class="form-check-label" > &nbsp; &nbsp; Tidak </label>
                                                    </div>

                                                    <input type="text" name="name" placeholder="Name">
                                                    <input type="text" name="email" placeholder="Email Address">
                                                    <input type="button" class="add-row" value="Add Row"> <br><br>

                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="checkbox" name="record"></td>
                                                                <td>Peter Parker</td>
                                                                <td>peterparker@mail.com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <button type="button" class="delete-row">Delete Row</button> <br><br></div> </div>
                                            
                                            

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Tingkat Beban dalam tugas dan tanggung jawab pegawai dalam melaksanakan fungsi Tim Pengelola Manajemen PPK</label>
                                                <div class="col-sm-8">
                                                <select class="form-control" name="tingkatbeban">
                                                    <option value="tinggi">Tinggi</option>
                                                    <option value="sedang">Sedang</option>
                                                    <option value="rendah">Rendah</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jumlah barang yang dimiliki sudah dapat memenuhi kebutuhan kerja saat ini</label>
                                                <div class="col-sm-8" >
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_jumlah" value="Ya" >
                                                        <label class="form-check-label" > &nbsp; &nbsp; Ya </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_jumlah"  value="Tidak">
                                                        <label class="form-check-label" > &nbsp; &nbsp; Tidak </label>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>




                                     <div class="card">
                                        <div class="card-body">
                                            <h5 class="page-title text-truncate text-dark font-weight-medium mb-1">Identifikasi Barang Yang Telah Tersedia/Dimiliki/Dikuasai</h5>
                                        
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jumlah Barang Tersedia </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="jumlahbarang"  value="<?php echo $d['jumlahbarang']; ?>">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jumlah Barang Layak Pakai </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="layakpakai"  value="<?php echo $d['layakpakai']; ?>">
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jumlah Barang Rusak Ringan </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="rusakringan"  value="<?php echo $d['rusakringan']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jumlah Barang Rusak Berat </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="rusakberat"  value="<?php echo $d['rusakberat']; ?>">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Lokasi Barang </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="lokasi"  value="<?php echo $d['lokasi']; ?>">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Sumber Dana Pengadaan Barang </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="sumberdana"  value="<?php echo $d['sumberdana']; ?>">
                                                </div>
                                                </div>
                                              </div> 
                                            </div>
                                        




                                        <div class="card">
                                        <div class="card-body">
                                              <h5 class="page-title text-truncate text-dark font-weight-medium mb-1"> Identifikasi Pasokan / supply barang </h5><br><br>
                                        
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Barang Mudah Diperoleh di Pasaran</label>
                                                <div class="col-sm-8">
                                                     <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_pasokan" value="Ya">
                                                        <label class="form-check-label" > &nbsp; &nbsp; Ya </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_pasokan" value="Tidak">
                                                        <label class="form-check-label"> &nbsp; &nbsp; Tidak </label>
                                                    </div>
                                                </div>
                                            </div>  
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Jumlah Produsen </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="produsen"  value="<?php echo $d['produsen']; ?>" >
                                                </div>
                                            </div>
                                            

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Nama Penyedia Kebutuhan Barang </label>
                                                <div class="col-sm-8">
                                                   
                                                    <input type="text" name="name" placeholder="Nama Penyedia">
                                                    <input type="text" name="email" placeholder="Rantai Pemasok">
                                                    <input type="button" class="add-row" value="Add Row"> <br><br>

                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th> No</th>
                                                                <th>Nama Penyedia</th>
                                                                <th> Rantai Pemasok</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>No</td>
                                                                <td>Peter Parker</td>
                                                                <td>peterparker@mail.com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <button type="button" class="delete-row">Delete Row</button> <br><br>
                                                </div> 
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Kriteria Barang</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="kriteriabarang">
                                                        <option value="dalamnegeri"> Produk Dalam Negeri </option>
                                                        <option value="impor"> Impor </option>
                                                        <option value="pabrik"> Pabrik </option>
                                                        <option value="kertangan"> Kerajinan Tangan </option>
                                                    </select>
                                                </div>
                                            </div> 


                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Barang Memiliki Nilai TKDN </label>
                                                <div class="col-sm-8" >
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_nilai"  value="Ya" >
                                                        <label class="form-check-label" > &nbsp; &nbsp; Ya </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_nilai"  value="Tidak">
                                                        <label class="form-check-label" > &nbsp; &nbsp; Tidak </label>
                                                    </div>
                                                </div>
                                            </div> 

                                        </div></div>

                                    

                                    <div class="card">
                                        <div class="card-body">
                                              <h5 class="page-title text-truncate text-dark font-weight-medium mb-1"> Identifikasi Persyaratan Lain Yang Diperlukan </h5><br><br>


                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Cara pengiriman dan pengangkutan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="carakirim"  value="<?php echo $d['carakirim']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Cara pemasangan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="carapasang"  value="<?php echo $d['carapasang']; ?>" >
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Cara penimbunan / penyimpanan </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="carasimpan"  value="<?php echo $d['carasimpan']; ?>" >
                                                </div>
                                            </div>
                                            
                                            

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Cara Pengoperasian / Penggunaan </label>
                                                <div class="col-sm-8" >
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_cara"  value="Manual" >
                                                        <label class="form-check-label" > &nbsp; &nbsp; Manual </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_jumlah"  value="Otomatis">
                                                        <label class="form-check-label" > &nbsp; &nbsp; Otomatis </label>
                                                    </div>
                                                </div>
                                            </div> 
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Kebutuhan pelatihan untuk pengoperasian/pemeliharaan Barang </label>
                                                <div class="col-sm-8" >
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_pemeliharaan"  value="Ya" >
                                                        <label class="form-check-label" > &nbsp; &nbsp; Ya </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_pemeliharaan"value="Tidak">
                                                        <label class="form-check-label" > &nbsp; &nbsp; Tidak </label>
                                                    </div>
                                                </div>
                                            </div> 
                                         
                                          <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Aspek pengadaan berkelanjutan</label>
                                                <div class="col-sm-8">
                                                    <textarea id="summernotee"  rows="10"></textarea>
                                                   
                                                </div>
                                                <script>
                                                        $('#summernotee').summernote({
                                                            placeholder: 'Silakan diisikan disini',
                                                            tabsize: 2,
                                                            height: 100
                                                        });
                                                    </script>
                                            </div> 
                                        </div></div>


                                    <div class="card">
                                        <div class="card-body">
                                              <h5 class="page-title text-truncate text-dark font-weight-medium mb-1"> Identifikasi Konsolidasi Pengadaan Barang </h5><br><br>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Terdapat pengadaan barang sejenis pada kegiatan lain</label>
                                                <div class="col-sm-8" >
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_konsolidasi" value="Ya" >
                                                        <label class="form-check-label" > &nbsp; &nbsp; Ya </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_konsolidasi" value="Tidak">
                                                        <label class="form-check-label" > &nbsp; &nbsp;Tidak </label>
                                                    </div>
                                                </div>
                                            </div> 


                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Indikasi konsolidasi atas pengadaan Barang</label>
                                                <div class="col-sm-8" >
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_pengadaan"  value="Direkomendasikan" >
                                                        <label class="form-check-label"> &nbsp; &nbsp; Direkomendasikan </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_pengadaan" value="Tidak Direkomendasikan">
                                                        <label class="form-check-label" > &nbsp; &nbsp; Tidak Direkomendasikan</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label"> Rencana konsolidasi pengadaan barang lebih lanjut</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" id="fungsibarang" rows="3"></textarea>
                                                </div>
                                            </div>

                                        </div></div>

                                        <div>
                                            <button type="submit" class="btn-primary"> SIMPAN DATA </button>
                                        </div>
                                         
                                </form>
                                                        
                            
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