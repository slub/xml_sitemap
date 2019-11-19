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
     * Find all records in a given interval
     *
     * @param int $limit
     * @param int $offset
     * @return objects
     */
    public function findAllLimitOffset($limit, $offset) {

        $query = $this->createQuery();
        $constraints = [];

        if ((int)$limit >= 1) {
            $query->setLimit((int)$limit);
        }
        if (!empty($offset)) {
            $query->setOffset((int)$offset);
        }

        if (count($constraints)) {
            $query->matching($query->logicalAnd($constraints));
        }

        return $query->execute();

    }

}
