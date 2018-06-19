<!-- ====== Work Modal Edit ======= -->
<div id="work-modal-edit-{{ $work->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form-experience-edit-{{ $work->id }}" method="POST" action="{{ route('teacher-cv-experience-edit') }}" name="form-work">
                {{ csrf_field() }}
                <div class="panel " style="background-color: #324c5a; height:90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0; padding: 10px">
                    <div class="panel-heading" style=" color: #fff">
                        <button type="button" class="btn pull-right btn-close" data-dismiss="modal">
                            x
                        </button>
                        <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo"> {{--
                        <h3 class="pull-left panel-title">schol.io</h3>--}}
                    </div>

                </div>
                <div class="panel-body">

                    <div class="section2-container ">
                        <div class="inner-section" style="">
                            <div class="section-text centered-text">
                                <img class="modal-icon" src="/new/img/teacher/desk.png" alt=""> </i>@lang('teacher_profile.section.experience')</div>
                            <div class="input-container">

                                <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                    <div class="typeahead__field typeahead__query">
                                        <input id="job" label="@lang('teacher_profile.section.experiencePlaceholder')" class="js-typeahead-work demo-form ad-input" name="job" type="text"
                                            placeholder="" autocomplete="off" value="{{ $work->job->name }}">
                                        <i class="icon-inp fa fa-briefcase margin-top"></i>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                    <div class="typeahead__field typeahead__query">
                                        <input id="company" label="@lang('teacher_profile.section.experienceInstitute')" class="js-typeahead-school demo-form ad-input" name="company"
                                            type="text" placeholder="" autocomplete="off" value="{{ $work->company->name }}">
                                        <i class="icon-inp fa fa-university"></i>
                                    </div>
                                </div>


                                <div class="clearfix"></div>
                                <div class="col-sm-8 polyfill-input-sc">
                                    <input type="text" label="@lang('teacher_profile.since')" name="start" class="demo-form ad-input" id="datepickerWorkFromEdit-{{ $work->id }}" value="{{ $work->from }}">
                                    <i class="icon-inp fa fa-calendar-o"></i>
                                    {{--
                                    <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                        alt="">--}}
                                </div>
                                <div class="clearfix polyfill-input-sc"></div>
                                <div class="col-sm-8 ">
                                    <input type="text" label="@lang('teacher_profile.until')" name="end" class="demo-form ad-input" id="datepickerWorkEndEdit-{{$work->id}}" value="{{ $work->until }}">
                                    <i class="icon-inp fa fa-calendar-o"></i>
                                    {{--
                                    <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                        alt="">--}}
                                </div>
                                <input type="hidden" name="workID" value="{{ $work->id }}">
                                <input type="hidden" id="delwork-{{ $work->id }}" name="del" value="no">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">@lang('profile.modal.abort')</button>

                    <button type="button" onClick="document.getElementById('delwork-{{ $work->id }}').value = 'yes'; document.getElementById('form-experience-edit-{{ $work->id }}').submit()" class="btn btn-primary" data-dismiss="modal">@lang('teacher_profile.delete')</button>
                    <button type="button" onClick="document.getElementById('form-experience-edit-{{ $work->id }}').submit()" class="btn btn-info">@lang('teacher_profile.save')</button>
                </div>
            </form>
        </div>
    </div>
</div>