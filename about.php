<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.php'; ?>

<?php
  $link = $_SERVER['PHP_SELF'];
  $link_array = explode('/',$link);
  $page = end($link_array);
?>

<body class="<?php echo str_replace('.php','',$page); ?>">
<?php include_once 'navbar.php'; ?>


<div class="header">
  <h1>My Website</h1>
  <p>A <b>responsive</b> website created by me.</p>
</div>

<div class="row">

  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>

  <div class="main">
    <?php include_once 'pages/page-' . str_replace('.php','',$page) . '.php'; ?>
  </div>

</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
