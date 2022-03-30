<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StateToProvincia Controller
 *
 * @property \App\Model\Table\StateToProvinciaTable $StateToProvincia
 * @method \App\Model\Entity\StateToProvincium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StateToProvinciaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries', 'Provincia'],
        ];
        $stateToProvincia = $this->paginate($this->StateToProvincia);

        $this->set(compact('stateToProvincia'));
    }

    /**
     * View method
     *
     * @param string|null $id State To Provincium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stateToProvincium = $this->StateToProvincia->get($id, [
            'contain' => ['Countries', 'Provincia'],
        ]);

        $this->set(compact('stateToProvincium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stateToProvincium = $this->StateToProvincia->newEmptyEntity();
        if ($this->request->is('post')) {
            $stateToProvincium = $this->StateToProvincia->patchEntity($stateToProvincium, $this->request->getData());
            if ($this->StateToProvincia->save($stateToProvincium)) {
                $this->Flash->success(__('The state to provincium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The state to provincium could not be saved. Please, try again.'));
        }
        $countries = $this->StateToProvincia->Countries->find('list', ['limit' => 200])->all();
        $provincia = $this->StateToProvincia->Provincia->find('list', ['limit' => 200])->all();
        $this->set(compact('stateToProvincium', 'countries', 'provincia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id State To Provincium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stateToProvincium = $this->StateToProvincia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stateToProvincium = $this->StateToProvincia->patchEntity($stateToProvincium, $this->request->getData());
            if ($this->StateToProvincia->save($stateToProvincium)) {
                $this->Flash->success(__('The state to provincium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The state to provincium could not be saved. Please, try again.'));
        }
        $countries = $this->StateToProvincia->Countries->find('list', ['limit' => 200])->all();
        $provincia = $this->StateToProvincia->Provincia->find('list', ['limit' => 200])->all();
        $this->set(compact('stateToProvincium', 'countries', 'provincia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id State To Provincium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stateToProvincium = $this->StateToProvincia->get($id);
        if ($this->StateToProvincia->delete($stateToProvincium)) {
            $this->Flash->success(__('The state to provincium has been deleted.'));
        } else {
            $this->Flash->error(__('The state to provincium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
