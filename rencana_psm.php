<?php include("template/topbar.php"); ?>
<?php include("template/sidebar.php"); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Pembangunan Komponen Penataan Sistem Manajemen SDM</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Sub Tim Penataan Sistem Manajemen SDM</li>
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
                                Pembangunan Komponen Penataan Sistem Manajemen SDM
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
                                                                <td rowspan="4">Penyusunan Kebutuhan Pegawai dengan Mengacu pada Peta Jabatan dan Analisis Beban Kerja (ABK)</td>
                                                                <td rowspan="4">Print screen ABK, Data Statistik dan Kebutuhan Pegawai per unit kerja, Urjab</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Print screen ABK</label>
                                                                        <input class="form-control" type="file" id="fileInputPt" onchange="uploadFile2('fileInputPt', 'statusCellPt')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPt">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Data Statistik</label>
                                                                        <input class="form-control" type="file" id="fileInputSt" onchange="uploadFile2('fileInputSt', 'statusCellSt')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSt">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Kebutuhan Pegawai per unit kerja</label>
                                                                        <input class="form-control" type="file" id="fileInputWai" onchange="uploadFile2('fileInputWai', 'statusCellWai')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellWai">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Urjab</label>
                                                                        <input class="form-control" type="file" id="fileInputUr" onchange="uploadFile2('fileInputUr', 'statusCellUr')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellUr">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pengumpulan aturan/kebijakan terkait rekrutmen pegawai, SK Penempatan Pegawai hasil rekrutrmen</td>
                                                                <td rowspan="2">aturan dan SK Penempatan Pegawai</td>
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
                                                                        <label for="formFileMultiple" class="form-label">Upload File SK Penempatan Pegawai</label>
                                                                        <input class="form-control" type="file" id="fileInputSk" onchange="uploadFile2('fileInputSk', 'statusCellSk')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSk">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penempatan Pegawai hasil rekrutmen sesuai dengan kebutuhan dan kualifikasinya (mutasi internal)</td>
                                                                <td>SK Mutasi Perbandingan dengan ABK</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SK Mutasi Perbandingan dengan ABK</label>
                                                                        <input class="form-control" type="file" id="fileInputMut" onchange="uploadFile2('fileInputMut', 'statusCellMut')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellMut">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pemantauan dan Evaluasi penempatan pegawai rekrutmen terhadap perbaikan kinerja unit kerja</td>
                                                                <td rowspan="2">ND dan Laporan Monev</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND</label>
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
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                        <input class="form-control" type="file" id="fileInputMon" onchange="uploadFile2('fileInputMon', 'statusCellMon')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellMon">
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
                                Pola Mutasi Internal
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
                                                                <td>Perumusan mekanisme penempatan pegawai pada unit kerja (mutasi internal)</td>
                                                                <td>ND/LHR</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/LHR</label>
                                                                        <input class="form-control" type="file" id="fileInputHr" onchange="uploadFile2('fileInputHr', 'statusCellHr')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellHr">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pelaksanaan Mutasi Pegawai (internal unit) sesuai dengan aturan/kebijakan pola mutasi yang telah ditetapkan</td>
                                                                <td>SK Mutasi Internal</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SK Mutasi Internal</label>
                                                                        <input class="form-control" type="file" id="fileInputAsi" onchange="uploadFile2('fileInputAsi', 'statusCellAsi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellAsi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyampaian Usulan Mutasi Pegawai (eksternal unit) dalam rangka penataan dan pengembangan karir pegawai</td>
                                                                <td>Surat Usulan Mutasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Surat Usulan Mutasi</label>
                                                                        <input class="form-control" type="file" id="fileInputUsu" onchange="uploadFile2('fileInputUsu', 'statusCellUsu')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellUsu">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pemantauan dan Evaluasi pola mutasi internal terhadap perbaikan kinerja</td>
                                                                <td rowspan="2">ND dan Laporan Monev</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND</label>
                                                                        <input class="form-control" type="file" id="fileInputLe" onchange="uploadFile2('fileInputLe', 'statusCellLe')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellLe">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                        <input class="form-control" type="file" id="fileInputEv" onchange="uploadFile2('fileInputEv', 'statusCellEv')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellEv">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Pengembangan Pegawai Berbasis Kompetensi
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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
                                                                <td>Pelaksanaan Training Need Analysis (TNA)</td>
                                                                <td>Laporan TNA Pegawai</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan TNA Pegawai</label>
                                                                        <input class="form-control" type="file" id="fileInputTna" onchange="uploadFile2('fileInputTna', 'statusCellTna')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTna">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyusunan Rencana Pengembangan Kompetensi Pegawai</td>
                                                                <td>Jadwal Kegiatan IHT</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Jadwal Kegiatan IHT</label>
                                                                        <input class="form-control" type="file" id="fileInputPeg" onchange="uploadFile2('fileInputPeg', 'statusCellPeg')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPeg">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pendataan Kesenjangan antara Kompetensi Pegawai dengan Standar Kompetensi Jabatan</td>
                                                                <td>Laporan Analisa Kesenjangan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Analisa Kesenjangan</label>
                                                                        <input class="form-control" type="file" id="fileInputKes" onchange="uploadFile2('fileInputKes', 'statusCellKes')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKes">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pelaksanaan Pendidikan dan Pelatihan, serta pengembangan kompetensi lainnya</td>
                                                                <td rowspan="2">Surat Usulan Diklat/short course, Undangan/ND IHT, FGD, seminar, dll</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Surat Usulan Diklat/short course</label>
                                                                        <input class="form-control" type="file" id="fileInputUsus" onchange="uploadFile2('fileInputUsus', 'statusCellUsus')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellUsus">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Undangan/ND IHT, FGD, seminar, dll</label>
                                                                        <input class="form-control" type="file" id="fileInputIht" onchange="uploadFile2('fileInputIht', 'statusCellIht')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellIht">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pemantauan dan Evaluasi terhadap Hasil Pengembangan Kompetensi terhadap Kinerja Pegawai</td>
                                                                <td rowspan="2">ND dan Laporan Monev</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND</label>
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
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                        <input class="form-control" type="file" id="fileInputPo" onchange="uploadFile2('fileInputPo', 'statusCellPo')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPo">
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
                                <!-- Button to send files in the three accordion -->
                                <!-- <button type="button" class="btn btn-primary" onclick="sendFiles('collapseThree')">Kirim Berkas</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Penetapan Kinerja Individu
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
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
                                                                <td rowspan="3">Penetapan Kinerja Individu</td>
                                                                <td rowspan="3">Kemenkeu-Three, Kemenkeu-Four, dan Kemenkeu-Five</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Kemenkeu-Three</label>
                                                                        <input class="form-control" type="file" id="fileInputEl" onchange="uploadFile2('fileInputEl', 'statusCellEl')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellEl">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Kemenkeu-Four</label>
                                                                        <input class="form-control" type="file" id="fileInputFour" onchange="uploadFile2('fileInputFour', 'statusCellFour')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellFour">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Kemenkeu-Five</label>
                                                                        <input class="form-control" type="file" id="fileInputFive" onchange="uploadFile2('fileInputFive', 'statusCellFive')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellFive">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penelaahan Indikator Kinerja Utama (IKU) individu telah selaras dengan sasaran organisasi, program kegiatan seksi dan output individu</td>
                                                                <td>Peta Cascading</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Peta Cascading</label>
                                                                        <input class="form-control" type="file" id="fileInputLo" onchange="uploadFile2('fileInputLo', 'statusCellLo')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellLo">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pengukuran Kinerja Individu (secara periodik)</td>
                                                                <td rowspan="2">Prinscreen e-performance dan SIKKA</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Prinscreen e-performance</label>
                                                                        <input class="form-control" type="file" id="fileInputIdk" onchange="uploadFile2('fileInputIdk', 'statusCellIdk')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellIdk">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Prinscreen SIKKA</label>
                                                                        <input class="form-control" type="file" id="fileInputIk" onchange="uploadFile2('fileInputIk', 'statusCellIk')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellIk">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pemberian Reward berdasarkan hasil penilaian individu</td>
                                                                <td rowspan="2">Program PKP, Pembayaran Renumerasi (PMK Tukin)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Program PKP</label>
                                                                        <input class="form-control" type="file" id="fileInputPkp" onchange="uploadFile2('fileInputPkp', 'statusCellPkp')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPkp">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Program Pembayaran Renumerasi (PMK Tukin)</label>
                                                                        <input class="form-control" type="file" id="fileInputPro" onchange="uploadFile2('fileInputPro', 'statusCellPro')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPro">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perancangan Inovasi yang mendukung pengukuran kinerja yang objektif berintegritas</td>
                                                                <td>Dokumen inovasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen inovasi</label>
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
                                <!-- Button to send files in the four accordion -->
                                <!-- <button type="button" class="btn btn-primary" onclick="sendFiles('collapseFour')">Kirim Berkas</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Penegakan Aturan Disiplin/Kode Etik Pegawai
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
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
                                                                <td><b>Sosialisasi dan Internalisasi Aturan Disiplin dan Kode Etik Pegawai DJP</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Sosialisasi Tatap Muka</td>
                                                                <td rowspan="2">ND/Undangan Sosialisasi, Foto/video kegiatan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan Sosialisasi</label>
                                                                        <input class="form-control" type="file" id="fileInputIle" onchange="uploadFile2('fileInputIle', 'statusCellIle')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellIle">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Foto/video kegiatan</label>
                                                                        <input class="form-control" type="file" id="fileInputKeg" onchange="uploadFile2('fileInputKeg', 'statusCellKeg')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKeg">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Media Internalisasi</td>
                                                                <td>Bukti Penyampaian</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File (banner, poster,video, situs resmi, leaflet, dll)</label>
                                                                        <input class="form-control" type="file" id="fileInputInt" onchange="uploadFile2('fileInputInt', 'statusCellInt')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellInt">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Penerapan Aturan Disiplin dan Kode Etik Pegawai dalam pelaksanaan tugas dan dalam pergaulan hidup sehari-hari</b></td>
                                                                <td>Laporan Hasil Pemantauan Kode Etik dan Disiplin (UKI)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Pemantauan Kode Etik dan Disiplin (UKI)</label>
                                                                        <input class="form-control" type="file" id="fileInputUki" onchange="uploadFile2('fileInputUki', 'statusCellUki')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellUki">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Perancangan Inovasi Strategi Internalisasi Unit Kerja dalam Rangka Penerapan Aturan Disiplin dan Kode Etik Pegawai DJP</b></td>
                                                                <td>Dokumen inovasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen inovasi</label>
                                                                        <input class="form-control" type="file" id="fileInputStr" onchange="uploadFile2('fileInputStr', 'statusCellStr')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellStr">
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
                                <!-- Button to send files in the five accordion -->
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Sistem Informasi Kepegawaian
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
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
                                                                <td>Penyusunan Jadwal Pemutakhiran Data Pegawai pada Aplikasi SIKKA secara berkala</td>
                                                                <td>ND</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND</label>
                                                                        <input class="form-control" type="file" id="fileInputAs" onchange="uploadFile2('fileInputAs', 'statusCellAs')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellAs">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pemutakhiran Data Pegawai pada Aplikasi SIKKA</td>
                                                                <td rowspan="2">Permohonan Pemutakhiran Data Pegawai, printscreen update data SIKKA</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Permohonan Pemutakhiran Data Pegawai</label>
                                                                        <input class="form-control" type="file" id="fileInputUp" onchange="uploadFile2('fileInputUp', 'statusCellUp')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellUp">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File printscreen update data SIKKA</label>
                                                                        <input class="form-control" type="file" id="fileInputAd" onchange="uploadFile2('fileInputAd', 'statusCellAd')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellAd">
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
                                <!-- Button to send files in the six accordion -->
                                <!-- <button type="button" class="btn btn-primary" onclick="sendFiles('collapseSix')">Kirim Berkas</button> -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<script src="script_psm.js"></script>
<?php include("template/footer.php"); ?>