<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php base_url()?>">
    <title>Quét mã QR - Nhà hàng</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f4f4;
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-title {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h2 class="form-title">Thông tin khách hàng</h2>
           
            
            <form action="" method="POST">
                <input type="hidden" name="table_id" >
                
                <div class="form-group">
                    <label for="customer_name">Họ và tên:</label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                </div>
                
                <div class="form-group">
                    <label for="num_people">Số người (tối đa 20):</label>
                    <input type="number" class="form-control" id="num_people" name="num_people" min="1" max="20" required>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary btn-submit">Xác nhận và xem menu</button>
            </form>
        </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html> 