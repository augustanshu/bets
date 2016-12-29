@extends('layouts.master')
@section('title','MyTest')
@section('main')
<!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="treeview">
      <a href="http://laravel.so/admin">控制面板</a>
    </li>
    <li class="treeview">
      <a href="#">文章管理</a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="http://laravel.so/admin/posts">文章列表</a></li>
        <li><a href="http://laravel.so/admin/posts/create">新建文章</a></li>
      </ul>
    </li>
	@endsection
