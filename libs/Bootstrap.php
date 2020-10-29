<?php 

class Bootstrap{
    
    private $_url = null;
    private $_controller = null;

    private $_controllerPath = 'controllers/'; // always including trailing slash 
    private $_modelPath = 'models/'; // always including trailing slash 
    private $_erorFile = 'eror.php';
    private $_defaultFile = 'index.php';
	

    public function init(){
        $this->_getUrl();
       // load the default controller if no URL is set 
        // e.g: Visit http:://localhost it loads default controller 
        if (empty($this->_url[0])) {
            $this->_loadDefaultController();
            return false;
        }

        $this->_loadExistingController();

        $this->_callControllerMethod();
    }
    // set custom path to controllers 
    public function setControllerPath($path){
        $this->_controllerPath = trim($path, '/') . '/';
    }
    // set custom path to models  
    public function setModelPath($path){
        $this->_modelPath = trim($path, '/') . '/';
    }
    // set custom path to error file 
    public function setErrorFile($path){
        $this->_erorFile = trim($path, '/') . '/';
    }
    // set custom path to default file 
    public function setDefaultFile($path){
        $this->_defaultFile = trim($path, '/') . '/';
    }

    /*
    * fetch the get from URL 
    */
    private function _getUrl(){
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->_url = explode('/', $url);
    }
    private function _loadDefaultController(){
        require $this->_controllerPath . $this->_defaultFile;
            $this->_controller = new Index();
            $this->_controller->index();
    }
    private function _loadExistingController(){
        $file = $this->_controllerPath . $this->_url[0] . '.php';
        if (file_exists($file)) {
            require $file;
            $this->_controller = new $this->_url[0];
            $this->_controller->loadModel($this->_url[0], $this->_modelPath);
        }
        else {
            $this->_eror();    
            return false; 
        } 
    }

    // http://localhost/controller/method/(param)/(param)/(param)
        //url[0] = controller 
        //url[1] = method 
        //url[2] = param 
        //ur[3] = param 
        // url[4] = param 
    private function _callControllerMethod(){
        $length = count($this->_url);
        // Make sure the method we are calling is exists 
        if ($length > 1) {
              if (!method_exists($this->_controller, $this->_url[1])) {
                      $this->_eror();
                }
        }
        
        // Determine what to load 
        switch ($length) {
            case 5:
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3],$this->_url[4]);
                break;
             case 4:
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                break;
             case 3:
                $this->_controller->{$this->_url[1]}($this->_url[2]);
                break;
             case 2:
                $this->_controller->{$this->_url[1]}();
                break;
            
            default:
                 $this->_controller->index();
                break;
        }
    }

 
   //  THIS display an error page if nothing exisist 
    private function _eror(){
        require $this->_controllerPath . $this->_erorFile;
        $this->_controller = new Eror();
        $this->_controller->index();
        exit();
    }
}