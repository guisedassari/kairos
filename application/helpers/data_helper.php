<?php
function inverteData($data) {
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}

function dataBanco($data) {
    $data = implode("-",array_reverse(explode("/",$data)));
    return $data;
}