<?php

class Wise extends Application {

	function __construct()
	{
		parent::__construct();
	}

        /*opens the just one view and populates it with the data from the first
         * item in quotes
         */
        
        function bingo(){
            $this->data['pagebody'] = 'justone';
            $source = $this->quotes->get(6);
            $this->data['who'] = $source['who'];
            $this->data['what']= $source['what'];
            $this->data['mug']= $source['mug']; 
            $this->render();
        }
}