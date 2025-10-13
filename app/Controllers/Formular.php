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
        $image = $this->request->getFile('photo');
        $imageName = null;

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(ROOTPATH . 'obrazky/sigma', $imageName);
        }

        $data = [
            'title'     => $this->request->getPost('title'),
            'photo'     => $imageName, // Save only the filename
            'text'      => $this->request->getPost('text'),
            'date'      => time(),
            'top'       => $this->request->getPost('top') ? '1' : '0',
            'published' => $this->request->getPost('published') ? '1' : '0',
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
        $image = $this->request->getFile('photo');
        $article = $this->article->find($id);
        $imageName = $article['photo'] ?? null;

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/obrazky/sigma', $imageName);
        }

        $data = [
            'title'     => $this->request->getPost('title'),
            'photo'     => $imageName,
            'text'      => $this->request->getPost('text'),
            'date'      => time(),
            'top'       => $this->request->getPost('top') ? '1' : '0',
            'published' => $this->request->getPost('published') ? '1' : '0',
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