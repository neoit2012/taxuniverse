<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Service;

class NavigationComposer
{
    public function compose(View $view)
    {
        // Fetch services grouped by category for the mega menu
        // We prioritize 'Startup' and 'Registrations' as they are key
        $menuCategories = [
            'Startup' => Service::where('category', 'Startup')->get(),
            'Registrations' => Service::where('category', 'Registrations')->get(),
            'Trademark' => Service::where('category', 'Trademark')->get(),
            'GST' => Service::where('category', 'GST')->get(),
            'Income Tax' => Service::where('category', 'Income Tax')->get(),
            'MCA' => Service::where('category', 'MCA')->get(),
            'Compliance' => Service::where('category', 'Compliance')->get(),
            'HR & Payroll' => Service::where('category', 'HR & Payroll')->get(),
            'Global' => Service::where('category', 'Global')->get(),
        ];

        $view->with('menuCategories', $menuCategories);
    }
}
