<?php
//1. POSTデータ取得→追加
$name   = $_POST["name"];
$email  = $_POST["email"];
$address = $_POST["address"];
$tel    = $_POST["tel"];
$hp   = $_POST["hp"];
$open  = $_POST["open"];
$close = $_POST["close"];
$lat    = $_POST["lat"];
$lon   = $_POST["lon"];
$memo  = $_POST["memo"];
$x = $_POST["x"];
$instagram    = $_POST["instagram"];
$facebook    = $_POST["facebook"];
$indate    = $_POST["indate"];


//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成→追加　（）の中とbindvalue
$stmt = $pdo->prepare("INSERT INTO petshop(name,email,address,tel,hp,open,close,lat,lon,memo,x,instagram,facebook,indate)VALUES(:name,:email,:address,:tel,:hp,:open,:close,:lat,:lon,:memo,:x,:instagram,:facebook,:indate())");

$stmt->bindValue(':name', $name, PDO::PARAM_STR);      
$stmt->bindValue(':email', $email, PDO::PARAM_STR);    
$stmt->bindValue(':address', $address, PDO::PARAM_STR);        
$stmt->bindValue(':tel', $tel, PDO::PARAM_INT); 
$stmt->bindValue(':hp', $hp, PDO::PARAM_STR);      
$stmt->bindValue(':open', $open, PDO::PARAM_STR);    
$stmt->bindValue(':close', $close, PDO::PARAM_STR);        
$stmt->bindValue(':lat', $lat, PDO::PARAM_INT);  
$stmt->bindValue(':lon', $lon, PDO::PARAM_INT);    
$stmt->bindValue(':memo', $memo, PDO::PARAM_STR);     
$stmt->bindValue(':x', $x, PDO::PARAM_STR);    
$stmt->bindValue(':instagram', $instagram, PDO::PARAM_STR);        
$stmt->bindValue(':facebook', $facebook, PDO::PARAM_STR); 
$stmt->bindValue(':indate', $indate, PDO::PARAM_INT);      
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("index.php");
}
?>