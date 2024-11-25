<?php
$filename = __DIR__ . "/questions.txt"; 
if (!file_exists($filename)) {
    die("Tệp câu hỏi không tồn tại! Vui lòng kiểm tra lại.");
}

$questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
if ($questions === false) {
    die("Không thể đọc tệp câu hỏi. Vui lòng kiểm tra quyền truy cập.");
}

$parsedQuestions = []; 
$currentQuestion = []; 

foreach ($questions as $line) {
    if (preg_match('/^ANSWER:/', $line)) { 
        $currentQuestion[] = $line; 
        $parsedQuestions[] = $currentQuestion; 
        $currentQuestion = []; 
    } else {
        $currentQuestion[] = $line;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Trắc Nghiệm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Bài Trắc Nghiệm</h1>
    <form method="post" action="result.php">
        <?php foreach ($parsedQuestions as $index => $question): ?>
            <div class="card mb-4">
                <div class="card-header">
                    <strong><?= htmlspecialchars($question[0]) ?></strong>
                </div>
                <div class="card-body">
                    <?php for ($i = 1; $i < count($question) - 1; $i++): ?>
                        <?php
                        $answerLetter = substr($question[$i], 0, 1); 
                        ?>
                        <div class="form-check">
                            <input class="form-check-inline" type="radio" 
                                   name="question<?= $index + 1 ?>" 
                                   value="<?= $answerLetter ?>" 
                                   id="question<?= $index + 1 . $answerLetter ?>">
                            <label class="form-check-label" 
                                   for="question<?= $index + 1 . $answerLetter ?>">
                                <?= htmlspecialchars($question[$i]) ?>
                            </label>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Nộp bài</button>
    </form>
</div>
</body>
</html>
