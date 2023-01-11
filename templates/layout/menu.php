<div class="menu">
    <div class="wrap-content menuuu">
        <div class="menu__logo">
            <a href="" title="<?=trangchu?>">
                <?=$func->getImage(['sizes' => '335x100x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
        </div>
        <ul class="menu-list">

            <li>
                <a class="link link--metis <?php if($com=='gioi-thieu') echo 'active'; ?> transition " href="gioi-thieu"
                    title="Về chúng tôi">Về chúng tôi</a>
            </li>
            <li>
                <a class="link link--metis <?php if($com=='san-pham') echo 'active'; ?> transition" href="san-pham"
                    title="Sản phẩm">Sản
                    phẩm</a>
                <div class="has-childd"></div>
                <?php if(count($productlist)) { ?>
                <ul>
                    <?php foreach($productlist as $klist => $vlist) {?>
                    <li>
                        <a class=" transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li>
                <a class="link link--metis <?php if($com=='dich-vu') echo 'active'; ?> transition " href="dich-vu"
                    title="Dịch vụ">Dịch
                    vụ</a>
                <div class="has-childd"></div>
                <?php if(count($dichvulist)) { ?>
                <ul>
                    <?php foreach($dichvulist as $klist => $vlist) { ?>
                    <li>
                        <a class="" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>



            <li>
                <a class="link link--metis <?php if($com=='bang-gia') echo 'active'; ?> transition " href="bang-gia"
                    title="Bảng giá">Bảng giá</a>
                <div class="has-childd"></div>

                <?php if(count($banggialist)) { ?>
                <ul>
                    <?php foreach($banggialist as $klist => $vlist) { ?>
                    <li>
                        <a class="" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>

            <li><a class="link link--metis <?php if($com=='lien-he') echo 'active'; ?> transition" href="lien-he"
                    title="Liên hệ">Liên
                    hệ</a></li>
        </ul>
    </div>
</div>