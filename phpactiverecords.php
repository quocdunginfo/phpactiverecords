<?php
/*
Plugin Name: phpactiverecords
*/
//expose phpactive record class to global for other plugin using
require_once QdPhpactiverecords::getPluginDirPath() . 'src/ActiveRecord.php';
class QdPhpactiverecords
{
    public function __construct()
    {
        //load active record
        $this->init();
    }
    public static function getPluginDirPath()
    {
        return plugin_dir_path( __FILE__ );
    }
    private function init()
    {

    }
    public static function getCon()
    {
        if(QdPhpactiverecords::$con==null)
        {
            QdPhpactiverecords::$con = array(
                'development' => 'mysql://'.DB_USER.':'.DB_PASSWORD.'@'.DB_HOST.'/'.DB_NAME,
                'production' => 'mysql://'.DB_USER.':'.DB_PASSWORD.'@'.DB_HOST.'/'.DB_NAME.'?charset=utf8'
            );
        }
        return QdPhpactiverecords::$con;
    }
    public static $con = null;
}
$QdPhpactiverecords = new QdPhpactiverecords();


//must issue a "use" statement in your closure if passing variables
/*
$conn = QdPhpactiverecords::getCon();
ActiveRecord\Config::initialize(function($cfg) use ($conn)
{

    $model_dir = QdPhpactiverecords::getPluginDirPath().'models';
    $cfg->set_model_directory($model_dir);
    $cfg->set_connections($conn);

    # default connection is now production
    $cfg->set_default_connection('production');

});
echo QdRoot::first()->name;
*/
//Tested Work OK here

