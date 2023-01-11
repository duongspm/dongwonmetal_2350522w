<div class="datlich">
    <div class="wrapper">
        <div class="datlichh">
            <div class="datlich__left">
                <span class="datlich__heading">
                    đặt lịch ngay
                </span>
                <?php if(!empty($slogandangky)){?>
                <span class="datlich__title">
                    <?=$slogandangky['name'.$lang]?>
                </span>
                <?php }?>
            </div>
            <div class="datlich__right">
                <form class="validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="datlich__form">
                        <div class="datlich__form--left">
                            <div class="newsletter-input">
                                <input type="text" class="form-controld" id="fullname-newsletter"
                                    name="dataNewsletter[fullname]" placeholder="Họ và tên" required />
                                <div class="invalid-tooltip">Vui lòng nhập họ và tên</div>
                            </div>
                            <div class="newsletter-input">
                                <input type="number" class="form-controld"
                                    value="<?=(!empty($flash->has('phone'))) ? $flash->get('phone') : ''?>"
                                    id="phone-newsletter" name="dataNewsletter[phone]" placeholder="Số điện thoại"
                                    required />
                                <div class="invalid-tooltip">Vui lòng nhập số điện thoại</div>
                            </div>
                        </div>
                        <div class="datlich__form--right">
                            <div class="newsletter-input">
                                <textarea type="text" class="form-controldd" id="content-newsletter"
                                    name="dataNewsletter[content]" placeholder="Nội dung" required></textarea>
                                <div class="invalid-tooltip">Vui lòng nhập nội dung</div>
                            </div>
                            <div class="newsletter-button">
                                <input type="submit" class="btnd" name="submit-newsletter" value="ĐẶT LỊCH" disabled>
                                <input type="hidden" class="btn btn-sm btn-danger w-100"
                                    name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="about pd">
    <div class="wrapper">
        <?php if(!empty($about)){?>
        <div class="aboutt">
            <div class="about__left">
                <?php if(!empty($about[0])){?>
                <div class="about__right-img">

                    <a href="<?=$about[0][$sluglang]?>" title="<?=$about[0]['name'.$lang]?>"
                        class="about--img text-decoration-none">

                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '550x450x1', 'upload' => UPLOAD_NEWS_L, 'image' => $about[0]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                    </a>
                </div>
                <?php }?>

            </div>
            <div class="about__right">
                <div class="about__right--top">
                    <div class="about__title">
                        <img src="assets/images/images/abouttt.png" alt="">
                    </div>
                    <span class="about__name"><?=$setting['name'.$lang]?></span>
                    <span class="about__desc"><?=$about[0]['name'.$lang]?></span>
                </div>

                <div class="about__content">
                    <span>
                        <?=$about[0]['desc'.$lang]?>
                    </span>
                </div>

                <div class="about__btn">
                    <a href="<?=$about[0][$sluglang]?>" title="<?=$about[0]['name'.$lang]?>"
                        class="button button--isi button--text-thick button--text-upper button--size-s"><span>Xem
                            Thêm</span></a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<div class="dichvu pd">
    <div class="wrapper">
        <div class="heading">
            <span class="heading__name"><?=$setting['name'.$lang]?></span>
            <div class="heading__middle">
                <span class="heading__before">
                    Dịch vụ
                </span>
                <span class="heading__after">
                    &nbsp;của chúng tôi
                </span>
            </div>
        </div>
        <div class="dichvu__list">
            <?php if (count($dichvu)) { ?>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:20" data-sm-items="2:20" data-md-items="3:20"
                data-lg-items="4:30" data-xlg-items="4:30" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="1"
                data-navtext="<img src='assets/images/page-prev.png'>|<img src='assets/images/page-next.png'>"
                data-navcontainer=".control-dichvu">
                <?php foreach ($dichvu as $v) { ?>
                <div>
                    <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>" class="dichvu__item">
                        <div class="dichvu__img effect10 scale-img">
                            <?= $func->getImage(['class' => 'w-100 lazy','isWatermark' => true, 'prefix' => 'product', 'sizes' => '275x330x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                        <div class="dichvu__content">
                            <div class="dichvu__name">
                                <span><?=$v['name'.$lang]?></span>
                            </div>
                            <div class="dichvu__icon">
                                <img src="assets/images/images/icon_service.png" alt="">
                            </div>

                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <div class="dichvu__xemthem">
            <a href="dich-vu" title="Dịch vụ" class="link link--io">Xem thêm dịch vụ [+]</a>
        </div>
    </div>
</div>
<div class="productnb pd">
    <div class="wrapper">
        <div class="heading">
            <span class="heading__name"><?=$setting['name'.$lang]?></span>
            <div class="heading__middle">
                <span class="heading__before">
                    sản phẩm
                </span>
                <span class="heading__after">
                    &nbsp;nổi bật
                </span>
            </div>
        </div>
        <?php if (!empty($productlist)) { ?>
        <div class="title-product-list text-center">
            <?php foreach ($productlist as $key => $vl) : ?>
            <div class="frame-prolist">
                <a class="text-decoration-none a-title-product" data-list="<?= $vl['id'] ?>">
                    <span>
                        <?= $vl['name' . $lang] ?>
                    </span>
                </a>
            </div>
            <?php endforeach ?>
        </div>
        <?php } ?>
        <div class="productnb__list">
            <div class="paging-product-list"></div>
        </div>
    </div>
</div>
<div class="thuonghieu pd">
    <div class="wrapper">
        <div class="thuonghieu__list">
            <?php if (count($thuonghieu)) { ?>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="3:20" data-sm-items="4:20" data-md-items="5:20"
                data-lg-items="6:23" data-xlg-items="6:23" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="1"
                data-navtext="<img src='assets/images/page-prev.png'>|<img src='assets/images/page-next.png'>"
                data-navcontainer=".control-thuonghieu">
                <?php foreach ($thuonghieu as $v) { ?>
                <div>
                    <a href="<?=$v['link']?>" title="<?=$v['name'.$lang]?>" class="thuonghieu__item">
                        <div class="thuonghieu__img effect10 scale-img">
                            <?= $func->getImage(['class' => 'w-100 lazy', 'sizes' => '180x92x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="duan pd">
    <div class="wrapper">
        <div class="heading">
            <span class="heading__name"><?=$setting['name'.$lang]?></span>
            <div class="heading__middle">
                <span class="heading__before">
                    Dự án
                </span>
                <span class="heading__after">
                    &nbsp;thi công
                </span>
            </div>
        </div>
        <?php if(!empty($duan)){?>
        <div class="duan__list">
            <?php for ($i=0; $i < 6; $i++) { ?>
            <?php if(!empty($duan[$i])){?>
            <div class="duan__item">
                <div class="duan__img">
                    <?= $func->getImage(['class' => 'w-100 lazy','isWatermark' => true, 'prefix' => 'product', 'sizes' => '390x390x1', 'upload' => UPLOAD_NEWS_L, 'image' => $duan[$i]['photo'], 'alt' => $duan[$i]['name' . $lang]]) ?>
                </div>
                <div class="duan__content">
                    <span class="duan__name">
                        <?=$duan[$i]['name'.$lang]?>
                    </span>
                    <div class="duan__line"></div>
                    <span class="duan__desc">
                        <?=$duan[$i]['desc'.$lang]?>
                    </span>

                    <a href="<?=$duan[$i][$sluglang]?>" title="<?=$duan[$i]['name'.$lang]?>"
                        class="duan__xemthem text-decoration-none">
                        xem thêm
                    </a>
                </div>
            </div>
            <?php }?>
            <?php }?>
        </div>
        <?php if(count($duan) > 6){?>
        <div class="duan--xemthem">
            <a href="du-an" title="Dự án" class="link link--io text-decoration-none">Xem thêm dự án [+]</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
        <?php } ?>
    </div>
</div>
<div class="blog pd">
    <div class="wrapper">
        <div class="heading">
            <span class="heading__name"><?=$setting['name'.$lang]?></span>
            <div class="heading__middle">
                <span class="heading__before">
                    tin tức
                </span>
                <span class="heading__after">
                    &nbsp;sự kiện
                </span>
            </div>
        </div>
        <div class="blog__list">
            <div class="blog__left">
                <?php if(!empty($newsnb[0])){?>
                <div class="blog__left--item">
                    <div class="blog__img scale-img effect10">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '580x420x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[0]['photo'], 'alt' => $newsnb[0]['name'.$lang]]) ?>
                    </div>
                    <a href="<?=$newsnb[0][$sluglang]?>" title="<?=$newsnb[0]['name'.$lang]?>"
                        class="text-decoration-none blog__content">
                        <span class="blog__left--name">
                            <?=$newsnb[0]['name'.$lang]?>
                        </span>
                        <div class="blog__date">
                            <div>
                                <img src="assets/images/images/icon-clock-blog.png" alt="">
                            </div>
                            <span><?=date("d/m/Y",$newsnb[0]['date_created'])?></span>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="blog__right">
                <?php if(!empty($newsnb)){?>
                <div class="slick__blog">
                    <?php for ($i=1; $i < count($newsnb); $i++) { ?>
                    <?php if(!empty($newsnb[$i])){?>
                    <div>
                        <a href="<?=$newsnb[$i][$sluglang]?>" class="text-decoration-none blog__right--item"
                            title="<?=$newsnb[$i]['name'.$lang]?>">
                            <div class="blog__right--img scale-img effect10">
                                <?= $func->getImage(['class' => 'w-100', 'sizes' => '163x120x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[$i]['photo'], 'alt' => $newsnb[$i]['name'.$lang]]) ?>
                            </div>
                            <div class="blog__right--content">
                                <span class="blog__right--name">
                                    <?=$newsnb[$i]['name'.$lang]?>
                                </span>
                                <span class="blog__right--desc">
                                    <?=$newsnb[$i]['desc'.$lang]?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                    <?php }?>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
<div class="feedback pd">
    <div class="wrapper">
        <div class="heading">
            <span class="heading__name"><?=$setting['name'.$lang]?></span>
            <div class="heading__middle">
                <span class="heading__before">
                    ý kiến
                </span>
                <span class="heading__after">
                    &nbsp;khách hàng
                </span>
            </div>
        </div>
        <div class="feedback__list">
            <?php if(!empty($feedback)) {?>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="2:25" data-md-items="2:25"
                data-lg-items="3:35" data-xlg-items="3:35" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".feedback-partner">
                <?php foreach($feedback as $v){?>
                <div class="feedback__item">
                    <div class="feedback__img scale-img effect10">
                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '125x125x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                    </div>
                    <div class="feedback__frame">
                        <div class="feedback__card">
                            <div class="feedback__card--name">
                                <span class="feedback__name cut_string1">
                                    - <?=$v['name'.$lang]?>
                                </span>
                                <span class="feedback__desc cut_string1">
                                    <?=$v['desc'.$lang]?>
                                </span>
                            </div>
                            <div class="feedback__content">
                                <div class="feedback--icon">
                                    <img src="assets/images/images/icon-feedback.png" alt="">
                                </div>
                                <span>
                                    <?=$v['content'.$lang]?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <?php }?>
        </div>
    </div>
</div>