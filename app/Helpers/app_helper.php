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

if (!function_exists('convertStateProgram')) {
    function convertStateProgram($state)
    {
        $validState = [
            'belum_mulai' => '<span class="badge badge-info">Dibuka</span>',
            'selesai' => '<span class="badge badge-danger">Selesai</span>',
            'batal' => '<span class="badge badge-warning">Batal</span>',
            'berlangsung' => '<span class="badge badge-success">Sedang Berlangsung</span>'
        ];    

        return $validState[$state] ?? $state;
    }
}