<?php

namespace App\Controller;

use Cake\Log\Log;


class SaveController extends AppController
{

    public function index()
    {
        return implode('|', $this->request->getData());
        $request = $this->request;
        if (!$request->is(['post', 'put'])) {
            $this->redirect($this->referer());
        } else {
            Log::write('debug', $request->getData());
        }
    }
}