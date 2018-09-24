
<?php

function display_navigation(){
    $display = array('<a href="lab.php"><ul>Home</ul></a>','<a href="lab.php"><ul>About Us</ul></a>',
        '<a href="lab.php"><ul>Weather Condition</ul></a>','<a href="lab.php"><ul>Weather Forecast</ul></a>','<a href="lab.php"><ul>Contact Us</ul></a>');
    foreach ($display as $nav){
        echo "$nav<br>";
    }
}
display_navigation();

?>