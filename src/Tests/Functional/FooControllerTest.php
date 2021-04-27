<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\GoUnflocYourselfBundle\Tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @internal
 * @coversNothing
 */
final class FooControllerTest extends WebTestCase
{
    public function testItTestIfHeadersAreProperlySet(): void
    {
        $client = self::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertResponseHeaderSame('Permissions-Policy', 'interest-cohort=()');

        $crawler = $client->request('GET', '/', [], [], [], json_encode(['Permissions-Policy' => 'foo']));

        $this->assertResponseHeaderSame('Permissions-Policy', 'foo');
    }
}
