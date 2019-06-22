<?php
  include("proses/config.php");
  include("partials/head.php");
  include("partials/navbar.php");
?>
    
    <div class="hero-wrap" style="background-image: url('images/gb.7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Publikasi</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Publikasi</h1>
          </div>
        </div>
      </div>
    </div>

    
    <!-- <section class="ftco-section">
      <div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">INFO</h2>
            <p>Info Terkini Pemberangkatan Haji <script>document.write(new Date().getFullYear());</script></p>
          </div>
        </div>
      	<div class="row">
      		<div class="col-md-4 ftco-animate">
      			<div class="cause-entry">
    					<a href="#" class="img" style="background-image: url(images/icon.png);"></a>
    					<div class="text p-3 p-md-4">
    						<h3><a href="#">Pemberangkatan Jemaah Haji 2019</a></h3>
    						<p>Kita berangkat guys.</p>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
    					</div>
    				</div>
      		</div>      
      </div>
      <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    </section> -->

    <section class="ftco-section">
    <div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">BERITA TERKINI</h2>
            <p>Berita Terkait Ibadah Haji dan Umrah <script>document.write(new Date().getFullYear());</script></p>
          </div>
        </div>
      <div class="container">
        <div class="row d-flex">
        <?php
          $sql = "SELECT * FROM content order by create_at desc";
          $query = mysqli_query($db,$sql);
          while($row = $query->fetch_object()){
        ?>
        <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.php?id=<?=$row->photo?>" class="block-20" style="background-image: url('images/<?=$row->photo?>');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="blog-single.php?id=<?=$row->photo?>"><?=$row->create_at?></a></div>
                  <div><a href="blog-single.php?id=<?=$row->photo?>"><?=$row->author?></a></div>
                </div>
                <h3 class="heading mt-3"><a href="blog-single.php"><?=$row->judul?></a></h3>
                <p><?=$row->deskripsi?></p>
                <p><a href="blog-single.php?id=<?=$row->photo?>">See more <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
        <!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
    </section>
		<section class="ftco-section-3 img" style="background-image: url(images/gb.7.jpg);" id="daftar">
    	<div class="overlay"></div>
		<div class="container" style="color:black;">
		<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <Center><h1>Daftar Haji</h1></Center>
                            <div class="ibox-tools">
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form action="proses/proses_daftar.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10"><input type="text" name="nama" placeholder="Nama" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10"><input type="text" name="email" placeholder="Email" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Usia</label>
                                    <div class="col-sm-10"><input type="text" name="usia" placeholder="Usia" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10"><select class="form-control m-b" name="jk">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea id="" cols="30" rows="3" name="alamat" class="form-control" placeholder="Alamat"></textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">No HP</label>
                                    <div class="col-sm-10"><input type="text" name="nope" placeholder="No HP" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">No KTP</label>
                                    <div class="col-sm-10"><input type="text" name="noktp" placeholder="No KTP" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">No Paspor</label>
                                    <div class="col-sm-10"><input type="text" name="nopaspor" placeholder="No Paspor" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Size Baju<br/>
                                    <small class="text-navy"></small></label>
                                    <div class="col-sm-10">
                                       <div><label> <input type="radio" value="S" id="optionsRadios1" name="ukuran">S</label></div>
                                        <div><label> <input type="radio" value="M" id="optionsRadios2" name="ukuran">M</label></div>
                                        <div><label> <input type="radio" value="L" id="optionsRadios1" name="ukuran">L</label></div>
                                        <div><label> <input type="radio" value="XL" id="optionsRadios2" name="ukuran">XL</label></div>
                                        <div><label> <input type="radio" value="XXL" id="optionsRadios1" name="ukuran">XXL</label></div>  
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Tipe Paket<br/>
                                    <small class="text-navy"></small></label>
                                    <div class="col-sm-10">
                                       <div><label> <input type="radio" value="Umroh" id="optionsRadios1" name="tipe">Umroh</label></div>
                                        <div><label> <input type="radio" value="Haji Reguler" id="optionsRadios2" name="tipe">Haji Reguler</label></div>
                                        <div><label> <input type="radio" value="Haji Plus" id="optionsRadios1" name="tipe">Haji Plus</label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10"><input type="file" name="photo" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <input class="btn btn-success" type="submit" name="kirim" value="kirim">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    	</div>
    </section>

<?php
  include("partials/footer.php");
?>