<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Nomina Controller
 *
 * @property \App\Model\Table\NominaTable $Nomina
 * @method \App\Model\Entity\Nomina[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NominaController extends AppController
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
        $nomina = $this->paginate($this->Nomina);

        $this->set(compact('nomina'));
    }

    /**
     * View method
     *
     * @param string|null $id Nomina id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nomina = $this->Nomina->get($id, [
            'contain' => ['Cives'],
        ]);

        $this->set(compact('nomina'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nomina = $this->Nomina->newEmptyEntity();
        if ($this->request->is('post')) {
            $nomina = $this->Nomina->patchEntity($nomina, $this->request->getData());
            if ($this->Nomina->save($nomina)) {
                $this->Flash->success(__('The nomina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nomina could not be saved. Please, try again.'));
        }
        $cives = $this->Nomina->Cives->find('list', ['limit' => 200])->all();
        $this->set(compact('nomina', 'cives'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nomina id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nomina = $this->Nomina->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nomina = $this->Nomina->patchEntity($nomina, $this->request->getData());
            if ($this->Nomina->save($nomina)) {
                $this->Flash->success(__('The nomina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nomina could not be saved. Please, try again.'));
        }
        $cives = $this->Nomina->Cives->find('list', ['limit' => 200])->all();
        $this->set(compact('nomina', 'cives'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nomina id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nomina = $this->Nomina->get($id);
        if ($this->Nomina->delete($nomina)) {
            $this->Flash->success(__('The nomina has been deleted.'));
        } else {
            $this->Flash->error(__('The nomina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
