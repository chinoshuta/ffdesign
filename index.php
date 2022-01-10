<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>FF Design(ふふデザイン)</title>
    <meta name="description" content="" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
    <div id="head">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" id="header_logo">
        <ul>
            <li><a href="./">ホーム</a></li>
            <li><a href="#section_works">制作実績</a></li>
            <li><a href="#section_price">料金</a></li>
            <li><a href="#section_about">プロフィール</a></li>
            <li><a href="#section_contact">お問い合わせ</a></li>
        </ul>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/images/header.jpg" id="header_img">

    <div id="section_works">
        <h3>WORKS</h3>
        <br>制作実績
        <ul class="slider">
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/works_01.png" class="works_img"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/works_02.png" class="works_img"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/works_03.png" class="works_img"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/works_04.png" class="works_img"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/works_05.png" class="works_img"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/works_06.png" class="works_img"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/works_07.png" class="works_img"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/works_08.png" class="works_img"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/works_09.png" class="works_img"></li>
        </ul>
        <a href="#">
            <div class="button btn-grd">
                詳しく見る
            </div>
        </a>
    </div>

    <div id="section_price">
        <div id="price_contents">
            <img src="<?php echo get_template_directory_uri(); ?>/images/price_img.jpg" id="price_img">
            <p class="title">PRICE</p>
            制作価格
            <br><br><br>
            <p class="font-middle">
                ・制作依頼価格
                <br>・制作の流れ
            </p>
            <br><br><br>
            <a href="#">
                <div class="button btn-wht">
                    詳しくはこちら
                </div>
            </a>
        </div>
    </div>

    <div id="section_about">
        <div id="about_contents">
            <div id="about_right">
                <h3>ABOUT</h3>
                <br>わたしについて
                <div id="about_profile">
                    WEBデザイナー
                    <br>古川 千晶
                    <br>CHIAKI FURUKAWA
                    <br>マグマシティ鹿児島県出身／東京都在住
                    <br>
                    <div class="button btn-grd" style="float:right;">
                        プロフィールはこちら
                    </div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" id="profile_img">
        </div>
    </div>

    <div id="section_contact">
        <p class="title">お問い合わせ</p>
        <br>
        <p>どんな事でもお気軽にご相談ください<br>
            2営業日以内にメールにて返信をさせていただきます
        </p>
        <?php echo do_shortcode('[contact-form-7 id="15" title="コンタクトフォーム 1"]'); ?>
    </div>

    <div id="footer_menu">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_black.png" id="header_logo"
            class="footer_logo">
        <a href="#head">ホーム</a>　／　<a href="#section_works">制作実績</a>　／　<a href="#section_price">料金</a>　／　<a
            href="#section_about">プロフィール</a>　／　<a href="#section_contact">お問い合わせ</a>　／　<a href="#">プライバシーポリシー</a>
    </div>

    <div id="footer">
        Copyright©FFDesign
    </div>

</body>
<script type="text/javascript">
$('.slider').slick({
    slidesToShow: 3,
    autoplay: true
    // centerMode: true,
    // focusOnSelect: true
});
</script>

</html>