<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="logo-mmenu">
            <a href="" title="<?=trangchu?>">
                <?=$func->getImage(['sizes' => '200x55x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
        </div>

        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>"
                    onkeypress="doEnter(event,'keyword-res');" />
                <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
            </div>
        </div>

    </div>

    <nav id="menu">

        <ul>

            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href=""
                    title="<?=trangchu?>"><?=trangchu?></a></li>
            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition menu-line" href="gioi-thieu"
                    title="Về chúng tôi">Về chúng tôi</a></li>
            <li>
                <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition" href="san-pham"
                    title="Sản phẩm">Sản phẩm</a>
                <?php if(count($productlist)) { ?>
                <ul>
                    <?php foreach($productlist as $klist => $vlist) {?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>

                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li>
                <a class="has-child <?php if($com=='dich-vu') echo 'active'; ?> transition" href="dich-vu"
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
                <a class="has-child <?php if($com=='bang-gia') echo 'active'; ?> transition" href="bang-gia"
                    title="Bảng giá">Bảng giá</a>
                <?php if(count($banggialist)) { ?>
                <ul>
                    <?php foreach($banggialist as $klist => $vlist) { ?>
                    <li>
                        <a class="has-child " title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu-line" href="lien-he"
                    title="<?=lienhe?>"><?=lienhe?></a></li>
        </ul>
    </nav>
</div>