<?php

/*!
 * Pattern Lab Unified Asset Installer Plugin for Composer
 *
 * Copyright (c) 2013-2014 Dave Olsen, http://dmolsen.com
 * Licensed under the MIT license
 *
 * Makes sure plugins and the like get put in a special folder. Post-install move of assets
 * is handled by core/src/PatternLab/Installer.
 *
 * Based on phpDocumenter's UnifiedAssetsInstaller class. Original info:
 *
 * @copyright 2010-2013 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 *
 */

namespace PatternLab\Composer;

use \Composer\Installer\LibraryInstaller;
use \Composer\Package\PackageInterface;

class UnifiedAssetInstaller extends LibraryInstaller {
	
	/**
	* Determines the install path for all of the types
	*/
	public function getInstallPath(PackageInterface $package) {
		return "plugins/".$package->getPrettyName();
	}
	
	/**
	* Determines which composer types are supported
	*/
	public function supports($packageType) {
		return (bool) ('patternlab-plugin' === $packageType);
	}
	
}