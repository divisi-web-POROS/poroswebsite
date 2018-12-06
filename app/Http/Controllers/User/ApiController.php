<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function getKRS(Request $request)
    {
        $credentials = [
            'nim' => $request->username,
            'password' => $request->password
        ];
        if (!isset($credentials['nim']) || !isset($credentials['password'])) {
            $response = [
                'msg' => 'Invalid.'
            ];
            return response()->json($response, 400);
        }

        $cl = new Client();

        $cr = $cl->request('GET', 'https://siam.ub.ac.id/');
        $form = $cr->selectButton('Masuk')->form();
        $cr = $cl->submit($form, array('username' => $credentials['nim'], 'password' => $credentials['password']));

        $cr = $cl->request('GET', 'https://siam.ub.ac.id/krs.php');

        $cek = $cr->filter('small.error-code')->each(function ($result) {
            return $result->text();
        });

        if (isset($cek[0])) {
            $response = [
                    'msg' => 'usrname or passwd salah'
                ];
            return response()->json($response, 200);
        } else {
            $dataDiri = $cr->filter('div[class="bio-info"] > div')->each(function ($result) {
                return $result->text();
            });
            $data = $cr->filter('tr[class="text"]')->each(function ($result) {
                return $result->text();
            });

            $krs;
            for ($i = 0; $i < sizeof($data) - 6; $i++) {
                $result = explode('        ', $data[$i], 6);
                $matkul = substr($result[2], 15);
                $sks = $result[3] + 0;
                $kelas = $result[4];
                $krs[$i] = [
                        'matkul' => $matkul,
                        'sks' => $sks,
                        'kelas' => $kelas
                    ];
            }

            $token = str_random(32);

            $response = [
                    'data' => [
                        'nim' => $dataDiri[0],
                        'nama' => $dataDiri[1],
                        'fakultas' => substr($dataDiri[2], 19),
                        'jurusan' => substr($dataDiri[3], 7),
                        'prodi' => substr($dataDiri[4], 13),
                        'krs' => $krs,
                    ],
                    'msg' => 'success'
                ];
            return response()->json($response, 200);
        }
    }
}
