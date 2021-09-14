<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswa::join('usaha','usaha.nisn','=','siswa.nisn')
        ->JOIN('omset','omset.nisn','=','siswa.nisn')
        ->JOIN('sekolah', 'sekolah.npsn','=','siswa.npsn')
        ->select('siswa.nama_lengkap','usaha.nama_usaha','siswa.tlp','siswa.tingkat','sekolah.nama_sekolah','omset.omset')
        ->get();
    }
}
