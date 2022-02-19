<?php

namespace App\Plugins\Flink\src\Controller\Admin;

use App\Middleware\AdminMiddleware;
use App\Plugins\Flink\src\Model\Flink;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\HttpServer\Annotation\PostMapping;

#[Controller(prefix:"/admin/Flink")]
#[Middleware(AdminMiddleware::class)]
class IndexController
{
	#[GetMapping(path:"")]
	public function index(){
		$page = Flink::query()->paginate(40);
		return view("Flink::index",['page' => $page]);
	}
	
	#[GetMapping(path:"create")]
	public function create(){
		return view("Flink::create");
	}
	
	#[PostMapping(path:"create")]
	public function create_submit(){
		if(!request()->input('name') || !request()->input('link')){
			return redirect()->back()->with('error','请求参数不足!')->go();
		}
		Flink::query()->create([
			'name' => request()->input('name'),
			'link' => request()->input('link')
		]);
		cache()->set("flink",Flink::query()->get());
		return redirect()->url('/admin/Flink')->with('success','添加成功!')->go();
	}
	
	#[PostMapping(path:"remove")]
	public function remove(){
		if(!request()->input('id')){
			return Json_Api(403,false,['msg' => '请求参数不足,缺少:id']);
		}
		Flink::query()->where('id', request()->input('id'))->delete();
		cache()->set("flink",Flink::query()->get());
		return Json_Api(200,true,['msg' => '删除成功!']);
	}
}