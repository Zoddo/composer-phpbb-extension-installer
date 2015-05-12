<?php

namespace Zoddo\PhpbbExtensionInstaller;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class PhpbbExtensionInstaller extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        $extra = $this->composer->getPackage()->getExtra();
        if (empty($extra['phpbb-ext-install-dir']))
        {
            $extra['phpbb-ext-install-dir'] = 'ext';
        }

        return $extra['phpbb-ext-install-dir'] . '/' . $package->getName();
    }

    public function supports($packageType)
    {
        return $packageType == 'phpbb-extension';
    }
}