<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Services\FormService;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $contacts = Contactform::select('id', 'name', 'title', 'created_at')
        // ->get();

        // 上記のページネーション対応版
        // $contacts = Contactform::select('id', 'name', 'title', 'created_at')
        // ->paginate(20);

        // さらに検索対応版
        $search = $request->search;
        $query = ContactForm::search($search); // なぜscopeSearchではなく？
        $contacts = $query->select('id', 'name', 'title', 'created_at')
        ->paginate(20);

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request) // ここでバリデーションを読み込む
    {
        // dd($request, $request->name);
        ContactForm::create([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'url' => $request->url,
            'gender' => $request->gender,
            'age' => $request->age,
            'inquiry' => $request->inquiry,
        ]);
        return to_route('contacts.index'); // to_route: リダイレクトのヘルパ関数
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = ContactForm::find($id);
        $gender = FormService::checkGender($contact);
        $age = FormService::selectAge($contact);
        return view('contacts.show', compact('contact', 'gender', 'age'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = ContactForm::find($id);
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = ContactForm::find($id);
        $contact->name = $request->name;
        $contact->title = $request->title;
        $contact->email = $request->email;
        $contact->gender =  $request->gender;
        $contact->age = $request->age;
        $contact->inquiry = $request->inquiry;
        $contact->save();

        return to_route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactForm::find($id);
        $contact->delete();

        return to_route('contacts.index');
    }
}
