<?php

namespace muyomu\punit;

use muyomu\inject\Proxy;
use ReflectionClass;

abstract class GenericTest implements PUnitTest
{
    public static function run(string $class):void{
        $proxy = new Proxy();
        $reflectionClass = new ReflectionClass($class);
        $reflectionMethod = $reflectionClass->getMethod("Test");
        $instance = $reflectionClass->newInstance();
        $proxyInstance = $proxy->getProxyInstance($instance);
        $reflectionMethod->invoke($proxyInstance);
    }
}