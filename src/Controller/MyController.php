<?php declare(strict_types=1);

namespace Swag\PluginQuickStart\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Swag\PluginQuickStart\Service\MyService;
use Shopware\Core\Framework\Context;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @RouteScope(scopes={"api"})
 */
class MyController extends AbstractController
{
    /**
     * @var MyService
     */
    private $myService;

    public function __construct(MyService $myService)
    {
        $this->myService = $myService;
    }

    /**
     * @Route("/api/v{version}/_action/swag/my-api-action", name="api.action.swag.my-api-action", methods={"GET"})
     */
    public function myFirstApi(Request $request, Context $context): JsonResponse
    {
        $this->myService->doSomething();

        return new JsonResponse(['You successfully created your first controller route']);
    }
}
