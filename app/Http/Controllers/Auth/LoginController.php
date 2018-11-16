<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        if (session()->exists('data')) {
            return redirect('/dashboard');
        }
        return view('user.login');
    }
    
    public function getSIAM(Request $request)
    {
        $credentials = [
            'nim' => $request->username,
            'password' => $request->password
        ];
        $auth = new AuthSIAM;
        $data = json_decode($auth->authWithSchedule($credentials)->getContent());

        if($data->msg == 'invalid.'){
            $call = [
                'message' => "Input tidak valid.",
                'nim' => ''
            ];
            return view('user.login', compact('call'));
        }
        else if($data->msg == 'usrname or passwd salah') {
            $call = [
                'message' => "NIM atau Password Salah.",
                'nim' => $request->input('username')
            ];
            return view('user.login', compact('call'));
        } else if($data->msg == 'success'){
            $anggota = Anggota::where('nim', $request->input('username'))->get();
            if (isset($anggota[0])) {
                $response = [
                    'data' => [
                        'nim' => $data->data->nim,
                        'nama' => $data->data->nama,
                        'fakultas' => $data->data->fakultas,
                        'jurusan' => $data->data->jurusan,
                        'prodi' => $data->data->prodi,
                        'jadwal' => $data->data->jadwal,
                        'jabatan' => $anggota[0]->jabatan,
                        'departemen' => $anggota[0]->departemen
                    ]
                ];
                    $request->session()->put($response);
                    return redirect('/dashboard');
            }else{
                $call = [
                    'message' => "Kamu bukan anak POROS :(",
                    'nim' => ''
                ];
                return view('user.login', compact('call'));
            }

        }
    }    
}
