
plugin.tx_rkwgraphics_graphics {
  view {
    # cat=plugin.tx_rkwgraphics_graphics/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:rkw_graphics/Resources/Private/Templates/
    # cat=plugin.tx_rkwgraphics_graphics/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:rkw_graphics/Resources/Private/Partials/
    # cat=plugin.tx_rkwgraphics_graphics/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:rkw_graphics/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_rkwgraphics_graphics//a; type=string; label=Default storage PID
    storagePid =
  }
}
