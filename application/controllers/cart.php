<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function addcart () {

    	$time = time();
    	$price = 50;

    	$data = array (
    		'id' => 'sku_' . $time,
    		'qty' => $_REQUEST['copies'],
    		'price' => $price,
    		'name' => $_REQUEST['name'],
    		'type' => $_REQUEST['type'],
    		'pincode' => $_REQUEST['pincode'],
    	);

    	if($_REQUEST['type'] == 'enrollment') {
    		$data = $data + array("enroll" => $_REQUEST['enroll']);
    		$data = $data + array("mobile" => $_REQUEST['mobile']);
    	}

    	$this->cart->insert($data);
    	$items = $this->getproducts();

    	echo $items;

    }

    public function updatefromcart () {

    	$data = array(
        	'rowid' => $_REQUEST['rowid'],
        	'qty'   => $_REQUEST['qty'],
        	'name' => $_REQUEST['name'],
        	'pincode' => $_REQUEST['pincode'],
		);

		$this->cart->update_all($data);
		$items = $this->getproducts();

    	echo $items;
    }

    public function deletefromcart () {

    	$data = array(
        	'rowid' => $_REQUEST['rowid'],
        	'qty'   => 0,
		);

		$this->cart->update($data);
		$items = $this->getproducts();

    	echo $items;
    }

    public function emptycart (){
    	$this->cart->destroy();
	}

	public function getproducts () {
		$items = $this->cart->contents();
		$items = json_encode($items);
		return $items;
	}

	public function uploadenroll () {
		print_r($_FILES);
	}

	public function jsonallproducts () {
		$items = $this->cart->contents();
		$items = json_encode($items);
		echo $json;
	}

}