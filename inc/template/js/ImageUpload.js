jQuery(document).ready(function ($) {

    const _URL = window.URL || window.webkitURL;

// upload image
    function readImage(input) {

        let size = (input.files[0].size) / 1000000;
        let img = new Image();
        img.onload = function () {
            if (!input.getAttribute('accept').includes(input.files[0].name.split('.').pop())) {
                alert('پسوند تصویر انتخابی شما نا معتبر است.');
            } else if (this.width >= $(input).attr('data-max-width')) {
                alert('عرض تصویر بزرگ است.');
            } else if (this.height >= $(input).attr('data-max-height')) {
                alert('طول تصویر بزرگ است.');
            } else if (size >= $(input).attr('data-max-size')) {
                alert('سایز تصویر بزرگ است.');
                $(input).parents('.file-upload').find('input[type="file"]').val('');
            } else if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $(input).parents('.image-upload').find('.image-edit label').attr('class', 'fafa-pencil-alt');
                    $(input).parents('.image-upload').find('.imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $(input).parents('.image-upload').find('input[type="hidden"]').val('');
                    $(input).parents('.image-upload').find('.imagePreview').hide();
                    $(input).parents('.image-upload').find('.imagePreview').fadeIn(650);
                    $(input).parents('.image-upload').find('.image-remove').show();
                };
                reader.readAsDataURL(input.files[0]);
            }
        };
        img.src = _URL.createObjectURL(input.files[0]);

    }

    $('body').on('change', ".imageUpload", (e) => {

        readImage(e.target);
    });

    function readFile(input) {
        let size = (input.files[0].size) / 1000000;
        if (size <= $(input).attr('data-max-size')) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $(input).parents('.file-upload').find('.file-edit label').attr('class', 'fafa-pencil-alt');
                    $(input).parents('.file-upload').find('input[type="hidden"]').val('');
                    $(input).parents('.file-upload').find('.filepreview').hide();
                    $(input).parents('.file-upload').find('.filePreview').fadeIn(650);
                    $(input).parents('.file-upload').find('.file-remove').show();
                    $(input).parents('.file-upload').find('.file-preview').addClass('added');
                    $(input).parents('.file-upload').find('.filePreview span').html(input.files[0].name);


                };
                reader.readAsDataURL(input.files[0]);
            }
        } else {

            alert('سایز فایل بزرگ است.');

            $(input).parents('.file-upload').find('input[type="file"]').val('');
        }
    }

    $('body').on('change', ".fileUpload", (e) => {
        readFile(e.target);
    });

// Remove Images
    $('body').on('click', '.image-remove', (e) => {
        if ($(e.target).parents('.upload-image').find('.image-upload').length === 1) {
            $(e.target).parents('.image-upload').find('.image-edit label').attr('class', 'fafa-upload');
            $(e.target).parents('.image-upload').find('.image-remove').hide();
            $(e.target).parents('.image-upload').find('input[type="hidden"]').val('');
            $(e.target).parents('.image-upload').find('input[type="file"]').val('');
            $(e.target).parents('.image-upload').find('.imagePreview').css('background-image', '');

        } else {
            $(e.target).parents('.image-upload').fadeOut(() => {
                // let number = $(e.target).parents('.image-upload').find('input[type="file"]').attr('data-name-count');
                // $(e.target).parents('.col-md-10').find('.image-upload input[type="file"]').attr('data-name-count', parseInt(number) + 1);
                $(e.target).parents('.image-upload').remove();
            });
        }
    });

    $('body').on('click', '.file-remove', (e) => {
        if ($(e.target).parents('.upload-file').find('.file-upload').length === 1) {
            $(e.target).parents('.file-upload').find('.file-edit label').attr('class', 'fafa-upload');
            $(e.target).parents('.file-upload').find('.file-remove').hide();
            $(e.target).parents('.file-upload').find('input[type="hidden"]').val('');
            $(e.target).parents('.file-upload').find('input[type="file"]').val('');
            $(e.target).parents('.file-upload').find('.filePreview').css('background-image', '');
            $(e.target).parents('.file-upload').find('.file-preview').removeClass('added');
        } else {
            $(e.target).parents('.file-upload').fadeOut(() => {
                // let number = $(e.target).parents('.image-upload').find('input[type="file"]').attr('data-name-count');
                // $(e.target).parents('.col-md-10').find('.image-upload input[type="file"]').attr('data-name-count', parseInt(number) + 1);
                $(e.target).parents('.file-upload').remove();
            });
        }
    });

// Clone Upload Image
    let Count_image_box = 0;
    $('.image-add').on('click', (e) => {

        // Copy Last Image Box
        let last = $(e.target).parents('.form-group.upload-image').find('.image-upload').last();
        last.clone().insertAfter(last);

        // Set Count
        let name = last.find('input[type="file"]').attr('data-name');
        let count = last.find('input[type="file"]').attr('data-name-count');
        Count_image_box = parseInt(count) + 1;

        // Get Last Image Box
        last = $(e.target).parents('.form-group.upload-image').find('.image-upload').last();

        // Reset and Clear Image Box
        $(last).find('.image-edit label').attr('class', 'fafa-upload');
        $(last).find('.image-remove').hide();
        $(last).find('input[type="hidden"]').val('');
        $(last).find('input[type="file"]').val('');
        $(last).find('.imagePreview').css('background-image', '');

        //Set Name
        last.find('input[type="hidden"]').attr('name', `${name}[${Count_image_box}]`);
        last.find('input[type="file"]').attr('name', `${name}[${Count_image_box}]`);
        last.find('input[type="file"]').attr('id', `${name}[${Count_image_box}]`);
        last.find('.image-edit label').attr('for', `${name}[${Count_image_box}]`);
        last.find('.image-preview label').attr('for', `${name}[${Count_image_box}]`);
        last.find('input[type="file"]').attr('data-name-count', Count_image_box);
        last.find('.image-remove').show();
        last.find('.image-info').remove();
    });
    let Count_file_box = 0;
    $('.file-add').on('click', (e) => {

        // Copy Last Image Box
        let last = $(e.target).parents('.col-md-10').find('.file-upload').last();
        last.clone().insertAfter(last);

        // Set Count
        let name = last.find('input[type="file"]').attr('data-name');
        let count = last.find('input[type="file"]').attr('data-name-count');
        Count_file_box = parseInt(count) + 1;

        // Get Last Image Box
        last = $(e.target).parents('.col-md-10').find('.file-upload').last();

        // Reset and Clear Image Box
        $(last).find('.file-edit label').attr('class', 'fafa-upload');
        $(last).find('.file-remove').hide();
        $(last).find('input[type="hidden"]').val('');
        $(last).find('input[type="file"]').val('');
        $(last).find('.file-preview').removeClass('added');
        $(last).find('.filePreview span').html('');

        //Set Name
        last.find('input[type="hidden"]').attr('name', `${name}[${Count_file_box}]`);
        last.find('input[type="file"]').attr('name', `${name}[${Count_file_box}]`);
        last.find('input[type="file"]').attr('id', `${name}[${Count_file_box}]`);
        last.find('.file-edit label').attr('for', `${name}[${Count_file_box}]`);
        last.find('.file-preview label').attr('for', `${name}[${Count_file_box}]`);
        last.find('input[type="file"]').attr('data-name-count', Count_file_box);
    });
});

