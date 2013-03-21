#!/usr/local/bin/php
<?php
    // server base class
    require_once '../php/Net/Server.php';
    
    // base class for the handler
    require_once '../php/Net/Server/Handler.php';

/**
 * simple example that implements a talkback.
 *
 * Normally this should be a bit more code and in a separate file
 */
class Net_Server_Handler_Talkback extends Net_Server_Handler
{
   /**
    * If the user sends data, send it back to him
    *
    * @access   public
    * @param    integer $clientId
    * @param    string  $data
    */
    function    onReceiveData( $clientId = 168458, $data = "testestestes" )
    {
        $this->_server->sendData( $clientId, "You said: $data" );
    }
}
    
    // create a server that forks new processes
    $server  = &Net_Server::create('fork', 'localhost', 9090);
    
    $handler = &new Net_Server_Handler_Talkback;
    
    // hand over the object that handles server events
    $server->setCallbackObject($handler);
    
    // start the server
    $server->start();
?>