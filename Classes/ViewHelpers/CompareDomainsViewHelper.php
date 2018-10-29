<?php
  namespace Slub\XmlSitemap\ViewHelpers;
  /**
   * ViewHelper to show news title
   *
   * # Example: Basic example
   * <code>
   * <xs:stringContains needle="hello", haystack="hello world">
   *  <span>About ...</span>
   * </code>
   * <output>
   * Will output "1"
   * </output>
   *
   * @package TYPO3
   * @subpackage tx_xml_sitemap
   */
  class CompareDomainsViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Return all comments
     *
     * @param string $needle
     * @param string $haystack
     * @return boolean
     */
    public function render($url1, $url2) {

      $url1_host = parse_url($url1, PHP_URL_HOST);
      $url2_host = parse_url($url2, PHP_URL_HOST);
      if ($url1_host == $url2_host) {
          return 1;
      } else {
          return 0;
      }
    }
  }
