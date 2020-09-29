<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsuarioResource;
use App\Http\Resources\ErrorResource;
use Illuminate\Http\Request;
use App\Repositories\Operaciones;
use Session;
use Carbon\Carbon;


class AdministradorController extends Controller
{
    protected $operacion;

    public function __construct(Operaciones $operacion)
    {
        $this->operacion = $operacion;
    }

    public function Login()
    {
        if (session()->exists('autenticacion')) {
            return view('map');
        } else {
            return view('login');
        }
    }
    public function Logeo(Request $request)
    {
        /*$response = $this->operacion->Login([
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode([
                'username' => $request->input('username'),
                'password' => $request->input('password')
            ]),
            'http_errors' => false
        ]);

        if ($response->statusCode == 200 || $response->statusCode == 201) {
            $usuario = json_decode(json_encode(UsuarioResource::make($response)->resolve()), true);
        } else {
            $error = json_decode(json_encode(ErrorResource::make($response)->resolve()), true);
            if (isset($error->mensaje)) {
                return back()->with('status', $error->mensaje);
            } else {
                return back()->with('status', 'Usuario incorrecto');
            }
        }
        session(['autenticacion' => $usuario]);
        session(['Logeado' => json_decode(json_encode($response), true)]);

        return redirect()->route('Mapa');*/
        
        /*$response = $this->operacion->Login([
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode([
                'username' => $request->input('username'),
                'password' => $request->input('password')
            ]),
            'http_errors' => false
        ]);

       
        if ($response->statusCode == 200 || $response->statusCode == 201) {
            $usuario = json_decode(json_encode(UsuarioResource::make($response)->resolve()));
        } else {
            $error = json_decode(json_encode(ErrorResource::make($response)->resolve()), true);
            if (isset($error->mensaje)) {
                return back()->with('status', $error->mensaje);
            } else {
                return back()->with('status', 'Usuario incorrecto');
            }
        }

        session(['autenticacion' => $usuario]);

        session(['Logeado' => json_decode(json_encode($response), true)]);

        return redirect()->route('Mapa');*/
        
        $response = $this->operacion->Login([
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode([
                'username' => $request->input('username'),
                'password' => $request->input('password')
            ]),
            'http_errors' => false
        ]);

       
        if ($response->statusCode == 200 || $response->statusCode == 201) {
            if ($response->info_user->type_id != 5) {
            $usuario = json_decode(json_encode(UsuarioResource::make($response)->resolve()));
            } else {
                return back()->with('status', 'No tiene acceso');
            }
        } else {
            $error = json_decode(json_encode(ErrorResource::make($response)->resolve()), true);
            if (isset($error->mensaje)) {
                return back()->with('status', $error->mensaje);
            } else {
                return back()->with('status', 'Usuario incorrecto');
            }
        }

        session(['autenticacion' => $usuario]);

        session(['Logeado' => json_decode(json_encode($response), true)]);

        return redirect()->route('Mapa');
    }
    public function Logout()
    {
        if (session()->exists('autenticacion')) {
            Session::forget('autenticacion');
            return redirect()->route('Login');
        } else {
            return redirect()->route('Login');
        }
    }
    public function Mapa()
    {
        if (session()->exists('autenticacion')) {
            return view('map');
        } else {
            return redirect()->route('Login');
        }
    }
    public function Module()
    {
        if (session()->exists('autenticacion')) {
            return view('modulesArea');
        } else {
            return redirect()->route('Login');
        }
    }
    public function Users()
    {
        if (session()->exists('autenticacion')) {
            $list = $this->operacion->Users();
            return view('userList', compact('list'));
        } else {
            return redirect()->route('Login');
        }
    }
    // public function addUser()
    // {
    //     if(session()->exists('autenticacion')){
    //         return view('addUser');
    //     }else{
    //         return redirect()->route('Login');
    //     }
    // }
    // public function addUsers()
    // {
    //     return redirect()->route('users');
    // }
    public function editUser($id)
    {
         $user = $this->operacion->getUser($id);
         return view('editUser', compact('user'));
    }
    
    public function editUsers(Request $request){
        $this->operacion->editUsers(
            [
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode([
                    'code_pers' => $request->input('code_pers'),
                    'name_pers' => $request->input('name_pers'),
                    'patname_pers' => $request->input('patname_pers'),
                    'matname_pers' => $request->input('matname_pers'),
                    'id_pers' => $request->input('id_pers'),
                    'phone_pers' => $request->input('phone_pers'),
                    'password_user' => $request->input('password_user'),
                ])
            ],
            $request->input('id')
        );
        return redirect()->route('users');

    }
    public function deleteUsers($id){
        if (session()->exists('autenticacion')) {
            $this->operacion->deleteUsers($id);
            return redirect()->route('users');
        }else{
            return redirect()->route('Login');
        }
    }
   
    
    public function excel(Request $request)
    {
        date_default_timezone_set('America/Lima');
        $inicio = $request->input('inicio');
        $fin = $request->input('fin');
        $nombre = "Excel_" . Carbon::now()->format('d-m-Y') . ".xlsx";
        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ];
        $response = $this->operacion->excel($inicio, $fin);

        $response2 = $this->operacion->down($response->message);

        $decoded = base64_decode($response2->message);

        $fileNew = public_path() . "/excelito/" . $nombre;

        file_put_contents($fileNew, $decoded);

        return response()->download($fileNew, $nombre, $headers)->deleteFileAfterSend();
    }
    
      public function descargarExcel($opcion, $nombreExcel){

        
        $nuevo_nombre = "";
        $headers = [];
        
       
      
            $headers = [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            ];
            $nuevo_nombre = $nombreExcel;
        
      
        $response = $this->operacion->descargarExcel($opcion, $nuevo_nombre);
  
        if($response->type == 'alert')
        {
            return back()->with('alert', "Excel no encontrado");
        }
        
        $decoded = base64_decode($response->message);
        $fileNew = public_path()."/excel/".$nuevo_nombre;
        file_put_contents($fileNew, $decoded);
        
        return response()->download($fileNew, $nuevo_nombre, $headers)->deleteFileAfterSend();
    }
}
