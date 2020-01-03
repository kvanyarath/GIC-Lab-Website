@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->display_name_singular)

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }} {{ ucfirst($dataType->display_name_singular) }} &nbsp;

        <a href="{{ route('voyager.'.$dataType->slug.'.edit', $id) }}" class="btn btn-info">
            <span class="glyphicon glyphicon-pencil"></span>&nbsp;
            {{ __('voyager::generic.edit') }}
        </a>
        <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete" data-id="{{ $id }}" id="delete-{{ $id }}">
            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
        </a>

        <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
            <span class="glyphicon glyphicon-list"></span>&nbsp;
            {{ __('voyager::generic.return_to_list') }}
        </a>

        <a href="#" id="addMorePhotoBtn" class="btn btn-success">
            <span class="glyphicon glyphicon-plus"></span>&nbsp;
            Add More Photo
        </a>

    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content read container-fluid">
        <div class="row">
            <!-- table or photo thumbnail with x on top right for delete -->
            <div class="row" style="margin: 20px;">
                @foreach($photoAlbum->photos as $photo)
                <div class="col-md-2 text-center" style="position: relative; height: 150px; overflow: hidden;">
                    <img src="{{Storage::url($photo->file_location)}}" style="max-width: 100%; max-height: 100%;" alt="">
                    <div style="position: absolute; right: 30px; top: 10px;">
                        <button onclick="openDeletePhotoModal({{$photo->id}})"  class="btn btn-sm btn-danger">
                            <i class="glyphicon glyphicon-remove"></i>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->display_name_singular) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.'.$dataType->slug.'.index') }}" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                               value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->display_name_singular) }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{-- Add more photo modal --}}
    <div class="modal modal-success fade" tabindex="-1" id="addMorePhotoModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        Upload more photo to the album
                    </h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin.photo-albums.post-photo', $id) }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group text-left">
                            <label for="" class="control-label">
                                Photo/Photos
                            </label>
                            <input type="file" accept="image/*" name="file_location[]" multiple id="">
                        </div>

                        <input type="submit" class="btn btn-primary pull-right delete-confirm"
                               value="Submit">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{-- Photo delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="deletePhotoModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} this photo?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin.photo-albums.delete-photo', $id) }}" id="photoDeleteForm" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="photoId">
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                               value="{{ __('voyager::generic.delete_confirm') }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    <script>
        var deleteFormAction;
        $('.delete').on('click', function (e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/)
                ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
                : deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });
    </script>
    <script>
        $(function() {
            $('#addMorePhotoBtn').on('click', function() {
                $('#addMorePhotoModal').modal();
            })
        })

        function openDeletePhotoModal(id) {
            $('#photoId').val(id);
            $('#deletePhotoModal').modal();
        }
    </script>
@stop
