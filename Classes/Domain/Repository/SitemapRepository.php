<?php
namespace Slub\XmlSitemap\Domain\Repository;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Frontend\Page\PageRepository;

/**
 * Class SitemapRepository
 */
class SitemapRepository
{
    /**
     * @var PageRepository
     */
    protected $pageRepository;

    /**
     * @param PageRepository $pageRepository
     */
    public function injectPageRepository(PageRepository $pageRepository) {
      $this->pageRepository = $pageRepository;
    }

    /**
     * Get sub pages
     *
     * @param int $startPageId
     *
     * @return array
     */
    public function getSubPages($startPageId)
    {
        $depth = 10;

        $queryGenerator = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( 'TYPO3\\CMS\\Core\\Database\\QueryGenerator' );

        $treeList = $queryGenerator->getTreeList($startPageId, $depth, 0, 1);

        $allPages = explode(',', $treeList);

        foreach ($allPages as $uid) {
            $page = $this->pageRepository->getPage($uid);
            if ($page['hidden'] == 0 &&
                $page['doktype'] == 1 &&
                $page['no_search'] == 0) {
                  $pages[] = $page;
                }
        }

        return $pages;
    }
}
