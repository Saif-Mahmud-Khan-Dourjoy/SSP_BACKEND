<?php
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;



function has_file($path=null)
{
	if (file_exists(public_path($path))) {
		return $path;
	}else{
		return null;
	}
}


