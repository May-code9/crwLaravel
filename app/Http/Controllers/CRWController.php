<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRWController extends Controller
{
    public function index() {
      $index = "current";
      return view('pages.index', compact('index'));
    }
    public function about() {
      $about = "current";
      return view('pages.about', compact('about'));
    }
    public function services() {
      $services = "current";
      return view('pages.services', compact('services'));
    }
    public function blog() {
      $blog = "current";
      return view('pages.blog', compact('blog'));
    }
    public function contact() {
      $contact = "current";
      return view('pages.contact', compact('contact'));
    }
}
