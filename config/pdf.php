<?php
return [
    'mode'                 => '',
    'format'               => 'A4',
    'default_font_size'    => '14',
    'default_font'         => 'Arial',
    'margin_left'          => 10,
    'margin_right'         => 10,
    'margin_top'           => 10,
    'margin_bottom'        => 10,
    'margin_header'        => 0,
    'margin_footer'        => 0,

    'orientation'          => 'P',
    'title'                => 'RCAT',
    'author'               => 'RCAT',
    'watermark'            => '',
    'show_watermark'       => false,
    'watermark_font'       => 'sans-serif',
    'display_mode'         => 'fullpage',
    'watermark_text_alpha' => 0.1,
    'custom_font_dir' => base_path('resources/fonts/'), // don't forget the trailing slash!
    'custom_font_data' => [
        'cairo' => [
            'R'  => 'Cairo-Regular.ttf',    // regular font
            'B'  => 'Cairo-Bold.ttf',       // optional: bold font
            'I'  => 'Cairo-Italic.ttf',     // optional: italic font
            'BI' => 'Cairo-BoldItalic.ttf', // optional: bold-italic font,
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ]
        // ...add as many as you want.
    ],
    'auto_language_detection'  => true,
    'temp_dir'               => '',
];
