<?php
// +----------------------------------------------------------------------
// | PHP go
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2088 http://godok.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: fafa <fafa2088@qq.com>
// +----------------------------------------------------------------------

namespace Godok\Installer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;

class GoApp extends LibraryInstaller
{

    /**
     * 安装目录
     */
    public function getInstallPath(PackageInterface $package)
    {


        if ($this->composer->getPackage()) {
            $extra = $this->composer->getPackage()->getExtra();
            if (!empty($extra['app-path'])) {
                return $extra['app-path'];
            }
        }

        return 'goapp';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'godok-app' === $packageType;
    }
}