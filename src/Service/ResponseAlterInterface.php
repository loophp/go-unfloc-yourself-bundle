<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\GoUnflocYourselfBundle\Service;

use Symfony\Component\HttpFoundation\Response;

interface ResponseAlterInterface
{
    public function alter(Response $response): Response;
}
