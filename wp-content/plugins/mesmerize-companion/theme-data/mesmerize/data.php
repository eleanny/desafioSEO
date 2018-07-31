<?php

return array(
    'version'      => '1.0.50',
    'content_type' => 'free',
    'themes'       =>
        array(
            0 => 'mesmerize',
        ),
    'theme_type'   => 'multipage',
    'data'         =>
        array(
            'bgColorPalette' =>
                array(
                    0 => '#ffffff',
                    1 => '#F5FAFD',
                ),
            'fonts'          =>
                array(),
            'headers'        =>
                array(),
            'footers'        =>
                array(),
        ),
    'customizer'   =>
        array(
            'panels'   =>
                array(
                    'page_content_panel' =>
                        array(
                            'class'    => 'Mesmerize\Customizer\Panels\ContentPanel',
                            'disabled' => false,
                            'wp_data'  =>
                                array(
                                    'title'    => 'Page Content',
                                    'priority' => 2,
                                ),
                        ),
                ),
            'sections' =>
                array(),
            'settings' =>
                array(),
        ),
);
