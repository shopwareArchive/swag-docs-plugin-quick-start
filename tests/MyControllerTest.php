<?php declare(strict_types=1);

namespace Swag\PluginQuickStartTests;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Framework\Test\TestCaseBase\AdminApiTestBehaviour;
use Shopware\Core\Framework\Test\TestCaseBase\KernelTestBehaviour;
use Shopware\Core\PlatformRequest;
use Symfony\Component\HttpFoundation\Response;

class MyControllerTest extends TestCase
{
    use KernelTestBehaviour;
    use AdminApiTestBehaviour;

    public function testMyFirstApi(): void
    {
        $this->getBrowser()->request('GET', '/api/v' . PlatformRequest::API_VERSION . '/_action/swag/my-api-action');
        $response = $this->getBrowser()->getResponse();

        /* @var Response $response */
        static::assertSame(Response::HTTP_OK, $response->getStatusCode());
        static::assertSame(
            'You successfully created your first controller route',
            \json_decode($response->getContent(), true)[0]
        );
    }
}
