<?php

namespace Foolz\FoolFuuka\Plugins\ExternalLinks\Model;

class ExternalLinks
{
    public static function map($result)
    {
        $data = $result->getParam('data');
        $href = $result->getParam('build_href');

        try {
            $archives = json_decode(file_get_contents(__DIR__ . '/../../archives.json/archives.json'), true);
            foreach ($archives as $archive) {
                if (in_array($data->shortname, $archive['boards'])) {
                    $href['short_link'] = ($archive['http'] ? 'http' : 'https') . '://' . $archive['domain'] . '/' . $data->shortname . '/';
                    $href['query_link'] = ($archive['http'] ? 'http' : 'https') . '://' . $archive['domain'] . '/' . $data->shortname . '/post/' . $data->query . '/';
                    if ($archive['software'] === 'foolfuuka') {
                        $href['attributes'] = ' class="backlink" target="_blank" data-backlink="true" data-post="' . $data->query . '" data-board="' . $data->shortname . '" data-ffapi="true" data-external="' . $archive['domain'] . '"';
                    } else {
                        $href['attributes'] = ' target="_blank"';
                    }
                    $result->setParam('build_url', $href)->set($href);
                    return;
                }
            }
        } catch (\Exception $e) {}
    }
}
