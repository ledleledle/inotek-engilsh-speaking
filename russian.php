<?php
 session_start();
 include 'connect.php';

$idusr = $_SESSION['userid'];
$diff = $_SESSION['kesulitan'];
$tglan =  date('d M Y');
echo $diff;
//error attemps 7x
//wkwkwk buat looping insert sql
for ($i=0; $i < 10; $i++) { 
  if($i % 2 == 1){
  	$idkata = $_SESSION['idsoal'.$i];
  	$jwban = $_SESSION['jwb'.$i];
  	$nilai = $_SESSION['nilai'.$i];
  	//$soal = $_SESSION['soal'.$i];
    //$kemiripan.$i=cek_kemiripan($soal, $jwban);
    //echo "<pre>".$idkata."</pre>";
    //echo "<pre>".$jwban."</pre>";
    //echo "<pre>".$nilai."</pre>";
    //echo "<pre>".$kemiripan.$i."</pre>";
    mysqli_query($conn, "INSERT INTO log_user (id_user, tgl, id_kata, input, nilai, dif) VALUES ('$idusr', '$tglan', '$idkata', '$jwban', '$nilai', '$diff')");
    //unset($idkata);
    //unset($jwban);
    //unset($soal);
    //unset($nilai);
  }
}
unset($_SESSION['kesulitan'],$_SESSION['idsoal1'],$_SESSION['idsoal3'],$_SESSION['idsoal5'],$_SESSION['idsoal7'],$_SESSION['idsoal9'],$_SESSION['jwb1'],$_SESSION['jwb3'],$_SESSION['jwb5'],$_SESSION['jwb7'],$_SESSION['jwb9'],$_SESSION['nilai1'],$_SESSION['nilai3'],$_SESSION['nilai5'],$_SESSION['nilai7'],$_SESSION['nilai9'],$_SESSION['soal1'],$_SESSION['soal3'],$_SESSION['soal5'],$_SESSION['soal7'],$_SESSION['soal9']);

?>
<!--
<script type="text/javascript">
window.history.go(-1);
</script> -->