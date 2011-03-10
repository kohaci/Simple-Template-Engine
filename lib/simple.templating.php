<?php

define('EXT'        , '.php') ;
define('VIEWPATH'   , 'views/') ;

/**
 * Load View
 *
 * @access	public
 * @param	string $file file location (no extension (.php))
 * @param	string $data array nor not
 * @param	mixed  $string print results (FALSE) or save results to string (TRUE)
 * @return	string
 */

function load_view($file,$data = NULL,$string = FALSE) {
    if (is_array($data)) {
        // this is like "value to variable", see my artcle on http://kohaci.com/2010/03/24/value-to-variable.html
        // check more on http://php.net/manual/en/function.extract.php
        extract($data) ;
    }

    ob_start();
    include ( VIEWPATH . $file . EXT );
    $content = ob_get_clean();

    if ($string)    return $content ;
    else            echo $content ;
}

/* End of file simple.templating.php */
/* Location: ./lib/simple.templating.php */