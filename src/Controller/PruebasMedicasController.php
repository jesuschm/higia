<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PruebasMedicas Controller
 *
 * @property \App\Model\Table\PruebasMedicasTable $PruebasMedicas
 *
 * @method \App\Model\Entity\PruebasMedica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PruebasMedicasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pruebasMedicas = $this->paginate($this->PruebasMedicas);

        $this->set(compact('pruebasMedicas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pruebas Medica id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pruebasMedica = $this->PruebasMedicas->get($id, [
            'contain' => []
        ]);

        $this->set('pruebasMedica', $pruebasMedica);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pruebasMedica = $this->PruebasMedicas->newEntity();
        if ($this->request->is('post')) {
            $pruebasMedica = $this->PruebasMedicas->patchEntity($pruebasMedica, $this->request->getData());
            if ($this->PruebasMedicas->save($pruebasMedica)) {
                $this->Flash->success(__('The pruebas medica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pruebas medica could not be saved. Please, try again.'));
        }
        $this->set(compact('pruebasMedica'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pruebas Medica id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pruebasMedica = $this->PruebasMedicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pruebasMedica = $this->PruebasMedicas->patchEntity($pruebasMedica, $this->request->getData());
            if ($this->PruebasMedicas->save($pruebasMedica)) {
                $this->Flash->success(__('The pruebas medica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pruebas medica could not be saved. Please, try again.'));
        }
        $this->set(compact('pruebasMedica'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pruebas Medica id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pruebasMedica = $this->PruebasMedicas->get($id);
        if ($this->PruebasMedicas->delete($pruebasMedica)) {
            $this->Flash->success(__('The pruebas medica has been deleted.'));
        } else {
            $this->Flash->error(__('The pruebas medica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
