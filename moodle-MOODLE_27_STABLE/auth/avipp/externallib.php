<?php

/**
 * PLUGIN external file
 *
 * @package    local_PLUGIN
 * @copyright  2017 Rosa Muñoz V
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once($CFG->libdir . "/externallib.php");

class local_avipp_external extends external_api {

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function loginAvippF_parameters()
    {
        // FUNCTIONNAME_parameters() always return an external_function_parameters().
        // The external_function_parameters constructor expects an array of external_description.
        return new external_function_parameters(
                // a external_description can be: external_value, external_single_structure or external_multiple structure
                array('userName' => new external_value(PARAM_TEXT, 'nombre de usuario')
        );
    }

    /**
     * The function itself
     * @return string welcome message
     */
    public static function loginAvippF($userName) {

        //Parameters validation
        /*$params = self::validate_parameters(self::FUNCTIONNAME_parameters(),
                array('PARAM1' => $PARAM1));*/

        $vacio = 0;
        if(!empty($userName))
        {
          $vacio = 1;
        }


        return $vacio;
    }

    /**
     * Returns description of method result value
     * @return external_description
     */
    public static function loginAvippF_returns()
    {
        return new external_value(PARAM_TEXT, 'Retorna siempre la url de la segunda parte del login');
    }
