<?php
/**
 * File containing the ezcWebdavPluginPreconditionFailedException class.
 * 
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Webdav
 * @version //autogen//
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
/**
 * Exception thrown if a plugin precondition failed.
 *
 * This exception is thrown if a plugin should be used in {@link
 * ezcWebdavServer}, which find one of its preconditions not fulfilled. All
 * preconditions for a plugin should be checked during intialization phase in
 * {@link eczWebdavPluginConfiguration::init()}.
 * 
 * @package Webdav
 * @version //autogen//
 */
class ezcWebdavPluginPreconditionFailedException extends ezcWebdavException
{
    /**
     * Creates a new exception.
     *
     * Creates a new exception for the plugin with $pluginNamespace for which a
     * precondition failed due to $reason.
     * 
     * @param string $pluginNamespace 
     * @param string $reason 
     */
    public function __construct( $pluginNamespace, $reason )
    {
        parent::__construct(
            "Precondition for plugin '$pluginNamespace' failed: $reason"
        );
    }
}

?>
