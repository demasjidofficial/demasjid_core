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
