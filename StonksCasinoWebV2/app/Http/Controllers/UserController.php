<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\transaction;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function edit() {

   }

   public function update(Request $request){

      $tokens =  $request->tokens;
      
      $update = $request->validate([
         'tokens' => 'required|integer|between:1,1000000',
         'g-recaptcha-response' => 'required|captcha',
      ]);

      $update = [
          'token' => $tokens + Auth::user()->token,
      ];
     
      
      transaction::create([
         'userid' => Auth::user()->id,
         'tokens' => $tokens,
         'sender' => 'deposit or debit, Website',
         'tokensBefore' => Auth::user()->token,
         'tokensAfter' => $tokens + Auth::user()->token,

         
     ]);
     User::find(Auth::user()->id)->update($update);
      return redirect()->route('account');
   }
   
}
