
    <div class="box">
  <form enctype="multipart/form-data" action="" method="POST">
    <p>Upload a file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Feltöltés"></input>
  </form>
    </div>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "<div class='box'>The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded </div>";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>