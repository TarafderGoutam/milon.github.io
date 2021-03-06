---
pagination:
  collection: talks
  perPage: 5
---

@extends('_layouts.master')

@section('body')
    <div>
        @foreach ($pagination->items as $talk)
            <section class="summary">
                <h2>
                    <a href="{{ $talk->getUrl() }}">{{ $talk->title }}</a>
                </h2>
                <time>{{ $talk->formatedDate($talk->date) }}</time>
                <article>
                    <p>{{ $talk->gist }}</p>
                </article>
            </section>
        @endforeach

        @include('_layouts._pagination')
    </div>
@endsection
