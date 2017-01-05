<?php
$title="peilun";

?>

<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?=$title ?></title>    
    </head>

    <body>
        <form action="/" method="post">
            
        <h2>名稱 : <input name="name" placeholder="請輸入你的名稱" value="<?= $_POST['name']?>"></input></h2>
        <h2>留言 : <input name="content" placeholder="請輸入留言內容" value="<?= $_POST['content']?>" ></input></h2>
        <button>送出</button>

     
        </form>   
    </body>

</html>
