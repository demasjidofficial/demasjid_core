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
            $result[$level[$index]] = implode('.',$prev);            
        }

        return $result;
    }
}

if (!function_exists('descWilayah')) {
    function descWilayah($kode, $wilayahMap)
    {
        $result = [];
        $tmp =  extractWilayah($kode);
        foreach($tmp as $k => $v){
            $result[] = $k.' : '.$wilayahMap[$kode]['nama'];
        }
        return '<div>'.implode('</div><div>',$result).'</div>';
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
        $months= array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November' ,'Desember');

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
            $meta .= '<meta name="description" content='. $data['meta_desc'] .'>';
        }

        if (isset($data['path_image'])) {
            $meta .= '<meta property="og:image" content='. site_url() . $data['path_image'] .' />';
        }

        $meta_title = isset($data['meta_title']) ? ($data["meta_title"] . " - " ) : "";
        $title = "<title>". $meta_title . $name . " | ". ( config('App')->siteName ?? 'Demasjid') ."</title>";
        
      
        return $meta.$title;
    }
}