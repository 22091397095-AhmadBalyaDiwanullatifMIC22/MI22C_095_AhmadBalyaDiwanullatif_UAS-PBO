<?php
class game {
    private $score = 0;
    private $totalQuestions;

    public function setLevel($level) {
        switch ($level) {
            case '1':
                $this->totalQuestions = 5;
                break;
            case '2':
                $this->totalQuestions = 10;
                break;
            case '3':
                $this->totalQuestions = 15;
                break;
            case '4':
                $this->totalQuestions = 20;
                break;
            case '5':
                $this->totalQuestions = 25;
                break;
            default:
                echo "Level tidak valid. Mengatur ke Level 1.\n";
                $this->totalQuestions = 5;
        }
    }

    public function startGame() {
        echo "Selamat Datang di game berbasis teks PHP!\n";
        echo "Jawab pertanyaan dibawah yaa!:\n";

        for ($i = 1; $i <= $this->totalQuestions; $i++) {
            $question = $this->generateQuestion();
            $userAnswer = $this->getUserAnswer($question);

            if ($this->checkAnswer($question, $userAnswer)) {
                echo "Benar!\n";
                $this->score++;
            } else {
                echo "Salah. Jawaban yang benar adalah: " . $question['answer'] . "\n";
            }
        }

        echo "Game Selesai! Skor Final Kamu Adalah: " . $this->score . " Dari " . $this->totalQuestions . "\n";
    }

    private function generateQuestion() {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $operator = ['+', '-', '*', '/'] [rand(0, 3)];
        $answer = 0;

        switch($operator){
            case '+':
                $answer = $num1 + $num2;
                break;
            case '-':
                $answer = $num1 - $num2;
                break;
            case '*':
                $answer = $num1 * $num2;
                break;
            case '/':
                $answer = $num1 / $num2;
                break;
        }

        return [
            'question' => "$num1 $operator $num2",
            'answer' => $answer
        ];
    }

    private function getUserAnswer($question) {
        echo "Pertanyaan: " . $question['question'] . " = ";
        return trim(fgets(STDIN));
    }

    private function checkAnswer($question, $userAnswer) {
        return (int)$userAnswer === $question['answer'];
    }
}
?>
