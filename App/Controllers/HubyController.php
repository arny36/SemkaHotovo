<?php


namespace App\Controllers;


use App\Core\AControllerBase;

use App\Models\HubyObsah;

class HubyController extends AControllerBase
{

    public function index()
    {
        return HubyObsah::getAll();

    }

    public function pridaj()
    {

        if (!isset($_POST['nazov'])) {
            return null ;
        } else {



        $art = new HubyObsah($_POST['nazov'], $_POST['jedlost'], $_POST['popis'], $_POST['obrazok']);
        $art->save();

        $this->redirectToIndex();
        return [];
        }

    }

    public function vymaz() {
        if (isset($_GET['id'])) {
            $art = HubyObsah::getOne($_GET['id']);
            $art->delete();
        }
        $this->redirectToIndex();

    }

    public function opravObrazok(){

        if (isset($_POST['obrazok'])) {
            $art = hubyObsah::getOne($_GET['id']);
            $art->setObrazok($_POST['obrazok']);
            $art->save();
            $this->redirectToIndex();
        } else {
            $art = hubyObsah::getOne($_GET['id']);
        }

        return [];

    }
    public function opravText(){

        if (isset($_POST['popis'])) {
            $art = hubyObsah::getOne($_GET['id']);
            $art->setPopis($_POST['popis']);
            $art->save();
            $this->redirectToIndex();
        } else {
            $art = hubyObsah::getOne($_GET['id']);
        }

        return [];

    }


    public function redirectToIndex()
    {
        header("Location: http://localhost/Semka%20vamz?c=huby");
        die();
    }
}