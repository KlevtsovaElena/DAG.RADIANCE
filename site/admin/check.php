<?php 

if (isset($_COOKIE['admin']) && (($_COOKIE['admin']) !== "") && (($_COOKIE['admin']) !== null)) {
    $post = array('token' => $_COOKIE['admin']);
    $headers = stream_context_create(
        array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => http_build_query($post),
            )
        )
    );
    
    $check = file_get_contents('http://nginx/authadmin/check/index.php', false, $headers);
    
    $data = json_decode($check, true);

} else {
    $data = array('success' => false);
}

return $data;

?>