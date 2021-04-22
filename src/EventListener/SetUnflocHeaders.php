<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\GoUnflocYourselfBundle\EventListener;

use loophp\GoUnflocYourselfBundle\Service\ResponseAlterInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

final class SetUnflocHeaders
{
    private ResponseAlterInterface $responseAlter;

    public function __construct(ResponseAlterInterface $responseAlter)
    {
        $this->responseAlter = $responseAlter;
    }

    public function __invoke(ResponseEvent $event): void
    {
        ($this->responseAlter)->alter($event->getResponse());
    }
}
