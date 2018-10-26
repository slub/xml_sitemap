
plugin.tx_xmlsitemap {
  view {
    # cat=plugin.tx_xmlsitemap/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:xml_sitemap/Resources/Private/Templates/
    # cat=plugin.tx_xmlsitemap/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:xml_sitemap/Resources/Private/Partials/
    # cat=plugin.tx_xmlsitemap/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:xml_sitemap/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_xmlsitemap/200/a; type=int+; label=Default storage PID
    storagePid =
  }
  # cat=plugin.tx_xmlsitemap/100/a; type=int+; label=Maximum Items per Sitemap
  itemsPerPage = 5
  # cat=plugin.tx_xmlsitemap/210/a; type=int+; label=Kitodo storage PID
  kitodoRecordStorage =
  # cat=plugin.tx_xmlsitemap/211/a; type=int+; label=Kitodo Page View
  kitodoPageView =
  # cat=plugin.tx_xmlsitemap/212/a; type=int+; label=News storage PID
  newsRecordStorage =
  # cat=plugin.tx_xmlsitemap/213/a; type=int+; label=News detail Pageview
  newsDetailPageView =
}
