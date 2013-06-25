<?php

namespace Foolz\Foolfuuka\Plugins\ExternalLinks\Model;

class ExternalLinks
{
	public static function map($result)
	{
		$data = $result->getParam('data');
		$href = $result->getParam('build_href');

		switch ($data->shortname)
		{
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
				$href['short_link'] = 'http://reddit.com/'.$data->query.'/';
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
				// no break
			case 'ck':
				// no break
			case 'fa':
				// no break
			case 'ic':
				// no break
			case 'lit':
				$href['short_link'] = '//fuuka.warosu.org/'.$data->shortname.'/';
				$href['query_link'] = '//fuuka.warosu.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'cgl':
				// no break
			case 'mu':
				// no break
			case 'soc':
				// no break
			case 'w':
				$href['short_link'] = '//rbt.asia/'.$data->shortname.'/';
				$href['query_link'] = '//rbt.asia/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'diy':
				// no break
			case 'g':
				// no break
			case 'sci':
				$href['short_link'] = 'https://archive.installgentoo.net/'.$data->shortname.'/';
				$href['query_link'] = 'https://archive.installgentoo.net/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'an':
				// no break
			case 'fit':
				// no break
			case 'k':
				// no break
			case 'mlp':
				// no break
			case 'r9k':
				// no break
			case 'toy':
				// no break
			case 'x':
				$href['short_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/';
				$href['query_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'c':
				// no break
			case 'int':
				// no break
			case 'out':
				// no break
			case 'po':
				// no break
			case 'neet':
				$href['short_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/';
				$href['query_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'adv':
				// no break
			case 'asp':
				// no break
			case 'cm':
				// no break
			case 'i':
				// no break
			case 'lgbt':
				// no break
			case 'n':
				// no break
			case 'o':
				// no break
			case 'p':
				// no break
			case 's4s':
				// no break
			case 't':
				// no break
			case 'trv':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'd':
				// no break
			case 'h':
				// no break
			case 'v':
				$href['short_link'] = '//loveisover.me/'.$data->shortname.'/';
				$href['query_link'] = '//loveisover.me/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'a':
				// no break
			case 'co':
				// no break
			case 'gd':
				// no break
			case 'jp':
				// no break
			case 'm':
				// no break
			case 'q':
				// no break
			case 'sp':
				// no break
			case 'tg':
				// no break
			case 'tv':
				// no break
			case 'vg':
				// no break
			case 'vp':
				// no break
			case 'vr':
				// no break
			case 'wsg':
				// no break
			case 'dev':
				// no break
			case 'foolz':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'u':
				// no break
			case 'kuku':
				$href['short_link'] = '//nsfw.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//nsfw.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'beta':
				$href['short_link'] = '//beta.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//beta.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
			case 'blog':
				$href['short_link'] = 'http://blog.foolz.us/';
				$href['query_link'] = 'http://blog.foolz.us/'.$data->query.'/';
				break;
			case 'status':
				$href['short_link'] = '//status.foolz.us/';
				$href['query_link'] = '//status.foolz.us/service/foolz-archive/'.$data->query.'/';
				break;
		}

		$result->setParam('build_url', $href)->set($href);
	}
}