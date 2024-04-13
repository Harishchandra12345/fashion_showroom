<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class product_category extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $themePrice="",
        public string $themePic="",
        public string $rating="0",
        public string $themename="",
        public string $developername="",
        public string $totaltheme="",
    )
    {
        $this->$themePrice = $themePrice;
        $this->$themePic = $themePic;
        $this->rating = $rating;
        $this->$themename = $themename; 
        $this->$developername = $developername;
        $this->$totaltheme=  $totaltheme;   
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product_category');
    }
}
