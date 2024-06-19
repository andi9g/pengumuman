<?php

namespace App\Imports;

use App\Models\siswabaruM;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

            return new siswabaruM([
                'nama' => $row['name'],
                'jk' => $row['jk'],
                'asalsekolah' => $row['asalsekolah'],
                'jurusan' => $row['jurusan'],
                'jalur' => $row['jalur'],
            ]);
    }
}
