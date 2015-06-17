<?php
/*
 * Copyright 2015 Chris Schalenborgh <chris@schalenborgh.be>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace ZalandoPHP\Operations;

/**
 * Articles
 *
 * @see    https://github.com/zalando/shop-api-documentation/wiki/Articles
 * @author Chris Schalenborgh <chris@schalenborgh.be>
 */
class Articles extends AbstractOperation
{

    protected $endpoint       = 'articles/{key}/media';

    public function __construct($articleId = '')
    {
        $this->endpoint = str_replace('{key}', $articleId, $this->endpoint);
    }

    /**
     * Get the endpoint name
     */
    public function getName()
    {
        return (new \ReflectionClass($this))->getShortName();
    }

    /*
     * Get the endpoint path, relative to the domain
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

}