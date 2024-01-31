<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ResumeModel;
use CodeIgniter\HTTP\ResponseInterface;

class MoviesController extends BaseController
{
    public function movies()
    {

        $movies_model = new ResumeModel();
        $movies = $movies_model->findAll();

        $array = [
            "movies" => $movies,
        ];

        return view('github/movies', $array);
    }

    public function movies_create()
    {
        return view('github/movies_create');
    }

    public function movies_edit($id)
    {
        $movies_model = new ResumeModel();
        $movie = $movies_model->where('id', $id)->first();

        return view('github/movies_edit', [
            "id" => $id,
            "qwerty" => $movie,
        ]);
    }

    public function movies_store()
    {
        $title = esc($this->request->getPost('title'));
        $description = esc($this->request->getPost('description'));

        $data = [
            'title' => $title,
            'description' => $description,
        ];

        $movies_model = new ResumeModel();
        $movies_model->insert($data);

        return redirect()->back();
    }

    public function movies_update($id)
    {
        $title = esc($this->request->getPost('title'));
        $description = esc($this->request->getPost('description'));

        $data = [
            'title' => $title,
            'description' => $description,
        ];

        $movies_model = new ResumeModel();

        $movie = $movies_model->where('id', $id)
            ->set($data)
            ->update();

        return redirect()->back();
    }
}
