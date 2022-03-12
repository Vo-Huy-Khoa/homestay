
<?php 
$blog_id = filter_input(INPUT_GET,'blog_id');
$sql_blog = "select * from blogs where id = '$blog_id' ";
$row_blog = Database::db_get_row($sql_blog);
$category_id = $row_blog['category_id'];

$sql = "select * from categories";
$list_categories = Database::db_get_list($sql);

$sql_categories_blog = "select * from blogs where category_id = '$category_id' ";
$list_categories_blog = Database::db_get_list_condition($sql_categories_blog);
?>
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../public/user/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Chi Tiết Bài Viết</h1>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Blog Detail</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>



        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-8">

                        <div id="blog-carousel" class="carousel slide mb-5 wow fadeIn" data-bs-ride="carousel"
                            data-wow-delay="0.1s">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="w-100" src="../uploads/<?php echo $row_blog['image'] ?>" alt="Image">
                                </div>
                            </div>

                        </div>
                        <div class="d-flex mb-3">
                            <span class="border-end me-3 pe-3"><i class="fa fa-user-alt text-primary me-2"></i>John
                                Doe</span>
                            <span><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $row_blog['created_at'] ?></span>
                        </div>
                        <h1 class="mb-4"><?php echo $row_blog['title'] ?></h1>
                        <p><?php echo $row_blog['description'] ?>
                        </p>




                        <div class="mb-5 wow fadeIn" data-wow-delay="0.1s">
                            <h4 class="section-title text-start mb-4">Cùng Thể Loại</h4>
                            <div class="owl-carousel related-carousel position-relative">
                                <?php foreach($list_categories_blog as $blog) : ?>
                                    <div class="d-flex">
                                        <img class="img-fluid" src="../uploads/<?php echo $blog['image'] ?>"
                                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="<?php echo Helper::get_url('?c=blog-details&blog_id='.$blog['id']) ?>" class="h6 lh-base fw-medium mb-2"><?php echo $blog['title'] ?></a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                                    Doe</small>
                                                <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $blog['created_at'] ?></small>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>



                    </div>


                    <div class="col-lg-4">

                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="input-group">
                                <input type="text" class="form-control p-3" placeholder="Keyword">
                                <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                            </div>
                        </div>


                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title text-start mb-4">Danh Mục</h4>
                            <div class="category-list d-flex flex-column">
                                    
                            <?php foreach($list_categories as $categories): ?>
                                <a class="text-body d-flex mb-3" href="<?php echo Helper::get_url('?c=blog-list&category_id='.$categories['id']) ?>">
                                    <span><?php echo $categories['name'] ?></span>
                                    <span class="badge text-body fw-normal ms-auto pe-0">(50)</span>
                                </a>
                            <?php endforeach; ?>
                            </div>
                        </div>


                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title text-start mb-4">Recent Post</h4>
                            <div class="d-flex border-bottom mb-3 pb-3">
                                <img class="img-fluid" src="../public/user/img/blog-1.jpg"
                                    style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec
                                        adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex border-bottom mb-3 pb-3">
                                <img class="img-fluid" src="../public/user/img/blog-2.jpg"
                                    style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec
                                        adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img class="img-fluid" src="../public/user/img/blog-3.jpg"
                                    style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec
                                        adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <img src="../public/user/img/blog-1.jpg" alt="" class="img-fluid">
                        </div>


                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title text-start mb-4">More Post</h4>
                            <ul class="nav nav-pills d-flex justify-content-between border-bottom mb-3">
                                <li class="nav-item">
                                    <a class="d-flex align-items-center pb-3 active" data-bs-toggle="pill"
                                        href="#tab-1">
                                        <h6 class="mb-0">Featured</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex align-items-center pb-3" data-bs-toggle="pill" href="#tab-2">
                                        <h6 class="mb-0">Popular</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex align-items-center pb-3" data-bs-toggle="pill" href="#tab-3">
                                        <h6 class="mb-0">Latest</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="../public/user/img/blog-1.jpg"
                                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                                consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                                    Doe</small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                                    45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="../public/user/img/blog-2.jpg"
                                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                                consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                                    Doe</small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                                    45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img class="img-fluid" src="../public/user/img/blog-3.jpg"
                                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                                consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                                    Doe</small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                                    45</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="../public/user/img/blog-1.jpg"
                                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                                consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                                    Doe</small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                                    45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="../public/user/img/blog-2.jpg"
                                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                                consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                                    Doe</small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                                    45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img class="img-fluid" src="../public/user/img/blog-3.jpg"
                                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                                consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                                    Doe</small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                                    45</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="../public/user/img/blog-1.jpg"
                                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                                consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                                    Doe</small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                                    45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="../public/user/img/blog-2.jpg"
                                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                                consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                                    Doe</small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                                    45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img class="img-fluid" src="../public/user/img/blog-3.jpg"
                                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                                consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                                    Doe</small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                                    45</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title text-start mb-4">Tags</h4>
                            <div class="d-flex flex-wrap m-n1">
                                <a href="#" class="btn btn-tag border m-1">Design</a>
                                <a href="#" class="btn btn-tag border m-1">Development</a>
                                <a href="#" class="btn btn-tag border m-1">Marketing</a>
                                <a href="#" class="btn btn-tag border m-1">SEO</a>
                                <a href="#" class="btn btn-tag border m-1">Writing</a>
                                <a href="#" class="btn btn-tag border m-1">Consulting</a>
                                <a href="#" class="btn btn-tag border m-1">Design</a>
                                <a href="#" class="btn btn-tag border m-1">Development</a>
                                <a href="#" class="btn btn-tag border m-1">Marketing</a>
                                <a href="#" class="btn btn-tag border m-1">SEO</a>
                                <a href="#" class="btn btn-tag border m-1">Writing</a>
                                <a href="#" class="btn btn-tag border m-1">Consulting</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

