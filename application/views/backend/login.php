<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Website Komunitas SMIT phb.MIT adalah wadah aktivitas untuk memberikan gambaran nyata, bahwa perkembangan dunia Teknologi Informasi sangat berkembang pesat di belahan dunia maupun di Perguruan tinggi di Indonesia, untuk menumbuhkan pribadi yang berilmu, aktif, kreatif, inovatif, dan bertanggungjawab secara khusus.Anggota SMIT sebagai generasi muda secara totalitas kiprahnya sangat di perlukan untuk mengisi pembangunan yang dilandasi dengan iman, takwa, berakhlakul karimah, ilmu pengetahuan/teknologi, kedisiplinan dan rasa tanggungjawab. Oleh karna itu, SMIT muncul untuk mengembangkan daya keilmuan dibidang Teknologi Informasi sehingga kita mampu menerapkan ilmu kita di tengah masyarakat yang penuh dengan berbagai macam teknologi dalam kehidupan sehari-hari. ">
    <meta name="keywords" content="SMIT, PHB, Kumunitas">
    <meta name="author" content="rijal arfani">
    <meta name="site_name" content="smitpoltektegal.com" />
    <meta name="robots" content="all,index,follow">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta name="Rating" content="General">
    <meta name="subject" content="Situs Pendidikan">
    <meta name="copyright" content="Komunitas SMIT PHB">
    <meta name="language" content="Indonesia">
    <meta name="revised" content="Sunday, September, 2020, 5:15 pm" />
    <meta name="Classification" content="Education">
    <meta name="designer" content="Mohammad Rijal Arfani, arfanirizal22@gmail.com">
    <meta name="reply-to" content="arfanirizal22@gmail.com">
    <meta name="owner" content="SMIT PHB">
    <meta name="url" content="https://www.smitpoltektegal.com">
    <meta name="identifier-URL" content="https://www.smitpoltektegal.com">
    <meta name="category" content="Admission, Education">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Copyright" content="Komunitas SMIT PHB" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="revisit-after" content="7" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />
    <meta itemprop="name" content="Komunitas SMIT PHB" />

    <title>SMIT | <?= $title ?></title>
    <link href="<?= base_url() ?>assets/frontend/img/logo.png" rel="icon">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/backend/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/backend/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Halaman Admin</h1>
                  </div>
                  <?php echo form_open('auth/prosess_login',['class' => 'user']) ?>
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email_address" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                    <?php echo form_close() ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/backend/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/backend/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/backend/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>
