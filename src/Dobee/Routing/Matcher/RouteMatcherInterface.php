<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/1/29
 * Time: 下午2:31
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 */

namespace Dobee\Routing\Matcher;

use Dobee\Routing\RouteInterface;
use Dobee\Routing\RouteCollections;

/**
 * Interface RouteMatcherInterface
 *
 * @package Dobee\Routing\Matcher
 */
interface RouteMatcherInterface
{
    /**
     * @param                $uri
     * @param RouteCollections $collections
     * @return mixed
     */
    public static function match($uri, RouteCollections $collections = null);

    /**
     * @param                $uri
     * @param RouteInterface $route
     * @return mixed
     */
    public static function matchRequestRoute($uri, RouteInterface $route);

    /**
     * @param                $method
     * @param RouteInterface $route
     * @return mixed
     */
    public static function matchRequestMethod($method, RouteInterface $route);

    /**
     * @param                $format
     * @param RouteInterface $route
     * @return mixed
     */
    public static function matchRequestFormat($format, RouteInterface $route);
}