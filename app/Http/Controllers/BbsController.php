<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Bbs\Input;
use Bbs\Login;
use Bbs\Display;
use Bbs\Delete;

class BbsController
{
    public function input()
    {
        $input = new input();
        $input->input_page();
        return view('input', ['listurl' => 'http://localhost:8080/list']);
    }

    public function save()
    {
        $save = new input();
        $save->save_page();
        return view('save', ['listurl' => 'http://localhost:8080/list'], ['inputurl' => 'http://localhost:8080/input']);
    }

    public function list()
    {
        $list = new Display();
        $list->list_page();
        return view('list', ['listurl' => 'http://localhost:8080/list']);

        $config = new Config();
        echo '<html>
                    <head>
                      <meta charset="utf-8">
                      <title>一覧</title>
                    </head>
                    <body>';
        $list = glob($config -> get_file_directory() . '*.txt');
        $new_list = [];
        if (array_key_exists('search_title', $_POST) && $_POST['search_title'] != '') {
            foreach ($list as $value){
                //$valueにserch_titleがあるかどうか比較
                if (strpos($value , $_POST['search_title']) !== false){
                    //$new_listに検索条件と一致した項目を入れる
                    $new_list[] = $value;
                }
            }
        }else{
            $new_list = $list;
        }
        $list = $new_list;
    }

    public function contents()
    {
        $contents = new Display();
        $contents->contents_page();
    }

    public function delete()
    {
        $delete = new delete();
        $delete->delete_page();
    }

    public function login_page()
    {
        $login = new Login();
        $login->login_page();
    }

    public function login()
    {
        $login = new Login();
        $login->login();
    }

    public function logout()
    {
        $login = new Login();
        $login->logout_page();
    }
}