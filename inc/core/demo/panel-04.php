<div <?= $options['selectNotification'] == 'notification' ? 'class="n-b-w-f-body n-b-w-f-num-04 selected-n-b-w" style="background:' . $options['style']['background-02'] . ' !important"' : 'class="n-b-w-f-body n-b-w-f-num-04" style="display: none;background:' . $options['style']['background-02'] . ' !important"' ?>>
    <div class="n-b-w-f-close"><span class="n-b-w-f-close-icon"></span></div>
    <div class="n-b-w-f-panel-body" style="width:<?= $options['style']['width'] ?>px;background:<?= $options['style']['background-01'] ?> !important">
        <div class="n-b-w-f-right">
            <div class="n-b-w-f-body-img">
                <img src="<?= $plugin_path ?>../template/images/bell.jpg" id="blah" alt="">
            </div>
            <div class="n-b-w-f-title"
                 id="title_product"><?= isset($options['title_product']) && $options['title_product'] != '' ? $options['title_product'] : 'آیا تمایل دارید از تخفیف های ما با خبر شوید' ?></div>
        </div>
        <div class="n-b-w-f-left" id="ok-canel">
            <span id="n-b-w-f-button-cancel"><?= isset($options['ok']) && $options['ok'] != '' ? $options['cancel'] : 'شاید بعدا' ?></span>
            <a href="<?= $options['ok_link'] ?>"
               id="n-b-w-f-button-ok"><?= isset($options['cancel']) && $options['cancel'] != '' ? $options['ok'] : 'بله حتما' ?></a>
        </div>
    </div>
</div>