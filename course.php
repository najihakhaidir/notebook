<?php 

session_start();
include "access.php";
access('USER');
include "header.php";
include 'get_courses.php';

?>
<div class="page-title">
        <h1>Courses</h1>
</div>

<?php foreach ($courses as $course) { ?>
        <div class="course">
        <!-- <h2>INFO 4401</h2> -->
        <medium><?php echo $course['name']; ?></medium>
        <div class="button"><a href="reader.php?course_id=<?php echo $course['id']; ?>">Join</a></div>
</div>

        <?php } ?>

<?php include "footer.php" ?>