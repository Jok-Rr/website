<?php

namespace App\Controller;

use Cake\ORM\Entity;

class ProjectsController extends AppController
{
  public function index()
  {
    $this->loadComponent('Paginator');
    $projects = $this->Paginator->paginate($this->Projects->find());
    $this->set(compact('projects'));
  }

  public function view($slug = null)
  {
    $project = $this->Projects->findBySlug($slug)->firstOrFail();
    $this->set(compact('project'));
  }

  public function add()
  {
      $project = $this->Projects->newEmptyEntity();
      if($this->request->is('post'))
      {
        $project = $this->Projects->patchEntity($project, $this->request->getData());

        if($this->Projects->save($project))
        {
          $this->Flash->success('Votre projet a bien été mis en ligne');
          return $this->redirect(['action' => 'index']);
        }else{
          $this->Flash->error('Un problème est survenu');
        }
      }
      $this->set(compact('project'));
    }
  public function edit($slug)
  {
    $project = $this->Projects->findBySlug($slug)->firstOrFail();

    if ($this->request->is(['post', 'put']))
    {
      $project = $this->Projects->patchEntity($project, $this->request->getData());

      if($this->Projects->save($project))
      {
        $this->Flash->success('Votre projet a bien été mis à jour');
        return $this->redirect(['action' => 'index']);
      }else{
        $this->Flash->error('Un problème est survenu');
      }
    }
    $this->set(compact('project'));
  }
  public function delete($slug)
  {
    $this->request->allowMethod(['post', 'delete']);

    $project = $this->Projects->findBySlug($slug)->firstOrFail();

    if($this->Projects->delete($project))
    {
      $this->Flash->success(__('le projet {0} a bien été supprimer', $project->title));
      return $this->redirect(['action' => 'index']);
    }
  }
}
