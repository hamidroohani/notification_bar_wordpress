<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 6/3/2019
 * Time: 9:49 PM
 */

add_action('admin_menu', 'o_notif_b_w');

function o_notif_b_w()
{
    add_menu_page("نوار اعلانات", "نوار اعلانات", 'manage_options', 'notification_bar_wordpress', 'men_notif_v_w_list', plugins_url('/inc/template/images/bell01.jpg', n_b_w_bahram_path), 7);
    add_submenu_page('notification_bar_wordpress', 'ایجاد | ویرایش', 'جدید', 'manage_options', 'men_notif_v_w_new', 'men_notif_v_w_new');
    add_submenu_page('notification_bar_wordpress', 'ویرایش محصولات-تماس با ما', 'تماس با ما', 'manage_options', 'mail_products_bulk_editor', 'sub_mail_br_notif');
}

function men_notif_v_w_list()
{
    global $wpdb;
    create_table();
    $values = isset($_POST['notif']) ? $_POST['notif'] : [];
    if (isset($_FILES['image']["tmp_name"]) && !empty($_FILES['image']["tmp_name"])) {
        $movefile = wp_handle_upload($_FILES['image'], ['test_form' => false]);
        $values['image'] = $movefile['url'];
    }
    if (count($values)) {
        if ($values['active'] == "1") $values['active'] = 1;
        $values['style'] = serialize($values['style']);
        $values['show_in'] = serialize($values['show_in']);
        if (isset($_GET['id'])) {
            $wpdb->get_results("UPDATE wp_br_notification_bar SET
          selectNotification = '{$values['selectNotification']}',active = '{$values['active']}',show_in = '{$values['show_in']}',timestamp = '{$values['timestamp']}',
          title_product = '{$values['title_product']}', percent = '{$values['percent']}',price = '{$values['price']}',button_title = '{$values['button_title']}'
          ,button_link = '{$values['button_link']}', telegram = '{$values['telegram']}',instagram = '{$values['instagram']}',facebook = '{$values['facebook']}'
          ,twitter = '{$values['twitter']}',youtube = '{$values['youtube']}',ok = '{$values['ok']}',ok_link = '{$values['ok_link']}',cancel = '{$values['cancel']}'
          ,style = '{$values['style']}',image = '{$values['image']}' WHERE id = {$_GET['id']}");
        } else {
            $wpdb->get_results("INSERT INTO wp_br_notification_bar (selectNotification,active,show_in,timestamp,
          title_product, percent,price,button_title,button_link, telegram,instagram,facebook,twitter,youtube,ok,ok_link,cancel,style,image) VALUES 
          ('{$values['selectNotification']}','{$values['active']}','{$values['show_in']}','{$values['timestamp']}',
          '{$values['title_product']}','{$values['percent']}','{$values['price']}','{$values['button_title']}',
          '{$values['button_link']}','{$values['telegram']}','{$values['instagram']}','{$values['facebook']}','{$values['twitter']}',
          '{$values['youtube']}','{$values['ok']}','{$values['ok_link']}','{$values['cancel']}','{$values['style']}','{$values['image']}')");
        }
        ?>
        <div class="br_notif_alert_n_b">
            <p>با موفقیت ذخیره شد!</p>
            <span id="br_notif_alert_n_b">X</span>
        </div>
        <?php
    }

    if (isset($_POST['notifToDelete'])) {
        $wpdb->get_results("DELETE FROM wp_br_notification_bar WHERE id = {$_POST['notifToDelete']}");
    }
    $result = $wpdb->get_results("SELECT * FROM wp_br_notification_bar ORDER BY id DESC ");
    ?>
    <div class="br_notif_body_list">
        <div class="br_notif_head">
            <h2>لیست نوارهای اعلانات</h2>
            <a href="<?= add_query_arg(array(
                'page' => 'men_notif_v_w_new',
                'id' => null,
            ), get_permalink()); ?>" class="br_notif_new">جدید</a>
        </div>
        <div class="br_notif_hr"></div>
        <div class="br_notif_tbl">
            <?php table_list($result) ?>
        </div>
        <div class="br_notif_footer"></div>
    </div>

    <?php
}

function men_notif_v_w_new()
{
    global $wpdb;
    $plugin_path = plugin_dir_url(__FILE__);
    $options = [];
    if (isset($_GET['id'])) {
        $options = $wpdb->get_results("SELECT * FROM wp_br_notification_bar WHERE id = {$_GET['id']}");
        $options = json_encode($options[0]);
        $options = json_decode($options, true);
        $options['show_in'] = is_serialized($options['show_in']) ? unserialize($options['show_in']) : $options['show_in'];
        $options['style'] = is_serialized($options['style']) ? unserialize($options['style']) : $options['style'];
    }
    if (isset($options['width']) && $options['width'] != "") {
        ?>
        <style>
            .n-b-w-f-panel-body {
                width: <?= $options['width'] ?>px !important;
            }
        </style>
        <?php
    }
    ?>
    <div class="admin-n-b-w">
        <div class="br_notif_msg">
            <ul>
                <li>مقادیر در نوار تنها برای نمایش در این صفحه می باشند.</li>
                <li>در صورت خالی گذاشتن فیلد مربوطه چاپ نمی شود.</li>
                <li>در صورت عدم نمایش تغییرات در نوار این برگه ، نادیده بگیرید.</li>
                <li>فیلد عرض را می توانید خالی بگذارید.</li>
            </ul>
        </div>
        <div id="demo-is-here-n-b-w">
            <?php
            include "demo/panel-01.php";
            include "demo/panel-02.php";
            include "demo/panel-03.php";
            include "demo/panel-04.php";
            ?>
        </div>
        <div class="config-a-p-b-e">
            <form method="POST" action="<?= add_query_arg(array(
                'page' => 'notification_bar_wordpress',
            ), get_permalink()); ?>" enctype="multipart/form-data">
                <div class="flamen-form-sec-a-p-b-e">
                    <div class="flamen-form-a-p-b-e">
                        <label for="">انتخاب نوار</label>
                        <div class="cssfx-a-p-b-e">
                            <select name="notif[selectNotification]" id="">
                                <option value="none">انتخاب نوار</option>
                                <option value="introduce_product" <?= $options['selectNotification'] == "introduce_product" ? 'selected' : '' ?>>
                                    معرفی محصول
                                </option>
                                <option value="day_counter" <?= $options['selectNotification'] == "day_counter" ? 'selected' : '' ?>>
                                    روز شمار
                                </option>
                                <option value="social" <?= $options['selectNotification'] == "social" ? 'selected' : '' ?>>
                                    شبکه های اجتماعی
                                </option>
                                <option value="notification" <?= $options['selectNotification'] == "notification" ? 'selected' : '' ?>>
                                    اطلاع رسانی
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e">
                        <label for="">فعال</label>
                        <div class="cssfx-a-p-b-e">
                            <label>
                                <input type="checkbox" name="notif[active]" value="1"
                                       class="wp-fenix-primary-toggle-cbx"
                                       style="display: none" <?= $options['active'] == 1 ? "checked" : "" ?>>
                                <span class="br_primary-toggle"><span></span></span>
                            </label>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e">
                        <label for="">نمایش در</label>
                        <div class="cssvfx-a-p-b-e">
                            <select name="notif[show_in][]" class="js-example-basic-single" multiple>
                                <?php
                                $types = get_post_types(['show_ui' => true, 'public' => true], 'objects');
                                foreach ($types as $type) {
                                    ?>
                                    <option value="<?= $type->name ?>" <?= (is_array($options['show_in']) && in_array($type->name, $options['show_in'])) ? 'selected' : "" ?>><?= $type->label ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-title_product">
                        <label for="">عنوان</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" placeholder="عنوان مورد نظر خود را وارد کنید .." id='n-b-w-f-title-input'
                                   name="notif[title_product]"
                                   value="<?= isset($options['title_product']) ? $options['title_product'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-percent" <?= $options['selectNotification'] == "introduce_product" ? "" : 'style="display:none;"' ?>>
                        <label for="">تخفیف</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="number" placeholder="عنوان مورد نظر خود را وارد کنید .." name="notif[percent]"
                                   value="<?= isset($options['percent']) ? $options['percent'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-price" <?= $options['selectNotification'] == "introduce_product" ? "" : 'style="display:none;"' ?>>
                        <label for="">قیمت</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" placeholder="عنوان مورد نظر خود را وارد کنید .." name="notif[price]"
                                   value="<?= isset($options['price']) ? $options['price'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-timestamp" <?= $options['selectNotification'] == "day_counter" ? "" : 'style="display:none;"' ?>>
                        <label for="">تاریخ</label>
                        <div class="cssfx-a-p-b-e-date">
                            <div class="input-group-prepend">
                                <span class="input-group-text cursor-pointer" id="br_notif_date1"><img
                                            src="<?= $plugin_path ?>../template/images/calendar.svg" alt="" width="20"></span>
                            </div>
                            <input type="text" id="br_notif_inputDate1" class="form-control"
                                   placeholder="نمایش به تقویم جلالی"
                                   aria-label="date1" aria-describedby="date1">
                            <input type="text" name="notif[timestamp]" id="br_notif_inputDate1-1" class="form-control"
                                   placeholder="نمایش به تقویم میلادی"
                                   aria-label="date11"
                                   aria-describedby="date11" <?= $options['timestamp'] ? 'value="' . $options['timestamp'] . '"' : '' ?>>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-button_title" <?= ($options['selectNotification'] == "introduce_product" || $options['selectNotification'] == "day_counter") ? "" : 'style="display:none;"' ?>>
                        <label for="">متن دکمه</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[button_title]"
                                   placeholder="عنوان مورد نظر خود را وارد کنید .."
                                   value="<?= isset($options['button_title']) ? $options['button_title'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-button_title" <?= ($options['selectNotification'] == "introduce_product" || $options['selectNotification'] == "day_counter") ? "" : 'style="display:none;"' ?>>
                        <label for="">لینک دکمه</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[button_link]"
                                   placeholder="عنوان مورد نظر خود را وارد کنید .."
                                   value="<?= isset($options['button_link']) ? $options['button_link'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-social" <?= $options['selectNotification'] == "social" ? "" : 'style="display:none;"' ?>>
                        <label for="">تلگرام</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[telegram]"
                                   placeholder="آی دی خود را وارد کنید"
                                   value="<?= isset($options['telegram']) ? $options['telegram'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-social" <?= $options['selectNotification'] == "social" ? "" : 'style="display:none;"' ?>>
                        <label for="">اینستاگرام</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[instagram]" placeholder="آی دی خود را وارد کنید"
                                   value="<?= isset($options['instagram']) ? $options['instagram'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-social" <?= $options['selectNotification'] == "social" ? "" : 'style="display:none;"' ?>>
                        <label for="">فیسبوک</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[facebook]" placeholder="آی دی خود را وارد کنید"
                                   value="<?= isset($options['facebook']) ? $options['facebook'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-social" <?= $options['selectNotification'] == "social" ? "" : 'style="display:none;"' ?>>
                        <label for="">توئیتر</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[twitter]" placeholder="آی دی خود را وارد کنید"
                                   value="<?= isset($options['twitter']) ? $options['twitter'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-social" <?= $options['selectNotification'] == "social" ? "" : 'style="display:none;"' ?>>
                        <label for="">یوتیوب</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[youtube]" placeholder="آدرس کانال خود را وارد کنید"
                                   value="<?= isset($options['youtube']) ? $options['youtube'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-picture" <?= ($options['selectNotification'] == "introduce_product" || $options['selectNotification'] == "notification") ? "" : 'style="display:none;"' ?>>
                        <label for="">تصویر</label>
                        <div class="cssfx-a-p-b-e">
                            <div class="form-group upload-image">
                                <label for="image"
                                       class="col-md-2"></label>
                                <div class="col-md-10">
                                    <div class="image-upload ">
                                        <div class="image-edit">
                                            <input type="hidden" value="<?= $options['image'] ?>" name="notif[image]">
                                            <input type='file' name="image" class="imageUpload"
                                                   onchange="readURL(this);" id="image"
                                                   accept=".png, .jpg, .jpeg"
                                                   value="<?= $options['image'] ?>"/>
                                            <label for="image"
                                                   class="<?= !empty($options['image']) ? 'fafa-pencil-alt' : 'fafa-upload' ?>"></label>
                                        </div>
                                        <div class="image-remove" <?= !empty($options['image']) ? 'style="display:block"' : '' ?>>
                                            <label class="fafa-trash"></label>
                                        </div>
                                        <div class="image-preview">
                                            <label for="image"></label>
                                            <div class="imagePreview"
                                                <?= !empty($options['image']) ? 'style="background-image: url(' . $options['image'] . ');"' : '' ?>></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-ok-cancel" <?= $options['selectNotification'] == "notification" ? "" : 'style="display:none;"' ?>>
                        <label for="">متن تایید</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[ok]" placeholder="عنوان مورد نظر خود را وارد کنید .."
                                   value="<?= isset($options['ok']) ? $options['ok'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-ok-cancel" <?= $options['selectNotification'] == "notification" ? "" : 'style="display:none;"' ?>>
                        <label for="">لینک تایید</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[ok_link]" placeholder="عنوان مورد نظر خود را وارد کنید .."
                                   value="<?= isset($options['ok_link']) ? $options['ok_link'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-ok-cancel" <?= $options['selectNotification'] == "notification" ? "" : 'style="display:none;"' ?>>
                        <label for="">متن لغو</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[cancel]" placeholder="عنوان مورد نظر خود را وارد کنید .."
                                   value="<?= isset($options['cancel']) ? $options['cancel'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-width">
                        <label for="">عرض نوار</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="notif[style][width]" placeholder="مقدار بر اساس px"
                                   value="<?= isset($options['style']['width']) ? $options['style']['width'] : '' ?>">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e">
                        <label for="">موقعیت</label>
                        <div class="cssfx-a-p-b-e">
                            <label>
                                <select name="notif[style][position]">
                                    <option value="fixed" <?= ($options['style']['position'] == 'fixed') ? "selected" : '' ?>>
                                        فیکس
                                    </option>
                                    <option value="absolute" <?= ($options['style']['position'] == 'absolute') ? "selected" : '' ?>>
                                        در بالا
                                    </option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-background-01">
                        <label for="">رنگ زمینه</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="color" name="notif[style][background-01]"
                                   value="<?= isset($options['style']['background-01']) ? $options['style']['background-01'] : '#ffffff' ?>">
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-background-02">
                        <label for="">رنگ پس زمینه</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="color" name="notif[style][background-02]"
                                   value="<?= isset($options['style']['background-02']) ? $options['style']['background-02'] : '#ffffff' ?>">
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-width">
                        <input type="submit" value="ذخیره">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
}

function sub_mail_br_notif()
{
    if (isset($_POST['message_subject']) && isset($_POST['message'])) {
        wp_mail("hamid.dev@yahoo.com", $_POST['message_subject'], $_POST['message']);                 // send message to mail
    }

    ?>
    <div class="wrap fenix-wp-fenix-wrap">
        <h2>تماس با ما</h2>
        <div class="fenix-wp-fenix-wrap-main">
            <div class="fenix-wp-fenix-wrap-main-description">
                شما دوستان همواره میتوانید نظرات خود را با ما در میان بگذارید.
            </div>
            <form method="post">
                <input type="hidden" name="action" value="1">
                <div class="fenix-wp-fenix-form-group">
                    <label for="message_subject">موضوع </label>
                    <select name="message_subject" class="fenix-wp-fenix-form-control">
                        <option value="نقد و بررسی">نقد و بررسی</option>
                        <option value="پیشنهادات">پیشنهادات</option>
                    </select>
                </div>
                <div class="fenix-wp-fenix-form-group">
                    <label for="message">پیغام</label>
                    <textarea name="message" id="message" class="fenix-wp-fenix-form-control"
                              placeholder="پیغام خود را بنویسید.." rows="5"></textarea>
                </div>
                <p class="submit">
                    <input type="submit" name="submit" id="submit"
                           class="fenix-wp-fenix-button fenix-wp-fenix-button-primary"
                           value="ارسال"/>
                </p>
            </form>
        </div>
    </div>
    <?php
}
