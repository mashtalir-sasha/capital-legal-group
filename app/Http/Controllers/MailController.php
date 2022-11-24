<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $subject = 'Нова заявка з сайту spg.kiev.ua';

        if ( $request->mailto != "" ) {
            $mailto = $request->mailto;
        } else {
            $mailto = 'mashtalir_sasha@ukr.net';
        }

        if ( $request->title != "" ) {
            $title = $request->title;
        } else {
            $title = NULL;
        }

        if ( $request->name != "" ) {
            $name = $request->name;
        } else {
            $name = NULL;
        }

        if ( $request->phone != "" ) {
            $phonenum = $request->phone;
        } else {
            $phonenum = NULL;
        }

        if ( $request->question != "" ) {
            $question = $request->question;
        } else {
            $question = NULL;
        }

        if ( $request->page != "" ) {
            $page = $request->page;
        } else {
            $page = NULL;
        }

        if ( $request->expert != "" ) {
            $expert = $request->expert;
        } else {
            $expert = NULL;
        }

        $text = "Форма: $title <br><br>";

        if ($expert != NULL) { $text .= "Зв'язатись з $expert <br>"; }
        if ($name != NULL) { $text .= "Ім'я: $name <br>"; }
        if ($phonenum != NULL) { $text .= "Телефон:  $phonenum <br>"; }
        if ($question != NULL) { $text .= "Запит:  $question <br>"; }
        if ($page != NULL) { $text .= "<hr><br> Заявку залишено на сторінці:  <a href='$page' target='_blank'>$page</a> <br>"; }

        \Mail::send([], [], function ($message) use ($text, $subject, $mailto) {
            $message->setBody($text, 'text/html');
            $message->subject($subject);
            $message->to($mailto);
        });
        return exit("ok");
    }
}
