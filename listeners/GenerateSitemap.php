<?php namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use samdark\sitemap\Sitemap;

class GenerateSitemap
{
    public function handle(Jigsaw $jigsaw)
    {
        $locale = file_get_contents('CNAME');
        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getOutputPaths())->each(function ($path) use ($locale, $sitemap) {
            echo $path;
            if (! $this->isAsset($path)) {
                $path = count(explode('/', $path)) === 1 ? '/'.$path : $path;
                $url = 'https://'. $locale . $path;
                $sitemap->addItem($url, time(), Sitemap::DAILY);
            }
        });

        $sitemap->write();
    }

    public function isAsset($path)
    {
        return str_starts_with($path, '/assets');
    }
}