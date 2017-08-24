/*

  SOCIAP ALPHA REST API
  Data Fetch And List Testings (...)

*/

<?php
    $method = $_SERVER['REQUEST_METHOD'];
    $request = explode('/' trim($SERVER['PATH_INFO'], '/'));
    $input = json_decode(file_get_contents('php://input'), true);

    $link = mysqli_connect('localhost', 'root', '', 'sociap');
    mysqli_set_charset($link, 'utf8');

    $table = preg_replace('/[^a-z0-9_]+/i', '', array_shift($request));
    $key = array_shift($request)+0;

    switch ($method) {
      case 'GET':
        # code...
        break;
      case 'PUT':
        # code...
        break;
      case 'POST':
        # code...
        break;
      case 'DELETE':
        # code...
        break;


      default:
        # code...
        break;
    }
?>
