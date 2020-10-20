<?php
if($_GET){
        $sql = "SELECT * FROM produtos where nome like '%{$_GET['busca']}%'"; /*usa o que digitei no campo busca*/
    } else {
        $sql = "SELECT * FROM produtos";
    }
?>