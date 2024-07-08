<?php

namespace App\Controllers;

class IdController
{
    public function index($id)
    {
	$id1 = $id;
        require_once ('../views/id_index.php');
    }
}