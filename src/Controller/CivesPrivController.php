<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CivesPriv Controller
 *
 * all of these can only be viewed from the cives controller by a senator
 *
 * TODO ADD AUTHENTICATION
 *
 * @property \App\Model\Table\CivesPrivTable $CivesPriv
 * @method \App\Model\Entity\CivesPriv[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CivesPrivController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StateToProvincia'],
        ];
        $civesPriv = $this->paginate($this->CivesPriv);

        $this->set(compact('civesPriv'));
    }

    /**
     * View method
     *
     * @param string|null $id Cives Priv id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $civesPriv = $this->CivesPriv->get($id, [
            'contain' => ['StateToProvincia'],
        ]);

        $this->set(compact('civesPriv'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $civesPriv = $this->CivesPriv->newEmptyEntity();
        if ($this->request->is('post')) {
            $civesPriv = $this->CivesPriv->patchEntity($civesPriv, $this->request->getData());
            if ($this->CivesPriv->save($civesPriv)) {
                $this->Flash->success(__('The cives priv has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cives priv could not be saved. Please, try again.'));
        }
        $stateToProvincia = $this->CivesPriv->StateToProvincia->find('list', ['limit' => 200])->all();
        $this->set(compact('civesPriv', 'stateToProvincia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cives Priv id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $civesPriv = $this->CivesPriv->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $civesPriv = $this->CivesPriv->patchEntity($civesPriv, $this->request->getData());
            if ($this->CivesPriv->save($civesPriv)) {
                $this->Flash->success(__('The cives priv has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cives priv could not be saved. Please, try again.'));
        }
        $stateToProvincia = $this->CivesPriv->StateToProvincia->find('list', ['limit' => 200])->all();
        $this->set(compact('civesPriv', 'stateToProvincia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cives Priv id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $civesPriv = $this->CivesPriv->get($id);
        if ($this->CivesPriv->delete($civesPriv)) {
            $this->Flash->success(__('The cives priv has been deleted.'));
        } else {
            $this->Flash->error(__('The cives priv could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
