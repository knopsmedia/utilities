<?php declare(strict_types=1);

namespace Knops\Utilities\Traits;

use Psr\Http\Message\ResponseInterface as Response;

trait ControllerTrait
{
    public function json(Response $response, $body, int $flags = 0): Response
    {
        $response->getBody()->write(json_encode($body, $flags));

        return $response;
    }
}