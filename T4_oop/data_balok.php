<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..
        // Membuat objek-objek Balok
        $balok1 = new BaloK(29, 16, 7);
        $balok2 = new BaloK(15, 8, 3);
        $balok3 = new BaloK(20, 10, 5);
        $balok4 = new BaloK(12, 6, 2);

        // Menampilkan hasil perhitungan untuk setiap objek Balok
        echo "Objek Balok 1:\n <br>";
        echo "Luas: " . $balok1->getLuas() . "\n<br>";
        echo "Keliling: " . $balok1->getKeliling() . "\n<br>";
        echo "Volume: " . $balok1->getVolume() . "\n\n<br><br>";

        echo "Objek Balok 2:\n<br>";
        echo "Luas: " . $balok2->getLuas() . "\n<br>";
        echo "Keliling: " . $balok2->getKeliling() . "\n<br>";
        echo "Volume: " . $balok2->getVolume() . "\n\n<br><br>";

        echo "Objek Balok 3:\n<br>";
        echo "Luas: " . $balok3->getLuas() . "\n<br>";
        echo "Keliling: " . $balok3->getKeliling() . "\n<br>";
        echo "Volume: " . $balok3->getVolume() . "\n\n<br><br>";

        echo "Objek Balok 4:\n<br>";
        echo "Luas: " . $balok4->getLuas() . "\n<br>";
        echo "Keliling: " . $balok4->getKeliling() . "\n<br>";
        echo "Volume: " . $balok4->getVolume() . "\n\n";
?>