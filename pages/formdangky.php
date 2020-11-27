<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="frmdangnhap" id="frmdangnhap" action="" method="post">
    Ten:<input type="text" name="ten" id="ten"><br/>
    Matkhau:<input type="text" name="pass" id="pass"><br/>
<input type="submit" name="btndangnhap" id="btndangnhap">
    </form>
    <?php
if( isset( $_POST['btndangnhap'])){
$ten = $_POST['ten'];
$matkhau = $_POST['pass'];
if( $ten == 'admin'){
    echo 'ok';
} else {
    echo 'error';
}
}
    ?>
</body>
</html>