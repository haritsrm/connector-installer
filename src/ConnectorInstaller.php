<?php

namespace Magement\Connector\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ConnectorInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'magement-connector' === $packageType;
    }
}