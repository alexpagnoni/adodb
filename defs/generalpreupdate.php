<?php

OpenLibrary( 'misc.library' );

recremovedir( MODULE_PATH.'adodb/adodb' );
dircopy( $this->basedir.'/var/adodb/', MODULE_PATH.'adodb/adodb/' );

?>
