<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\GoUnflocYourselfBundle\Service;

use Symfony\Component\HttpFoundation\Response;

final class ResponseHeadersAlter implements ResponseAlterInterface
{
    public function alter(Response $response): Response
    {
        if (false === $response->headers->has('Permissions-Policy')) {
            $response
                ->headers
                ->add(
                    [
                        'Permissions-Policy' => 'interest-cohort=()',
                    ]
                );
        }

        return $response;
    }
}
