<?php

if (!function_exists('extractWilayah')) {
    function extractWilayah($kode)
    {
        $result = [];
        if (empty($kode)) {
            return $result;
        }

        $level = [
            'provinsi',
            'kota/kabupaten',
            'kecamatan',
            'desa',
        ];
        $tmp = explode('.', $kode);
        $prev = [];
        foreach ($tmp as $index => $chunk) {
            $prev[] = $chunk;
            $result[$level[$index]] = implode('.', $prev);
        }

        return $result;
    }
}

if (!function_exists('descWilayah')) {
    function descWilayah($kode, $wilayahMap)
    {
        $result = [];
        $tmp =  extractWilayah($kode);
        foreach($tmp as $k => $v) {
            $result[] = $k.' : '.$wilayahMap[$kode]['nama'];
        }
        return '<div>'.implode('</div><div>', $result).'</div>';
    }
}


if (!function_exists('convertStateProgram')) {
    function convertStateProgram($state)
    {
        $validState = [
            'belum_mulai' => '<span class="badge badge-info">'.lang('crud.belum_mulai').'</span>',
            'selesai' => '<span class="badge badge-danger">'.lang('crud.selesai').'</span>',
            'batal' => '<span class="badge badge-warning">'.lang('crud.batal').'</span>',
            'berlangsung' => '<span class="badge badge-success">'.lang('crud.berlangsung').'</span>'
        ];

        return $validState[$state] ?? $state;
    }
}

if (!function_exists('convertStateActivated')) {
    function convertStateActivated($state)
    {
        $validState = [
            'active' => '<span class="badge badge-success">'.lang('app.active').'</span>',
            'inactive' => '<span class="badge badge-warning">'.lang('app.inactive').'</span>'
        ];

        return $validState[$state] ?? $state;
    }
}

if (!function_exists('convertStateWebsite')) {
    function convertStateWebsite($state)
    {
        $validState = [
            'draft' => '<span class="badge badge-info">'.lang('crud.draft').'</span>',
            'release' => '<span class="badge badge-success">'.lang('crud.release').'</span>'
        ];

        return $validState[$state] ?? $state;
    }
}

if (! function_exists('local_currency')) {
    function local_currency(float $num, ?string $currency = 'IDR', ?string $locale = null, int $fraction = 0): string
    {
        $num = $num ?? 0;
        return format_number($num, 1, $locale, [
            'type'     => NumberFormatter::CURRENCY,
            'currency' => $currency,
            'fraction' => $fraction,
        ]);
    }
}

if (! function_exists('local_date')) {
    function local_date(string $date)
    {
        $months = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November' ,'Desember');

        $ar = explode('-', substr($date, 0, 10));
        return $ar[2].' ' . $months[(int)$ar[1]].' ' . $ar[0];
    }
}

if (! function_exists('meta_tag')) {
    function meta_tag($name, array $data = null)
    {
        $meta = '
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            ';

        if (isset($data['meta_desc'])) {
            $meta .= '<meta name="description" content="'. $data['meta_desc'] .'">';
        } else {
            $meta .= '<meta name="description" content="'. $name . ' | '. (config('App')->siteName ?? 'Demasjid') .'">';
        }

        if (isset($data['path_image'])) {
            $meta .= '<meta property="og:image" content="'. site_url() . $data['path_image'] .'" />';
        }

        $meta_title = isset($data['meta_title']) ? ($data["meta_title"] . " - ") : "";
        $title = "<title>". $meta_title . $name . " | ". (config('App')->siteName ?? 'Demasjid') ."</title>";


        return $meta.$title;
    }

    if (!function_exists('convertStateRegisterEducation')) {
        function convertStateRegisterEducation($state)
        {
            $validState = [
                'mendaftar' => '<span class="badge badge-info">'.lang('crud.register').'</span>',
                'diterima' => '<span class="badge badge-success">'.lang('crud.recieved').'</span>',
                'ditolak' => '<span class="badge badge-danger">'.lang('crud.rejected').'</span>',
            ];

            return $validState[$state] ?? $state;
        }
    }
}

if(!function_exists('replace_float')) {
    function replace_float($text)
    {
        # code...


        $nominal = (float)(str_replace(',', '', $text));
        return $nominal;
    }
}


if(!function_exists('generate_kode')) {
    function generate_kode()
    {
        # code...
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < 4; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }
}

if(!function_exists('assetUrl')) {
    function assetUrl($path)
    {
        $baseUrl = config('App')->assetUrl;
        return $baseUrl.DIRECTORY_SEPARATOR.$path;
    }
}
if(!function_exists('assetUrlLink')) {
    function assetUrlLink(string $path, string $type): string
    {
        $tag = '';

        switch ($type) {
            case 'css':
                $tag = "<link href='{$path}' rel='stylesheet' />";
                break;

            case 'js':
                $tag = "<script src='{$path}'></script>";
        }

        return $tag;
    }
}
