<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Especialidades Controller
 *
 * @property \App\Model\Table\EspecialidadesTable $Especialidades
 *
 * @method \App\Model\Entity\Especialidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EspecialidadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $especialidades = $this->paginate($this->Especialidades);

        $this->set(compact('especialidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Especialidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $especialidade = $this->Especialidades->get($id, [
            'contain' => []
        ]);

        $this->set('especialidade', $especialidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $especialidade = $this->Especialidades->newEntity();
        if ($this->request->is('post')) {
            $especialidade = $this->Especialidades->patchEntity($especialidade, $this->request->getData());
            if ($this->Especialidades->save($especialidade)) {
                $this->Flash->success(__('The especialidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especialidade could not be saved. Please, try again.'));
        }
        $this->set(compact('especialidade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Especialidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $especialidade = $this->Especialidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $especialidade = $this->Especialidades->patchEntity($especialidade, $this->request->getData());
            if ($this->Especialidades->save($especialidade)) {
                $this->Flash->success(__('The especialidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especialidade could not be saved. Please, try again.'));
        }
        $this->set(compact('especialidade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Especialidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $especialidade = $this->Especialidades->get($id);
        if ($this->Especialidades->delete($especialidade)) {
            $this->Flash->success(__('The especialidade has been deleted.'));
        } else {
            $this->Flash->error(__('The especialidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
