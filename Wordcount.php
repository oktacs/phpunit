<?php
// File : WordCount.php
class Wordcount
{
    // memecah string menjadi array
    // lalu menghitung jumlah array tersebut, kemudian mengembalikan nilai jumlahnya.
    public function countWords($sentence)
    {
        return count(explode(" ",$sentence));
    }
}
?>