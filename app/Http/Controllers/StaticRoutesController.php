<?php


namespace App\Http\Controllers;


class StaticRoutesController extends Controller
{
    //fuxed
    public function index() {
        return view('static.index.index');
    }
    //fixed
    public function puppies() {
        return view("static.puppiesPage.puppiesPage");
    }

    public function category() {
        return view('static.categoryPage.category');
    }
    //fixed
    public function register() {
        return view('static.auth.register');
    }
    //fixed
    public function login() {
        return view('static.auth.login');
    }
    //fixed
    public function password_reset() {
        return view('static.auth.password_reset');
    }
    //fiexd
    public function dashboard_admin() {
        return view('static.dashboardPage.dashboard_admin');
    }
    //fixed
    public function announcement_create() {
        return view('static.dashboardPage.announcement');
    }
}