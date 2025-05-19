<?php
//ini untuk fungsi select tabel
include "koneksi.php";
function select($query)
{
  global $db;

  $result = mysqli_query($db, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function create_absen($post)
{
  global $db;

  $nama    = isset($post['nama']) ? strip_tags($post['nama']) : null;
  $kelas   = isset($post['kelas']) ? strip_tags($post['kelas']) : null;
  $jurusan = isset($post['Jurusan']) ? strip_tags($post['Jurusan']) : null;
  $absen   = isset($post['kehadiran']) ? strip_tags($post['kehadiran']) : null;

  // Jangan isi id kalau AUTO_INCREMENT
  $query = "INSERT INTO absensi (nama, kelas, jurusan, kehadiran)
            VALUES ('$nama', '$kelas', '$jurusan', '$absen')";

  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function update_absen($post)
{
    global $db;

    $id      = isset($post['id']) ? (int)$post['id'] : 0;
    $nama    = isset($post['nama']) ? mysqli_real_escape_string($db, strip_tags($post['nama'])) : '';
    $kelas   = isset($post['kelas']) ? mysqli_real_escape_string($db, strip_tags($post['kelas'])) : '';
    $jurusan = isset($post['Jurusan']) ? mysqli_real_escape_string($db, strip_tags($post['Jurusan'])) : '';
    $absen   = isset($post['kehadiran']) ? mysqli_real_escape_string($db, strip_tags($post['kehadiran'])) : '';

    if ($id <= 0) {
        return 0; // ID tidak valid
    }

    $query = "UPDATE absensi SET 
                nama = '$nama',
                kelas = '$kelas',
                jurusan = '$jurusan',
                kehadiran = '$absen'
              WHERE id = $id";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function delete_absensi($id)
{
  global $db;

  //query delete data
  $query = "DELETE FROM absensi WHERE id = '$id' ";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
