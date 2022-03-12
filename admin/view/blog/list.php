

<?php
$sql_categories = "select * from categories";
$list_categories = Database::db_get_list($sql_categories);

$sql = "select * from blogs";
$list_blog = Database::db_get_list($sql);

?>




        <!-- Blank Start -->
        <div class="container pt-4 px-4">
            <div class="row vh-100 bg-light rounded mx-0">
                <div class="col-md-12">
                    <h3>blog List</h3>

                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Categories Name</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($list_blog as $blog): ?>
                            <tr>
                            <td>
                                <?php foreach ($list_categories as $categories) :
                                    if ($categories['id'] == $blog['category_id']) {
                                        echo $categories['name'];
                                    }
                                endforeach;
                                ?>
                            </td>
                                <td><?php echo $blog['title'] ;?></td>
                                <td><?php echo substr($blog['description'], 0 , 300)  ;?></td>
                                <td><img width="120px" height="200px" src="../../uploads/<?php echo $blog['image'] ?>" alt=""></td>
                                <td><a href="<?php echo Helper::get_url('?c=blog-add') ?>">Add</a>&nbsp;&nbsp;
                                <a href="<?php echo Helper::get_url('?c=blog-edit&id='.$blog['id']) ?>">Edit</a>&nbsp;&nbsp;
                                <a href="<?php echo Helper::get_url('?c=blog-delete&id='.$blog['id']) ?>">Delete</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- Blank End -->
