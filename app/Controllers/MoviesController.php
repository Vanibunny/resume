<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MoviesModel;
use CodeIgniter\HTTP\ResponseInterface;

class MoviesController extends BaseController
{
    public function movies()
    {

        $movies_model = new MoviesModel();
        $movies = $movies_model->findAll();

        $array = [
            "movies" => $movies,
        ];

        return view('github/movies', $array);
    }

    public function movies_create()
    {
        return view('github/movies-create');
    }

    public function movies_edit($id)
    {
        $movies_model = new MoviesModel();
        $movie = $movies_model->where('id', $id)->first();

        return view('github/movies-edit', [
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

        $movies_model = new MoviesModel();
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

        $movies_model = new MoviesModel();

        $movie = $movies_model->where('id', $id)
            ->set($data)
            ->update();

        return redirect()->back();
    }
    public function movies_delete($id)
    {
        $movies_model = new MoviesModel();
        $movie = $movies_model->find($id);

        if (!$movie) {
        return redirect()->to('/movies');
    }

        $movies_model->delete($id, 'id');

        return redirect()->to('/movies');
    }
}
