<?php
/*
Plugin Name: phpactiverecords
*/
class QdPhpactiverecords
{
    public function __construct()
    {
        //load active record
    }
    public function getPluginDirPath()
    {
        return plugin_dir_path( __FILE__ );
    }
    public static function  getInstance()
    {

    }
}
$hgytfrd45xdse32n = new QdPhpactiverecords();
//expose phpactive record class to global for other plugin using
require_once $hgytfrd45xdse32n->getPluginDirPath() . 'src/ActiveRecord.php';
$connections = array(
    'development' => 'mysql://'.DB_USER.':'.DB_PASSWORD.'@'.DB_HOST.'/'.DB_NAME,
    'production' => 'mysql://'.DB_USER.':'.DB_PASSWORD.'@'.DB_HOST.'/'.DB_NAME.'?charset=utf8'
);

# must issue a "use" statement in your closure if passing variables
ActiveRecord\Config::initialize(function($cfg) use ($connections)
{
    /*
    $model_dir = QD_PLUGIN_DIR.'src/models';
    $cfg->set_model_directory($model_dir);
    $cfg->set_connections($connections);

    # default connection is now production
    $cfg->set_default_connection('production');
    */
});
