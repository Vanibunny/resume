<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ResumeModel;
use CodeIgniter\HTTP\ResponseInterface;

class MoviesController extends BaseController
{
    public function index()
    {

        $movies_model = new ResumeModel();
        $movies = $movies_model->findAll();

        $array = [
            "movies" => $movies,
        ];

        return view('blog/index', $array);
    }

    public function create()
    {
        return view('blog/create');
    }

    public function edit($id)
    {
        $blog_model = new ResumeModel();
        $blog = $blog_model->where('blog_id', $id)->first();

        return view('blog/edit', [
            "user_id" => $id,
            "qwerty" => $blog,
        ]);
    }

    public function store()
    {
        $blog_title = esc($this->request->getPost('blog_title'));
        $blog_description = esc($this->request->getPost('blog_description'));

        $blog_data = [
            'blog_title' => $blog_title,
            'blog_description' => $blog_description,
        ];

        $blog_model = new ResumeModel();
        $blog_model->insert($blog_data);

        return redirect()->back();
    }

    public function update($id)
    {
        $blog_title = esc($this->request->getPost('blog_title'));
        $blog_description = esc($this->request->getPost('blog_description'));

        $blog_data = [
            'blog_title' => $blog_title,
            'blog_description' => $blog_description,
        ];

        $blog_model = new ResumeModel();

        $blog = $blog_model->where('blog_id', $id)
            ->set($blog_data)
            ->update();

        return redirect()->back();
    }
}
