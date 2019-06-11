<?php

if (!defined('ABSPATH')) exit; // No direct access allowed

function notification_bar_wordpress_fenix()
{

    if (class_exists('\Fenix\FenixAdmin')) {
        // use Fenix's Class
        $fenix = new \Fenix\FenixAdmin();
        $fenix->start([

            // set name
            'small_name' => __('اعلانات', 'n_b_w_fenix_path'),
            'name' => __('افزونه نمایش اعلانات پیشرفته ', 'n_b_w_fenix_path'),

            // set id & textDomain
            'id' => 'notification_bar_wordpress',
            'url' => '#',
            'textDomain' => 'notificationBarWordpress',
            'icon' => plugins_url('/inc/template/images/youtube.svg', n_b_w_fenix_path),

            // set path
            'path' => n_b_w_fenix_path,
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
                    'nbwSetting' => plugin_dir_url(__FILE__)
                ]
            ],
            'scripts' => [],
            'styles' => [
                "/inc/template/css/notif-1.css",
            ],
        ]);

        $fenix->setSection('notification_bar_wordpress', [
            'name' => __('ویرایش', 'fenix'),
            'description' => __('پر کردن هر فیلد برای نمایش آن الزامیست.<br>چناچه تصویر هنگام انتخاب جدید تغییر نکرد نادیده بگیرید.', 'n_b_w_fenix_path'),

            'fields' => [
                [
                    'name' => __('فعال', 'n_b_w_fenix_path'),
                    'id' => 'kernel',
                    "path" => "/inc/core/kernel.php",
                    'type' => 'php',
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