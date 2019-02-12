<?php
namespace RKW\RkwGraphics\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/***
 *
 * This file is part of the "RKW Graphics" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Steffen Kroggel <developer@steffenkroggel.de>
 *
 ***/

/**
 * GraphicsController
 */
class GraphicsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{



    /**
     * action pie
     *
     * @return void
     */
    public function donutAction()
    {

        $colours = GeneralUtility::trimExplode(',', addslashes('#74b929, #006349, #333333'), true);
        $labels = GeneralUtility::trimExplode(',', addslashes("ja, teil's teils, nein"), true);
        $data = GeneralUtility::trimExplode(',', addslashes('65,8,27'), true);
        $contentUid = intval($this->configurationManager->getContentObject()->data['uid']);


        // Add rendering call to footer after lib
        $GLOBALS['TSFE']->additionalFooterData['txRkwGraphicsElement' . $contentUid] = '
            <script type="text/javascript">
                var txRkwGraphicsChart' . $contentUid . ' = new ApexCharts(
                    document.querySelector("#txRkwGraphicsChart' . $contentUid . '"),
                    txRkwGraphicsChartOptions' . $contentUid . '
                );
                txRkwGraphicsChart' . $contentUid . '.render();
            </script>
        ';


        $this->view->assignMultiple(
            array(
                'contentUid' => $contentUid,
                'title' => 'test Graph',
                'colours' => "['" . implode("','", $colours) . "']",
                'labels' => "['" . implode("','", $labels) . "']",
                'data' => "[" . implode(",", $data) . "]",
                'captionLabel' => 'Abbildung 1',
                'caption' => 'TESt beschreeibung am Fußende!',
                'type' => 'text/javascript'

            )
        );


    }

    /**
     * action bars
     *
     * @return void
     */
    public function barsAction()
    {

        $colours = GeneralUtility::trimExplode(',', addslashes('#74b929, #006349, #333333'), true);
        $labels = GeneralUtility::trimExplode(',', addslashes("ja, teil's teils, nein"), true);
        $data = GeneralUtility::trimExplode(',', addslashes('65,8,27'), true);
        $contentUid = intval($this->configurationManager->getContentObject()->data['uid']);


        // Add rendering call to footer after lib
        $GLOBALS['TSFE']->additionalFooterData['txRkwGraphicsElement' . $contentUid] = '
            <script type="text/javascript">
                var txRkwGraphicsChart' . $contentUid . ' = new ApexCharts(
                    document.querySelector("#txRkwGraphicsChart' . $contentUid . '"),
                    txRkwGraphicsChartOptions' . $contentUid . '
                );
                txRkwGraphicsChart' . $contentUid . '.render();
            </script>
        ';


        $this->view->assignMultiple(
            array(
                'contentUid' => $contentUid,
                'title' => 'test Graph',
                'colours' => "['" . implode("','", $colours) . "']",
                'labels' => "['" . implode("','", $labels) . "']",
                'data' => "[" . implode(",", $data) . "]",
                'captionLabel' => 'Abbildung 1',
                'caption' => 'TESt beschreeibung am Fußende!',
                'type' => 'text/javascript'

            )
        );
    }


}
