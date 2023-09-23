<?php

namespace App\Modules\Masjid;

use App\Config\BaseModule;
use Bonfire\Menus\MenuItem;

/**
 * Pengurus Module setup.
 */
class Module extends BaseModule
{
    /**
     * Setup our admin area needs.
     */
    public function initAdmin()
    {
        helper('url');
        // Settings menu for sidebar
        $sidebar = service('menus');

        $entityItem = new MenuItem([
            'title'           => lang('crud.entity'),
            'url'             => ADMIN_AREA.'/masjid/entity',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'masjid.member.list',
        ]);

        $memberItem = new MenuItem([
            'title'           => lang('crud.member'),
            'url'             => ADMIN_AREA.'/masjid/member',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'masjid.member.list',
        ]);

        $financesItem = new MenuItem([
            'title'           => lang('crud.finances'),
            'url'             => ADMIN_AREA.'/masjid/finances',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'masjid.finances.list',
        ]);

        $assetItem = new MenuItem([
            'title'           => lang('crud.asset'),
            'url'             => ADMIN_AREA.'/masjid/asset',
            'fontAwesomeIcon' => 'fas fa-building nav-icon',
            'permission'      => 'masjid.asset.list',
        ]);

        $profileItem = new MenuItem([
            'title'           => lang('crud.profiles'),
            'url'             => ADMIN_AREA.'/masjid/profile',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'masjid.profiles.list',
        ]);
        $programsItem = new MenuItem([
            'title'           => lang('crud.programs'),
            'url'             => ADMIN_AREA.'/masjid/programs',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'masjid.programs.list',
        ]);

        $mastersItem = new MenuItem([
            'title'           => lang('crud.masters'),
            'url'             => ADMIN_AREA.'/masjid/masters',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'masjid.masters.list',
        ]);

        $schedulesItem = new MenuItem([
            'title'           => lang('crud.schedules'),
            'url'             => ADMIN_AREA.'/masjid/schedules',
            'fontAwesomeIcon' => 'fas fa-book fa-1 nav-icon',
            'permission'      => 'masjid.schedules.list',
        ]);

        $sidebar->menu('sidebar')->createCollection('masjid', 'Masjid')
                ->setFontAwesomeIcon('fas fa-home')
                ->setCollapsible();
        $sidebar->menu('sidebar')->collection('masjid')
            ->addItem($profileItem)
            ->addItem($memberItem)
            ->addItem($entityItem)
            ->addItem($financesItem)
            ->addItem($assetItem)
            ->addItem($programsItem)
            ->addItem($mastersItem)
            ->addItem($schedulesItem)
        ;

    }
}
