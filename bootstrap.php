<?php

use App\Plugins\Flink\src\Model\Flink;

Itf()->add('index_right',9999,"Flink::components");
menu()->add(5701,[
	'name' => '友情链接',
	'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-friends" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="7" cy="5" r="2"></circle>
   <path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5"></path>
   <circle cx="17" cy="5" r="2"></circle>
   <path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4"></path>
</svg>',
	'url' => ''
]);

menu()->add(5702,[
	'name' => '列表',
	'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-friends" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="7" cy="5" r="2"></circle>
   <path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5"></path>
   <circle cx="17" cy="5" r="2"></circle>
   <path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4"></path>
</svg>',
	'url' => '/admin/Flink',
	'parent_id' => 5701
]);
menu()->add(5703,[
	'name' => '新增',
	'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-friends" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="7" cy="5" r="2"></circle>
   <path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5"></path>
   <circle cx="17" cy="5" r="2"></circle>
   <path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4"></path>
</svg>',
	'url' => '/admin/Flink/create',
	'parent_id' => 5701
]);

if(!function_exists('getFlink')){
	function getFlink(){
		if(!cache()->has('flink')){
			cache()->set("flink",Flink::query()->get());
		}
		return cache()->get('flink');
	}
}

if(!function_exists('FlinkrandBg')){
	function FlinkrandBg(){
		$data= ['bg-blue-lt','bg-azure-lt','bg-indigo-lt','bg-purple-lt','bg-pink-lt','bg-red-lt','bg-orange-lt','bg-yellow-lt','bg-lime-lt','bg-green-lt','bg-teal-lt','bg-cyan-lt'];
		return $data[array_rand($data)];
	}
}