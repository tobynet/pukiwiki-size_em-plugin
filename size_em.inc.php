<?php
// http://github.com/toooooooby/pukiwiki-size_em-plugin/

define('PLUGIN_SIZE_EM_MAX', 5); // em
define('PLUGIN_SIZE_EM_MIN',  0.1); // em

// ----
define('PLUGIN_SIZE_EM_USAGE', 'size_em.inc.php usage: &size_em(em){Text you want to change};');
define('PLUGIN_SIZE_EM_CONVERT_USAGE', "size_em.inc.php usage: #size_em(em){{</br>\nText you want to change</br>\n}}</br>\n");

function _plugin_size_em_get_args($func_get_args)
{
  $func_num_args = count($func_get_args);
  if ($func_num_args != 2) return array(FALSE, "", "");
  
  list($size, $body) = $func_get_args;
  if ($size == '' || $body == '' || ! preg_match('/^\d+$/', $size))
      return array(FALSE, "", "");
  $size = max(PLUGIN_SIZE_EM_MIN, min(PLUGIN_SIZE_EM_MAX, $size));
  return array(TRUE, $size, $body);
}


function plugin_size_em_inline()
{
  $func_get_args = func_get_args();
  list($result, $size, $body) = _plugin_size_em_get_args($func_get_args);
  if ($result) {
    return '<span style="font-size:' . $size .
      'em;display:inline-block;line-height:100%;text-indent:0px">' .
      $body . '</span>';
  } else {
    return PLUGIN_SIZE_EM_USAGE;
  }
}

function plugin_size_em_convert()
{
  $func_get_args = func_get_args();
  list($result, $size, $body) = _plugin_size_em_get_args($func_get_args);
  if ($result) {
    return '<div style="font-size:' . $size . 'em">' . $body . '</div>';
  } else {
    return PLUGIN_SIZE_EM_CONVERT_USAGE;
  }
}
?>