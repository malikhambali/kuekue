<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\data;
use App\admin;
use App\pesan;
use App\ikue;
use App\User;
use App\kue;
use DB;
use Input;

class akuecontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(){
		$this->middleware('auth');
	}
	public function index()
	{
		
	}
	public function mulai()
	{
		return view('admin/mulai');
	}
	public function daftarkuea()
	{
		$data = ikue::all();
		return view('admin/daftarkue', ['data'=>$data]);
	}
	public function adminh()
	{
		$pesan = pesan::orderBy('id','desc')->paginate(5);
		return view('admin/adminh', ['pesan'=>$pesan]);
	}
	public function laporan()
	{
		$pesan = pesan::all();
		return view('admin/laporan', ['pesan'=>$pesan]);
	}
	public function edit($id)
	{
		$admin = user::find($id);
		return view('admin/edit', ['admin'=>$admin]);
	}
	public function cirik()
	{
		$jenis = kue::all();
		return view('admin/cirik', ['jenis'=>$jenis]);
	}
	public function dataa()
	{
		$admin = user::orderBy('id','desc')->get();
		return view('admin/dataa', ['admin'=>$admin]);
	}
	public function masuk()
	{
		return view('admin/masuk');
	}
	public function inputk()
	{
		return view('admin/inputk');
	}
	public function inputj()
	{
		$kue = kue::all();
		return view('admin/inputj', ['kue'=>$kue]);
	}
	public function input()
	{
		return view('admin/input');
	}
	public function lihat($id)
	{
		$pesan = pesan::find($id);
		return view('admin/lihat', ['pesan'=>$pesan]);
	}
	public function cetak($id)
	{
		$pesan = pesan::find($id);
		return view('admin/print', ['pesan'=>$pesan]);
	}
	public function editj($id)
	{
		$data = ikue::find($id);
		return view('admin/editj', ['data'=>$data]);
	}
	public function editk($id)
	{
		$pesan = pesan::find($id);
		return view('admin/editk', ['pesan'=>$pesan]);
	}
	
	public function update(Request $r)
	{
		DB::table('pesans')
            ->where('id', $r->input('id'))
            ->update(['status'=>$r->input('status')]);
    	
    	return redirect('adminh');
    }
    public function updatekue(Request $r)
    {
    	DB::table('ikues')
    		->where('id', $r->input('id'))
    		->update(['status'=>$r->input('status')]);
    	return redirect('daftarkuea'); 
    }
    public function updatea()
    { 
    	$admin = User::find(Input::get('id'));
    	$admin->nama_lengkap = Input::get('nama_lengkap');
    	$admin->no_telepon = Input::get('no_telepon');
    	$admin->username = Input::get('username');
    	$admin->save();
    	return redirect('dataa');
    }
    public function deletek($id)
	{
		DB::table('ikues')->delete($id);
			return redirect('daftarkuea');
	}
	public function deletea($id)
	{
		DB::table('users')->delete($id);
		return redirect('dataa');
	}
	public function deletekue($id)
	{
		DB::table('kues')->delete($id);
		return redirect('inputj');
	}
	


	public function delete($id)
	{
		DB::table('pesans')->delete($id);
			return redirect('adminh');
	}
	public function jenis_kue()
	{
		$jenis = new kue;
		$jenis->kue_nama = Input::get('kue_nama');
		$jenis->save();
		return redirect('inputj#');

	}
	public function ikue()
	{
		$input = new ikue;
		$input->nama_kue = Input::get('nama_kue');
		$input->harga = Input::get('harga');
		$input->ket = Input::get('ket');
		$foto = Input::file('img');
		$ext = $foto->getClientOriginalExtension();
		$image_name = round(microtime(true)).'.'.$ext;
		$foto->move('metro/images',$image_name);
		
		$input->img = $image_name;
		$input->status = 'tersedia';
		$input->save();
		return redirect('inputk#');
		return view('inputk');
	}
	public function tambah_admin(Request $request)
	{
		$admin = new user;
		$admin->nama_lengkap = Input::get('nama_lengkap');
		$admin->no_telepon = Input::get('no_telepon');
		$admin->username = Input::get('username');
		$admin->password = bcrypt(Input::get('password'));
		$admin->save();

		$request->session()->flash('message', 'Pemesanan Sukses!');
		return redirect('input#');


	}



}
