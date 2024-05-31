<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '/',
    'title' => 'LibreCode',
    'description' => 'Website description.',
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
                        $post->set('cover_image',$post->baseUrl.'assets/images/logo/logo.png');
                    }
                }

                if(empty($post->banner)){
                    if(file_exists(__DIR__.'/source/'.$path.'/banner.jpg')){
                        $post->set('banner',$post->baseUrl.$path.'/banner.jpg');
                    } elseif(file_exists(__DIR__.'/source/'.$alternativePath.'/banner.jpg')){
                        $post->set('banner',$post->baseUrl.$alternativePath.'/banner.jpg');
                    } else {
                        $post->set('banner',$post->baseUrl.'assets/images/logo/logo.png');
                    }
                }

                return $post;
            }
        ],
    ],
];
