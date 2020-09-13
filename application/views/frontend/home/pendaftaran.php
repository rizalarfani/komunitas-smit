<body>
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#intro" class="scrollto"><img src="<?= base_url() ?>assets/frontend/img/logo.png" alt="Logo Komunitas SMIT" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class=""><a href="<?= base_url() ?>">Home</a></li>
          <li class="active"><a href="#event">Pendaftaran</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header>
<section id="intro" class="clearfix">
    <img id="bg-intro" class="float-right" src="<?= base_url() ?>assets/frontend/img/man.png" alt="Man Work">
    <div class="container">
      <div class="intro-info">
        <div class="row">
            <div class="col-lg-12 col-sm-10 col">
                <h2>Pendaftaran Anggota SMIT Baru </h2>
                <p style="font-weight: bold;
                color: white; font-size:20px;">( Student Mosque of information Technology )</p>
                <p style="font-weight: bold;">Untuk Anggota smit baru yang sudah melakukan pendaftaran anggota,Terimahkasih sudah mendaftar dan semoga istiqomah dalm belajar.</p>
            </div>
        </div>
      </div>
    </div>
</section>

<main class="main">
    <section id="event">
        <div class="container">
            <header class="section-header">
                <h3>Form Pendaftaran Anggota SMIT 2020</h3>
                <p>Silahkan isi form dibawah ini,Nb Jika belum mempunyai nim kosongkan aja,dan gunakan email yang asli</p>
            </header>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-12 col-auto">
                <?php if($this->session->flashdata('info')): ?>
                    <div class="alert alert-success"><?php echo $this->session->flashdata('info') ?></div>
                <?php endif ?>
                    <div class="card">
                        <div class="card-header" style="background-color: #1ADDA1;">
                            <div class="card-title text-white" style="font-weight:bold; font-size:20px">Pendaftaran Anggota SMIT</div>
                        </div>
                        <div class="card-body">
                            <?php echo form_open('pendaftaran') ?>
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-sm-6 col">
                                        <div class="form-group">
                                            <label for="Nama Lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control <?php echo  form_error('name_lengkap') ? "is-invalid" : "" ?>" placeholder="Nama Lenkap" aria-label="Nama Lengkap" aria-describedby="Nama Lengkap" name="name_lengkap">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('name_lengkap') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-auto">
                                        <div class="form-group">
                                            <label for="Email">Masukan Email</label>
                                            <input type="email" class="form-control <?php echo  form_error('email') ? "is-invalid" : "" ?>" placeholder="Email address" aria-label="Email address" aria-describedby="Email address" name="email">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('email') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-sm-6 col-auto">
                                        <div class="form-group">
                                            <label for="Masukan NIM">Masukan NIM</label>
                                            <input type="number" class="form-control <?php echo  form_error('nim') ? "is-invalid" : "" ?>" placeholder="Nim Mahasiswa" aria-label="Nim Mahasiswa" aria-describedby="Nim Mahasiswa" name="nim">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('nim') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-auto">
                                        <div class="form-group">
                                            <label for="Nomor WhatsApp">Nomor WhatsApp</label>
                                            <input type="no_wa" class="form-control <?php echo  form_error('no_wa') ? "is-invalid" : "" ?>" placeholder="Nomor WhatsApp" aria-label="Nomor WhatsApp" aria-describedby="Nomor WhatsApp" name="no_wa">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('no_wa') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-sm-6 col-auto">
                                        <label for="Jenis Kelamin">Jenis Kelamin</label>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="l">
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="p">
                                                <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-auto">
                                        <div class="form-group">
                                            <label for="Pilih Prodi">Pilih Prodi</label>
                                            <select class="form-control" name="prodi" id="prodi">Pilih Prodi
                                                <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                                                <option value="D4 Akuntansi Sektor Publik">D4 Akuntansi Sektor Publik</option>
                                                <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                                                <option value="D3 Teknik Elektronika">D3 Teknik Elektronika</option>
                                                <option value="D3 Desain Komunikasi Visual">D3 Desain Komunikasi Visual</option>
                                                <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                                                <option value="D3 Akuntansi">D3 Akuntansi</option>
                                                <option value="D3 Farmasi">D3 Farmasi</option>
                                                <option value="D3 Kebidanan">D3 Kebidanan</option>
                                                <option value="D3 Perhotelan">D3 Perhotelan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="form-group">
                                        <label for="Motivasi Masuk Komunitas SMIT">Motivasi Masuk Komunitas SMIT</label>
                                        <textarea class="form-control <?php echo  form_error('motivasi') ? "is-invalid" : "" ?>" id="validationTextarea" placeholder="Motivasi Masuk ke Kominitas SMIT" cols="150" rows="4" name="motivasi" required></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('motivasi') ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer" style="background-color: #1ADDA1;">
                            <button type="submit" name="tambah" class="btn btn-success">Daftar Anggota</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>