<?php

class MahasiswaModel 
{
    public function getAll()
    {
        return[
            [
                "nim" => "23001",
                "nama" => "Andi",
                "prodi" => "Sistem Informasi"
            ],
            [
                "nim" => "23002",
                "nama" => "Budi",
                "prodi" => "Sistem Informasi"
            ],
            [
                "nim" => "23003",
                "nama" => "Caca",
                "prodi" => "Sistem Informasi"
            ]
        ];
    }
}