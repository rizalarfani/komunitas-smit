<section id="home">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url() ?>assets/frontend/img/galery/1.JPG" class="d-block w-100" alt="Galery Foto Komunitas SMIT">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>assets/frontend/img/galery/10.JPG" class="d-block w-100" alt="Galery Foto Komunitas SMIT">
        
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>assets/frontend/img/galery/3.JPG" class="d-block w-100" alt="Galery Foto Komunitas SMIT">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<main id="main">
    <section id="about">
        <div class="container">
            <header class="section-header">
                <h3>Profile dan Visi Misi</h3>
                <p>SMIT (Student Mosque of information Technology)</p>
            </header>

            <div class="row about-container">
                <div class="col-lg-6 content order-lg-1 order-2" style="text-align:justify;">
                    <p class="wow fadeInUp">
                        SMIT adalah wadah aktivitas untuk memberikan gambaran nyata, bahwa perkembangan dunia Teknologi Informasi sangat berkembang pesat di belahan dunia maupun di Perguruan tinggi di Indonesia, untuk  menumbuhkan pribadi  yang berilmu, aktif, kreatif, inovatif, dan bertanggungjawab secara khusus.
                    </p>
                    <br/>
                    <p class="wow fadeInUp">Anggota SMIT sebagai generasi muda secara totalitas kiprahnya sangat di perlukan untuk mengisi pembangunan yang dilandasi dengan iman, takwa, berakhlakul karimah, ilmu pengetahuan/teknologi, kedisiplinan dan rasa tanggungjawab. Oleh karna itu, SMIT muncul untuk mengembangkan daya keilmuan dibidang Teknologi Informasi sehingga kita mampu menerapkan ilmu kita di tengah masyarakat yang penuh dengan berbagai macam teknologi dalam kehidupan sehari-hari..</p>
                </div>
                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                     <h3 style="font-weight: bold;">Visi</h3>
                     <p>“Menciptakan Generasi yang Cerdas Akhlak dan Teknologi”</p>
                     <h3 style="font-weight: bold;">Misi</h3>
                     <ul>
                        <li>a.	Meningkatkan iman dan taqwa kepada Allah SWT.</li>
                        <li>b.	Meningkatkan Keteladanan, Keterampilan, keahlian dan Kreatifitas Mahasiswa khususnya bidang ilmu pengetahuan dan teknologi informasi</li>
                        <li>c.	Mengembangkan ilmu pengetahuan tentang pemograman komputer, keamanan informasi dan data sains mahasiswa</li>
                     </ul>
                    <img  src="img/intro-img.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section id="event" class="section-bg">
      <div class="container">
        <header class="section-header">
          <h3>Di SMIT Belajar apa si??</h3>
          <p>List of all event in SMIT Cellebration 2019</p>
        </header>

        <div class="row">
            <div class="col-lg-4 mb-4">
              <div class="card card-event wow fadeInLeft">
                <div class="card-body">
                  <img class="mx-auto d-block" style="width:100px; margin:20px;" src="<?= base_url() ?>assets/frontend/img/icon/web.png" alt="Image Seminar">
                  <h5 class="card-title">WEB PROGRAMMING</h5>
                  <p class="card-text">Api si Web Programming adalah suatu proses, cara, atau pembuatan suatu program berbasis web.</p>
                </div>
                <div class="card-footer">
                  <a href="flutter.html" class="btn btn-success btn-event">Selengkapnya </a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4">
              <div class="card card-event wow fadeInUp">
                <div class="card-body">
                  <img class="mx-auto d-block" style="width:100px; margin:20px;" src="<?= base_url() ?>assets/frontend/img/icon/mobile.jpg" alt="Image Workshop">
                  <h5 class="card-title">MOBILE PROGRAMMING</h5>
                  <p class="card-text">Pemrograman mobile merupakan gabungan antara kata ” pemrograman ” dan ” mobile “. Istilah lainnya yaitu mobile programming. Pemrograman ini secara singkat memiliki makna proses menulis kode-kode program untuk membuat aplikasi yang ditujukan untuk perangkat bergerak (Mobile).</p>
                </div>
                <div class="card-footer">
                  <a href="#modal-workshop" class="btn btn-success btn-event" data-toggle="modal">Selengkapnya </a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4">
              <div class="card card-event wow fadeInRight">
                <div class="card-body">
                  <img class="mx-auto d-block" style="width:100px; margin:20px;" src="<?= base_url() ?>assets/frontend/img/icon/game.png" alt="Image competition">
                  <h5 class="card-title">E-SPORT COMPETITION</h5>
                  <p class="card-text">Tunjukan kemampuan dan kerja sama tim kamu di "Tournament PUBG Mobile".</p>
                </div>
                <div class="card-footer">
                  <a href="flutter.html" class="btn btn-success btn-event">Selengkapnya </a>
                </div>
              </div>
            </div>

        </div>

      </div>
    </section>
    <section id="sponsors" class="section-bg galery">

      <div class="container">
        <div class="section-header">
          <h3>Galery</h3>
          <p>Galery foto komunitas smit</p>
        </div>

        <div class="row no-gutters sponsors-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="<?= base_url() ?>assets/frontend/img/galery/1.JPG" class="img-fluid img-thumbnail" alt="Galery foto komunitas smit">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="<?= base_url() ?>assets/frontend/img/galery/2.JPG" class="img-fluid img-thumbnail" alt="Galery foto komunitas smit">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="<?= base_url() ?>assets/frontend/img/galery/3.JPG" class="img-fluid" alt="Galery foto komunitas smit">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="<?= base_url() ?>assets/frontend/img/galery/4.JPG" class="img-fluid" alt="Galery foto komunitas smit">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="<?= base_url() ?>assets/frontend/img/galery/5.JPG" class="img-fluid" alt="Galery foto komunitas smit">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="<?= base_url() ?>assets/frontend/img/galery/6.JPG" class="img-fluid" alt="Galery foto komunitas smit">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="<?= base_url() ?>assets/frontend/img/galery/8.JPG" class="img-fluid" alt="Galery foto komunitas smit">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="<?= base_url() ?>assets/frontend/img/galery/9.JPG" class="img-fluid" alt="Galery foto komunitas smit">
            </div>
          </div>

        </div>

      </div>

    </section>
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">
          <div class="col-lg-8">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7922.322425063614!2d109.10765502306432!3d-6.8712782801381955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9e2805c1c1b%3A0xe3e61e1ae59106ff!2sPoliteknik+Harapan+Bersama!5e0!3m2!1sen!2sid!4v1551624572539" width="100%" height="312" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="">
                <div class="info">
                <i class="ion-ios-location-outline"></i>
                <p>Kampus 1 Politeknik Harapan Bersama Tegal</p>
                </div>
                <div class="info">
                    <i class="fa fa-facebook"></i>
                    <a target="_blank" href="https://web.facebook.com/SMITPHB"> <p>SMIT NEO</p></a>
                </div>
                <div class="info">
                    <i class="fa fa-instagram"></i>
                    <a target="_blank" href="https://www.instagram.com/smit_phb/"> <p>@smit_phb</p></a>
                    </div>
                <div class="info">
                <i class="ion-ios-email-outline"></i>
                <p>smitphb@gmail.com</p>
                </div>
                <div class="info">
                <i class="ion-ios-telephone-outline"></i>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=+62895339855278&text=ASSALAMUALAIKUM WR WB"><p>62895339855278</p></a>
                </div>
            </div>

        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row wow fadeInUp justify-content-center">
            <div class="col-sm-6">
                <div class="section-header">
                  <h3>Apa ada yang mau di tanyakan??</h3>
                  <p>Silihkan isi form di samping</p>
              </div>
            </div>
            <div class="col-sm-6 col">
                <form>
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Nomor WhatsApp</label>
                      <div class="col-sm-12">
                          <input
                          id="phone"
                          type="text"
                          class="form-control"
                          placeholder="contoh : 8912345678 (tanpa 0 atau kode negara)"
                          />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Pesan</label>
                      <div class="col-sm-12">
                          <textarea
                          id="message"
                          class="form-control"
                          placeholder="Masukan pesan ...(opsional)"
                          ></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-4"></div>
                        <div class="col-sm-8">
                            <button
                            type="button"
                            onclick="reset()"
                            class="btn btn-danger"
                            >
                            Reset
                            </button>
                            <button
                            onclick="sendMessage()"
                            type="button"
                            class="btn btn-success"
                            >
                            Kirim
                            </button>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
        </div>

      </div>
    </section>
</main>
<script>
    function validatePhone(txtPhone) {
      let filter = /^([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
      if (filter.test(txtPhone)) {
        return true;
      } else {
        return false;
      }
    }
    function sendMessage() {
      let phone = $("#phone").val();
      let validate = validatePhone(phone);
      if (validate) {
        let url = "https://wa.me/";
        let message = $("#message").val();
        let url_send = url + "62" + phone + "?text=" + message;
        window.open(url_send, "_blank");
        return;
      }

      alert("Format nomor tidak sesuai");
      return;
    }

    function reset() {
      $("#phone").val("");
      $("#message").val("");
    }
  </script>