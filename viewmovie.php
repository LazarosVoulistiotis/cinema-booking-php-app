<?php
session_start();
//check if _SESSION["uname"] is set δλδ αν εχεις κάνει login 
if (!isset($_SESSION["uname"]))
{
	header("Location:index.php");
}
include ("view/adminmenu.php");
include ("model/Database.php");
?>
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Movies List
      </h1>
        <li class="active">Movies List</li>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
            <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="todo-list">
                 <?php 
                 $db = new Database();//creates an instance of the Database class
                 $kalov = $db->connect();
                        $qry7=mysqli_query($kalov,"select * from tbl_movie");
                        if(mysqli_num_rows($qry7))
                        {
                        while($c=mysqli_fetch_array($qry7))
                        {
                        ?>
                <li>
                  <!-- todo text -->
                  <span class="text"><?php echo $c['movie_name'];?></span><br>
                  <span class="text"><?php echo $c['release_date'];?></span><br>
                  <!-- Emphasis label -->
                  
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                 <!-- create a "delete" button for each movie -->
                    <button class="fa fa-trash-o" onclick="del(<?php echo $c['movie_id'];?>)"></button> <!--The onclick attribute calls the del() JavaScript function when the button is clicked, passing the movie_id of the current movie as an argument.-->
                  </div>
                </li>
                  <?php
                       }}
                     ?>   
            </div>
          </div>
        </div> 
      </div>
    </section>
  </div>

<script>
function del(m) //called when the delete button is clicked
    {
        if (confirm("Are you want to delete this movie") == true) //This displays a confirmation dialog to the user before proceeding with the deletion.
        {
            window.location="delmovie.php?mid="+m; //If the user confirms the deletion, this line redirects the browser to the delmovie.php page, passing the movie_id (m) as a parameter in the URL.
        } 
    }
    </script>