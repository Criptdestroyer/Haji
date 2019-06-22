<?php
  include("partials/head.php");
  include("partials/navbar.php");
  include("proses/config.php");
?>


    
    <div class="hero-wrap" style="background-image: url('images/gb.11.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Regulasi</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Regulasi</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="col justiy content mb-5 pb-3">
          <div class="col-md-40 heading-section ftco-animate text-justify">
            <h2 class="mb-4 text-center">REGULASI</h2> <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
            <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p> <br><br><br>
            <h2 class="mb-4 text-center">Hal yang Harus Dipersiapkan wkwkk</h2><br>
            <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-counter ftco-intro ftco-intro-2" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span>Telah Melayani</span>
                <strong class="number" data-number="14328056">0</strong>
                <span>Jemaah haji di 190 kota di Indonesia</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Daftar</h3>
              	<p>Kalian bisa daftar jadi jemaah hehe.</p>
              	<p><a href="#daftar" class="btn btn-white px-3 py-2 mt-2">Daftar Sekarang</a></p>
              </div>
            </div>
          </div>
          <!-- <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Jadi Mitra</h3>
              	<p>Bisa jadi mitra dapat wang hehe.</p>
              	<p><a href="#" class="btn btn-white px-3 py-2 mt-2">Jadi Mitra</a></p>
              </div>
            </div>
          </div> -->
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Pendaftar Terbaru</h2>
            <p>Siapa ya.</p>
          </div>
        </div>
        <div class="row">
		<?php
			$sql = "SELECT * FROM pendaftar order by create_at desc limit 6";
			$query = mysqli_query($db,$sql);
			while($row = $query->fetch_object()){
		?>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/<?=$row->photo?>);"></div>
        				<div class="info ml-4">
        					<h3><?=$row->nama?></a></h3>
        					<span class="position"><?=$row->create_at?></span>
        					<div class="text">
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<?php
			}
			?>
        	
        </div>
				</div>
      </div>
    </section>

		<!-- <section class="ftco-gallery bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Mitra Terdaftar</h2>
            <p>Siapa aja neh.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/orang_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Jessica</a></h3>
        					<span class="position">Mitra Terkaya Banya Wang. Saingan Hotman Paris.</span>
        					<div class="text">
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/orang_2.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Ridha</a></h3>
        					<span class="position">Mitra Ayam Goreng Arab</span>
        					<div class="text">
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/orang_3.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Septiana</a></h3>
        					<span class="position">Mitra Lipstick Arab</span>
        					<div class="text">
		        			</div>
        				</div>
        			</div>
						</div>
					</div>
					</div>
					<br>
					<br>
					<br>
						<br>
      </div>
		</section> -->
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