<?php
// Kalkulator jumlah kata dalam sebuah kalimat.
class Wordcount
{
    // Metode menghitung jumlah kata dalam kalimat dengan memecahnya menggunakan spasi dan menghitung elemen array.
    public function countWords($sentence)
    {
        // Memecah kalimat menjadi kata-kata dan menghitung jumlahnya.
        return count(explode(" ", $sentence));
    }
}
?>
