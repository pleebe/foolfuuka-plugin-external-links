<?php

use Foolz\Foolframe\Model\Autoloader;
use Foolz\Foolframe\Model\Context;
use Foolz\Plugin\Event;

class HHVM_ExLinks
{
    public function run()
    {
        Event::forge('Foolz\Plugin\Plugin::execute.foolz/foolfuuka-plugin-external-links')
            ->setCall(function ($result) {
                /** @var Context $context */
                $context = $result->getParam('context');
                /** @var Autoloader $autoloader */
                $autoloader = $context->getService('autoloader');
                $autoloader->addClassMap([
                    'Foolz\Foolfuuka\Plugins\ExternalLinks\Model\ExternalLinks' => __DIR__.'/classes/model/external_links.php'
                ]);

                Event::forge('Foolz\Foolfuuka\Model\Comment::processExternalLinks.result.html')
                    ->setCall('Foolz\Foolfuuka\Plugins\ExternalLinks\Model\ExternalLinks::map')
                    ->setPriority(10);
            });
    }
}

(new HHVM_ExLinks())->run();
