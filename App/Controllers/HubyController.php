<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Article;
use App\Models\HubyObsah;

class HubyController extends AControllerBase
{



    public function pridaj() {

        if (!isset($_POST['title'])) return null;

        $art = new \HubyObsah($_POST['nazov'], $_POST['jedlost'], $_POST['popis'], $_POST['obrazok']);
        $art->save();

        $this->redirectToIndex();



    }

    public function index()
    {
        return HubyObsah::getAll();

    }

    public function redirectToIndex()
    {
        header("Location: /Location: ?c=huby");
        die();
    }
}