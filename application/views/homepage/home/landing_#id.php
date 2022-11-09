<?php
    // load overlay color from database somehow
	$overlay_color = $this->crud->gd('website_setting', array('id_website_setting' => 2));
?>
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
<?php
    $headline = $this->crud->gwlo('headline', array('status' => 'Publish'), 4, 0, 'urutan ASC');
    foreach ($headline as $headline) {
?>
            <div class="hs-item set-bg" data-setbg="<?=upload_url('headline').$headline->gambar?>">
                <div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<h2 class="hs-title"><?=$headline->judul?></h2>
								<p class="hs-des"><?=$headline->deskripsi?></p>
<?php if($headline->external!= NULL) { ?>
								<div class="site-btn"><a class="nbutton" href="<?=$headline->external?>">Baca Selengkapnya</a></div>
<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php } ?>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Ucapan Selamat section  -->
	<section class="counter-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="counter-content">
						<h2>Selamat Datang di Departemen Teknik Sistem Perkapalan Universitas Hasanuddin</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Ucapan Selamat end -->

	<!-- Akademik section -->
	<?php $akademik = $this->crud->gd('p_akademik', array('id' => 1));
	?>
	<section class="naruto">
		<div class="container">
			<div class="col-lg-12">
				<div class="counter-content">
					<div class="" style="margin-bottom: 20px">
						<h2 style="color:white; font-size: 30px; margin-bottom: 0px">Profil Kepala Departemen</h2>
					</div>
				</div>
			</div>
			
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade-animation show active" id="s1" role="tabpanel" aria-labelledby="s1-tab">
					<div class="col-lg-12" style="padding: 50px 25px 25px 25px;">
						<div class="row">
							
							<div class="col-lg-4 " style="text-align: center;">
								<img src="<?=home_assets("img/naruto.jpg")?>" alt="" style="border-radius: 50%; width: 300px">
							</div>
							<div class="col-lg-8">
								<div class="enroll-list text-white" style="padding: 68px 0px;">
									<div class="enroll-list-item">
										<h5>Uzumaki Naruto</h5>
										<p>Anak Hokage keempat yang memiliki cakra kyubi. Melanjutkan Studi S1 di Universitas Konoha dan sekarang menjadi Hokage di desa konoha.</p>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
	</section>
	<!-- Akademik section end -->

	<!-- Laboratorium -->
	<section class="beranda-laboratorium spad">
		<div class="container">
			<div class="col-lg-12">
				<div class="counter-content">
					<div class="bottom-lined-center">
						<h2 style="color:black; font-size: 30px; margin-bottom: 0px;">Laboratorium</h2>
					</div>
				</div>
			</div>
		</div>
		
		<div class="kapal">
			<div class="kotak"></div>
			<div class="kotak"></div>
			<div class="kotak"></div>
			<div class="kotak"></div>
		</div>
	</section>
	<!-- Laboratorium -->

	<!-- riset dan kerjasama section-->
	<!-- <section class="blog-section spad riset" >
		<div class="container">
			<div class="counter-content" style="margin-bottom:20px;">
				<h2 class="bottom-lined-center" style="color:black; font-size: 30px">Riset dan Kerjasama</h2>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="card-view" style="margin:5px">
						<div id="beranda-penelitian" class="counter-content">
							<div class="risetdankerjasama-icon" style="margin-bottom: 5px;">
								<i class="ti-agenda" style="color:black"></i>
							</div>
							<h5 style="color:black; font-weight: 400; font-size: 22px; margin-bottom: 10px;">PENELITIAN</h5>
							<p style="color:black;">Berikut merupakan hasil penelitian terakhir yang telah dilakukan oleh dosen Teknik Informatika</p>
							<a class="site-btn arrow" href="<?=base_url('penelitian')?>">Selengkapnya</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card-view" style="margin:5px">
						<div id="beranda-publikasi" class="counter-content">
							<div class="risetdankerjasama-icon" style="margin-bottom: 5px;">
								<i class="ti-write" style="color:black"></i>
							</div>
							<h5 style="color:black; font-weight: 400; font-size: 22px; margin-bottom: 10px;">PUBLIKASI</h5>
							<p style="color:black;">Berikut merupakan hasil publikasi terakhir yang telah dilakukan oleh dosen Teknik Informatika</p>
							<a class="site-btn" href="<?=base_url('publikasi')?>">Selengkapnya</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card-view" style="margin:5px">
						<div id="beranda-kerjasama" class="counter-content">
							<div class="risetdankerjasama-icon" style="margin-bottom: 5px;">
								<i class="fa fa-handshake-o" style="color:black"></i>
							</div>
							<h5 style="color:black;font-weight: 400; font-size: 22px; margin-bottom: 10px;">KERJASAMA</h5>
							<p style="color:black;">Departemen Teknik Informatika memiliki tradisi yang kuat dalam menjalin kerjasama dengan pihak eksternal</p>
							<a class="site-btn" href="<?=base_url('kerjasama')?>">Selengkapnya</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--riset dan kerjasama section end -->

	<!-- Video -->
	<section class="enroll-section spad set-bg" style="padding: 20px 0px" data-setbg="<?=home_assets()?>img/smartc.jpg">
		<div class="container">
			<div class="counter-content">
				<div class="" style="margin: 20px 0px">
					<h2 style="color:white; font-size: 26px; margin-bottom: 0px">Profil Departemen</h2>
				</div>
			</div>
			<div style="padding:20px 100px">
				<video class="col-12" src="<?=home_assets()?>img/video_informatika.mp4" controls></video>
			</div>
		</div>
	</section>
