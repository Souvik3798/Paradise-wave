<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $to = "souvikbarua63@gmail.com";
        $from = $request->email;
        $name = $request->name;
        $subject = $request->subject;
        $number = $request->number;
        $cmessage = $request->message;

        $headers = "From: $from";
        $headers = "From: " . $from . "\r\n";
        $headers .= "Reply-To: ". $from . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $subject = "You have a message from $name.";

        $logo = 'img/logo.png';
        $link = '#';

        $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
        $body .= "<table style='width: 100%;'>";
        $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
        $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
        $body .= "</td></tr></thead><tbody><tr>";
        $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
        $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
        $body .= "</tr>";
        $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
        $body .= "<tr><td><strong>Customer Number:</strong> {$number}</td></tr>";
        $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr><br>";
        $body .= "</tbody></table>";
        $body .= "</body></html>";

        $send = mail($to, $subject, $body, $headers);

        if($send){
            return redirect()->back()->with('success','Mail Sent Successfully');
        }
        else{
            return redirect()->back()->with('error','Mail Not Sent');
        }
    }
}
