<?php

namespace App\Controllers;

use App\Modules\Api\Models\ProfileModel;
use CodeIgniter\HTTP\Response;

class PesantrenController extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */

    public function index()
    {
        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name'])->join('entity','entity.id = profile.entity_id')->masjid()->asArray()->first();
        $masjid_profile = $profile;
        
        $data = [];

        return $this->render('App\Modules\Pesantren\Views\website\index', $data);
    }
    
    public function pendaftaran()
    {
        $request = $this->request->getGet('req');
        $data = [];

        return $this->render('App\Modules\Pesantren\Views\website\pendaftaran', $data);
    }

    public function pengumuman()
    {
        $request = $this->request->getGet('req');
        $data = [];

        return $this->render('App\Modules\Pesantren\Views\website\pengumuman', $data);
    }


    /*
    public function tpq($data = null)
    {
        $request = $this->request->getGet('req');
        $data = [];

        if ($request == 'pendaftaran') {
            return $this->render('App\Modules\TPQ\Views\website\pendaftaran', $data);
        }
        if ($request == 'pengumuman') {
            return $this->render('App\Modules\TPQ\Views\website\pengumuman', $data);
        }
        return null;
    }
    */
}
