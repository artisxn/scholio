<!-- ====== Studies Modal  Edit======= -->
<div id="studies-modal-edit-{{ $certificate->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
    <div class="modal-dialog">

        <div class="modal-content">
            <form id="form-study-edit-{{ $certificate->id }}" method="POST" action="{{ route('teacher-cv-certificate-edit') }}" name="form-studies">
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
                                <img class="modal-icon" src="/new/img/teacher/graduate.png" alt=""> </i>@lang('teacher_profile.section.studies')</div>
                            <div class="input-container">

                                <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                    <div class="typeahead__field typeahead__query">
                                        <input label="Τίτλος/Επίπεδο Σπουδών" class="js-typeahead-studies demo-form ad-input" name="degree" type="text" placeholder=""
                                            autocomplete="off" value="{{ $certificate->study->name }}">
                                        <i class="icon-inp fa fa-graduation-cap margin-top"></i>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                    <div class="typeahead__field typeahead__query">
                                        <input label="Εκπαιδευτικό Ίδρυμα/Εταιρία" class="js-typeahead-university demo-form ad-input" name="university" type="text"
                                            placeholder="" autocomplete="off" value="{{ $certificate->university->name }}">
                                        <i class="icon-inp fa fa-university"></i>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-sm-8 polyfill-input-sc">
                                    <input type="text" label="Από" name="start" class="demo-form ad-input" id="datepickerStudiesFromEdit" value="{{ $certificate->from }}">
                                    <i class="icon-inp fa fa-calendar-o"></i>
                                    {{--
                                    <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                        alt="">--}}
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-8 polyfill-input-sc">
                                    <input type="text" label="Μέχρι" name="end" class="demo-form ad-input" id="datepickerStudiesEndEdit" value="{{ $certificate->until }}">
                                    <i class="icon-inp fa fa-calendar-o"></i>
                                    {{--
                                    <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                        alt="">--}}
                                </div>

                                <input type="hidden" name="certID" value="{{ $certificate->id }}">
                                <input type="hidden" id="delstudy-{{ $certificate->id }}" name="del" value="no">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" onClick="document.getElementById('delstudy-{{ $certificate->id }}').value = 'yes'; document.getElementById('form-study-edit-{{ $certificate->id }}').submit()" class="btn btn-default" data-dismiss="modal">Διαγραφή</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                    <button type="button" onClick="document.getElementById('form-study-edit-{{ $certificate->id }}').submit()" data-dismiss="modal" class="btn btn-info">Αποθήκευση</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->