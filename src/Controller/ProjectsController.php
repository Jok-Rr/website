<?php

namespace App\Controller;

use Cake\ORM\Entity;

class ProjectsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['index']);
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $projects = $this->Paginator->paginate($this->Projects->find());
        $this->set(compact('projects'));
    }

    public function manager()
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

        if ($this->request->is(['post', 'put'])) {
            $project->title = $this->request->getData('title');
            $project->body = $this->request->getData('body');
            $project->published = $this->request->getData('published');

            if (empty($this->request->getData('poster')->getClientFilename()) || !in_array($this->request->getData('poster')->getClientMediaType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'])) {
                $this->Flash->error('L\'image doit être au format png, jpg ou gif');
            } else {
                $ext = pathinfo($this->request->getData('poster')->getClientFilename(), PATHINFO_EXTENSION);
                $newName = 'pic-' . rand(0, 999) . '-' . time() . '.' . $ext;
                $project->poster = $newName;
                $project->user_id = $this->request->getAttribute('identity')->id;

                if ($this->Projects->save($project)) {
                    $this->request->getData('poster')->moveTo(WWW_ROOT . 'img/data/pictures/projects/' . $newName);
                    $this->Flash->success('Votre projet "' . $project->title . ' "a bien été mis en ligne');
                    return $this->redirect(['controller' => 'Projects', 'action' => 'manager']);
                } else {
                    $this->Flash->error('Error');
                }
            }
        }
        $this->set(compact('project'));
    }
    public function edit($slug)
    {
        $project = $this->Projects->findBySlug($slug)->firstOrFail();
        $oldPic = $project->poster;

        if ($this->request->is(['post', 'put'])) {
            $project->title = $this->request->getData('title');
            $project->body = $this->request->getData('body');
            $project->published = $this->request->getData('published');
            $project->poster = $this->request->getData('poster');

            if (empty($this->request->getData('poster')->getClientFilename()) || !in_array($this->request->getData('poster')->getClientMediaType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'])) {
                $this->Flash->error('L\'image doit être au format png, jpg ou gif');
            } else {
                $ext = pathinfo($this->request->getData('poster')->getClientFilename(), PATHINFO_EXTENSION);
                $newName = 'pic-' . rand(0, 999) . '-' . time() . '.' . $ext;
                $project->poster = $newName;

                if ($this->Projects->save($project)) {
                    unlink(WWW_ROOT.'img/data/pictures/projects/'.$oldPic);
                    $this->request->getData('poster')->moveTo(WWW_ROOT.'img/data/pictures/projects/'.$newName);
                    $this->Flash->success('Votre projet a bien été mis à jour');
                    return $this->redirect(['action' => 'manager']);
                } else {
                    $this->Flash->error('Un problème est survenu');
                }
            }
        }
        $this->set(compact('project'));
    }
    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);

        $project = $this->Projects->findBySlug($slug)->firstOrFail();

        if ($this->Projects->delete($project)) {
            $this->Flash->success(__('le projet {0} a bien été supprimer', $project->title));
            return $this->redirect(['action' => 'manager']);
        }
    }
}
