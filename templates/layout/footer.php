<div class="footer pd-top">
    <div class="wrapper">
        <div class="footerr">
            <div class="footer-item footer-item1">
                <div class="footer__logo">
                    <a href="" title="<?=trangchu?>">
                        <?=$func->getImage(['sizes' => '240x73x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logofooter['photo'], 'alt' => $setting['name'.$lang]])?>
                    </a>
                </div>
                <div class="footer-name">
                    <span><?=$footer['name'.$lang]?></span>
                </div>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
            </div>



        </div>
    </div>
</div>
<div class="copyright">
    <div class="wrapper copyrightt">
        <div class="copyright-left">
            <span>Copyright © All right reserved | Designed by: NINA Co.,Ltd
            </span>
        </div>
        <div class="copyright-right">
            <?php if(!empty($social)){?>
            <div class="footer-social">
                <?php foreach($social as $v) {?>
                <a href="<?=$v['link']?>" class="social-item text-decoration-none">
                    <?=$func->getImage(['sizes' => '58x58x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                </a>
                <?php }?>
            </div>
            <?php }?>

        </div>
    </div>
</div>

<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>