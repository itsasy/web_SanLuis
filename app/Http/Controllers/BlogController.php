<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Operaciones;
use Carbon\Carbon;

class BlogController extends Controller
{
    protected $operacion;

    public function __construct(Operaciones $operacion)
    {
        $this->operacion = $operacion;
    }

    public function blog()
    {
        if (session()->exists('autenticacion')) {
        $Home = $this->operacion->home();
        $Noticias = $this->operacion->news();
        $Eventos = $this->operacion->events();
        $eventsPast = $this->operacion->eventsPast();
        return view('blog', compact('Home', 'Noticias', 'Eventos', 'eventsPast'));
        } else {
            return redirect()->route('Login');
        }
    }

    /* HOME */
    public function home()
    {
        if (session()->exists('autenticacion')) {
        return view('regHome');
         } else {
            return redirect()->route('Login');
        }
    }
    public function addHome(Request $request)
    {
        $this->operacion->addHome([
            'headers' => ['Content-Type' => 'application/json'], 'body' => json_encode([
                'description' => $request->input('description'),
                'mission'     => $request->input('mission'),
                'vision'      => $request->input('vision'),
                'our_group'  => $request->input('our_group'),
                'address' => $request->input('address'),
                'ubication_maps'   => $request->input('ubication_maps'),
                'email'       => $request->input('email'),
                "phone_1"     => $request->input('phone_1'),
                "phone_2"     => $request->input('phone_2'),
                "time_start"  => $request->input('time_start'),
                "time_end"    => $request->input('time_end'),
                "url"    => $request->input('url'),
            ])
        ]);
        return redirect()->route('Blog');
    }
    public function getHome($id)
    {
        if (session()->exists('autenticacion')) {
            $nosotros = $this->operacion->getHome($id);
            return view('editHome', compact('nosotros'));
         } else {
            return redirect()->route('Login');
        }
    }
    public function editHome(Request $request)
    {
        $this->operacion->editHome(
            [
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode([
                    'description' => $request->input('description'),
                    'mission'     => $request->input('mission'),
                    'vision'      => $request->input('vision'),
                    'our_group'  => $request->input('our_group'),
                    'address' => $request->input('address'),
                    'ubication_maps'   => $request->input('ubication_maps'),
                    'email'       => $request->input('email'),
                    "phone_1"     => $request->input('phone_1'),
                    "phone_2"     => $request->input('phone_2'),
                    "time_start"  => $request->input('time_start'),
                    "time_end"    => $request->input('time_end'),
                    "url"    => $request->input('url'),
                ])
            ],
            $request->input('id')
        );
        return redirect()->route('Blog');
    }
    public function deleteHome($id)
    {
        if (session()->exists('autenticacion')) {
            $this->operacion->deleteHome($id);
            return redirect()->route('Blog');
        } else {
            return redirect()->route('Login');
        }
    }
    /* NOTICIAS */
    public function news()
    {
        if (session()->exists('autenticacion')) {
            return view('regNoticia');
        } else {
            return redirect()->route('Login');
        }
    }
    
    public function addNews(Request $request)
    {
        $nombreImg = str_replace(' ', '', (Carbon::now() . '.' . $request->file('img')->extension()));

        $this->operacion->addNews([
            'multipart' => [
                [
                    'name'     => 'image',
                    'filename' => $nombreImg,
                    'contents' => fopen($request->file('img'), 'r'),
                ],
                [
                    'name' => 'author',
                    'contents' =>  $request->input('author')
                ],
                [
                    'name' => 'title',
                    'contents' => $request->input('title')
                ],
                [
                    'name' => 'description',
                    'contents' =>   $request->input('description')
                ],
                [
                    'name' => 'source',
                    'contents' => $request->input('source')
                ],
                [
                    'name' => 'url',
                    'contents' =>  $request->input('url')
                ],
                [
                    'name' => 'date_news',
                    'contents' => $request->input('date_news')
                ],
                [
                    'name' => 'time_news',
                    'contents' => $request->input('time_news')
                ]
            ]
        ]);
        return redirect()->route('Blog');
    }
    
    public function getNews($id)
    {
        if (session()->exists('autenticacion')) {
        $noticia = $this->operacion->getNews($id);
        return view('editNew', compact('noticia')); 
        } else {
            return redirect()->route('Login');
        }
    }
    public function editNews(Request $request)
    {
        if ($request->file('img') != null) {
            $nombreImg = str_replace(' ', '', (Carbon::now() . '.' . $request->file('img')->extension()));
        }

        $this->operacion->editNews(
            [
                'multipart' => [
                    [
                        'name'     => 'image',
                        'filename' => $nombreImg,
                        'contents' => fopen($request->file('img'), 'r'),
                    ],
                    [
                        'name' => 'author',
                        'contents' =>  $request->input('author')
                    ],
                    [
                        'name' => 'title',
                        'contents' => $request->input('title')
                    ],
                    [
                        'name' => 'description',
                        'contents' =>   $request->input('description')
                    ],
                    [
                        'name' => 'source',
                        'contents' => $request->input('source')
                    ],
                    [
                        'name' => 'url',
                        'contents' =>  $request->input('url')
                    ],
                    [
                        'name' => 'date_news',
                        'contents' => $request->input('date_news')
                    ],
                    [
                        'name' => 'time_news',
                        'contents' => $request->input('time_news')
                    ]
                ]

            ],
            $request->input('id')
        );
        return redirect()->route('Blog');
    }
    public function deleteNews($id)
    {
        if (session()->exists('autenticacion')) {
            $this->operacion->deleteNews($id);
            return redirect()->route('Blog');
        } else {
            return redirect()->route('Login');
        }
    }
    /* EVENTS */
    public function events(Request $request)
    {
        if (session()->exists('autenticacion')) {
            return view('regEvento');
        } else {
            return redirect()->route('Login');
        }
    }
    public function addEvents(Request $request)
    {
        $img_1 = str_replace(' ', '', (Carbon::now() . '1.' . $request->file('img_1')->extension()));
        $img_2 = str_replace(' ', '', (Carbon::now() . '2.' . $request->file('img_2')->extension()));
        $img_3 = str_replace(' ', '', (Carbon::now() . '3.' . $request->file('img_3')->extension()));

        $this->operacion->addEvents([
            'multipart' => [
                [
                    'name'     => 'img_1',
                    'filename' => $img_1,
                    'contents' => fopen($request->file('img_1'), 'r'),
                ],
                [
                    'name'     => 'img_2',
                    'filename' => $img_2,
                    'contents' => fopen($request->file('img_2'), 'r'),
                ],
                [
                    'name'     => 'img_3',
                    'filename' => $img_3,
                    'contents' => fopen($request->file('img_3'), 'r'),
                ],
                [
                    'name' => 'name',
                    'contents' => $request->input('name')
                ],
                [
                    'name' => 'description',
                    'contents' =>   $request->input('description')
                ],
                [
                    'name' => 'date_event',
                    'contents' => $request->input('date_event')
                ],
            ]
        ]);
        return redirect()->route('Blog');
    }
    public function getEvents($id)
    {
        if (session()->exists('autenticacion')) {
            $evento = $this->operacion->getEvents($id);
            return view('editEvents', compact('evento'));
        } else {
            return redirect()->route('Login');
        }
    }
    public function editEvents(Request $request)
    {
        if ($request->file('img_1') != null) {
            $img_1 = str_replace(' ', '', (Carbon::now() . '1.' . $request->file('img_1')->extension()));
        }
        if ($request->file('img_2') != null) {
            $img_2 = str_replace(' ', '', (Carbon::now() . '2.' . $request->file('img_2')->extension()));
        }
        if ($request->file('img_3') != null) {
            $img_3 = str_replace(' ', '', (Carbon::now() . '3.' . $request->file('img_3')->extension()));
        }

        $this->operacion->editEvents(
            [
                'multipart' => [
                    [
                        'name'     => 'img_1',
                        'filename' => $img_1,
                        'contents' => fopen($request->file('img_1'), 'r'),
                    ],
                    [
                        'name'     => 'img_2',
                        'filename' => $img_2,
                        'contents' => fopen($request->file('img_2'), 'r'),
                    ],
                    [
                        'name'     => 'img_3',
                        'filename' => $img_3,
                        'contents' => fopen($request->file('img_3'), 'r'),
                    ],
                    [
                        'name' => 'state',
                        'contents' => $request->input('state')
                    ],
                    [
                        'name' => 'name',
                        'contents' => $request->input('name')
                    ],
                    [
                        'name' => 'description',
                        'contents' =>   $request->input('description')
                    ],
                    [
                        'name' => 'date_event',
                        'contents' => $request->input('date_event')
                    ],
                ]
            ],
            $request->input('id')
        );
        return redirect()->route('Blog');
    }
    public function deleteEvents($id)
    {
        if (session()->exists('autenticacion')) {
           $this->operacion->deleteEvents($id);
           return redirect()->route('Blog');
        } else {
            return redirect()->route('Login');
        }
    }
}