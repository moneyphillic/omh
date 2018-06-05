<?php

namespace AppBundle\Service;

use SplFileInfo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Swift_Message;

class Helper extends Controller
{

    public function uploadSingleImage($file) {
        $extension = new SplFileInfo($file->getClientOriginalName());
//        $filename = md5($file->getClientOriginalName()) . $extension;
        $filename = $this->generateRandomString(32) . $extension;

        $file->move('upload/', $filename);

        return $filename;
    }

    public function sendMail($data) {
    	$message = (new Swift_Message($data['name'] . ' sent you a message from omarhamza.com'))
            ->setFrom($data['mail'])
            ->setTo($data['mailto'])
            ->setBody(
                $data['message'],
                'text/html'
            )
        ;
        $this->get('mailer')->send($message);
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}