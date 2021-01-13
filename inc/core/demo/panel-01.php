<div <?= $options['selectNotification'] == 'introduce_product' ? 'class="n-b-w-f-body n-b-w-f-num-01 selected-n-b-w" style="background:' . $options['style']['background-02'] . ' !important"' : 'class="n-b-w-f-body n-b-w-f-num-01" style="display: none;background:' . $options['style']['background-02'] . ' !important"' ?>>
    <div class="n-b-w-f-close"><span class="n-b-w-f-close-icon"></span></div>
    <div class="n-b-w-f-panel-body"
         style="width:<?= $options['style']['width'] ?>px;background:<?= $options['style']['background-01'] ?> !important">
        <div class="n-b-w-f-right">
            <div class="n-b-w-f-body-per">
                        <span class="n-b-w-f-per" id="percent-parent"><span
                                    id="percent"><?= isset($options['percent']) && $options['percent'] != '' ? $options['percent'] : '50' ?></span> % تخفیف</span>
                <img src="<?= (isset($options['image']) && $options['image'] != "") ? $options['image'] : $plugin_path . "../template/images/2980.jpg" ?>"
                     id="blah" alt="">
            </div>
            <div class="n-b-w-f-title"
                 id="title_product"><?= isset($options['title_product']) && $options['title_product'] != '' ? $options['title_product'] : 'محصول دارای تخفیف' ?></div>
            <div class="n-b-w-f-body-price">
                        <span class="n-b-w-f-price"
                              id="price"><?= isset($options['price']) && $options['price'] != '' ? $options['price'] : '39,000 تومان' ?></span>
            </div>
        </div>
        <div class="n-b-w-f-left">
            <a href="#" class="n-b-w-f-button"
               id="button_title"><?= isset($options['button_title']) && $options['button_title'] != '' ? $options['button_title'] : 'خرید محصول' ?></a>
        </div>
    </div>
</div>