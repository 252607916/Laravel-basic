这是一个系统学习Laravel时 是一个项目

一  . 安装composer 包管理工具
	官网地址: https://www.phpcomposer.com/
	里边有具体的安装方法和中国镜像，很好很详细的说明了composer 的安装方法和使用规范的 。
二  . 创建Laravel  项目
	常用方式：命令行执行如下命令即可创建项目
	composer create-project  --prefer-dist  laravel/laravel=5.5.*  basic
	其中最后的basic 是项目根目录的名称
三  . 访问Laravel：
1.	命令行的方式，利用php 内置服务器直接执行
php -S localhost:8888 -t public
其中public 是默认目录
2.	命令行的方式，利用其自带的artisan 工具启动
php  artisan serve
这个时候默认启动的地址是localhost:8000
==============================================================================

Laravel的基本工作流

1 .  核心文件目录：
Http 目录: 用户程序主目录，Controller, Middleware 等组件都放在这里
	routes 目录： 项目的路由器，文件的访问地址设置等， 都在这里
	resources 目录： 项目模板目录，其中的views 目录中存放用户创建的模板文件，这些文件都是以 .blade.php 结尾的。
2 . 命令行创建控制器： php artisan make:controller SitesController ，执行之后在项目的controllers目录中就是出现该文件了。
	注： php artisan make:controller SitesController --plain 其中—plain之不需要任何预定义方法。
3 . 控制器的路由执行指定的方法，如下设置：
Route::get('/', 'SitesController@index');		访问SitesController中的index方法
Route::get('/about', 'SitesController@about');	访问SitesController中的 about方法
==================================================================================

Laravel向试图传递变量

1 . 模板中输出变量使用 {{ $name}}的形式输出，如果不需要转义的输出方式为{{!! $name !!}}
2 . 方法中传递参数给试图，可以使用view方法中的第二个参数，可以是数组也可以是单个变量。比如： return  view(‘about’, $data)，或者使用with方法，比如return view(‘about’)->with($data)；

==================================================================================
Blade模板介绍

1 . 模板中的公用部分，通常都是放在公共文件中，在其他文件中进行引用的，Laravel中也存在这样的功能。
	在公共文件中定义一个区域，用于引入文件,如：@yield(‘content’)，@yield(‘script’)等，
	那么在引用的文件中使用@extends(‘util’)引入公共文件，对应的区域使用@section(‘content’)     ......    @stop， 这个区域就对应到@yield(‘content’)中。
	在这个区域中编辑对应的内容
2 . 在模板中很多时候还会用到if 条件，foreach 循环等具体用法如下
	@if($name == ‘Evan’)		@foreach ($people as $person)
	@else				@endforeach
	@endif 
	这些内容都可以包括在@section区域中
==================================================================================
Laravel环境配置

1 .  在Laravel中大部分的环境配置都存放在.env文件中，最常用的就是数据库的相关配置
2 .  在文件中使用的时可以通过env()方法来调用 
==================================================================================
Laravel Migration 基础

Migration是对数据库进行管理的一个工具，在database文件夹下边有个migrations目录，其下有2个php文件，可以通过命令来执行，将文件中对应的数据写进数据库中。具体命令为：


