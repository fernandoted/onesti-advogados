<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://onesti/onesti.yaml',
    'modified' => 1549848406,
    'data' => [
        'enabled' => true,
        'production-mode' => true,
        'grid-size' => 'grid-lg',
        'header-fixed' => true,
        'header-animated' => true,
        'header-dark' => false,
        'header-transparent' => false,
        'sticky-footer' => true,
        'blog-page' => '/blog',
        'spectre' => [
            'exp' => false,
            'icons' => false
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/onesti',
                            1 => 'user/themes/quark'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
