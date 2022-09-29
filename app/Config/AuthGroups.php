<?php

namespace Config;

use Sparks\Shield\Config\AuthGroups as ShieldGroups;

class AuthGroups extends ShieldGroups
{
    /**
     * --------------------------------------------------------------------
     * Default Group
     * --------------------------------------------------------------------
     * The group that a newly registered user is added to.
     */
    public $defaultGroup = 'user';

    /**
     * --------------------------------------------------------------------
     * Groups
     * --------------------------------------------------------------------
     * The available authentication systems, listed
     * with alias and class name. These can be referenced
     * by alias in the auth helper:
     *      auth('api')->attempt($credentials);
     */
    public $groups = [
        'superadmin' => [
            'title'       => 'Super Admin',
            'description' => 'Complete control of the site.',
        ],
        'admin' => [
            'title'       => 'Admin',
            'description' => 'Day to day administrators of the site.',
        ],
        'developer' => [
            'title'       => 'Developer',
            'description' => 'Site programmers.',
        ],
        'user' => [
            'title'       => 'User',
            'description' => 'General users of the site. Often customers.',
        ],
        'beta' => [
            'title'       => 'Beta User',
            'description' => 'Has access to beta-level features.',
        ],
        'supervisior' => [
            'title'       => 'Supervisor',
            'description' => 'Has access to beta-level features.',
        ],
        'staff' => [
            'title'       => 'Staff',
            'description' => 'Has access to beta-level features.',
        ],
        'manager' => [
            'title'       => 'Manager',
            'description' => 'Has access to beta-level features.',
        ],
        'bendahara' => [
            'title'       => 'Bendahara',
            'description' => 'Has access to beta-level features.',
        ],
        'takmir' => [
            'title'       => 'Ketua Takmir',
            'description' => 'Has access to beta-level features.',
        ],
        'donatur' => [
            'title'       => 'Donatur',
            'description' => 'Has access to beta-level features.',
        ],
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions
     * --------------------------------------------------------------------
     * The available permissions in the system. Each system is defined
     * where the key is the
     *
     * If a permission is not listed here it cannot be used.
     */
    public $permissions = [
        'admin.access'        => 'Can access the sites admin area',
        'admin.settings'      => 'Can access the main site settings',
        'groups.settings'     => 'Can edit existing user groups',
        'groups.edit'         => 'Can edit existing user groups',
        'users.list'          => 'Can view a list of users in the system',
        'users.manage-admins' => 'Can manage other admins',
        'users.view'          => 'Can view user details',
        'users.create'        => 'Can create new non-admin users',
        'users.edit'          => 'Can edit existing non-admin users',
        'users.delete'        => 'Can delete existing non-admin users',
        'users.settings'      => 'Can manage User settings in admin area',
        'beta.access'         => 'Can access beta-level features',
        'site.viewOffline'    => 'Can the site even when in "offline" mode',
        'guides.view'         => 'Can view the list of available guides',
        'guides.bonfire'      => 'Can view the Bonfire Development Guides',
        'guides.application'  => 'Can view the application guides.',
        'widgets.settings'    => 'Can view the settings for site Widgets',
        'consent.settings'    => 'Can view the settings for the Consent module',
        'recycler.view'       => 'Can view the Recycler area',
        
        /** module masjid */        
        'masjid.member.list' => 'Can view list member',
        'masjid.member.create' => 'Can create member',
        'masjid.member.edit' => 'Can edit member',
        'masjid.member.delete' => 'Can edit member',

        'masjid.pengurus.list' => 'Can view list pengurus',
        'masjid.pengurus.create' => 'Can create pengurus',
        'masjid.pengurus.edit' => 'Can edit pengurus',
        'masjid.pengurus.delete' => 'Can edit pengurus',

        'masjid.profile.list' => 'Can view list profile',
        'masjid.profile.create' => 'Can create profile',
        'masjid.profile.edit' => 'Can edit profile',
        'masjid.profile.delete' => 'Can edit profile',

        'masjid.jabatan.list' => 'Can view list jabatan',
        'masjid.jabatan.create' => 'Can create jabatan',
        'masjid.jabatan.edit' => 'Can edit jabatan',
        'masjid.jabatan.delete' => 'Can edit jabatan',

        'masjid.wilayah.list' => 'Can view list wilayah',
        'masjid.wilayah.create' => 'Can create wilayah',
        'masjid.wilayah.edit' => 'Can edit wilayah',
        'masjid.wilayah.delete' => 'Can edit wilayah',

        'masjid.entity.list' => 'Can view list jabatan',

        'masjid.balance.list' => 'Can view list account balance',
        'masjid.account_balance.list' => 'Can view list account balance',
        
        'masjid.program.list' => 'Can view list program',
        
        /** module website */        
        'website.menus.list' => 'Can view list menus on website',
        'website.menus.create' => 'Can create menus on website',
        'website.menus.edit' => 'Can edit menus on website',
        'website.menus.delete' => 'Can edit menus on website',

        'website.pages.list' => 'Can view list pages on website',
        'website.pages.create' => 'Can create pages on website',
        'website.pages.edit' => 'Can edit pages on website',
        'website.pages.delete' => 'Can edit pages on website',

        'website.posts.list' => 'Can view list posts on website',
        'website.posts.create' => 'Can create posts on website',
        'website.posts.edit' => 'Can edit posts on website',
        'website.posts.delete' => 'Can edit posts on website',

        'website.sections.list' => 'Can view list sections part on website',
        'website.sections.create' => 'Can create sections part on website',
        'website.sections.edit' => 'Can edit sections part on website',
        'website.sections.delete' => 'Can edit sections part on website',

        'website.sliders.list' => 'Can view list sliders on website',
        'website.sliders.create' => 'Can create sliders on website',
        'website.sliders.edit' => 'Can edit sliders on website',
        'website.sliders.delete' => 'Can edit sliders on website',

        'website.socials.list' => 'Can view list socials on website',
        'website.socials.create' => 'Can create socials on website',
        'website.socials.edit' => 'Can edit socials on website',
        'website.socials.delete' => 'Can edit socials on website',

        /** pesantren */
        'pesantren.balance.list' => 'Can view list account balance',
        'pesantren.account_balance.list' => 'Can view list account balance',

        'pesantren.profile.list' => 'Can view list profile',
        'pesantren.profile.create' => 'Can create profile',
        'pesantren.profile.edit' => 'Can edit profile',
        'pesantren.profile.delete' => 'Can edit profile',

        /** tpq */
        'tpq.balance.list' => 'Can view list account balance',
        'tpq.account_balance.list' => 'Can view list account balance',  

        'tpq.profile.list' => 'Can view list profile',
        'tpq.profile.create' => 'Can create profile',
        'tpq.profile.edit' => 'Can edit profile',

        'tpq.profile.delete' => 'Can edit profile', 
        
        
         /** baitulmal */

         'baitulmal.katDonatur.list' => 'Can view list donatur category',
         'baitulmal.katDonatur.create' => 'Can create donatur category',
         'baitulmal.katDonatur.edit' => 'Can edit donatur category',
         'baitulmal.katDonatur.delete' => 'Can delete donatur category',
         
         'baitulmal.fundraising.list' => 'Can view list module fundraising',
         'baitulmal.manager_fundraising.list' => 'Can view list tim fundraising',
         'baitulmal.supervisor_fundraising.list' => 'Can create tim fundraising',
         'baitulmal.staf_fundraising.list' => 'Can edit tim fundraising',
         'baitulmal.bendahara_fundraising.list' => 'Can delete tim fundraising',
         'baitulmal.takmir_fundraising.list' => 'Can delete tim fundraising',
         'baitulmal.donatur_fundraising.list' => 'Can delete tim fundraising',

      'baitulmal.qurbans.list'=>'baitulmal.qurbans.list',


        'tpq.profile.delete' => 'Can edit profile',      

    ];

    /**
     * --------------------------------------------------------------------
     * Permissions Matrix
     * --------------------------------------------------------------------
     * Maps permissions to groups.
     */
    public $matrix = [
        'superadmin' => [
            'admin.*',
            'groups.*',
            'users.*',
            'beta.*',
            'guides.*',
            'widgets.*',
            'consent.*',
            'recycler.*',
            'masjid.*',
            'website.*',
            'pesantren.*',
            'tpq.*'        
        ],
        'admin' => [
            'admin.access',
            'users.list',
            'users.create',
            'users.edit',
            'users.delete',
            'users.settings',
            'groups.settings',
            'beta.access',
            'guides.application',
            'widgets.*',
            'consent.*',
            'guides.*',
            'masjid.*',
        ],
        'developer' => [
            'admin.access',
            'admin.settings',
            'users.list',
            'users.create',
            'users.edit',
            'users.settings',
            'groups.settings',
            'beta.*',
            'site.viewOffline',
            'guides.*',
            'widgets.*',
            'consent.*',
            'recycler.*',
        ],
        'user' => [],
        'beta' => [
            'beta.access',
        ],
        'manager'=>[
            'baitulmal.manager_fundraising.*'
        ],
        'supervisor'=>[
            'baitulmal.supervisor_fundraising.*'
        ],
        'staff'=>[
            'baitulmal.staff_fundraising.*'
        ],
        'bendahara'=>[
            'baitulmal.bendahara_fundraising.*'
        ],
        'takmir'=>[
            'baitulmal.takmir_fundraising.*'
        ],
        'donatur'=>[
            'baitulmal.donatur_fundraising.*'
        ]
    ];
}
