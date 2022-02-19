<?php

namespace App\Plugins\Flink;

/**
 * @name Flink
 * @package 友情链接
 * @version 1.0.0
 * @author zhuchunshu
 * @link https://github.com/zhuchunshu
 */
class Flink
{
	public function handler(){
		$this->bootstrap();
	}
	
	public function bootstrap(){
		require __DIR__ . '/bootstrap.php';
	}
}