<?php

use Joaopaulolndev\FilamentGeneralSettings\Enums\TypeFieldEnum;

return [
    'show_application_tab' => true,
    'show_analytics_tab' => true,
    'show_seo_tab' => true,
    'show_email_tab' => true,
    'show_social_networks_tab' => true,
    'expiration_cache_config_time' => 60,
    'show_custom_tabs'=> true,
    'custom_tabs' => [
        'more_configs' => [
            'label' => 'Other',
            'icon' => 'heroicon-o-plus-circle',
            'columns' => 1,
            'fields' => [
                'address' => [
                    'type' => TypeFieldEnum::Text->value,
                    'label' => 'Address',
                    'placeholder' => '',
                    'required' => false,
                    'rules' => 'string|max:255',
                ],
            ]
        ],
    ]
];
