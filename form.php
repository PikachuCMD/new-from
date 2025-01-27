<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มทดสอบ</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <h2>แบบฟอร์มทดสอบ</h2>
        <form method="post" action="form_db.php">
            <label for="name">ชื่อ:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">อีเมล:</label>
            <input type="email" id="email" name="email" required>

            <label for="dob">วันเดือนปีเกิด:</label>
            <input type="date" id="dob" name="dob" required>

            <button type="submit">ส่งข้อมูล</button>
        </form>
    </div>
</body>

</html>