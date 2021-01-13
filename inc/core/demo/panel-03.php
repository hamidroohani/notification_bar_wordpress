<div <?= $options['selectNotification'] == 'social' ? 'class="n-b-w-f-body n-b-w-f-num-03 selected-n-b-w" style="background:' . $options['style']['background-02'] . ' !important"' : 'class="n-b-w-f-body n-b-w-f-num-03" style="display: none;background:' . $options['style']['background-02'] . ' !important"' ?>>
    <div class="n-b-w-f-close"><span class="n-b-w-f-close-icon"></span></div>
    <div class="n-b-w-f-panel-body" style="width:<?= $options['style']['width'] ?>px;background:<?= $options['style']['background-01'] ?> !important">
        <div class="n-b-w-f-center">
            <div class="n-b-w-f-title"
                 id="title_product"><?= isset($options['title_product']) && $options['title_product'] != '' ? $options['title_product'] : 'ما را در شبکه های اجتماعی دنبال کنید :' ?></div>
            <a href=""
               id="facebook" <?= (isset($options['facebook']) && $options['facebook'] != '') ? '' : 'style="display: none"' ?> ><img
                    src="<?= $plugin_path ?>../template/images/facebook.svg" alt=""></a>
            <a href=""
               id="telegram" <?= (isset($options['telegram']) && $options['telegram'] != '') ? '' : 'style="display: none"' ?> ><img
                    src="<?= $plugin_path ?>../template/images/telegram.svg" alt=""></a>
            <a href=""
               id="youtube" <?= (isset($options['youtube']) && $options['youtube'] != '') ? '' : 'style="display: none"' ?> ><img
                    src="<?= $plugin_path ?>../template/images/youtube.svg" alt=""></a>
            <a href=""
               id="twitter" <?= (isset($options['twitter']) && $options['twitter'] != '') ? '' : 'style="display: none"' ?> ><img
                    src="<?= $plugin_path ?>../template/images/twitter.svg" alt=""></a>
            <a href=""
               id="instagram" <?= (isset($options['instagram']) && $options['instagram'] != '') ? '' : 'style="display: none"' ?> ><img
                    src="<?= $plugin_path ?>../template/images/instagram.svg" alt=""></a>
        </div>
    </div>
</div>