<?php include("template/topbar.php"); ?>
<?php include("template/sidebar.php"); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Pembangunan Komponen Penguatan Akuntabilitas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Sub Tim Penguatan Akuntabilitas</li>
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
                                Keterlibatan Pimpinan
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
                                                                <td rowspan="3">Penyusunan Perencanaan (Rencana Strategis, Rencana Kerja Tahunan)</td>
                                                                <td rowspan="3">Undangan, LHR, Daftar Hadir</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Undangan</label>
                                                                        <input class="form-control" type="file" id="fileInputDok" onchange="uploadFile2('fileInputDok', 'statusCellDok')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellDok">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File LHR</label>
                                                                        <input class="form-control" type="file" id="fileInputLhr" onchange="uploadFile2('fileInputLhr', 'statusCellLhr')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellLhr">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Daftar Hadir</label>
                                                                        <input class="form-control" type="file" id="fileInputDaf" onchange="uploadFile2('fileInputDaf', 'statusCellDaf')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellDaf">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Penyusunan Rencana Penetapan Kinerja (termasuk Penentuan Target Kinerja)</td>
                                                                <td rowspan="2">Foto-foto, Tanda Tangan Pimpinan pada Konkin</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Foto-foto</label>
                                                                        <input class="form-control" type="file" id="fileInputFile" onchange="uploadFile2('fileInputFile', 'statusCellFile')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellFile">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Tanda Tangan Pimpinan pada Konkin</label>
                                                                        <input class="form-control" type="file" id="fileInputTtd" onchange="uploadFile2('fileInputTtd', 'statusCellTtd')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTtd">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pemantauan Pencapaian Kinerja (Dialog Kinerja Organisasi)</td>
                                                                <td>Laporan Pelaksanaan DKO</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Pelaksanaan DKO</label>
                                                                        <input class="form-control" type="file" id="fileInputRhs" onchange="uploadFile2('fileInputRhs', 'statusCellRhs')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellRhs">
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
                                Pengelolaan Akuntabilitas Kinerja
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
                                                                <td rowspan="3"><b>Penyiapan Dokumen Perencanaan Kinerja (Rencana Strategis, Rencana Kerja Tahunan, Penetapan Kinerja)</b></td>
                                                                <td rowspan="3">Salinan SK Dirjen Pajak ttg Rencana Strategis, Rencana Kerja Tahunan, Kontrak Kinerja</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Salinan SK Dirjen Pajak ttg Rencana Strategis</label>
                                                                        <input class="form-control" type="file" id="fileInputLoad" onchange="uploadFile2('fileInputLoad', 'statusCellLoad')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellLoad">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Rencana Kerja Tahunan</label>
                                                                        <input class="form-control" type="file" id="fileInputRen" onchange="uploadFile2('fileInputRen', 'statusCellRen')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellRen">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Kontrak Kinerja</label>
                                                                        <input class="form-control" type="file" id="fileInputKon" onchange="uploadFile2('fileInputKon', 'statusCellKon')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKon">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3"><b>Pengelolaan dokumen perencanaan yang berorientasi hasil</b></td>
                                                                <td rowspan="3">Salinan SK Dirjen Pajak ttg Rencana Strategis, Rencana Kerja Tahunan, Kontrak Kinerja</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Salinan SK Dirjen Pajak ttg Rencana Strategis</label>
                                                                        <input class="form-control" type="file" id="fileInputKerja" onchange="uploadFile2('fileInputKerja', 'statusCellKerja')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKerja">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Rencana Kerja Tahunan</label>
                                                                        <input class="form-control" type="file" id="fileInputLer" onchange="uploadFile2('fileInputLer', 'statusCellLer')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellLer">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Kontrak Kinerja</label>
                                                                        <input class="form-control" type="file" id="fileInputTrak" onchange="uploadFile2('fileInputTrak', 'statusCellTrak')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTrak">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Pengelolaan IKU</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3">Pengelolaan IKU telah memenuhi prinsip SMART-C</td>
                                                                <td rowspan="3">softcopy Manual IKU, surat penetapan IKU dan trajectory (KPDJP), instruksi pembuatan IKU (KMK-467)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File softcopy Manual IKU</label>
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
                                                                        <label for="formFileMultiple" class="form-label">Upload File surat penetapan IKU dan trajectory (KPDJP)</label>
                                                                        <input class="form-control" type="file" id="fileInputTas" onchange="uploadFile2('fileInputTas', 'statusCellTas')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTas">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File instruksi pembuatan IKU (KMK-467)</label>
                                                                        <input class="form-control" type="file" id="fileInputUki" onchange="uploadFile2('fileInputUki', 'statusCellUki')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellUki">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyusunan dan Penyampaian Laporan Kinerja Tepat Waktu</td>
                                                                <td>Surat Penyampaian Laporan NKO</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Surat Penyampaian Laporan NKO</label>
                                                                        <input class="form-control" type="file" id="fileInputPen" onchange="uploadFile2('fileInputPen', 'statusCellPen')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPen">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Validasi Pelaporan Kinerja (Capaian IKU) sesuai dengan Kinerja yang Dihasilkan</td>
                                                                <td>Laporan Hasil Validasi Capaian IKU</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Validasi Capaian IKU</label>
                                                                        <input class="form-control" type="file" id="fileInputHasil" onchange="uploadFile2('fileInputHasil', 'statusCellHasil')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellHasil">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Reviu kompetensi SDM yang menangani akuntabilitas kinerja</td>
                                                                <td>Diklat dan IHT Pengelolaan Kinerja yang telah diikuti</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Diklat dan IHT Pengelolaan Kinerja yang telah diikuti</label>
                                                                        <input class="form-control" type="file" id="fileInputDik" onchange="uploadFile2('fileInputDik', 'statusCellDik')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellDik">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Peningkatan Kapasitas SDM yang menangani akuntabilitas kinerja (kegiatan IHT/Bimbingan Teknis)</td>
                                                                <td>ND/Undangan IHT/Bimtek Pengelolaan Kinerja</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan IHT/Bimtek Pengelolaan Kinerja</label>
                                                                        <input class="form-control" type="file" id="fileInputKin" onchange="uploadFile2('fileInputKin', 'statusCellKin')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKin">
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
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<script src="script_pa.js"></script>
<?php include("template/footer.php"); ?>