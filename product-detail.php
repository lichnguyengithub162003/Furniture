<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="./css/product-detail.css">
    <link rel="shotcut icon" href="./img/face15.gif">
</head>

<body>
    <?php include "layout/header.php"; ?>



    <!----------------- Banner -------------------------->
    <section class="banner"></section>



    <!-- ------------- Location for nav ------------- -->
    <section class="location">
        <p><span class="home">Home</span> <i class="fa-solid fa-angle-right"></i> <span class="item">Products</span><i class="fa-solid fa-angle-right"></i> <span class="item">Product detail</span></p>
    </section>





    <!-- -------------- Product Detail -------------- -->
    <section class="product-detail">

        <!-- Left - Image -->
        <div class="product-detail-left">

            <!-- Big img -->
            <img id="mainimg" src="./img/sofa1.jpeg" alt="" width="100%">


            <!-- Small img -->
            <div class="small-img-group">
                <div class="small-img-col"><img class="small-img" src="./img/sofa2.jpg" alt="" width="100%"></div>
                <div class="small-img-col"><img class="small-img" src="./img/sofa3.jpeg" alt="" width="100%"></div>
                <div class="small-img-col"><img class="small-img" src="./img/sofa4.jpeg" alt="" width="100%"></div>
                <div class="small-img-col"><img class="small-img" src="./img/sofa5.jpeg" alt="" width="100%"></div>
            </div>
        </div>


        <!-- Right - Content -->
        <div class="product-detail-right">
            <div class="category">Sofa</div>
            <div class="product-name">Modular 3-Seater Sofa</div>
            <div class="product-desc">The endlessly adaptable Claudio sofa offers a harmonious mix of configurations and tones. The backrests are removable and stay in place thanks to their own weight.</div>
            <div class="price"><span>$2,789</span> $1,995</div>
            <div class="color">
                <div class="color-desc"></div>
                <div class="color-desc"></div>
                <div class="color-desc"></div>
            </div>
            <div class="amounts">
                <label for="">Amount</label>
                <div class="amount">
                    <span class="next" onclick="nextNum()"></span>
                    <span class="prev" onclick="prevNum()"></span>
                    <div id="box"></div>
                </div>
            </div>

            <div class="button">
                <button class="buy-now" type="submit">Buy now</button>
                <button class="addtocart" type="submit">Add to cart</button>
            </div>
            <div class="detail">
                <h2>Dimension & Weight</h2>
                <span>Height: 236 cm</span>
                <span>Width: 30.5 cm</span>
                <span>Configuration: 3-Seat</span>
                <span>Mechanism: Removable Backrest</span>
                <span>Assembly: Full assembly required</span>
            </div>
        </div>

    </section>






    <!-- ----------------------- Product details 2 --------------------- -->
    <div class="detail-title"></div>




    <!-- ----------------------- Rating --------------------------- -->
    <div class="rate"></div>




    <!-- ---------------------- You Might Also Like ------------------- -->
    <div class="another"></div>



    
    <?php include "layout/footer.php"; ?>
</body>
<script src="./js/product-detail.js"></script>

</html>