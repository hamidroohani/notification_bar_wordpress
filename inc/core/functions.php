<?php
/**
 * Created by PhpStorm.
 * User: Pc2
 * Date: 5/29/2019
 * Time: 11:47 AM
 */
function load_scripts_n_b_w(){
    wp_enqueue_style( 'notif_b_wp_admin_css', plugins_url('/../template/css/global.css', __FILE__) );
    wp_enqueue_style( 'notif_b_wp_admin_table_css', plugins_url('/../template/css/notif-1.css', __FILE__) );
    wp_enqueue_style( 'notif_b_wp_admin_config', plugins_url('/../template/css/configure.css', __FILE__) );

    wp_enqueue_script( 'notif_b_script_admin_index', plugins_url( '/../template/js/index.js', __FILE__ ) );

    wp_localize_script( 'notif_b_script_admin_index', 'nbwSetting', ['nbwSetting' => get_option('notification_bar_wordpress') !== false ? get_option('notification_bar_wordpress') : [] ]);

 // Enqueued script with localized data.
 wp_enqueue_script( 'notif_b_script_admin_index' );
}

add_action( 'init', 'load_scripts_n_b_w' );

function notifcations($options)
{
    $plugin_path = plugin_dir_url(__FILE__);
    if ($options['selectNotification'] != "none") {
        $title_product = $options['title-product'];
        $percent = $options['percent'];
        $price = $options['price'];
        $button_title = $options['button-title'];
        $button_link = $options['button-link'];
        $telegram = $options['telegram'];
        $instagram = $options['instagram'];
        $facebook = $options['facebook'];
        $twitter = $options['twitter'];
        $youtube = $options['youtube'];
        $ok = $options['ok'];
        $ok_link = $options['ok-link'];
        $cancel = $options['cancel'];
        $width = $options['width'];
        switch ($options['selectNotification']) {
            case "introduce_product" :
                ?>
                <div class="n-b-w-f-body n-b-w-f-num-01 n-b-w-f-insite selected-n-b-w" <?= $width ? 'style="width: ' . $width . 'px"' : ''?> >
                    <div class="n-b-w-f-right">
                        <div class="n-b-w-f-body-per">
                            <span class="n-b-w-f-per" id="percent-parent"><?= $percent ? '<span id="percent">' . $percent .'</span> % تخفیف</span>' : ''?>
                            <img src="<?= $plugin_path ?>../template/images/2980.jpg" id="blah" alt="">
                        </div>
                        <div class="n-b-w-f-title" id="title-product"><?= $title_product ?></div>
                        <div class="n-b-w-f-body-price">
                            <span class="n-b-w-f-price" id="price"><?= $price ?></span>
                        </div>
                    </div>
                    <div class="n-b-w-f-left">
                        <a href="<?= $button_link ?>" class="n-b-w-f-button" id="button-title"><?= $button_title ?></a>
                    </div>
                </div>
                <?php
                break;
            case "day_counter":
                ?>
                <div class="n-b-w-f-body n-b-w-f-num-02 n-b-w-f-insite">
                    <div class="n-b-w-f-right">
                        <div class="n-b-w-f-title" id="title-product"><?= $title_product ?></div>
                    </div>
                    <div class="n-b-w-f-left">
                        <div class="n-b-w-f-counter">
                            <div class="n-b-w-f-days n-b-w-f-counter-panel">
                                <span class="n-b-w-f-int">23</span>
                                <span class="n-b-w-f-str">روز</span>
                            </div>
                            <div class="n-b-w-f-hours n-b-w-f-counter-panel">
                                <span class="n-b-w-f-int">11</span>
                                <span class="n-b-w-f-str">ساعت</span>
                            </div>
                            <div class="n-b-w-f-minuet n-b-w-f-counter-panel">
                                <span class="n-b-w-f-int">08</span>
                                <span class="n-b-w-f-str">دقیقه</span>
                            </div>
                            <div class="n-b-w-f-second n-b-w-f-counter-panel">
                                <span class="n-b-w-f-int">23</span>
                                <span class="n-b-w-f-str">ثانیه</span>
                            </div>
                        </div>
                        <span class="n-b-w-f-button" id="button-title">تست</span>
                    </div>
                </div>
                <?php
                break;
            case "social":
                ?>
                <div class="n-b-w-f-body n-b-w-f-num-03 n-b-w-f-insite">
                    <div class="n-b-w-f-center">
                        <div class="n-b-w-f-title" id="title-product">ما را در شبکه های اجتماعی دنبال کنید :</div>
                        <a href="https://www.facebook.com/<?= $facebook ?>" id="facebook" <?= $facebook ? '' : 'style="display: none"' ?> target="_blank"><img
                                    src="<?= $plugin_path ?>../template/images/facebook.svg" alt=""></a>
                        <a href="https://t.me/<?= $telegram ?>" id="telegram" <?= $telegram ? '' : 'style="display: none"' ?> target="_blank"><img
                                    src="<?= $plugin_path ?>../template/images/telegram.svg" alt=""></a>
                        <a href="https://www.youtube.com/channel/<?= $youtube ?>" id="youtube" <?= $youtube ? '' : 'style="display: none"' ?> target="_blank"><img
                                    src="<?= $plugin_path ?>../template/images/youtube.svg" alt=""></a>
                        <a href="https://twitter.com/<?= $twitter ?>" id="twitter" <?= $twitter ? '' : 'style="display: none"' ?> target="_blank"><img
                                    src="<?= $plugin_path ?>../template/images/twitter.svg" alt=""></a>
                        <a href="https://www.instagram.com/<?= $instagram ?>" id="instagram" <?= $instagram ? '' : 'style="display: none"' ?> target="_blank"><img
                                    src="<?= $plugin_path ?>../template/images/instagram.svg" alt=""></a>
                    </div>
                </div>
                <?php
                break;
            case "notification":
                ?>
                <div class="n-b-w-f-body n-b-w-f-num-04 n-b-w-f-insite" <?= $width ? 'style="width: ' . $width . 'px"' : ''?>>
                    <div class="n-b-w-f-right">
                        <div class="n-b-w-f-body-img">
                            <img src="<?= $plugin_path ?>../template/images/bell.jpg" id="blah" alt="">
                        </div>
                        <div class="n-b-w-f-title" id="title-product"><?= $title_product ?></div>
                    </div>
                    <div class="n-b-w-f-left" id="ok-canel">
                        <span id="n-b-w-f-button-cancel"><?= $cancel ?></span>
                        <a href="<?= $ok_link ?>" id="n-b-w-f-button-ok"><?= $ok ?></a>
                    </div>
                </div>
                <?php
                break;
        }
    }
}

function html_notif()
{
    $options = (get_option("notification_bar_wordpress")) ? get_option("notification_bar_wordpress") : [];
    $options = (is_serialized($options)) ? unserialize($options) : $options;
    notifcations($options);
}

add_action("wp_footer", "html_notif");