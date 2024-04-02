<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::with('level')->get();
        return view('user',['data' => $user]);
    }

    public function index(){
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome'],
        ];

        $page = (object)[
            'title' => 'Daftar user yang terdaftar dalam sistem'
        ];

        $activeMenu = 'user';

        return view('user.index',['breadcrumb' => $breadcrumb, 'page' => $page,'activeMenu'=> $activeMenu]);
    }
    // Ambil data user dalam bentuk json untuk datatables
public function list(Request $request)
{
$users = UserModel::select('user_id', 'username', 'nama', 'level_id')
->with('level');
return DataTables::of($users)
->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
->addColumn('aksi', function ($user) { // menambahkan kolom aksi
$btn = '<a href="'.url('/user/' . $user->user_id).'" class="btn btninfo btn-sm">Detail</a> ';
$btn .= '<a href="'.url('/user/' . $user->user_id . '/edit').'" 
class="btn btn-warning btn-sm">Edit</a> ';
$btn .= '<form class="d-inline-block" method="POST" action="'. 
url('/user/'.$user->user_id).'">'
. csrf_field() . method_field('DELETE') . 
'<button type="submit" class="btn btn-danger btn-sm" 
onclick="return confirm(\'Apakah Anda yakit menghapus data 
ini?\');">Hapus</button></form>'; 
return $btn;
})
->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
->make(true);
}
        //     public function tambah()
//      {
//          return view('user_tambah');
//         $user = UserModel::create([
//             'username' => 'manager11',
//             'nama' => 'Manager11',
//             'password' => Hash::make('12345'),
//              'level_id' => 2,
//              ],
//          );
//     }
//     public function tambah_simpan(Request $request){
//         UserModel::create([
//             'username' => $request->username,
//             'nama' => $request->nama,
//             'password' => Hash::make($request->password),
//             'level_id' => $request->level_id
//         ]);
//         return redirect('/user');
//     }
    
//     public function ubah($id){
//         $user = UserModel::find($id);
//         return view('user_ubah',['data' => $user]);
//     }

//     public function ubah_simpan($id,Request $request){
//         $user = UserModel::find($id);
    
//     }
// }
//         $user->username = $request->username;
//         $user->nama = $request->nama;
//         $user->level_id = $request->level_id;

//         $user->save();
//         return redirect('/user');
//     }
// ;
//     public function hapus($id)
//     {
//         $user = UserModel::find($id);
//         $user->delete();

//         return redirect('/user')

        // $user->username = 'manager12';

        //$user->save();
       
        // $user->wasChanged();//true
        // $user->wasChanged('username');//true
        // $user->wasChanged(['username','level_id']);//true
        // $user->wasChanged('nama');//flase
        // dd($user->wasChanged(['nama','username']));//true

        //$user = UserModel::create([
        //    'username' => 'manager55',
        //    'nama' => 'Manager55',
        //    'password' => Hash::make('12345'),
        //    'level_id' => 2,
        //]);
        
        //$user->username = 'manager56';

        //$user->isDirty();//true
        //$user->isDirty('username');//true
        //$user->isDirty('nama');//false
        //$user->isDirty(['nama','username']);//true

        //$user->isClean();//flase
        //$user->isClean('username');//flase
        //$user->isClean('nama');//true
        //$user->isClean(['nama','username']);//flase

        //$user->save();

        //$user->isDirty();//false
        //$user->isClean();//true
        //dd($user->isDirty());

    //    $user = UserModel::firstOrNew(
    //    [
    //       'username' => 'manager 33',
    //    'nama' => 'Manager Tiga Tiga',
    //    'password'=>Hash::make('12345'),
    //    'level_id'=>2
    //    ],
    //);
        //$user->save();
        
        //return view('user',['data' => $user]);

        //$user = UserModel::firstOrNew(
        //    [
        //        'username' => 'manager',
        //        'nama' => 'Manager',
        //    ],
        //);
        
        // $user =UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua ',
        //         'password'=>Hash::make('12345'),
        //         'level_id' =>2
        //     ],
        // );

        //[
        //    'username' => 'manager',
        //    'nama' => 'Manager',
        //]
        //);
        //return view('user',['data' => $user]);

        //$user = UserModel::where('level_id',2)->count();
        //dd($user);
        //return view('user',['data' => $user]);
        
        //$user = UserModel::where('username','manager9')->firstOrFail();
        //return view('user',['data' => $user]);

        //$user = UserModel::findOrFail(1);
        //return view('user',['data' => $user]);

        //$user = UserModel::findOr(20,['username','nama'],function() {
        //    abort(404);
        //    });
        //return view('user',['data' => $user]);

        //$user = UserModel::firstWhere('level_id',1);
        //return view('user',['data' => $user]);
        
        //$data = [
         //        'level_id' => 2,
         //        'username' => 'manager_dua',
         //        'nama' => 'manager 2' ,
         //        'password' => Hash::make('12345'),
                
         //   ];
         // $data = [
         //       'level_id' => 2,
         //       'username' => 'manager_tiga',
         //       'nama' => 'manager 3' ,
         //       'password' => Hash::make('12345'),
               
         //   ];
         //    UserModel::create($data);

         //    $user = UserModel::all();
         //    return view('user',['data' => $user]);

        //tambah data user dengan Eloquent Model
        //$data =[
        //    'nama' => 'Pelanggan Pertama',
        //];
        //UserModel::where('username','customer-1')->update($data);   
        
        //coba akses model UserModel
        //$user = UserModel::all(); // ambil semua data dari tabel m_user
        //return view('user',['data' =>$user]);

        //tambah data user dengan eloquent model
        //$data = [
        //     'username' => 'customer-1',
        //     'nama' => 'pelanggan' ,
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        //];
        //UserModel::insert($data); //tambahkan data ke tabel m_user

