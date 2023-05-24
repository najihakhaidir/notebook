<?php 

$con=new mysqli('localhost', 'root', '', 'notebook_db');

if(!$con){
    die(mysqli_error($con));
}

$sql = "select * from reader";
$query = mysqli_query($con, $sql);

if(isset($_REQUEST["new_post"])){
    $title = $_REQUEST["title"];
    $content = $_REQUEST["content"];
    $course = $_REQUEST['course'];

    $sql ="insert into reader (title,content,course) values('$title','$content', '$course')";
    mysqli_query($con, $sql);

    header("location:m_reader.php?info=added");
    exit();
}

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];

    $sql = "select * from reader where id = $id";
    $query = mysqli_query($con, $sql);
}

if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];
    $title = $_REQUEST["title"];
    $content = $_REQUEST["content"];

    $sql = "update reader set title='$title', content='$content' where id = $id";
    mysqli_query($con,$sql);

    header("location:m_reader.php?info=updated");
    exit();
}

if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];

    $sql = "delete from reader where id = $id";
    $query = mysqli_query($con, $sql);

    header("location:m_reader.php?info=deleted");
    exit();
}

?>