jQuery(document).ready(function ($) {

    // get body variable
    let body = $("body");

    $(".n-b-w-f-num-01").show();
    body.on("change", "select[name=selectNotification]", function () {
        if ($(this).val() === "introduce_product") {
            $(".n-b-w-f-num-02").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-03").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-01").show().addClass("selected-n-b-w");

            $(".n-b-w-title-product").show();
            $(".n-b-w-percent").show();
            $(".n-b-w-social").hide();
            $(".n-b-w-price").show();
            $(".n-b-w-button-title").show();
        }

        if ($(this).val() === "day_counter") {
            $(".n-b-w-f-num-03").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-01").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-02").show().addClass("selected-n-b-w");

            $(".n-b-w-title-product").show();
            $(".n-b-w-percent").hide();
            $(".n-b-w-price").hide();
            $(".n-b-w-social").hide();
            $(".n-b-w-button-title").show();
        }

        if ($(this).val() === "social") {
            $(".n-b-w-f-num-01").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-02").hide().removeClass("selected-n-b-w");
            $(".n-b-w-f-num-03").show().addClass("selected-n-b-w");

            $(".n-b-w-title-product").show();
            $(".n-b-w-social").show();
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
        if (!inputValue) selector.find("#percent-parent").hide();
    });
    body.on("keyup paste", "input[name=price]", () => {
        let inputValue = $("input[name=price]").val();
        let selector = $(".selected-n-b-w").find("#price");
        if (inputValue) {
            selector.text(inputValue);
        }else {
            selector.hide()
        }
    });
    body.on("keyup paste", "input[name=button-title]", () => {
        let inputValue = $("input[name=button-title]").val();
        let selector = $(".selected-n-b-w").find("#button-title");
        if (inputValue) {
            selector.text(inputValue);
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
});