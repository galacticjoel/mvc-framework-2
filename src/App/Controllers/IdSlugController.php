<?php

namespace App\Controllers;

class IdSlugController
{
    public function index($id, $slug)
    {
	
	$id1 = $id;
	$slug1 = $slug;
        require_once ('../views/id_slug_index.php');
    }
}