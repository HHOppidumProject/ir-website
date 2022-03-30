<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Praenomina Controller
 *
 * @property \App\Model\Table\PraenominaTable $Praenomina
 * @method \App\Model\Entity\Praenomina[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PraenominaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cives'],
        ];
        $praenomina = $this->paginate($this->Praenomina);

        $this->set(compact('praenomina'));
    }

    /**
     * View method
     *
     * @param string|null $id Praenomina id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $praenomina = $this->Praenomina->get($id, [
            'contain' => ['Cives'],
        ]);

        $this->set(compact('praenomina'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $praenomina = $this->Praenomina->newEmptyEntity();
        if ($this->request->is('post')) {
            $praenomina = $this->Praenomina->patchEntity($praenomina, $this->request->getData());
            if ($this->Praenomina->save($praenomina)) {
                $this->Flash->success(__('The praenomina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The praenomina could not be saved. Please, try again.'));
        }
        $cives = $this->Praenomina->Cives->find('list', ['limit' => 200])->all();
        $this->set(compact('praenomina', 'cives'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Praenomina id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $praenomina = $this->Praenomina->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $praenomina = $this->Praenomina->patchEntity($praenomina, $this->request->getData());
            if ($this->Praenomina->save($praenomina)) {
                $this->Flash->success(__('The praenomina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The praenomina could not be saved. Please, try again.'));
        }
        $cives = $this->Praenomina->Cives->find('list', ['limit' => 200])->all();
        $this->set(compact('praenomina', 'cives'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Praenomina id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $praenomina = $this->Praenomina->get($id);
        if ($this->Praenomina->delete($praenomina)) {
            $this->Flash->success(__('The praenomina has been deleted.'));
        } else {
            $this->Flash->error(__('The praenomina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
