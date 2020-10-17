<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'postgresql-objective-96403';
$CFG->dbhost    = getenv('ec2-3-95-87-221.compute-1.amazonaws.com');
$CFG->dbname    = getenv('dekfu3lju68ui1');
$CFG->dbuser    = getenv('vpbzgxaqspzbst');
$CFG->dbpass    = getenv('cfeaf9f08ff535e3e5a46ce6e22197e445b544ce97cf3d8461965408036b0d2a');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('DATABASE_PORT'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://al-hidaya.herokuapp.com/');
$CFG->dataroot  = getenv('DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
