<?php

namespace Civi\ActionProviderAddon;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use CRM_ActionProviderAddon_ExtensionUtil as E;

class CompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if ($container->hasDefinition('action_provider')) {
            $actionProviderDefinition = $container->getDefinition('action_provider');
            $actionProviderDefinition->addMethodCall('addAction', [
                'ActionProviderAddonSetupOrganizationAndRelationship',
                'Civi\ActionProviderAddon\Actions\SetupOrganizationAndRelationship',
                E::ts('Setup Organization And Relationship.'),
                [],
            ]);
        }
    }
}
