<?php

declare(strict_types = 1);

/*
 * Version 1.0.0
 * 
 * This file is part of the package ExtensionBuilder/EbExpandTexticon
 * 
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 * 
 * 
 * Extension created with Extension Builder for TYPO3
 *   Version Editor:  0.4.101
 *   Version Core:    0.4.87
 *   Build date/time: 9.1.2025 18:58:49
 * 
 */

namespace ExtensionBuilder\EbExpandTexticon\Icons;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use BK2K\BootstrapPackage\Icons\IconProviderInterface;
use BK2K\BootstrapPackage\Icons\IconList;
use BK2K\BootstrapPackage\Icons\SvgIcon;

class TablerFilledIconsProvider implements IconProviderInterface
{

    public function getIdentifier(): string
    {
        return 'EXT:eb_expand_texticon/Resources/Public/Images/Icons/tabler/filled/';
    }

    public function getName(): string
    {
        return 'Tabler Filled';
    }

    public function supports(string $identifier): bool
    {
        return 'EXT:eb_expand_texticon/Resources/Public/Images/Icons/tabler/filled/' === $identifier;
    }

    public function getIconList(): IconList
    {
        $icons = new IconList();

        $directory = 'EXT:eb_expand_texticon/Resources/Public/Images/Icons/tabler/filled/';
        $path = GeneralUtility::getFileAbsFileName($directory);
        $files = iterator_to_array(new \FilesystemIterator($path, \FilesystemIterator::KEY_AS_PATHNAME));
        ksort($files);

        foreach ($files as $key => $fileinfo) {
            if ($fileinfo instanceof \SplFileInfo
                && $fileinfo->isFile()
                && strtolower($fileinfo->getExtension()) === 'svg'
            ) {
                $icons->addIcon(
                    (new SvgIcon())
                        ->setSrc($directory . $fileinfo->getFilename())
                        ->setIdentifier($directory . $fileinfo->getFilename())
                        ->setName($fileinfo->getBasename('.' . $fileinfo->getExtension()))
                        ->setPreviewImage($directory . $fileinfo->getFilename())
                );
            }
        }

        return $icons;
    }
}
