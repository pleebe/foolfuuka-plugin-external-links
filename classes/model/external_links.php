<?php

namespace Foolz\Foolfuuka\Plugins\ExternalLinks\Model;

class ExternalLinks
{
    public static function map($result)
    {
        $data = $result->getParam('data');
        $href = $result->getParam('build_href');

        switch ($data->shortname) {
            case 'warosu':
                $href['short_link'] = '//fuuka.warosu.org/jp/';
                $href['query_link'] = '//fuuka.warosu.org/jp/post/'.$data->query.'/';
                break;
            case 'rizon':
                $href['short_link'] = '//qchat.rizon.net';
                $href['query_link'] = '//qchat.rizon.net/?channels=#'.$data->query;
                break;
            case 'irchighway':
                $href['short_link'] = 'http://webchat.irchighway.net/';
                $href['query_link'] = 'http://webchat.irchighway.net/?channels=#'.$data->query;
                break;
            case 'siztra':
                $href['short_link'] = '//qchat.rizon.net/?channels=#siztra~';
                $href['query_link'] = '//qchat.rizon.net/?channels=#siztra~';
                break;

            case '9fag':
                $href['short_link'] = '//9gag.com/';
                $href['query_link'] = '//9gag.com/gag/'.$data->query;
                break;
            case 'gaia':
                $href['short_link'] = 'http://www.gaiaonline.com/profiles/woxxy/8585700/';
                $href['query_link'] = 'http://www.gaiaonline.com/profiles/woxxy/8585700/';
                break;
            case 'moe':
                $href['short_link'] = 'http://doushio.com/'.$data->shortname.'/';
                $href['query_link'] = 'http://doushio.com/'.$data->shortname.'/'.$data->query;
                break;
            case 'reddit':
                $href['short_link'] = 'http://reddit.com/'.$data->query;
                $href['query_link'] = 'http://reddit.com/r/'.$data->query.'/';
                break;
            case 'teaparty':
                $href['short_link'] = 'http://www.seacats.net/'.$data->shortname.'/';
                $href['query_link'] = 'http://www.seacats.net/'.$data->shortname.'/res/'.$data->query.'.html';
                break;
            case 'twitter':
                $href['short_link'] = '//twitter.com/';
                $href['query_link'] = '//twitter.com/'.$data->query.'/';
                break;
            case 'youtube':
                $href['short_link'] = '//youtu.be/';
                $href['query_link'] = '//youtu.be/'.$data->query;
                $href['attributes'] = ' data-function="youtube" data-video="'.$data->query.'"';
                break;

            case '3':
            case 'ck':
            case 'fa':
            case 'ic':
            case 'lit':
                $href['short_link'] = '//warosu.org/'.$data->shortname.'/';
                $href['query_link'] = '//warosu.org/'.$data->shortname.'/post/'.$data->query.'/';
                break;

            case 'cgl':
            case 'con':
            case 'g':
            case 'mu':
                $href['short_link'] = '//rbt.asia/'.$data->shortname.'/';
                $href['query_link'] = '//rbt.asia/'.$data->shortname.'/post/'.$data->query.'/';
                break;

            case 'e':
            case 'w':
            case 'wg':
                $href['short_link'] = '//archive.nyafuu.org/'.$data->shortname.'/';
                $href['query_link'] = '//archive.nyafuu.org/'.$data->shortname.'/post/'.$data->query.'/';
                break;

            case 'an':
            case 'fit':
            case 'k':
            case 'mlp':
            case 'r9k':
            case 'toy':
            case 'x':
                $href['short_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/';
                $href['query_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/post/'.$data->query.'/';
                break;

            case 'c':
            case 'int':
            case 'out':
            case 'po':
            case 'neet':
                $href['short_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/';
                $href['query_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/post/'.$data->query.'/';
                break;

            case 'a':
            case 'biz':
            case 'co':
            case 'diy':
            case 'gd':
            case 'jp':
            case 'm':
            case 'q':
            case 'sci':
            case 'sp':
            case 'tg':
            case 'tv':
            case 'vg':
            case 'vp':
            case 'vr':
            case 'wsg':
            case 'dev':
            case 'foolz':
                $href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
                $href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
                break;

            case 'u':
            case 'kuku':
                $href['short_link'] = '//nsfw.foolz.us/'.$data->shortname.'/';
                $href['query_link'] = '//nsfw.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
                break;

            case 'beta':
                $href['short_link'] = '//beta.foolz.us/'.$data->shortname.'/';
                $href['query_link'] = '//beta.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
                break;

            case 'blog':
                $href['short_link'] = '//blog.foolz.us/';
                $href['query_link'] = '//blog.foolz.us/'.$data->query.'/';
                break;

            case 'status':
                $href['short_link'] = '//status.foolz.us/';
                $href['query_link'] = '//status.foolz.us/';
                break;
        }

        $result->setParam('build_url', $href)->set($href);
    }
}
