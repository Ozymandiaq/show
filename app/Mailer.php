<?php

namespace App;
use Mail;
use Auth;
use Session;
use Redirect;
use Image;
use Storage;

class Mailer{

    public function sendEmailReminder($data)
    {
        Mail::send([], $data, function ($message) use ($data) {
            if (isset($data['mail'])) {
                $message->to([$data['mail'],'showcultura@mail.ru']);
            }
            else
                $message->to([env('MAIL_USERNAME'),'showcultura@mail.ru']);
            $message->subject($data['subject']);
            $message->setBody($data['content']);
            $message->from(env('MAIL_USERNAME'));
            if (isset($data['file'])) {
                $message->attach($data['file']->getRealPath(), array(
                    'as' => 'file.' . $data['file']->getClientOriginalExtension(),
                    'mime' => $data['file']->getMimeType())
                );
            }

        });

        return "Success";
    }
}


?>
