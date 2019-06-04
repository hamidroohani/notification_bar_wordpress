<?php
/**
 * Created by PhpStorm.
 * User: Hamid
 * Date: 6/3/2019
 * Time: 9:49 PM
 */
$plugin_path = plugin_dir_url(__FILE__);
?>
<div class="admin-n-b-w">
    <div id="demo-is-here-n-b-w">
        <div class="n-b-w-f-body n-b-w-f-num-01 selected-n-b-w" style="display: none">
            <div class="n-b-w-f-right">
                <div class="n-b-w-f-body-per">
                    <span class="n-b-w-f-per" id="percent-parent"><span id="percent">50</span> % تخفیف</span>
                    <img src="<?= $plugin_path ?>../template/images/2980.jpg" alt="">
                </div>
                <div class="n-b-w-f-title" id="title-product">محصول دارای تخفیف</div>
                <div class="n-b-w-f-body-price">
                    <span class="n-b-w-f-price" id="price">39,000 تومان</span>
                </div>
            </div>
            <div class="n-b-w-f-left">
                <span class="n-b-w-f-button" id="button-title">خرید محصول</span>
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
    </div>
    <form action="">

        <select name="selectNotification" class="fenix-wp-fenix-form-control" id="">
            <option value="introduce_product">معرفی محصول</option>
            <option value="day_counter">روز شمار</option>
            <option value="social">شبکه های اجتماعی</option>
        </select>
        <div class="n-b-w-title-product">
            <label for="">عنوان</label>
            <input type="text" class="fenix-wp-fenix-form-control" id='n-b-w-f-title-input' name="title-product">
        </div>
        <div class="n-b-w-percent">
            <label for="">تخفیف</label>
            <input type="number" class="fenix-wp-fenix-form-control" name="percent">
        </div>
        <div class="n-b-w-price">
            <label for="">قیمت</label>
            <input type="text" class="fenix-wp-fenix-form-control" name="price">
        </div>
        <div class="n-b-w-button-title">
            <label for="">متن دکمه</label>
            <input type="text" class="fenix-wp-fenix-form-control" name="button-title">
        </div>
        <div class="n-b-w-social" style="display: none">
            <label for="">تلگرام</label>
            <input type="text" class="fenix-wp-fenix-form-control" placeholder="آی دی خود را وارد کنید" name="telegram"><br>
            <label for="">اینستاگرام</label>
            <input type="text" class="fenix-wp-fenix-form-control" placeholder="آی دی خود را وارد کنید" name="instagram"><br>
            <label for="">فیسبوک</label>
            <input type="text" class="fenix-wp-fenix-form-control" placeholder="آی دی خود را وارد کنید" name="facebook"><br>
            <label for="">توئیتر</label>
            <input type="text" class="fenix-wp-fenix-form-control" placeholder="آی دی خود را وارد کنید" name="twitter"><br>
            <label for="">یوتیوب</label>
            <input type="text" class="fenix-wp-fenix-form-control" placeholder="آدرس کانال خود را وارد کنید" name="youtube"><br>
        </div>
    </form>
</div>
