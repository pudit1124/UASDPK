<?php

function menampilan_jadwal_pelajaran($jadwal) {
    $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat");
    
    for ($i = 0; $i < count($hari); $i++) {
        $hariini = $hari[$i];
        $jadwalhariini = $jadwal[$hariini];
        
        echo "Jadwal Mata Pelajaran hari $hariini:" . "<br>";
        
        if ($jadwalhariini) {
            foreach ($jadwalhariini as $jam => $mapel) {
                echo "- Jam $jam: $mapel" . "<br>";
            }
        } else {
            echo "Tidak ada jadwal mata pelajaran pada hari ini.";
        }
        
        echo "<br>";
    }
}

$jadwal_pelajaran = array(
    "Senin" => array(
        "07:55 - 10:50" => "DPK-PPLG",
        "10:50 - 12:10" => "SEJARAH",
        "12:40 - 15:20" => "BAHASA INDONESIA"
    ),
    "Selasa" => array(
        "07:00 - 07:45" => "BK",
        "07:45 - 09:55" => "PAI",
        "10:10 - 12.10" => "IPAS",
        "12:40 - 15:20" => "INFORMATIKA"
    ),
    "Rabu" => array(
        "07:00 - 09:55" => "BAHASA INGGRIS",
        "10:10 - 13:20" => "DPK-PPLG",
        "13:20 - 14:00" => "BAHASA JAWA",
        "14:00 - 15:20" => "PPKN"
    ),
    "Kamis" => array(
        "07:00 - 09:15" => "PJOK",
        "09:15 - 12:10" => "DPK-PPLG",
        "12:40 - 15:20" => "MATEMATIKA"
    ),
    "Jumat" => array(
        "07:00 - 9:55" => "IPAS",
        "09:55 - 11:00 " => "SENI RUPA"
    ),
);
menampilan_jadwal_pelajaran($jadwal_pelajaran);

?>
