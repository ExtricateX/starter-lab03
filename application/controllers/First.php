<?php

class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();

        /*$this->data['who'] = $source['who'];
        $this->data['mug]'] = $source['mug'];
        $this->data['what]'] = $source['what'];
        */
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
}