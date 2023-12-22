<?php
class ui {
    public function showMenu() {
        echo "=====================\n";
        echo "|                   |\n";
        echo "|   Math Quiz Game  |\n";
        echo "|    Version 2.0    |\n";
        echo "|                   |\n";
        echo "=====================\n";
        echo "===== Main Menu =====\n";
        echo "|| [1] Mulai Game  ||\n";
        echo "|| [2] Keluar      ||\n";
        echo "=====================\n";
        echo "Masukkan Angka: ";
    }

    public function chooseLevel() {
        echo "Pilih Level:\n";
        echo "[1] Level 1 (5 pertanyaan)\n";
        echo "[2] Level 2 (10 pertanyaan)\n";
        echo "[3] Level 3 (15 pertanyaan)\n";
        echo "[4] Level 4 (20 pertanyaan)\n";
        echo "[5] Level 5 (25 pertanyaan)\n";
        echo "Masukkan Angka: ";
        return trim(fgets(STDIN));
    }
}
?>
