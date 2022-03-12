<?php

$category_id = filter_input(INPUT_GET, 'category_id');

$sql_list_categories_blog = "select * from blogs where category_id = '$category_id' ";
$list_categories_blog = Database::db_get_list_condition($sql_list_categories_blog);

$sql = "select * from categories";
$list_categories = Database::db_get_list($sql);

$sql_blog = "select * from blogs";
$list_blog = Database::db_get_list($sql_blog);


if (filter_input(INPUT_POST, 'action') == 'search') {
    $value = filter_input(INPUT_POST, 'value');

    $sql_search = "select * from blogs where title like '%$value%' ";
    $list_blog_search = Database::db_get_list($sql_search);
}

?>

<div class="container-fluid page-header mb-5 p-0" style="background-image: url(../public/user/img/carousel-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Danh Sách Bài Viết</h1>
            <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Blog List</li>
                        </ol>
                    </nav> -->
        </div>
    </div>
</div>



<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-8">

                <?php if (!empty($category_id)) {
                    foreach ($list_categories_blog as $blog) : ?>
                        <div class="row blog-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                                <div class="position-relative overflow-hidden h-100">
                                    <img class="position-absolute w-100 h-100" src="../uploads/<?php echo $blog['image'] ?>" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                                <div class="p-4">
                                    <a href="#" class="bg-primary text-white rounded py-1 px-3"><?php echo substr($blog['title'], 0, 60)  ?></a>
                                    <div class="d-flex mb-3 my-4">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                        <small><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 2045</small>
                                    </div>
                                    <h5 class="lh-base mb-0"><?php echo substr($blog['description'], 0, 150)  ?></h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-auto p-4">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-3" href="<?php echo Helper::get_url('?c=blog-details&blog_id=' . $blog['id']) ?>">Xem Thêm</a>
                                    <div class="me-n1">
                                        <span class="me-1">Share:</span>
                                        <a class="mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                } elseif (!empty($value)) {
                    foreach ($list_blog_search as $blog) : ?>
                        <div class="row blog-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                                <div class="position-relative overflow-hidden h-100">
                                    <img class="position-absolute w-100 h-100" src="../uploads/<?php echo $blog['image'] ?>" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                                <div class="p-4">
                                    <a href="#" class="bg-primary text-white rounded py-1 px-3"><?php echo substr($blog['title'], 0, 60)  ?></a>
                                    <div class="d-flex mb-3 my-4">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                        <small><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 2045</small>
                                    </div>
                                    <h5 class="lh-base mb-0"><?php echo substr($blog['description'], 0, 150)  ?></h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-auto p-4">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-3" href="<?php echo Helper::get_url('?c=blog-details&blog_id=' . $blog['id']) ?>">Xem Thêm</a>
                                    <div class="me-n1">
                                        <span class="me-1">Share:</span>
                                        <a class="mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php    endforeach;
                } else {
                    foreach ($list_blog as $blog) : ?>
                        <div class="row blog-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                                <div class="position-relative overflow-hidden h-100">
                                    <img class="position-absolute w-100 h-100" src="../uploads/<?php echo $blog['image'] ?>" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                                <div class="p-4">
                                    <a href="#" class="bg-primary text-white rounded py-1 px-3"><?php echo substr($blog['title'], 0, 60)  ?></a>
                                    <div class="d-flex mb-3 my-4">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                        <small><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 2045</small>
                                    </div>
                                    <h5 class="lh-base mb-0"><?php echo substr($blog['description'], 0, 150)  ?></h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-auto p-4">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-3" href="<?php echo Helper::get_url('?c=blog-details&blog_id=' . $blog['id']) ?>">Xem Thêm</a>
                                    <div class="me-n1">
                                        <span class="me-1">Share:</span>
                                        <a class="mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach;
                } ?>

                <div class="row wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center m-0">
                                <li class="page-item disabled">
                                    <a class="page-link rounded-0" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link rounded-0" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">

                <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <form action="" method="post">
                    <div class="input-group">
                        
                            <input type="text" class="form-control p-3" placeholder="Tìm Kiếm.." name="value">
                            <input type="hidden" name="action" value="search">
                            <button class="btn btn-primary px-4" type="submit">Tìm Kiếm</i></button>

                    </div>
                    </form>

                </div>


                <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title text-start mb-4">Thể Loại</h4>
                    <div class="category-list d-flex flex-column">
                        <?php foreach ($list_categories as $categories) : ?>
                            <a class="text-body d-flex mb-3" href="<?php echo Helper::get_url('?c=blog-list&category_id=' . $categories['id']) ?>">
                                <span><?php echo $categories['name'] ?></span>
                                <span class="badge text-body fw-normal ms-auto pe-0">(50)</span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>




                <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid">
                </div>


                <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title text-start mb-4">Bài Viết Tương Tự</h4>
                    <ul class="nav nav-pills d-flex justify-content-between border-bottom mb-3">
                        <li class="nav-item">
                            <a class="d-flex align-items-center pb-3 active" data-bs-toggle="pill" href="#tab-1">
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
                                <img class="img-fluid" src="../public/user/img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                        consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex border-bottom mb-3 pb-3">
                                <img class="img-fluid" src="../public/user/img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                        consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img class="img-fluid" src="../public/user/img/blog-3.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                        consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="d-flex border-bottom mb-3 pb-3">
                                <img class="img-fluid" src="../public/user/img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                        consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex border-bottom mb-3 pb-3">
                                <img class="img-fluid" src="../public/user/img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                        consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img class="img-fluid" src="../public/user/img/blog-3.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                        consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="d-flex border-bottom mb-3 pb-3">
                                <img class="img-fluid" src="../public/user/img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                        consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex border-bottom mb-3 pb-3">
                                <img class="img-fluid" src="../public/user/img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                        consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
                                            45</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img class="img-fluid" src="../public/user/img/blog-3.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="#" class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet
                                        consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John
                                            Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan
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
                        <?php foreach ($list_categories as $categories) : ?>
                            <a href="#" class="btn btn-tag border m-1"><?php echo $categories['name'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>