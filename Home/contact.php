<?php
  include("partials/head.php");
  include("partials/navbar.php");
  include("proses/config.php");
?>


    <div class="hero-wrap" style="background-image: url('images/gb.3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Kontak</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tentang Kami</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex ftco-animate">
    				<div class="img img-about align-self-stretch" style="background-image: url(images/image_5.jpg); width: 100%;"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 ftco-animate">
    				<h2 class="mb-4">Sekilas Tentang Haji Indonesia</h2>
    				<p>Haji Indonesia didirikan dengan tujuan untuk mempermudah masyarakat Indonesia untuk melakukan ibadah haji dan umrah dengan menyediakan jasa pemberangkatan dan mitra. Kami juga memberikan informasi tentang ibadah haji tahunan dan informasi perjalanan. hehehhehehehehh</p>
    			</div>
    		</div>
    	</div>
    </section>
    
    <section class="ftco-section bg-light contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Informasi Kontak</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Alamat : </span> Jalan Srijaya Negara, Palembang, Sumatera Selatan</p>
          </div>
          <div class="col-md-3">
            <p><span>Telepon : </span> <a href="tel://08123456789"> 0812 3456 789</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email : </span> <a href="mailto:haji@hajiindonesia.com">haji@hajiindonesia.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website </span> <a href="#">hajiindonesia.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          	<h4 class="mb-4">Pertanyaan?</h4>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subjek">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Kirim" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6" id="map"></div>
        </div>
      </div>
    </section>

<?php
  include("partials/footer.php");
?>