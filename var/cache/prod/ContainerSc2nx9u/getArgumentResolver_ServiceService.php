<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('AppBundle\\Controller\\SecurityController:register' => function () {
    return ${($_ = isset($this->services['service_locator.v7pdaat']) ? $this->services['service_locator.v7pdaat'] : $this->load(__DIR__.'/getServiceLocator_V7pdaatService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\SecurityController::register' => function () {
    return ${($_ = isset($this->services['service_locator.v7pdaat']) ? $this->services['service_locator.v7pdaat'] : $this->load(__DIR__.'/getServiceLocator_V7pdaatService.php')) && false ?: '_'};
})));
