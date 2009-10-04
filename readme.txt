* size_em plugin for Pukiwiki

- http://github.com/toooooooby/pukiwiki-size_em-plugin

** DESCRIPTION:

size_em plugin for Pukiwiki

size.inc.php use "px". 
ex. "font-size:2px".
But this size_em.inc.php use "em". 
ex. "font-size:2em"

** FEATURES/PROBLEMS:

*** using with inline

&size_em(2){test test}; 

 to 

<span style="font-size:2em;display:inline-block;line-height:100%;text-indent:0px">test test</span>

** TODO

*** using with block
#size_em(2){{
test
test
}}

 to 

<div style="font-size:2em">
test
test
</div>


** license

GPL v2

and Copyright (c) 2009 TOBY



