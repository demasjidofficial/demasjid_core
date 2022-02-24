<?php

/**
 * This file is part of Bonfire.
 *
 * (c) Lonnie Ezell <lonnieje@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bonfire\Modules\Users;

use App\Models\UserModel;
use Bonfire\Config\BaseModule;
use Bonfire\Libraries\Menus\MenuItem;
use Bonfire\Libraries\Widgets\Stats\StatsItem;

/**
 * User Module setup
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
            'title'           => 'Users',
            'namedRoute'      => 'user-settings',
            'fontAwesomeIcon' => 'fas fa-user',
            'permission'      => 'users.settings',
        ]);
        $sidebar->menu('sidebar')->collection('settings')->addItem($item);

        // Content Menu for sidebar
        $item = new MenuItem([
            'title'           => 'Users',
            'namedRoute'      => 'user-list',
            'fontAwesomeIcon' => 'fas fa-users',
            'permission'      => 'users.list',
        ]);
        $sidebar->menu('sidebar')->collection('content')->addItem($item);

        // Settings widgets stats on dashboard
        $widgets   = service('widgets');
        $users     = new UserModel();
        $statsItem = new StatsItem([
            'bgColor' => 'bg-blue',
            'title'   => 'Users',
            'value'   => $users->countAll(),
            'url'     => ADMIN_AREA . '/users',
            'faIcon'  => 'fa fa-user',
        ]);
        $widgets->widget('stats')->collection('stats')->addItem($statsItem);
    }
}
