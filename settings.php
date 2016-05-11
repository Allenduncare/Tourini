<?php
include "connectdb.php";
if(isset($_SESSION["username"])) {
  ?>
  <!DOCTYPE HTML>
  <html>
  <head>
    <title>Tourini</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <div class="collapse navbar-collapse">
      <form action="search.php" method="GET"><input type="search" placeholder="Search here" name="searchVal" required><input type="submit" value="Go"/>
  <ul class="nav navbar-nav pull-right ">
    <li class="active"><a href="home.php">Home</a></li>
  <li><a href="profile.php?username="<?php echo $_SESSION["username"]?>>Profile</a></li>
  <li><a href="#">Settings</a></li>

  </div>
</form>
    <section id="banner">
      <div class="inner split">
        <section>
          <h2><?php echo $_SESSION["username"]?>'s Setting</h2>
        </section>
        <section>
          <h2>Pending friend requests:</h2>
          <?php $query = "SELECT sender from friendrequest where reciever='".$_SESSION["username"]."';";
          if($result = $mysqli->query($query))
          {
            while ($row =$result->fetch_array(MYSQLI_NUM))
            {
              ?>
              <h3><?php echo $row[0]." has sent a request.";?></h3>
              <form action="friendrequest.php" method ="post">
                <input type="hidden" name="request" value="<?php echo $row[0]?>">
                <input type="submit" name="action" value="accept">
                <input type="submit" name="action" value="reject">
              <?php
            }?>
            </form>

          <?php } ?>
        </section>
</section>
<section id="banner">
  <div class="inner split">
    <section>
      <h2>Remove friends:</h2>
      <?php $query = "SELECT friend from friends where user ='".$_SESSION["username"]."';";
      if($result = $mysqli->query($query))
      {
        $array;
        while ($row = $result->fetch_array(MYSQLI_NUM)){
            ?><h3><?php echo $row[0]?></h3>
            <form action="removeFriend.php" method ="post">
              <input type=hidden name="friend" value="<?php echo $row[0]?>">
            <input type="submit"></form
            <p><?php
        }}
        ?>
    </section>
    <section>
      <h2>Add friends to circles:</h2>
    </section>
</section>
</body>
</html>
<?php }
else{echo "Error: You are not logged in. Redirecting...";
  header("refresh:3;index.php");}
  ?>
