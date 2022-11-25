<?php
include_once(__DIR__."/../init.php");
$page_curent = 'staff';
?>
<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/<?= $dir ?>/assets/images/favicon.png">

    <title><?= $init['meta']['staff']['title'] ?></title>
		<meta name="description" content="<?= $init['meta']['staff']['description'] ?>">
		<meta name="keywords" content="<?= $init['meta']['staff']['keyword'] ?>">
		<meta property="og:title" content="<?= $init['meta']['staff']['title'] ?>">
		<meta property="og:description" content="<?= $init['meta']['staff']['description'] ?>">
		<meta property="og:url" content="<?= $init['clinic']['url'] ?>">
		<meta property="og:image" content="<?= $init['clinic']['url'] ?>images/cmn/pic_ogp.jpg">
		<meta property="og:type" content="website">

		<script type="application/ld+json">
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{
						"@type": "ListItem",
						"position": 1,
						"item": {
							"@id": "<?= $init['clinic']['url'] ?>",
							"name": "HOME"
						}
					}
				]
			},
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{
						"@type": "ListItem",
						"position": 2,
						"item": {
							"@id": "<?= $init['clinic']['url'] ?>staff/",
							"name": "<?= $init['meta']['staff']['title'] ?>"
						}
					}
				]
			}
		</script>
		<?php include_once(ROOTPATH."assets/inc/header_link.php"); ?>
	</head>
<body>
	<div class="wrapper">

		<?php include_once(ROOTPATH."assets/inc/header.php"); ?>
		<section class="page-header">

				<div class="page-header__thumb">
					<div class="dnfix__thumb">
						<img src="../assets/images/staff/header-bg.png" alt="">
					</div>
				</div>
				<div class="page-header__meta">
					<div class="container text-center">
						<div class="page-header__title">院長・スタッフ</div>
						<div class="page-header__sub">STAFF</div>
					</div>
				</div>

		</section>

		<div class="staff__wrap">

			<div class="container">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Top</a></li>
				    <li class="breadcrumb-item active" aria-current="page">院長・スタッフ</li>
				  </ol>
				</nav>
			</div>

			<section class="staff-intro">
				<div class="container">
					<div class="sc__wrap wow fadeInUp">
						<h2 class="sc__title text-center">タイトルタイトルタイトルタイトル</h2>
						<div>
							<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</div>
				</div>
			</section>
		</div>

		<section class="staff-doctor">
		  <div class="container mb-sm-5 pb-sm-5">
		  	<header class="c-header text-center wow fadeInUp">
		  		<h2 class="c-header__title">Doctor</h2>
		  		<div class="c-header__sub">院長紹介</div>
		  	</header>
		  	<div class="c-content">

		  		<div class="el-item">
			      <div class="row">
			      	<div class="col-md-6 wow fadeInLeft">
			      		<div class="el-item__thumb">
			                <div class="dnfix__thumb">
			                  <img src="../assets/images/staff/doctor.jpg" alt="">
			                </div>
			              </div>
			              <div class="el__ruby text-center mb-5">
		                    <span class="me-4">院長名</span>
		                    <p class="d-inline-block">
		                        <span class="me-2">
		                            <ruby>名前<rt>なまえ</rt></ruby>
		                        </span>
		                        <span>
		                            <ruby>名前<rt>なまえ</rt></ruby>
		                        </span>
		                    </p>
		                </div>

			      	</div>
		          <div class="col-md-6 wow fadeInRight">
	                <div class="el-item__meta">
	                  <h3 class="el-item__title">タイトルタイトルタイトルタイトル<br class="d-none d-xl-block">タイトルタイトルタイトルタイトル</h3>
	                  <div class="el-item__excerpt">
	                  	<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
	                  </div>
	                </div>
		          </div>
			      </div>
		      	</div>

		      	<div class="el-group">

	      			<div class="el-box -large wow fadeInUp">
				      	<h3 class="el-box__title text-center"><span>経歴</span></h3>
				      	<ul class="ul-list">
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      	</ul>
				    </div>

					<div class="row g-4 g-md-5 g-xl-120">

						<div class="col-md-6 wow fadeInLeft">
							<div class="el-box">
					      	<h3 class="el-box__title text-center"><span>所属</span></h3>
					      	<ul class="ul-list -st2">
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      	</ul>
					      </div>
						</div>
						<div class="col-md-6  wow fadeInRight">
							<div class="el-box">
					      	<h3 class="el-box__title text-center"><span>書籍</span></h3>
					      	<ul class="ul-list -st2">
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      	</ul>
					      </div>
						</div>
					</div>
		      	</div>

		    </div>


		  	<div class="c-content">

		  		<div class="el-item">
			      <div class="row">
			      	<div class="col-md-6 wow fadeInLeft">
			      		<div class="el-item__thumb">
			                <div class="dnfix__thumb">
			                  <img src="../assets/images/staff/doctor.jpg" alt="">
			                </div>
			              </div>
			              <div class="el__ruby text-center mb-5">
		                    <span class="me-4">院長名</span>
		                    <p class="d-inline-block">
		                        <span class="me-2">
		                            <ruby>名前<rt>なまえ</rt></ruby>
		                        </span>
		                        <span>
		                            <ruby>名前<rt>なまえ</rt></ruby>
		                        </span>
		                    </p>
		                </div>

			      	</div>
		          <div class="col-md-6 wow fadeInRight">
	                <div class="el-item__meta">
	                  <h3 class="el-item__title">タイトルタイトルタイトルタイトル<br class="d-none d-xl-block">タイトルタイトルタイトルタイトル</h3>
	                  <div class="el-item__excerpt">
	                  	<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
	                  </div>
	                </div>
		          </div>
			      </div>
		      	</div>

		      	<div class="el-group">

	      			<div class="el-box -large wow fadeInUp">
				      	<h3 class="el-box__title text-center"><span>経歴</span></h3>
				      	<ul class="ul-list">
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      		<li>
				      			<div class="-date">0000/00/00</div>
				      			<div class="-text">テキストテキストテキストテキストテキストテキストテキストテキス</div>
				      		</li>
				      	</ul>
				    </div>

					<div class="row g-4 g-md-5 g-xl-120">

						<div class="col-md-6 wow fadeInLeft">
							<div class="el-box">
					      	<h3 class="el-box__title text-center"><span>所属</span></h3>
					      	<ul class="ul-list -st2">
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      	</ul>
					      </div>
						</div>
						<div class="col-md-6  wow fadeInRight">
							<div class="el-box">
					      	<h3 class="el-box__title text-center"><span>書籍</span></h3>
					      	<ul class="ul-list -st2">
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      		<li>テキストテキストテキストテキストテキストテキスト</li>
					      	</ul>
					      </div>
						</div>
					</div>
		      	</div>

		    </div>

		  </div>
		</section>

		<section class="staff-staff">
		  <div class="container">
		  	<header class="c-header text-center wow fadeInUp">
		  		<h2 class="c-header__title">Staff</h2>
		  		<div class="c-header__sub">スタッフ紹介</div>
		  	</header>
		  	<div class="c-content">
		  		<div class="sc__excerpt wow fadeInUp">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
		      <div class="sc__thumb wow fadeInUp">
		      	<div class="dnfix__thumb">
		      		<img src="../assets/images/staff/staff-large.jpg" alt="">
		      	</div>
		      </div>

		      <div class="row gx-4 gy-5 g-lg-5 g-xl-60 wow fadeInUp">
		      	<div class="col-md-4">
		      		<div class="el-item">
		      		  <div class="el-item__thumb">
		      		    <div class="dnfix__thumb">
		      		      <img src="../assets/images/staff/staff-medium.jpg" alt="">
		      		    </div>
		      		  </div>
		      		  <div class="el-item__meta">
		      		    <p class="el-item__sub text-center">歯科衛生士</p>
		      		    <h3 class="el-item__title text-center">名前 名前</h3>
		      		    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
		      		  </div>
		      		</div>
		      	</div>
		      	<div class="col-md-4">
		      		<div class="el-item">
		      		  <div class="el-item__thumb">
		      		    <div class="dnfix__thumb">
		      		      <img src="../assets/images/staff/staff-medium.jpg" alt="">
		      		    </div>
		      		  </div>
		      		  <div class="el-item__meta">
		      		    <p class="el-item__sub text-center">歯科衛生士</p>
		      		    <h3 class="el-item__title text-center">名前 名前</h3>
		      		    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
		      		  </div>
		      		</div>
		      	</div>
		      	<div class="col-md-4">
		      		<div class="el-item">
		      		  <div class="el-item__thumb">
		      		    <div class="dnfix__thumb">
		      		      <img src="../assets/images/staff/staff-medium.jpg" alt="">
		      		    </div>
		      		  </div>
		      		  <div class="el-item__meta">
		      		    <p class="el-item__sub text-center">歯科衛生士</p>
		      		    <h3 class="el-item__title text-center">名前 名前</h3>
		      		    <div class="el-item__excerpt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
		      		  </div>
		      		</div>
		      	</div>
		      </div>
		    </div>
		  </div>
		</section>


		<?php include('../assets/inc/footer.php') ?>
	</div>

    <?php include('../assets/inc/footer_script.php') ?>
  </body>
</html>
