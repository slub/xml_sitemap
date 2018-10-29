
plugin.tx_xmlsitemap {
  view {
    # cat=plugin.tx_xmlsitemap/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:xml_sitemap/Resources/Private/Templates/
    # cat=plugin.tx_xmlsitemap/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:xml_sitemap/Resources/Private/Partials/
    # cat=plugin.tx_xmlsitemap/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:xml_sitemap/Resources/Private/Layouts/
  }
  # cat=plugin.tx_xmlsitemap/200/a; type=int+; label=Root PID of website
  websiteRoot =
  # cat=plugin.tx_xmlsitemap/210/a; type=int+; label=Kitodo storage PID
  kitodoRecordStorage =
  # cat=plugin.tx_xmlsitemap/211/a; type=int+; label=Kitodo Page View
  kitodoPageView =
  # cat=plugin.tx_xmlsitemap/212/a; type=int+; label=News storage PID
  newsRecordStorage =
  # cat=plugin.tx_xmlsitemap/213/a; type=int+; label=News detail Pageview
  newsDetailPageView =
  # cat=plugin.tx_xmlsitemap/300/a; type=int+; label=Maximum Items per Sitemap
  itemsPerPage = 20000
}
