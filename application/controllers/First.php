<?php

class First extends Application {

	function __construct()
	{
		parent::__construct();
	}

        /*opens the just one view and populates it with the data from the first
         * item in quotes
         */
	function index()
	{
                $this->data['pagebody'] = 'justone';//the view to load
                $record = $this->quotes->first();//the frirst quotes entry
                $this->data['who'] = $record['who'];
                $this->data['mug'] = $record['mug'];
                $this->data['what'] = $record['what'];
		$this->render();

	}
        
        //Function for wildcard route 'sleep'
        function zzz()
        {
            $this->data['pagebody'] = 'justone';
            $source = $this->quotes->get(1);
            $this->data['who'] = $source['who'];
            $this->data['what']= $source['what'];
            $this->data['mug']= $source['mug'];
            $this->render();
        }
        
        //Function for wildcard route /show/*
        //@param $id: Wildcard # match from *, calls id from mock DB
        function gimme($id)
        {
            $this->data['pagebody'] = 'justone';
            $source = $this->quotes->get($id);
            $this->data['who'] = $source['who'];
            $this->data['what']= $source['what'];
            $this->data['mug']= $source['mug']; 
            $this->render();
        }
}
