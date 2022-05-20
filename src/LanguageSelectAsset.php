<?php
	
	namespace mardoc\LanguageSelect;
	
	use yii\web\AssetBundle;
	
	class LanguageSelectAsset extends AssetBundle
	{
		public $js = [];
		
		public $css = [
			'css/language-select.css',
		];
		
		public $depends = [];
		
		public function __construct($config = []){
			
			$config['sourcePath'] = __DIR__ . '/assets/';
			parent::__construct($config);
		}
	}