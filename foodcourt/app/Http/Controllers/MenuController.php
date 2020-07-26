<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->model = new Menu();
        $this->redirect = '/menus';
        $this->view = 'menu';
    }

    public function index()
    {
        $datas = $this->model->all();

        return view($this->view . '.index', compact('datas'));
    }
    public function create()
    {
        $category = Category::all();
        return view($this->view . '.create', compact('category'));
    }
    public function store(Request $request)
    {
        $this->model->create($request->all());
        return redirect($this->redirect);
    }
    public function edit($id)
    {
        $data = $this->model->find($id);
        return view($this->view . '.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $this->model->find($id)->update($request->all());
        return redirect($this->redirect);
    }
    public function delete($id)
    {
        $this->model->find($id)->delete();
        return redirect($this->redirect);
    }
}
