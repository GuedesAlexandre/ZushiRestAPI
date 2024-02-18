<?php

namespace ContainerXXPy0sw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeDataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_data_provider' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Symfony/Maker/MakeDataProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/TemplateLinter.php';

        $container->privates['maker.auto_command.make_data_provider'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \ApiPlatform\Core\Bridge\Symfony\Maker\MakeDataProvider(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService())), ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')), ($container->privates['maker.template_linter'] ?? ($container->privates['maker.template_linter'] = new \Symfony\Bundle\MakerBundle\Util\TemplateLinter($container->getEnv('default::string:MAKER_PHP_CS_FIXER_BINARY_PATH'), $container->getEnv('default::string:MAKER_PHP_CS_FIXER_CONFIG_PATH')))));

        $instance->setName('make:data-provider');
        $instance->setDescription('Creates an API Platform data provider');

        return $instance;
    }
}
