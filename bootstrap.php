<?php

if ( ! defined('DOCROOT'))
	exit('No direct script access allowed.');

\Foolz\Plugin\Event::forge('foolz\plugin\plugin.execute.foolz/foolz_external_links')
	->setCall(function($result) {

		\Foolz\Plugin\Event::forge('fu.comment_model.process_external_links.html_result')
			->setCall(function($result) {

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
					case 'youtube':
						$href['short_link'] = '//youtu.be/';
						$href['query_link'] = '//youtu.be/'.$data->query;
						$href['attributes'] = ' data-function="youtube" data-video="'.$data->query.'"';
						break;


					case 'ck':
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
						$href['short_link'] = '//archive.rebeccablacktech.com/'.$data->shortname.'/';
						$href['query_link'] = '//archive.rebeccablacktech.com/'.$data->shortname.'/post/'.$data->query.'/';
						break;
					case 'diy':
						// no break
					case 'g':
						// no break
					case 'sci':
						$href['short_link'] = '//archive.installgentoo.net/'.$data->shortname.'/';
						$href['query_link'] = '//archive.installgentoo.net/'.$data->shortname.'/post/'.$data->query.'/';
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


					case 'dev':
						// no break
					case 'foolz':
						$href['short_link'] = '//archive.foolz.us/'.$data->shortname.'/';
						$href['query_link'] = '//archive.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
						break;
					case 'pc':
						$href['short_link'] = '//archive.foolz.us/foolz/';
						$href['query_link'] = '//archive.foolz.us/foolz/post/'.$data->query.'/';
						break;
					case 'kuku':
						// no break
					case 'u':
						$href['short_link'] = '//nsfw.foolz.us/'.$data->shortname.'/';
						$href['query_link'] = '//nsfw.foolz.us/'.$data->shortname.'/post/'.$data->query.'/';
						break;
				}

				$result->setParam('build_url', $href)->set($href);

			})->setPriority(10);

	});
