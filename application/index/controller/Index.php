<?php
namespace app\index\controller;

//use think\Request;

use think\facade\Request;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function test()
    {
        $request = new Request();

        $data = $request->param();

        dump($data);
    }


    public function test2()
    {
        $data = $this->request->param();

        dump($data);
    }

    public function test3(Request $request)
    {
        dump($request->param());
    }

    public function test4()
    {
        $data = Request::param();

        dump($data);
    }

    public function getInfo(Request $request)
    {
        $host = $request->host();       //当前访问域名或者IP
        $scheme	= $request->scheme();   //当前访问协议  如:http
        $port = $request->port();       //当前访问的端口
        $domain = $request->domain();   //当前包含协议的域名
        $rootDomain = $request->rootDomain(); //当前访问的根域名（V5.1.6+）
        $url = $request->url();         //当前完整URL                             /index/Index/getInfo?id=3
        $baseUrl = $request->baseUrl(); //当前URL（不含QUERY_STRING）             /index/Index/getInfo
        $query = $request->query();     //当前请求的QUERY_STRING参数              id=3
        $baseFile = $request->baseFile(true); //当前执行的文件                        /index.php
        $root  = $request->root(true);
        $rootUrl = $request->rootUrl();
        $pathinfo = $request->pathinfo();
        $path = $request->path();
        $ext = $request->ext();
        $time= date('Y-m-d H:i:s' , $request->time() );
        $type = $request->type();
        $method = $request->method();


        dump($baseFile);
    }

    public function test5(Request $request)
    {
        $bool = $request->has('id','get');

        dump($bool);
    }

    public function test6()
    {
        dump(Request::has('name','get'));
    }

    public function test7()
    {
        $data = Request::param('id');
        dump($data);
    }

    public function test8()
    {
        $data = Request::param(true);

        dump($data);
    }

    public function test9(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $age = $request->age;
        dump($id);
        dump($name);
        dump($age);
    }

    public function test10()
    {
        $email = Request::post('email','','email');

        dump($email);
    }
}
