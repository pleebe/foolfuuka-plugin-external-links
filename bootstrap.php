<?php

\Foolz\Plugin\Event::forge('Foolz\Plugin\Plugin::execute.foolz/foolfuuka-plugin-external-links')
	->setCall(function($result) {
		\Autoloader::add_classes([
			'Foolz\Foolfuuka\Plugins\ExternalLinks\Model\ExternalLinks' => __DIR__.'/classes/model/external_links.php'
		]);

		\Foolz\Plugin\Event::forge('Foolz\Foolfuuka\Model\Comment::processExternalLinks.result.html')
			->setCall('Foolz\Foolfuuka\Plugins\ExternalLinks\Model\ExternalLinks::map')
			->setPriority(10);
	});