<?php 

function getAll($tbname)
{
  global $conn;
  $query = "SELECT * FROM " . $tbname;
  $result = pg_query($conn, $query);
  if(!$result){
    echo "error when books data!";
    exit;
  }
  while($row = pg_fetch_assoc($result)){
    $results[] = $row;
  }
  return $results;
}

function getById($id){
  global $conn;
  $query = "SELECT * FROM mybooks where id = " . $id;
  $result = pg_query($conn,$query);
  if (!$result) {
    echo "error when books data!";
  }
  while($row = pg_fetch_assoc($result)){
    $results[] = $row; 
  }
  return $results[0];
}
function insert($data){
  global $conn;
  // $id = $data['id'];
  $judul = $data['judul'];
  $pengarang = $data['pengarang'];

  $query = "INSERT INTO mybooks (judul,pengarang) VALUES ('$judul','$pengarang')";
  $insert = pg_query($conn,$query);
  return pg_affected_rows($insert);
}
function update($data){
  global $conn;
  $id = $data['id'];
  $judul = $data['judul'];
  $pengarang = $data['pengarang'];
  
  $query = "UPDATE mybooks SET id= '$id',judul= '$judul',pengarang= '$pengarang' WHERE id = $id" ;
  $insert = pg_query($conn, $query);
  return pg_affected_rows($insert);
}
function delete($id){
  global $conn;
  $query = "DELETE FROM mybooks WHERE id =" . $id;
  $delete = pg_query($conn, $query);

  return pg_affected_rows($delete);
}
?>
