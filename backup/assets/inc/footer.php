<footer class="footer">
	<div class="container">
		<div class="footer__map mb-5 wow fadeInUp">
			<div class="dnfix__thumb">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.171420474734!2d139.70870861555113!3d35.697399036691955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188de9417cfe37%3A0xcea426e6dade82c5!2zS0RY5paw5a6_5YWt5LiB55uu44OT44Or!5e0!3m2!1sen!2s!4v1624525155574!5m2!1sja!2s" style="border:0;" allowfullscreen="" loading="lazy" width="542" height="332"></iframe>
			</div>
		</div>

		<div class="row mb-5 pb-2">
			<div class="col-lg-6 wow fadeInLeft mb-4 mb-lg-0">
				<div class="footer__item text-center text-lg-start">
					<div class="footer__logo mb-4">
						<img src="/<?= $dir ?>/assets/images/footer-logo.png" alt="">
					</div>
					<div class="ps-md-5">
                        <p class="mb-4">〒<?= $init['clinic']['postal'].'<br>'.$init['clinic']['address'].$init['clinic']['address_2'] ?></p>

						<div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
							<a href="tel:<?= $init['clinic']['tel_num'] ?>" class="btn btn-secondary -large is-tel"><span> <i class="icon-phone -white"></i><?= $init['clinic']['tel_num'] ?></span></a>
							<a href="" class="btn btn-primary -large is-web"><span>WEB予約はこちら</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight">
				<div class="footer__item">
					<div class="schedule">
                        <table class="table-schedule mb-3">
                            <thead>
                            <tr>
                                <th>診療時間</th>
                                <th>月</th>
                                <th>火</th>
                                <th>水</th>
                                <th>木</th>
                                <th>金</th>
                                <th>土</th>
                                <th>日</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>09:00～12:30</td>
                                <td>●</td>
                                <td>●</td>
                                <td>／</td>
                                <td>●</td>
                                <td>●</td>
                                <td>／</td>
                                <td>●</td>
                            </tr>
                            <tr>
                                <td>14:00～18:00</td>
                                <td>●</td>
                                <td>●</td>
                                <td>／</td>
                                <td>●</td>
                                <td>●</td>
                                <td>／</td>
                                <td>●</td>
                            </tr>
                            </tbody>

                        </table>
                        <div class="schedule__text text-end">
                        	休診日：日・祝日 ★：土曜は隔週での診療です。
                        </div>
                    </div>
				</div>
			</div>
		</div>

	<ul class="el__socical wow fadeInUp">
		<li><a href="<?= $init['clinic']['line'] ?>" class="is-line"><i class="iconbg-line-circle"></i></a></li>
		<li><a href="<?= $init['clinic']['instagram'] ?>" class="is-web"><i class="iconbg-instagram-circle"></i></a></li>
		<li><a href="<?= $init['clinic']['twitter'] ?>" class="is-web"><i class="iconbg-twitter-circle"></i></a></li>
	</ul>

	<ul class="ul-list mb-5 wow fadeInUp">
		<li><a href="/<?= $dir ?>">トップ</a></li>
		<li><a href="/<?= $dir ?>/services/">診療案内 </a></li>
		<li><a href="/<?= $dir ?>/staff/">院長・スタッフ </a></li>
		<li><a href="/<?= $dir ?>/facilities/">院内紹介 </a></li>
        <li><a href="/<?= $dir ?>/equipments/">設備紹介</a></li>
		<li><a href="/<?= $dir ?>/access/">アクセス </a></li>
		<li><a href="/<?= $dir ?>/blog/">ブログ</a></li>
	</ul>

	<div class="copyright text-center"><?= $init['clinic']['copyright'] ?></div>

	</div>
</footer>

<div class="back-to-top"><i class="icon-top"></i></div>

<nav id="menu__mobile" class="nav__mobile">
  <div class="nav__mobile__header">
  	<div class="nav__mobile__logo">
      <a href="index.html">
      	<img src="/<?= $dir ?>/assets/images/logo-mb-horizontal.png" alt="">
      </a>
    </div>

    <div class="ms-auto">
        <a href="#menu__mobile" class="mburger">
        <span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span>
        </a>
    </div>
  </div>
  <div class="nav__mobile__content">
    <ul class="nav__mobile--ul">
        <?php include(ROOTPATH."assets/inc/main_nav.php"); ?>
    </ul>

    <div class="text-center">
      <div class="schedule mb-4">
        <table class="table-schedule">
            <thead>
            <tr>
                <th></th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
                <th>日</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>09:00～12:30</td>
                <td>●</td>
                <td>●</td>
                <td>／</td>
                <td>●</td>
                <td>●</td>
                <td>／</td>
                <td>●</td>
            </tr>
            <tr>
                <td>14:00～18:00</td>
                <td>●</td>
                <td>●</td>
                <td>／</td>
                <td>●</td>
                <td>●</td>
                <td>／</td>
                <td>●</td>
            </tr>
            </tbody>

        </table>
        <div class="schedule__text text-end">
        	休診日：水曜・土曜・祝日
        </div>
  		</div>

    	<div class="d-flex justify-content-center">
        <div class="el__group">
        	<a href="tel:<?= $init['clinic']['tel_num'] ?>" class="el__phone is-tel"><i class="icon-phone"></i><?= $init['clinic']['tel_num'] ?></a>
        	<div class="el__address mb-5 pb-2">
        		<p>〒<?= $init['clinic']['postal'] ?></p>
        		<p><?= $init['clinic']['address'] ?></p>
        		<p><?= $init['clinic']['address_2'] ?></p>
        	</div>
        	<ul class="el__socical">
        		<li><a href="<?= $init['clinic']['line'] ?>" class="is-line"><i class="icon-line"></i></a></li>
        		<li><a href="<?= $init['clinic']['instagram'] ?>" class="is-web"><i class="icon-instagram"></i></a></li>
        		<li><a href="<?= $init['clinic']['twitter'] ?>" class="is-web"><i class="icon-twitter"></i></a></li>
        	</ul>
      	</div>
    	</div>
	</div>
</div>

</nav>



<?php if( $page_curent == 'index'):?>
    <div class="fixed-contact fixed js-click-idscroll">
      <div class="fixed-contact__item mb-md-1 is-web js-fixed-item-toggle">
        <i class="icon-calendar"></i><span class="text-combine">WEB</span><span class="text-vertical -fix">診療予約</span>

        <div class="fixed-contact__item--hide -contact">

            <p class="el__tel"><span>tel.</span><a href="tel:<?= $init['clinic']['tel_num'] ?>"><?= $init['clinic']['tel_num'] ?></a></p>
            <div class="el__table">
                <table class="table-schedule mb-3">
                    <thead>
                    <tr>
                        <th>診療時間</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                        <th>日</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>09:00～12:30</td>
                        <td>●</td>
                        <td>●</td>
                        <td>／</td>
                        <td>●</td>
                        <td>●</td>
                        <td>／</td>
                        <td>●</td>
                    </tr>
                    <tr>
                        <td>14:00～18:00</td>
                        <td>●</td>
                        <td>●</td>
                        <td>／</td>
                        <td>●</td>
                        <td>●</td>
                        <td>／</td>
                        <td>●</td>
                    </tr>
                    </tbody>

                </table>
                <div class="schedule__text text-end">
                    休診日：日・祝日 ★：土曜は隔週での診療です。
                </div>
            </div>
        </div>

      </div>

      <a class="fixed-contact__item -s2 is-web d-none d-lg-block" href="#home-top">
        <i class="icon-clock"></i>
        <span class="text-vertical">診療時間表</span>
      </a>

      <a class="fixed-contact__item -s2 is-web d-lg-none" href="tel:<?= $init['clinic']['tel_num'] ?>">
        <i class="icon-phone -white"></i>
        <span class="text-vertical">電話をかける</span>
      </a>

    </div>
<?php else:?>

    <div class="fixed-contact style2 fixed">
        <div class="fixed-contact__item mb-md-1 is-web js-fixed-item-toggle" href="#" target="_blank">
            <i class="icon-calendar"></i>WEB<br>診療予約

            <div class="fixed-contact__item--hide -contact">

                <p class="el__tel"><span>tel.</span><a href="tel:<?= $init['clinic']['tel_num'] ?>"><?= $init['clinic']['tel_num'] ?></a></p>
                <div class="el__table">
                    <table class="table-schedule mb-3">
                        <thead>
                        <tr>
                            <th>診療時間</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th>土</th>
                            <th>日</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>09:00～12:30</td>
                            <td>●</td>
                            <td>●</td>
                            <td>／</td>
                            <td>●</td>
                            <td>●</td>
                            <td>／</td>
                            <td>●</td>
                        </tr>
                        <tr>
                            <td>14:00～18:00</td>
                            <td>●</td>
                            <td>●</td>
                            <td>／</td>
                            <td>●</td>
                            <td>●</td>
                            <td>／</td>
                            <td>●</td>
                        </tr>
                        </tbody>

                    </table>
                    <div class="schedule__text text-end">
                        休診日：日・祝日 ★：土曜は隔週での診療です。
                    </div>
                </div>
            </div>
        </div>
        <a class="fixed-contact__item -s3 mb-md-1 is-line" href="<?= $init['clinic']['line'] ?>">
            <i class="icon-line -white"></i>LINE<br>診療予約
        </a>

        <a class="fixed-contact__item -s2 is-web" href="/<?= $dir ?>/#home-top" target="_blank">
            <i class="icon-clock"></i>診療<br>時間表
        </a>
    </div>
<?php endif;?>