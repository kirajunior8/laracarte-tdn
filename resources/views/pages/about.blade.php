@extends('layouts.default', ['title'=>'about'])

@section('content')
    <div class="container">
    	<h2>What is {{config('app.name')}} ?</h2>
    	<p>{{config('app.name')}} is a clone app of<a href="http://laramap.com" target="_bank">Laramap.com</a>.</p>

    	<div class="row">
    		<p class="alert alert-warning">
    			<strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>This app has been built by @etsmo for learning purposes.</strong>
    		</p>
    	</div>

    	<p>Feel free to help to improve the <a href="https://github.com/kirajunior8/laracarte-tdn">source code</a></p>

    	<hr>

    	<h2>What is Laramap?</h2>
    	<p>Laramap is a website by which {{config('app.name')}} was inspired:).</p>
    	<p>More info <a href="http://laramap.com/p/about">here</a>.</p>

    	<hr>

    	<h2>Wich tools and services are used in {{config('app.name')}}</h2>
    	<p>Basicaly it's built on Laravel & boostrap. That there's bunch of services used for email and other sections.</p>
    	<ul>
    		<li>laravel</li>
    		<li>boostrap</li>
    		<li>amazon s3</li>
    		<li>mandrill</li>
    		<li>google maps</li>
    		<li>Gravatar</li>
    		<li>Antony Martins's geolocation Package</li>
    		<li>Mickeal Fortin's Markdown Parser Package</li>
    		<li>Heroku</li>
    	</ul>
    </div>
@stop