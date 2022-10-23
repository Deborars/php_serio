<?php



$folder = __DIR__ . "/uploads";

if (!is_dir($folder) || !file_exists($folder)) {
  mkdir($folder, 0755);
}

include_once(__DIR__ . "/form.php");


//o filezise indica o tamanho maximo de um arquivo, por exemplo.
//o postsize indica o valor máximo de todos os campos de um form
//se o arquivo tiver acima do valor permitido isso ocasionará um problema
//array(2) { ["filesize"]=> string(3) "40M" ["postsize"]=> string(3) "40M" }
// var_dump([
//   "filesize" => ini_get("upload_max_filesize"),
//   "postsize" => ini_get("post_max_size")
// ])


// var_dump([
//   filetype(__DIR__ . "/index.php"),
//   mime_content_type(__DIR__ . "/index.php")
// ]);

//aqui você verifica que foi realizada a tentativa do envio do arquivo isso seria bom se alguém 
//enviasse um arquivo que exceda o limite máximo permitido
$getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);

// if ($getPost) {
//   echo "limite permitido";
// } else {
//   echo "limite não permitido";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body style="background: #fbf8cc;">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>

</html>