<?php
//ARRAY multidimensi
// Array di dalam array

$mahasiswa =[
    ["Viane Pindhi Wardiyane", 
"213040103", "viane.213040103@mail.unpas.ac.id", "Teknik Informatika"], 
["Nadilla Putri Ananda", "213040076", [1,2,3] , "nadilla.213040076@mail.unpas.ac.id", 
"Teknik Informatika"]
];
echo $mahasiswa[0][1];
echo $mahasiswa[1][2][1];

?>