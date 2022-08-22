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