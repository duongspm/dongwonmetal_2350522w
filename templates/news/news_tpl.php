<div class="title-main"><span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span></div>
<div class="content-main row news__list">
    <?php if(!empty($news)) { foreach($news as $k => $v) { ?>
    <div class="news__item animate__ wow animate__zoomIn animated">
        <a class="news__img text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
            <div class="scale-img effect10">
                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '425x270x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
            </div>
        </a>
        <div class="news__content">
            <h3 class="news__name">
                <a class="text-decoration-none text-split transition" href="<?=$v[$sluglang]?>"
                    title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
            </h3>
            <p class="news__time"><?=ngaydang?>: <?=date("d/m/Y h:i A",$v['date_created'])?></p>
            <div class="news__desc"><?=$v['desc'.$lang]?></div>
        </div>
    </div>
    <?php } } else { ?>
    <div class="col-12">
        <div class="alert alert-warning w-100" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>