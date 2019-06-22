<?php
  include("partials/head.php");
  include("partials/navbar.php");
  include("proses/config.php");
?>
    
    <div class="hero-wrap" style="background-image: url('images/gb.4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Multimedia</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Multimedia</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3"> 
          <div class="col-md-40 heading-section ftco-animate text-justify">
            <h2 class="mb-4 text-center">ceritanya ini cem gallery gitu</h2>
            <p>para jemaah yang dah pigi berfutu eksis biar web kita kelyatan nga abal-abal sheyenk wkwk</p> <br>
        </div>
    </div>
    <div class="d-md-flex">
    <?php
        $sql = "SELECT * FROM content";
        $query = mysqli_query($db,$sql);
        $i = 0;
        while($row=$query->fetch_object()){
            if($i % 4 == 0){
                    ?>
                        </div>
                        <div class="d-md-flex">
                    <?php
            }
    ?>
	    	<a href="images/<?=$row->photo?>" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/<?=$row->photo?>);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
    <?php
        
        $i++;
        }
    ?>
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