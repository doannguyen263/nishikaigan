<?php
include_once(__DIR__."/../init.php");
$page_curent = 'blog';
?>

<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/<?= $dir ?>assets/images/favicon.png">

    <title><?= $init['meta']['blog']['title'] ?></title>
		<meta name="description" content="<?= $init['meta']['blog']['description'] ?>">
		<meta name="keywords" content="<?= $init['meta']['blog']['keyword'] ?>">
		<meta property="og:title" content="<?= $init['meta']['blog']['title'] ?>">
		<meta property="og:description" content="<?= $init['meta']['blog']['description'] ?>">
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
							"@id": "<?= $init['clinic']['url'] ?>blog/",
							"name": "<?= $init['meta']['blog']['title'] ?>"
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
						<div class="page-header__title">お知らせ</div>
						<div class="page-header__sub">INFORMATION</div>
					</div>
				</div>
		</section>

		<div class="blog__wrap">
			<div class="container">
				<nav aria-label="breadcrumb" class="mb-5 pb-md-4 pb-lg-5">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Top</a></li>
				    <li class="breadcrumb-item active" aria-current="page">お知らせ</li>
				  </ol>
				</nav>

				<div class="row">
					<div class="col-xl-8">

						<div class="archive-content mb-5">

							<div class="archive-item ef--shine">
								<div class="archive-item__option d-flex mb-3">
									<time class="-date"><span>2020-08-28</span></time>
									<p class="-category">CATEGORY : <span>新着情報</span></p>
								</div>
								<div class="row">
									<div class="col-5 col-md-4">
										<div class="archive-item__thumb ef--shine__thumb">
									    <div class="dnfix__thumb">
									      <img src="../assets/images/thumb.jpg" alt="">
									    </div>
									  </div>
									</div>
									<div class="col-7 col-md-8">
										<div class="archive-item__meta">
									    <h3 class="archive-item__title"><a href="../blog-detail" class="stretched-link">[ 0 ] ---- 記事タイトル記事タイトル記事タイトル記事タイトル</a></h3>
									    <div class="archive-item__excerpt d-none d-md-block">
									    <p class="text__truncate -n3">[ 0 ] ---- 記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト		記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト
									    </p>
									    </div>
									  </div>
									</div>
								</div>
							</div>

							<div class="archive-item ef--shine">
								<div class="archive-item__option d-flex mb-3">
									<time class="-date"><span>2020-08-28</span></time>
									<p class="-category">CATEGORY : <span>新着情報</span></p>
								</div>
								<div class="row">
									<div class="col-5 col-md-4">
										<div class="archive-item__thumb ef--shine__thumb">
									    <div class="dnfix__thumb">
									      <img src="../assets/images/thumb.jpg" alt="">
									    </div>
									  </div>
									</div>
									<div class="col-7 col-md-8">
										<div class="archive-item__meta">
									    <h3 class="archive-item__title"><a href="../blog-detail" class="stretched-link">[ 0 ] ---- 記事タイトル記事タイトル記事タイトル記事タイトル</a></h3>
									    <div class="archive-item__excerpt d-none d-md-block">
									    <p class="text__truncate -n3">[ 0 ] ---- 記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト		記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト
									    </p>
									    </div>
									  </div>
									</div>
								</div>
							</div>
							<div class="archive-item ef--shine">
								<div class="archive-item__option d-flex mb-3">
									<time class="-date"><span>2020-08-28</span></time>
									<p class="-category">CATEGORY : <span>新着情報</span></p>
								</div>
								<div class="row">
									<div class="col-5 col-md-4">
										<div class="archive-item__thumb ef--shine__thumb">
									    <div class="dnfix__thumb">
									      <img src="../assets/images/thumb.jpg" alt="">
									    </div>
									  </div>
									</div>
									<div class="col-7 col-md-8">
										<div class="archive-item__meta">
									    <h3 class="archive-item__title"><a href="../blog-detail" class="stretched-link">[ 0 ] ---- 記事タイトル記事タイトル記事タイトル記事タイトル</a></h3>
									    <div class="archive-item__excerpt d-none d-md-block">
									    <p class="text__truncate -n3">[ 0 ] ---- 記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト		記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト
									    </p>
									    </div>
									  </div>
									</div>
								</div>
							</div>
							<div class="archive-item ef--shine">
								<div class="archive-item__option d-flex mb-3">
									<time class="-date"><span>2020-08-28</span></time>
									<p class="-category">CATEGORY : <span>新着情報</span></p>
								</div>
								<div class="row">
									<div class="col-5 col-md-4">
										<div class="archive-item__thumb ef--shine__thumb">
									    <div class="dnfix__thumb">
									      <img src="../assets/images/thumb.jpg" alt="">
									    </div>
									  </div>
									</div>
									<div class="col-7 col-md-8">
										<div class="archive-item__meta">
									    <h3 class="archive-item__title"><a href="../blog-detail" class="stretched-link">[ 0 ] ---- 記事タイトル記事タイトル記事タイトル記事タイトル</a></h3>
									    <div class="archive-item__excerpt d-none d-md-block">
									    	<p class="text__truncate -n3">[ 0 ] ---- 記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト記事テキ		スト記事テキスト記事テキスト記事テキスト記事テキスト記事テキスト
									    	</p>
									    	</div>
									  </div>
									</div>
								</div>
							</div>
						</div>

						<nav aria-label="Page navigation example">
						  <ul class="pagination justify-content-center mb-5">
						    <li class="page-item disabled"><a class="page-link" href="#">最初へ</a></li>
						    <li class="page-item disabled"><a class="page-link" href="#">前へ</a></li>
						    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
						    <li class="page-item"><a class="page-link" href="#">2</a></li>
						    <li class="page-item"><a class="page-link" href="#">次へ</a></li>
						    <li class="page-item"><a class="page-link" href="#">最後へ</a></li>
						  </ul>
						</nav>

					</div>

					<div class="col-xl-4">
						<div class="sidebar -right -sticky">
								<div class="widget widget-nav">
									<h3 class="widget__title">カテゴリ</h3>
									<div class="widget__content">
										<ul class="ul-list">
											<li><a href="#" class="">2020年8月 <span>（00件）</span></a></li>
											<li><a href="#" class="">2020年7月 <span>（00件）</span></a></li>
											<li><a href="#">2020年6月 <span>（00件）</span></a></li>
											<li><a href="#" class="">2020年5月 <span>（00件）</span></a></li>
											<li><a href="#" class="">2020年4月 <span>（00件）</span></a></li>
											<li><a href="#" class="">2019年12月 <span>（00件）</span></a></li>
										</ul>
									</div>
								</div>

								<div class="widget widget-nav">
									<h3 class="widget__title">カテゴリ</h3>
									<div class="widget__content">
										<ul class="ul-list">
											<li><a href="#" class="">2020年8月 <span>（00件）</span></a></li>
											<li><a href="#" class="">2020年7月 <span>（00件）</span></a></li>
											<li><a href="#">2020年6月 <span>（00件）</span></a></li>
											<li><a href="#" class="">2020年5月 <span>（00件）</span></a></li>
											<li><a href="#" class="">2020年4月 <span>（00件）</span></a></li>
											<li><a href="#" class="">2019年12月 <span>（00件）</span></a></li>
										</ul>
									</div>
								</div>

						</div>
					</div>

				</div>
			</div>
		</div>

		<?php include('../assets/inc/footer.php') ?>

	</div>

  <?php include('../assets/inc/footer_script.php') ?>
  </body>
</html>
