<?php

namespace App\Controllers;

use App\Models\ProjectsModel;

class Pages extends BaseController
{
    public function profile()
    {
        echo view("pages/profile");
    }

    public function projects()
    {
        $projectsModel = new ProjectsModel();
        $projects = $projectsModel->findAll();

        $data = [
            'projects' => $projects
        ];

        return view('pages/projects', $data);
    }

    public function contacts()
    {
        echo view("pages/contacts");
    }

    public function tos()
    {
        echo "Halaman Term of Service";
    }
}
