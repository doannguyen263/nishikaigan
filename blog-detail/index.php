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
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <title><?= $init['meta']['blog/detail.html']['title'] ?></title>
		<meta name="description" content="<?= $init['meta']['blog/detail.html']['description'] ?>">
		<meta name="keywords" content="<?= $init['meta']['blog/detail.html']['keyword'] ?>">
		<meta property="og:title" content="<?= $init['meta']['blog/detail.html']['title'] ?>">
		<meta property="og:description" content="<?= $init['meta']['blog/detail.html']['description'] ?>">
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
							"@id": "<?= $init['clinic']['url'] ?>blog/detail.html",
							"name": "<?= $init['meta']['blog/detail.html']['title'] ?>"
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
						<div class="page-header__title">おしらせ詳細</div>
						<div class="page-header__sub">INFORMATION</div>
					</div>
				</div>

		</section>

		<div class="blog__wrap">
			<div class="container">
				<nav aria-label="breadcrumb" class="mb-5 pb-md-4 pb-lg-5">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Top</a></li>
				    <li class="breadcrumb-item active" aria-current="page">おしらせ詳細</li>
				  </ol>
				</nav>

				<div class="row">
					<div class="col-xl-8">
						<div class="m-single_option">
							<p class="m-single_category"><span>CATEGORY : <strong>新着情報</strong></span></p>
							<time class="m-single_date"><span>2020-08-28</span></time>
						</div>

						<h1 class="entry-title">記事タイトル記事タイトル記事タイトル</h1>

						<figure class="m-single_catch"><img src="https://placehold.jp/600x400.png" alt=""></figure>

						<div class="m-single_body">
							<div class="m-inner entry-content">
								<h1>見出し1見出し1見出し1見出し1見出し1見出し1見出し1見出し1見出し1</h1>
								<h2>見出し2見出し2見出し2見出し2見出し2見出し2見出し2見出し2見出し2見出し2見出し2</h2>
								<h3>見出し3見出し3見出し3見出し3</h3>
								<h4>見出し4</h4>
								<h5>見出し5</h5>
								<h6>見出し6</h6>
								<ul>
									<li><strong>ul テスト入力</strong></li>
									<li><em>テスト入力２</em></li>
								</ul>
								<ol>
									<li><strong>ol いいきいいう</strong></li>
									<li>いいいいいい」</li>
								</ol>
								<p style="text-align: left;">左揃え</p>
								<figure style="text-align: center;">中央揃え<img class="alignnone size-medium wp-image-26" src="https://placehold.jp/600x200.png" alt="テスト用です。"></figure>
								<p style="text-align: right;">右揃え</p><a href="/news/17/">リンク</a>
								<del>打消し線</del>
								<hr><span style="color: #33cccc;">カラーフォント</span>テキストとしてペースト
								<p style="padding-left: 40px;">インデント</p>

								<div class="youtube"><iframe src="https://www.youtube.com/embed/4ytk_OgM9Dc" allowfullscreen="allowfullscreen" width="560" height="315" frameborder="0"></iframe></div>

								<div class="googlemap"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.171597490688!2d139.70870861525918!3d35.69739468019065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cc2c9de75ad%3A0xd3b769694c085d4!2z5pel5pys44OT44K544Kr5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1598422928478!5m2!1sja!2sjp" allowfullscreen="allowfullscreen" width="600" height="450" frameborder="0"></iframe></div>
							</div>
						</div>


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
