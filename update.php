<?php 
require 'include/header.php';
if (isset($_GET['id'])) {
  $data = getById($_GET['id']);
}
if (isset($_POST['update'])) {
  var_dump($_POST);
  $update = update($_POST);
  if ($update == 1) {
    return header ('Location: index.php');
  }
}
?>
<div class="container my-4">
  <div class="row">
    <div class="col col-4 mx-auto">
    <div class="card">
      <div class="card-shadows">
        <div class="card-header">
          <h4 class="text-center">Add Books Data</h4>
        </div>
        
        <div class="card-body">
          <form action="" method="post">
          <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="form-group">
              <label for="">Judul</label>
              <input type="text" name="judul" class="form-control" value="<?= $data['judul'] ?>">
            </div>
            <div class="form-group">
              <label for="">Pengarang</label>
              <input type="text" name="pengarang" class="form-control" value="<?= $data['pengarang']?>">
            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-around">
                <a href="index.php" class="btn btn-outline-primary">Cancel</a>
                <button type="submit" class="btn btn-primary" name="update">Add</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<?php 
require 'include/footer.php';
?>