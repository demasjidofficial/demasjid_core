<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class RoomReservationModel extends BaseModel
{
    public const BEGIN = 'belum_mulai';
    public const END = 'selesai';
    public const CANCEL = 'batal';
    public const PROGRESS = 'berlangsung';
    protected $table = 'room_reservation';
    protected $returnType = 'App\Modules\Api\Entities\RoomReservation';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'room_id',
        'namapemesan',
        'no_tlp',
        'alamat',
        'start_date',
        'end_date',
        'agenda',
        'keterangan',
        'status',
        'created_at',
        'updated_at',
        'created_by'
    ];
    protected $validationRules = [
        // 'id' => 'numeric|max_length[11]|required|is_unique[room_reservation.id,id,{id}]',
        'room_id' => 'numeric|max_length[11]',
        'namapemesan' => 'max_length[255]|required',
        'no_tlp' => 'max_length[25]|required',
        'alamat' => 'max_length[255]|required',
        'start_date' => 'valid_date|required',
        'end_date' => 'valid_date|required',
        'agenda' => 'max_length[50]|required',
        'keterangan' => 'max_length[50]|required',
        'status' => 'max_length[20]|required',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        //  'created_by' => 'numeric|max_length[11]'
    ];



    public static function listState()
    {

        return [
            self::BEGIN => lang('crud.belum_mulai'),
            self::PROGRESS => lang('crud.sedang_berlangsung'),
            self::END => lang('crud.selesai'),
            self::CANCEL => lang('crud.batal'),
        ];
    }
}
