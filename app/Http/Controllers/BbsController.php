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