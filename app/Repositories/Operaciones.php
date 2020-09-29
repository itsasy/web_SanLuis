<?php

namespace App\Repositories;

class Operaciones extends GuzzleHttpRequest
{
    public function Login($data)
    {
        return $this->post('login', $data);
    }
    public function Alerts()
    {
        return $this->get('alerts');
    }
    /* public function alertType($type)
    {
        return $this->get("alerts/{$type}");
    } */
    
    public function deleteAlert($id){
        return $this->delete("alerts/{$id}");
    }
    public function Users(){
        return $this->get('persons');
    }
    public function getUser($id){
        return $this->get("persons/{$id}");
    }
    public function editUsers($data, $id){
        return $this->put("persons/{$id}" , $data);
    }
    public function deleteUsers($id){
        return $this->delete("persons/{$id}");
    }
    //Bussiness
    public function Places()
    {
        return $this->get('places');
    }
    public function addPlaces($data)
    {
        return $this->post('places', $data);
    }
    public function getPlace($id)
    {
        return $this->get("places/{$id}");
    }
    public function editPlaces($data, $id)
    {
        return $this->post("places/{$id}", $data);
    }
    public function deletePlace($id)
    {
        return $this->delete("places/{$id}");
    }
    public function placesType($type)
    {
        return $this->get("placesType/{$type}");
    }

    //Evacuation Points
    public function EvacuationPoints()
    {
        return $this->get('evacuationPoints');
    }
    public function addEvacuationPoints($data)
    {
        return $this->post('evacuationPoints', $data);
    }
    public function getEvacuationPoint($id)
    {
        return $this->get("evacuationPoints/{$id}");
    }
    public function editEvacuationPoints($data, $id)
    {
        return $this->post("evacuationPoints/{$id}", $data);
    }
    public function deleteEvacuationPoints($id)
    {
        return $this->delete("evacuationPoints/{$id}");
    }

    //Public institutions
    public function PublicInstitutions()
    {
        return $this->get('publicInstitutions');
    }
    public function addPublicInstitutions($data)
    {
        return $this->post('publicInstitutions', $data);
    }
    public function getPublicInstitution($id)
    {
        return $this->get("publicInstitutions/{$id}");
    }
    public function editPublicInstitutions($data, $id)
    {
        return $this->post("publicInstitutions/{$id}", $data);
    }
    public function deletePublicInstitutions($id)
    {
        return $this->delete("publicInstitutions/{$id}");
    }
    
    

    public function home()
    {
        return $this->get('home');
    }
    public function news()
    {
        return $this->get('news');
    }
    public function events()
    {
        return $this->get('events');
    }
    public function eventsPast()
    {
        return $this->get('events/eventsPast');
    }
    public function addHome($data)
    {
        return $this->post('home', $data);
    }
    public function addNews($data)
    {
        return $this->post('news', $data);
    }
    public function addEvents($data)
    {
        return $this->post('events', $data);
    }
    public function getHome($id)
    {
        return $this->get("home/{$id}");
    }
    public function getNews($id)
    {
        return $this->get("news/{$id}");
    }
    public function getEvents($id)
    {
        return $this->get("events/{$id}");
    }
    public function editHome($data, $id)
    {
        return $this->post("home/{$id}", $data);
    }
    public function editNews($data, $id)
    {
        return $this->post("news/{$id}", $data);
    }
    public function editEvents($data, $id)
    {
        return $this->post("events/{$id}", $data);
    }
    public function deleteHome($id)
    {
        return $this->delete("home/{$id}");
    }
    public function deleteNews($id)
    {
        return $this->delete("news/{$id}");
    }
    public function deleteEvents($id)
    {
        return $this->delete("events/{$id}");
    }
    
    public function excel($inicio, $fin)
    {
        return $this->get("excel/{$inicio}/{$fin}");
    }
    public function descargarExcel($opcion, $nombreExcel) {
        return $this->get("descargar/excel/{$opcion}/{$nombreExcel}");
    }
    
    // :'v
     public function down($nombreExcel)
    {
        return $this->get("descargar/excel/excel/{$nombreExcel}");
    }
}
