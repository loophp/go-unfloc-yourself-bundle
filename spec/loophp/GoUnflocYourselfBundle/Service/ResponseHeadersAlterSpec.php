<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\loophp\GoUnflocYourselfBundle\Service;

use loophp\GoUnflocYourselfBundle\Service\ResponseHeadersAlter;
use PhpSpec\ObjectBehavior;
use Symfony\Component\HttpFoundation\Response;

class ResponseHeadersAlterSpec extends ObjectBehavior
{
    public function it_can_add_floc_headers()
    {
        $response = new Response();

        $this
            ->alter($response)
            ->headers
            ->get('Permissions-Policy')
            ->shouldReturn('interest-cohort=()');

        $response = new Response(
            '',
            200,
            [
                'Permissions-Policy' => 'foo',
            ]
        );

        $this
            ->alter($response)
            ->headers
            ->get('Permissions-Policy')
            ->shouldReturn('foo');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(ResponseHeadersAlter::class);
    }
}
