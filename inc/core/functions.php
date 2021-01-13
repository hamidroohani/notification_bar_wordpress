<?php
/**
 * Created by PhpStorm.
 * User: Pc2
 * Date: 5/29/2019
 * Time: 11:47 AM
 */
function load_scripts_n_b_w()
{
    wp_enqueue_style('notif_b_wp_admin_table_css', plugins_url('/../template/css/notif-1.css', __FILE__));
    wp_enqueue_style('notif_b_wp_admin_css', plugins_url('/../template/css/global.css', __FILE__));
    wp_enqueue_style('notif_b_wp_admin_config', plugins_url('/../template/css/configure.css', __FILE__), null, time());
    wp_enqueue_style('notif_b_wp_admin_select2', plugins_url('/../template/css/select2.css', __FILE__));
    wp_enqueue_style('notif_b_wp_admin_count-down', plugins_url('/../template/css/count-down.css', __FILE__));
    wp_enqueue_style('notif_b_wp_admin_bootstrap.min', plugins_url('/../template/css/bootstrap.min.css', __FILE__));
    wp_enqueue_style('notif_b_wp_admin_jquery.md.bootstrap.datetimepicker.style', plugins_url('/../template/css/jquery.md.bootstrap.datetimepicker.style.css', __FILE__));

    wp_enqueue_script('notif_b_script_admin_index', plugins_url('/../template/js/index.js', __FILE__), null, 1, true);
    wp_enqueue_script('notif_b_script_admin_select2', plugins_url('/../template/js/select2.js', __FILE__), null, 1, true);
    wp_enqueue_script('notif_b_script_admin_ImageUpload', plugins_url('/../template/js/ImageUpload.js', __FILE__), null, 1, true);
    wp_enqueue_script('notif_b_script_admin_jquery.flipper-responsive', plugins_url('/../template/js/jquery.flipper-responsive.js', __FILE__), null, 1, true);
    wp_enqueue_script('notif_b_script_admin_proper.min', plugins_url('/../template/js/proper.min.js', __FILE__), null, 1, true);
    wp_enqueue_script('notif_b_script_admin_bootstrap.min', plugins_url('/../template/js/bootstrap.min.js', __FILE__), null, 1, true);
    wp_enqueue_script('notif_b_script_admin_jquery.md.bootstrap.datetimepicker', plugins_url('/../template/js/jquery.md.bootstrap.datetimepicker.js', __FILE__), null, 1, true);
}

add_action('init', 'load_scripts_n_b_w');

function load_sites_n_b_w()
{
    wp_enqueue_style('notif_b_wp_site_css', plugins_url('/../template/css/just-site.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'load_sites_n_b_w');

function notifcations($options)
{
    $plugin_path = plugin_dir_url(__FILE__);
    if ($options['active'] != 1) return null;
    $options['show_in'] = is_serialized($options['show_in']) ? unserialize($options['show_in']) : $options['show_in'];
    $options['style'] = is_serialized($options['style']) ? unserialize($options['style']) : $options['style'];
    if (is_array($options['show_in']) && count($options['show_in']))
        if (!in_array(get_post_type(get_the_ID()), $options['show_in'])) return null;
    if ($options['selectNotification'] != "none") {
        switch ($options['selectNotification']) {
            case "introduce_product" :
                ?>
                <div class="n-b-w-f-body n-b-w-f-num-01 n-b-w-f-insite selected-n-b-w" <?= $options['style'] ? 'style="width: ' . $options['style']['width'] . 'px;background: ' . $options['style']['background-02'] . ' !important"' : '' ?> >
                    <div class="n-b-w-f-close"><span class="n-b-w-f-close-icon"></span></div>
                    <div class="n-b-w-f-panel-body" style="background: <?= $options['style']['background-01'] ?> !important;">
                        <div class="n-b-w-f-right">
                            <div class="n-b-w-f-body-per">
                            <span class="n-b-w-f-per"
                                  id="percent-parent"><?= $options['percent'] ? '<span id="percent">' . $options['percent'] . '</span> % تخفیف</span>' : '' ?>
                                <img src="<?= (isset($options['image']) && $options['image'] != "") ? $options['image'] : $plugin_path . "../template/images/2980.jpg" ?>"
                                     id="blah" alt="">
                            </div>
                            <div class="n-b-w-f-title" id="title_product"><?= $options['title_product'] ?></div>
                            <div class="n-b-w-f-body-price">
                                <span class="n-b-w-f-price" id="price"><?= $options['price'] ?></span>
                            </div>
                        </div>
                        <div class="n-b-w-f-left">
                            <a href="<?= $options['button_link'] ?>" class="n-b-w-f-button"
                               id="button_title"><?= $options['button_title'] ?></a>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case "day_counter":
                ?>
                <div class="n-b-w-f-body n-b-w-f-num-02 n-b-w-f-insite" <?= $options['style']['width'] ? 'style="width: ' . $options['style']['width'] . 'px;background: ' . $options['style']['background-02'] . ' !important"' : '' ?>>
                    <div class="n-b-w-f-close"><span class="n-b-w-f-close-icon"></span></div>
                    <div class="n-b-w-f-panel-body" style="background: <?= $options['style']['background-01'] ?> !important;">
                        <div class="n-b-w-f-right">
                            <div class="n-b-w-f-title" id="title_product"><?= $options['title_product'] ?></div>
                        </div>
                        <div class="n-b-w-f-left">
                            <div class="n-b-w-f-counter">
                                <div class="flipper" data-reverse="true"
                                     data-datetime="<?= $options['timestamp'] ? $options['timestamp'] : '2025-08-05 00:00:00' ?>"
                                     data-template="ddd|HH|ii|ss"
                                     data-labels="روز|ساعت|دقیقه|ثانیه" id="br_notif_myFlipper"></div>
                            </div>
                            <a href="<?= $options['button_link'] ?>" class="n-b-w-f-button"
                               id="button_title"><?= $options['button_title'] ?></a>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case "social":
                ?>
                <div class="n-b-w-f-body n-b-w-f-num-03 n-b-w-f-insite" <?= $options['style']['width'] ? 'style="width: ' . $options['style']['width'] . 'px;background: ' . $options['style']['background-02'] . ' !important"' : '' ?>>
                    <div class="n-b-w-f-close"><span class="n-b-w-f-close-icon"></span></div>
                    <div class="n-b-w-f-panel-body" style="background: <?= $options['style']['background-01'] ?> !important;">
                        <div class="n-b-w-f-center">
                            <div class="n-b-w-f-title" id="title_product">ما را در شبکه های اجتماعی دنبال کنید :</div>
                            <a href="https://www.facebook.com/<?= $options['facebook'] ?>"
                               id="facebook" <?= $options['facebook'] ? '' : 'style="display: none"' ?> target="_blank"><img
                                        src="<?= $plugin_path ?>../template/images/facebook.svg" alt=""></a>
                            <a href="https://t.me/<?= $options['telegram'] ?>"
                               id="telegram" <?= $options['telegram'] ? '' : 'style="display: none"' ?> target="_blank"><img
                                        src="<?= $plugin_path ?>../template/images/telegram.svg" alt=""></a>
                            <a href="https://www.youtube.com/channel/<?= $options['youtube'] ?>"
                               id="youtube" <?= $options['youtube'] ? '' : 'style="display: none"' ?>
                               target="_blank"><img
                                        src="<?= $plugin_path ?>../template/images/youtube.svg" alt=""></a>
                            <a href="https://twitter.com/<?= $options['twitter'] ?>"
                               id="twitter" <?= $options['twitter'] ? '' : 'style="display: none"' ?>
                               target="_blank"><img
                                        src="<?= $plugin_path ?>../template/images/twitter.svg" alt=""></a>
                            <a href="https://www.instagram.com/<?= $options['instagram'] ?>"
                               id="instagram" <?= $options['instagram'] ? '' : 'style="display: none"' ?>
                               target="_blank"><img
                                        src="<?= $plugin_path ?>../template/images/instagram.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case "notification":
                ?>
                <div class="n-b-w-f-body n-b-w-f-num-04 n-b-w-f-insite" <?= $options['style']['width'] ? 'style="width: ' . $options['style']['width'] . 'px;background: ' . $options['style']['background-02'] . ' !important"' : '' ?>>
                    <div class="n-b-w-f-close"><span class="n-b-w-f-close-icon"></span></div>
                    <div class="n-b-w-f-panel-body" style="background: <?= $options['style']['background-01'] ?> !important;">
                        <div class="n-b-w-f-right">
                            <div class="n-b-w-f-body-img">
                                <img src="<?= (isset($options['image']) && $options['image'] != "") ? $options['image'] : $plugin_path . "../template/images/bell.jpg" ?>"
                                     id="blah" alt="">
                            </div>
                            <div class="n-b-w-f-title" id="title_product"><?= $options['title_product'] ?></div>
                        </div>
                        <div class="n-b-w-f-left" id="ok-canel">
                            <span id="n-b-w-f-button-cancel"
                                  onclick="jQuery('.n-b-w-f-num-04').slideUp(1000)"><?= $options['cancel'] ?></span>
                            <a href="<?= $options['ok_link'] ?>" id="n-b-w-f-button-ok"><?= $options['ok'] ?></a>
                        </div>
                    </div>
                </div>
                <?php
                break;
        }
    }
}

function html_notif()
{
    global $wpdb;
    $results = $wpdb->get_results("SELECT * FROM wp_br_notification_bar");
    $results = json_encode($results);
    $results = json_decode($results, true);
    foreach ($results as $result) {
        notifcations($result);
    }
}

add_action("wp_footer", "html_notif");

function create_table()
{
    global $wpdb;
    if (!$wpdb->get_var("SHOW TABLES LIKE 'wp_br_notification_bar'")) {
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE wp_br_notification_bar (
          id mediumint(9) NOT NULL AUTO_INCREMENT,
          selectNotification varchar(55) NULL,
          show_in varchar(255) NULL,
          active BOOLEAN DEFAULT 0,
          title_product varchar(55) NULL,
          percent varchar(55) NULL,
          price varchar(55) NULL,
          timestamp varchar(55) NULL,
          button_title varchar(55) NULL,
          button_link varchar(55) NULL,
          telegram varchar(55) NULL,
          instagram varchar(55) NULL,
          facebook varchar(55) NULL,
          twitter varchar(55) NULL,
          youtube varchar(55) NULL,
          ok varchar(55) NULL,
          ok_link varchar(55) NULL,
          cancel varchar(55) NULL,
          style varchar(255) NULL,
          image varchar(550) NULL,
          PRIMARY KEY  (id)
        ) $charset_collate;";

        if (empty($sql)) return null;

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

        dbDelta($sql);
        return $wpdb->last_error;

    }
}

function br_notif_ajax()
{
    global $wpdb;

    $id = $_POST['id'];
    $val = $_POST['val'];

    $wpdb->get_results("UPDATE wp_br_notification_bar SET active = {$val} WHERE id = {$id}");

    echo($val);
    exit();
}

add_action('wp_ajax_br_notif_ajax', 'br_notif_ajax');

function table_list($result)
{
    $type_means = array(
        "none" => "انتخاب نشده!",
        "introduce_product" => "معرفی محصول",
        "day_counter" => "روز شمار",
        "social" => "شبکه های اجتماعی",
        "notification" => "اطلاع رسانی",
    );
    ?>
    <table cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>فعال</th>
            <th>عنوان</th>
            <th>نوع</th>
            <th>مدیریت</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (count($result)) {
            foreach ($result as $item) {
                ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><label>
                            <input type="checkbox" name="activation_br_notif" value="<?= $item->id ?>"
                                   class="wp-fenix-primary-toggle-cbx"
                                   style="display: none" <?= $item->active ? "checked" : "" ?>>
                            <span class="br_primary-toggle"><span></span></span>
                        </label></td>
                    <td><?= $item->title_product ?></td>
                    <td><?= $type_means[$item->selectNotification] ?></td>
                    <td>
                        <a href="<?= add_query_arg(array(
                            'id' => $item->id,
                            'page' => 'men_notif_v_w_new',
                        ), get_permalink()); ?>" class="br_notif_edit">ویرایش</a>
                        <span data-id="<?= $item->id ?>" class="br_notif_delete">حذف</span>
                        <form id="delete-item-<?= $item->id ?>-form" method="POST" style="display: none;">
                            <input type="hidden" name="notifToDelete" value="<?= $item->id ?>">
                        </form>
                    </td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="5">
                    <p class="br_notif_none">هنوز هیچ نواری ثبت نشده !!</p>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <?php
}