<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CivilServiceRecord Controller
 *
 * @property \App\Model\Table\CivilServiceRecordTable $CivilServiceRecord
 * @method \App\Model\Entity\CivilServiceRecord[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CivilServiceRecordController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cives', 'CivilServices'],
        ];
        $civilServiceRecord = $this->paginate($this->CivilServiceRecord);

        $this->set(compact('civilServiceRecord'));
    }

    /**
     * View method
     *
     * @param string|null $id Civil Service Record id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $civilServiceRecord = $this->CivilServiceRecord->get($id, [
            'contain' => ['Cives', 'CivilServices'],
        ]);

        $this->set(compact('civilServiceRecord'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $civilServiceRecord = $this->CivilServiceRecord->newEmptyEntity();
        if ($this->request->is('post')) {
            $civilServiceRecord = $this->CivilServiceRecord
                ->patchEntity($civilServiceRecord, $this->request->getData());
            if ($this->CivilServiceRecord->save($civilServiceRecord)) {
                $this->Flash->success(__('The civil service record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The civil service record could not be saved. Please, try again.'));
        }
        $cives = $this->CivilServiceRecord->Cives->find('list', ['limit' => 200])->all();
        $civilServices = $this->CivilServiceRecord->CivilServices->find('list', ['limit' => 200])->all();
        $this->set(compact('civilServiceRecord', 'cives', 'civilServices'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Civil Service Record id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $civilServiceRecord = $this->CivilServiceRecord->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $civilServiceRecord = $this->CivilServiceRecord
                ->patchEntity($civilServiceRecord, $this->request->getData());
            if ($this->CivilServiceRecord->save($civilServiceRecord)) {
                $this->Flash->success(__('The civil service record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The civil service record could not be saved. Please, try again.'));
        }
        $cives = $this->CivilServiceRecord->Cives->find('list', ['limit' => 200])->all();
        $civilServices = $this->CivilServiceRecord->CivilServices->find('list', ['limit' => 200])->all();
        $this->set(compact('civilServiceRecord', 'cives', 'civilServices'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Civil Service Record id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $civilServiceRecord = $this->CivilServiceRecord->get($id);
        if ($this->CivilServiceRecord->delete($civilServiceRecord)) {
            $this->Flash->success(__('The civil service record has been deleted.'));
        } else {
            $this->Flash->error(__('The civil service record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
