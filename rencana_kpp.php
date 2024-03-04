<?php include("template/topbar.php"); ?>
<?php include("template/sidebar.php"); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Pembangunan Komponen Peningkatan Kualitas Pelayanan Publik</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Sub Tim Peningkatan Kualitas Layanan Publik</li>
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
                                Standar Pelayanan
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
                                                                <td><b>Standar Pelayanan</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pengumpulan data dan aturan terkait standar pelayanan yang telah ditetapkan dan merancang inovasi</td>
                                                                <td rowspan="2">PMK Nomor 88/PMK.01/2013 tentang Penyusunan, Penetapan, dan Penerapan Standar Pelayanan di Lingkungan Kementerian Keuangan & Keputusan Direktur Jenderal Pajak nomor KEP-378/PJ/2013 tentang Penetapan Standar Pelayanan pada KPP</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File PMK Nomor 88/PMK.01/2013 tentang Penyusunan, Penetapan, dan Penerapan Standar Pelayanan di Lingkungan Kementerian Keuangan</label>
                                                                        <input class="form-control" type="file" id="fileInputPmk" onchange="uploadFile2('fileInputPmk', 'statusCellPmk')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPmk">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Keputusan Direktur Jenderal Pajak nomor KEP-378/PJ/2013 tentang Penetapan Standar Pelayanan pada KPP</label>
                                                                        <input class="form-control" type="file" id="fileInputKep" onchange="uploadFile2('fileInputKep', 'statusCellKep')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellKep">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3">Perumusan Pengumuman terkait maklumat pelayanan dan merancang inovasinya</td>
                                                                <td rowspan="3">Keputusan Kepala kantor terkait maklumat pelayanan & foto gambar janji dan maklumat layanan & inovasi maklumat pelayanan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Keputusan Kepala kantor terkait maklumat pelayanan</label>
                                                                        <input class="form-control" type="file" id="fileInputPut" onchange="uploadFile2('fileInputPut', 'statusCellPut')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPut">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File foto gambar janji dan maklumat layanan</label>
                                                                        <input class="form-control" type="file" id="fileInputGam" onchange="uploadFile2('fileInputGam', 'statusCellGam')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellGam">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File inovasi maklumat pelayanan</label>
                                                                        <input class="form-control" type="file" id="fileInputIn" onchange="uploadFile2('fileInputIn', 'statusCellIn')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellIn">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3">Sosialisasi SOP terkait Standar Pelayanan</td>
                                                                <td rowspan="3">ND/Undangan, Daftar Hadir, Foto</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan</label>
                                                                        <input class="form-control" type="file" id="fileInputIl" onchange="uploadFile2('fileInputIl', 'statusCellIl')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellIl">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Daftar Hadir</label>
                                                                        <input class="form-control" type="file" id="fileInputTar" onchange="uploadFile2('fileInputTar', 'statusCellTar')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTar">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Foto</label>
                                                                        <input class="form-control" type="file" id="fileInputTari" onchange="uploadFile2('fileInputTari', 'statusCellTari')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTari">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3">Penerapan SOP terkait Standar Pelayanan</td>
                                                                <td rowspan="3">SOP Standar Pelayanan & Laporan Hasil Pengujian Pengendalian Utama (LHPPU) & SOP layanan Inovasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SOP Standar Pelayanan</label>
                                                                        <input class="form-control" type="file" id="fileInputSop" onchange="uploadFile2('fileInputSop', 'statusCellSop')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSop">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Pengujian Pengendalian Utama (LHPPU)</label>
                                                                        <input class="form-control" type="file" id="fileInputPor" onchange="uploadFile2('fileInputPor', 'statusCellPor')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPor">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SOP layanan Inovasi</label>
                                                                        <input class="form-control" type="file" id="fileInputLay" onchange="uploadFile2('fileInputLay', 'statusCellLay')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellLay">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Reviu atas standar pelayanan dan SOP yang terkait pelayanan, serta penyampaian usulan perbaikannyasesuai dengan ketentuan yang ditetapkan organisasi</td>
                                                                <td rowspan="2">Surat/ND usulan perbaikan SOP berdasarkan reviu & Pelaksanaan reviu melalui rapat</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Surat/ND usulan perbaikan SOP berdasarkan reviu</label>
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
                                                                        <label for="formFileMultiple" class="form-label">Upload File Pelaksanaan reviu melalui rapat</label>
                                                                        <input class="form-control" type="file" id="fileInputRev" onchange="uploadFile2('fileInputRev', 'statusCellRev')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellRev">
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
                                <!-- Button to send files in the first accordion -->
                                <!-- <button type="button" class="btn btn-primary" onclick="sendFiles('collapseOne')">Kirim Berkas</button> -->
                                <!-- akhir -->
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Budaya Pelayanan Prima
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
                                                                <td rowspan="3">Sosialisasi/pelatihan terhadap penerapan budaya pelayanan prima secara periodik</td>
                                                                <td rowspan="3">ND/Undangan, Daftar Hadir, Foto</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan</label>
                                                                        <input class="form-control" type="file" id="fileInputHad" onchange="uploadFile2('fileInputHad', 'statusCellHad')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellHad">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Daftar Hadir</label>
                                                                        <input class="form-control" type="file" id="fileInputDir" onchange="uploadFile2('fileInputDir', 'statusCellDir')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellDir">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Foto</label>
                                                                        <input class="form-control" type="file" id="fileInputFi" onchange="uploadFile2('fileInputFi', 'statusCellFi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellFi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3">Penyediaan Informasi Pelayanan melalui berbagai, seperti situs resmi, media cetak, media elektronik, banner, papan pengumuman, leaflet, running text, video, dll</td>
                                                                <td rowspan="3">foto pemuatan informasi layanan di papan pengumuman & print screen website & dokumentasi dari media sosial dan media cetak, media televisi, radio, brosur/pamflet, dll.</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File foto pemuatan informasi layanan di papan pengumuman</label>
                                                                        <input class="form-control" type="file" id="fileInputFo" onchange="uploadFile2('fileInputFo', 'statusCellFo')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellFo">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File print screen website</label>
                                                                        <input class="form-control" type="file" id="fileInputTo" onchange="uploadFile2('fileInputTo', 'statusCellTo')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTo">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File dokumentasi dari media sosial dan media cetak, media televisi, radio, brosur/pamflet, dll.</label>
                                                                        <input class="form-control" type="file" id="fileInputTas" onchange="uploadFile2('fileInputTas', 'statusCellTas')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTas">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perumusan dan Penerapan Reward dan Punishment bagi pelaksana layanan dan serta pemberian kompensasi bagi penerima layanan bila layanan tidak sesuai standar</td>
                                                                <td>dokumen Sistem Punishment and reward bagi pemberi layanan dan penerima layanan berbentuk keputusan kepala kantor / SOP / Foto Pegawai terbaik</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File dokumen Sistem Punishment and reward bagi pemberi layanan dan penerima layanan berbentuk keputusan kepala kantor / SOP / Foto Pegawai terbaik</label>
                                                                        <input class="form-control" type="file" id="fileInputSi" onchange="uploadFile2('fileInputSi', 'statusCellSi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSi">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3">Penyediaan Sarana Layanan Terpadu</td>
                                                                <td rowspan="3">Tempat pelayanan terpadu & SOP layanan terpadu & Foto layanan terpadu</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Tempat pelayanan terpadu</label>
                                                                        <input class="form-control" type="file" id="fileInputTem" onchange="uploadFile2('fileInputTem', 'statusCellTem')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellTem">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SOP layanan terpadu</label>
                                                                        <input class="form-control" type="file" id="fileInputPat" onchange="uploadFile2('fileInputPat', 'statusCellPat')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPat">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Foto layanan terpadu</label>
                                                                        <input class="form-control" type="file" id="fileInputPatt" onchange="uploadFile2('fileInputPatt', 'statusCellPatt')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPatt">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perancangan Inovasi Pelayanan dalam rangka peningkatan kualitas layanan publik</td>
                                                                <td>Dokumen Inovasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen Inovasi</label>
                                                                        <input class="form-control" type="file" id="fileInputVas" onchange="uploadFile2('fileInputVas', 'statusCellVas')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellVas">
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
                                Penilaian Kepuasan Terhadap Pelayanan
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
                                                                <td>Pelaksanaan survei kepuasan masyarakat terhadap layanan</td>
                                                                <td>Laporan Hasil Survei (pihak eksternal)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Survei (pihak eksternal)</label>
                                                                        <input class="form-control" type="file" id="fileInputSil" onchange="uploadFile2('fileInputSil', 'statusCellSil')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellSil">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Publikasi hasil survei kepuasan masyarakat terhadap layanan</td>
                                                                <td rowspan="2">foto papan pengumuman & print screen website, dokumentasi media sosial, salinan media cetak, media televisi, radio, dll.</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan foto papan pengumuman</label>
                                                                        <input class="form-control" type="file" id="fileInputPap" onchange="uploadFile2('fileInputPap', 'statusCellPap')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellPap">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File print screen website, dokumentasi media sosial, salinan media cetak, media televisi, radio, dll</label>
                                                                        <input class="form-control" type="file" id="fileInputRin" onchange="uploadFile2('fileInputRin', 'statusCellRin')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellRin">
                                                                    <span class="badge rounded-pill text-bg-warning">Upload</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perumusan tindaklanjut atas hasil survei kepuasan masyarakat</td>
                                                                <td>Laporan Tindak Lanjut</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Tindak Lanjut</label>
                                                                        <input class="form-control" type="file" id="fileInputMas" onchange="uploadFile2('fileInputMas', 'statusCellMas')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                                                    </div>
                                                                </td>
                                                                <td id="statusCellMas">
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

<script src="script_kpp.js"></script>
<?php include("template/footer.php"); ?>