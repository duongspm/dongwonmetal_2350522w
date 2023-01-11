<div class="dichvu mr-bottom">
    <div class="wrapper">
        <?php if (count($dichvu)) { ?>
        <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="2:10" data-md-items="2:10"
            data-lg-items="3:15" data-xlg-items="3:15" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0"
            data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0"
            data-nav="0" data-navtext="<img src='assets/images/page-prev.png'>|<img src='assets/images/page-next.png'>"
            data-navcontainer=".control-dichvu">
            <?php foreach ($dichvu as $v) { ?>
            <div>
                <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"
                    class="text-decoration-none dichvu__item animate__ wow animate__zoomIn animated">
                    <div class="dichvu__img effect10 scale-img">
                        <?= $func->getImage(['class' => 'w-100 lazy', 'sizes' => '425x270x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </div>
                    <div class="dichvu__content">
                        <span class="dichvu__name"><?=$v['name'.$lang]?></span>
                        <span class="dichvu__desc"><?=$v['desc'.$lang]?></span>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>
<div class="banner mr-bottom">
    <?php if (!empty($bannerr[0])) { ?>

    <div>
        <div class="banner__item text-decoration-none animate__ wow animate__zoomIn animated">
            <div class="scale-img">
                <?= $func->getImage(['class' => 'w-100 lazy', 'sizes' => '1366x197x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $bannerr[0]['photo'], 'alt' => $bannerr[0]['name' . $lang]]) ?>
            </div>
            <div class="banner__name">
                <span>
                    <?=$bannerr[0]['name' . $lang]?>
                </span>
            </div>
        </div>
    </div>

    <?php } ?>
</div>
<div class="blog mr-bottom">
    <div class="wrapper">
        <div class="blogg">
            <div class="blog__left">
                <?php if(!empty($newsnb[0])){?>
                <a href="<?=$newsnb[0][$sluglang]?>" title="<?=$newsnb[0]['name'.$lang]?>"
                    class="text-decoration-none blog__left--item animate__ wow animate__zoomIn animated">
                    <div class="blog__img scale-img effect10">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '425x270x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[0]['photo'], 'alt' => $newsnb[0]['name'.$lang]]) ?>
                    </div>
                    <div class="blog__content">
                        <span class="blog__name">
                            <?=$newsnb[0]['name'.$lang]?>
                        </span>
                        <span class="blog__desc">
                            <?=$newsnb[0]['desc'.$lang]?>
                        </span>
                    </div>
                </a>
                <?php }?>
            </div>
            <div class="blog__right ">
                <?php if(!empty($newsnb)){?>
                <?php for ($i=1; $i < 3; $i++) { ?>
                <?php if(!empty($newsnb[$i])){?>
                <div>
                    <a href="<?=$newsnb[$i][$sluglang]?>"
                        class="animate__ wow animate__zoomIn animated text-decoration-none blog__right--item"
                        title="<?=$newsnb[$i]['name'.$lang]?>">
                        <div class="blog__right--img scale-img effect10">
                            <?= $func->getImage(['class' => 'w-100', 'sizes' => '250x185x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[$i]['photo'], 'alt' => $newsnb[$i]['name'.$lang]]) ?>
                        </div>
                        <div class="blog__right--content">
                            <span class="blog__name">
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
                <?php } ?>
                <?php if(count($newsnb)>2){?>
                <div class="blog__xemthem">
                    <a href="tin-tuc" class="btn-f btn--slide-right">Xem thêm</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="lienhe">
    <div class="wrapper">
        <div class="lienhee">
            <div class="lienhe__left">
                <span class="lienhe__heading">
                    liên hệ cho chúng tôi
                </span>
                <div class="lienhe__map">
                    <?=htmlspecialchars_decode($optsetting['coords_iframe'])?>
                </div>
            </div>
            <div class="lienhe__right">
                <span class="lienhe__heading">
                    nhận thông tin
                </span>
                <div class="lienhe--form">
                    <form class="validation-newsletter" novalidate method="post" action=""
                        enctype="multipart/form-data">
                        <div class="lien__form">

                            <div class="newsletter-input">
                                <input type="text" class="form-controld" id="fullname-newsletter"
                                    name="dataNewsletter[fullname]" placeholder="Họ tên (*) " required />
                                <div class="invalid-tooltip">Vui lòng nhập họ và tên</div>
                            </div>
                            <div class="newsletter-input">
                                <input type="number" class="form-controld"
                                    value="<?=(!empty($flash->has('phone'))) ? $flash->get('phone') : ''?>"
                                    id="phone-newsletter" name="dataNewsletter[phone]" placeholder="Số điện thoại (*)"
                                    required />
                                <div class="invalid-tooltip">Vui lòng nhập số điện thoại</div>
                            </div>
                            <div class="newsletter-input">
                                <input type="email" class="form-controld"
                                    value="<?=(!empty($flash->has('phone'))) ? $flash->get('email') : ''?>"
                                    id="email-newsletter" name="dataNewsletter[email]" placeholder="Email (*)"
                                    required />
                                <div class="invalid-tooltip">Vui lòng nhập emai</div>
                            </div>

                            <div class="newsletter-input">
                                <textarea type="text" class="form-controldd" id="content-newsletter"
                                    name="dataNewsletter[content]" placeholder="Nội dung (*)" required></textarea>
                                <div class="invalid-tooltip">Vui lòng nhập nội dung</div>
                            </div>
                            <div class="newsletter-button">
                                <input type="submit" class="btnd" name="submit-newsletter" value="Gửi" disabled>
                                <input type="hidden" class="btn btn-sm btn-danger w-100"
                                    name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>