<?php

namespace Safe;

/**
 * 
 * 
 * @param resource $service_handle The handle on the database server service.
 * @param string $user_name The login name of the new database user.
 * @param string $password The password of the new user.
 * @param string $first_name The first name of the new database user.
 * @param string $middle_name The middle name of the new database user.
 * @param string $last_name The last name of the new database user.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_add_user($service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null): void
{
    error_clear_last();
    if ($last_name !== null) {
        $result = \ibase_add_user($service_handle, $user_name, $password, $first_name, $middle_name, $last_name);
    } elseif ($middle_name !== null) {
        $result = \ibase_add_user($service_handle, $user_name, $password, $first_name, $middle_name);
    } elseif ($first_name !== null) {
        $result = \ibase_add_user($service_handle, $user_name, $password, $first_name);
    }else {
        $result = \ibase_add_user($service_handle, $user_name, $password);
    }
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * This function will discard a BLOB if it has not yet been closed by
 * ibase_blob_close.
 * 
 * @param resource $blob_handle A BLOB handle opened with ibase_blob_create.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_blob_cancel($blob_handle): void
{
    error_clear_last();
    $result = \ibase_blob_cancel($blob_handle);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * ibase_blob_create creates a new BLOB for filling with
 * data.
 * 
 * @param resource $link_identifier An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * @return resource Returns a BLOB handle for later use with
 * ibase_blob_add .
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_blob_create($link_identifier = null)
{
    error_clear_last();
    $result = \ibase_blob_create($link_identifier);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
    return $result;
}


/**
 * Closes the link to an InterBase database that's associated with
 * a connection id returned from ibase_connect.
 * Default transaction on link is committed, other transactions are
 * rolled back.
 * 
 * @param resource $connection_id An InterBase link identifier returned from
 * ibase_connect. If omitted, the last opened link
 * is assumed.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_close($connection_id = null): void
{
    error_clear_last();
    $result = \ibase_close($connection_id);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * Commits a transaction without closing it.
 * 
 * @param resource $link_or_trans_identifier If called without an argument, this function commits the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be committed. If the argument is a transaction identifier, the
 * corresponding transaction will be committed. The transaction context
 * will be retained, so statements executed from within this transaction
 * will not be invalidated.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_commit_ret($link_or_trans_identifier = null): void
{
    error_clear_last();
    $result = \ibase_commit_ret($link_or_trans_identifier);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * Commits a transaction.
 * 
 * @param resource $link_or_trans_identifier If called without an argument, this function commits the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be committed. If the argument is a transaction identifier, the
 * corresponding transaction will be committed.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_commit($link_or_trans_identifier = null): void
{
    error_clear_last();
    $result = \ibase_commit($link_or_trans_identifier);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * Establishes a connection to an Firebird/InterBase server.
 * 
 * In case a second call is made to ibase_connect with
 * the same arguments, no new link will be established, but instead, the link
 * identifier of the already opened link will be returned. The link to the
 * server will be closed as soon as the execution of the script ends, unless
 * it's closed earlier by explicitly calling ibase_close.
 * 
 * @param string $database The database argument has to be a valid path to
 * database file on the server it resides on. If the server is not local,
 * it must be prefixed with either 'hostname:' (TCP/IP), 'hostname/port:'
 * (TCP/IP with interbase server on custom TCP port), '//hostname/'
 * (NetBEUI), depending on the connection
 * protocol used.
 * @param string $username The user name. Can be set with the
 * ibase.default_user php.ini directive.
 * @param string $password The password for username. Can be set with the
 * ibase.default_password php.ini directive.
 * @param string $charset charset is the default character set for a
 * database.
 * @param int $buffers buffers is the number of database buffers to
 * allocate for the server-side cache. If 0 or omitted, server chooses
 * its own default.
 * @param int $dialect dialect selects the default SQL dialect for any
 * statement executed within a connection, and it defaults to the highest
 * one supported by client libraries.
 * @param string $role Functional only with InterBase 5 and up.
 * @param int $sync 
 * @return resource Returns an Firebird/InterBase link identifier on success, .
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_connect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null, int $sync = null)
{
    error_clear_last();
    if ($sync !== null) {
        $result = \ibase_connect($database, $username, $password, $charset, $buffers, $dialect, $role, $sync);
    } elseif ($role !== null) {
        $result = \ibase_connect($database, $username, $password, $charset, $buffers, $dialect, $role);
    } elseif ($dialect !== null) {
        $result = \ibase_connect($database, $username, $password, $charset, $buffers, $dialect);
    } elseif ($buffers !== null) {
        $result = \ibase_connect($database, $username, $password, $charset, $buffers);
    } elseif ($charset !== null) {
        $result = \ibase_connect($database, $username, $password, $charset);
    } elseif ($password !== null) {
        $result = \ibase_connect($database, $username, $password);
    } elseif ($username !== null) {
        $result = \ibase_connect($database, $username);
    } elseif ($database !== null) {
        $result = \ibase_connect($database);
    }else {
        $result = \ibase_connect();
    }
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
    return $result;
}


/**
 * 
 * 
 * @param resource $service_handle The handle on the database server service.
 * @param string $user_name The login name of the user you want to delete from the database.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_delete_user($service_handle, string $user_name): void
{
    error_clear_last();
    $result = \ibase_delete_user($service_handle, $user_name);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * This functions drops a database that was opened by either ibase_connect
 * or ibase_pconnect. The database is closed and deleted from the server.
 * 
 * @param resource $connection An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_drop_db($connection = null): void
{
    error_clear_last();
    $result = \ibase_drop_db($connection);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * This function causes the registered event handler specified by
 * event to be cancelled. The callback function will
 * no longer be called for the events it was registered to handle.
 * 
 * @param resource $event An event resource, created by
 * ibase_set_event_handler.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_free_event_handler($event): void
{
    error_clear_last();
    $result = \ibase_free_event_handler($event);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * Frees a prepared query.
 * 
 * @param resource $query A query prepared with ibase_prepare.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_free_query($query): void
{
    error_clear_last();
    $result = \ibase_free_query($query);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * Frees a result set.
 * 
 * @param resource $result_identifier A result set created by ibase_query or
 * ibase_execute.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_free_result($result_identifier): void
{
    error_clear_last();
    $result = \ibase_free_result($result_identifier);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * 
 * 
 * @param resource $service_handle 
 * @param string $db 
 * @param int $action 
 * @param int $argument 
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_maintain_db($service_handle, string $db, int $action, int $argument = 0): void
{
    error_clear_last();
    $result = \ibase_maintain_db($service_handle, $db, $action, $argument);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * 
 * 
 * @param resource $service_handle The handle on the database server service.
 * @param string $user_name The login name of the database user to modify.
 * @param string $password The user's new password.
 * @param string $first_name The user's new first name.
 * @param string $middle_name The user's new middle name.
 * @param string $last_name The user's new last name.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_modify_user($service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null): void
{
    error_clear_last();
    if ($last_name !== null) {
        $result = \ibase_modify_user($service_handle, $user_name, $password, $first_name, $middle_name, $last_name);
    } elseif ($middle_name !== null) {
        $result = \ibase_modify_user($service_handle, $user_name, $password, $first_name, $middle_name);
    } elseif ($first_name !== null) {
        $result = \ibase_modify_user($service_handle, $user_name, $password, $first_name);
    }else {
        $result = \ibase_modify_user($service_handle, $user_name, $password);
    }
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * This function assigns a name to a result set. This name can be used later in
 * UPDATE|DELETE ... WHERE CURRENT OF name statements.
 * 
 * @param resource $result An InterBase result set.
 * @param string $name The name to be assigned.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_name_result($result, string $name): void
{
    error_clear_last();
    $result = \ibase_name_result($result, $name);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * Opens a persistent connection to an InterBase database.
 * 
 * ibase_pconnect acts very much like
 * ibase_connect with two major differences.
 * 
 * First, when connecting, the function will first try to find a (persistent)
 * link that's already opened with the same parameters. If one is found, an
 * identifier for it will be returned instead of opening a new connection.
 * 
 * Second, the connection to the InterBase server will not be closed when the
 * execution of the script ends. Instead, the link will remain open for
 * future use (ibase_close will not close links
 * established by ibase_pconnect). This type of link is
 * therefore called 'persistent'.
 * 
 * @param string $database The database argument has to be a valid path to
 * database file on the server it resides on. If the server is not local,
 * it must be prefixed with either 'hostname:' (TCP/IP), '//hostname/'
 * (NetBEUI) or 'hostname@' (IPX/SPX), depending on the connection
 * protocol used.
 * @param string $username The user name. Can be set with the
 * ibase.default_user php.ini directive.
 * @param string $password The password for username. Can be set with the
 * ibase.default_password php.ini directive.
 * @param string $charset charset is the default character set for a
 * database.
 * @param int $buffers buffers is the number of database buffers to
 * allocate for the server-side cache. If 0 or omitted, server chooses
 * its own default.
 * @param int $dialect dialect selects the default SQL dialect for any
 * statement executed within a connection, and it defaults to the highest
 * one supported by client libraries. Functional only with InterBase 6
 * and up.
 * @param string $role Functional only with InterBase 5 and up.
 * @param int $sync 
 * @return resource Returns an InterBase link identifier on success, .
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_pconnect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null, int $sync = null)
{
    error_clear_last();
    if ($sync !== null) {
        $result = \ibase_pconnect($database, $username, $password, $charset, $buffers, $dialect, $role, $sync);
    } elseif ($role !== null) {
        $result = \ibase_pconnect($database, $username, $password, $charset, $buffers, $dialect, $role);
    } elseif ($dialect !== null) {
        $result = \ibase_pconnect($database, $username, $password, $charset, $buffers, $dialect);
    } elseif ($buffers !== null) {
        $result = \ibase_pconnect($database, $username, $password, $charset, $buffers);
    } elseif ($charset !== null) {
        $result = \ibase_pconnect($database, $username, $password, $charset);
    } elseif ($password !== null) {
        $result = \ibase_pconnect($database, $username, $password);
    } elseif ($username !== null) {
        $result = \ibase_pconnect($database, $username);
    } elseif ($database !== null) {
        $result = \ibase_pconnect($database);
    }else {
        $result = \ibase_pconnect();
    }
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
    return $result;
}


/**
 * Rolls back a transaction without closing it.
 * 
 * @param resource $link_or_trans_identifier If called without an argument, this function rolls back the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be rolled back. If the argument is a transaction identifier, the
 * corresponding transaction will be rolled back. The transaction context
 * will be retained, so statements executed from within this transaction
 * will not be invalidated.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_rollback_ret($link_or_trans_identifier = null): void
{
    error_clear_last();
    $result = \ibase_rollback_ret($link_or_trans_identifier);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * Rolls back a transaction.
 * 
 * @param resource $link_or_trans_identifier If called without an argument, this function rolls back the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be rolled back. If the argument is a transaction identifier, the
 * corresponding transaction will be rolled back.
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_rollback($link_or_trans_identifier = null): void
{
    error_clear_last();
    $result = \ibase_rollback($link_or_trans_identifier);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}


/**
 * 
 * 
 * @param resource $service_handle 
 * @throws Exceptions\IbaseException
 * 
 */
function ibase_service_detach($service_handle): void
{
    error_clear_last();
    $result = \ibase_service_detach($service_handle);
    if ($result === FALSE) {
        throw Exceptions\IbaseException::createFromPhpError();
    }
}

