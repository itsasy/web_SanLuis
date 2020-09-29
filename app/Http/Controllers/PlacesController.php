<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Operaciones;
use Carbon\Carbon;

class PlacesController extends Controller
{
    protected $operacion;

    public function __construct(Operaciones $operacion)
    {
        $this->operacion = $operacion;
    }
    //Business
    public function Places()
    {
        if (session()->exists('autenticacion')) {
            $list = $this->operacion->Places();
            return view('placesList', compact('list'));
        } else {
            return redirect()->route('Login');
        }
    }
    public function addPlace()
    {
        if (session()->exists('autenticacion')) {
            return view('addPlaces');
        } else {
            return redirect()->route('Login');
        }
    }
    public function addPlaces(Request $request)
    {
        $nombreImg = str_replace(' ', '', (Carbon::now() . '.' . $request->file('img')->extension()));

        $this->operacion->addPlaces([
            'multipart' => [
                [
                    'name' => 'name_place',
                    'contents' => $request->input('name_place')
                ],
                [
                    'name' => 'latitude_place',
                    'contents' => $request->input('latitude_place')
                ],
                [
                    'name' => 'length_place',
                    'contents' =>   $request->input('length_place')
                ],
                [
                    'name' => 'type_place',
                    'contents' =>   $request->input('type_place')
                ],
                [
                    'name' => 'RUC',
                    'contents' =>   $request->input('RUC')
                ],
                [
                    'name' => 'address_place',
                    'contents' =>  $request->input('address_place')
                ],
                [
                    'name' => 'state',
                    'contents' =>  $request->input('state')
                ],
                [
                    'name'     => 'img',
                    'filename' => $nombreImg,
                    'contents' => fopen($request->file('img'), 'r'),
                ],
                [
                    'name' => 'website',
                    'contents' =>  $request->input('website')
                ],
                
                [
                    'name' => 'ubication_maps',
                    'contents' =>  $request->input('ubication_maps')
                ]
            ]
        ]);
        return redirect()->route('places');
    }
    public function editPlace($id)
    {
        $place = $this->operacion->getPlace($id);
        if (session()->exists('autenticacion')) {
            return view('editPlaces', compact('place'));
        } else {
            return redirect()->route('Login');
        }
    }
    public function editPlaces(Request $request)
    {
        if ($request->file('img') != null) {
            $nombreImg = str_replace(' ', '', (Carbon::now() . '.' . $request->file('img')->extension()));
        }

        $this->operacion->editPlaces([
            'multipart' => [
                [
                    'name' => 'name_place',
                    'contents' => $request->input('name_place')
                ],
                [
                    'name' => 'latitude_place',
                    'contents' => $request->input('latitude_place')
                ],
                [
                    'name' => 'length_place',
                    'contents' =>   $request->input('length_place')
                ],
                [
                    'name' => 'type_place',
                    'contents' =>   $request->input('type_place')
                ],
                [
                    'name' => 'RUC',
                    'contents' =>   $request->input('RUC')
                ],
                [
                    'name' => 'address_place',
                    'contents' =>  $request->input('address_place')
                ],
                [
                    'name' => 'state',
                    'contents' =>  $request->input('state')
                ],
                [
                    'name'     => 'img',
                    'filename' => $nombreImg,
                    'contents' => fopen($request->file('img'), 'r'),
                ],
                [
                    'name' => 'website',
                    'contents' =>  $request->input('website')
                ],
                [
                    'name' => 'ubication_maps',
                    'contents' =>  $request->input('ubication_maps')
                ]
            ]
        ], $request->input('id'));
        return redirect()->route('places');
    }
    public function deletePlace($id)
    {
        if (session()->exists('autenticacion')) {
            $this->operacion->deletePlace($id);
            return redirect()->route('places');
        } else {
            return redirect()->route('Login');
        }
    }


    //Evacuation Points
    public function EvacuationPoints()
    {
        if (session()->exists('autenticacion')) {
            $list = $this->operacion->EvacuationPoints();
            return view('evacuationPointsList', compact('list'));
        } else {
            return redirect()->route('Login');
        }
    }
    public function addEvacuationPoint()
    {
        if (session()->exists('autenticacion')) {
            return view('addEvacuationPoints');
        } else {
            return redirect()->route('Login');
        }
    }
public function addEvacuationPoints(Request $request)
    {
        $nombreImg = str_replace(' ', '', (Carbon::now() . '.' . $request->file('img')->extension()));

        $this->operacion->addEvacuationPoints([

            'multipart' => [
                [
                    'name'     => 'img',
                    'filename' => $nombreImg,
                    'contents' => fopen($request->file('img'), 'r'),
                ],
                [
                    'name' => 'name_place',
                    'contents' => $request->input('name_place')
                ],
                [
                    'name' => 'latitude_place',
                    'contents' => $request->input('latitude_place')
                ],
                [
                    'name' => 'length_place',
                    'contents' =>   $request->input('length_place')
                ],
                [
                    'name' => 'address_place',
                    'contents' =>  $request->input('address_place')
                ]
            ]
        ]);

        return redirect()->route('points');
    }
    public function editEvacuationPoint($id)
    {
        $place = $this->operacion->getEvacuationPoint($id);
        return view('editEvacuationPoints', compact('place'));
    }
    public function editEvacuationPoints(Request $request)
    {
        if ($request->file('img') != null) {
            $nombreImg = str_replace(' ', '', (Carbon::now() . '.' . $request->file('img')->extension()));
        }

        $this->operacion->editEvacuationPoints([
            'multipart' => [
                [
                    'name'     => 'img',
                    'filename' => $nombreImg,
                    'contents' => fopen($request->file('img'), 'r'),
                ],
                [
                    'name' => 'name_place',
                    'contents' => $request->input('name_place')
                ],
                [
                    'name' => 'latitude_place',
                    'contents' => $request->input('latitude_place')
                ],
                [
                    'name' => 'length_place',
                    'contents' =>   $request->input('length_place')
                ],
                [
                    'name' => 'address_place',
                    'contents' =>  $request->input('address_place')
                ]
            ]
        ], $request->input('id'));

        return redirect()->route('points');
    }
    public function deleteEvacuationPoints($id)
    {
        if (session()->exists('autenticacion')) {
            $this->operacion->deleteEvacuationPoints($id);
            return redirect()->route('points');
        } else {
            return redirect()->route('Login');
        }
    }

    //Public institutions
    public function PublicInstitutions()
    {
        if (session()->exists('autenticacion')) {
            $list = $this->operacion->PublicInstitutions();
            return view('publicInstitutionsList', compact('list'));
        } else {
            return redirect()->route('Login');
        }
    }
    public function addPublicInstitution()
    {
        if (session()->exists('autenticacion')) {
            return view('addPublicInstitutions');
        } else {
            return redirect()->route('Login');
        }
    }
    public function addPublicInstitutions(Request $request)
    {
        $nombreImg = str_replace(' ', '', (Carbon::now() . '.' . $request->file('img')->extension()));

        $this->operacion->addPublicInstitutions([
            'multipart' => [
                [
                    'name' => 'name_place',
                    'contents' => $request->input('name_place')
                ],
                [
                    'name' => 'latitude_place',
                    'contents' => $request->input('latitude_place')
                ],
                [
                    'name' => 'length_place',
                    'contents' =>   $request->input('length_place')
                ],
                [
                    'name' => 'type_place',
                    'contents' =>   $request->input('type_place')
                ],
                [
                    'name' => 'address_place',
                    'contents' =>  $request->input('address_place')
                ],
                [
                    'name' => 'state',
                    'contents' =>  $request->input('state')
                ],
                [
                    'name'     => 'img',
                    'filename' => $nombreImg,
                    'contents' => fopen($request->file('img'), 'r'),
                ],
                [
                    'name' => 'website',
                    'contents' =>  $request->input('website')
                ]
            ]
        ]);
        return redirect()->route('institutes');
    }
    public function editPublicInstitution($id)
    {
        if (session()->exists('autenticacion')) {
            $place = $this->operacion->getPublicInstitution($id);
            return view('editPublicInstitutions', compact('place'));
        } else {
            return redirect()->route('Login');
        }
    }
    public function editPublicInstitutions(Request $request)
    {
        $nombreImg = str_replace(' ', '', (Carbon::now() . '.' . $request->file('img')->extension()));

        $this->operacion->editPublicInstitutions([
            'multipart' => [
                [
                    'name' => 'name_place',
                    'contents' => $request->input('name_place')
                ],
                [
                    'name' => 'latitude_place',
                    'contents' => $request->input('latitude_place')
                ],
                [
                    'name' => 'length_place',
                    'contents' =>   $request->input('length_place')
                ],
                [
                    'name' => 'type_place',
                    'contents' =>   $request->input('type_place')
                ],
                [
                    'name' => 'address_place',
                    'contents' =>  $request->input('address_place')
                ],
                [
                    'name' => 'state',
                    'contents' =>  $request->input('state')
                ],
                [
                    'name'     => 'img',
                    'filename' => $nombreImg,
                    'contents' => fopen($request->file('img'), 'r'),
                ],
                [
                    'name' => 'website',
                    'contents' =>  $request->input('website')
                ]
            ]
        ],$request->input('id')
        );
        return redirect()->route('institutes');
    }
    public function deletePublicInstitutions($id)
    {
        if (session()->exists('autenticacion')) {
            $this->operacion->deletePublicInstitutions($id);
            return redirect()->route('institutes');
        } else {
            return redirect()->route('Login');
        }
    }
}
