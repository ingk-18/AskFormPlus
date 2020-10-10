<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AskForm;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Log;
use App\Http\Requests\ShowAskForm;

class AskFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ask.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */    
    

    public function show(ShowAskForm $request){

        $my_number = $request->input('my_number');

        $users = DB::table('ask_forms')
        ->when($my_number, function ($query) use ($my_number){return $query
        ->where('my_number', $my_number);})
        ->get();
        
        //whenで$my_numberがあるとき、whereでクエリと合致しているデータをgetで取得する

        return view('ask.show',compact('users'));        
        //dd($users);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
