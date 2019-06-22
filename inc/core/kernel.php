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
    add_menu_page("نوار اعلانات", "نوار اعلانات", 'manage_options', 'notification_bar_wordpress', 'men_notif_v_w', plugins_url('/inc/template/images/bell01.jpg', n_b_w_bahram_path), 7);
    add_submenu_page('notification_bar_wordpress', 'ویرایش محصولات-تنظیمات', 'تنظیمات', 'manage_options', 'config_products_bulk_editor', 'sub_a_p_b');
    add_submenu_page('notification_bar_wordpress', 'ویرایش محصولات-تماس با ما', 'تماس با ما', 'manage_options', 'mail_products_bulk_editor', 'sub_mail_a_p_b');
}

function men_notif_v_w()
{
    $plugin_path = plugin_dir_url(__FILE__);
    ?>
    <div class="admin-n-b-w">
        <div id="demo-is-here-n-b-w">
            <div class="n-b-w-f-body n-b-w-f-num-01 selected-n-b-w" style="display: none">
                <div class="n-b-w-f-right">
                    <div class="n-b-w-f-body-per">
                        <span class="n-b-w-f-per" id="percent-parent"><span id="percent">50</span> % تخفیف</span>
                        <img src="<?= $plugin_path ?>../template/images/2980.jpg" id="blah" alt="">
                    </div>
                    <div class="n-b-w-f-title" id="title-product">محصول دارای تخفیف</div>
                    <div class="n-b-w-f-body-price">
                        <span class="n-b-w-f-price" id="price">39,000 تومان</span>
                    </div>
                </div>
                <div class="n-b-w-f-left">
                    <a href="#" class="n-b-w-f-button" id="button-title">خرید محصول</a>
                </div>
            </div>
            <div class="n-b-w-f-body n-b-w-f-num-02" style="display: none">
                <div class="n-b-w-f-right">
                    <div class="n-b-w-f-title" id="title-product">تایمر ها را با طراحی دلخواه ایجاد کنید (تاریخ شمسی)</div>
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
            <div class="n-b-w-f-body n-b-w-f-num-03" style="display: none">
                <div class="n-b-w-f-center">
                    <div class="n-b-w-f-title" id="title-product">ما را در شبکه های اجتماعی دنبال کنید :</div>
                    <a href="" id="facebook" style="display: none"><img src="<?= $plugin_path ?>../template/images/facebook.svg" alt=""></a>
                    <a href="" id="telegram" style="display: none"><img src="<?= $plugin_path ?>../template/images/telegram.svg" alt=""></a>
                    <a href="" id="youtube" style="display: none"><img src="<?= $plugin_path ?>../template/images/youtube.svg" alt=""></a>
                    <a href="" id="twitter" style="display: none"><img src="<?= $plugin_path ?>../template/images/twitter.svg" alt=""></a>
                    <a href="" id="instagram" style="display: none"><img src="<?= $plugin_path ?>../template/images/instagram.svg" alt=""></a>
                </div>
            </div>
            <div class="n-b-w-f-body n-b-w-f-num-04" style="display: none">
                <div class="n-b-w-f-right">
                    <div class="n-b-w-f-body-img">
                        <img src="<?= $plugin_path ?>../template/images/bell.jpg" id="blah" alt="">
                    </div>
                    <div class="n-b-w-f-title" id="title-product">آیا تمایل دارید از تخفیف های ما با خبر شوید</div>
                </div>
                <div class="n-b-w-f-left" id="ok-canel">
                    <span id="n-b-w-f-button-cancel">شاید بعدا</span>
                    <a href="#" id="n-b-w-f-button-ok">بله حتما</a>
                </div>
            </div>
        </div>
        <div class="con-a-p-b-e">
            <form method="POST">
                <div class="flamen-form-sec-a-p-b-e">
                    <div class="flamen-form-a-p-b-e">
                        <label for="">انتخاب نوار</label>
                        <div class="cssfx-a-p-b-e">
                            <select name="selectNotification" id="">
                                <option value="none">انتخاب نوار</option>
                                <option value="introduce_product">معرفی محصول</option>
                                <option value="day_counter">روز شمار</option>
                                <option value="social">شبکه های اجتماعی</option>
                                <option value="notification">اطلاع رسانی</option>
                            </select>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-title-product">
                        <label for="">عنوان</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" placeholder="عنوان مورد نظر خود را وارد کنید .." id='n-b-w-f-title-input' name="title-product">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-percent">
                        <label for="">تخفیف</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="number" placeholder="عنوان مورد نظر خود را وارد کنید .." name="percent">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-price">
                        <label for="">قیمت</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" placeholder="عنوان مورد نظر خود را وارد کنید .." name="price">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-button-title">
                        <label for="">متن دکمه</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="button-title" placeholder="عنوان مورد نظر خود را وارد کنید ..">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-button-title">
                        <label for="">لینک دکمه</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="button-link" placeholder="عنوان مورد نظر خود را وارد کنید ..">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-social" style="display: none">
                        <label for="">تلگرام</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="telegram" placeholder="آی دی خود را وارد کنید">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-social" style="display: none">
                        <label for="">اینستاگرام</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="instagram" placeholder="آی دی خود را وارد کنید">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-social" style="display: none">
                        <label for="">فیسبوک</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="facebook" placeholder="آی دی خود را وارد کنید">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-social" style="display: none">
                        <label for="">توئیتر</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="twitter" placeholder="آی دی خود را وارد کنید">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-social" style="display: none">
                        <label for="">یوتیوب</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="youtube" placeholder="آدرس کانال خود را وارد کنید">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-picture">
                        <label for="">تصویر</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="file" onchange="readURL(this);">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-ok-cancel" style="display: none">
                        <label for="">متن تایید</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="ok" placeholder="عنوان مورد نظر خود را وارد کنید ..">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-ok-cancel" style="display: none">
                        <label for="">لینک تایید</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="ok-link" placeholder="عنوان مورد نظر خود را وارد کنید ..">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-ok-cancel" style="display: none">
                        <label for="">متن لغو</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="cancel" placeholder="عنوان مورد نظر خود را وارد کنید ..">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                    <div class="flamen-form-a-p-b-e n-b-w-width">
                        <label for="">عرض نوار</label>
                        <div class="cssfx-a-p-b-e">
                            <input type="text" name="width" placeholder="عنوان مورد نظر خود را وارد کنید ..">
                            <span class="bottom-a-p-b-e"></span>
                            <span class="right-a-p-b-e"></span>
                            <span class="top-a-p-b-e"></span>
                            <span class="left-a-p-b-e"></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
}
