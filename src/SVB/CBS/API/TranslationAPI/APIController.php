<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 14:03
 */

namespace SVB\CBS\API;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Seven\RpcBundle\JsonRpc\Server;
use SVB\CBS\API\Handler\CalcHandler;
use Symfony\Component\HttpFoundation\Request;

class APIController extends Controller
{
    public function handleAction(Request $request)
    {
        // Create JSON-RPC Server
        $server = new Server();

        // Add handlers
        $server->addHandler('help', function() { return "Use methods calc.add, calc.sub and calc.div."; });
        $server->addHandler('calc', CalcHandler::class);

        // Handler request and return response
        return $server->handle($request);
    }
}