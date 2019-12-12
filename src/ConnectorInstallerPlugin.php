<?php

namespace Magement\Connector;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class ConnectorInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new ConnectorInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}