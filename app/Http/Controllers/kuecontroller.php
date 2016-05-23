<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\kue;
use App\pesan;
use App\detail;
use App\ikue;
use Input;

class kuecontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{
		$data = ikue::all();
		dd($data);
		// return view('home')->with('data', $data);
	}
	public function daftarkue()
	{
		$data = ikue::orderBy('id','desc')->get();
		return view('pesan/daftarkue', ['data'=>$data]);
	}
	public function data()
	{

		$pesan = pesan::orderBy('id','desc')->get();
		return view ('pesan/data',['pesan'=>$pesan]);
	}
	public function detail($id)
	{
		$pesan = pesan::find($id);
		return view ('pesan/detail',['pesan'=>$pesan]);
	}
	public function detailkue($id)
	{
		$data = ikue::find($id);
		return view('pesan/detailkue', ['data'=>$data]);
	}
	public function edit()
	{
		return view ('edit');
	}
	public function masukkan()
	{
		return view ('pesan/masukkan');
	}
	public function pesan()
	{
		$kue = kue::all();
		return view ('pesan/pesan',['kue'=>$kue]);
	}
	public function theme()
	{
		$data = ikue::all();
		return view ('pesan/theme',['data'=>$data]);
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}
	
	public function simpan(Request $request)
	{
		// $this->load->library('masukkan');
		// $nmfile = "file__".time();
		// $config['upload_path'] = './gambar/';
		// $config['allowed_types'] = 'gif|jgp|png|jpeg|bmp';
		// $config['max_size'] = '2048';
		// $config['file_name'] = $nmfile;

		// $this->upload->initialize($config);

		// if($_FILES['gambar']['name'])
		// {
		// 	if($this->upload->do_upload('gambar'))
		// 	{
		// 		$gbr = $this->upload->data();
		// 		$this->db->insert('pesan', array(
		// 			'img' =>$gbr['file_name'],
		// 			'pmsn' =>$this->input->post('pmsn'),
		// 			'alamat' =>$this->input->post('alamat'),
		// 			'no_telp' =>$this->input->post('no_telp'),
		// 			'jmlh' =>$this->input->post('jmlh'),
		// 			'ket' =>$this->input->post('ket')
		// 			));
		// 		redirect(base_url('pesan'));
		// 	} redirect(base_url('pesan'));
		// }

		$pesan = new pesan;
		$pesan->pmsn = Input::get('pmsn');
		$pesan->alamat = Input::get('alamat');
		$pesan->no_tlp = Input::get('no_tlp');
		$pesan->jmlh = Input::get('jmlh');
		$pesan->ciri_kue = Input::get('ciri_kue');
		$foto = Input::file('img');
		$ext = $foto->getClientOriginalExtension();
		$image_name = round(microtime(true)).'.'.$ext;
		$foto->move('material/images',$image_name);
		
		$pesan->img = $image_name;
		$pesan->ket = Input::get('ket');
		$pesan->status = 'ditunda';	
		$pesan->save();

		$request->session()->flash('message', 'Pemesanan Sukses!');
		return redirect('pesan#');
	}

}