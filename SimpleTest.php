<?php
    // Mengimpor TestCase dari PHPUnit untuk membuat pengujian.
    use PHPUnit\Framework\TestCase;

    // Mengimpor kelas Wordcount yang akan diuji.
    require_once "Wordcount.php";

    // Membuat kelas pengujian dengan warisan dari TestCase.
    class SimpleTest extends TestCase {
        // Mendefinisikan metode pengujian untuk menguji fungsi countWord().
        public function testCountWord() {
            // Membuat objek Wordcount.
            $Wc = new Wordcount();

            // Kalimat yang akan dihitung jumlah katanya.
            $TestSentence = "My name is Joko";

            // Memanggil metode countWord() dengan kalimat di atas dan menyimpan hasilnya.
            $Wordcount = $Wc->countWords($TestSentence);

            // Membandingkan hasil dengan jumlah yang diharapkan (4 kata).
            $this->assertEquals(4, $Wordcount);
        }
    }
?>
