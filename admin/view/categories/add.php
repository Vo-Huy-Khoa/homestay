<?php
if (filter_input(INPUT_POST, 'action') == 'add') {

    $name = filter_input(INPUT_POST, 'name');
    $imgfile = "";
    $inputfile = "files";
    if (!filter_input(INPUT_POST, 'files'))
        $image = "";
    if (Helper::upload_file($inputfile, $imgfile)) {
        $image = $imgfile;
    }
    $sql = "insert into categories(name, image) value( :name, :image)";
    $params = [
        "name" => $name,
        'image' => $image
    ];

    if (Database::db_execute($sql, $params)) {
        Helper::redirect_js(Helper::get_url('?c=categories-list'));
    }
}
?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Categories Add</h6>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <!-- Uploaded image area-->
                        <div class="image-area mt-4"><img style="height: 300px; width:300px; border-radius:50px;" id="imageResult" src="" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                    </div>
                    <div class="mb-3">
                        <!-- Upload image input-->
                        <div class="input-group  rounded-pill bg-white shadow-sm">
                            <input id="upload" name="files" type="file" onchange="readURL(this);" class="form-control border-0">
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="action" value="add">
                    <button type="submit" class="btn btn-primary">ADD</button>
                </form>
            </div>
        </div>


    </div>
</div>
<!-- Form End -->