<div class="header">
    <div style="display: none;" class="smallmenu" id="closemenu" onclick="smallmenu(0)">×</div>
    <div class="logo">
        <a href="index.php">
            <img src="img/logo.jpg" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone 	Store" width="250px" height="60px">
        </a>
    </div>
</div>
<div class="content1">
    <div class="search-header">
        <form class="input-search" method="post" action="index.php" enctype="multipart/form-data">
            <div class="autocomplete">
                <input id="searchf" name="searchtext" autocomplete="on" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                <button type="submit" id="searchbtn" name="search">
                    <i class="fa fa-search"></i>
                    Tìm kiếm
                </button>
            </div>
        </form> <!-- End Form search -->
        <div class="tags">
            <i><strong style="padding-left: 30px;font-size:20px;">Tìm kiếm theo giá: </strong></i>
            <?php
            function price()
            {
                global $conn;
                $sql_kg = "select * from khoanggia where status='1'";

                return $conn->query($sql_kg);
            }
            $result = price();
            ?>

            <?php foreach($result as $rs) { ?>
                <span style="background: pink;width: 150px;height: 70px; line-height: 70px;border-radius: 10px;">
                    <a href="?xem=search2&khoanggia=<?= $rs['khoanggia'] ?>" style="text-decoration: none;color: blue;font-weight: bold;"><?= $rs['khoanggia'] ?></a></span>

            <?php } ?>
        </div>
    </div>

    <div class="tools-member">
        <div class="member">
            <a>
                <span></span>

            </a>

        </div>

        <div class="cart">
            <i><a href="index.php?xem=listcart" style="text-decoration: none; font-size: 22px;">

                <img src="img/smallBanners/header_cart.png  " />Giỏ hàng

            </a></i>
        </div>


    </div>
</div>
</div>

</div>