<?php

namespace App\Imports;

use App\pasien;
use Maatwebsite\Excel\Concerns\ToModel;

class pasienImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new pasien([
            'No' => $row[1],
            'Nama Pasien' => $row[2], 
            'Alamat' => $row[3], 
            'Nama Dokter' => $row[3],
            'Jabatan' => $row[3],
        ]);
    }
}
