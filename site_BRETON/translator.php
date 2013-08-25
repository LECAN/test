<?php


class Translator{

	private $files;
	
	public function __construct($file_tab=array()){
		$this->addFiles($file_tab);
		
		$locale = 'en'; // Pretend this came from the Accept-Language header
		$locale_dir = './locale'; // your .po and .mo files should be at $locale_dir/$locale/LC_MESSAGES/messages.{po,mo}

		putenv("LANGUAGE=$locale");
		bindtextdomain('message', $locale_dir);
		textdomain('message');
				
		setlocale(LC_ALL, 'en');
		//bindtextdomain ("messages", "./locale");

		//textdomain ("messages");*/
		echo dgettext("message","home"), "\n"; 
	}
	
	public function addFiles($file_tab){
		if(is_string($file_tab)){
			$file_tab = array( $file_tab );
		}
		
		$this->files = $file_tab;
		
	
	}


	public function translate(){
		//$locale = setlocale  (LC_ALL,"0");
		
	 
		echo _("foo"), "\n";
		
	}	


}