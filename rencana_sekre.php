<?php include("template/topbar.php"); ?>
<?php include("template/sidebar.php"); ?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Halaman Rencana Kerja Sekretariat</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Components</li>
        <li class="breadcrumb-item active">Sekretariat</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="accordion" id="accordionExample">
          <!-- Accordion Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Penandatanganan Pakta Integritas
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
                                <td>Penandatanganan Pakta Integritas bagi seluruh pegawai di lingkungan Kanwil/Direktorat/Setditjen/UPT</td>
                                <td>Dokumen Pakta</td>
                                <td>
                                  <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Upload Dokumen Pakta</label>
                                    <input class="form-control" type="file" id="fileInputPakta" onchange="uploadFile2('fileInputPakta', 'statusCell')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                  </div>
                                </td>
                                <td id="statusCell">
                                  <span class="badge rounded-pill text-bg-warning">Upload</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <!-- <button type="button" class="btn btn-primary" id="upload" onclick="uploadFile()">Kirim Berkas</button> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Accordion Item 2 -->
          <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      Perancangan Pembangunan
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
                                      <td rowspan="2">Pencanangan Pembangunan Zona Integritas</td>
                                      <td rowspan="2">Piagam dan Dokumentasi</td>
                                      <td>
                                        <div class="mb-3">
                                          <label for="formFileMultiplePiagam" class="form-label">Upload File Piagam</label>
                                          <input class="form-control" type="file" id="fileInputPiagam" onchange="uploadFile2('fileInputPiagam', 'statusCellPiagam')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                        </div>
                                      </td>
                                      <td id="statusCellPiagam">
                                        <span class="badge rounded-pill text-bg-warning">Upload</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="mb-3">
                                          <label for="formFileMultiple" class="form-label">Upload File Dokumentasi</label>
                                          <input class="form-control" type="file" id="fileInputDokumentasi" onchange="uploadFile2('fileInputDokumentasi', 'statusCellDokumentasi')" multiple driveItem="/me/drive/root/children/s93fcaa56994548c2a6759dc25c579bdc/children">
                                        </div>
                                      </td>
                                      <td id="statusCellDokumentasi">
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
                      <!-- Button to send files in the second accordion -->
                      <!-- <button type="button" class="btn btn-primary" id="upload" onclick="uploadFile2()">Kirim Berkas</button> -->
                    </div>
                  </div>
                </div>
  </section>
</main><!-- End #main -->
<script src="script_sekre.js"></script>
<?php include("template/footer.php"); ?>