<?php


namespace App\Http\Controllers;


class StaticRoutesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function puppies() {
        return view("static.puppiesPage.puppiesPage");
    }

    public function category() {
        return view('static.categoryPage.category');
    }

    public function announcement_create() {
        return view('static.dashboardPage.announcement');
    }
}
