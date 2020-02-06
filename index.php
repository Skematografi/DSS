<?php
	include "views/header.php";
	include "views/navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
				
					<!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src="assets/img/slide-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="assets/img/slide-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="assets/img/slide-3.jpg" alt="">
                        </div>
						<div class="item">
                            <img class="img-responsive img-full" src="assets/img/slide-4.jpg" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Selamat Datang Bro</small>
                </h2>
                <h1 class="brand-name">MoThai Style</h1>
                <hr class="tagline-divider">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Tentang
					<strong>MoThai</strong>
                </h2>
                <hr>
                <img class="img-responsive img-border img-left" src="assets/img/intro-pic.jpg" alt="">
                <hr class="visible-xs">
                    <p>Thailook (Mothai) adalah modifikasi motor ala THAILAND, Di Indonesia pun banyak anak remaja yang memodifikasi motor dengan style Thailook.
						MoThai dikalangan para remaja maupun modifikator sedang diinspirasikan karna modifikasi motor-motor thailook amatlah simpel dan keren karena masih terlihat motor yang standar.</p>
					<p>Ciri khas dari modifikasi thailook ialah motor selalu terlihat bersih, full color, velg jeruju dengan ukuran ban kecil,Body airbrush / stripping custom & beberapa accecoris tambahan. </p>
            </div>
        </div>
    </div>
</div>
<?php
	include "views/footer.php";
?>
   