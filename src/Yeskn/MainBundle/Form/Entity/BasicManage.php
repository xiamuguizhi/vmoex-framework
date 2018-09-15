<?php

/**
 * This file is part of project wpcraft.
 *
 * Author: Jake
 * Create: 2018-09-15 19:09:57
 */

namespace Yeskn\MainBundle\Form\Entity;

class BasicManage implements \ArrayAccess
{
    private $siteLogo;

    private $siteSince;

    private $siteVersion;

    /**
     * @return mixed
     */
    public function getSiteLogo()
    {
        return $this->siteLogo;
    }

    /**
     * @param mixed $siteLogo
     */
    public function setSiteLogo($siteLogo)
    {
        $this->siteLogo = $siteLogo;
    }

    /**
     * @return \DateTime
     */
    public function getSiteSince()
    {
        return $this->siteSince;
    }

    /**
     * @param mixed $siteSince
     */
    public function setSiteSince($siteSince)
    {
        $this->siteSince = $siteSince;
    }

    /**
     * @return mixed
     */
    public function getSiteVersion()
    {
        return $this->siteVersion;
    }

    /**
     * @param mixed $siteVersion
     */
    public function setSiteVersion($siteVersion)
    {
        $this->siteVersion = $siteVersion;
    }

    public function offsetExists($offset)
    {
        return (bool) $this->offsetGet($offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
}