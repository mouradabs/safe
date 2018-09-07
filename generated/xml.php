<?php

namespace Safe;

/**
 * This function allows to use parser inside
 * object. All callback functions could be set with
 * xml_set_element_handler etc and assumed to be
 * methods of object.
 * 
 * @param resource $parser A reference to the XML parser to use inside the object.
 * @param object $object The object where to use the XML parser.
 * @throws Exceptions\XmlException
 * 
 */
function xml_set_object($parser, object &$object): void
{
    error_clear_last();
    $result = \xml_set_object($parser, $object);
    if ($result === FALSE) {
        throw Exceptions\XmlException::createFromPhpError();
    }
}

