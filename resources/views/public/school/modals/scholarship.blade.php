<div id="scholarship-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; top: 100px;">
        <div class="modal-content">

            <div class="panel " style="background-color: #324c5a;">
                <div class="panel-heading" style="height: 55px; color: #fff">
                    <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent">
                        x

                    </button>
                    <img src="/new/img/logoNX-light-m.webp" alt="scholio logo" class="pull-left">
                    <h3 class="pull-left panel-title" style="margin: 8px 0 0 15px;">Υποτροφία @{{'>> send
                        id here <<<'}}</h3> </div> </div> <div class="panel-body">
                            <img class="pull-left margin-right-10" style="height: 45px;" ng-src="{{ $school->logo}}" alt="scholio logo">
                            <span>{{ $school->type->name }} {{ $school->name() }}: </span>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                    <button type="button" class="btn btn-info">@lang('profile.modal.request')</button>
                </div>

            </div>
        </div>