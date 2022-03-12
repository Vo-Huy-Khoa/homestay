<?php
  $content = filter_input(INPUT_GET,'c');
  if(!empty($content))
  {
     switch($content)
     {
        case "about":
            include_once("view/pages/about.php");
         break;
        case "blog-details":
            include_once("view/pages/blog-details.php");
            break;
        case "blog-list":
            include_once("view/pages/blog-list.php");
            break;
        case "room-list":
            include_once("view/pages/room-list.php");
         break;
        case "room-details":
            include_once("view/pages/room-details.php");
            break;
        case "room-grid":
            include_once("view/pages/room-grid.php");
            break;
        case "contact":
            include_once("view/pages/contact.php");
            break;
        case "booking":
            include_once("view/pages/booking.php");
            break;
     }
  }
  else
  {
     // Default load
     include_once("view/common/dashboard.php");
  }
      
?>