@extends('voyager::master')
@section('content')
<div class="page-content voyager edit-add container-fluid">
    <div>
        <h1 class="page-title">
            @lang('Create Multiple Alumni')
        </h1>
    </div>
    <div class="panel panel-bordered">
        <div class="panel-body" style="padding: 30px;">
            <form action="/admin/aluminus/create/multiple" class="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label">
                        @lang('Graduation Year')
                    </label>
                    {{Form::select('gratuate_year', $gYears, null, ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    <label for="" class="control-label">
                        @lang('Promotion Year')
                    </label>
                    {{Form::select('promotion_year_id', $pYears, null, ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    <label for="" class="control-label">
                        @lang('Photos')
                    </label>
                    <input type="file" name="photos[]" accept="image/*" multiple id="">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">@lang('Save')</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
