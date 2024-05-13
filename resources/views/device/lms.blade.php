@extends('layouts.app')
@section('title', 'LMS')

@section('content')

    <!-- modal filter -->
    <div class="modal fade" data-bs-backdrop="static" id="modalFilterData" tabindex="-1">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-6" id="modalFilterTitle">Filter Pencarian LMS</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="font-size: 14px;">


                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label for="selectMerekHPFilter">Alasan Permintaan</label>
                            <select name="selectAlasanPermintaanFilter" id="selectAlasanPermintaanFilter"
                                class="form-select">
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label for="selectDurasiPemakaianFilter">Durasi Pemakaian</label>
                            <select name="selectDurasiPemakaianFilter" id="selectDurasiPemakaianFilter" class="form-select">
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label for="selectPengajuanFilter">Status Pengajuan</label>
                            <select name="selectPengajuanFilter" id="selectPengajuanFilter" class="form-select">
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="">Pilih Waktu Pengajuan</label>


                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdWaktuPengajuan" id="rdSetahun"
                                    value="">
                                <label class="form-check-label" for="rdSetahun">
                                    ALL
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdWaktuPengajuan" id="rdSeminggu"
                                    value="7">
                                <label class="form-check-label" for="rdSeminggu">
                                    1 Minggu Terakhir
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdWaktuPengajuan" id="rdSebulan"
                                    value="30">
                                <label class="form-check-label" for="rdSebulan">
                                    1 Bulan Terakhir
                                </label>
                            </div>
                        </div>




                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal"
                        style="text-decoration: none;">Batalkan</button>
                    <button type="button" id="btnFilterData" class="btn btn-primary">Tampilkan Hasil</button>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal -->

    <div class="wrappers">
        <div class="wrapper_content">

            <!-- modified modal Daftar-->
            <div class="modal fade" data-bs-backdrop="static" id="modalDaftar" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalDaftarTitle">Daftar Laptop Management System</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="font-size: 14px;">

                            <form id="formDaftar" method="POST">
                                @csrf

                                <div id="section__one">

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="">Nomor Badge </label>
                                            <input type="text" id="txBadge" name="txBadge" class="form-control"
                                                placeholder="Masukkan nomor badge" autocomplete="off">
                                            <span id="errBadge" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Nama Karyawan</label>
                                            <input type="text" id="txNama" name="txNama" class="form-control"
                                                readonly>
                                            <span id="errNama" class="text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="">Departmen</label>
                                            <input type="text" id="txDepartmen" name="txDepartmen"
                                                class="form-control" readonly>
                                            <span id="errDepartmen" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Posisi</label>
                                            <input type="text" id="txPosisi" name="txPosisi" class="form-control"
                                                readonly>
                                            <span id="errPosisi" class="text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="">Mulai Masuk</label>
                                            <input type="text" id="txMulaiMasuk" name="txMulaiMasuk"
                                                class="form-control" readonly>
                                            <span id="errMulaiMasuk" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-6"></div>
                                    </div>

                                </div>

                                <div id="section__two">

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="">Merek Laptop</label>
                                            <select class="form-select" id="selectMerekLaptop" name="selectMerekLaptop">
                                            </select>
                                            <span id="errMerekLaptop"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Tipe Laptop</label>
                                            <input type="text" id="txTipeLaptop" name="txTipeLaptop"
                                                class="form-control" placeholder="Masukkan Tipe Laptop">
                                            <span id="errTipeLaptop" class="text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="">Barcode Label</label>
                                            <input type="text" id="txNoSerial" name="txNoSerial" class="form-control"
                                                placeholder="Masukkan Barcode Label">
                                            <span id="errNoSerial" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Alasan Permintaan</label>
                                            <select class="form-select" id="selectAlasanPermintaan"
                                                name="selectAlasanPermintaan">
                                                <option value="61">Untuk bekerja</option>
                                                <option value="62">Alasan Permintaan</option>
                                            </select>
                                            <span id="errAlasanPermintaan" class="text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="">Asset Number</label>
                                            <input type="text" id="txAssetNumber" name="txAssetNumber"
                                                class="form-control" placeholder="Masukkan Asset Number">
                                            <span id="errAssetNumber" class="text-danger"></span>
                                        </div>
                                        <div id="alasanDeskripsi" class="col-sm-6">
                                            <label for="">Masukan Alasan</label>
                                            <input type="text" id="txAlasanDeskripsi" name="txAlasanDeskripsi"
                                                class="form-control" placeholder="Masukkan Alasan">
                                            <span id="errAlasanDeskripsi" class="text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="">Durasi Pemakaian</label>
                                            <select class="form-select" id="selectDurasiPemakaian"
                                                name="selectDurasiPemakaian">
                                            </select>
                                            <span id="errNoSerial" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            {{-- <label for="">Masukan Alasan</label>
                                            <input type="text" id="txAlasanDeskripsi" name="txAlasanDeskripsi" class="form-control" placeholder="Masukkan Alasan">
                                            <span id="errAlasanDeskripsi"></span> --}}
                                        </div>
                                    </div>

                                    <div id="containerDateDurasi" class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="">Mulai Memakai</label>
                                            <input type="text" id="txMulaiMemakai" name="txMulaiMemakai"
                                                class="form-control dateMulai">
                                            <span id="errMulaiMemakai" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Selesai Memakai</label>
                                            <input type="text" id="txSelesaiMemakai" name="txSelesaiMemakai"
                                                class="form-control dateAkhir">
                                            <span id="errSelesaiMemakai" class="text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkUploadFoto"
                                                    name="checkUploadFoto">
                                                <label class="form-check-label" for="checkUploadFoto">
                                                    Upload Foto
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div id="fotoDepanSuccess" class="col-sm-6 text-center">
                                            <span class="text-success fs-2"><i class="bx bxs-check-circle"></i></span>
                                        </div>
                                        <div id="fotoBelakangSuccess" class="col-sm-6 text-center">
                                            <span class="text-success fs-2"><i class="bx bxs-check-circle"></i></span>
                                        </div>
                                    </div>

                                    <div id="containerUploadFoto" class="row mb-3">
                                        <div class="col-sm-6">
                                            <p class="mb-1">Foto Laptop bagian depan (JPG/PNG)</p>
                                            <input style="font-size: 12px; width: 100%; padding:8px;" type="file"
                                                id="gambarDpn" name="gambarDpn"
                                                class="fw-bold btn btn-outline-danger rounded-3">
                                            Ambil Foto Laptop bagian depan
                                            <p class="mb-5">Foto Laptop bagian belakang (JPG/PNG)</p>
                                            <span id="errGambarDpn" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-1">Foto Laptop bagian belakang (JPG/PNG)</p>
                                            <input style="font-size: 12px; width: 100%; padding:8px;" type="file"
                                                id="gambarBlkng" name="gambarBlkng"
                                                class="fw-bold btn btn-outline-danger rounded-3">
                                            Ambil Foto Laptop bagian belakang
                                            <p class="mb-5">Foto Laptop bagian belakang (JPG/PNG)</p>
                                            <span id="errGambarBlkng" class="text-danger"></span>
                                        </div>
                                    </div>

                                    <div id="containerTakeFoto" class="row mb-3">
                                        <div class="col-sm-6 text-center">
                                            <input type="hidden" id="gambarDpnCamera" name="gambarDpnCamera"
                                                value="">
                                            <button id="btnCameraDepan" type="button" class="btn btn-primary"><i
                                                    class="bx bxs-camera"></i> Ambil Foto Depan</button>
                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <input type="hidden" id="gambarBlkngCamera" name="gambarBlkngCamera"
                                                value="">
                                            <button id="btnCameraBelakang" type="button" class="btn btn-primary"><i
                                                    class="bx bxs-camera"></i> Ambil Foto Belakang</button>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <span id="errFotoDpn" class="text-danger"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <span id="errFotoBlk" class="text-danger"></span>
                                        </div>
                                    </div>

                                </div>

                                <div id="section__three">
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Nama Karyawan</p>
                                            <p id="daftarNama" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Departemen</p>
                                            <p id="daftarDept" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Mulai Masuk</p>
                                            <p id="daftarJoinDate" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Merek Laptop</p>
                                            <p id="daftarMerkLaptop" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Barcode Label (Serial Number)</p>
                                            <p id="dafterDeviceNumber" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Alasan Lainnya</p>
                                            <p id="daftarAlasanLainnya" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Mulai Memakai</p>
                                            <p id="daftarMulai" class="mb-2 fw-bold">10/03/2023</p>
                                            <p class="mb-0">Upload Laptop bagian depan</p>
                                            <img id="containerGambarDpn"
                                                class="img-thumbnail border-0 rounded-3 mb-2 fw-bold imgView"
                                                width="80" src="" alt="image depan">
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-0">Nomor Badge</p>
                                            <p id="daftarBadge" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Posisi</p>
                                            <p id="daftarPosisi" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Asset Number</p>
                                            <p id="daftarAsset" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Tipe Laptop</p>
                                            <p id="daftarTipeLaptop" class="mb-2 fw-bold">-</p>
                                            <p class="mb-0">Alasan Permintaan</p>
                                            <p id="daftarAlasan" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Durasi Pemakaian</p>
                                            <p id="daftarDurasi" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Selesai Memakai</p>
                                            <p id="daftarTanggal" class="mb-2 fw-bold"></p>
                                            <p class="mb-0">Upload Laptop bagian belakang</p>
                                            <img id="containerGambarBlkng"
                                                class="img-thumbnail border-0 rounded-3 mb-2 fw-bold imgView"
                                                width="80" src="" alt="image belakang">
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer section-btn-modal d-flex justify-content-between">
                                    <div class="section-btn-modal__left">
                                        <p class="mt-2"><span id="currentNumber" class="fw-bold">1</span> / 3 <span
                                                id="currentText">Informasi Karyawan</span></p>
                                    </div>
                                    <div class="section-btn-modal__left">
                                        <button onclick="btnBack()" type="button" class="btn btn-link"
                                            style="text-decoration: none;">Batalkan</button>
                                        <button onclick="btnNext()" type="button" id="btnSubmitMMS"
                                            class="btn btn-secondary">Selanjutnya</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End modified modal Daftar-->

            <!-- modified modal klik data table-->
            {{-- <div class="modal fade" data-bs-backdrop="static" id="modalDaftar" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered" style="width: 40%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Mobile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formInputRepair">
                                <div class="container">
                                    <div class="box">
                                        <div class="button" id="button"></div>
                                            <button type="button" id="depart" class="toggle-btn" onclick="leftClick()">Informasi Perangkat</button>
                                            <button type="button" id="linecode" class="toggle-btn" onclick="rightClick()">Informasi Pengguna</button>
                                            <button type="button" id="history" class="toggle-btn" onclick="leftClick()">Riwayat Status</button>
                                            <button type="button" id="response" class="toggle-btn" onclick="rightClick()">Tanggapan</button>
                                            </div>
                                        </div>  
                                    </form>
                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link" data-bs-dismiss="modal" style="text-decoration: none; font-size: 12px; width: 150px; height: 30px;">Tolak Pengajuan</button>
                                        <button type="button" style="font-size: 12px; width: 100px; height: 30px;" id="btnSubmit" class="btn btn-primary">Selesai Peninjauan</button>
                                    </div>     
                                </div>
                            </div>
                        </div> --}}
            <!-- End modified modal klik data table-->

            <div class="row me-3">
                <div class="col-sm-6">
                    <p class="h4 mt-6">
                        Laptop Management System
                    </p>
                </div>

                <div class="col-sm-12 mt-2 d-flex justify-content-between">
                    <div class="d-flex gap-1">
                        <input id="txSearch" type="text"
                            style="width: 250px; min-width: 250px; font-size: 12px; padding-left: 30px; 
                    background-image: url('{{ asset('img/search.png') }}'); background-repeat: no-repeat; 
                    background-position: left center;"
                            class="form-control rounded-3" placeholder="Cari Laptop">
                        <button id="btnFilter" style="font-size: 12px;" type="button"
                            class="btn btn-outline-danger rounded-3">
                            <i class='bx bx-slider p-1'></i>
                            Filter
                        </button>
                        <button id="btnReset" style="font-size: 12px;" type="button"
                            class="btn text-danger rounded-3"><i class='bx bx-refresh'></i>
                            Reset Filter
                        </button>
                    </div>
                    <div class="d-flex gap-1">
                        {{-- <button id="btnDaftar" style="font-size: 12px;" type="button"
                            class="btn btn-outline-danger rounded-3">
                            Daftar LMS
                        </button> --}}

                        {!! $userRole == 63 || $userRole == 64
                            ? '<button id="btnDaftar" style="font-size: 12px;" type="button"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            class="btn btn-outline-danger rounded-3">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Daftar LMS
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </button>'
                            : '' !!}

                    </div>
                </div>

                <div class="text-end col-sm-9 d-flex mt-2 mb-2 rounded-3">
                    {{-- <span style="font-size: 12px;">Menampilkan 7 dari 17 Perangkat</span> --}}
                </div>

                <div id="containerLMS" class="col-sm-12 mt-1">
                    <table id="tableLMS" class="table table-responsive table-hover" style="max-width: 1000px;">
                        <thead>
                            <tr style="color: #CD202E; height: -10px;" class="table-danger">
                                <th class="p-3" scope="col">Merek Laptop</th>
                                <th class="p-3" scope="col">Type Laptop</th>
                                <th class="p-3" scope="col">Barcode Label</th>
                                <th class="p-3" scope="col">Alasan Permintaan</th>
                                <th class="p-3" scope="col">Durasi Pemakaian</th>
                                <th class="p-3" scope="col">Waktu Pengajuan</th>
                                <th class="p-3" scope="col">Status Pengajuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="color: gray;">
                                <td class="p-3">Asus</td>
                                <td class="p-3">ROG Strix</td>
                                <td class="p-3">0123456789</td>
                                <td class="p-3">Working Purpose</td>
                                <td class="p-3">Worker-Working Purpose</td>
                                <td class="p-3">7 April 2023</td>
                                <td class="p-3">
                                    Menunggu di approve HRD
                                    </a>
                                </td>
                            </tr>
                            <tr style="color: gray;">
                                <td class="p-3">Lenovo</td>
                                <td class="p-3">V14IIL</td>
                                <td class="p-3">0123456789</td>
                                <td class="p-3">Working Purpose</td>
                                <td class="p-3">Worker-Working Purpose</td>
                                <td class="p-3">7 April 2023</td>
                                <td class="p-3">
                                    Menunggu di approve HRD
                                    </a>
                                </td>
                            </tr>
                            <tr style="color: gray;">
                                <td class="p-3">HP</td>
                                <td class="p-3">Pavilion</td>
                                <td class="p-3">0123456789</td>
                                <td class="p-3">Working Purpose</td>
                                <td class="p-3">Worker-Working Purpose</td>
                                <td class="p-3">6 April 2023</td>
                                <td class="p-3">
                                    <img src="{{ asset('img/checklist.png') }}">
                                    Selesai
                                </td>
                            </tr>
                            <tr style="color: gray;">
                                <td class="p-3">Acer</td>
                                <td class="p-3">Nitro</td>
                                <td class="p-3">0123456789</td>
                                <td class="p-3">Working Purpose</td>
                                <td class="p-3">Worker-Working Purpose</td>
                                <td class="p-3">10 Maret 2023</td>
                                <td class="p-3">
                                    Menunggu di approve oleh QHSE/TC
                                    </a>
                                </td>
                            </tr>
                            <tr style="color: gray;">
                                <td class="p-3">MSI</td>
                                <td class="p-3">GF-63</td>
                                <td class="p-3">0123456789</td>
                                <td class="p-3">Working Purpose</td>
                                <td class="p-3">Worker-Working Purpose</td>
                                <td class="p-3">9 Maret 2023</td>
                                <td class="p-3">
                                    <img src="{{ asset('img/vector.png') }}">
                                    Ditolak
                                </td>
                            </tr>
                            <tr style="color: gray;">
                                <td class="p-3">Lenovo</td>
                                <td class="p-3">Legion</td>
                                <td class="p-3">0123456789</td>
                                <td class="p-3">Working Purpose</td>
                                <td class="p-3">Worker-Working Purpose</td>
                                <td class="p-3">7 Maret 2023</td>
                                <td class="p-3">
                                    Menunggu di approve oleh QHSE/TC
                                    </a>
                                </td>
                            </tr>
                            <tr style="color: gray;">
                                <td class="p-3">Asus</td>
                                <td class="p-3">Zhepyrus G14</td>
                                <td class="p-3">0123456789</td>
                                <td class="p-3">Working Purpose</td>
                                <td class="p-3">Worker-Working Purpose</td>
                                <td class="p-3">7 Maret 2023</td>
                                <td class="p-3">
                                    Menunggu di approve oleh QHSE/TC
                                    </a>
                                </td>
                            </tr>
                        </tbody>

                    </table>


                </div>
            </div>
        </div>



        {{-- modal camera 1 --}}
        <div class="modal fade" data-bs-backdrop="static" id="modalCamera" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalCameraTitle">Capture photo</h1>
                        <button type="button" class="btn-close" id="btnCloseModalCamera" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="font-size: 14px">

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <div id="myCamera" class="mx-auto">

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer text-center mx-auto">
                        <button type="button" class="btn btn-outline-primary" id="takephoto">Take Picture</button>
                        <button type="button" class="btn btn-outline-primary" id="confirmphoto">Confirm</button>
                        <button type="button" class="btn btn-outline-primary" id="retakephoto">Retake Picture</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal camera --}}

        {{-- modal camera 2 --}}
        <div class="modal fade" data-bs-backdrop="static" id="modalCamera2" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalCameraTitle2">Capture photo</h1>
                        <button type="button" class="btn-close" id="btnCloseModalCamera2" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="font-size: 14px">

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <div id="myCamera2" class="mx-auto">

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer text-center mx-auto">
                        <button type="button" class="btn btn-outline-primary" id="takephoto2">Take Picture</button>
                        <button type="button" class="btn btn-outline-primary" id="confirmphoto2">Confirm</button>
                        <button type="button" class="btn btn-outline-primary" id="retakephoto2">Retake Picture</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal camera 2 --}}




        {{-- modal view --}}
        <div class="modal fade" data-bs-backdrop="static" id="modalView" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" style="height: 600px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalViewTitle">Informasi Laptop</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="font-size: 14px">

                        <div class="button-box-mms d-flex">
                            <div id="btn-mms"></div>
                            <button id="btnViewInformasiPerangkat" type="button" class="toggle-btn-mms">Informasi
                                Perangkat</button>
                            <button id="btnViewInformasiPengguna" type="button" class="toggle-btn-mms">Informasi
                                Pengguna</button>
                            <button id="btnViewRiwayat" type="button" class="toggle-btn-mms">Riwayat Status</button>
                            <button id="btnViewInformasiTanggapan" type="button"
                                class="toggle-btn-mms">Tanggapan</button>
                        </div>

                        <div id="section__view__infomasiperangkat" style="height: 500px">
                            <div class="row mx-2 my-2">
                                <p class="fw-bold mt-2">Informasi Perangkat</p>
                                <div class="col-sm-4">
                                    <p class="mb-2">Merek Laptop</p>
                                    <p class="mb-2">Type Laptop</p>
                                    <p class="mb-2">Barcode Label</p>
                                    <p class="mb-2">Alasan Permintaan</p>
                                    <p class="mb-2">Alasan Lainnya</p>
                                    <p class="mb-2">Durasi Pemakaian</p>
                                    <p class="mb-2">Tanggal Pengajuan</p>
                                    <p class="mb-2">Status Pengajuan</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-2" id="txViewMerekLaptop"></p>
                                    <p class="mb-2" id="txViewTipeLaptop"></p>
                                    <div class="d-flex">
                                        <p class="mb-2" id="txViewDeviceNumber"></p><button id="btnEditBarcodeLabel"
                                            class="ms-2 btn btn-outline-secondary btn-sm"><i
                                                class="bx bx-edit"></i></button>
                                    </div>
                                    {{-- <p class="mb-2" id="txViewDeviceNumber"></p> --}}
                                    <p class="mb-2" id="txViewAlasanPermintaan"></p>
                                    <p class="mb-2" id="txViewAlasanDesk"></p>
                                    <p class="mb-2" id="txViewDurasiPemakaian"></p>
                                    <p class="mb-2" id="txViewWaktuPengajuan"></p>
                                    <p class="mb-2" id="txViewStatusPengajuan" style="color: blue"></p>
                                </div>
                            </div>

                            <div class="row mx-2 my-2">
                                <p class="fw-bold mt-2">Foto Perangkat</p>
                                <div class="col-sm-4">
                                    <p class="mb-2">Foto dari depan</p>
                                </div>
                                <div class="col-sm-8">
                                    <img id="containerImgDpn"
                                        class="img-thumbnail border-0 rounded-3 mb-2 fw-bold imgView" width="80"
                                        src="{{ asset('img/foto-depan.png') }}">
                                </div>
                            </div>

                            <div class="row mx-2 my-2">
                                <div class="col-sm-4">
                                    <p class="mb-2">Foto dari belakang</p>
                                </div>
                                <div class="col-sm-8">
                                    <img id="containerImgBlk"
                                        class="img-thumbnail border-0 rounded-3 mb-2 fw-bold imgView" width="80"
                                        src="{{ asset('img/foto-blkng.png') }}">
                                </div>
                            </div>
                        </div>

                        <div id="section__view__infomasipengguna" style="height: 500px">
                            <div class="row mx-2 my-2">
                                <p class="fw-bold mt-2">Informasi Pengguna</p>
                                <div class="col-sm-4">
                                    <p class="mb-2">Nama</p>
                                    <p class="mb-2">Badge</p>
                                    <p class="mb-2">Departemen</p>
                                    <p class="mb-2">Posisi</p>
                                    <p class="mb-2">Mulai Masuk</p>
                                </div>
                                <div class="col-sm-8">
                                    <p id="txViewName" class="mb-2"></p>
                                    <p id="txViewBadge" class="mb-2"></p>
                                    <p id="txViewDept" class="mb-2"></p>
                                    <p id="txViewPosition" class="mb-2"></p>
                                    <p id="txViewJoinDate" class="mb-2"></p>
                                </div>
                            </div>
                        </div>

                        <div id="section__view__riwayatstatus" style="height: 500px">
                            <div class="row mx-2 my-2">
                                {{-- <p class="fw-bold mt-2">Riwayat Status</p>
                                <div class="col-sm-2">
                                    <p class="fw-bold mb-0">Hari ini</p>
                                    <span class="text-muted">10.00</span>
                                </div>
                                <div class="col-sm-10">
                                    <ol id="containerTimeline" class="ol-timeline">
                                        <li class="li-timeline"><p class="fw-bold mb-0">Mendaftar MMS</p>
                                            <span class="text-muted" style="font-size: 11px">Kamu baru selesai melakukan daftar MMS untuk jenis permohonan karyawan baru</span>
                                        </li>
                                        <li class="li-timeline"><p class="fw-bold mb-0">Sedang ditinjau oleh HRD Staff</p>
                                            <span class="text-muted" style="font-size: 11px">Saat ini sedang dalam proses peninjauan oleh HRD Staff</span>
                                        </li>
                                        <li class="li-timeline"><p class="fw-bold mb-0">Menunggu diapprove oleh Manager HRD</p>
                                            <span class="text-muted" style="font-size: 11px">Saat ini sedang menunggu diapprove oleh HRD Manager</span>
                                        </li>
                                        <li class="li-timeline"><p class="fw-bold mb-0">Telah diapprove oleh Manager HRD</p>
                                            <span class="text-muted" style="font-size: 11px">Permohonan kamu telah disetujui oleh Manager HRD</span>
                                        </li>
                                        <li class="li-timeline"><p class="fw-bold mb-0">Sedang ditinjau oleh Staff QSHE</p>
                                            <span class="text-muted" style="font-size: 11px">Saat ini sedang dalam proses peninjauan oleh QHSE Staff</span>
                                        </li>
                                        <li class="li-timeline"><p class="fw-bold mb-0">Menunggu diapprove oleh Manager QSHE</p>
                                            <span class="text-muted" style="font-size: 11px">Saat ini sedang menunggu diapprove oleh QHSE Staff</span>
                                        </li>
                                        <li class="li-timeline"><p class="fw-bold mb-0">Telah diapprove oleh Manager QSHE</p>
                                            <span class="text-muted" style="font-size: 11px">Permohonan kamu sudah diapprove oleh Manager QSHE</span>
                                        </li>
                                        <li style="color: gray; background: gray;" class="li-timeline"><p class="fw-bold mb-0">Selesai</p>
                                            <span class="text-muted" style="font-size: 11px">Status pengajuan selesai, sekarang perangkat kami sudah bisa melakukan Scan UUID</span>
                                        </li>
                                    </ol>
                                </div> --}}
                            </div>


                            {{-- new style container baru --}}

                            <div class="row mx-2 my-2">
                                <p class="h5 fw-bold mt-2 mb-4">Riwayat Status</p>

                                <div id="containerRiwayatClock" style="padding: 10px;" class="col-sm-2">
                                </div>

                                <div id="containerRiwayatStatus" class="col-sm-10">
                                </div>

                            </div>

                            {{-- end new style container baru --}}


                        </div>

                        <div id="section__view__informasitanggapan" style="height: 500px">
                            <div class="row mx-2 my-2">
                                <div class="col-sm-12">
                                    <p class="text-muted">Komentar</p>
                                    {{-- <textarea class="form-control" id="txTanggapan" name="txTanggapan" rows="3"></textarea> --}}
                                    <textarea id="txDeskripsi" name="txDeskripsi"></textarea>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-between">
                                    <p class="fw-bold mt-2">History Tanggapan</p>
                                    <button id="btnSimpanTanggapan" type="button"
                                        class="btn btn-primary btn-sm mt-2">Tanggapi</button>
                                </div>
                                <div class="col-sm-12 my-auto mt-3">

                                    {{-- <div class="text-center">Belum ada Tanggapan Sama Sekali</div> --}}

                                    {{-- <div class="row-mb-3 d-flex justify-content-center">
                                        
                                        <div id="containerTanggapan" class="col-md-11">

                                        </div>

                                    </div> --}}

                                    <div class="row mb-3" id="newContainerTanggapan">



                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="valLMSId" name="valLMSId">
                        <button id="btnRecall" type="button" class="btn btn-primary">Revoke</button>
                        <button id="btnTolakPengajuan" type="button" class="btn btn-link"
                            style="text-decoration: none">Tolak Pengajuan</button>
                        <button type="button" id="btnTerimaPengajuan" class="btn btn-primary">Terima Pengajuan</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal view --}}



        {{-- modal view Gambar --}}
        <div class="modal fade" data-bs-backdrop="static" id="modalViewGambar" tabindex="-1">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">View Photo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row mb-3">
                            <div id="containerViewGambar" class="col-sm-12 text-center">
                                <img id="imageView" class="img-fluid" src="" style="max-width: 400px">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- end modal view Export --}}


        {{-- modal update barcode label --}}
        <div class="modal fade" data-bs-backdrop="static" id="modalUpdateBarcodeLabel" tabindex="-1">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Update Barcode Label</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="txUpdateBarcodeLabel">Barcode Label</label>
                                <input type="text" class="form-control" name="txUpdateBarcodeLabel"
                                    id="txUpdateBarcodeLabel">
                                <span id="errUpdateBarcodeLabel" class="text-danger"></span>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button id="btnUpdateBarcodeLabel" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal update barcode label --}}

    @endsection

    @section('script')




        <script>
            let button = document.getElementById('button');
            const loadSpin = `<div class="d-flex justify-content-center align-items-center mt-5">
              <div class="spinner-border d-flex justify-content-center align-items-center text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
            </div> `;
            const pageBody = $('body');





            // button filter
            $('#btnFilter').click(function(e) {
                e.preventDefault()
                $('#selectDurasiPemakaianFilter').val('');
                $('#selectAlasanPermintaanFilter').val('');
                $('#selectPengajuanFilter').val('');
                $('#rdSetahun').prop('checked', true);

                $('#modalFilterData').modal('show')
            })

            // get status permohonan list filter
            const getStatusPermohonanFilter = () => {
                let html = '';
                $.ajax({
                    url: '{{ route('statuspermohonanlistlaptop') }}',
                    method: 'GET',
                }).done(res => {
                    // console.log(res);

                    if (res.status === 200) {

                        html += `<option value="">ALL</option>`;

                        $.each(res.data, (i, v) => {
                            html += `<option value="${v.id}">${v.stat_title}</option>`;
                        });

                        if ($('#selectPengajuanFilter').children().length > 0) {
                            $('#selectPengajuanFilter').children().remove()
                        }
                        $('#selectPengajuanFilter').append(html);

                    }
                })
            }

            getStatusPermohonanFilter();






            $('#containerUploadFoto').hide();

            $('#checkUploadFoto').click(() => {
                $('#containerUploadFoto').toggle();
                $('#containerTakeFoto').toggle();
            })

            $('#fotoDepanSuccess').hide();
            $('#fotoBelakangSuccess').hide();

            function leftClick() {
                button.style.left = "0"
            }

            function rightClick() {
                button.style.left = "185px"
            }

            let dateMulai = flatpickr(".dateMulai", {
                dateFormat: "d-m-Y",
                defaultDate: "today",
            });

            let dateAkhir = flatpickr(".dateAkhir", {
                dateFormat: "d-m-Y",
                defaultDate: "today",
            });

            $('#section__two').hide()
            $('#section__three').hide()
            $('#alasanDeskripsi').hide()
            $('#containerDateDurasi').hide()

            $('#section__view__infomasipengguna').hide();
            $('#section__view__riwayatstatus').hide()
            $('#section__view__informasitanggapan').hide();

            // const btnModal = $('#btnModalRepair');
            // const modalForm = $('#modalRepairData');
            const btndaftar = $('#btnDaftar');
            const modaldaftar = $('#modalDaftar');
            const btnSubmitDaftar = $('#btnSubmitDaftar');

            btndaftar.click(e => {
                e.preventDefault();

                const roles = '{{ session()->get('loggedInUser')['session_roles'] }}'

                if (parseInt(roles) === 64 || parseInt(roles) === 63) {
                    modaldaftar.modal('show');
                } else {
                    showMessage('error', 'Kamu tidak punya akses')
                }

            });

            // get data lms list
            const getAllLmsList = (
                fStatus = ""
            ) => {

                const filter = '{{ $filterData }}'

                if (filter) {
                    fStatus = "1"
                }

                const txSearch = $('#txSearch').val()
                const alasan = $('#selectAlasanPermintaanFilter').val() ? $('#selectAlasanPermintaanFilter').val() : 0;
                const durasi = $('#selectDurasiPemakaianFilter').val() ? $('#selectDurasiPemakaianFilter').val() : 0;
                const pengajuan = $('#selectPengajuanFilter').val() ? $('#selectPengajuanFilter').val() : 0;
                const waktuPengajuan = $('input[name="rdWaktuPengajuan"]:checked').val() === undefined ? 0 : $(
                    'input[name="rdWaktuPengajuan"]:checked').val();


                $.ajax({
                    url: '{{ route('lmslist') }}',
                    method: 'GET',
                    data: {
                        txSearch,
                        alasan,
                        durasi,
                        pengajuan,
                        waktuPengajuan,
                        fStatus

                    },
                    beforeSend: () => {
                        $('#containerLMS').html(loadSpin);
                    },
                }).done(res => {
                    $('#containerLMS').html(res);
                    $('#tableLMS').DataTable({
                        searching: false,
                        lengthChange: false,
                        "bSort": false,
                    });
                });
            }
            // handle button filter
            $('#btnFilterData').click(function(e) {
                e.preventDefault()
                // const statusPermohonan = document.querySelector('input[name="rdStatusPermohonan"]:checked').value;
                getAllLmsList();
                $('#modalFilterData').modal('hide')
            })
            getAllLmsList();

            $('#txSearch').keyup(() => {
                getAllLmsList();
            })
            // button reset 
            $('#btnReset').click(function(e) {
                e.preventDefault();

                const url = window.location.href
                console.log(url.includes("filter"));
                if (url.includes("filter")) {
                    window.location.href = '{{ route('lms') }}'
                    return;
                } else {
                    $('#selectDurasiPemakaianFilter').val('');
                    $('#selectAlasanPermintaanFilter').val('');
                    $('#selectPengajuanFilter').val('');
                    $('input[name="rdWaktuPengajuan"]').prop('checked', false);

                    getAllLmsList();
                }

                // console.log(url.includes("filter"));



            })

            // validasi input
            function checkDeviceNumber(deviceNumber) {
                return $.ajax({
                    url: '{{ route('checkbarcodelabellms') }}',
                    method: 'GET',
                    data: {
                        deviceNumber
                    }
                }).then(function(res) {
                    if (res.status === 400) {
                        return true;
                    } else {
                        return false;
                    }
                });
            }

            function checkAssetNumber(assetNumber) {
                return $.ajax({
                    url: '{{ route('checkassetnumber') }}',
                    method: 'GET',
                    data: {
                        assetNumber
                    }
                }).then(function(res) {
                    if (res.status === 400) {
                        return true;
                    } else {
                        return false;
                    }
                });
            }

            // end validation


            // 
            const btnNext = async () => {

                const sectionOne = $('#section__one');
                const sectionTwo = $('#section__two');
                const sectionThree = $('#section__three');

                if (sectionOne.is(':visible')) {

                    // generate ke view
                    $('#daftarNama').text($('#txNama').val() ? $('#txNama').val() : '-');
                    $('#daftarDept').text($('#txDepartmen').val() ? $('#txDepartmen').val() : '-');
                    $('#daftarJoinDate').text($('#txMulaiMasuk').val() ? $('#txMulaiMasuk').val() : '-');
                    $('#daftarBadge').text($('#txBadge').val() ? $('#txBadge').val() : '-');
                    $('#daftarPosisi').text($('#txPosisi').val() ? $('#txPosisi').val() : '-');

                    if ($('#txNama').val() === "") {
                        $('#errNama').text('Nama tidak boleh kosong');
                        return
                    } else {
                        $('#errNama').text('');
                    }


                    sectionOne.hide()
                    sectionTwo.show()
                    $('#currentNumber').text('2');
                    $('#currentText').text('Informasi Laptop');
                    $('#btnSubmitMMS').text('Daftar LMS')


                } else if (sectionTwo.is(':visible')) {

                    const txTipeLaptop = $('#txTipeLaptop').val();
                    const txNoSerial = $('#txNoSerial').val();
                    const txAssetNumber = $('#txAssetNumber').val();

                    if (txTipeLaptop === "") {
                        $('#errTipeLaptop').text('Tipe Laptop tidak boleh kosong')
                        return;
                    } else {
                        $('#errTipeLaptop').text('')
                    }

                    if (!txNoSerial) {
                        $('#errNoSerial').text('Nomor Serial tidak boleh kosong')
                        return
                    } else {
                        $('#errNoSerial').text('')
                    }

                    // validasi
                    const checkDevNum = await checkDeviceNumber(txNoSerial).then(function(response) {
                        if (response === true) {
                            $('#errNoSerial').text('Nomor serial sudah terdaftar atau duplikat')
                            return true;
                        } else {
                            $('#errNoSerial').text('')
                        }
                    })

                    if (checkDevNum === true) return;

                    if (!txAssetNumber) {
                        $('#errAssetNumber').text('Nomor asset sudah terdaftar atau duplikat')
                        return
                    } else {
                        $('#errAssetNumber').text('')
                    }

                    const checkAssetNum = await checkAssetNumber(txAssetNumber).then(function(response) {
                        if (response === true) {
                            $('#errAssetNumber').text('Nomor asset sudah terdaftar atau duplikat')
                            return true;
                        } else {
                            $('#errAssetNumber').text('')
                        }
                    })

                    if (checkAssetNum === true) return;

                    if ($('#selectAlasanPermintaan').val() === '62') {

                        if (!$('#txAlasanDeskripsi').val()) {
                            $('#errAlasanDeskripsi').text('Alasan tidak boleh kosong')
                            return
                        } else {
                            $('#errAlasanDeskripsi').text('')
                        }

                    }

                    // image validasi
                    // let imgDpn = $('#containerImgDpn').attr('src');
                    // let imgBlk = $('#containerImgBlk').attr('src');
                    // if(!imgDpn){
                    //     console.log('tidak ada gambar depan', imgDpn);
                    // }else{
                    //     console.log('gambar sudah ada', imgDpn);
                    // }
                    // if(!imgBlk){
                    //     console.log('tidak ada gambar belakang', imgBlk);
                    // }else{
                    //     console.log('gambar sudah ada', imgBlk);
                    // }

                    // return;

                    // check jika status gambar kosong untuk webcam
                    if ($('#checkUploadFoto').prop('checked') === false) {
                        console.log('section webcam');

                        if (!$('#gambarDpnCamera').val()) {
                            $('#errFotoDpn').text('Foto depan tidak boleh kosong')
                            return;
                        } else {
                            $('#errFotoDpn').text('')
                        }

                        if (!$('#gambarBlkngCamera').val()) {
                            $('#errFotoBlk').text('Foto belakang tidak boleh kosong')
                            return;
                        } else {
                            $('#errFotoBlk').text('')
                        }

                    } else {
                        console.log('section upload');
                        if (!$('#gambarDpn').val()) {
                            $('#errFotoDpn').text('Foto depan tidak boleh kosong')
                            return;
                        } else {
                            $('#errFotoDpn').text('')
                        }
                        if (!$('#gambarBlkng').val()) {
                            $('#errFotoBlk').text('Foto belakang tidak boleh kosong')
                            return;
                        } else {
                            $('#errFotoBlk').text('')
                        }
                    }

                    // return;


                    // generate ke konfirmasi
                    var selectedMerkLaptop = $('#selectMerekLaptop option:selected').text();
                    var selectedAlasan = $('#selectAlasanPermintaan option:selected').text();
                    var selectDurasiPemakaian = $('#selectDurasiPemakaian option:selected').text();

                    $('#daftarMerkLaptop').text(selectedMerkLaptop ? selectedMerkLaptop : '-');
                    $('#daftarTipeLaptop').text($('#txTipeLaptop').val() ? $('#txTipeLaptop').val() : '-');
                    $('#dafterDeviceNumber').text($('#txNoSerial').val() ? $('#txNoSerial').val() : '-');
                    $('#daftarAlasan').text(selectedAlasan ? selectedAlasan : '-');
                    $('#daftarAsset').text($('#txAssetNumber').val() ? $('#txAssetNumber').val() : '-');
                    $('#daftarAlasanLainnya').text($('#txAlasanDeskripsi').val() ? $('#txAlasanDeskripsi').val() : '-');
                    $('#daftarMulai').text($('#txMulaiMemakai').val());
                    $('#daftarTanggal').text($('#txSelesaiMemakai').val());
                    $('#txSelesaiMemakai').text($('#txAlasanDeskripsi').val());
                    $('#daftarDurasi').text(selectDurasiPemakaian ? selectDurasiPemakaian : '-');

                    if ($('#selectDurasiPemakaian').val() === '58') {
                        $('#daftarMulai').text('-');
                        $('#daftarTanggal').text('-');
                    }


                    sectionTwo.hide()
                    sectionThree.show()
                    $('#currentNumber').text('3');
                    $('#currentText').text('');
                    $('#btnSubmitMMS').text('Konfirmasi Pendaftaran')
                    $('#btnSubmitMMS').removeClass('btn-secondary')
                    $('#btnSubmitMMS').addClass('btn-primary')
                    $('#modalDaftarTitle').text('Konfirmasi Pendaftaran')
                } else if (sectionThree.is(':visible')) {

                    $('#btnSubmitMMS').prop('type', 'submit')

                }

            }


            function btnBack() {

                const sectionOne = $('#section__one');
                const sectionTwo = $('#section__two');
                const sectionThree = $('#section__three');

                if (sectionOne.is(':visible')) {
                    $('#formDaftar')[0].reset();
                    $('#btnSubmitMMS').prop('type', 'button')
                    modaldaftar.modal('hide');
                } else if (sectionTwo.is(':visible')) {
                    $('#currentNumber').text('1');
                    $('#currentText').text('Informasi Karyawan');
                    $('#btnSubmitMMS').text('Selanjutnya')
                    $('#btnSubmitMMS').prop('type', 'button')
                    sectionTwo.hide()
                    sectionOne.show()
                } else {
                    $('#btnSubmitMMS').prop('type', 'button')
                    $('#currentNumber').text('2');
                    $('#currentText').text('Informasi Laptop');
                    $('#btnSubmitMMS').text('Daftar MMS')
                    $('#modalDaftarTitle').text('Daftar Laptop Management System')
                    sectionThree.hide();
                    sectionTwo.show()
                }

            }


            // handle find badge id
            $('#txBadge').keypress(e => {

                const value = e.target.value;

                if (e.which === 13) {
                    getKaryawanById(value);
                }
            })

            const getKaryawanById = (badge) => {
                $.ajax({
                    url: '{{ route('karyawanbyid') }}',
                    method: 'GET',
                    data: {
                        badgeId: badge
                    },
                }).done(res => {
                    console.log(res);
                    if (res.status !== 200) {
                        $('#errBadge').text(res.message)
                        return
                    } else {
                        $('#errBadge').text('')
                    }

                    $('#txNama').val(res.data.fullname)
                    $('#txDepartmen').val(`${res.data.dept_code}-${res.data.dept_name}`)
                    $('#txPosisi').val(res.data.position_name)
                    $('#txMulaiMasuk').val(res.data.join_date)
                    $('#btnSubmitMMS').removeClass('btn-secondary')
                    $('#btnSubmitMMS').addClass('btn-primary')
                    $('#btnSubmitMMS').prop('disabled', false)


                });
            }


            const getMerekLaptopList = () => {
                let html = '';
                $.ajax({
                    url: '{{ route('mereklaptoplist') }}',
                    method: 'GET',
                }).done(res => {
                    console.log(res);

                    if (res.status === 200) {

                        $.each(res.data, (i, v) => {
                            html += `<option value="${v.id_vlookup}">${v.name_vlookup}</option>`;
                        });

                        if ($('#selectMerekLaptop').children().length > 0) {
                            $('#selectMerekLaptop').children().remove()
                        }
                        $('#selectMerekLaptop').append(html);
                    }
                })
            }

            getMerekLaptopList();

            const getDurasiList = () => {
                let html = '';
                $.ajax({
                    url: '{{ route('durasipemakaianlist') }}',
                    method: 'GET',
                }).done(res => {
                    // console.log(res);

                    if (res.status === 200) {

                        html += `<option value="">ALL</option>`;
                        $.each(res.data, (i, v) => {
                            html += `<option value="${v.id_vlookup}">${v.name_vlookup}</option>`;
                        });

                        if ($('#selectDurasiPemakaian').children().length > 0) {
                            $('#selectDurasiPemakaian').children().remove()
                        }
                        $('#selectDurasiPemakaian').append(html);

                        $('#selectDurasiPemakaian').val('58');

                        if ($('#selectDurasiPemakaianFilter').children().length > 0) {
                            $('#selectDurasiPemakaianFilter').children().remove()
                        }
                        $('#selectDurasiPemakaianFilter').append(html);

                    }
                })
            }

            getDurasiList();

            $('#selectAlasanPermintaan').change(function(e) {
                const value = e.target.value;

                if (value === '62') {
                    $('#alasanDeskripsi').show()
                } else {
                    $('#alasanDeskripsi').hide()
                }
            })

            // alasan_list
            const getAlasanList = () => {
                let html = '';
                $.ajax({
                    url: '{{ route('alasanlist') }}',
                    method: 'GET',
                }).done(res => {
                    // console.log(res);

                    if (res.status === 200) {

                        html += `<option value="">ALL</option>`;

                        $.each(res.data, (i, v) => {
                            html += `<option value="${v.id_vlookup}">${v.name_vlookup}</option>`;
                        });

                        if ($('#selectAlasanPermintaan').children().length > 0) {
                            $('#selectAlasanPermintaan').children().remove()
                        }
                        $('#selectAlasanPermintaan').append(html);

                        // alasan_list modal filter
                        if ($('#selectAlasanPermintaanFilter').children().length > 0) {
                            $('#selectAlasanPermintaanFilter').children().remove()
                        }
                        $('#selectAlasanPermintaanFilter').append(html);
                    }
                })
            }

            getAlasanList();

            $('#selectDurasiPemakaian').change(function(e) {
                const value = e.target.value;

                if (value !== '58') {
                    $('#containerDateDurasi').show()

                    if (value === '56') {
                        dateMulai = flatpickr(".dateMulai", {
                            dateFormat: "d-m-Y",
                            defaultDate: "today",
                            minDate: "today",
                            maxDate: new Date().fp_incr(7)
                        });
                        dateAkhir = flatpickr(".dateAkhir", {
                            dateFormat: "d-m-Y",
                            defaultDate: "today",
                            minDate: "today",
                            maxDate: new Date().fp_incr(7)
                        });
                    }

                    if (value === '57') {
                        dateMulai = flatpickr(".dateMulai", {
                            dateFormat: "d-m-Y",
                            defaultDate: "today",
                            minDate: "today",
                        });
                        dateAkhir = flatpickr(".dateAkhir", {
                            dateFormat: "d-m-Y",
                            defaultDate: "today",
                            minDate: "today",
                        });
                    }

                } else {
                    $('#containerDateDurasi').hide()
                }
            })

            // section view MMS
            pageBody.on('click', '.btnView', function(e) {
                e.preventDefault()

                const dataId = $(this).data('id');

                if (dataId) {

                    $.ajax({
                        url: '{{ route('getlmsbyid') }}',
                        method: 'get',
                        dataType: 'json',
                        data: {
                            dataId
                        },
                    }).done(res => {
                        console.log(res);

                        if (res.status !== 200) {
                            return;
                        }

                        // console.log(res.dataLMS[0].brand);

                        // let imgDpn = res.dataLMS[0].img_dpn ? res.dataLMS[0].img_dpn : 'profil.png';
                        // let imgBlk = res.dataLMS[0].img_blk ? res.dataLMS[0].img_blk : 'profil.png';


                        let imgDpn = res.dataLMS[0].img_dpn ? res.dataLMS[0].img_dpn : '';
                        let imgBlk = res.dataLMS[0].img_blk ? res.dataLMS[0].img_blk : '';


                        let arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agt", "Sep", "Okt",
                            "Nov", "Des"
                        ]
                        let date = new Date(res.dataLMS[0].tanggal_pengajuan);
                        let newDate = `${date.getDate()} ${arrMonth[date.getMonth()]} ${date.getFullYear()}`;
                        let date2 = new Date(res.dataKaryawan[0].join_date);
                        let newDate2 =
                            `${date2.getDate()} ${arrMonth[date2.getMonth()]} ${date2.getFullYear()}`;

                        $('#txViewMerekLaptop').text(res.dataLMS[0].brand)
                        $('#txViewTipeLaptop').text(res.dataLMS[0].tipe_laptop)
                        $('#txViewDeviceNumber').text(res.dataLMS[0].barcode_label)
                        $('#txViewAlasanPermintaan').text(res.dataLMS[0].alasan)
                        $('#txViewAlasanDesk').text(res.dataLMS[0].desc_alasan ? res.dataLMS[0].desc_alasan :
                            '-')
                        $('#txViewDurasiPemakaian').text(res.dataLMS[0].durasi ? res.dataLMS[0].durasi : '-')
                        $('#txViewWaktuPengajuan').text(newDate ? newDate : '-')
                        $('#txViewStatusPengajuan').text(res.dataLMS[0].status_pendaftaran_lms)
                        $('#containerImgDpn').attr('src', imgDpn);
                        $('#containerImgBlk').attr('src', imgBlk);
                        $('#valLMSId').val(res.dataLMS[0].id)

                        // view slide 2
                        $('#txViewName').text(res.dataKaryawan[0].fullname ? res.dataKaryawan[0].fullname : '-')
                        $('#txViewBadge').text(res.dataKaryawan[0].badge_id ? res.dataKaryawan[0].badge_id :
                            '-')
                        $('#txViewDept').text(res.dataKaryawan[0].dept_code ? res.dataKaryawan[0].dept_code :
                            '-')
                        $('#txViewPosition').text(res.dataKaryawan[0].position_code ? res.dataKaryawan[0]
                            .position_code : '-')
                        $('#txViewJoinDate').text(newDate2 ? newDate2 : '-')

                        let containerRiwayatStatus = '';
                        let containerRiwayatClock = '';
                        let containerRiwayatStatusLength = res.dataRiwayat.length;

                        htmlTimeline = '';
                        if (res.dataRiwayat.length > 0) {
                            containerRiwayatStatus = '<ul>';
                            $.each(res.dataRiwayat, (i, v) => {

                                let date = new Date(v.createdate);
                                let arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agt",
                                    "Sep", "Okt", "Nov", "Des"
                                ]
                                let newDate =
                                    `${date.getDate()} ${arrMonth[date.getMonth()]} ${date.getFullYear()}`;
                                let newTime =
                                    `${date.getHours().toString().padStart(2, '0')}:${date.getMinutes().toString().padStart(2, '0')}`;

                                htmlTimeline += `<li class="li-timeline"><p class="fw-bold mb-0">${v.stat_title}</p>
                                            <span class="text-muted" style="font-size: 11px">${v.stat_desc}</span>
                                        </li>`;
                                if ($('#containerTimeline').children().length > 0) {
                                    $('#containerTimeline').children().remove()
                                }
                                // $('#containerTimeline').html(htmlTimeline)

                                if (i !== containerRiwayatStatusLength - 1) {
                                    containerRiwayatStatus +=
                                        `          
                                        <li class="step step--done">
                                            <div class="step__title">${v.stat_title}</div>
                                            <p class="step__detail">${v.stat_desc}.</p>
                                            <div class="step__circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg>
                                            </div>
                                        </li>
                                        `;

                                }
                                containerRiwayatClock +=
                                    `
                                <div class="mb-4">
                                    <p class="fw-bold mb-0">${newDate}</p>
                                    <span class="text-muted">${newTime}</span>
                                </div> 
                                `;


                            })

                            if (res.dataRiwayat[containerRiwayatStatusLength - 1].stat_title === "Selesai" ||
                                res.dataRiwayat[containerRiwayatStatusLength - 1].stat_title === "Revoke" || res
                                .dataRiwayat[containerRiwayatStatusLength - 1].stat_title === "Expired") {
                                let date = new Date(res.dataRiwayat[containerRiwayatStatusLength - 1]
                                    .createdate);
                                let arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agt", "Sep",
                                    "Okt", "Nov", "Des"
                                ]
                                let newDate =
                                    `${date.getDate()} ${arrMonth[date.getMonth()]} ${date.getFullYear()}`;
                                let newTime =
                                    `${date.getHours().toString().padStart(2, '0')}:${date.getMinutes().toString().padStart(2, '0')}`;

                                containerRiwayatStatus +=
                                    `<li class="step step--done">
                                        <div class="step__title">${res.dataRiwayat[containerRiwayatStatusLength-1].stat_title}</div>
                                        <p class="step__detail">${res.dataRiwayat[containerRiwayatStatusLength-1].stat_desc}.</p>
                                        <div class="step__circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 12l5 5l10 -10"></path>
                                            </svg>
                                        </div>
                                    </li>`;

                                containerRiwayatClock +=
                                    `
                                <div class="mb-4">
                                    <p class="fw-bold mb-0">${newDate}</p>
                                    <span class="text-muted">${newTime}</span>
                                </div> 
                                `;
                            } else {
                                containerRiwayatStatus +=
                                    `<li class="step step--upcoming">
                                    <div class="step__title">${res.dataRiwayat[containerRiwayatStatusLength-1].stat_title}</div>
                                    <p class="step__detail">${res.dataRiwayat[containerRiwayatStatusLength-1].stat_desc}.</p>
                                    <div class="step__circle"></div>
                                </li>`;
                            }
                        }

                        if (res.dataRiwayat2.length > 0) {
                            $.each(res.dataRiwayat2, (i, v) => {

                                containerRiwayatStatus +=
                                    `<li class="step step--upcoming">
                                    <div class="step__title">${v.stat_title}</div>
                                    <p class="step__detail">${v.stat_desc}.</p>
                                    <div class="step__circle"></div>
                                </li>`;

                            });
                        }

                        containerRiwayatStatus += '</ul>';

                        $('#containerRiwayatStatus').children().remove()
                        $('#containerRiwayatStatus').html(containerRiwayatStatus);
                        $('#containerRiwayatClock').children().remove()
                        $('#containerRiwayatClock').html(containerRiwayatClock);

                        // if(res.dataRiwayat2.length > 0){
                        //     $.each(res.dataRiwayat2, (i, v) => {
                        //         htmlTimeline += `<li class="li-timeline"><p class="fw-bold mb-0">${v.stat_title}</p>
                //                     <span class="text-muted" style="font-size: 11px">${v.stat_desc}</span>
                //                 </li>`;
                        //         if($('#containerTimeline').children().length > 0){
                        //             $('#containerTimeline').children().remove()
                        //         }
                        //     })
                        // }

                        //$('#containerTimeline').html(htmlTimeline)


                        let htmlTanggapan = '';
                        if (res.dataTanggapan.length > 0) {
                            $.each(res.dataTanggapan, (i, v) => {

                                let date = new Date(v.waktu);
                                let arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agt",
                                    "Sep", "Okt", "Nov", "Des"
                                ]
                                let newDate =
                                    `${date.getDate()} ${arrMonth[date.getMonth()]} ${date.getFullYear()}`;
                                let newTime =
                                    `${date.getHours().toString().padStart(2, '0')}:${date.getMinutes().toString().padStart(2, '0')}`;

                                // htmlTanggapan += 
                                // `<div class="card mb-1">    
                        //             <div class="card-body d-flex justify-content-between">
                        //                 <div class="col-sm-2 border-end">
                        //                     <p class="mb-0 fw-bold text-muted">${newDate}</p>
                        //                     <p style="font-size: 12px" class="mb-0 fw-bold">Jam : ${newTime}</p>
                        //                 </div>
                        //                 <div class="col-sm-10 ms-2">
                        //                     <p class="mb-0 fw-bold">${v.fullname}</p>
                        //                     ${v.respon}
                        //                 </div>
                        //             </div>
                        //         </div>`;
                                let photoTanggapan = v.photo ? v.photo : '{{ asset('img/user.png') }}';
                                htmlTanggapan +=
                                    `<div class="card border border-1">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <img class="rounded-circle" src="${photoTanggapan}" width="50" height="50">
                                                <span class="ms-3 fw-bold">${v.fullname}</span>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <span style="font-size: 12px">${newDate} Jam: ${newTime}</span>                 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                ${v.respon}
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            })
                        }

                        $('#newContainerTanggapan').html(htmlTanggapan);

                        // hide button


                        // hide button terima/tolak
                        const statusId = res.dataLMS[0].status_pendaftaran_lms_id ? parseInt(res.dataLMS[0]
                            .status_pendaftaran_lms_id) : 0;
                        const roles = '{{ $userRole }}';
                        // if(statusId === 3 || statusId === 5 || statusId === 8 || statusId === 10 || statusId === 15 || statusId === 16) {
                        //     $('#btnTerimaPengajuan').hide()
                        //     $('#btnTolakPengajuan').hide()
                        // }else{
                        //     $('#btnTerimaPengajuan').show()
                        //     $('#btnTolakPengajuan').show()
                        // }

                        // if(parseInt(roles) !== 67 && statusId !== 12){
                        //     $('#btnTerimaPengajuan').hide()
                        //     $('#btnTolakPengajuan').hide()
                        // }

                        // if(statusId === 15 || statusId === 16 || statusId === 17){
                        //     $('#btnSimpanTanggapan').hide()
                        // }

                        // if(parseInt(roles) === 67 && statusId === 15 || statusId === 16 || statusId === 17){
                        //     $('#btnSimpanTanggapan').hide()
                        //     $('#btnTolakPengajuan').hide()
                        //     $('#btnTerimaPengajuan').hide()
                        // }

                        // if(parseInt(roles) === 67 && statusId === 12){
                        //     $('#btnSimpanTanggapan').show()
                        //     $('#btnTolakPengajuan').show()
                        //     $('#btnTerimaPengajuan').show()
                        // }

                        // if(parseInt(roles) === 66 && statusId === 9 || statusId === 7){
                        //     $('#btnSimpanTanggapan').show()
                        //     $('#btnTolakPengajuan').show()
                        //     $('#btnTerimaPengajuan').show()
                        // }

                        // if(parseInt(roles) === 63 && statusId === 2){
                        //     $('#btnTerimaPengajuan').show();
                        //     $('#btnTolakPengajuan').show();
                        // }else{
                        //     $('#btnTerimaPengajuan').hide();
                        //     $('#btnTolakPengajuan').hide();

                        // }

                        // if(parseInt(roles) === 64 && statusId === 4){
                        //     $('#btnTerimaPengajuan').show();
                        //     $('#btnTolakPengajuan').show();
                        // }else{
                        //     $('#btnTerimaPengajuan').hide();
                        //     $('#btnTolakPengajuan').hide();
                        // }

                        // if(parseInt(roles) === 65 && statusId === 7){
                        //     console.log(parseInt(roles) === 65 && statusId === 7);
                        //     $('#btnTerimaPengajuan').show();
                        //     $('#btnTolakPengajuan').show();
                        // }else{
                        //     // console.log('a');
                        //     $('#btnTerimaPengajuan').hide();
                        //     $('#btnTolakPengajuan').hide();
                        // }

                        // if(parseInt(roles) === 66 && statusId === 9){
                        //     $('#btnTerimaPengajuan').show();
                        //     $('#btnTolakPengajuan').show();
                        // }else if(parseInt(roles) === 66 && statusId > 9){
                        //     $('#btnTerimaPengajuan').hide();
                        //     $('#btnTolakPengajuan').hide();
                        // }

                        // if(parseInt(roles) === 67 && statusId === 12){
                        //     $('#btnTerimaPengajuan').show();
                        //     $('#btnTolakPengajuan').show();
                        // }else if(parseInt(roles) === 66 && statusId < 12){
                        //     $('#btnTerimaPengajuan').hide();
                        //     $('#btnTolakPengajuan').hide();
                        // }

                        // console.log(parseInt(roles) === 67 && statusId === 12);


                        // if(parseInt(roles) == '63' && statusId == '2'){
                        //     $('#btnTerimaPengajuan').show();
                        //     $('#btnTolakPengajuan').show();
                        // }else if(parseInt(roles) == '64' && statusId == '4' || statusId == '2'){
                        //     $('#btnTerimaPengajuan').show();
                        //     $('#btnTolakPengajuan').show();
                        //     // console.log(parseInt(roles) === 64 && statusId === 4 || statusId === 2);
                        // }else if(parseInt(roles) == '65' && statusId == '7'){
                        //     $('#btnTerimaPengajuan').show();
                        //     $('#btnTolakPengajuan').show();
                        // }else if(parseInt(roles) == '66' && statusId == '9' || statusId == '7'){
                        //     // console.log(parseInt(roles) == '64');
                        //     $('#btnTerimaPengajuan').show();
                        //     $('#btnTolakPengajuan').show();
                        // }else if(parseInt(roles) == '67' && statusId == '12'){
                        //     $('#btnTerimaPengajuan').show();
                        //     $('#btnTolakPengajuan').show();
                        // }else{
                        //     $('#btnTerimaPengajuan').hide();
                        //     $('#btnTolakPengajuan').hide();
                        // }

                        if (parseInt(roles) == '63') {

                            if (statusId == '2') {
                                $('#btnTerimaPengajuan').show();
                                $('#btnTolakPengajuan').show();
                                $('#btnSimpanTanggapan').show()
                            } else {
                                $('#btnTerimaPengajuan').hide();
                                $('#btnTolakPengajuan').hide();
                                $('#btnSimpanTanggapan').hide()
                            }

                        } else if (parseInt(roles) == '64') {

                            if (statusId == '2' || statusId == '4') {
                                $('#btnTerimaPengajuan').show();
                                $('#btnTolakPengajuan').show();
                                $('#btnSimpanTanggapan').show()
                            } else {
                                $('#btnTerimaPengajuan').hide();
                                $('#btnTolakPengajuan').hide();
                                $('#btnSimpanTanggapan').hide()
                            }

                        } else if (parseInt(roles) == '65') {

                            if (statusId == '7') {
                                $('#btnTerimaPengajuan').show();
                                $('#btnTolakPengajuan').show();
                                $('#btnSimpanTanggapan').show()
                            } else {
                                $('#btnTerimaPengajuan').hide();
                                $('#btnTolakPengajuan').hide();
                                $('#btnSimpanTanggapan').hide()
                            }

                        } else if (parseInt(roles) == '66') {

                            if (statusId == '7' || statusId == '9') {
                                $('#btnTerimaPengajuan').show();
                                $('#btnTolakPengajuan').show();
                                $('#btnSimpanTanggapan').show()
                            } else {
                                $('#btnTerimaPengajuan').hide();
                                $('#btnTolakPengajuan').hide();
                                $('#btnSimpanTanggapan').hide()
                            }

                        } else if (parseInt(roles) == '67') {

                            if (statusId == '12') {
                                $('#btnTerimaPengajuan').show();
                                $('#btnTolakPengajuan').show();
                                $('#btnSimpanTanggapan').show()
                            } else {
                                $('#btnTerimaPengajuan').hide();
                                $('#btnTolakPengajuan').hide();
                                $('#btnSimpanTanggapan').hide()
                            }

                        }





                        if (statusId === 15 && parseInt(roles) === 67) {
                            $('#btnRecall').show()
                        } else {
                            $('#btnRecall').hide()
                        }



                        // 

                        // if('{{ $userRole }}' === 67){

                        // }else{
                        //     $('')
                        // }
                        // console.log('{{ $userRole }}');

                        $('#modalView').modal('show')

                    })

                }



                // console.log(dataId);
                // return;

                // if(dataId){

                //     $.ajax({
                //         url: '{{ route('getmmsbyid') }}', 
                //         method: 'get', 
                //         dataType: 'json', 
                //         data: {dataId},
                //     }).done(res => {
                //         console.log(res);

                //         if(res.status === 200){

                //             $('#txViewMerekHP').text(res.data[0].merek_hp)
                //             $('#txViewTipeHP').text(res.data[0].tipe_hp)
                //             $('#txViewImei1').text(res.data[0].imei1)
                //             $('#txViewImei2').text(res.data[0].imei2)
                //             $('#txViewJenisPermohonan').text(res.data[0].jenis_permohonan)
                //             $('#txViewWaktuPengajuan').text(res.data[0].waktu_pengajuan ? res.data[0].waktu_pengajuan : '-')
                //             $('#txViewStatusPengajuan').text(res.data[0].status_pendaftaran_mms)
                //             $('#modalView').modal('show')
                //         }
                //     })

                // }

            })
            // end section view MMS

            const btnLMS = $('#btn-mms')
            $('#btnViewInformasiPerangkat').click(e => {
                e.preventDefault()
                btnLMS.animate({
                    left: '0'
                }, 5);
                $('#section__view__infomasiperangkat').show();
                $('#section__view__infomasipengguna').hide();
                $('#section__view__riwayatstatus').hide()
                $('#section__view__informasitanggapan').hide();
            })
            $('#btnViewInformasiPengguna').click(e => {
                e.preventDefault()
                btnLMS.animate({
                    left: '220px'
                }, 5);
                $('#section__view__infomasipengguna').show();
                $('#section__view__infomasiperangkat').hide();
                $('#section__view__riwayatstatus').hide()
                $('#section__view__informasitanggapan').hide();
            })
            $('#btnViewRiwayat').click(e => {
                e.preventDefault()
                btnLMS.animate({
                    left: '400px'
                }, 5);
                $('#section__view__infomasipengguna').hide();
                $('#section__view__infomasiperangkat').hide();
                $('#section__view__riwayatstatus').show()
                $('#section__view__informasitanggapan').hide();
            })
            $('#btnViewInformasiTanggapan').click(e => {
                e.preventDefault()
                btnLMS.animate({
                    left: '576px'
                }, 5);
                $('#section__view__infomasipengguna').hide();
                $('#section__view__infomasiperangkat').hide();
                $('#section__view__riwayatstatus').hide()
                $('#section__view__informasitanggapan').show();
            })


            $('#formDaftar').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: '{{ route('simpanlms') }}',
                    method: 'POST',
                    data: new FormData(this),
                    cache: false,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                }).done(res => {

                    // console.log(res);

                    if (res.status === 200) {

                        showMessage('success', res.message);
                        modaldaftar.modal('hide');
                        $(this)[0].reset();
                        $('#section__two').hide()
                        $('#section__three').hide()
                        $('#section__one').show()
                        $('#btnSubmitMMS').prop('type', 'button')
                        $('#selectAlasanPermintaan').val('61');
                        $('#selectDurasiPemakaian').val('58');
                        getAllLmsList();

                    }
                })

            })

            // summernote init
            $(document).ready(function() {
                $('#txDeskripsi').summernote({
                    placeholder: 'Tulis tanggapan',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                        ['font', ['bold', 'italic', 'underline']],
                        ['para', ['ul', 'ol']],
                    ]
                });
            });


            $('#btnSimpanTanggapan').click(function(e) {
                e.preventDefault();

                const dataTanggapan = $('#txDeskripsi').val();
                const lmsId = $('#valLMSId').val();

                if (dataTanggapan === "" || dataTanggapan === null) {
                    return;
                }

                $.ajax({
                    url: '{{ route('simpantanggapanlms') }}',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                        dataTanggapan,
                        lmsId
                    },
                }).done(res => {
                    // console.log(res);

                    if (res.status !== 200) {
                        showMessage('error', res.message)
                        return
                    }

                    showMessage('success', res.message)
                    $('#txDeskripsi').summernote('code', '');

                    getDataTanggapan(lmsId);

                })
            })

            const getDataTanggapan = (id) => {

                let idLMS = id;
                $.ajax({
                    url: '{{ route('tanggapanlistlms') }}',
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        idLMS
                    },
                }).done(res => {
                    // console.log(res);
                    let htmlTanggapan = '';

                    if (res.status === 200) {
                        if (res.dataTanggapan.length > 0) {
                            $.each(res.dataTanggapan, (i, v) => {

                                let date = new Date(v.waktu);
                                let arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agt",
                                    "Sep", "Okt", "Nov", "Des"
                                ]
                                let newDate =
                                    `${date.getDate()} ${arrMonth[date.getMonth()]} ${date.getFullYear()}`;
                                let newTime =
                                    `${date.getHours().toString().padStart(2, '0')}:${date.getMinutes().toString().padStart(2, '0')}`;

                                // htmlTanggapan += 
                                // `<div class="card mb-1">    
                        //             <div class="card-body d-flex justify-content-between">
                        //                 <div class="col-sm-2 border-end">
                        //                     <p class="mb-0 fw-bold text-muted">${newDate}</p>
                        //                     <p style="font-size: 12px" class="mb-0 fw-bold">Jam : ${newTime}</p>
                        //                 </div>
                        //                 <div class="col-sm-10 ms-2">
                        //                     <p class="mb-0 fw-bold">${v.fullname}</p>
                        //                     ${v.respon}
                        //                 </div>
                        //             </div>
                        //         </div>`;
                                let photoTanggapan = v.photo ? v.photo : '{{ asset('img/user.png') }}';
                                htmlTanggapan +=
                                    `<div class="card border border-1">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <img class="rounded-circle" src="${photoTanggapan}" width="50" height="50">
                                                <span class="ms-3 fw-bold">${v.fullname}</span>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <span style="font-size: 12px">${newDate} Jam: ${newTime}</span>                 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                ${v.respon}
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            })
                        }

                        if ($('#newContainerTanggapan').children().length > 0) {
                            $('#newContainerTanggapan').children().remove();
                        }

                        $('#newContainerTanggapan').html(htmlTanggapan);
                    }
                })
            }




            // handle modal view on close
            $('#modalView').on('hidden.bs.modal', function() {
                // do something…
                $('#btnViewInformasiPerangkat').click()
            })

            // handle modal daftar on close
            $('#modalDaftar').on('hidden.bs.modal', function() {
                // do something…
                $('#btnCameraDepan').removeClass('btn-success');
                $('#btnCameraDepan').addClass('btn-primary');
                $('#btnCameraDepan').text(' Ambil Foto Depan')
                $('#btnCameraDepan').prepend('<i class="bx bxs-camera"></i>');
                $('#btnCameraDepan').prop('disabled', false);
                $('#containerUploadFoto').hide();
                $('#containerTakeFoto').show();

                $('#fotoDepanSuccess').hide();
                $('#fotoBelakangSuccess').hide();

                $('#btnCameraBelakang').removeClass('btn-success');
                $('#btnCameraBelakang').addClass('btn-primary');
                $('#btnCameraBelakang').text(' Ambil Foto Belakang')
                $('#btnCameraBelakang').prepend('<i class="bx bxs-camera"></i>');
                $('#btnCameraBelakang').prop('disabled', false);
            })




            // handle tolak dan terima pengajuan

            $('#btnTolakPengajuan').click(function(e) {
                e.preventDefault();
                updateStatusPengajuan('tolak')
            });
            $('#btnTerimaPengajuan').click(e => {
                e.preventDefault();
                updateStatusPengajuan('terima')
            })


            const updateStatusPengajuan = (setStatus = '') => {

                const lmsId = $('#valLMSId').val();

                Swal.fire({
                    title: 'Apakah kamu yakin?',
                    // text: "You won't be able to revert this!",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6e7881',
                    confirmButtonText: 'Yakin!',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.isConfirmed) {


                        $.ajax({
                            url: '{{ route('updatepengajuanlms') }}',
                            method: 'post',
                            data: {
                                _token: '{{ csrf_token() }}',
                                setStatus,
                                lmsId
                            },
                            dataType: 'json',
                        }).done(res => {
                            // console.log(res);

                            if (res.status !== 200) {
                                showMessage('error', res.message)
                                return;
                            }

                            showMessage('success', res.message);
                            $('#modalView').modal('hide')
                            getAllLmsList();
                        })
                    }
                })
            }


            // handle gambar depan preview
            $('#gambarDpn').change(function() {
                let reader = new FileReader();

                reader.onload = (e) => {
                    $('#containerGambarDpn').attr('src', e.target.result)
                }
                reader.readAsDataURL(this.files[0]);
            })

            $('#gambarBlkng').change(function() {
                let reader = new FileReader();

                reader.onload = (e) => {
                    $('#containerGambarBlkng').attr('src', e.target.result)
                }
                reader.readAsDataURL(this.files[0]);
            })


            // camera init
            $(document).ready(function() {
                Webcam.set({
                    width: 320,
                    height: 240,
                    image_format: 'jpeg',
                    jpeq_quality: 90
                });

                // handle button camera 1
                $('#btnCameraDepan').on('click', function() {
                    $('#modalCamera').modal('show');
                    $('#confirmphoto').hide();
                    $('#retakephoto').hide()
                    Webcam.reset();
                    Webcam.on('error', function() {
                        $('#modalCamera').modal('hide');
                        swal({
                            title: 'Warning',
                            text: 'Please give permission to access your webcam',
                            icon: 'warning'

                        });
                    });
                    Webcam.attach('#myCamera');
                });

                // handle button camera 2
                $('#btnCameraBelakang').on('click', function() {
                    $('#modalCamera2').modal('show');
                    $('#confirmphoto2').hide();
                    $('#retakephoto2').hide()
                    Webcam.reset();
                    Webcam.on('error', function() {
                        $('#modalCamera2').modal('hide');
                        swal({
                            title: 'Warning',
                            text: 'Please give permission to access your webcam',
                            icon: 'warning'

                        });
                    });
                    Webcam.attach('#myCamera2');
                });

                $('#takephoto').on('click', previewSnapShot);
                $('#retakephoto').on('click', retakeSnapShot)
                $('#confirmphoto').on('click', saveSnapShot);

                $('#takephoto2').on('click', previewSnapShot2);
                $('#retakephoto2').on('click', retakeSnapShot2)
                $('#confirmphoto2').on('click', saveSnapShot2);

                $('#btnCloseModalCamera').click(e => {
                    e.preventDefault()
                    $('#modalCamera').modal('hide');
                    $('#takephoto').show();
                    $('#confirmphoto').hide();
                    $('#retakephoto').hide()
                    Webcam.reset();
                })

                $('#btnCloseModalCamera2').click(e => {
                    e.preventDefault()
                    $('#confirmphoto2').hide();
                    $('#retakephoto2').hide()
                    $('#takephoto2').show();
                    $('#modalCamera2').modal('hide');
                    Webcam.reset();
                })

            })


            function saveSnapShot() {
                Webcam.snap(function(data_uri) {
                    var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
                    $('#gambarDpnCamera').val(raw_image_data);
                    $('#containerGambarDpn').attr('src', data_uri)
                });

                $('#retakephoto').hide();
                $('#confirmphoto').hide();
                $('#takephoto').show();
                $('#modalCamera').modal('hide');
                Webcam.reset();
                $('#fotoDepanSuccess').show();
            }

            function retakeSnapShot() {
                $('#retakephoto').hide()
                $('#confirmphoto').hide();
                $('#takephoto').show();
                Webcam.unfreeze();
            }


            function previewSnapShot() {
                $('#takephoto').hide();
                $('#confirmphoto').show();
                $('#retakephoto').show()
                Webcam.freeze();
            }

            function saveSnapShot2() {
                Webcam.snap(function(data_uri) {
                    var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
                    $('#gambarBlkngCamera').val(raw_image_data);
                    $('#containerGambarBlkng').attr('src', data_uri)
                });

                $('#retakephoto2').hide();
                $('#confirmphoto2').hide();
                $('#takephoto2').show();
                $('#modalCamera2').modal('hide');
                Webcam.reset();
                $('#fotoBelakangSuccess').show();
            }

            function retakeSnapShot2() {
                $('#retakephoto2').hide()
                $('#confirmphoto2').hide();
                $('#takephoto2').show();
                Webcam.unfreeze();
            }


            function previewSnapShot2() {
                $('#takephoto2').hide();
                $('#confirmphoto2').show();
                $('#retakephoto2').show()
                Webcam.freeze();
            }

            $('.imgView').click(function(e) {
                e.preventDefault()

                if ($(this).attr('src')) {
                    $('#imageView').attr('src', $(this).attr('src'))
                    $('#modalViewGambar').modal('show')
                }

            })

            $('#modalViewGambar').on('hidden.bs.modal', function(event) {
                $('#imageView').removeAttr('src');
            });

            $('#btnRecall').click(e => {
                const id = $('#valLMSId').val()
                recallLms(id);
            })


            const recallLms = (id = 0) => {
                Swal.fire({
                    title: 'Apakah kamu yakin?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6e7881',
                    confirmButtonText: 'Yakin!',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('recalllms') }}',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                id
                            },
                        }).done(res => {

                            if (res.status !== 200) {

                                console.log(`Error Message => `, res.message);
                                return;
                            }

                            showMessage('success', res.message);
                            $('#modalView').modal('hide')
                            getAllLmsList();
                            // console.log(res);
                        })
                    }
                })
            }


            // ====================
            // update barcode label
            // ====================
            $('#btnEditBarcodeLabel').click(e => {
                e.preventDefault();
                $('#modalUpdateBarcodeLabel').modal('show');
            })

            $('#modalUpdateBarcodeLabel').on('hidden.bs.modal', function(event) {
                $('#txUpdateBarcodeLabel').val('');
                $('errUpdateBarcodeLabel').text('');
            });

            $('#btnUpdateBarcodeLabel').click(async e => {
                e.preventDefault();
                const valLMSId = $('#valLMSId').val();
                const txUpdateBarcodeLabel = $('#txUpdateBarcodeLabel').val();
                if (!txUpdateBarcodeLabel) {
                    $('#errUpdateBarcodeLabel').text('Barcode Label tidak boleh kosong')
                    return;
                } else {
                    $('#errUpdateBarcodeLabel').text('')
                }
                $.ajax({
                    url: '{{ route('updatebarcodelabellms') }}',
                    method: 'get',
                    dataType: 'json',
                    data: {
                        valLMSId,
                        txUpdateBarcodeLabel
                    },
                }).done(res => {
                    if (res.status === 400) {
                        showMessage('error', res.message)
                        return;
                    } else {
                        showMessage('success', res.message)
                        $('#txViewDeviceNumber').text(res.barcode);
                        $('#modalUpdateBarcodeLabel').modal('hide');
                        getAllLmsList();
                    }
                })
            })
        </script>

    @endsection