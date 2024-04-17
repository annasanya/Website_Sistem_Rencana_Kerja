<?php include("template/topbar.php"); ?>
<?php include("template/sidebar.php"); ?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Halaman Rekap Penataan Tatalaksana</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Components</li>
        <li class="breadcrumb-item active">Penataan Tatalaksana</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="list">
    <h3>All Backed Up Files</h3>
    <ul>
      <div style="text-align: center;">Sign In First</div>
    </ul>
  </div>

  <div class="expand-container" style="display: none;">
    <ul>
      <li onclick="readEditDownload(this, 'download')">Download</li>
      <li onclick="deleteFile(this)">Delete</li>
    </ul>
  </div>
  </main>
  <style>
    .list {
      padding: 20px;
      text-align: left;
    }

    .list h3 {
      margin-bottom: 15px;
    }

    .list ul {
      padding: 0;
    }

    .list ul li {
      list-style: none;
      background-color: #E8C43E;
      /* Ubah warna latar belakang */
      color: #fff;
      /* Warna teks putih */
      display: block;
      margin-bottom: 15px;
      position: relative;
      padding: 12px 20px;
      /* Sesuaikan padding */
      border-radius: 8px;
      /* Tambahkan sudut bulat */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      /* Tambahkan bayangan */
      transition: all 0.3s ease;
      /* Animasi saat hover */
    }

    .list ul li:hover {
      transform: translateY(-3px);
      /* Efek mengangkat saat dihover */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      /* Bayangan lebih jelas */
    }

    .list ul li span {
      position: relative;
      top: -1px;
    }

    .list ul li svg {
      fill: white;
      position: absolute;
      width: 30px;
      height: 30px;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(255, 255, 255, 0.2);
      /* Warna latar belakang semi-transparan */
      border-radius: 50%;
      /* Bulatkan bentuk */
      cursor: pointer;
      transition: background-color 0.3s ease;
      /* Animasi saat hover */
    }

    .list ul li svg:hover {
      background-color: rgba(255, 255, 255, 0.4);
      /* Ubah warna latar belakang saat hover */
    }

    .expand-container {
      width: 200px;
      /* Lebarkan container */
      position: absolute;
      padding: 10px;
      /* Tambahkan padding */
      background-color: #fff;
      /* Warna latar belakang putih */
      border-radius: 8px;
      /* Sudut bulat */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      /* Bayangan */
    }

    .expand-container ul {
      padding: 0;
    }

    .expand-container ul li {
      text-align: left;
      list-style: none;
      border-bottom: 1px solid #eee;
      /* Garis pembatas */
      padding: 10px 0;
      transition: background-color 0.3s ease;
      /* Animasi saat hover */
    }

    .expand-container ul li:hover {
      background-color: #f9f9f9;
      /* Warna latar belakang saat hover */
    }
  </style>

<script src="script_pt.js"></script>
<?php include("template/footer.php"); ?>
