<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use ExportLocalization;

class GameComposer
{
    public function __construct()
    {
        //
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('messages', ExportLocalization::export()->toFlat());
        // $view->with('loc', 'some messages');
    }
}
