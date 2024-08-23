<?php

class Blog_model extends CI_Model {
    function bind_value($val1, $val2) {
        $result = $val1.$val2;
        return $result;
    }

}
?>