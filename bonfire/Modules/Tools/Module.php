<?php

/**
 * This file is part of Bonfire.
 *
 * (c) Lonnie Ezell <lonnieje@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bonfire\Modules\Tools;

use Bonfire\Config\BaseModule;
use Bonfire\Libraries\Menus\MenuItem;

/**
 * Email Module setup
 */
class Module extends BaseModule
{
    /**
     * Setup our admin area needs.
     */
    public function initAdmin()
    {
        // Settings menu for sidebar
        $sidebar = service('menus');
        $item    = new MenuItem([
            'title'           => 'Info Sistem',
            'namedRoute'      => 'sys-info',
            'fontAwesomeIcon' => 'fas fa-info-circle nav-icon',
        ]);

        $itemLogs = new MenuItem([
            'title'           => 'Logs',
            'namedRoute'      => 'sys-logs',
            'fontAwesomeIcon' => 'fas fa-clipboard-list nav-icon',
        ]);
        $sidebar->menu('sidebar')->collection('tools')->addItem($item);
        $sidebar->menu('sidebar')->collection('tools')->addItem($itemLogs);
    }
}
