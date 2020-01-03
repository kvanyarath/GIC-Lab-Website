

<h3 class="h4">Related Links</h3>

<div id="stickyblock-start">
    <div class="js-sticky-block g-sticky-block--lg pt-4" data-responsive="true"
        data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
        <!-- Sidebar Links -->
        <ul class="list-unstyled g-mb-50">
            <li class="mb-1">
                <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                    href="@if(isset($program)) {{'/program/'.$program->id.'/curriculum'}} @endif">
                    <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                    @lang('Curriculum')
                </a>
            </li>
            <li class="mb-1">
                <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                    href="@if(isset($program)) {{'/program/'.$program->id.'/entrance_selection'}} @endif">
                    <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                    @lang('Entrance Selection')
                </a>
            </li>
            <li class="mb-1">
                <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                    href="/timetable">
                    <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                    @lang('Timetable')
                </a>
            </li>
            <li class="mb-1">
                <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                    href="/calendar">
                    <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                    @lang('Academic Calendar')
                </a>
            </li>
        </ul>
        <!-- End Sidebar Links -->
    </div>
</div>