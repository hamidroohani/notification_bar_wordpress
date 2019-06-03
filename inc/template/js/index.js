jQuery(document).ready(function ($) {

    // get body variable
    let body = $("body");

    async function fillInputs(){
        let title =await $("#n-b-w-f-title").val();
        console.log(title);
        $("#n-b-w-f-title-input").val(title);
    }

    let notif01 = "<div class=\"n-b-w-f-body n-b-w-f-num-01\">\n" +
        "    <div class=\"n-b-w-f-right\">\n" +
        "        <div class=\"n-b-w-f-body-per\">\n" +
        "            <span class=\"n-b-w-f-per\">50% تخفیف</span>\n" +
        "            <img src=\"" + nbwSetting + "../template/images/2980.jpg\" alt=\"\">\n" +
        "        </div>\n" +
        "        <div class=\"n-b-w-f-title\" id='n-b-w-f-title'>محصول دارای تخفیف</div>\n" +
        "        <div class=\"n-b-w-f-body-price\">\n" +
        "            <span class=\"n-b-w-f-price\">39,000 تومان</span>\n" +
        "        </div>\n" +
        "    </div>\n" +
        "    <div class=\"n-b-w-f-left\">\n" +
        "        <span class=\"n-b-w-f-button\">خرید محصول</span>\n" +
        "    </div>\n" +
        "</div>\n";
    let notif02 = "<div class=\"n-b-w-f-body n-b-w-f-num-02\">\n" +
        "    <div class=\"n-b-w-f-right\">\n" +
        "        <div class=\"n-b-w-f-title\">تایمر ها را با طراحی دلخواه ایجاد کنید (تاریخ شمسی)</div>\n" +
        "    </div>\n" +
        "    <div class=\"n-b-w-f-left\">\n" +
        "        <div class=\"n-b-w-f-counter\">\n" +
        "            <div class=\"n-b-w-f-days n-b-w-f-counter-panel\">\n" +
        "                <span class=\"n-b-w-f-int\">23</span>\n" +
        "                <span class=\"n-b-w-f-str\">روز</span>\n" +
        "            </div>\n" +
        "            <div class=\"n-b-w-f-hours n-b-w-f-counter-panel\">\n" +
        "                <span class=\"n-b-w-f-int\">11</span>\n" +
        "                <span class=\"n-b-w-f-str\">ساعت</span>\n" +
        "            </div>\n" +
        "            <div class=\"n-b-w-f-minuet n-b-w-f-counter-panel\">\n" +
        "                <span class=\"n-b-w-f-int\">08</span>\n" +
        "                <span class=\"n-b-w-f-str\">دقیقه</span>\n" +
        "            </div>\n" +
        "            <div class=\"n-b-w-f-second n-b-w-f-counter-panel\">\n" +
        "                <span class=\"n-b-w-f-int\">23</span>\n" +
        "                <span class=\"n-b-w-f-str\">ثانیه</span>\n" +
        "            </div>\n" +
        "        </div>\n" +
        "        <span class=\"n-b-w-f-button\" id='test'>تست</span>\n" +
        "    </div>\n" +
        "</div>\n";

    let notif03 = "<div class=\"n-b-w-f-body n-b-w-f-num-03\">\n" +
        "    <div class=\"n-b-w-f-center\">\n" +
        "        <div class=\"n-b-w-f-title\">ما را در شبکه های اجتماعی دنبال کنید :</div>\n" +
        "        <a href=\"\"><img src=\"" + nbwSetting + "../template/images/facebook.svg\" alt=\"\"></a>\n" +
        "        <a href=\"\"><img src=\"" + nbwSetting + "../template/images/telegram.svg\" alt=\"\"></a>\n" +
        "        <a href=\"\"><img src=\"" + nbwSetting + "../template/images/youtube.svg\" alt=\"\"></a>\n" +
        "        <a href=\"\"><img src=\"" + nbwSetting + "../template/images/twitter.svg\" alt=\"\"></a>\n" +
        "        <a href=\"\"><img src=\"" + nbwSetting + "../template/images/instagram.svg\" alt=\"\"></a>\n" +
        "    </div>\n" +
        "</div>\n";
    $("#demo-is-here-n-b-w").html(notif01);

    body.on("change", "select[name=selectNotification]", function () {
        if ($(this).val() === "introduce_product") {
            $("#demo-is-here-n-b-w").html(notif01);
            fillInputs();
        }

        if ($(this).val() === "day_counter") {
            $("#demo-is-here-n-b-w").html(notif02);
        }

        if ($(this).val() === "social") {
            $("#demo-is-here-n-b-w").html(notif03);
        }
    });
});