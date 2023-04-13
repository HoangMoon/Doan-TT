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
                        <p><a href="index.php">TRANG CHỦ</a> / TRÁI CÂY</p>
                    </h4>
                </div>
                <div class="Dropdown_sort">
                    <label id="labeldorp" for="sort"><b>Hiển thị theo</b></label>

                    <!-- <select name="sort" id="option">
                        <option value="manual">Mặc Định</option>
                        <option value="favorite">Phổ biến</option>
                        <option value="rating">Đánh Giá</option>
                        <option value="fresh">Mới nhất</option>
                        <optgroup label="Giá cả:">
                            <option value="prices">Thấp đến cao</option>
                            <option value="prices">Cao xuống thấp</option>
                        </optgroup>
                    </select> -->

                    <label class="select" for="slct">
                        <select id="slct" required="required">
                            <option value="" disabled="disabled" selected="selected">Select option</option>
                            <option value="manual">Mặc Định</option>
                            <option value="favorite">Phổ biến</option>
                            <option value="rating">Đánh Giá</option>
                            <option value="fresh">Mới nhất</option>
                            <optgroup label="Giá cả:">
                                <option value="prices">Thấp đến cao</option>
                                <option value="prices">Cao xuống thấp</option>
                            </optgroup>
                        </select>
                        <svg>
                            <use xlink:href="#select-arrow-down"></use>
                        </svg>
                    </label>
                    <!-- SVG Sprites-->
                    <svg class="sprites">
                        <symbol id="select-arrow-down" viewbox="0 0 10 6">
                            <polyline points="1 1 5 5 9 1"></polyline>
                        </symbol>
                    </svg>

                </div>
            </div>

            <div class="middleContent">
                <div  id="subnav">
                    <div class="categrory">
                        <span class="Title_cate" >Danh mục Sản Phẩm</span>
                        <div class="divder"></div>
                        <ul id="Cate_menu">
                            <li id="cate_item"><a href="">Rau củ</a></li>
                            <li id="cate_item"><a href="">Trái Cây</a></li>
                            <li id="cate_item"><a href="">Đồ uống</a></li>
                            <li id="cate_item"><a href="">Đồ khô</a></li>
                        </ul>
                    </div>
                </div>

                <div id="product">
                    <div class="grid-container">

                    </div>
                </div>
            </div>


        </div>
    </div>

</body>

</html>