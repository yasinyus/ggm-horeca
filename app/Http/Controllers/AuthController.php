<?php
  
namespace App\Http\Controllers;
  
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
// use Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('home.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccesss('You have Successfully loggedin');
        }
  
        return redirect('/masuk')->with('error', 'Email atau Password Salah');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required|min:3|string',
            'email' => 'required|email|unique:users',
            // 'no_telp' => 'required|min:8|',
            'password' => 'required|min:6|string|regex:/[a-z]/|regex:/[0-9]/',
            'konfirmasi' => 'required_without_all',
        ]);
           
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'roles' => "BUYERS",
            'password' => FacadesHash::make($request->password),
            'konfirmasi' => $request->konfirmasi,
        ]);
         
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccesss('You have Successfully loggedin');
        }
  
        return redirect('/masuk')->with('error', 'Email atau Password Salah');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('dashboard');
    //     }
  
    //     return redirect("login")->withSuccess('Opps! You do not have access');
    // }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => FacadesHash::make($data['password'])
      ]);
    }

    public function aksilengkapi(Request $request, User $user)
    {
        $this->validate($request, [
            'jk' => 'required',
            'tgl_lahir' => 'required|date|before:-17 years',
            'kota' => 'required',
            'merek' => 'required',
            'pekerjaan' => 'required',
            'hoby' => 'required',
        ]);
        $user = User::findOrFail(auth()->user()->id);
        $user->update([
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'kota' => $request->kota,
            'merek' => $request->merek,
            'pekerjaan' => $request->pekerjaan,
            'hoby' => $request->hoby,
        ]);
        

        if ($user) {
            //redirect dengan pesan sukses
            return redirect()->route('home')->with(['successs' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('lengkapi')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        FacadesSession::flush();
        Auth::logout();
  
        return Redirect('/masuk');
    }


    public function editUser(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'no_telp' => 'required',
        ]);

        $user = User::findOrFail(auth()->user()->id);
        $user->update([
            'name' => $request->name,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('home')->with(['successs' => 'Data Berhasil Diupdate!']);
    }

    

    public function updateAvatar(Request $request, User $user)
    {
        $this->validate($request, [
            'avatar' => 'file|mimes:jpg,jpeg,png,gif|max:5024',
        ]);

        $avatar = time().'avatar.'.$request->avatar->extension();  
        $request->avatar->move(public_path('images'), $avatar);

        $user = User::findOrFail(auth()->user()->id);
        // dd($user->id);
        $user->update([
            'avatar' => asset('images/'.$avatar),
        ]);
    }

    public function resetPass(Request $request, User $user)
    {
        $this->validate($request, [
            'password' => 'required',
        ]);
        $user = User::findOrFail(auth()->user()->id);
        // dd($user->id);
        $user->update([
            'password' => FacadesHash::make($request->password)
        ]);

        return redirect()->route('home')->with(['success' => 'Password Berhasil dirubah!']);
    }
}