<?php
namespace Slub\XmlSitemap\Hooks;

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


 /**
  * AutoConfigure Hook for RealUrl
  *
  * @package xml_sitemap
  * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
  *
  */

 class RealUrlAutoConfiguration {

   /**
    * Generates additional RealURL configuration and merges it with provided configuration
    *
    * @param       array $params Default configuration
    * @param       tx_realurl_autoconfgen $pObj parent object
    * @return      array Updated configuration
    */
   function addFormsConfig($params, &$pObj) {

     return array_merge_recursive($params['config'], array(
         'fileName' => array(
           'index' => array(
             'sitemap.xml' => array(
                 'keyValues' =>
                     array (
                       'type' => 20180709,
                     ),
             ),
           )
         )
       )
     );
   }
 }
