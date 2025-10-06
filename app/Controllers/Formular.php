<?php

namespace App\Controllers;

use App\Models\Article;

class Formular extends BaseController
{
    var $article;

    public function __construct()

    {
        $this->article = new Article();
    }

   

    public function create()
    {
        echo view('formular/create');
    }

    public function store()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'photo' => $this->request->getPost('photo'),
            'text' => $this->request->getPost('text'),
            'date' => time(),
            'top' => $this->request->getPost('top')?'1':'0',
            'published' => $this->request->getPost('published')?'1':'0',
        ];
        $this->article->insert($data);
        return redirect()->to(base_url('formular/admin'));
    }

    public function edit($id)
    {
        $data['article'] = $this->article->find($id);
        echo view('formular/edit', $data);
    }
public function update($id)
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'photo' => $this->request->getPost('photo'),
            'text' => $this->request->getPost('text'),
            'date' => time(),
            'top' => $this->request->getPost('top')?'1':'0',
            'published' => $this->request->getPost('published')?'1':'0',
        ];
        $this->article->update($id, $data);
        return redirect()->to(base_url('formular/admin'));
    }

    public function delete($id)
    {
        $this->article->delete($id);
        return redirect()->to(base_url('formular/admin'));

   
}
}
