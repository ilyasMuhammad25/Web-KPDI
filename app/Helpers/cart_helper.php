
<?php
if (!function_exists('cart_checkin')) {
    function cart_checkin($ref_code = 'ref_code')
    {        
		$cart = new \App\Libraries\Cart();
		return $cart->checkin($ref_code);
    }
}

if (!function_exists('cart_checkout')) {
    function cart_checkout()
    {        
		$cart = new \App\Libraries\Cart();
		$cart->checkout();
    }
}

if (!function_exists('cart_ref_code')) {
    function cart_ref_code()
    {        
		$cart = new \App\Libraries\Cart();
		return $cart->ref_code();
    }
}

if (!function_exists('cart_get_item')) {
    function cart_get_item($rowid)
    {        
		$cart = new \App\Libraries\Cart();
		return $cart->getItem($rowid);
    }
}

if (!function_exists('cart_insert')) {
    function cart_insert($name, $id)
    {        
		$options = array();
		$options = get_loan_item($id);

		// if (strpos($name, 'pengembalian') !== false) {
		// 	$options = get_loan_item($id);
		// }

		$cart = new \App\Libraries\Cart();
		$cart->insert(array(
			'id'      => $id,
			'name'    => $name,
			'qty'     => 1,
			'price'   => 0,
			'options' => $options,
		), $id);

		$data = array(
			'total' 		=> $cart->total(),
			'totalItems' 	=> $cart->totalItems(),
			'contents'		=> $cart->contents(),
		);
        return $data;
    }
}

if (!function_exists('cart_remove')) {
    function cart_remove($rowid)
    {        
		$cart = new \App\Libraries\Cart();
		$cart->remove($rowid);
		return true;
    }
}

if (!function_exists('cart_destroy')) {
    function cart_destroy()
    {        
		$cart = new \App\Libraries\Cart();
		$cart->destroy();

        return true;;
    }
}

if (!function_exists('cart_contents')) {
    function cart_contents()
    {        
		$cart = new \App\Libraries\Cart();
		$data = json_decode(json_encode($cart->contents()), FALSE);
		return $data;
    }
}

if (!function_exists('cart_total')) {
    function cart_total()
    {        
		$cart = new \App\Libraries\Cart();
        return $cart->total();;;
    }
}

if (!function_exists('cart_total_items')) {
    function cart_total_items()
    {        
		$cart = new \App\Libraries\Cart();
        return $cart->totalItems();;;
    }
}

if (!function_exists('get_carts')) {
    function get_carts($cart_name = null)
    {        
		// dd($cart_name);
		$cart = new \App\Libraries\Cart();
		$cart_data = array();
		$contents = json_decode(json_encode($cart->contents()), FALSE);

		foreach($contents as $row){
			if($cart_name == $row->name){
				$cart_data[] = $row;
			}
		}

		$data = json_decode(json_encode($cart_data), FALSE);

		return $data;
    }
}

?>