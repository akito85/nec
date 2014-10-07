<nav class="navbar navbar-default" role="navigation">
  <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="collapsed">
      <ul class="nav navbar-nav">
        <li <?php if ($_REQUEST['id'] == "home"){echo "class='active'";} ?>><a href="index.php?id=home">Home</a></li>
        <li <?php if ($_REQUEST['id'] == "royalfamily"){echo "class='active'";} ?>><a href="index.php?id=royalfamily">The Royal Family</a></li>
        <li <?php if ($_REQUEST['id'] == "history"){echo "class='active'";} ?>><a href="index.php?id=history">History</a></li>
        <li <?php if ($_REQUEST['id'] == "collection"){echo "class='active'";} ?>><a href="index.php?id=collection">Collection</a></li>
        <li <?php if ($_REQUEST['id'] == "royalresidence"){echo "class='active'";} ?>><a href="index.php?id=royalresidence">The Royal Residence</a></li>
        <li <?php if ($_REQUEST['id'] == "events"){echo "class='active'";} ?>><a href="index.php?id=events">Events & Ceremonies</a></li>
        <li <?php if ($_REQUEST['id'] == "images"){echo "class='active'";} ?>><a href="index.php?id=images">Images</a></li>
        <li <?php if ($_REQUEST['id'] == "contact"){echo "class='active'";} ?>><a href="index.php?id=contact">Contact Us</a></li>
      </ul>
   
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
