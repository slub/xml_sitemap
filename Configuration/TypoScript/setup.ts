plugin.tx_xmlsitemap {
  view {
    templateRootPaths.0 = EXT:xml_sitemap/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_xmlsitemap.view.templateRootPath}
    partialRootPaths.0 = EXT:xml_sitemap/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_xmlsitemap.view.partialRootPath}
    layoutRootPaths.0 = EXT:xml_sitemap/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_xmlsitemap.view.layoutRootPath}
    widget.TYPO3\CMS\Fluid\ViewHelpers\Widget\PaginateViewHelper.templateRootPath ={$plugin.tx_xmlsitemap.view.templateRootPath}
  }
  features {
    skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
  settings {
      websiteRoot = {$plugin.tx_xmlsitemap.websiteRoot}
      kitodoRecordStorage = {$plugin.tx_xmlsitemap.kitodoRecordStorage}
      kitodoPageView = {$plugin.tx_xmlsitemap.kitodoPageView}
      newsRecordStorage = {$plugin.tx_xmlsitemap.newsRecordStorage}
      newsDetailPageView = {$plugin.tx_xmlsitemap.newsDetailPageView}
  }
}

lib.tx_xmlsitemap = USER
lib.tx_xmlsitemap {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    extensionName = XmlSitemap
    pluginName = Sm
    vendorName = Slub
    controller = Sitemap
    switchableControllerActions {
        Sitemap {
            1 = list
            2 = listPages
            3 = index
            4 = listKitodo
            5 = listNews
        }
    }
    view < plugin.tx_xmlsitemap.view
    persistence < plugin.tx_xmlsitemap.persistence
    settings < plugin.tx_xmlsitemap.settings
    settings {
      format = xml
      list {
        paginate {
            itemsPerPage = {$plugin.tx_xmlsitemap.itemsPerPage}
            insertAbove = TRUE
            insertBelow = FALSE
        }
      }
    }
}

plugin.tx_news {
    settings {
        link {
          hrDate = 1
          hrDate {
            day = j
            month = n
            year = Y
          }
          skipControllerAndAction = 1
        }
    }
}

[globalVar = TSFE:type = 20180709]
  config {
    disableAllHeaderCode = 1
    debug = 0
    xhtml_cleaning = none
    locale_all = en_GB.UTF-8
    admPanel = 0
    metaCharset = utf-8
    additionalHeaders = Content-Type:text/xml;charset=utf-8
    disablePrefixComment = 1
  }

  sitemapgeneratorPage = PAGE
  sitemapgeneratorPage {
    typeNum = 20180709
    10 < lib.tx_xmlsitemap
  }
[global]
