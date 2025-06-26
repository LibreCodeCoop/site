<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'matomo_container' => 'Ux1Y5m98_dev_08f02616a270a3d80b35beb7',
    'baseUrl' => '/',
    'title' => 'LibreCode',
    'description' => 'Cooperativa de tecnologia da informação especializada em desenvolvimento de soluções com licença livre.',
    'collections' => [
        'posts' => [
            'path' => 'posts/{-title}',
            'author' => 'LibreCode',
            'sort' => '-date',
            'map' => function ($post) {
                $postLang = current_path_locale($post);
                $path = 'assets/images/posts/'.$post->getFilename();
                $alternativePath = 'assets/images/posts/'. str_replace($postLang . '_', '', $post->getFilename());
                $items = $post->get('collections');
                $author = array_filter($items->all(), function($author) use ($post){
                    return $author->name === $post->author;
                });
                if(!empty($author)){
                    $author = current($author);
                    $post->set('gravatar', $author->gravatar);
                }

                if(empty($post->cover_image)){
                    if(file_exists(__DIR__.'/source/'.$path.'/cover.jpg')){
                        $post->set('cover_image',$post->baseUrl.$path.'/cover.jpg');
                    } elseif(file_exists(__DIR__.'/source/'.$alternativePath.'/cover.jpg')){
                        $post->set('cover_image',$post->baseUrl.$alternativePath.'/cover.jpg');
                    } else {
                        $post->set('cover_image',$post->baseUrl.'assets/images/logo/librecode.png');
                    }
                }

                if(empty($post->banner)){
                    if(file_exists(__DIR__.'/source/'.$path.'/banner.jpg')){
                        $post->set('banner',$post->baseUrl.$path.'/banner.jpg');
                    } elseif(file_exists(__DIR__.'/source/'.$alternativePath.'/banner.jpg')){
                        $post->set('banner',$post->baseUrl.$alternativePath.'/banner.jpg');
                    } else {
                        $post->set('banner',$post->baseUrl.'assets/images/logo/librecode.png');
                    }
                }

                return $post;
            }
        ],
        'team' => [
            'items' => [
                [
                    'name' => 'Crisciany Silva',
                    'gravatar' => 'f2f64ea713b5c39cb64268a0eda7e022',
                    'bio' => 'I\'m a Developer. I currently study the PHP language with a focus on the Laravel framework. I have professional experience in PHP on a web-oriented system and some system maintenance such as screen creation, reports with jasper reports and mpdf and system versioning with git.',
                    'role' => 'Software Engineer',
                    'social' => [
                        'github' => 'https://github.com/Any97Cris',
                        'linkedin' => 'https://www.linkedin.com/in/criscianysilva/'
                    ],
                ],
                [
                    'name' => 'Daiane Alves',
                    'gravatar' => 'fe9fbbf8677e78931af9a4a5da35e1ee' ,
                    'bio' => 'Passionate about technology and project management',
                    'role' => 'IT Project Management Specialist',
                    'social' => [
                        'linkedin' => 'https://www.linkedin.com/in/daianealvesrj/',
                    ]
                ],
                [
                    'name' => 'LibreCode',
                    'gravatar' => '' ,
                    'bio' => 'We are a digital cooperative of experts in free software development',
                    'role' => 'Cooperative',
                    'social' => [
                        'linkedin' => 'https://www.linkedin.com/company/librecodecoop/mycompany/',
                        'telegram' => 'https://t.me/LibreCodeCoop',
                        'instagram' => 'https://www.instagram.com/librecodecoop/',
                        'facebook' => 'https://www.facebook.com/librecodecoop/',
                        'github' => 'https://github.com/librecodecoop',
                    ]
                ],
            ],
        ]
    ],
];
