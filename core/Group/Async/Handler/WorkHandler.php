<?php

namespace Group\Async\Handler;

abstract class WorkHandler 
{	
	protected $serv;

	protected $fd;

	protected $fromId;

	protected $data;

	protected $cache;

	protected $database;
	
	public function __construct($serv, $fd, $fromId, $data)
	{
		$this -> serv = $serv;
		$this -> fd = $fd;
		$this -> fromId = $fromId;
		$this -> data = $data;
	}

	abstract public function handle();

	public function task($data)
	{
		$this -> serv -> task($data);
	}

	public function getData()
	{
		return $this -> data;
	}

	public function getServ()
	{
		return $this -> serv;
	}

	public function getFd()
	{
		return $this -> fd;
	}

	public function getfromId()
	{
		return $this -> fromId;
	}

	public function setCache(obj $cache)
	{
		$this -> cache = $cache;
	}

	public function getCache()
	{
		return $this -> cache;
	}

	public function setDatabase(obj $database)
	{
		$this -> database = $database;
	}

	public function getDatabase()
	{
		return $this -> database;
	}
}
