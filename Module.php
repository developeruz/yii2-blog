<?php

namespace linchpinstudios\blog;

class Module extends \yii\base\Module
{

    /**
     * controllerNamespace
     * 
     * (default value: 'linchpinstudios\blog\controllers')
     * 
     * @var string
     * @access public
     */
    public $controllerNamespace = 'linchpinstudios\blog\controllers';
    
    
    /**
     * layout
     * 
     * (default value: null)
     * 
     * @var mixed
     * @access public
     */
    public $layout = null;
    
    
    
    /**
     * publicComments
     * 
     * (default value: true)
     * 
     * @var bool
     * @access public
     */
    public $publicComments = true;
    
    
    
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
