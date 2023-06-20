<?php

namespace App\Imports;

use App\Models\siswabaruM;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SiswaImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            siswabaruM::create([
                'nama' => $row[2],
                'jk' => $row[3],
                'asalsekolah' => $row[4],
                'jurusan' => $row[5],
                'jalur' => $row[6],
            ]);
        }
    }
}
