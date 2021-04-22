<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use loophp\GoUnflocYourselfBundle\EventListener\SetUnflocHeaders;
use loophp\GoUnflocYourselfBundle\Service\ResponseAlterInterface;
use loophp\GoUnflocYourselfBundle\Service\ResponseHeadersAlter;

return static function (ContainerConfigurator $container) {
    $container
        ->services()
        ->set(ResponseHeadersAlter::class)
        ->autowire()
        ->autoconfigure();

    $container
        ->services()
        ->alias(ResponseAlterInterface::class, ResponseHeadersAlter::class);

    $container
        ->services()
        ->set(SetUnflocHeaders::class)
        ->autowire()
        ->autoconfigure()
        ->tag(
            'kernel.event_listener',
            [
                'event' => 'kernel.response',
                'priority' => 4096,
            ]
        );
};
