<?php

if (!defined('ABSPATH')) exit; // No direct access allowed

function notification_bar_wordpress_fenix()
{

    if (class_exists('\Fenix\FenixAdmin')) {
        // use Fenix's Class
        $fenix = new \Fenix\FenixAdmin();
        $fenix->start([

            // set name
            'small_name' => __('اعلانات', 'n_b_w_bahram_path'),
            'name' => __('افزونه نمایش اعلانات پیشرفته ', 'n_b_w_bahram_path'),

            // set id & textDomain
            'id' => 'notification_bar_wordpress',
            'url' => '#',
            'textDomain' => 'notificationBarWordpress',
            'icon' => plugins_url('/inc/template/images/youtube.svg', n_b_w_bahram_path),

            // set path
            'path' => n_b_w_bahram_path,
            'permission' => 'manage_options',
            'position' => '100',

            'section' => [
                'notification_bar_wordpress' => [
                    'name' => __('اعلان', 'setting'),
                    'permission' => 'manage_options',
                ],
                'setting' => [
                    'name' => __('تنظیمات افزونه', 'setting'),
                    'permission' => 'manage_options',
                ],
                'contact' => [
                    'name' => __('تماس با ما', 'fenix'),
                    'permission' => 'manage_options',
                ],
            ],

            // add script and style
            'admin-scripts' => [
                "n-b-w-setting" => "/inc/template/js/index.js",
//                "2" => "/inc/template/js/editHandling.js",
            ],
            'admin-styles' => [
                "/inc/template/css/notif-1.css",
                "/inc/template/css/global.css",
            ],
            'localize-admin-script' => [
                'n-b-w-setting' => [
                    'nbwSetting' => [
                        'plugin_url' => plugin_dir_url(__FILE__),
                        'options' => (get_option("notification_bar_wordpress")) ? get_option("notification_bar_wordpress") : []
                    ]
                ]
            ],
            'scripts' => [],
            'styles' => [
                "/inc/template/css/notif-1.css",
                "/inc/template/css/global.css",
            ],
        ]);

        $fenix->setSection('notification_bar_wordpress', [
            'name' => __('ویرایش', 'fenix'),
            'description' => __('پر کردن هر فیلد برای نمایش آن الزامیست.<br>چناچه تصویر هنگام انتخاب جدید تغییر نکرد نادیده بگیرید.', 'n_b_w_bahram_path'),

            'fields' => [
                [
                    'name' => __('فعال', 'n_b_w_bahram_path'),
                    'id' => 'kernel',
                    "path" => "/inc/core/kernel.php",
                    'type' => 'php',
                ],
                [
                    'name' => __('انتخاب نوار', 'n_b_w_bahram_path'),
                    'id' => 'selectNotification',
                    'type' => 'select',
                    'option' => [
                        'none' => "انتخاب نوار",
                        'introduce_product' => "معرفی محصول",
                        'day_counter' => "روز شمار",
                        'social' => "شبکه های اجتماعی",
                        'notification' => "اطلاع رسانی",
                    ],
                ],
                [
                    'name' => __('عنوان', 'n_b_w_bahram_path'),
                    'id' => 'title_product',
                    'type' => 'text',
                ],
                [
                    'name' => __('تخفیف', 'n_b_w_bahram_path'),
                    'id' => 'percent',
                    'type' => 'text',
                ],
                [
                    'name' => __('قیمت', 'n_b_w_bahram_path'),
                    'id' => 'price',
                    'type' => 'text',
                ],
                [
                    'name' => __('متن دکمه', 'n_b_w_bahram_path'),
                    'id' => 'button_title',
                    'type' => 'text',
                ],
                [
                    'name' => __('لینک دکمه', 'n_b_w_bahram_path'),
                    'id' => 'button_link',
                    'type' => 'text',
                ],
                [
                    'name' => __('تلگرام', 'n_b_w_bahram_path'),
                    'id' => 'telegram',
                    'type' => 'text',
                ],
                [
                    'name' => __('اینستاگرام', 'n_b_w_bahram_path'),
                    'id' => 'instagram',
                    'type' => 'text',
                ],
                [
                    'name' => __('فیسبوک', 'n_b_w_bahram_path'),
                    'id' => 'facebook',
                    'type' => 'text',
                ],
                [
                    'name' => __('توئیتر', 'n_b_w_bahram_path'),
                    'id' => 'twitter',
                    'type' => 'text',
                ],
                [
                    'name' => __('یوتیوب', 'n_b_w_bahram_path'),
                    'id' => 'youtube',
                    'type' => 'text',
                ],
                [
                    'name' => __('تصویر', 'n_b_w_bahram_path'),
                    'id' => 'image',
                    'type' => 'file',
                ],
                [
                    'name' => __('متن تایید', 'n_b_w_bahram_path'),
                    'id' => 'ok',
                    'type' => 'text',
                ],
                [
                    'name' => __('لینک تایید', 'n_b_w_bahram_path'),
                    'id' => 'ok_link',
                    'type' => 'text',
                ],
                [
                    'name' => __('متن لغو', 'n_b_w_bahram_path'),
                    'id' => 'cancel',
                    'type' => 'text',
                ],
                [
                    'name' => __('عرض نوار', 'n_b_w_bahram_path'),
                    'id' => 'width',
                    'type' => 'text',
                ],
                [
                    'name' => __('عرض نوار', 'n_b_w_bahram_path'),
                    'id' => 'widths',
                    'type' => 'time',
                ],
            ]

        ]);
        $fenix->setSection('setting', [
            'name' => __('تنظیمات', 'fenix'),
            'description' => __(''),

            'fields' => [
                [
                    'type' => 'title',
                    'name' => __('برخی از موارد که می توانید به جدول خود اضافه کنید.', 'fenix')
                ],
                [
                    'type' => 'title',
                    'name' => __('نامی که وارد میکنید تیتر جدول شما خواهد شد.', 'fenix')
                ],
                [
                    'name' => __('ارتفاع', 'a_p_b_e_fenix'),
                    'id' => 'height',
                    'type' => 'text',
                ],
                [
                    'name' => __('عرض', 'a_p_b_e_fenix'),
                    'id' => 'width',
                    'type' => 'text',
                ],
                [
                    'name' => __('طول', 'a_p_b_e_fenix'),
                    'id' => 'length',
                    'type' => 'text',
                ],
                [
                    'name' => __('وزن', 'a_p_b_e_fenix'),
                    'id' => '_weight',
                    'type' => 'text',
                ],
                [
                    'name' => __('مجازی', 'a_p_b_e_fenix'),
                    'id' => '_virtual',
                    'type' => 'text',
                ],
                [
                    'name' => __('دانلودی', 'a_p_b_e_fenix'),
                    'id' => '_downloadable',
                    'type' => 'text',
                ],
                [
                    'name' => __('محدودیت روز های دانلود', 'a_p_b_e_fenix'),
                    'id' => '_download_expiry',
                    'type' => 'text',
                ],
                [
                    'name' => __('محدودیت تعداد دانلود', 'a_p_b_e_fenix'),
                    'id' => '_download_limit',
                    'type' => 'text',
                ],
                [
                    'name' => __('وضعیت انبار', 'a_p_b_e_fenix'),
                    'id' => '_stock_status',
                    'type' => 'text',
                ],
                [
                    'name' => __('فروش تکی', 'a_p_b_e_fenix'),
                    'id' => '_sold_individually',
                    'type' => 'text',
                ],
                [
                    'name' => __('تعداد فروش', 'a_p_b_e_fenix'),
                    'id' => 'total_sales',
                    'type' => 'text',
                ],
            ]

        ]);

        $fenix->setSection('contact', [

            'name' => __('تماس با ما', 'a_p_b_e_fenix'),
            'email' => 'hamid.devel@gmail.com',
            'subjects' => [
                __('گزارش خطا', 'fenix'),
                __('پیشنهاد', 'fenix')
            ],
            'description' => __('توضیحات', 'a_p_b_e_fenix'),

        ]);

    }
}

add_action('init', 'notification_bar_wordpress_fenix');