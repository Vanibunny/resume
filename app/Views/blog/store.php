<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function index()
    {
        return view('blog/index');
    }

    public function create()
    {
        return view('blog/create');
    }

    public function edit($id)
    {
        return view('blog/edit');
    }

    public function store()
    {
        $blog_title = esc($this->request->getPost('blog_title'));
        $blog_description = esc($this->request->getPost('blog_description'));

        $blog_data = [
            'blog_title' => $blog_title,
            'blog_description' => $blog_description,
        ];
        
        $blog_model = new BlogModel();
        $blog_model->insert($blog_data);

        return redirect()->back();

    }

    public function update($id)
    {
        
    }

}