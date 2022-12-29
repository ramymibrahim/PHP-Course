<?php
$time = (int) floor(microtime(true) * 1000);

if ($_FILES) {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $fileName = $time . $_FILES['image']['name'];
        $ext_arr = explode('.', $_FILES['image']['name']);
        $fileName = $time . (count($ext_arr) > 0 ? '.' . $ext_arr[count($ext_arr) - 1] : '');
        move_uploaded_file($_FILES['image']['tmp_name'], './uploads/' . $fileName);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" />
        <button>Upload </button>
    </form>
</body>

</html>