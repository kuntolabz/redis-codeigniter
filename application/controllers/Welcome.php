<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//https://www.youtube.com/watch?v=dKhFzaXZ6Uc&ab_channel=ReplayZone
class Welcome extends CI_Controller {	
	public function index()
	{
		
		//$data = $this->db->select('*')->from('tbl_konten')->order_by('id_konten','asc')->get()->result();		

		$this->load->library('redis');		
		$client = new Predis\Client();
		
		// $datax = [];
		// foreach ($data as $key => $value) {	
		// 	echo $value->id_konten.'<hr>';
		// 	// $datax[$value->id_konten] = $value;		
		// 	$client->set($value->id_konten,json_encode($value));
		// }

		//bikin data
		 $client->set('nama_key',json_encode(['a'=>['d'=>2],'b'=>2,'c'=>3]));

		// echo "<pre>";
		// print_r(json_encode($datax));
		// $client->set('artikel',json_encode($datax));
		// $value = $client->mset($datax);


		//ambil 1 data redis		
		// $value = $client->get('artikel');
		// $a = json_decode($value);
		// echo "<pre>";
		// print_r($a);

		//ambil beberapa data
		// $arrKeys = array(100,10,1000);
		// $value = $client->mget($arrKeys);
		// echo "<pre>";
		// print_r($value);

		//update redis
		// $client->set(100,'nilai');
		// echo $client->get('100');

		
		//delete redis
		// $client->del(100);


		// cek
		// $a = $client->keys('*');
		// echo "<pre>";
		// sort($a);
		// print_r($a);





	}
}
