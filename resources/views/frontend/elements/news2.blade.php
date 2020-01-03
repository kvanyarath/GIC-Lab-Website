<!-- Latest News -->
<section class="g-py-30">
      <div class="container-fluid">
        <!-- Heading -->
        <div class="g-max-width-645 text-center mx-auto g-mb-30">
            <h2 class="h1 mb-3">Latest News</h2>
        </div>
        <!-- End Heading -->

        <div class="row">
          @foreach($latest_news as $news)
          <div class="col-lg-4 g-mb-30">
            <!-- Article -->
            <article class="u-shadow-v21 g-bg-white rounded">
              <div class="g-pa-30">
                <h3 class="g-font-weight-300 g-mb-15">
                    <a target="_blank" class="g-font-size-20 u-link-v5 g-color-blue g-color-primary--hover" href="{{route('frontend.news.show', $news->id)}}">{{$news->title}}</a>
                  </h3>
                <p>
                {!!$news->short_description!!}
                </p>
              </div>
            </article>
            <!-- End Article -->
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Latest News -->