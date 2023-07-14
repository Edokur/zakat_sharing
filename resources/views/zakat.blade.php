<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sharing Is Caring</title>
        <link rel="stylesheet" href="{{ asset('/') }}assets/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    </head>
    <body>

        {{-- Navigasi --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Sharing Is Caring</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ ($title == 'Zakat') ? 'active' : '' }}" aria-current="page" href="/zakat">Zakat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>        

        {{-- Nav Tabs  --}}
        <div class="container mt-3">
            <div class="card">
                <div class="card-header">
                    <h4>Kalkulator Zakat</h4>
                    <button class="btn btn-primary mb-2" onclick="window.location.reload(true)">Reset</button>
                    <div id="liveAlertPlaceholder"></div>
                </div>
                <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Zakat</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Infaq & Sodakoh</button>
                            </li>
                        </ul>
                        <div class="tab-content mt-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#zakatPenghasilan" aria-expanded="true" aria-controls="collapseOne">
                                            Zakat Penghasilan
                                            </button>
                                        </h2>
                                        <div id="zakatPenghasilan" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <form action="">
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Penghasilan gaji Saya Perbulan</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="gaji_bulanan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Penghasilan Lain-lain Perbulan</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="penghasilan_lain" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Hutang/Cicilan saya untuk kebutuhan pokok</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="hutang" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Jumlah Penghasilan Perbulan</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="text" class="form-control" placeholder="0" aria-label="Username" id="jumlah_penghasilan" aria-describedby="basic-addon1" disabled>
                                                        </div>
                                                    </div>
                                                </form>
                            
                                                <h4>Nisab Zakat Penghasilan</h4>
                                                <p>Nisab adalah syarat jumlah minimum (ambang batas) harta yang dapat dikategorikan sebagai harta wajib zakat. Untuk penghasilan yang diwajibkan zakat adalah penghasilan yang berada diatas nisab. Nisab Zakat Penghasilan adalah setara 85 gr emas.</p>
                            
                                                <form action="">
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Masukkan harga emas saat ini (per gram)</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="text" class="form-control uang" placeholder="0" aria-label="Username" aria-describedby="basic-addon1" value="{{ $emas }}">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Besarnya Nishab Zakat Penghasilan per Bulan</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="text" class="form-control" placeholder="0" aria-label="Username" id=nishab_zakat aria-describedby="basic-addon1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Apakah Saya Wajib Membayar Zakat Penghasilan?</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control uang" placeholder="-" aria-label="Username" aria-describedby="basic-addon1" id="wajib_zakat_penghasilan" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Jumlah yang Saya Harus Dibayarkan per Bulan</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" aria-describedby="basic-addon1" id="zakat_penghasilan_perbulan">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#zakatMaal" aria-expanded="true" aria-controls="collapseOne">
                                            Zakat Maal
                                            </button>
                                        </h2>
                                        <div id="zakatMaal" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Zakat Harta (Maal) adalah sejumlah harta yang wajib dikeluarkan bila telah mencapai batas minimal tertentu (nisab) dalam kurun waktu (haul) setiap satu tahun kalender.</p>
                                                <form action="">
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Harta dalam bentuk Tabungan/ Giro/ Deposito</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_tabungan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Harta dalam bentuk Logam Mulia</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_logammulia" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Harta dalam bentuk Surat Beharga 2)</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_surat" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Harta dalam bentuk Properti 3)</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_properti" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Harta dalam bentuk Kendaraan 4)</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_kendaraan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Harta dalam bentuk Koleksi Seni & Barang Antik 5)</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_koleksiseni" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Harta dalam bentuk Stok Barang Dagangan</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_barangdagangan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Harta dalam bentuk Lainnya</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_bentuklainnya" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Harta dalam bentuk Piutang Lancar</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_piutang" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Jumlah Harta</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="jumlah_harta" aria-describedby="basic-addon1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Hutang Jatuh Tempo Saat Membayar Kewajiban Zakat</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="hutang_tempo" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Jumlah Harta Yang Dihitung Zakatnya</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_dihitung" aria-describedby="basic-addon1" disabled>
                                                        </div>
                                                    </div>
                                                    <h4>Nisab Zakat Harta (Maal)</h4>
                                                    <p>Untuk harta yang diwajibkan zakat adalah harta yang berjumlah diatas nisab. Nisab Zakat Harta (Maal) adalah setara dengan 85 gr emas 24 karat.</p>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Masukkan harga Emas saat ini (dalam gram)</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="" aria-describedby="basic-addon1" value="{{ $emas }}">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Besarnya Nisab Zakat Maal per Tahun</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="text" class="form-control" placeholder="0" aria-label="Username" id="nishab_zakat_maal" aria-describedby="basic-addon1" value="80.495.000" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Apakah Saya Wajib Membayar Zakat Maal ?</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="-" aria-label="Username" id="wajib_zakat_maal" aria-describedby="basic-addon1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Jumlah Bila Saya Bayarkan per Bulan</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="zakat_maal_perbulan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Jumlah yang Saya Harus Dibayarkan per Tahun</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="zakat_maal_pertahun" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#zakatfitrah" aria-expanded="true" aria-controls="collapseOne">
                                            Zakat Fitrah
                                            </button>
                                        </h2>
                                        <div id="zakatfitrah" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <form action="">
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Harga Jiwa</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harga_jiwa" value="28000" aria-describedby="basic-addon1" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Jumlah Jiwa</label>
                                                        <div class="input-group mb-3">
                                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="jiwa" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="form-label fw-bold">Total Pembayaran</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="text" class="form-control" placeholder="0" aria-label="Username" id="total_fitrah" aria-describedby="basic-addon1" disabled>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label fw-bold">Jenis Donasi</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>--Pilih--</option>
                                            <option value="Biaya Pendidikan">Biaya Pendidikan</option>
                                            <option value="Dompet Dhuafa">Dompet Dhuafa</option>
                                            <option value="Dana Kemanusiaan">Dana Kemanusiaan</option>
                                          </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label fw-bold">Keterangan Donasi</label>
                                        <input type="text" class="form-control" placeholder="keterangan donasi" aria-label="Username" id="harta_tabungan" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label fw-bold">Jumlah Donasi</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="harta_tabungan" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label fw-bold">Metode Pembayaran</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>--Pilih--</option>
                                            <option value="Biaya Pendidikan">BRI</option>
                                            <option value="Dompet Dhuafa">Dana</option>
                                            <option value="Dana Kemanusiaan">BNI</option>
                                          </select>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="liveAlertBtn">Kirimkan Donasi</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                </ul>
                <p class="text-center text-muted">&copy; 2023 Caraka Tech</p>
            </footer>
        </div>

        <script src="{{ asset('/') }}assets/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.uang').mask('0.000.000.000', {reverse: true});

                $('body').on('change', '#jiwa', function(){
                    var jiwa = $("#jiwa").val();
                    var harga_jiwa = $("#harga_jiwa").val();
                    
                    var round = Math.round;
                    var hasil_fitrah = round(jiwa) * round(harga_jiwa);
                    
                    $('#total_fitrah').val(hasil_fitrah).mask('0.000.000.000', {reverse: true});	
                });

                $('body').on('change', '#gaji_bulanan, #penghasilan_lain, #hutang', function(){
                    var gaji_bulanan = $("#gaji_bulanan").val();
                    var penghasilan_lain = $("#penghasilan_lain").val();
                    var hutang = $("#hutang").val();
                    
                    var round = Math.round;
                    var hasil1 = round(gaji_bulanan)+ round(penghasilan_lain)-round(hutang);

                    var duakomalima = (0.025);
                    
                    var zakat_penghasilan_perbulan = hasil1 * duakomalima;

                    if(hasil1 > 6828806){
                        $('#wajib_zakat_penghasilan').val('Wajib');
                    }else{
                        $('#wajib_zakat_penghasilan').val('Tidak Wajib');
                    };
                    
                    $('#nishab_zakat').val('6828806').mask('0.000.000.000', {reverse: true});
                    $('#jumlah_penghasilan').val(hasil1).mask('0.000.000.000', {reverse: true});	
                    $('#zakat_penghasilan_perbulan').val(zakat_penghasilan_perbulan);	
                });

                $('body').on('change', '#harta_tabungan, #harta_logammulia, #harta_surat, #harta_properti, #harta_kendaraan, #harta_koleksiseni, #harta_barangdagangan, #harta_bentuklainnya, #harta_piutang, #hutang_tempo, #wajib_zakat_maal', function (){
                    var harta_tabungan = $("#harta_tabungan").val();
                    var harta_logammulia = $("#harta_logammulia").val();
                    var harta_surat = $("#harta_surat").val();
                    var harta_properti = $("#harta_properti").val();
                    var harta_kendaraan = $("#harta_kendaraan").val();
                    var harta_koleksiseni = $("#harta_koleksiseni").val();
                    var harta_barangdagangan = $("#harta_barangdagangan").val();
                    var harta_bentuklainnya = $("#harta_bentuklainnya").val();
                    var harta_piutang = $("#harta_piutang").val();
                    var hutang_tempo = $("#hutang_tempo").val();

                    var round = Math.round;
                    var hasil = round(harta_tabungan)+ round(harta_logammulia)+ round(harta_surat)+ round(harta_properti)+ round(harta_kendaraan)+ round(harta_koleksiseni)+ round(harta_barangdagangan)+ round(harta_bentuklainnya)+ round(harta_piutang);

                    var hasil_hutang_tempo = hasil - round(hutang_tempo);
                    var duakomalima = (0.025);
                    
                    var zakat_maal_pertahun = hasil_hutang_tempo * duakomalima;
                    var zakat_maal_perbulan = zakat_maal_pertahun / 12;

                    if(hasil_hutang_tempo > 80495000){
                        $('#wajib_zakat_maal').val('Wajib');
                    }else{
                        $('#wajib_zakat_maal').val('Tidak Wajib');
                    };
                    
                    $('#jumlah_harta').val(hasil).mask('0.000.000.000', {reverse: true});	
                    $('#harta_dihitung').val(hasil_hutang_tempo).mask('0.000.000.000', {reverse: true});	
                    $('#zakat_maal_perbulan').val(round(zakat_maal_perbulan)).mask('0.000.000.000', {reverse: true});
                    $('#zakat_maal_pertahun').val(round(zakat_maal_pertahun)).mask('0.000.000.000', {reverse: true});
                });

                const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

                const alert = (message, type) => {
                const wrapper = document.createElement('div')
                wrapper.innerHTML = [
                    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                    `   <div>${message}</div>`,
                    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                    '</div>'
                ].join('')

                alertPlaceholder.append(wrapper)
                }

                const alertTrigger = document.getElementById('liveAlertBtn')
                if (alertTrigger) {
                alertTrigger.addEventListener('click', () => {
                    alert('Donasi Anda Telah Berhasil', 'success')
                })
                }
            });
        </script>

    </body>
</html>