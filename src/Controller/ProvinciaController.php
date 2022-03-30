<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Provincia Controller
 *
 * @property \App\Model\Table\ProvinciaTable $Provincia
 * @method \App\Model\Entity\Provincium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProvinciaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $provincia = $this->paginate($this->Provincia);

        $this->set(compact('provincia'));
    }

    /**
     * View method
     *
     * @param string|null $id Provincium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $provincium = $this->Provincia->get($id, [
            'contain' => ['StateToProvincia'],
        ]);

        $this->set(compact('provincium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $provincium = $this->Provincia->newEmptyEntity();
        if ($this->request->is('post')) {
            $provincium = $this->Provincia->patchEntity($provincium, $this->request->getData());
            if ($this->Provincia->save($provincium)) {
                $this->Flash->success(__('The provincium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The provincium could not be saved. Please, try again.'));
        }
        $this->set(compact('provincium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Provincium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $provincium = $this->Provincia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $provincium = $this->Provincia->patchEntity($provincium, $this->request->getData());
            if ($this->Provincia->save($provincium)) {
                $this->Flash->success(__('The provincium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The provincium could not be saved. Please, try again.'));
        }
        $this->set(compact('provincium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Provincium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $provincium = $this->Provincia->get($id);
        if ($this->Provincia->delete($provincium)) {
            $this->Flash->success(__('The provincium has been deleted.'));
        } else {
            $this->Flash->error(__('The provincium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
