<?php

namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Blog_model;
use App\Models\Category_model;

class Admin_login extends BaseController
{

    protected $helpers = ['form'];
    public function index()
    {
        // $session = \Config\Services::session($config);
        $db = \Config\Database::connect();
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('Admin/Login');
        }

        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return view('Admin/Login');
        } else {

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $query = $db->table('admin')
                ->where('username', $username)
                ->get();
            // dd($query);
            $user = $query->getRow();
            if (!empty($user)) {

                if ($user->password == $password) {
                    $model = new Admin_model();
                    $data = $model->where('username', $username)->first();

                    $ses_data = [
                        'id' => $data['id'],
                        'name' => $data['name'],
                        'username' => $data['username'],
                        'isLoggedIn' => TRUE
                    ];
                    // $session = session();
                    // $session->set($ses_data);

                    return view('Admin/Dashboard');
                } else {
                    return view('Admin/Login');
                }

            } else {
                // Login failed
                return view('Admin/Login');
            }

        }

    }

    public function dashboard()
    {
        return view('Admin/Dashboard');
    }
    public function blog()
    {
        $model = new Blog_model();
        $data['row'] = $model->orderBy('id', 'DESC')->findAll();
        return view('Admin/blog', $data);
    }

    // public function layout()
    // {
    //     $model = new Admin_model();
    //     $data['user'] = $model->find(1);
    //     // $data['users'] = $model->findAll();
    //     // print_r($data);
    //     return view('Admin/Dasboard_layout', $data);
    // }


    // Blog 
    public function blog_delete($id)
    {
        // $session = \config\Services::Session();
        $model = new Blog_model();
        $row = $model->getRow($id);

        $model->delete($id);

        $session = session();
        $session->setFlashdata('success', 'Blog Delete Sucessfully');
        return redirect()->to('admin/blog');
    }
    public function blog_edit($id)
    {
        $model = new Blog_model();
        $data['row'] = $model->find($id);
        return view('Admin/EditBlog', $data);
    }
    public function blog_update($id = null)
    {

        $model = new Blog_model();
        if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {

            $updateData = [
                'title' => $this->request->getVar('title'),
                'short_desc' => $this->request->getVar('short_desc'),
                // 'image' => $filename,
                'description' => $this->request->getVar('description'),
            ];
            $model->update($id, $updateData);
            return $this->response->redirect(site_url('/admin/blog'));
        } else {

        }

        // return redirect()->to('admin/blog/edit/' . $id);

    }

    public function posts()
    {
        helper('form');
        // $db = \Config\Database::connect();
        if (strtolower($this->request->getMethod()) !== 'post') {
            $model = new Category_model();
            $data['row'] = $model->findAll();
            return view('Admin/Posts', $data);
        }


        $rules = [
            'title' => 'required',
            // 'short-desc' => 'required|min_length[15]',
            // 'description' => 'required|min_length[15]',
            'image' => 'uploaded[image]|max_size[image,2024]|is_image[image]',
        ];

        if (!$this->validate($rules)) {
            return view('Admin/Posts');
            // return redirect()->back()->withInput();
        } else {

            $title = $this->request->getVar('title');
            $image = $this->request->getFile('image');
            $filename = $image->getRandomName();
            $image->move('./public/assets/upload', $filename);

            $short_desc = $this->request->getVar('short_desc');
            $category = $this->request->getVar('category');
            $description = $this->request->getVar('quill_text');

            // echo "$title <br>, $image <br> ,$description <br> , $date  <br>, $time <br>, $short_desc <br>,$category  ";

            $Blog = new Blog_model();

            $data = [
                'title' => $title,
                'image' => $filename,
                'description' => $description,
                'short_desc' => $short_desc,
                'category' => $category,
            ];

            $Blog->insert($data);
            // $Blog->save(['image' => $filename]);
            $session = session();
            $session->setFlashdata('success', 'Post Sucessfully');
        }

        $model = new Category_model();
        $data['row'] = $model->findAll();
        return view('Admin/Posts', $data);
    }

    // Comments
    public function comments()
    {
        return view('Admin/Comments');
    }
    // media
    public function media()
    {
        return view('Admin/Media');
    }
    // Users
    public function users()
    {

        $model = new Admin_model();
        $data['users'] = $model->findAll();
        return view('Admin/Users', $data);
    }

    public function users_delete($id)
    {
        $model = new Admin_model();
        $model->where('id', $id)->delete();
        return redirect()->to('admin/users');

    }

    public function users_add()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('Admin/AddUsers');
        }

        $rules = [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'position' => 'required',
        ];

        if (!$this->validate($rules)) {
            return view('Admin/AddUsers');
        } else {

            $name = $this->request->getVar('name');
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $position = $this->request->getVar('position');

            $model = new Admin_model();

            $data = [
                'name' => $name,
                'username' => $username,
                'password' => $password,
                'position' => $position,
            ];

            $model->insert($data);
        }

        return redirect()->to('admin/users');
    }

    public function users_edit($id = null)
    {
        $model = new Admin_model();

        $data['row'] = $model->find($id);
        return view('Admin/EditUsers', $data);
    }

    public function users_update($id = null)
    {

        $model = new Admin_model();
        $updateData = [
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'position' => $this->request->getVar('position'),
        ];
        $model->update($id, $updateData);
        return $this->response->redirect(site_url('/admin/users'));
    }

    // profile
    public function profile()
    {
        return view('Admin/Profile');
    }
    public function contact()
    {
        return view('Admin/Contact');
    }
    // signout
    public function signout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin');
    }
    // category
    public function category()
    {
        $model = new Category_model();
        $data['row'] = $model->orderBy('category_id', 'DESC')->findAll();
        return view('Admin/Category', $data);
    }
    public function add_category()
    {
        $db = \Config\Database::connect();
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('Admin/AddCategory');
        }

        $rules = [
            'name' => 'required',
            'description' => 'required|min_length[15]',
            // 'date' => 'required',
            // 'time' => 'required',
        ];

        if (!$this->validate($rules)) {
            return view('Admin/AddCategory');
        } else {

            $name = $this->request->getVar('name');
            $description = $this->request->getVar('description');

            // echo "$name <br>, <br> ,$description <br> , $date  <br>, $time <br>";

            $Category_model = new Category_model();

            $data = [
                'name' => $name,
                'description' => $description,
                // 'date' => $date,
                // 'time' => $time,
            ];

            $Category_model->insert($data);
        }

        return redirect()->to('admin/category/add');
    }


    public function category_edit($id)
    {
        $model = new Category_model();

        $data['row'] = $model->find($id);
        return view('Admin/EditCategory', $data);

    }


    public function category_update($id = null)
    {

        $model = new Category_model();
        $updateData = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
        ];
        $model->update($id, $updateData);
        return $this->response->redirect(site_url('/admin/category'));
    }

    public function category_delete($id)
    {
        // $session = \config\Services::Session();
        $model = new Category_model();
        $row = $model->getRow($id);

        $model->delete($id);
        $session = session();
        $session->setFlashdata('success', 'Category Delete Sucessfully');
        return redirect()->to('admin/category');
    }
    public function gallery()
    {

    }

}