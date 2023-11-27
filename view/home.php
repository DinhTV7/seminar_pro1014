<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>

        <div class="items">
            <?php
            $i = 0;
            foreach ($sanpham as $sp) :
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
            ?>
                <div class="box_items <?php echo $mr ?>">
                    <div class="row img">
                        <a href="<?php echo $linksp ?>" style="display:block;margin:0 auto;"><img src="<?php echo $hinh ?>" alt=""></a>
                    </div>
                    <a href="<?php echo $linksp ?>">
                        <b><?php echo $name ?></b>
                    </a>
                    <p>
                        <?php echo number_format($price) ?> <u>đ</u>
                    </p>

                </div>
            <?php
                $i += 1;
                endforeach;
            ?>

        </div>
    </div>
    <div class="boxright">
        <?php
        include "boxright.php";
        ?>
    </div>
</main>
<script src="main.js"></script>