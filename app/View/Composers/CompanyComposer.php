<?php

namespace App\View\Composers;

use Illuminate\View\View;

class CompanyComposer
{
    public function compose(View $view)
    {
        $company = [
            'name' => 'Mi Empresa',
            'address' => 'Calle Falsa 123',
            'phone' => '555-1234',
        ];

        $view->with('company', $company);
    }
}