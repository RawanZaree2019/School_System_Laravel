<?php

/*
 * This file is part of the yoeunes/toastr package.
 * (c) Younes KHOUBZA <younes.khoubza@gmail.com>
 */

return array(
    'scripts' => array(
        'cdn' => array(
            'https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js',
            'https://cdn.jsdelivr.net/npm/@flasher/flasher-toastr@1.2.4/dist/flasher-toastr.min.js',
        ),
        'local' => array(
            '/vendor/flasher/jquery.min.js',
            '/vendor/flasher/flasher-toastr.min.js',
        ),
    ),

    'default_options' => array(
        'timeOut' => 2000, // زمن ظهور الإشعار (5 ثوانٍ) بالمللي ثانية
        'extendedTimeOut' => 2000, // زمن إضافي عند التفاعل مع الإشعار
        'progressBar' => true, // إظهار شريط التقدم
        'positionClass' => 'toast-top-left', // موقع الإشعار على الشاشة
    ),
);
