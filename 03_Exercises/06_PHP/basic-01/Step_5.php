<?php
$course_name="unity";
$enrolled_students=7;
$price=375.5;
$on_discount=true;
echo "Course title: $course_name <br>
      Enrolled Students: $enrolled_students <br>
      Course price: $price $ USD<br>
      Course on discount: " .
    ($on_discount ? 'Yes' : 'No')
  .   " / " .
    (!$on_discount ? 'Yes' : 'No');
?>