<?php


$content = filter_input(INPUT_GET,'c');

if (!empty($content)) {
    switch ($content) {
         case 'categories-list':
            include('view/categories/list.php');
            break;
         case 'categories-add':
            include('view/categories/add.php');
            break; 
         case 'categories-edit':
            include('view/categories/edit.php');
            break; 
         case 'categories-delete':
            include('view/categories/delete.php');
            break; 
         case 'room-list':
            include('view/room/list.php');
            break;
         case 'room-add':
            include('view/room/add.php');
            break; 
         case 'room-edit':
            include('view/room/edit.php');
            break;
         case 'room-delete':
            include('view/room/delete.php');
            break;  
         case 'blog-list':
            include('view/blog/list.php');
            break;
         case 'blog-add':
            include('view/blog/add.php');
            break; 
         case 'blog-edit':
            include('view/blog/edit.php');
            break;
         case 'blog-delete':
            include('view/blog/delete.php');
            break;
         case 'booking-list':
            include('view/booking/list.php');
            break;
         case 'booking-add':
            include('view/booking/add.php');
            break; 
         case 'booking-in':
            include('view/booking/in.php');
            break; 
         case 'booking-edit':
            include('view/booking/edit.php');
            break;
         case 'booking-delete':
            include('view/booking/delete.php');
            break; 
         case 'booking-out':
            include('view/booking/out.php');
            break;
         case 'booking-process':
            include('view/booking/process.php');
            break;
         case 'booking-check':
            include('view/booking/check.php');
            break; 
         case 'login':
            include('login.php');
            break;
         case 'logout':
            include('logout.php');
            break; 
    }

}else{
   include('view/common/dashboard.php');
}


?>