<?php

/**
 * Pico subtemplate plugin
 *
 * @author Gilbert Pellegrom
 * @link http://picocms.org
 * @license http://opensource.org/licenses/MIT
 */
class Pico_Subtemplate {

	public function before_read_file_meta(&$headers)
	{	
		$headers['subtemplate'] = 'Subtemplate';
	}
	
	public function before_render(&$twig_vars, &$twig, &$template)
	{
		if (!empty($twig_vars['meta']['subtemplate'])) {
			$subtemplate = $twig_vars['meta']['subtemplate'];
			if (file_exists($twig_vars['theme_dir']. DIRECTORY_SEPARATOR . $subtemplate . '.html')) {			
				$twig_vars['content']  = $twig->render($subtemplate . '.html', $twig_vars);
			}
		}		
	}
	
}

?>
