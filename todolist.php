<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>To do List</title>
    <link rel="stylesheet" href="style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  </head>
  <body>
    <?php include "content.php"; access('USER'); ?>
    <div class="wrapper">
      <div class="task-input">
        <input type="text" placeholder="Add a new task">
      </div>
      <div class="controls">
        <div class="filters">
          <span class="active" id="all">All</span>
          <span id="pending">Pending</span>
          <span id="completed">Completed</span>
        </div>
        <button class="clear-btn">Clear All</button>
      </div>
      <ul class="task-box"></ul>
    </div>

    <script src="script3.js"></script>

  </body>
</html>