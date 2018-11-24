<?php

namespace App\Http\Controllers;


use App\Model\Phone;
use App\Model\User;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function index()
    {
//        echo time().'<br>';
//        echo date('Y-m-d H:i:s', 4294967295).'<br>';
//        echo date('Y-m-d H:i:s', 2147483647).'<br>';
//        echo route('demo.demo', ['id' => 12]);

        DB::listen(function ($query) {
//            var_dump($query);
            echo $query->sql . '//' . $query->time . '<br>';
        });

//        $res = DB::table('user')->get();
//        $res = User::all();

//        $res = User::first();
//        var_dump($res->toArray());
//        $res->phone;
//        var_dump($res->toArray());

        $res = User::first()->phone;
        var_dump($res->toArray());
        $a = $res->filter(function ($value){
            var_dump($value);
        });
//        var_dump($a);

//        $res = Phone::first();
//        var_dump($res->toArray());
//        $res->user;
//        var_dump($res->toArray());

//        $a = collect([5,10,15]);
//        $a->filter(function ($value){
//            var_dump($value);
//        });
        exit();
    }

    public function demo()
    {
        return 10086;
    }
}