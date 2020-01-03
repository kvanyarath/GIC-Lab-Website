@if(isset($latest_news) && !empty($latest_news)) 
<!-- Posts -->
<div class="g-mb-30">
  <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
    <h3 class="u-heading-v2__title h4 g-color-black mb-0">@lang('latest_news')</h3>
  </div>
  @foreach($latest_news as $news)
  <!-- Article -->
  <article class="media g-mb-30">
    <a class="d-flex mr-3" href="#">
      <img class="rounded-circle g-width-60 g-height-60" src="{{$news->image}}" alt="News Thumbnail">
    </a>

    <div class="media-body">
      <h3 class="h6">
          <a class="u-link-v5 g-color-black g-color-primary--hover" href="/news/{{$news->id}}">{{$news->title}}</a>
        </h3>

      <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
        <li class="list-inline-item">
          {{$news->posted_date? $news->posted_date->format('M d,Y') : ''}}
        </li>
      </ul>
    </div>
  </article>
  <!-- End Article -->
  @endforeach
              
</div>
<!-- End Posts -->

@endif