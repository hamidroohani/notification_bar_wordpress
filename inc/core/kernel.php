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
        <?php
        notifcations();
        ?>
    </div>

        <select name="selectNotification" class="fenix-wp-fenix-form-control" id="">
            <option value="none">انتخاب نوار</option>
            <option value="introduce_product">معرفی محصول</option>
            <option value="day_counter">روز شمار</option>
            <option value="social">شبکه های اجتماعی</option>
            <option value="notification">اطلاع رسانی</option>
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
            <input type="text" class="fenix-wp-fenix-form-control" name="button-title"><br>
            <label for="">لینک دکمه</label>
            <input type="text" class="fenix-wp-fenix-form-control" name="button-link">
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
        <div class="n-b-w-picture">
            <label for="">تصویر</label>
            <input type='file' onchange="readURL(this);" />
        </div>
        <div class="n-b-w-ok-cancel" style="display: none">
            <label for="">متن تایید</label>
            <input type="text"class="fenix-wp-fenix-form-control" name="ok"><br>
            <label for="">لینک تایید</label>
            <input type="text"class="fenix-wp-fenix-form-control" name="ok-link"><br>
            <label for="">متن لغو</label>
            <input type="text" class="fenix-wp-fenix-form-control" name="cancel">
        </div>
        <div class="n-b-w-width">
            <label for="">عرض نوار</label>
            <input type="number" class="fenix-wp-fenix-form-control" name="width">
        </div>
</div>
