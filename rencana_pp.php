<?php include("template/topbar.php"); ?>
<?php include("template/sidebar.php"); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Pembangunan Komponen Penguatan Pengawasan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Sub Tim Penguatan Pengawasan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <!-- Accordion -->
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">

                    <!-- Accordion Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Pengendalian Gratifikasi
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- awal -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Table Upload Berkas</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="widget blank no-padding">
                                                <div class="panel panel-default work-progress-table">
                                                    <!-- Default panel contents -->

                                                    <!-- Table -->
                                                    <table id="mytable" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rencana Kerja</th>
                                                                <th>Produk Output</th>
                                                                <th>File</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><b>Pelaksanaan public campaign gratifikasi</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3">Sosialisasi dan Internalisasi Ketentuan Gratifikasi (KPK dan Kemenkeu) melalui kegiatan tatap muka</td>
                                                                <td rowspan="3">ND/Undangan, Laporan Kegiatan, Foto/video kegiatan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan</label>
                                                                        <input class="form-control" type="file" id="fileInputNd" onchange="uploadFile2('fileInputNd', 'statusCellNd')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellNd">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Kegiatan</label>
                                                                        <input class="form-control" type="file" id="fileInputFi" onchange="uploadFile2('fileInputFi', 'statusCellFi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellFi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Daftar Foto/video kegiatan</label>
                                                                        <input class="form-control" type="file" id="fileInputLe" onchange="uploadFile2('fileInputLe', 'statusCellLe')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellLe">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sosialisasi melalui media internalisasi</td>
                                                                <td>banner, poster, baliho, video, leaflet, dll</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File banner, poster, baliho, video, leaflet, dll</label>
                                                                        <input class="form-control" type="file" id="fileInputNer" onchange="uploadFile2('fileInputNer', 'statusCellNer')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellNer">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sosialisasi melalui publikasi di media cetak, situs resmi unit kerja, dan/atau jejaring sosial</td>
                                                                <td>print-screen publikasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File print-screen publikasi</label>
                                                                        <input class="form-control" type="file" id="fileInputSs" onchange="uploadFile2('fileInputSs', 'statusCellSs')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSs">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3"><b>Penerapan Pengendalian Gratifikasi</b></td>
                                                                <td rowspan="3">Laporan UPG, ttd Pakta Integritas, ttd Komitmen Pengendalian Gratifikasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan UPG</label>
                                                                        <input class="form-control" type="file" id="fileInputGra" onchange="uploadFile2('fileInputGra', 'statusCellGra')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellGra">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan ttd Pakta Integritas</label>
                                                                        <input class="form-control" type="file" id="fileInputTi" onchange="uploadFile2('fileInputTi', 'statusCellTi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan ttd Komitmen Pengendalian Gratifikasi</label>
                                                                        <input class="form-control" type="file" id="fileInputFik" onchange="uploadFile2('fileInputFik', 'statusCellFik')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellFik">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Perancangan Inovasi yang mendukung upaya pengendalian gratifikasi di Unit Kerja</b></td>
                                                                <td>Dokumen inovasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen inovasi</label>
                                                                        <input class="form-control" type="file" id="fileInputAsi" onchange="uploadFile2('fileInputAsi', 'statusCellAsi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellAsi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir -->
                                <!-- Button to send files in the first accordion -->
                                <!-- <button type="button" class="btn btn-primary" onclick="sendFiles('collapseOne')">Kirim Berkas</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Penerapan Sistem Pengendalian Internal Pemerintah (SPIP)
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Table Upload Berkas</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="widget blank no-padding">
                                                <div class="panel panel-default work-progress-table">
                                                    <!-- Default panel contents -->

                                                    <!-- Table -->
                                                    <table id="mytable" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rencana Kerja</th>
                                                                <th>Produk Output</th>
                                                                <th>File</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><b>Pembangunan Lingkungan Pengendalian</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Peningkatan Peran Pengawasan dan Pembinaan Atasan Langsung</td>
                                                                <td rowspan="2">Dokumentasi Dialog Kinerja Individu dan LHR Rapat Pembinaan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumentasi Dialog Kinerja Individu</label>
                                                                        <input class="form-control" type="file" id="fileInputKi" onchange="uploadFile2('fileInputKi', 'statusCellKi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File LHR Rapat Pembinaan</label>
                                                                        <input class="form-control" type="file" id="fileInputNerr" onchange="uploadFile2('fileInputNerr', 'statusCellNerr')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellNerr">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pelaksanaan Pemantauan Pengendalian Intern (PPPI), EIKR dan EPITE</td>
                                                                <td>Laporan Hasil Pelaksanaan Pemantauan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Pelaksanaan Pemantauan</label>
                                                                        <input class="form-control" type="file" id="fileInputJa" onchange="uploadFile2('fileInputJa', 'statusCellJa')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellJa">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pelaksanaan Pemantauan Kode Etik dan Disiplin Pegawai</td>
                                                                <td>Laporan Hasil Pelaksanaan Pemantauan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Pelaksanaan Pemantauan</label>
                                                                        <input class="form-control" type="file" id="fileInputUp" onchange="uploadFile2('fileInputUp', 'statusCellUp')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellUp">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Penilaian Risiko atas Pelaksanaan Kebijakan</b></td>
                                                                <td>Peta/profil risiko unit kerja</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Peta/profil risiko unit kerja</label>
                                                                        <input class="form-control" type="file" id="fileInputLoad" onchange="uploadFile2('fileInputLoad', 'statusCellLoad')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellLoad">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Kegiatan Pengendalian Berdasarkan Profil Risiko</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyusunan Mitigasi Risiko berdasarkan Profil Risikonya</td>
                                                                <td>Daftar Rencana Aksi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Daftar Rencana Aksi</label>
                                                                        <input class="form-control" type="file" id="fileInputRen" onchange="uploadFile2('fileInputRen', 'statusCellRen')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellRen">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pelaksanaan Mitigasi Risiko (Rencana Aksi) </td>
                                                                <td>Laporan Pelaksanaan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Pelaksanaan</label>
                                                                        <input class="form-control" type="file" id="fileInputCa" onchange="uploadFile2('fileInputCa', 'statusCellCa')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellCa">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pemantauan Pelaksanaan Mitigasi Risiko </td>
                                                                <td>Laporan Pemantauan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Pemantauan</label>
                                                                        <input class="form-control" type="file" id="fileInputRi" onchange="uploadFile2('fileInputRi', 'statusCellRi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellRi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Sosialisasi dan Komunikasi SPIP</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3">Sosialisasi melalui kegiatan tatap muka </td>
                                                                <td rowspan="3">ND/Undangan, Daftar Hadir, Foto</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan</label>
                                                                        <input class="form-control" type="file" id="fileInputSi" onchange="uploadFile2('fileInputSi', 'statusCellSi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Daftar Hadir</label>
                                                                        <input class="form-control" type="file" id="fileInputKo" onchange="uploadFile2('fileInputKo', 'statusCellKo')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKo">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Foto</label>
                                                                        <input class="form-control" type="file" id="fileInputSt" onchange="uploadFile2('fileInputSt', 'statusCellSt')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSt">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sosialisasi melalui media internalisasi</td>
                                                                <td>banner, leaflet, poster, dll</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File banner, leaflet, poster, dll</label>
                                                                        <input class="form-control" type="file" id="fileInputTus" onchange="uploadFile2('fileInputTus', 'statusCellTus')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTus">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button to send files in the two accordion -->
                                <!-- <button type="button" class="btn btn-primary" onclick="sendFiles('collapseTwo')">Kirim Berkas</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Pengaduan Masyarakat
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- awal -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Table Upload Berkas</h2>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="widget blank no-padding">
                                                <div class="panel panel-default work-progress-table">
                                                    <!-- Default panel contents -->

                                                    <!-- Table -->
                                                    <table id="mytable" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rencana Kerja</th>
                                                                <th>Produk Output</th>
                                                                <th>File</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Pengelolaan Pengaduan Masyarakat</td>
                                                                <td>Print screen aplikasi pengaduan (SIPP)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Print screen aplikasi pengaduan (SIPP)</label>
                                                                        <input class="form-control" type="file" id="fileInputPe" onchange="uploadFile2('fileInputPe', 'statusCellPe')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPe">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tindak Lanjut atas Pengaduan Masyarakat</td>
                                                                <td>Laporan Hasil Tindak lanjut pengaduan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Tindak lanjut pengaduan</label>
                                                                        <input class="form-control" type="file" id="fileInputNga" onchange="uploadFile2('fileInputNga', 'statusCellNga')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellNga">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Monitoring dan Evaluasi atas Tindak Lanjut Pengaduan Masyarakat</td>
                                                                <td rowspan="2">ND dan Laporan Monev</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND</label>
                                                                        <input class="form-control" type="file" id="fileInputDu" onchange="uploadFile2('fileInputDu', 'statusCellDu')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellDu">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                        <input class="form-control" type="file" id="fileInputAn" onchange="uploadFile2('fileInputAn', 'statusCellAn')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellAn">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Tindak Lanjut atas Hasil Evaluasi</td>
                                                                <td rowspan="2">Laporan Hasil Tindak Lanjut Monev</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan UPG</label>
                                                                        <input class="form-control" type="file" id="fileInputWar" onchange="uploadFile2('fileInputWar', 'statusCellWar')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellWar">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Tindak Lanjut Monev</label>
                                                                        <input class="form-control" type="file" id="fileInputNing" onchange="uploadFile2('fileInputNing', 'statusCellNing')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellNing">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir -->
                                <!-- Button to send files in the three accordion -->
                                <!-- <button type="button" class="btn btn-primary" onclick="sendFiles('collapseThree')">Kirim Berkas</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Whistleblowing System (WBS)
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- awal -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Table Upload Berkas</h2>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="widget blank no-padding">
                                                <div class="panel panel-default work-progress-table">
                                                    <!-- Default panel contents -->

                                                    <!-- Table -->
                                                    <table id="mytable" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rencana Kerja</th>
                                                                <th>Produk Output</th>
                                                                <th>File</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="3">Sosialisasi melalui kegiatan tatap muka</td>
                                                                <td rowspan="3">ND/Undangan, Daftar Hadir, Foto</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan</label>
                                                                        <input class="form-control" type="file" id="fileInputUn" onchange="uploadFile2('fileInputUn', 'statusCellUn')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellUn">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Daftar Hadir</label>
                                                                        <input class="form-control" type="file" id="fileInputNda" onchange="uploadFile2('fileInputNda', 'statusCellNda')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellNda">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Foto</label>
                                                                        <input class="form-control" type="file" id="fileInputNgan" onchange="uploadFile2('fileInputNgan', 'statusCellNgan')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellNgan">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sosialisasi melalui media internalisasi</td>
                                                                <td>banner, leaflet, poster, dll</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File banner, leaflet, poster, dll</label>
                                                                        <input class="form-control" type="file" id="fileInputBan" onchange="uploadFile2('fileInputBan', 'statusCellBan')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellBan">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="4">Penerapan WBS</td>
                                                                <td rowspan="4">Print screen aplikasi WBS, KMK, PMK, Perdirjen terkait WBS</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Print screen aplikasi WBS</label>
                                                                        <input class="form-control" type="file" id="fileInputNerrr" onchange="uploadFile2('fileInputNerrr', 'statusCellNerrr')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellNerrr">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Aplikasi KMK</label>
                                                                        <input class="form-control" type="file" id="fileInputKmk" onchange="uploadFile2('fileInputKmk', 'statusCellKmk')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKmk">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Aplikasi PMK</label>
                                                                        <input class="form-control" type="file" id="fileInputAp" onchange="uploadFile2('fileInputAp', 'statusCellAp')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellAp">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Aplikasi Perdirjen terkait WBS</label>
                                                                        <input class="form-control" type="file" id="fileInputPli" onchange="uploadFile2('fileInputPli', 'statusCellPli')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPli">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Evaluasi atas Penerapan WBS</td>
                                                                <td>Laporan Evaluasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Evaluasi</label>
                                                                        <input class="form-control" type="file" id="fileInputKasi" onchange="uploadFile2('fileInputKasi', 'statusCellKasi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKasi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tindak Lanjut atas Hasil Evaluasi atas Penerapan WBS</td>
                                                                <td>Laporan Tindak Lanjut</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Tindak Lanjut</label>
                                                                        <input class="form-control" type="file" id="fileInputHan" onchange="uploadFile2('fileInputHan', 'statusCellHan')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellHan">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir -->
                                <!-- Button to send files in the four accordion -->
                                <!-- <button type="button" class="btn btn-primary" onclick="sendFiles('collapseFour')">Kirim Berkas</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                Penanganan Benturan kepentingan
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- awal -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Table Upload Berkas</h2>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="widget blank no-padding">
                                                <div class="panel panel-default work-progress-table">
                                                    <!-- Default panel contents -->

                                                    <!-- Table -->
                                                    <table id="mytable" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rencana Kerja</th>
                                                                <th>Produk Output</th>
                                                                <th>File</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Pemetaan Benturan Kepentingan terkait Tugas dan Fungsi Utama</td>
                                                                <td>ND/Laporan Pemetaan benturan kepentingan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Laporan Pemetaan benturan kepentingan</label>
                                                                        <input class="form-control" type="file" id="fileInputDo" onchange="uploadFile2('fileInputDo', 'statusCellDo')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellDo">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perumusan Kebijakan Penanganan Benturan Kepentingan</td>
                                                                <td>ND Pimpinan unit kerja</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND Pimpinan unit kerja</label>
                                                                        <input class="form-control" type="file" id="fileInputKu" onchange="uploadFile2('fileInputKu', 'statusCellKu')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKu">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Sosialisasi Kebijakan Penanganan Benturan Kepentingan</td>
                                                                <td rowspan="2">ND/Undangan, Daftar Hadir</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan</label>
                                                                        <input class="form-control" type="file" id="fileInputMen" onchange="uploadFile2('fileInputMen', 'statusCellMen')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellMen">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Daftar Hadir</label>
                                                                        <input class="form-control" type="file" id="fileInputTa" onchange="uploadFile2('fileInputTa', 'statusCellTa')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTa">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Implementasi Penanganan Benturan Kepentingan</td>
                                                                <td rowspan="2">Penandatanganan Pakta Integritas, laporan implementasi penanganan benturan kepentingan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Penandatanganan Pakta Integritas</label>
                                                                        <input class="form-control" type="file" id="fileInputSii" onchange="uploadFile2('fileInputSii', 'statusCellSii')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSii">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File laporan implementasi penanganan benturan kepentingan</label>
                                                                        <input class="form-control" type="file" id="fileInputIm" onchange="uploadFile2('fileInputIm', 'statusCellIm')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellIm">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Evaluasi Penanganan Benturan Kepentingan </td>
                                                                <td>Laporan Hasil Evaluasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Evaluasi</label>
                                                                        <input class="form-control" type="file" id="fileInputPle" onchange="uploadFile2('fileInputPle', 'statusCellPle')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPle">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tindak Lanjut atas Evaluasi Penanganan Benturan Kepentingan</td>
                                                                <td>Laporan Tindak Lanjut</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Tindak Lanjut</label>
                                                                        <input class="form-control" type="file" id="fileInputYou" onchange="uploadFile2('fileInputYou', 'statusCellYou')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellYou">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir -->
                                <!-- Button to send files in the five accordion -->
                                <!-- <button type="button" class="btn btn-primary" onclick="sendFiles('collapseFive')">Kirim Berkas</button> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<script src="script_pp.js"></script>
<?php include("template/footer.php"); ?>