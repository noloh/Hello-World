<?php
//Includes NOLOH for your project. This is all you need to do to use NOLOH.
require_once('NOLOH/NOLOH.php');

/* Your application must have one class that extends WebPage,
   this will be used as the starting point for your application. */
class HelloWorld extends WebPage
{
	/* Constructor to your class, this is automatically called
	   when a new instance of HelloWorld is created. NOLOH creates
	   this initial instance for you. */
	function __construct()
	{
		/* Calls the WebPage's constructor. This is done to ensure
		   the WebPage is properly instantiated. The paramater
		   specifies a string to be displayed in the title bar */
		parent::WebPage('Hello World in NOLOH');
		/* Creates an instance of NOLOH's Label object, giving it
		   the Text 'Hello World' and Left and Top coordinates
		   of 100 pixels. The Label object is stored to a local
		   variable named $label. */
		$label = new Label('Hello World', 100, 100);
		/* Adds the Label object to the WebPage's Controls ArrayList.
		   Without this line, a Label is merely created, but will
		   not be displayed. */
		$this->Controls->Add($label);
	}
}
?>