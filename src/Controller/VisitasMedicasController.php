<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VisitasMedicas Controller
 *
 * @property \App\Model\Table\VisitasMedicasTable $VisitasMedicas
 *
 * @method \App\Model\Entity\VisitasMedica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VisitasMedicasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $visitasMedicas = $this->paginate($this->VisitasMedicas);

        $this->set(compact('visitasMedicas'));
    }

    /**
     * View method
     *
     * @param string|null $id Visitas Medica id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visitasMedica = $this->VisitasMedicas->get($id, [
            'contain' => []
        ]);

        $this->set('visitasMedica', $visitasMedica);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visitasMedica = $this->VisitasMedicas->newEntity();
        if ($this->request->is('post')) {
            $visitasMedica = $this->VisitasMedicas->patchEntity($visitasMedica, $this->request->getData());
            if ($this->VisitasMedicas->save($visitasMedica)) {
                $this->Flash->success(__('The visitas medica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visitas medica could not be saved. Please, try again.'));
        }
        $this->set(compact('visitasMedica'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Visitas Medica id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visitasMedica = $this->VisitasMedicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visitasMedica = $this->VisitasMedicas->patchEntity($visitasMedica, $this->request->getData());
            if ($this->VisitasMedicas->save($visitasMedica)) {
                $this->Flash->success(__('The visitas medica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visitas medica could not be saved. Please, try again.'));
        }
        $this->set(compact('visitasMedica'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Visitas Medica id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visitasMedica = $this->VisitasMedicas->get($id);
        if ($this->VisitasMedicas->delete($visitasMedica)) {
            $this->Flash->success(__('The visitas medica has been deleted.'));
        } else {
            $this->Flash->error(__('The visitas medica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
