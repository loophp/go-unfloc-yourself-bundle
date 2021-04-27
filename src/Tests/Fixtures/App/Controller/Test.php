<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\GoUnflocYourselfBundle\Tests\Fixtures\App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @internal
 * @coversNothing
 */
final class Test
{
    /**
     * @Route("/")
     */
    public function __invoke(Request $request): Response
    {
        return new Response('Test', 200, (array) json_decode((string) $request->getContent(), true));
    }
}
