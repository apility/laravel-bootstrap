<?php

namespace Bootstrap\View\Components;

class Search extends Component
{
    public $action;
    public $method;
    public $placeholder;
    public $label;

    /**
     * @param Link|mixed $link
     */
    public function __construct($action = '?', $method = 'GET', $placeholder = 'Search...', $label = 'Search')
    {
        parent::__construct();
        $this->action = $action;
        $this->method = $method;
        $this->placeholder = $placeholder;
        $this->label = $label;
    }

    public function render()
    {
        return view('bootstrap::search');
    }
}
