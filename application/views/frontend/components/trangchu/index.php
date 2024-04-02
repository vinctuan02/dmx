<div class="top-banner">
    <div style="display: flex; justify-content: center; align-items: center; height: 250px; width: 100%">
        <img src="https://cdn.tgdd.vn/2022/03/banner/800-200-800x200-176.png" style="height: 100%; max-width:50%">
        <img src="https://cdn.tgdd.vn/Files/2015/09/09/698087/tang-dan-am-thanh-khi-mua-tivi-samsung-uhd.jpg" style="height:100%; max-width:50%">
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px; margin-right: 50%; ">
    <div id="sale-title1">
        <span>Sản Phẩm Khuyến Mãi</span>
    </div>
</div>

<div class="container" style="margin-bottom: 20px; margin-top: 20px; /* margin-left: 5px; margin-right: 5px; */">
    <div class="owl-carousel owl-carousel-product owl-theme">
        <?php
        $product_sale = $this->Mproduct->product_sale(10);
        foreach ($product_sale as $row) : ?>
            <div class="item panel panel-default" style="margin: 0px;">
                <div class="products-sale">
                    <div class="lt-product-group-image">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                            <img class="img-p panel-body" src="public/images/products/<?php echo $row['avatar'] ?>" alt="">
                        </a>

                        <?php if ($row['sale'] > 0) : ?>
                            <div class="giam-percent">
                                <span class="text-giam-percent">Giảm <?php echo $row['sale'] ?>%</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="lt-product-group-info">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>" style="text-align: left;">
                            <h3><?php echo $row['name'] ?></h3>
                        </a>
                        <div class="price-box">
                            <?php if ($row['sale'] > 0) : ?>

                                <p class="old-price">
                                    <span class="price"><?php echo (number_format($row['price'])); ?>₫</span>
                                </p>
                                <p class="special-price">
                                    <span class="price"><?php echo (number_format($row['price_sale'])); ?>₫</span>
                                </p>
                            <?php else : ?>
                                <p class="old-price">
                                    <span class="price" style="color: #fff"><?php echo (number_format($row['price'])); ?>₫</span>
                                </p>
                                <p class="special-price">
                                    <span class="price"><?php echo (number_format($row['price'])); ?>₫</span>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>




<div class="container-fluid" style="margin-top: 20px; margin-left: 50%;">
    <div id="sale-title2">
        <span>Sản Phẩm Bán Chạy</span>
    </div>
</div>
<div class="container" style="margin-bottom: 20px; margin-top: 20px;">
    <div class="owl-carousel owl-carousel-product owl-theme">
        <?php
        $product_sale = $this->Mproduct->product_selling(10);
        foreach ($product_sale as $row) : ?>
            <div class="item panel panel-default" style="margin: 0px;">
                <div class="products-sale">
                    <div class="lt-product-group-image">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                            <img class="img-p" src="public/images/products/<?php echo $row['avatar'] ?>" alt="">
                        </a>
                        <?php if ($row['sale'] > 0) : ?>
                            <div class="giam-percent">
                                <span class="text-giam-percent">Giảm <?php echo $row['sale'] ?>%</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="lt-product-group-info">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>" style="text-align: left;">
                            <h3><?php echo $row['name'] ?></h3>
                        </a>
                        <div class="price-box">
                            <?php if ($row['sale'] > 0) : ?>

                                <p class="old-price">
                                    <span class="price"><?php echo (number_format($row['price'])); ?>₫</span>
                                </p>
                                <p class="special-price">
                                    <span class="price"><?php echo (number_format($row['price_sale'])); ?>₫</span>
                                </p>
                            <?php else : ?>
                                <p class="old-price">
                                    <span class="price" style="color: #fff"><?php echo (number_format($row['price'])); ?>₫</span>
                                </p>
                                <p class="special-price">
                                    <span class="price"><?php echo (number_format($row['price'])); ?>₫</span>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</section>

</section>
<div id="content">
    <div class="container">
        <?php
        $listCategory = $this->Mcategory->category_list(0, '10');
        foreach ($listCategory as $rowCategory) :
            // row dien thoai
            $subCategory = $this->Mcategory->category_list($rowCategory['id'], '10');
            // Id dien thoai
            $catId = $this->Mcategory->category_id($rowCategory['link']);
            // list id dt ss, apple,...
            $listCatId = $this->Mcategory->category_listcat($catId);
            // list dt ss, apple
            $listProducts = $this->Mproduct->product_home_limit($listCatId, 10);
            if ((count($listProducts) >= 3)) : ?>
                <div class="list-product">
                    <div class="list-header-z">
                        <h2><a href="<?php echo  $rowCategory['link'] ?>"><?php echo  $rowCategory['name'] ?> nổi bật</a></h2>
                        <ul class="sub-category">
                            <?php foreach ($subCategory as $rowSubCategory) : ?>
                                <li>
                                    <a href="san-pham/<?php echo $rowSubCategory['link'] ?>" ' 
                                        title="<?php echo $rowSubCategory['name'] ?>"
                                        class="ws-nw overflow ellipsis"
                                        >
                                        <?php echo $rowSubCategory['name'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="product-container">
                        <?php foreach ($listProducts as $sp) : ?>
                            <div class="p-box-5">
                                <div class="product-lt">
                                    <div class="lt-product-group-image">
                                        <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" >
                                            <img class="img-p"src="public/images/products/<?php echo $sp['avatar'] ?>" alt="">
                                        </a>

                                        <?php if ($sp['sale'] > 0) : ?>
                                            <div class="giam-percent">
                                                <span class="text-giam-percent">Giảm <?php echo $sp['sale'] ?>%</span>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="lt-product-group-info">
                                        <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" style="text-align: left;">
                                            <h3><?php echo $sp['name'] ?></h3>
                                        </a>
                                        <div class="price-box">
                                            <?php if ($sp['sale'] > 0) : ?>

                                                <p class="old-price">
                                                    <span class="price"><?php echo (number_format($sp['price'])); ?>₫</span>
                                                </p>
                                                <p class="special-price">
                                                    <span class="price"><?php echo (number_format($sp['price_sale'])); ?>₫</span>
                                                </p>
                                                <?php else : ?>
                                                 <p class="old-price">
                                                    <span class="price" style="color: #fff"><?php echo (number_format($sp['price'])); ?>₫</span>
                                                </p>
                                                <p class="special-price">
                                                    <span class="price"><?php echo (number_format($sp['price'])); ?>₫</span>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>

<div class="adv">
    <section id="service" style="margin: 20px;">
        <div class="container">
            <div class="row">
                <div id="service_home" class="clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_142e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Miễn phí giao hàng
                                </span>
                                <span class="small-text">
                                    Cho hóa đơn từ 100,000,000 đ
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_242e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Giao hàng trong ngày
                                </span>
                                <span class="small-text">
                                    Với tất cả đơn hàng
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_342e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Sản phẩm an toàn
                                </span>
                                <span class="small-text">
                                    Cam kết chính hãng
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Begin-->
    <!--End-->
</div>