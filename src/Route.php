<?php
declare(strict_types=1);
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace FastD\Routing;


/**
 * Class Route
 *
 * @package FastD\Routing
 */
class Route
{
    /**
     * @var array
     */
    public array $parameters = [];

    /**
     * @var string
     */
    public string $method = 'GET';

    /**
     * @var string
     */
    public string $handler;

    /**
     * @var array
     */
    public array $middlewares = [];

    /**
     * @var string
     */
    public string $regex;

    /**
     * @var array
     */
    public array $variables;

    /**
     * @param string $method
     * @param mixed $handler
     * @param string $regex
     * @param mixed[] $variables
     * @param array $middlewares
     * @param array $parameters
     */
    public function __construct(string $method, string $handler, string $regex = '', array $variables, array $middlewares = [], array $parameters = [])
    {
        $this->method = $method;
        $this->handler = $handler;
        $this->regex = $regex;
        $this->variables = $variables;
        $this->middlewares = $middlewares;
        $this->parameters = $parameters;
    }

    /**
     * Tests whether this route matches the given string.
     * @param string $str
     * @return bool
     */
    public function matches(string $str): bool
    {
        $regex = '~^' . $this->regex . '$~';

        return (bool) preg_match($regex, $str);
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     * @return Route
     */
    public function setParameters(array $parameters): Route
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * @param string $middleware
     * @return $this
     */
    public function addMiddleware(string $middleware): Route
    {
        $this->middlewares[] = $middleware;

        return $this;
    }

    /**
     * @param array $middlewares
     * @return Route
     */
    public function setMiddlewares(array $middlewares): Route
    {
        foreach ($middlewares as $middleware) {
            $this->middlewares[] = $middleware;
        }

        return $this;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}
