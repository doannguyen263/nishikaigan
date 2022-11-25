<header class="header" data-toggle="sticky-onscroll">
	<div class="container container-1600">
		<div class="sc__wrap d-flex align-items-center">
				<div class="logo me-2">
					<a href="../" class="d-block">
						<img src="/<?= $dir ?>/assets/images/logo-mb-horizontal.png" alt="">
					</a>
				</div>
				<nav class="main__nav d-none d-xl-block ms-auto">

		  		<div class="main__nav__inner d-flex align-items-center justify-content-center">
		          <ul class="el-menu">
		            <?php include(ROOTPATH."assets/inc/main_nav.php"); ?>
		          </ul>
		      </div>

		    </nav>

		    <div class="ms-3 d-none d-xl-block">
		    	<a href="tel:<?= $init['clinic']['tel_num'] ?>" class="header__phone is-tel"><i class="icon-phone"></i><?= $init['clinic']['tel_num'] ?></a>
		    </div>

		    <!-- Menu mobi -->
	      <a href="#menu__mobile" class="mburger d-flex d-xl-none justify-content-end ms-auto">
	          <span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span>
	      </a>

	    </div>
	</div>
</header>