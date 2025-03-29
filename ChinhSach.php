    <style>
        <?php $style = file_get_contents('css/home_insights.min.css');echo $style;?>
        #menu-main {
            display: '{{ $display_menu }}';
        }

        /* styles.css */
        body {
            font-family: Arial, sans-serif;
        }

        nav {
            width: 100%;
            background-color: #2196f3;
            text-align: center; /* Không cần sử dụng !important */
        }

        .menu-1 {
            width: 100%;
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; /* Căn giữa các mục menu theo chiều ngang */
        }

        .menu-1 > li {
            position: relative;
        }

        .menu-1 > li > a {
            display: flex;
            align-items: center; /* Căn giữa theo chiều dọc */
            justify-content: center; /* Căn giữa theo chiều ngang */
            padding: 10px 60px;
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .menu-1 > li > a:hover,
        .submenu li a:hover {
            background-color: #50abf7;
            color: white;
        }

        .submenu {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            background-color: white;
            z-index: 100;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .submenu li {
            position: relative;
        }

        .submenu li a {
            display: block;
            padding: 10px 20px;
            color: black;
            text-decoration: none;
            white-space: nowrap;
            text-align: center; /* Căn giữa theo chiều ngang */
        }

        .menu-1 > li:hover > .submenu,
        .submenu li:hover > .submenu {
            display: block;
        }

        .submenu .submenu {
            left: 100%;
            top: 0;
        }
        
        /* CSS cho form */
        .warranty-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.warranty-form .form-group {
    margin-bottom: 15px;
    text-align: left;
}

.warranty-form label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

.warranty-form label .required {
    color: red;
}

.warranty-form input,
.warranty-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.warranty-form textarea {
    resize: vertical;
}

.warranty-form input[type="file"] {
    padding: 3px;
}

.warranty-form input[type="submit"] {
    width: auto;
    background-color: #28a745;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px 20px;
    border-radius: 4px;
}

.warranty-form input[type="submit"]:hover {
    background-color: #218838;
}
    </style>

    <title>Chính sách bảo hành</title>
    <div class="menu col-sm-12 col-md-12">
        
    <div class="border"><center><strong>HEADER</strong></center></div>    
        <nav>
        
        <ul class="menu-1" style="text-align: center">
            <li><a href="http://127.0.0.1:8000">Trang chủ</a></li>
            <li><a href="http://127.0.0.1:8000/san-pham">Sản phẩm</a>
                
            </li>
            <li><a href="http://127.0.0.1:8000/bai-viet">Bài viết</a></li>
            <li><a href="http://127.0.0.1:8000/lien-he">Liên hệ</a></li>
            <!-- <li><a href="http://127.0.0.1:8000/">Chính sách</a></li> -->
        </ul>
        </nav>
    </div>

    <center><h1>THÔNG TIN VỀ BẢO HÀNH</h1></center>
    <br>
    <center>
        ---chèn ND sau.....
    </center>
    <br>
    <center>Địa chỉ gửi bảo hành sản phẩm: .....</center>
    <br>
    <center><h1>GỬI THÔNG TIN BẢO HÀNH</h1></center>
    <form action="#" method="post" class="warranty-form">
        <center>
            <div class="form-group">
                <label for="name">Tên của bạn: <span class="required">*</span></label>
                <input type="text" id="name" name="a" placeholder="Nhập tên của bạn" required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại: <span class="required">*</span></label>
                <input type="tel" id="phone" name="b" placeholder="Nhập sđt của bạn" required>
            </div>
            <div class="form-group">
                <label for="email">Email: <span class="required">*</span></label>
                <input type="email" id="email" name="c" placeholder="Nhập email của bạn" required>
            </div>
            <div class="form-group">
                <label for="product">Tên sản phẩm bảo hành: <span class="required">*</span></label>
                <input type="text" id="product" name="d" placeholder="Nhập sản phẩm bảo hành" required>
            </div>
            <div class="form-group">
                <label for="purchase-date">Ngày mua: <span class="required">*</span></label>
                <input type="date" id="purchase-date" name="e" required>
            </div>
            <div class="form-group">
                <label for="description">Mô tả tình trạng: <span class="required">*</span></label>
                <textarea id="description" name="f" placeholder="Nhập mô tả" required></textarea>
            </div>
            <div class="form-group">
                <label for="file1">Hình chụp 1: <span class="required">*</span></label>
                <input type="file" id="file1" name="f1" required>
            </div>
            <div class="form-group">
                <label for="file2">Hình chụp 2:</label>
                <input type="file" id="file2" name="f2">
            </div>
            <div class="form-group">
                <label for="file3">Hình chụp 3:</label>
                <input type="file" id="file3" name="f3">
            </div>
            <div class="form-group">
                <input type="submit" name="s" value="Gửi thông tin">
            </div>
        </center>
    </form>

    <?php

    ini_set('display_errors','Off'); ini_set('error_reporting', E_ALL ); define('WP_DEBUG', false); define('WP_DEBUG_DISPLAY', false);
    
    if (isset($_REQUEST['s'])){
        $imageFileType = $_FILES['f1'];
        $imageFileType2 = $_FILES['f2'];
        $imageFileType3 = $_FILES['f3'];

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != ''
        ) {
            echo "<script>alert('Ảnh 1 không hợp lệ! Chỉ các file JPG, JPEG, PNG & GIF được cho phép.')</script>";

            $uploadOk = 0;
        }
        if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != ''
        ) {
            echo "<script>alert('Ảnh 2 không hợp lệ! Chỉ các file JPG, JPEG, PNG & GIF được cho phép.')</script>";

            $uploadOk = 0;
        }
        if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg" && $imageFileType3 != ''
        ) {
            echo "<script>alert('Ảnh 3 không hợp lệ! Chỉ các file JPG, JPEG, PNG & GIF được cho phép.')</script>";
            $uploadOk = 0;
        }
    }

    
        // Thông tin kết nối
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "tmdt";

        // Tạo kết nối
        $conn = new mysqli($servername, $username, $password, $database);

        // Kiểm tra kết nối
        // if ($conn->connect_error) {
        //     die("Kết nối không thành công: " . $conn->connect_error);
        // } else {
        //     echo "Kết nối thành công!";
        // }
            if($conn){
                if (isset($_REQUEST['s'])) {
                    $a = $_REQUEST['a'];
                    $b = $_REQUEST['b'];
                    $c = $_REQUEST['c'];
                    $d = $_REQUEST['d'];
                    $e = $_REQUEST['e'];
                    $f = $_REQUEST['f'];
                    $f1 = $_REQUEST['f1'];
                    $f2 = $_REQUEST['f2'];
                    $f3 = $_REQUEST['f3'];
                    $sql = "insert into ttkhguibh (tenkh, sdt, email, tensp, ngaymua, mota, anh1, anh2, anh3) values ('$a', '$b', '$c', '$d', '$e', '$f', '$f1','$f2','$f3')";
                    $query = mysqli_query($conn, $sql);
                    echo "<script>alert('Thông tin đã được gửi!')</script>";

                }
            }
        // Đóng kết nối
        $conn->close();
        ?>
    
    <div class="border" ><center><strong>FOOTER</strong></center></div>