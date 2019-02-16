<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Tovar;
use App\Values;
use Faker\Provider\File;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\In;


class AdminController extends Controller
{
//    public function admin(Request $request)
//    {
//        return view('/add_product');
//    }
    public function admin(Request $request)
    {
        return view('/admin/list_admin');
    }

    public function listProduct()
    {
        $products = Tovar::all()->sortBy('id');

        return view('/admin/list', ['products' => $products]);
    }


    public function newProduct(Request $request)
    {
        if ($request->isMethod('post')) {
            $tovar = new Tovar();
            $tovar->tovar_name = Input::get('tovar_name');
            $tovar->opis = Input::get('opis');
            $tovar->price = Input::get('price');
            $tovar->category_id = $request->get('category');
            $tovar->image = [];
            $tovar->save();

            $data = [];

            if ($request->hasFile('file')) {

                foreach ($request->file('file') as $image) {

                    $name = $image->getClientOriginalName();
                    $image->move(public_path() . "/images/tovar/$tovar->id", $name);
                    $data[] = $name;
                }
            }
            $tovar->image = $data;
            $tovar->save();


            $arr = Input::get('value');
            if ($arr != null) {
                foreach ($arr as $keys => $values) {
                    $value = new Values();
                    $value->name = $values['name'];
                    $value->value = $values['value'];
                    $value->tovari_id = $tovar->id;
                    $value->save();
                }
            }

            return redirect('/');
        }


        $categorys = Category::all();
        return view('/admin/add_product', ['categorys' => $categorys]);
    }

    public function newCategory(Request $request)
    {
        if ($request->isMethod('post')) {
            $category = new Category();
            $category->name = Input::get('name');
            $category->save();

            return redirect('/');
        }
        return view('/admin/add_category');
    }

    public function newPage(Request $request)
    {
        if ($request->isMethod('post')) {

            $page = new Page();
            $page->name = Input::get('name');
            $page->url = Input::get('url');
            $page->content = Input::get('content');
            $page->save();

            return redirect('/');

        }
        return view('/admin/add_page');
    }

    public function pagesView(Request $request)
    {

        $page = Page::where('url', $request->getRequestUri())->first();

        if (!$page) {
            return redirect(route('home'));
        }

        $content = $page->content;

        return view('view_pages', ['content' => $content]);

    }

    public function categoryView(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $products = Tovar::where('category_id', $id)->get();

        return view('/admin/list_product_category', ['products' => $products, 'category' => $category]);
    }

    public function listPages(Request $request)
    {
        $pages = Page::all();


        return view('/admin/list_pages', ['pages' => $pages]);
    }

    public function editPages(Request $request, $id)
    {
        $pages = Page::findOrFail($id);
        if ($request->isMethod('post')) {

            $pages->url = $request->get('url');
            $pages->name = $request->get('name');
            $pages->content = $request->get('content');
            $pages->save();

            return redirect('/admin/list-pages');
        }

        return view('/admin/edit_page', ['pages' => $pages]);
    }

    public function listCategory(Request $request)
    {
        $categorys = Category::all();
        return view('/admin/list_category', ['categorys' => $categorys]);
    }


    public function editCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        if ($request->isMethod('post')) {
            $category->name = Input::get('name');
            $category->save();

            return redirect('/admin/list-category');
        }

        return view('/admin/edit_category', ['category' => $category]);

    }


    public function editProduct(Request $request, $id)
    {


        $tovar = Tovar::findOrFail($id);
        $category = Category::all();


        if ($request->isMethod('post')) {


            $tovar->tovar_name = Input::get('tovar_name');
            $tovar->opis = Input::get('opis');
            $tovar->price = Input::get('price');
            $tovar->category_id = $request->get('category');


            $data = [];

            if ($request->hasFile('file')) {

                foreach ($request->file('file') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move(public_path() . "/images/tovar/$id", $name);
                    $data[] = $name;
                }

                $tovar->image = $data;
            }

            $tovar->save();

            $arr = Input::get('value');  // передає властивості з сторінки

            if ($arr) {

                $val = Values::where('tovari_id', $id)->orderBy('id', 'desc')->get();
                // властивості збереженні в БД


                foreach ($arr as $vid => $values) {
                    $value = Values::find($vid);
                    if ($value) {
                        $value->name = $values['name'];
                        $value->value = $values['value'];
                        $value->save();
                    } else {
                        $valu = new Values();
                        $valu->name = $values['name'];
                        $valu->value = $values['value'];
                        $valu->tovari_id = $id;
                        $valu->save();
                    }


                }


                return redirect('/admin/view');
            }

        }


        return view('/admin/edit_product', ['tovar' => $tovar, 'category' => $category]);
    }


    public function updateImage(Request $request)
    {
        $id = $request->get('id');
        $tovar = Tovar::findOrFail($id);

        $colection_image = $tovar->image;
        $image = $request->get('image');

        foreach ($colection_image as $name => $value) {

            if ($image == $value) {
                unset($colection_image[$name]);


            }
        }

        $tovar->image = $colection_image;
        $tovar->save();


        return '';
    }

    public function deleteValues(Request $request)
    {
        $id = $request->get('id');
        Values::where('id', $id)->delete();

    }

    public function deleteProduct(Request $request)
    {
        $id = $request->get('productid');

        $path = public_path('images\tovar');

//        $path = storage_path('public\images\tovar\\' . $id . '\\');
//
//        $a = asset('storage/public/images/tovar/' . $id . '/');

//      $b = Storage::disk('local')->put('aaa.txt', 'Contents');
//        $b = '\images\tovar\14\\';

        $directories = Storage::directories($path . '\14');
        Storage::deleteDirectory($path . '\14');


        Tovar::where('id', $id)->delete();
        Values::where('tovari_id', $id)->delete();

        return '';
    }

    public function deleteCategory(Request $request)
    {
        $id = $request->get('category_id');
        Category::where('id', $id)->delete();
    }

    public function deletePage(Request $request)
    {
        $id = $request->get('page_id');
        Page::where('id', $id)->delete();
    }
}


