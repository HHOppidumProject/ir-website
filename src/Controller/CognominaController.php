<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cognomina Controller
 *
 * @property \App\Model\Table\CognominaTable $Cognomina
 * @method \App\Model\Entity\Cognomina[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CognominaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $cognomina = $this->paginate($this->Cognomina);

        $this->set(compact('cognomina'));
    }

    /**
     * View method
     *
     * @param string|null $id Cognomina id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cognomina = $this->Cognomina->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('cognomina'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cognomina = $this->Cognomina->newEmptyEntity();
        if ($this->request->is('post')) {
            $cognomina = $this->Cognomina->patchEntity($cognomina, $this->request->getData());
            if ($this->Cognomina->save($cognomina)) {
                $this->Flash->success(__('The cognomina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cognomina could not be saved. Please, try again.'));
        }
        $this->set(compact('cognomina'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cognomina id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cognomina = $this->Cognomina->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cognomina = $this->Cognomina->patchEntity($cognomina, $this->request->getData());
            if ($this->Cognomina->save($cognomina)) {
                $this->Flash->success(__('The cognomina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cognomina could not be saved. Please, try again.'));
        }
        $this->set(compact('cognomina'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cognomina id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cognomina = $this->Cognomina->get($id);
        if ($this->Cognomina->delete($cognomina)) {
            $this->Flash->success(__('The cognomina has been deleted.'));
        } else {
            $this->Flash->error(__('The cognomina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
