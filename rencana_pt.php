<?php include("template/topbar.php"); ?>
<?php include("template/sidebar.php"); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Pembangunan Komponen Penataan Tatalaksana</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Sub Tim Penataan Tatalaksana</li>
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
                                Standard Operating Procedure (SOP) Kegiatan Utama
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
                                                                <td>Evaluasi Kesesuaian SOP saat ini dengan Peta Proses Bisnis pada unit kerja</td>
                                                                <td>Laporan/Matriks Evaluasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan/Matriks Evaluasi</label>
                                                                        <input class="form-control" type="file" id="fileInputEvaluasi" onchange="uploadFile2('fileInputEvaluasi', 'statusCellEvaluasi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellEvaluasi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Penerapan SOP dalam Pelaksanaan Tugas </td>
                                                                <td rowspan="2">Rekap SOP, LHPPU</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Rekap SOP</label>
                                                                        <input class="form-control" type="file" id="fileInputsop" onchange="uploadFile2('fileInputsop', 'statusCellsop')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellsop">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File LHPPU</label>
                                                                        <input class="form-control" type="file" id="fileInputlhppu" onchange="uploadFile2('fileInputlhppu', 'statusCelllhppu')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCelllhppu">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Evaluasi seluruh SOP Kegiatan Utama dan Penyampaian Usulan Perbaikannya</td>
                                                                <td>Dokumen Usulan (surat/ND)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen Usulan (surat/ND)</label>
                                                                        <input class="form-control" type="file" id="fileInputnd" onchange="uploadFile2('fileInputnd', 'statusCellnd')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellnd">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perancangan Inovasi yang selaras dengan SOP yang berdampak pada penyelesaian tugas lebih efisien dan efektif</td>
                                                                <td>Dokumen Inovasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen Inovasi</label>
                                                                        <input class="form-control" type="file" id="fileInputInovasi" onchange="uploadFile2('fileInputInovasi', 'statusCellInovasi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellInovasi">
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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                E-Office
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                                                                <td>Pengumpulan data dan aturan terkait pengukuran kinerja, operasionalisasi manajemen SDM, dan pemberian pelayanan kepada publik</td>
                                                                <td>Aturan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Aturan</label>
                                                                        <input class="form-control" type="file" id="fileInputAturan" onchange="uploadFile2('fileInputAturan', 'statusCellAturan')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellAturan">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Penerapan teknologi informasi dalam pengukuran kinerja unit</td>
                                                                <td rowspan="2">Prin Screen e-perfomance dan SIKKA</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Prin Screen e-perfomance</label>
                                                                        <input class="form-control" type="file" id="fileInputPs" onchange="uploadFile2('fileInputPs', 'statusCellPs')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPs">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SIKKA</label>
                                                                        <input class="form-control" type="file" id="fileInputSikka" onchange="uploadFile2('fileInputSikka', 'statusCellSikka')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSikka">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penerapan teknologi informasi dalam operasionalisasi manajemen SDM</td>
                                                                <td>Print Screen SIKKA</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Print Screen SIKKA</label>
                                                                        <input class="form-control" type="file" id="fileInputPsSikka" onchange="uploadFile2('fileInputPsSikka', 'statusCellPsSikka')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPsSikka">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penerapan teknologi informasi dalam pemberian pelayanan kepada publik (Wajib Pajak)</td>
                                                                <td>(e-registration, efiling, e-spt, e-faktur)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File (e-registration, efiling, e-spt, e-faktur)</label>
                                                                        <input class="form-control" type="file" id="fileInputReg" onchange="uploadFile2('fileInputReg', 'statusCellReg')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellReg">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pemantauan dan Evaluasi Pemanfaatan Teknologi Informasi yang menunjang pengukuran kinerja, operasionalisasi manajemen SDM, dan pemberian pelayanan kepada publik</td>
                                                                <td rowspan="2">ND dan Laporan Monev</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND</label>
                                                                        <input class="form-control" type="file" id="fileInputNdi" onchange="uploadFile2('fileInputNdi', 'statusCellNdi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellNdi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                        <input class="form-control" type="file" id="fileInputMonevv" onchange="uploadFile2('fileInputMonevv', 'statusCellMonevv')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellMonevv">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perancangan Inovasi berupa pemanfaatan teknologi yang berdampak pada penyelesaian tugas lebih efisien dan efektif</td>
                                                                <td>Dokumen Inovasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen Inovasi</label>
                                                                        <input class="form-control" type="file" id="fileInputInov" onchange="uploadFile2('fileInputInov', 'statusCellInov')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellInov">
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
                                <!-- Button to send files in the two accordion -->
                                <!-- <button type="button" class="btn btn-primary" onclick="sendFiles('collapseTwo')">Kirim Berkas</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Keterbukaan Informasi Publik
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
                                                                <td rowspan="4">Pengumpulan data dan aturan terkait penerapan keterbukaan informasi publik di lingkungan Kementerian Keuangan</td>
                                                                <td rowspan="4">aturan, print screen WISE, pajak.go.id. Kring Pajak, SIPP, dll</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Aturan</label>
                                                                        <input class="form-control" type="file" id="fileInputAt" onchange="uploadFile2('fileInputAt', 'statusCellAt')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellAt">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File print screen WISE</label>
                                                                        <input class="form-control" type="file" id="fileInputWise" onchange="uploadFile2('fileInputWise', 'statusCellWise')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellWise">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File pajak.go.id. Kring Pajak</label>
                                                                        <input class="form-control" type="file" id="fileInputPjk" onchange="uploadFile2('fileInputPjk', 'statusCellPjk')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPjk">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SIPP</label>
                                                                        <input class="form-control" type="file" id="fileInputSiip" onchange="uploadFile2('fileInputSiip', 'statusCellSiip')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSiip">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pemantauan dan Evaluasi Pelaksanaan Kebijakan Keterbukaan Informasi Publik</td>
                                                                <td rowspan="2">ND dan Laporan Monev</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND</label>
                                                                        <input class="form-control" type="file" id="fileInputDn" onchange="uploadFile2('fileInputDn', 'statusCellDn')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellDn">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                        <input class="form-control" type="file" id="fileInputMonev" onchange="uploadFile2('fileInputMonev', 'statusCellMonev')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellMonev">
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
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
<script src="script_pt.js"></script>
<?php include("template/footer.php"); ?>