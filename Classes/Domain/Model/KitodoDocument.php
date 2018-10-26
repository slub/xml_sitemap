<?php
namespace Slub\XmlSitemap\Domain\Model;

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

class KitodoDocument extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{

    /**
     * title - actually not used
     *
     * @var string
     */
    protected $title;

    /**
     * location of METS-file
     *
     * @var string
     */
    protected $location;

    /**
     * timestamp
     *
     * @var int
     */
    protected $tstamp;

    /**
     * purl
     *
     * @var string
     */
    protected $purl;

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Returns the timestamp
     *
     * @return string $tstamp
     */
    public function getTstamp() {
        return $this->tstamp;
    }

    /**
     * Sets the timestamp
     *
     * @param string $tstamp
     * @return void
     */
    public function setTstamp($tstamp) {
        $this->tstamp = $tstamp;
    }

    /**
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location) {
        $this->location = $location;
    }

    /**
     * Returns the purl
     *
     * @return string $purl
     */
    public function getPurl() {
        return $this->purl;
    }

    /**
     * Sets the purl
     *
     * @param string $purl
     * @return void
     */
    public function setPurl($purl) {
        $this->purl = $purl;
    }

}
