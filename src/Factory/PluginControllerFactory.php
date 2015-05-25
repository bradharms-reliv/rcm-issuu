<?php
/**
 * Service Factory for the Plugin Controller
 *
 * This file contains the factory needed to generate a Plugin Controller.
 *
 * PHP version 5.3
 *
 * LICENSE: BSD
 *
 * @category  Reliv
 * @package   RcmPlugins
 * @author    Westin Shafer <wshafer@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   GIT: <git_id>
 * @link      https://github.com/reliv
 */
namespace RcmIssuu\Factory;

use Rcm\Plugin\BaseController;
use RcmIssuu\Controller\PluginController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Service Factory for the Layout Manager
 *
 * Factory for the Layout Manager.
 *
 * @category  Reliv
 * @package   RcmPlugins
 * @author    Westin Shafer <wshafer@relivinc.com>
 * @copyright 2012 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: 1.0
 * @link      https://github.com/reliv
 *
 */
class PluginControllerFactory implements FactoryInterface
{
    /**
     * Create Service
     *
     * @param ServiceLocatorInterface $controllerManager Zend Controller Manager
     *
     * @return PluginController
     */
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        /** @var \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator */
        $serviceLocator = $controllerManager->getServiceLocator();

        return new BaseController(
            $serviceLocator->get('config'),
            'RcmIssuu'
        );
    }
}
