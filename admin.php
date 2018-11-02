<?php
/**
 * DokuWiki Plugin watchcycle (Admin Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Szymon Olewniczak <dokuwiki@cosmocode.de>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

class admin_plugin_metro4tiles extends DokuWiki_Admin_Plugin {

    /**
     * @return int sort number in admin menu
     */
    public function getMenuSort() {
        return 1;
    }

    /**
     * @return bool true if only access for superuser, false is for superusers and moderators
     */
    public function forAdminOnly() {
        return false;
    }

    /**
     * Should carry out any processing required by the plugin.
     */
    public function handle() {
    }

    /**
     * Render HTML output, e.g. helpful text and a form
     */
    public function html() {
        global $ID;
        /* @var Input */
        global $INPUT;

        $form = new \dokuwiki\Form\Form();
        $textarea = new \dokuwiki\Form\TextareaElement('content', 'content');
        $textarea->attr('rows', '15');
        $textarea->attr('cols', '80');
        $form->addElement($textarea);

        $form->addButton('', $this->getLang('admin button save'));

        ptln($form->toHTML());
    }

    function getTOC() {
        global $conf;
        global $ID;

        $toc = array();
        $path = $conf['metadir'].'/metro4tiles/*.html';
        $tiles = glob($path);

        $toc[] = array(
            'link'  => wl($ID, array('do'=> 'admin', 'page'=> 'metro4tiles')),
            'title' => 'Tiles:',
            'level' => 1,
            'type'  => 'ul',
        );

        foreach($tiles as $filename) {
            $toc[] = array(
                'link'  => wl($ID, array('do'=> 'admin', 'page'=> 'metro4tiles', 'file' => $filename, 'sectok'=> getSecurityToken())),
                'title' => $filename.':',
                'level' => 2,
                'type'  => 'ul',
            );
        }

        return $toc;
    }
}

// vim:ts=4:sw=4:et: