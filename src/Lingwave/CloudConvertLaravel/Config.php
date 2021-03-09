<?php namespace Lingwave\CloudConvertLaravel;


class Config {

    private $config;

    /**
     * @param $config
     */
    function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    public function get($key)
    {
        if(! is_array($this->config) ) return null;
        return $this->config[$key];
    }

    public function toArray()
    {
        if(! is_array($this->config) ) return [];
        return $this->config;
    }

} 