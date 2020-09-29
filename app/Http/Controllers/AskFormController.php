<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AskForm;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Log;

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
    

    public function show(Request $request){

        $my_number = $request->input('my_number');

        $users = DB::table('ask_forms')
        // ask_formsテーブルの中から
        ->when($my_number, function ($query) use ($my_number){
            //インプットしたマイナンバーとDBのマイナンバーが一緒の時
            return $query->where('my_number', $my_number); 
            //クエリのマイナンバーと一致する人を取得する。
            })->get();

        return view('ask.show',compact('users'));        
        //dd($users);
    }
    
    public function consult(Request $request){

    $my_number = $request->input('my_number');

    $users = DB::table('ask_forms')
    ->when($my_number, function ($query) use ($my_number){
        return $query->where('my_number', $my_number); 
        })->get();

        // $your_name = $users->your_name;
        // dd($your_name);
    
        // @foreach($users as $user)
        // {{ $user->my_number }}
        // {{ $user->your_name }}
        // {{ $user->birthday }}
        // @endforeach


    $msg = ['body' => 'テストメッセージ'];

    $room = '200722280'; 

    $token = '80a8dffe4be1ee29583495844541d87e';
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER,
                array('X-ChatWorkToken:'.$token));
    curl_setopt($ch, CURLOPT_URL, "https://api.chatwork.com/v2/rooms/200722280/messages");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($msg, '', '&'));
    $result = curl_exec($ch);
    curl_close($ch);

    //dd($result);

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
