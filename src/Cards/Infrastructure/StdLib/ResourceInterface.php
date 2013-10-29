<?php

namespace Cards\Infrastructure\StdLib;

interface ResourceInterface
{
    /**
     * Gets the type of resource
     *
     * @return string
     */
    public function getType();

    /**
     * Gets the resource identifier
     *
     * @return string
     */
    public function getId();

    /**
     * Sets the type of resource
     *
     * @return this
     */
    public function setType($type);

    /**
     * Sets the resource identifier
     *
     * @return this
     */
    public function setId();
}
