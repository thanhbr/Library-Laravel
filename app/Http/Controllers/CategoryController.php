<?php

namespace App\Http\Controllers;
use App\Components\Recusive;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }


    public function getCategory($parenId)
    {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parenId);
        return $htmlOption;
    }

    public function index()
    {
        $categories = $this->category->latest()->paginate(5);
        return view('shop.category.index', compact('categories'));
    }


    public function create()
    {
        $htmlOption = $this->getCategory($parenId = '');
        return view('shop.category.add', compact('htmlOption'));

    }


    public function store(Request $request)
    {
        $this->category->create([
            'name' => $request->name,
            'paren_id' => $request->paren_id,
            'slug' => str_slug($request->name)
        ]);

        return redirect()->route('categories.index');
    }


    public function edit($id)
    {
        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->paren_id);
        return view('shop.category.edit', compact('category', 'htmlOption'));
    }


    public function update($id, Request $request)
    {
        $this->category->find($id)->update([
            'name' => $request->name,
            'paren_id' => $request->paren_id,
            'slug' => str_slug($request->name)
        ]);

        return redirect()->route('categories.index');
    }


    public function delete($id)
    {
        $this->category->find($id)->delete();
        return redirect()->route('categories.index');
    }
}
