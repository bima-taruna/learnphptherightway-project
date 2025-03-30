<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index(): View
    {
        return View::make('index');
    }

    public function upload()
    {
        $filePath = STORAGE_PATH . '/' . $_FILES['transaction']['name'];
        if (move_uploaded_file($_FILES['transaction']['tmp_name'], $filePath)) {
            header('Location: /transactions');
            exit;
        } else {
            echo "File upload failed";
        }
    }
}
