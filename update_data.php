<?php 
include 'koneksi.php';


$id_kebutuhan =$_POST['id_kebutuhan']; //1
$perubahan = $_POST['perubahan']; //2
$tanggal = $_POST['alamat'];//3
$namakld = $_POST['namakld']; //4
$satker =  $_POST['satker']; //5
$ppk = $_POST['ppk']; //6
$program = $_POST['program']; //7
$kegiatan = $_POST['kegiatan']; //8
$subkegiatan = $_POST['subkegiatan']; //9
$output = $_POST['output']; //10

//indentifikasi kode Barang Milik Negara
$kodebmn = $_POST['kodebmn']; //11
$namabmn = $_POST['namabmn']; //12


//identifikasi Kebutuhan Barang
$namabarang = $_POST['namabarang']; //13
$spesifikasi = $_POST['spesifikasi']; //summernote //14
$kegunaan = $_POST['kegunaan']; //15
$kapasitas = $_POST['kapasitas']; //16
$garansi = $_POST['garansi']; //17

//tabel barang
$tglpemakaian = $_POST['tglpemakaian']; //18
$pengelola = $_POST['pengelola']; //19
$estimasiwaktu = $_POST['estimasiwaktu']; //20
$adalkpp = $_POST['adalkpp']; //radio button //21
$prioritas = $_POST['prioritas']; //dropdown //22
$perkiraanbiaya = $_POST['perkiraanbiaya']; //23


//identifikasi manajemen penunjang tugas dan fungsi PPK
$jumlah = $_POST['jumlah']; //jumlah pegawai //24
$tenagaahli = $_POST['tenagaahli']; //radio button //25

//tabel tenaga ahli
$tingkatbeban= $_POST['tingkatbeban']; //26
$jumlahbrg = $_POST['jumlahbrg'];  //27
$memenuhikebutuhan = $_POST['memenuhikebutuhan']; //radio button //28


//barang yang telah tersedia/dimiliki/dikuasai
$jumlahbarang = $_POST['jumlahbarang']; //29
$layakpakai = $_POST['layakpakai']; //30
$rusakringan = $_POST['rusakringan']; //31
$rusakberat = $_POST['rusakberat']; //32
$lokasi = $_POST['lokasi']; //33
$sumberdana = $_POST['sumberdana']; //34


//identifikasi pasokan atau supply barang
$kemudahan = $_POST['kemudahan']; //radio button //35
$produsen = $_POST['produsen']; //36
//tabel penyedia barang atau supplier
$kriteriabarang = $_POST['kriteriabarang']; //dropdown //37
$syaratbarang = $_POST['syaratbarang']; //radio button //38



//identifikasi persyaratan lain yang diperlukan 
$carakirim = $_POST['carakirim']; //39
$carapasang = $_POST['carapasang']; //40
$carasimpan = $_POST['carasimpan']; //41
$carapakai = $_POST['carapakai']; //radio button //42
$kebutuhanpelatihan = $_POST['kebutuhanpelatihan']; //radio button //43
$pengadaanberkelanjutan = $_POST['pengadaanberkelanjutan']; //summernote //44


//identifikasi konsolodasi pengadaan barang
$pengadaanlain = $_POST['pengadaanlain']; //radio button //45
$rencanakonsolidasi = $_POST['rencanakonsolidasi']; //radio button //46
$bilarekomen = $_POST['bilarekomen']; //47

//keterangan di bawah
$cttpenting = $_POST['cttpenting']; //48

$susunpertama = $_POST['susunpertama']; //49
$susunoleh = $_POST['susunoleh']; //50
$menyetujui = $_POST['menyetujui']; //51


//Query input menginput data kedalam tabel barang


 $sql = "UPDATE `kebutuhan_barang` SET `perubahan`='$perubahan',`tanggal`='$tanggal',`namakld`='$namakld',`satker`='$satker',`ppk`='$ppk',`program`='$program',`kegiatan`='$kegiatan',`subkegiatan`='$subkegiatan',`output`='$output',`kodebmn`='$kodebmn',`namabmn`='$namabmn',`namabarang`='$namabarang',`spesifikasi`='$spesifikasi',`kegunaan`='$kegunaan',`kapasitas`='$kapasitas',`garansi`='$garansi',`tglpemakaian`='$tglpemakaian',`pengelola`='$pengelola',`estimasiwaktu`='$estimasiwaktu',`adalkpp`='$adalkpp',`prioritas`='$prioritas',`perkiraanbiaya`='$perkiraanbiaya',`jumlah`='$jumlah',`tenagaahli`='$tenagaahli',`tingkatbeban`='$tingkatbeban',`jumlahbrg`='$jumlahbrg',`memenuhikebutuhan`='$memenuhikebutuhan',`jumlahbarang`='$jumlahbarang',`layakpakai`='$layakpakai',`rusakringan`='$rusakringan',`rusakberat`='$rusakberat',`lokasi`='$lokasi',`sumberdana`='$sumberdana',`kemudahan`='$kemudahan',`produsen`='$produsen',`kriteriabarang`='$kriteriabarang',`syaratbarang`='$syaratbarang',`carakirim`='$carakirim',`carapasang`='$carapasang',`carasimpan`='$carasimpan',`carapakai`='$carapakai',`kebutuhanpelatihan`='$kebutuhanpelatihan',`pengadaanberkelanjutan`='$pengadaanberkelanjutan',`pengadaanlain`='$pengadaanlain',`rencanakonsolidasi`='$rencanakonsolidasi',`bilarekomen`='$bilarekomen',`cttpenting`='$cttpenting',`susunpertama`='$susunpertama',`susunoleh`='$susunoleh',`menyetujui`='$menyetujui' WHERE `id_kebutuhan`='$id_kebutuhan' ";



//Mengeksekusi/menjalankan query diatas	

$hasil= mysqli_query($koneksi,$sql);
 
header("location:databarang.php?pesan=input");
?>