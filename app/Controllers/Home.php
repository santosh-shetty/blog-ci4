<?php

namespace App\Controllers;

use App\Models\api_posts_model;
use App\Models\Blog_model;

class Home extends BaseController
{
    public function index()
    {

        $model = new Blog_model();
        $dbdata = $model->orderBy('id', 'DESC')->findAll();

        $httpClient = \Config\Services::curlrequest();



        // Get a random post
        $postResponse = $httpClient->get('https://jsonplaceholder.typicode.com/posts?_limit=10');
        $post = json_decode($postResponse->getBody(), true);

        // Get a random photo
        // $photoResponse = $httpClient->get('https://jsonplaceholder.typicode.com/photos/' . rand(1, 5000));
        // $photo = json_decode($photoResponse->getBody(), true);

        // Generate a random date between 1 month and 1 year ago
        $random_date = date('Y-m-d', strtotime('-1 year -1 month +' . rand(0, 30) . ' days'));

        $data = [
            'row' => $dbdata,
            'posts' => $post,
        ];

        return view('Index', $data);


    }
    public function single_view_api($id)
    {
        $model = new Blog_model();
        $dbdata = $model->orderBy('id', 'DESC')->findAll();


        $httpClient = \Config\Services::curlrequest();

        // Get a random post
        $postResponse = $httpClient->get('https://jsonplaceholder.typicode.com/posts/' . $id);
        $post = json_decode($postResponse->getBody(), true);

        $data = [
            'post' => $post,
            'row' => $dbdata
        ];
        return view('Single_view_api', $data);
    }

    public function single_view($id)
    {

        $model = new Blog_model();
        $data['row'] = $model->where('id', $id)->find();
        return view('Single_view', $data);
    }

    // About US section
    public function about_us()
    {
        return view("About_us");
    }
// Contact US section

}