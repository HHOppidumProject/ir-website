<?php

namespace App\Controller;

class CivesController extends AppController{
    public function index(){
        $this->viewBuilder()->setLayout('default');
        $this->loadComponent('Paginator');
        $cives = $this->Paginator->paginate($this->Cives->find());
        $this->set(compact('cives'));
    }
}