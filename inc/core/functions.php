<?php
/**
 * Created by PhpStorm.
 * User: Pc2
 * Date: 5/29/2019
 * Time: 11:47 AM
 */
function notifcations(){
    $plugin_path = plugin_dir_url(__FILE__);
    ?>
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
    <?php
}

function html_notif(){
    $options = get_option("notification_bar_wordpress");
    $options = (is_serialized($options)) ? unserialize($options) : $options;
    ?>
    <div class="n-b-w-f-body n-b-w-f-num-01 selected-n-b-w">
        <div class="n-b-w-f-right">
            <div class="n-b-w-f-body-per">
                <span class="n-b-w-f-per" id="percent-parent"><span id="percent">50</span> % تخفیف</span>
                <img src="<?= plugin_dir_url(__FILE__) ?>../template/images/2980.jpg" id="blah" alt="">
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
    <?php
}

add_action("wp_footer", "html_notif");