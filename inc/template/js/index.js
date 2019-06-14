jQuery(document).ready(function ($) {

    // get body variable
    let body = $("body");

    let setting = nbwSetting;
    console.log(setting);

    body.on("change", "select[name=selectNotification]", function () {
        if ($(this).val() === "introduce_product") {
            $(".n-b-w-f-num-02").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-03").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-04").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-01").show().addClass("selected-n-b-w");

            $(".n-b-w-title-product").show();
            $(".n-b-w-percent").show();
            $(".n-b-w-picture").show();
            $(".n-b-w-social").hide();
            $(".n-b-w-ok-cancel").hide();
            $(".n-b-w-price").show();
            $(".n-b-w-button-title").show();
        }

        if ($(this).val() === "day_counter") {
            $(".n-b-w-f-num-03").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-04").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-01").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-02").show().addClass("selected-n-b-w");

            $(".n-b-w-title-product").show();
            $(".n-b-w-percent").hide();
            $(".n-b-w-picture").hide();
            $(".n-b-w-price").hide();
            $(".n-b-w-ok-cancel").hide();
            $(".n-b-w-social").hide();
            $(".n-b-w-button-title").show();
        }

        if ($(this).val() === "social") {
            $(".n-b-w-f-num-01").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-02").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-04").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-03").show().addClass("selected-n-b-w");

            $(".n-b-w-title-product").show();
            $(".n-b-w-social").show();
            $(".n-b-w-percent").hide();
            $(".n-b-w-picture").hide();
            $(".n-b-w-ok-cancel").hide();
            $(".n-b-w-price").hide();
            $(".n-b-w-button-title").hide();
        }

        if ($(this).val() === "notification") {
            $(".n-b-w-f-num-01").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-02").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-03").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-04").show().addClass("selected-n-b-w");

            $(".n-b-w-title-product").show();
            $(".n-b-w-ok-cancel").show();
            $(".n-b-w-picture").show();
            $(".n-b-w-social").hide();
            $(".n-b-w-percent").hide();
            $(".n-b-w-price").hide();
            $(".n-b-w-button-title").hide();
        }
    });

    body.on("keyup paste", "input[name=title-product]", () => {
        let inputValue = $("input[name=title-product]").val();
        $(".selected-n-b-w").find("#title-product").text(inputValue);
    });
    body.on("keyup paste", "input[name=percent]", () => {
        let inputValue = $("input[name=percent]").val();
        let selector = $(".selected-n-b-w");
        selector.find("#percent").text(inputValue);
        if (!inputValue){
            selector.find("#percent-parent").hide();
        }else{
            selector.find("#percent-parent").show();
        }
    });
    body.on("keyup paste", "input[name=price]", () => {
        let inputValue = $("input[name=price]").val();
        let selector = $(".selected-n-b-w").find("#price");
        if (inputValue) {
            selector.text(inputValue).show();
        }else {
            selector.hide()
        }
    });
    body.on("keyup paste", "input[name=button-title]", () => {
        let inputValue = $("input[name=button-title]").val();
        let selector = $(".selected-n-b-w").find("#button-title");
        if (inputValue) {
            selector.text(inputValue).show();
            selector.attr("href",$("input[name=button-link]").val());
        }else {
            selector.hide();
        }
    });

    body.on("keyup paste", "input[name=telegram]", () => {
        let inputValue = $("input[name=telegram]").val();
        let selector = $(".selected-n-b-w").find("#telegram");
        if (inputValue) {
            selector.attr("href", "https://t.me/" + inputValue).show();
        } else {
            selector.hide();
        }
    });
    body.on("keyup paste", "input[name=facebook]", () => {
        let inputValue = $("input[name=facebook]").val();
        let selector = $(".selected-n-b-w").find("#facebook");
        if (inputValue) {
            selector.attr("href", "https://www.facebook.com/" + inputValue).show();
        } else {
            selector.hide();
        }
    });
    body.on("keyup paste", "input[name=twitter]", () => {
        let inputValue = $("input[name=twitter]").val();
        let selector = $(".selected-n-b-w").find("#twitter");
        if (inputValue) {
            selector.attr("href", "https://twitter.com/" + inputValue).show();
        } else {
            selector.hide();
        }
    });
    body.on("keyup paste", "input[name=instagram]", () => {
        let inputValue = $("input[name=instagram]").val();
        let selector = $(".selected-n-b-w").find("#instagram");
        if (inputValue) {
            selector.attr("href", "https://www.instagram.com/" + inputValue).show();
        } else {
            selector.hide();
        }
    });
    body.on("keyup paste", "input[name=youtube]", () => {
        let inputValue = $("input[name=youtube]").val();
        let selector = $(".selected-n-b-w").find("#youtube");
        if (inputValue) {
            selector.attr("href","https://www.youtube.com/channel/" + inputValue).show();
        } else {
            selector.hide();
        }
    });

    body.on("keyup paste", "input[name=ok]", () => {
        let inputValue = $("input[name=ok]").val();
        let selector = $(".selected-n-b-w").find("#n-b-w-f-button-ok");
        if (inputValue) {
            selector.text(inputValue).show();
            selector.attr("href",$("input[name=ok-link]").val());
        } else {
            selector.hide();
        }
    });

    body.on("keyup paste", "input[name=cancel]", () => {
        let inputValue = $("input[name=cancel]").val();
        let selector = $(".selected-n-b-w").find("#n-b-w-f-button-cancel");
        if (inputValue) {
            selector.text(inputValue).show();
        } else {
            selector.hide();
        }
    });

    body.on("keyup paste", "input[name=width]", () => {
        $(".selected-n-b-w").css("width",$("input[name=width]").val())
    });

    // Set the date we're counting down to
    let countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
    let x = setInterval(function() {

        // Get today's date and time
        let now = new Date().getTime();

        // Find the distance between now and the count down date
        let distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);


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