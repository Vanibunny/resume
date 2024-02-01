<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MoviesModel;

class MoviesController extends BaseController
{
    public function movies()
    {
        return view('movies');
    }

    public function movies_create()
    {
        return view('movies-create');
    }

    public function movies_edit($id)
    {
        return view('movies-edit');
    }

    public function movies_store()
    {
        $title = esc($this->request->getPost('title'));
        $description = esc($this->request->getPost('description'));

        $data = [
            'title' => $title,
            'description' => $description,
        ];
        
        $movies_model = new MoviesModel();
        $movies_model->insert($data);

        return redirect()->back();

    }

    public function update($id)
    {
        
    }

}