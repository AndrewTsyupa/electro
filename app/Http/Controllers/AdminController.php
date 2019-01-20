<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tovar;
use App\Values;
use Faker\Provider\File;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function admin(Request $request)
    {
        return view('/add_product');
    }

    public function listProduct()
    {
        $products = Tovar::all()->sortBy('id');

        return view('/admin/list', ['products' => $products]);
    }


    public function newProduct()
    {
        $categorys = Category::all();
        return view('/admin/add_product', ['categorys' => $categorys]);
    }

    public function newCategory()
    {

        return view('/admin/add_category');
    }

    public function categoryView(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $products = Tovar::where('category_id', $id)->get();

        return view('/admin/list_category', ['products' => $products, 'category' => $category]);
    }


    public function addProduct(Request $request)
    {
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

    public function addCategoryProduct(Request $request)
    {
        $category = new Category();
        $category->name = Input::get('name');
        $category->save();

        return redirect('/');
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
        Tovar::where('id', $id)->delete();
        Values::where('tovari_id', $id)->delete();

    }
}


