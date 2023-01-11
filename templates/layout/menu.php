<div class="menu">
    <div class="wrap-content menuuu">
        <div class="menu__logo">
            <a href="" title="<?=trangchu?>">
                <?=$func->getImage(['sizes' => '85x65x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
            <a href="" title="<?=trangchu?>">
                <?=$func->getImage(['sizes' => '204x44x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $bannerheader['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
        </div>
        <ul class="menu-list">

            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition menu--line" href=""
                    title="<?=trangchu?>"><?=trangchu?></a></li>

            <li>
                <a class="has-child <?php if($com=='dich-vu') echo 'active'; ?> transition  menu--line" href="dich-vu"
                    title="Dịch vụ">Dịch vụ</a>
                <?php if(count($dichvulist)) { ?>
                <ul>
                    <?php foreach($dichvulist as $klist => $vlist) { ?>
                    <li>
                        <a class="has-child " title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>

            <li>
                <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition menu--line" href="san-pham"
                    title="Sản phẩm">Sản phẩm</a>
                <?php if(count($productlist)) { ?>
                <ul>
                    <?php foreach($productlist as $klist => $vlist) {
                        $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                        <?php if(!empty($spcat)) { ?>
                        <ul>
                            <?php foreach($spcat as $kcat => $vcat) {?>
                            <li>
                                <a class="has-child transition" title="<?=$vcat['name'.$lang]?>"
                                    href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>

            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition menu--line " href="tin-tuc"
                    title="Tin tức">Tin
                    tức</a>
            </li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu--line" href="lien-he"
                    title="Liên hệ">Liên
                    hệ</a></li>
        </ul>
        <div class="menu__search">
            <div class="search w-clear">
                <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
                <input type="text" id="keyword" placeholder="Search" onkeypress="doEnter(event,'keyword');" />
            </div>
        </div>
    </div>
</div>