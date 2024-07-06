<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MessageController extends Controller
{
    public function index(): View
    {
        // メッセージテーブルのレコードを全件取得
        $messages = Message::all();

        // messagesというキーで、ビューに渡す
        return view('message/index', ["messages" => $messages]);
    }
}
