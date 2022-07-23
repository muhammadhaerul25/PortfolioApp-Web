<?php

namespace App\Controllers;

use App\Models\ProjectsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ProjectsAdmin extends BaseController
{

    protected $projectsModel;

    public function __construct()
    {
        $this->projectsModel = new ProjectsModel();
    }

    public function index()
    {

        $projects = $this->projectsModel->findAll();

        $data = [
            'projects' => $projects
        ];

        return view('admin/admin_list_projects', $data);
    }


    //--------------------------------------------------------------------------

    public function create()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('admin/admin_create_projects', $data);
    }


    //--------------------------------------------------------------------------

    public function save()
    {
        //Validasi input
        if (!$this->validate([
            'title' => 'required',
            'picture' => [
                'rules' => 'uploaded[picture]|is_image[picture]'
            ]
        ])) {

            $validation =  \Config\Services::validation();
            return redirect('admin/projects/create')->withInput()->with('validation', $validation);
        }

        //ambil file picture
        $filePicture = $this->request->getFile('picture');

        //pindahkan file picture ke folder img
        $filePicture->move('img');

        //ambil nama file picture
        $namePicture = $filePicture->getName();

        $this->projectsModel->save([
            "title" => $this->request->getVar('title'),
            "slug" => url_title($this->request->getVar('title'), '-', true),
            "picture" => $namePicture,
            "content" => $this->request->getVar('content'),

        ]);

        session()->setFlashData('post', 'Project posted successfully!');

        return redirect('admin/projects');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil project yang akan diedit
        $projects = new ProjectsModel();
        $data['projects'] = $projects->where('id', $id)->first();

        // lakukan validasi data project
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required',
            'picture' => 'is_image[picture]'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, maka simpan ke database
        if ($isDataValid) {

            //ambil file picture
            $filePicture = $this->request->getFile('picture');

            //cek file picture is old or new
            if ($filePicture->getError() == 4) { //4 is mean not input file
                $namePicture = $this->request->getVar('oldPicture');
            } else {
                //pindahkan file picture ke folder img
                $filePicture->move('img');

                //ambil nama file picture
                $namePicture = $filePicture->getName();

                //hapus file oldPicture
                unlink('img/' . $this->request->getVar('oldPicture'));
            }


            $projects->update($id, [
                "title" => $this->request->getVar('title'),
                "slug" => url_title($this->request->getVar('title'), '-', true),
                "picture" => $namePicture,
                "content" => $this->request->getVar('content')
            ]);
            session()->setFlashData('post', 'Project edited successfully!');
            return redirect('admin/projects');
        }

        $data2 = [
            'validation' => $validation
        ];

        // tampilkan form edit
        return view('admin/admin_edit_projects', $data, $data2);
    }

    //--------------------------------------------------------------------------

    public function delete($id)
    {
        //cari project berdasarkan id
        $project = $this->projectsModel->find($id);

        //hapus picture project di folder img
        unlink('img/' . $project['picture']);

        //deleta project di database
        $this->projectsModel->delete($id);
        session()->setFlashData('post', 'Project deleted successfully!');
        return redirect('admin/projects');
    }
}
