<!-- Programs Filters -->
<div class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg1.svg);">
    <div class="container-fluid g-pt-100 g-pb-70">
        <!-- Heading -->
        <div class="g-max-width-645 text-center mx-auto g-mb-60">
            <!-- <span class="d-block g-font-weight-500 text-uppercase mb-4">Full list of Programs</span> -->
            <h2 class="h1 mb-0">Browse all GIC's course syllabus.</h2>
        </div>
        <!-- Heading -->

        <!-- Programs Filter -->
        <form action="/academic">
        <div class="row justify-content-center align-items-center g-mb-30">
            <div class="col-sm-6 col-md-3">
                <!-- Degree -->
                <select id="degree_select" name="degree"
                    class="js-custom-select w-100 u-select-v1 u-shadow-v32 g-brd-none g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12"
                    data-placeholder="Degree" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                    <option></option>
                    @foreach($degrees as $d)
                    <option @if($d->id == $degree_id) selected="selected" @endif class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                        value="{{$d->id}}">{{$d->degree}}</option>
                    @endforeach
                </select>
                <!-- End Degree -->
            </div>

            <div class="col-sm-6 col-md-2">
                <!-- Program Year -->
                <select id="program_year_select" name="program_year"
                    class="js-custom-select w-100 u-select-v1 u-shadow-v32 g-brd-none g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12"
                    data-placeholder="Program Year" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                    <option></option>
                    @foreach($program_years as $p)
                    <option @if($p->id == $program_year_id) selected="selected" @endif class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                        value="{{$p->id}}">{{$p->program_year}}</option>
                    @endforeach
                </select>
                <!-- End Program Year -->
            </div>
            <div class="col-sm-6 col-md-1">
                <button type="submit" class="btn w-100 u-shadow-v32 g-brd-none g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12"><i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>

        
        <!-- End Programs Filter -->
    </div>
</div>
<!-- End Programs Filters -->
