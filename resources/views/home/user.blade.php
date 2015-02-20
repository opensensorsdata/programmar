<?php
	$pageName = 'Programmar';
	$pageDesc = 'Programmar allows you to always keep up to day with the latest news, tips and how-to\'s.
				Follow your favourite subjects or people and create a custom digest of the best and most
				popular development articles.';
	$pageId = "home";
?>

@extends('layouts/body')

@section('content')
	<div class="container">
		<aside class="sidebar animated fadeInLeft" set-class-when-at-top="fixed">
			<a href="/">Recent</a>
			<a href="/drafts">Drafts</a>

			<div class="options">
				<a href="/following">Following</a>
				<div class="clearfix profile-img-cont">
					@foreach($followers as $follower)
						@if($follower['user'] > 0)
							<a href="/dev/{{ $follower['username'] }}"><img src="{{$follower['avatar']}}" class="img-circle profile-image"></a>
						@else
							<!-- <a href="#"><img src="{{$follower['avatar']}}" class="img-circle profile-image faded"></a> -->
						@endif
					@endforeach
				</div>
			</div>
		</aside>

		<div class="article-container">
			@if(count($articles) > 0)
				@foreach($articles as $article)
					<div class="item">
						<div class="base">
							<a class="title" href="/article/{{$article->slug}}">{{ $article->title }}</a>
							<div class="info">
								<a href="/dev/{{ $article->username }}">{{ $article->userName }}</a>
								<span>
									{{ $article->enjoys }}
									@if($article->enjoys > 1)
										Enjoys
									@else
										Enjoy
									@endif
								</span>
							</div>
						</div>
					</div>
				@endforeach
			@else
				There are no articles at this time. <a href="/write">Create one</a>.
			@endif
			@if($pagination != '')
				<div class="pagination-container">
			 		{!! $pagination !!}
				</div>
			@endif
		</div>
	</div>
@endsection