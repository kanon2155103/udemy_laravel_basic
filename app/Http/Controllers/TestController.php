<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    // dd('test');
    public function index() {
        // Eloquent(エロクアント)
        $values = Test::all(); // コレクションがとれる

        $count = Test::count(); // カウント(数値)しかとれない

        $first = Test::findOrFail(1); // モデルのインスタンスがとれる この1はデータベースのIDの番号なので0始まりではない

        $whereBBB = Test::where('text', '=', 'bbb')->get(); // コレクションがとれる get()をつけないと指定はしていても取得はしていない状態

        // クエリビルダ
        $queryBuilderGet = DB::table('tests')->where('text', '=', 'bbb') // コレクションがとれる エロクアントで取得したときとパスが違う
        ->select('id', 'text')
        ->get();

        $queryBuilderFirst = DB::table('tests')->where('text', '=', 'bbb') // データベースの内容がとれる
        ->select('id', 'text')
        ->first();

        dd($values, $count, $first, $whereBBB, $queryBuilderGet, $queryBuilderFirst);
        return view('tests.test', compact('values'));
    }
}
