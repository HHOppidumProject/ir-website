<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CivilServices Controller
 *
 * @property \App\Model\Table\CivilServicesTable $CivilServices
 * @method \App\Model\Entity\CivilService[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CivilServicesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $civilServices = $this->paginate($this->CivilServices);

        $this->set(compact('civilServices'));
    }

    /**
     * View method
     *
     * @param string|null $id Civil Service id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $civilService = $this->CivilServices->get($id, [
            'contain' => ['Cives'],
        ]);

        $this->set(compact('civilService'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $civilService = $this->CivilServices->newEmptyEntity();
        if ($this->request->is('post')) {
            $civilService = $this->CivilServices->patchEntity($civilService, $this->request->getData());
            if ($this->CivilServices->save($civilService)) {
                $this->Flash->success(__('The civil service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The civil service could not be saved. Please, try again.'));
        }
        $cives = $this->CivilServices->Cives->find('list', ['limit' => 200])->all();
        $this->set(compact('civilService', 'cives'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Civil Service id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $civilService = $this->CivilServices->get($id, [
            'contain' => ['Cives'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $civilService = $this->CivilServices->patchEntity($civilService, $this->request->getData());
            if ($this->CivilServices->save($civilService)) {
                $this->Flash->success(__('The civil service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The civil service could not be saved. Please, try again.'));
        }
        $cives = $this->CivilServices->Cives->find('list', ['limit' => 200])->all();
        $this->set(compact('civilService', 'cives'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Civil Service id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $civilService = $this->CivilServices->get($id);
        if ($this->CivilServices->delete($civilService)) {
            $this->Flash->success(__('The civil service has been deleted.'));
        } else {
            $this->Flash->error(__('The civil service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
