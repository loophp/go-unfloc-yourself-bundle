<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\GoUnflocYourselfBundle\Tests\Integration\Service;

use loophp\GoUnflocYourselfBundle\Service\ResponseHeadersAlter;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * @internal
 * @coversNothing
 */
final class ResponseAlterTest extends KernelTestCase
{
    public function testSomething()
    {
        self::bootKernel();

        $container = self::$container;

        $service = $container->get(ResponseHeadersAlter::class);

        self::assertInstanceOf(ResponseHeadersAlter::class, $service);
    }
}
