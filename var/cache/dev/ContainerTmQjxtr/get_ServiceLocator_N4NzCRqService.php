<?php

namespace ContainerTmQjxtr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N4NzCRqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.N4NzCRq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.N4NzCRq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator._1ARgjp.App\\Controller\\Admin\\DashboardController::configureUserMenu()', 'getDashboardControllerconfigureUserMenuService', true],
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => ['privates', '.service_locator.GLGWHcU.App\\Controller\\Admin\\UserCrudController::configureCrud()', 'getUserCrudControllerconfigureCrudService', true],
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => ['privates', '.service_locator.49XXFvZ.App\\Controller\\Admin\\UserCrudController::configureAssets()', 'getUserCrudControllerconfigureAssetsService', true],
            'App\\Controller\\Admin\\UserCrudController::configureActions' => ['privates', '.service_locator.LHPXyzR.App\\Controller\\Admin\\UserCrudController::configureActions()', 'getUserCrudControllerconfigureActionsService', true],
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => ['privates', '.service_locator.3Xb4Hur.App\\Controller\\Admin\\UserCrudController::configureFilters()', 'getUserCrudControllerconfigureFiltersService', true],
            'App\\Controller\\Admin\\UserCrudController::index' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::index()', 'getUserCrudControllerindexService', true],
            'App\\Controller\\Admin\\UserCrudController::detail' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::detail()', 'getUserCrudControllerdetailService', true],
            'App\\Controller\\Admin\\UserCrudController::edit' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::edit()', 'getUserCrudControllereditService', true],
            'App\\Controller\\Admin\\UserCrudController::new' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::new()', 'getUserCrudControllernewService', true],
            'App\\Controller\\Admin\\UserCrudController::delete' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::delete()', 'getUserCrudControllerdeleteService', true],
            'App\\Controller\\Admin\\UserCrudController::batchDelete' => ['privates', '.service_locator.PNgi4kB.App\\Controller\\Admin\\UserCrudController::batchDelete()', 'getUserCrudControllerbatchDeleteService', true],
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::autocomplete()', 'getUserCrudControllerautocompleteService', true],
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.iydwXyk.App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder()', 'getUserCrudControllercreateIndexQueryBuilderService', true],
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::renderFilters()', 'getUserCrudControllerrenderFiltersService', true],
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => ['privates', '.service_locator.P.blNFL.App\\Controller\\Admin\\UserCrudController::updateEntity()', 'getUserCrudControllerupdateEntityService', true],
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => ['privates', '.service_locator.P.blNFL.App\\Controller\\Admin\\UserCrudController::persistEntity()', 'getUserCrudControllerpersistEntityService', true],
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => ['privates', '.service_locator.P.blNFL.App\\Controller\\Admin\\UserCrudController::deleteEntity()', 'getUserCrudControllerdeleteEntityService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => ['privates', '.service_locator.o3gmRre.App\\Controller\\Admin\\UserCrudController::createEditForm()', 'getUserCrudControllercreateEditFormService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => ['privates', '.service_locator.o3gmRre.App\\Controller\\Admin\\UserCrudController::createEditFormBuilder()', 'getUserCrudControllercreateEditFormBuilderService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => ['privates', '.service_locator.o3gmRre.App\\Controller\\Admin\\UserCrudController::createNewForm()', 'getUserCrudControllercreateNewFormService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => ['privates', '.service_locator.o3gmRre.App\\Controller\\Admin\\UserCrudController::createNewFormBuilder()', 'getUserCrudControllercreateNewFormBuilderService', true],
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => ['privates', '.service_locator.OgOMxLk.App\\Controller\\Admin\\UserCrudController::configureResponseParameters()', 'getUserCrudControllerconfigureResponseParametersService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator._1ARgjp.App\\Controller\\Admin\\DashboardController::configureUserMenu()', 'getDashboardControllerconfigureUserMenuService', true],
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => ['privates', '.service_locator.GLGWHcU.App\\Controller\\Admin\\UserCrudController::configureCrud()', 'getUserCrudControllerconfigureCrudService', true],
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => ['privates', '.service_locator.49XXFvZ.App\\Controller\\Admin\\UserCrudController::configureAssets()', 'getUserCrudControllerconfigureAssetsService', true],
            'App\\Controller\\Admin\\UserCrudController:configureActions' => ['privates', '.service_locator.LHPXyzR.App\\Controller\\Admin\\UserCrudController::configureActions()', 'getUserCrudControllerconfigureActionsService', true],
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => ['privates', '.service_locator.3Xb4Hur.App\\Controller\\Admin\\UserCrudController::configureFilters()', 'getUserCrudControllerconfigureFiltersService', true],
            'App\\Controller\\Admin\\UserCrudController:index' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::index()', 'getUserCrudControllerindexService', true],
            'App\\Controller\\Admin\\UserCrudController:detail' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::detail()', 'getUserCrudControllerdetailService', true],
            'App\\Controller\\Admin\\UserCrudController:edit' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::edit()', 'getUserCrudControllereditService', true],
            'App\\Controller\\Admin\\UserCrudController:new' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::new()', 'getUserCrudControllernewService', true],
            'App\\Controller\\Admin\\UserCrudController:delete' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::delete()', 'getUserCrudControllerdeleteService', true],
            'App\\Controller\\Admin\\UserCrudController:batchDelete' => ['privates', '.service_locator.PNgi4kB.App\\Controller\\Admin\\UserCrudController::batchDelete()', 'getUserCrudControllerbatchDeleteService', true],
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::autocomplete()', 'getUserCrudControllerautocompleteService', true],
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.iydwXyk.App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder()', 'getUserCrudControllercreateIndexQueryBuilderService', true],
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => ['privates', '.service_locator.HOzo2Xr.App\\Controller\\Admin\\UserCrudController::renderFilters()', 'getUserCrudControllerrenderFiltersService', true],
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => ['privates', '.service_locator.P.blNFL.App\\Controller\\Admin\\UserCrudController::updateEntity()', 'getUserCrudControllerupdateEntityService', true],
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => ['privates', '.service_locator.P.blNFL.App\\Controller\\Admin\\UserCrudController::persistEntity()', 'getUserCrudControllerpersistEntityService', true],
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => ['privates', '.service_locator.P.blNFL.App\\Controller\\Admin\\UserCrudController::deleteEntity()', 'getUserCrudControllerdeleteEntityService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => ['privates', '.service_locator.o3gmRre.App\\Controller\\Admin\\UserCrudController::createEditForm()', 'getUserCrudControllercreateEditFormService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => ['privates', '.service_locator.o3gmRre.App\\Controller\\Admin\\UserCrudController::createEditFormBuilder()', 'getUserCrudControllercreateEditFormBuilderService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => ['privates', '.service_locator.o3gmRre.App\\Controller\\Admin\\UserCrudController::createNewForm()', 'getUserCrudControllercreateNewFormService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => ['privates', '.service_locator.o3gmRre.App\\Controller\\Admin\\UserCrudController::createNewFormBuilder()', 'getUserCrudControllercreateNewFormBuilderService', true],
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => ['privates', '.service_locator.OgOMxLk.App\\Controller\\Admin\\UserCrudController::configureResponseParameters()', 'getUserCrudControllerconfigureResponseParametersService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::index' => '?',
            'App\\Controller\\Admin\\UserCrudController::detail' => '?',
            'App\\Controller\\Admin\\UserCrudController::edit' => '?',
            'App\\Controller\\Admin\\UserCrudController::new' => '?',
            'App\\Controller\\Admin\\UserCrudController::delete' => '?',
            'App\\Controller\\Admin\\UserCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:index' => '?',
            'App\\Controller\\Admin\\UserCrudController:detail' => '?',
            'App\\Controller\\Admin\\UserCrudController:edit' => '?',
            'App\\Controller\\Admin\\UserCrudController:new' => '?',
            'App\\Controller\\Admin\\UserCrudController:delete' => '?',
            'App\\Controller\\Admin\\UserCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => '?',
            'App\\Controller\\SecurityController:login' => '?',
        ]);
    }
}
