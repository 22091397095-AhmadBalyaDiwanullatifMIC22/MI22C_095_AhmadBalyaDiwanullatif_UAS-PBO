<?php
include 'class_game.php';
include 'class_ui.php';

$game = new game();
$ui = new ui();

do {
    $ui->showMenu();
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case '1':
            $level = $ui->chooseLevel();
            $game->setLevel($level);
            $game->startGame();
            break;
        case '2':
            echo "Mengeluarkan Game. Dadahh!\n";
            break;
        default:
            echo "Pilihan Salah. Tolong coba lagi.\n";
    }
} while ($choice !== '2');
?>
