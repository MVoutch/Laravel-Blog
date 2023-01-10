<?php

namespace App\View\Components;

use App\Models\Tags;
use Illuminate\View\Component;

class TagComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag-component', [
            'tags' => Tags::all(),
            'currentTag' => Tags::where('slug', request(['tag']))->first()
        ]);
    }
}
