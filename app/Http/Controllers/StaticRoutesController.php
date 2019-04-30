<?php


namespace App\Http\Controllers;


class StaticRoutesController extends Controller
{
    public function index() {
        return view('static.index.index');
    }

    public function puppies() {
        return view("static.puppiesPage.puppiesPage");
    }

    public function category() {
        return view('static.categoryPage.category');
    }

    public function register() {
        return view('static.auth.register');
    }

    public function login() {
        return view('static.auth.login');
    }

    public function password_reset() {
        return view('static.auth.password_reset');
    }


    public function dashboard_admin() {
        return view('static.dashboardPage.dashboard_admin');
    }

    public function announcement_create() {
        return view('static.dashboardPage.announcement');
    }
}