<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/sanpham.css">
    <title>Sanpham</title>
</head>

<body>
    <div id="container">
        <div class="Container_content">
            <div class="TopContent">
                <div class="Title_Content">
                    <h4>
                        <p><a href="index.php">TRANG CHỦ</a> / Trái Cây</p>
                    </h4>
                </div>
                <div class="Dropdown_sort">
                    <label id="labeldorp" for="sort"><b>Hiển thị theo</b></label>

                    <select name="sort" id="option">
                        <option value="manual">Mặc Định</option>
                        <option value="favorite">Phổ biến</option>
                        <option value="rating">Đánh Giá</option>
                        <option value="fresh">Mới nhất</option>
                        <optgroup label="Giá cả:">
                            <option value="prices">Thấp đến cao</option>
                            <option value="prices">Cao xuống thấp</option>
                        </optgroup>
                    </select>

                </div>
            </div>



        </div>
    </div>

</body>

</html>