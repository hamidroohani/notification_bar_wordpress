jQuery(document).ready(function ($) {

    // get body variable
    let body = $("body");

    body.on("change", "select[name='notif[selectNotification]']", function () {
        if ($(this).val() === "none") {
            $(".n-b-w-f-num-02").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-03").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-04").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-01").hide().removeClass("selected-n-b-w");
        }
        if ($(this).val() === "introduce_product") {
            $(".n-b-w-f-num-02").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-03").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-04").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-01").show().addClass("selected-n-b-w");

            $(".n-b-w-title_product").show();
            $(".n-b-w-percent").show();
            $(".n-b-w-picture").show();
            $(".n-b-w-social").hide();
            $(".n-b-w-timestamp").hide();
            $(".n-b-w-ok-cancel").hide();
            $(".n-b-w-price").show();
            $(".n-b-w-button_title").show();
        }

        if ($(this).val() === "day_counter") {
            $(".n-b-w-f-num-03").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-04").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-01").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-02").show().addClass("selected-n-b-w");

            $(".n-b-w-title_product").show();
            $(".n-b-w-percent").hide();
            $(".n-b-w-picture").hide();
            $(".n-b-w-price").hide();
            $(".n-b-w-ok-cancel").hide();
            $(".n-b-w-social").hide();
            $(".n-b-w-timestamp").show();
            $(".n-b-w-button_title").show();
        }

        if ($(this).val() === "social") {
            $(".n-b-w-f-num-01").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-02").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-04").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-03").show().addClass("selected-n-b-w");

            $(".n-b-w-title_product").show();
            $(".n-b-w-social").show();
            $(".n-b-w-percent").hide();
            $(".n-b-w-picture").hide();
            $(".n-b-w-ok-cancel").hide();
            $(".n-b-w-price").hide();
            $(".n-b-w-timestamp").hide();
            $(".n-b-w-button_title").hide();
        }

        if ($(this).val() === "notification") {
            $(".n-b-w-f-num-01").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-02").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-03").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-04").show().addClass("selected-n-b-w");

            $(".n-b-w-title_product").show();
            $(".n-b-w-ok-cancel").show();
            $(".n-b-w-picture").show();
            $(".n-b-w-social").hide();
            $(".n-b-w-timestamp").hide();
            $(".n-b-w-percent").hide();
            $(".n-b-w-price").hide();
            $(".n-b-w-button_title").hide();
        }
    });

    body.on("keyup paste", "input[name='notif[title_product]']", () => {
        let inputValue = $("input[name='notif[title_product]']").val();
        $(".selected-n-b-w").find("#title_product").text(inputValue);
    });
    body.on("keyup paste", "input[name='notif[percent]']", () => {
        let inputValue = $("input[name='notif[percent]']").val();
        let selector = $(".selected-n-b-w");
        selector.find("#percent").text(inputValue);
        if (!inputValue) {
            selector.find("#percent-parent").hide();
        } else {
            selector.find("#percent-parent").show();
        }
    });
    body.on("keyup paste", "input[name='notif[price]']", () => {
        let inputValue = $("input[name='notif[price]']").val();
        let selector = $(".selected-n-b-w").find("#price");
        if (inputValue) {
            selector.text(inputValue).show();
        } else {
            selector.hide()
        }
    });
    body.on("keyup paste", "input[name='notif[button_title]']", () => {
        let inputValue = $("input[name='notif[button_title]']").val();
        let selector = $(".selected-n-b-w").find("#button_title");
        if (inputValue) {
            selector.text(inputValue).show();
            selector.attr("href", $("input[name='notif[button_link]']").val());
        } else {
            selector.hide();
        }
    });

    body.on("keyup paste", "input[name='notif[telegram]']", () => {
        let inputValue = $("input[name='notif[telegram]']").val();
        let selector = $(".selected-n-b-w").find("#telegram");
        if (inputValue) {
            selector.attr("href", "https://t.me/" + inputValue).show();
        } else {
            selector.hide();
        }
    });
    body.on("keyup paste", "input[name='notif[facebook]']", () => {
        let inputValue = $("input[name='notif[facebook]']").val();
        let selector = $(".selected-n-b-w").find("#facebook");
        if (inputValue) {
            selector.attr("href", "https://www.facebook.com/" + inputValue).show();
        } else {
            selector.hide();
        }
    });
    body.on("keyup paste", "input[name='notif[twitter]']", () => {
        let inputValue = $("input[name='notif[twitter]']").val();
        let selector = $(".selected-n-b-w").find("#twitter");
        if (inputValue) {
            selector.attr("href", "https://twitter.com/" + inputValue).show();
        } else {
            selector.hide();
        }
    });
    body.on("keyup paste", "input[name='notif[instagram]']", () => {
        let inputValue = $("input[name='notif[instagram]']").val();
        let selector = $(".selected-n-b-w").find("#instagram");
        if (inputValue) {
            selector.attr("href", "https://www.instagram.com/" + inputValue).show();
        } else {
            selector.hide();
        }
    });
    body.on("keyup paste", "input[name='notif[youtube]']", () => {
        let inputValue = $("input[name='notif[youtube]']").val();
        let selector = $(".selected-n-b-w").find("#youtube");
        if (inputValue) {
            selector.attr("href", "https://www.youtube.com/channel/" + inputValue).show();
        } else {
            selector.hide();
        }
    });

    body.on("keyup paste", "input[name='notif[ok]']", () => {
        let inputValue = $("input[name='notif[ok]']").val();
        let selector = $(".selected-n-b-w").find("#n-b-w-f-button-ok");
        if (inputValue) {
            selector.text(inputValue).show();
            selector.attr("href", $("input[name='notif[ok_link]']").val());
        } else {
            selector.hide();
        }
    });

    body.on("keyup paste", "input[name='notif[cancel]']", () => {
        let inputValue = $("input[name='notif[cancel]']").val();
        let selector = $(".selected-n-b-w").find("#n-b-w-f-button-cancel");
        if (inputValue) {
            selector.text(inputValue).show();
        } else {
            selector.hide();
        }
    });

    body.on("keyup paste", "input[name='notif[style][width]']", () => {
        $(".selected-n-b-w").css("width", $("input[name='notif[style][width]']").val())
    });

    body.on("change", "input[name='notif[style][background-01]']", () => {
        $(".selected-n-b-w").children().eq(1).css("cssText","background:" + $("input[name='notif[style][background-01]']").val() + " !important;")
    });

    body.on("change", "input[name='notif[style][background-02]']", () => {
        $(".selected-n-b-w").css("cssText","background:" + $("input[name='notif[style][background-02]']").val() + " !important;")
    });

    function hide_backgrounds(){
        if ($("select[name='notif[style][position]']").val() === "fixed"){
            $(".n-b-w-background-02").hide();
        }else{
            $(".n-b-w-background-02").show();
        }
    }
    hide_backgrounds();

    body.on("change", "select[name='notif[style][position]']", () => {
        hide_backgrounds();
    });

    // Set the date we're counting down to
    let countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
    let x = setInterval(function () {

        // Get today's date and time
        let now = new Date().getTime();

        // Find the distance between now and the count down date
        let distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        hours = hours.toString();
        minutes = minutes.toString();
        seconds = seconds.toString();

        if (hours.length === 1) hours = "0" + hours;
        if (minutes.length === 1) minutes = "0" + minutes;
        if (seconds.length === 1) seconds = "0" + seconds;

        // Output the result in an element with id="demo"
        let ddd = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);


    // Delete Item
    $('span.br_notif_delete').on('click', (e) => {
        e.preventDefault();
        if (confirm('از انجام این کار اطمینان دارید ؟')) {
            let target = e.currentTarget;
            let id = target.getAttribute('data-id');
            $('#delete-item-' + id + '-form').submit();
        }
    });

    $('.js-example-basic-single').select2();

    $("#br_notif_alert_n_b").on("click", function () {
        $(".br_notif_alert_n_b").slideUp(500);
    })

    $("input[name=activation_br_notif]").on("click", function () {
        let val = ($(this).is(':checked')) ? 1 : 0;
        let id = $(this).val();
        $.ajax({
            url: fenix.ajax_url,
            type: "post",
            data: {
                action: 'br_notif_ajax',
                id: id,
                val: val
            },
            success: function (response) {
                // console.log(response);
            }
        });

    });

    $('#br_notif_date1').MdPersianDateTimePicker({
        targetTextSelector: '#br_notif_inputDate1',
        targetDateSelector: '#br_notif_inputDate1-1',
        dateFormat: 'yyyy-MM-dd HH:mm:ss',
        isGregorian: false,
        enableTimePicker: true,
        disableBeforeToday: true,
    });
    $('#br_notif_date1').on('click', function () {
        let test = $("#br_notif_inputDate1-1").val();
        $("#br_notif_myFlipper").attr("data-datetime", test);
    });

    $(".n-b-w-f-close").on("click", function () {
        $(this).parent().slideUp(500);
        setTimeout(() => {
            $("body").css("cssText", "margin-top: 0px !important");
        }, 500);
    })

});

function readURL(input) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = function (e) {
            jQuery(".selected-n-b-w").find('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}