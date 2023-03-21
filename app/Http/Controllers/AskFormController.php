<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AskForm;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Log;
use App\Http\Requests\ShowAskForm;
use App\Http\Requests\AdminAskForm;

class AskFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TOP画面
        return view('ask.index');
    }

    public function require()
    {
        //用件選択画面
        return view('ask.require');
    }

    public function login()
    {
        //用件選択画面
        return view('ask.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
        return view('ask.create');
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show_admin(AdminAskForm $request)
    {
        $inputs = $request->all();
        return view('ask.show_admin', ['inputs' => $inputs]);
    }


    public function store(Request $request)
    {
        $askform = new AskForm;

        $askform->your_name = $request->input('your_name');
        $askform->my_number = $request->input('my_number');
        $askform->password = $request->input('password');
        $askform->birthday = $request->input('birthday');
        $askform->address = $request->input('address');
        $askform->gender = $request->input('gender');
        $askform->save();

        return redirect('ask/show_edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */    
    public function show_edit(Request $request){
        $edit_users = DB::table('ask_forms')
            ->select('id','my_number','your_name')
            ->get();

        return view('ask.show_edit',compact('edit_users'));
    }


    public function show_detail($id){
        $users = AskForm::find($id);
        return view('ask.show_detail',compact('users'));
    }

    public function edit($id){
        $users = AskForm::find($id);
        return view('ask.edit',compact('users'));
    }

    public function edit_confirm(Request $request,$id)
    {
        $inputs = $request->all();
        return view('ask.edit_confirm',compact('inputs'));
    }

    public function update(Request $request, $id)
    {
        $askform = AskForm::find($id);

        $askform->your_name = $request->input('your_name');
        $askform->my_number = $request->input('my_number');
        $askform->password = $request->input('password');
        $askform->birthday = $request->input('birthday');
        $askform->address = $request->input('address');
        $askform->gender = $request->input('gender');
        $askform->save();

        return redirect('ask/show_edit');
    }

    public function show(ShowAskForm $request){
        $my_number = $request->input('my_number');
        $users = DB::table('ask_forms')
            ->when($my_number, function ($query) use ($my_number){return $query
            ->where('my_number', $my_number);})
            ->get();

        return view('ask.show',compact('users'));
    }
    
    public function consult(Request $request){
        $my_number = $request->input('my_number');

        $users = DB::table('ask_forms')
            ->when($my_number, function ($query) use ($my_number){
                return $query->where('my_number', $my_number); 
                })->first();

        $your_name = $users->your_name;

        $call = "マイナンバー".$my_number." ".$your_name."さんからご相談が入っています。担当者は確認してください。";
        $msg = ['body' => $call];

        $room = env('CHATWORK_ROOM');
        $token = env('CHATWORK_TOKEN');
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array('X-ChatWorkToken:'.$token));
        curl_setopt($ch, CURLOPT_URL, "https://api.chatwork.com/v2/rooms/".$room."/messages");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($msg, '', '&'));
        $result = curl_exec($ch);
        curl_close($ch);

        return view('ask.consult');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $askform = AskForm::find($id);
        $askform->delete();
        return redirect('ask/show_edit');
    }
}
