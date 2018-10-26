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

use \TYPO3\CMS\Core\Utility\GeneralUtility;

class KitodoDocumentRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    // Order by default by timestamp
    protected $defaultOrderings = array(

        'tstamp' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING

    );

    /**
     * Find all records younger than the given timestamp
     *
     * @param int $timestamp
     * @return objects
     */
    public function findYoungerThan($timestamp) {

      $query = $this->createQuery();
      $constraints = [];

      $constraints[] = $query->greaterThan('tstamp', $timestamp);

      if (count($constraints)) {
          $query->matching($query->logicalAnd($constraints));
      }

      return $query->execute();
    }

}
