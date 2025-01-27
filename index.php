<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มลงทะเบียนนิสิต</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>ฟอร์มลงทะเบียนนิสิต</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="process.php">
                        <!-- ชื่อ -->
                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="กรอกชื่อของคุณ" required>
                        </div>
                        
                        <!-- รหัสนิสิต -->
                        <div class="mb-3">
                            <label for="student_id" class="form-label">รหัสนิสิต:</label>
                            <input type="text" class="form-control" id="student_id" name="student_id" placeholder="กรอกรหัสนิสิต" required>
                        </div>
                        
                        <!-- อีเมล -->
                        <div class="mb-3">
                            <label for="email" class="form-label">อีเมล:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="กรอกอีเมลของคุณ" required>
                        </div>
                        
                        <!-- สาขา -->
                        <div class="mb-3">
                            <label for="major" class="form-label">สาขา:</label>
                            <input type="text" class="form-control" id="major" name="major" placeholder="กรอกสาขาวิชา" required>
                        </div>
                        
                        <!-- ชั้นปี -->
                        <div class="mb-3">
                            <label for="year" class="form-label">ชั้นปี:</label>
                            <select class="form-select" id="year" name="year" required>
                                <option value="">-- เลือกชั้นปี --</option>
                                <option value="1">ปี 1</option>
                                <option value="2">ปี 2</option>
                                <option value="3">ปี 3</option>
                                <option value="4">ปี 4</option>
                            </select>
                        </div>
                        
                        <!-- คณะ -->
                        <div class="mb-3">
                            <label for="faculty" class="form-label">คณะ:</label>
                            <input type="text" class="form-control" id="faculty" name="faculty" placeholder="กรอกชื่อคณะ" required>
                        </div>
                        
                        <!-- วันเดือนปีเกิด -->
                        <div class="mb-3">
                            <label for="dob" class="form-label">วันเดือนปีเกิด:</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        
                        <!-- ปุ่มส่ง -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">ลงทะเบียน</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center text-muted">
                    © 2025 ฟอร์มลงทะเบียนนิสิต
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
