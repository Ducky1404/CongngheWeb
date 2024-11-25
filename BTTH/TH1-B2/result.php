<?php
$filename = __DIR__ . "/questions.txt"; 
if (!file_exists($filename)) {
    die("Tệp câu hỏi không tồn tại! Vui lòng kiểm tra lại.");
}

$questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
if ($questions === false) {
    die("Không thể đọc tệp câu hỏi. Vui lòng kiểm tra quyền truy cập.");
}

$answers = []; 
foreach ($questions as $line) {
    if (strpos($line, "ANSWER:") !== false) { 
        $answers[] = trim(substr($line, strpos($line, ":") + 1));
    }
}

$score = 0; 
$totalQuestions = count($answers); 
$userAnswers = $_POST; 

foreach ($userAnswers as $key => $value) {
  
    $questionNumber = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);

  
    if (isset($answers[$questionNumber - 1]) && $answers[$questionNumber - 1] === $value) {
        $score++; 
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Bài Trắc Nghiệm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="alert alert-success text-center">
        <h2>Kết Quả Bài Thi</h2>
        <p>Bạn trả lời đúng <strong><?= $score ?></strong> / <?= $totalQuestions ?> câu.</p>
    </div>
    <div class="text-center">
        <a href="quiz.php" class="btn btn-primary">Làm lại</a>
    </div>
</div>
</body>
</html>
