<?php
	$pageName = 'Programmar - Write, read and discover development articles.';
	$pageDesc = 'Programmar allows you to always keep up to day with the latest news, tips and how-to\'s.
				Follow your favourite subjects or people and create a custom digest of the best and most
				popular development articles.';
	$pageId = 'landing';
	$headerClass = 'full';
	$footerInclude = false;
?>
@extends('layouts/body')
@section('content')
	<div class="container-fluid">
		<div class="type-section"></div>
		<a href="/oauth/github" class="btn btn-primary">Access with Github</a>
	</div>
@endsection

@section('scripts')
	<script src="/js/vendor/typed.js"></script>
	<script src="/js/partials/landing.js"></script>
@endsection