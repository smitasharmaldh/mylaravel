<?php

use App\Events\websocketdemoevent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/mail', function () {
    $to_name='smita';
    $to_email="angeltiwarismita@gmail.com";
    $data=array('name'=>'smita','body'=>"testing mail");
    Mail::send('mail',$data,function($message) use($to_name,$to_email){
        $message->to($to_email)->subject('testing');
    });
    echo "mail has been sent";
});
Route::get('/sample', function () {
    return response()->json(['name'=>'samita'],400);
});

Route::view('/','welcome');

Route::view('/demomiddleware', 'sample');
Route::view('/demo','sample');
Route::view('/formview',"form")->middleware('ageChecker');
Route::view('/flashsession',"form");
Route::view('/fs',"sessionview");
Route::post('/Formcontrollers',"Formcontrollers@formsubmit");
Route::get('database',"Formcontrollers@formdata");
Route::get('pagination',"Formcontrollers@paginationdata");
Route::view('/masterpageview',"child1");
Route::view('/fileuploadview',"fileupload");
Route::post('/fileupload',"Formcontrollers@fileuploading");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/auth1',"laravelauthman@authenticate")->name("myroute");
Route::view('/authform',"formdemo");
Route::view('/authview',"authview");

Route::view('chatindex',"chatindex");
Route::post('chatregister','ChatController@register');
Route::view('chatlogin',"chatlogin");
Route::post('chatloginchk','ChatController@userloginchk');
Route::get('chatlogout','ChatController@userlogout');
//Route::get('chatfriends','ChatController@chatting');
Route::view('chatpage',"chatpage");

$router->get('/chatfriends/{frnd}',[
    'uses' => 'ChatController@chatfriends',
    'as'   => 'cf'
]);



    Route::get('/home',"restrocontroller@index")->name("home");
Route::get('/lists',"restrocontroller@lists");
Route::post('/registration',"restrocontroller@registration");
Route::get('/register',"restrocontroller@register");
Route::get('/userlogin',"restrocontroller@userlogin")->name("userlogin");
Route::get('/userlogout',"restrocontroller@userlogout");

Route::post('userloginchk',"restrocontroller@userloginchk");
Route::view('/test',"test");

Route::post('/logincontroller',"LoginController@index");

Route::get('/', function () {
    broadcast(new websocketdemoevent('some data'));
    return view('welcome');
});
*/

Route::get('/', function () {
    broadcast(new WebsocketDemoEvent('some data'));

    return view('welcome');
});

Route::get('/chats', 'ChatsController@index');

Route::get('/messages', 'ChatsController@fetchMessages');
Route::post('/messages', 'ChatsController@sendMessage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
