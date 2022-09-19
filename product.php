<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="shotcut icon" href="./img/face15.gif">
    <link rel="stylesheet" href="./css/product.css">

</head>

<body>
    <?php include "layout/header.php"; ?>


    <!----------------- Banner -------------------------->
    <section class="banner"></section>




    <!-- ------------- Location for nav ------------- -->
    <section class="location">
        <p><span class="home">Home</span> <i class="fa-solid fa-angle-right"></i> <span class="item">Products</span></p>
    </section>



    <!-- ------------ Sidebar & Products -------------->
    <article>

        <!-- Sidebar -->
        <div class="side-bar">
            <h1>Filters</h1>
            <div class="menu">
                <div class="item"><a href="">Category</a><i class="fa-regular fa-angle-down"></i></div>
                <div class="item"><a href="">Price</a><i class="fa-regular fa-angle-down"></i></div>
                <div class="item"><a href="">Color</a><i class="fa-regular fa-angle-down"></i></div>
                <div class="item"><a href="">Availability</a><i class="fa-regular fa-angle-down"></i></div>
                <div class="item"><a href="">Premium Brands</a><i class="fa-regular fa-angle-down"></i></div>
            </div>
        </div>



        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Products -->
        <section class="products">
            <form action="">

                <!-- Title -->
                <div class="title">
                    <h1>Products</h1>
                </div>


                <!-- Sort by -->
                <div class="sort">
                    <div>
                        <label for="sort">Sort by</label>
                        <select name="sort">
                            <option value="">Position</option>
                            <option value="price">Price: Low to high</option>
                            <option value="">Price: High to low</option>
                            <option value="">Name</option>
                            <option value="">New</option>
                        </select>
                        <a href=""><i class="fa-regular fa-arrow-up-wide-short"></i></a>
                    </div>
                </div>


                <!-- Product -->
                <div class="product">
                    <div class="product-items">

                        <!--  -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="./img/bed1.jpeg" alt="">
                                <div class="product-item-img-bottom">
                                    <i class="fa-regular fa-heart"></i>
                                    <i class="fa-regular fa-cart-plus"></i>
                                    <i class="fa-regular fa-circle-info"></i>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="product-item-details">
                                <div class="category">
                                    <div class="category-item"><p>Bed</p></div>
                                    <div class="rate">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="title">
                                    <p>Bed with Adjustable Headrests</p>
                                </div>
                                <div class="price">
                                    <p><span>$3,499.99</span> $2,499.99</p>
                                </div>

                            </div>
                        </div>

                        <!--  -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="./img/bed1.jpeg" alt="">
                                <div class="product-item-img-bottom">
                                    <i class="fa-regular fa-heart"></i>
                                    <i class="fa-regular fa-cart-plus"></i>
                                    <i class="fa-regular fa-circle-info"></i>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="product-item-details">
                                <div class="category">
                                    <div class="category-item"><p>Bed</p></div>
                                    <div class="rate">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="title">
                                    <p>Bed with Adjustable Headrests</p>
                                </div>
                                <div class="price">
                                    <p><span>$3,499.99</span> $2,499.99</p>
                                </div>

                            </div>
                        </div>

                        <!--  -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="./img/bed1.jpeg" alt="">
                                <div class="product-item-img-bottom">
                                    <i class="fa-regular fa-heart"></i>
                                    <i class="fa-regular fa-cart-plus"></i>
                                    <i class="fa-regular fa-circle-info"></i>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="product-item-details">
                                <div class="category">
                                    <div class="category-item"><p>Bed</p></div>
                                    <div class="rate">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="title">
                                    <p>Bed with Adjustable Headrests</p>
                                </div>
                                <div class="price">
                                    <p><span>$3,499.99</span> $2,499.99</p>
                                </div>

                            </div>
                        </div>

                        <!--  -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="./img/bed1.jpeg" alt="">
                                <div class="product-item-img-bottom">
                                    <i class="fa-regular fa-heart"></i>
                                    <i class="fa-regular fa-cart-plus"></i>
                                    <i class="fa-regular fa-circle-info"></i>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="product-item-details">
                                <div class="category">
                                    <div class="category-item"><p>Bed</p></div>
                                    <div class="rate">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="title">
                                    <p>Bed with Adjustable Headrests</p>
                                </div>
                                <div class="price">
                                    <p><span>$3,499.99</span> $2,499.99</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <!-- Paging -->
                <div class="paging">
                    <div class="paging-item"><a href="">1</a></div>
                    <div class="paging-item"><a href="">2</a></div>
                    <div class="paging-item"><a href="">3</a></div>
                    <div class="paging-item"><a href="">4</a></div>
                </div>

            </form>
        </section>
    </article>





    <?php include "layout/footer.php"; ?>
</body>

</html>