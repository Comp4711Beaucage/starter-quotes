<?php

class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

        /*opens the just one view and populates it with the data from the last
         * item in quotes
         */
	function index()
	{
            $this->data['pagebody'] = 'justone';//the view to load       
            $record = $this->quotes->last();//the last entry in quotes
            $this->data['who'] = $record['who'];
            $this->data['mug'] = $record['mug'];
            $this->data['what'] = $record['what'];
            $this->render();

	}

}

