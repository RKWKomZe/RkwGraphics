
plugin.tx_rkwgraphics_graphics {
  view {
    templateRootPaths.0 = EXT:rkw_graphics/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_rkwgraphics_graphics.view.templateRootPath}
    partialRootPaths.0 = EXT:rkw_graphics/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_rkwgraphics_graphics.view.partialRootPath}
    layoutRootPaths.0 = EXT:rkw_graphics/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_rkwgraphics_graphics.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_rkwgraphics_graphics.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}


// include JS
page.includeJSFooterlibs.txRkwGraphicsApexCharts  = EXT:rkw_graphics/Resources/Public/Js/ApexCharts-v3.2.2.min.js
page.includeCSS.txRkwGraphicsCharts  = EXT:rkw_graphics/Resources/Public/Css/Charts.css



plugin.tx_rkwgraphics._CSS_DEFAULT_STYLE (

)
