<?php

namespace App\Controllers;

use App\Models\api_posts_model;
use App\Models\Category_model;

class apiController extends BaseController
{
    public function index()
    {
        $api_model = new api_posts_model;
        $category_model = new Category_model;

        // $httpClient = \Config\Services::curlrequest();

        // $postResponse = file_get_contents('https://jsonplaceholder.typicode.com/posts');
        // $post = json_decode($postResponse, true);


        // echo "<pre>";
        // // insert data from api to database
        // $i = 0;
        // foreach ($post as $k):

        //     if ($i++ % 2 == 0) {

        //         //get photo from api and store in db
        //         $photoResponse = $httpClient->get('https://jsonplaceholder.typicode.com/photos/' . $i);
        //         $photo = json_decode($photoResponse->getBody(), true);

        //         $data = [
        //             'id' => $i,
        //             'title' => $k['title'],
        //             'body' => $k['body'],
        //             'photo' => $photo['url'],
        //             'category_id' => 4,
        //         ];
        //         print_r($data);
        //         // $model->insertData($data);
        //     }
        //     if ($i++ % 2 != 0) {
        //         //get photo from api and store in db
        //         $photoResponse = $httpClient->get('https://jsonplaceholder.typicode.com/photos/' . $i);
        //         $photo = json_decode($photoResponse->getBody(), true);

        //         $data = [
        //             'id' => $i,
        //             'title' => $k['title'],
        //             'body' => $k['body'],
        //             'photo' => $photo['url'],
        //             'category_id' => 12,
        //         ];
        //         // $model->insertData($data);

        //     }

        // endforeach;
        // exit;


        // fetch data from database
        $dbpost = $api_model->allData();
        $dbcategory = $category_model->allData();
        $data = [
            'posts' => $dbpost,
            'categories' => $dbcategory,
        ];

        return view('Api', $data);
    }

    public function filter()
    {
        $category_id = $this->request->getVar('category_id');
        $posts = new api_posts_model();

        $data = $posts->where('category_id', $category_id)->findAll();
        return $this->response->setJSON($data);
    }
    public function allPosts()
    {

        $posts = new api_posts_model();
        $data = $posts->findAll();
        return $this->response->setJSON($data);
    }

    public function single_view_api_db($id)
    {
        $model = new api_posts_model();
        $posts = $model->where('id', $id)->find();
        $data = [
            'posts' => $posts,
        ];
        return view('Single_view_api_db', $data);
    }

}


?>