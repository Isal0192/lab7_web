<?php 
namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index(){
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel', 'title'));
    }

    public function view($slug){
        $model = new ArtikelModel();
        $artikel = $model->where(["slug" => $slug])->first();

        if(!$artikel){
            throw PageNotFoundException::ForPageNotFound();
        }
        
        $title = $artikel['judul'];
        return view('artikel/detail', compact('artikel', 'title'));
    }
    
    public function admin_index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/admin_index', compact('artikel', 'title'));
    }
    
    public function about()
    {
        return view('artikel/about', [
            "title" => "ini berisi Tentang about",
            "conten" => "consectetur adipisicing elit. Aperiam architecto perferendis repudiandae
                possimus numquam. Eligendi itaque sapiente dolore nemo esse iusto nihil mollitia? Ut, suscipit? <p></p>"
        ]);
    }
}   