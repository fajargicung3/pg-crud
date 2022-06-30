<?php 
include_once "include/header.php";


//$query = "SELECT * FROM public.mybooks";
//$result = pg_query($conn, $query);
 $getUrl = $_SERVER['REQUEST_URI'];
 $url = explode('/', $getUrl);
 if ($url[2] == '' || $url[2] == 'index.php') {
     $mybooks = getAll('mybooks');
 }
?>
  <div class="container my-4">
    <h3>CRUD | POSTGRESQL</h3>
    <div class="row custom-alert d-none">
        <div class="col">
        </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card-shadow">
          <div class="card">
          <div class="card-body">
          <a href="create.php" class="btn btn-primary">ADD</a>
          <table class="table">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">Judul</th>
                  <th scope="col">pengarang</th>
                  <th scope="col">aksi</th> 
                </tr>
            </thead>
            <tbody>
              <?php foreach ($mybooks as $key => $mybook) : ?>
                <tr>
                  <th scope="row"><?= $key + 1 ?></th>
                  <td><?= $mybook['judul'] ?></td>
                  <td><?= $mybook['pengarang'] ?></td>
                  <td>
                    <a href="update.php?id=<?= $mybook['id'] ?>" class="btn btn-warning" <i class="bi bi-pencil"></i>Edit</a>
                    <a href="delete.php?id=<?= $mybook['id'] ?>" class="btn btn-danger" onclick="return confirm('data akan terhapus')" <i class="bi bi-trash3"></i>Delete</a>
                  </td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>


          </div>     
        </div>
      </div>
    </div>

  </div>
<?php 
require 'include/footer.php';
?>
