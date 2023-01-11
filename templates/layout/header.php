<div class="header">
    <div class="wrapper">

        <div class="headerr">
            <div class="header__left">
                <div class="header__info-item">
                    <div class="header__info--logo">
                        <img src="assets/images/images/icon-clock.png" alt="">
                    </div>
                    <?php if(!empty($opentime)){?>
                    <span>
                        Giờ mở cửa: <?=$opentime['name'.$lang]?>
                    </span>
                    <?php }?>
                </div>
                <div class="header__info-item">
                    <div class="header__info--logo">
                        <img src="assets/images/images/icon-phone.png" alt="">
                    </div>
                    <span>
                        Hotline: <a class="text-decoration-none"
                            href="tel:<?=$func->formatPhone($optsetting['phone'])?>"><?=$func->formatPhone($optsetting['phone'])?></a>
                    </span>
                </div>
                <div class="header__info-item">
                    <div class="header__info--logo">
                        <img src="assets/images/images/icon-email.png" alt="">
                    </div>
                    <span>
                        Email:
                        <?=$optsetting['email']?>
                    </span>
                </div>
            </div>
            <div class="header__right">
                <div class="header__social">
                    <?php if(!empty($social)){foreach($social as $v){?>
                    <a class="social-item" href="<?=$v['link']?>">
                        <?=$func->getImage(['class' => '', 'sizes' => '21x17x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                    </a>
                    <?php }}?>
                </div>
            </div>
        </div>
    </div>
</div>