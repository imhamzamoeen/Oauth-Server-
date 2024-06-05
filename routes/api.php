<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:api', 'scope:check-user,place-orders'])->get('/user', function (Request $request) {
    // if ($request->user()->tokenCan('check-user')) {
        return $request->user();

    // }
});




/* Notes
  first call hm asisy
  http://server.test/oauth/authorize?client_id=1&redirect_uri=http://facebook.test/callback&response_type=code&scope&state=asdfasdfasdfasdfasdfasdfasdfasdfasdfasdf
  route p krty woh hmien phr hmary given riderect uri.. jo hmary pas server p register hota us p redirect krta with access_code
 fir hm woh code ek aur url p send krty
 http://server.test/oauth/token
 with client id,secret, above got code , redirect uri and grant type(authorixation code for access_token  and refresh token for refresh token )
 fir hmien woh access token mil jata h
 jisko hm use kr ky apis call kr sakty


*/
