<?php
/**
 * DokuWiki Plugin metro4tiles (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Szymon Olewniczak <it@rid.pl>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) {
    die();
}

class action_plugin_metro4tiles extends DokuWiki_Action_Plugin
{

    /**
     * Registers a callback function for a given event
     *
     * @param Doku_Event_Handler $controller DokuWiki's event controller object
     *
     * @return void
     */
    public function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('TPL_METAHEADER_OUTPUT', 'BEFORE', $this, 'handle_tpl_metaheader_output');
   
    }

    /**
     * [Custom event handler which performs action]
     *
     * Called for event:
     *
     * @param Doku_Event $event  event object by reference
     * @param mixed      $param  [the parameters passed as fifth argument to register_hook() when this
     *                           handler was registered]
     *
     * @return void
     */
    public function handle_tpl_metaheader_output(Doku_Event $event, $param)
    {
//        $event->data["link"][] = array (
//            "type" => "text/css",
//            "rel" => "stylesheet",
//            "href" => DOKU_BASE.
//                "lib/plugins/metro4tiles/node_modules/metro4-dist/css/metro-all.min.css",
//        );
//
//        $event->data["script"][] = array (
//            "type" => "text/javascript",
//            "src" => DOKU_BASE.
//                "lib/plugins/metro4tiles/node_modules/metro4-dist/js/metro.min.js",
//            "_data" => "",
//        );

    }

}

