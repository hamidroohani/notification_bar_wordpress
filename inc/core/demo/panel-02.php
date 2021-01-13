<div <?= $options['selectNotification'] == 'day_counter' ? 'class="n-b-w-f-body n-b-w-f-num-02 selected-n-b-w" style="background:' . $options['style']['background-02'] . ' !important"' : 'class="n-b-w-f-body n-b-w-f-num-02" style="display: none;background:' . $options['style']['background-02'] . ' !important"' ?>>
    <div class="n-b-w-f-close"><span class="n-b-w-f-close-icon"></span></div>
    <div class="n-b-w-f-panel-body" style="width:<?= $options['style']['width'] ?>px;background:<?= $options['style']['background-01'] ?> !important">
        <div class="n-b-w-f-right">
            <div class="n-b-w-f-title"
                 id="title_product"><?= isset($options['title_product']) && $options['title_product'] != '' ? $options['title_product'] : 'تایمر ها را با طراحی دلخواه ایجاد کنید (تاریخ شمسی)' ?>
            </div>
        </div>
        <div class="n-b-w-f-left">
            <div class="n-b-w-f-counter">
                <div class="flipper" data-reverse="true"
                     data-datetime="<?= $options['timestamp'] ? $options['timestamp'] : '2025-08-05 00:00:00' ?>"
                     data-template="ddd|HH|ii|ss"
                     data-labels="روز|ساعت|دقیقه|ثانیه" id="br_notif_myFlipper"></div>
            </div>
            <span class="n-b-w-f-button"
                  id="button_title"><?= isset($options['button_title']) && $options['button_title'] != '' ? $options['button_title'] : 'تست' ?></span>
        </div>
    </div>
</div>