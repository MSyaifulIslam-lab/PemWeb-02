<?php
if(isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

    function skor_skill($skills) {
        $skill_list = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 20,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50
        ];
        $result = 0;

        foreach($skills as $skill) {
                $result = $result + $skill_list[$skill];
        }
        return $result;
    }

    echo "NIM: $nim <br>";
    echo "Nama: $nama <br>";
    echo "Jenis Kelamin: $kelamin <br>";
    echo "Program Studi: $prodi <br>";
    echo "Skill Programing: ";

    foreach($skills as $skill) {
        echo $skill . ", ";
    }

    echo "<br> Domisili: $domisili <br>";
    echo "Email: $email <br>";
    echo "Skor Skill: " . skor_skill($skills);
    echo "<br> Kategori Skill: ";
}