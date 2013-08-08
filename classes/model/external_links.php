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
				$href['short_link'] = '//fuuka.warosu.org/'.$data->shortname.'/';
				$href['query_link'] = '//fuuka.warosu.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'ck':
				$href['short_link'] = '//fuuka.warosu.org/'.$data->shortname.'/';
				$href['query_link'] = '//fuuka.warosu.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'fa':
				$href['short_link'] = '//fuuka.warosu.org/'.$data->shortname.'/';
				$href['query_link'] = '//fuuka.warosu.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'ic':
				$href['short_link'] = '//fuuka.warosu.org/'.$data->shortname.'/';
				$href['query_link'] = '//fuuka.warosu.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
					
			case 'lit':
				$href['short_link'] = '//fuuka.warosu.org/'.$data->shortname.'/';
				$href['query_link'] = '//fuuka.warosu.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'cgl':
				$href['short_link'] = '//archive.rebeccablacktech.com'.$data->shortname.'/';
				$href['query_link'] = '//archive.rebeccablacktech.com'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'mu':
				$href['short_link'] = '//archive.rebeccablacktech.com'.$data->shortname.'/';
				$href['query_link'] = '//archive.rebeccablacktech.com'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'soc':
				$href['short_link'] = '//archive.rebeccablacktech.com'.$data->shortname.'/';
				$href['query_link'] = '//archive.rebeccablacktech.com'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'w':
				$href['short_link'] = '//archive.nyafuu.org/'.$data->shortname.'/';
				$href['query_link'] = '//archive.nyafuu.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
			
			case 'wg':
				$href['short_link'] = '//archive.nyafuu.org/'.$data->shortname.'/';
				$href['query_link'] = '//archive.nyafuu.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'diy':
				$href['short_link'] = 'https://archive.installgentoo.net/'.$data->shortname.'/';
				$href['query_link'] = 'https://archive.installgentoo.net/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'g':
				$href['short_link'] = '//archive.rebeccablacktech.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.rebeccablacktech.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'sci':
				$href['short_link'] = 'https://archive.installgentoo.net/'.$data->shortname.'/';
				$href['query_link'] = 'https://archive.installgentoo.net/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'an':
				$href['short_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/';
				$href['query_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'fit':
				$href['short_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/';
				$href['query_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'k':
				$href['short_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/';
				$href['query_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'mlp':
				$href['short_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/';
				$href['query_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'r9k':
				$href['short_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/';
				$href['query_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'toy':
				$href['short_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/';
				$href['query_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'x':
				$href['short_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/';
				$href['query_link'] = 'http://archive.heinessen.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'c':
				$href['short_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/';
				$href['query_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'int':
				$href['short_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/';
				$href['query_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'out':
				$href['short_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/';
				$href['query_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'po':
				$href['short_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/';
				$href['query_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'neet':
				$href['short_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/';
				$href['query_link'] = '//archive.thedarkcave.org/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'adv':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'asp':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'cm':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'i':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'lgbt':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'n':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'o':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'p':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 's4s':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 't':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'trv':
				$href['short_link'] = '//archive.foolzashit.com/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolzashit.com/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'b':
				$href['short_link'] = 'http://fuuka.worldathleticproject.org/b/'.$data->shortname.'/';
				$href['query_link'] = 'http://fuuka.worldathleticproject.org/b/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 's':
				$href['short_link'] = 'http://fuuka.worldathleticproject.org/b/'.$data->shortname.'/';
				$href['query_link'] = 'http://fuuka.worldathleticproject.org/b/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'd':
				// no break
				
			case 'h':
				$href['short_link'] = 'http://fuuka.worldathleticproject.org/b/'.$data->shortname.'/';
				$href['query_link'] = 'http://fuuka.worldathleticproject.org/b/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'hc':
				$href['short_link'] = 'http://fuuka.worldathleticproject.org/b/'.$data->shortname.'/';
				$href['query_link'] = 'http://fuuka.worldathleticproject.org/b/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'v':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'a':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'co':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'gd':
				// no break
				
			case 'jp':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'm':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'q':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'sp':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'tg':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'tv':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'vg':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'vp':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'vr':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'wsg':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'dev':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
				
			case 'foolz':
				$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;

			case 'u':
				$href['short_link'] = '//nsfw.foolz.us/'.$data->shortname.'/';
				$href['query_link'] = '//nsfw.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
				break;
								
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