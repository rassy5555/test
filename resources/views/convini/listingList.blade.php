@extends('layouts.app_convini')

@section('content')
<section class="main">
    <div class="l-container__large p-container">
    <h2 class="c-page__title">{{ __('Listing List')}}</h2>
        <listing_list-component :listing_list="{{ $listing_list }}"></listing_list-component>
    </div>
</section>
@endsection