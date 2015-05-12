<?php

namespace Zoddo\PhpbbExtensionInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class PhpbbExtensionInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new PhpbbExtensionInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}