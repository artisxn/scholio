<div id="connect-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="panel " style="background-color: #324c5a; height: 90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;">
                    <div class="panel-heading" style="height: 55px; color: #fff">
                        <button type="button" class="btn pull-right modal-close" data-dismiss="modal">
                            x

                        </button>
                        <img src="/new/img/logoNX-light-m.webp" alt="scholio logo" class="pull-left sc-logo"
                            style="margin-top: 14px;" alt="scholio logo">
                        <h3 class="pull-left panel-title" style="margin: 20px 0 0 15px;">@lang('profile.request')</h3>
                    </div>

                </div>
                <div class="panel-body">
                    <img class="pull-left margin-right-10" style="height: 45px;" src="{{ $school->logo}}">


                    @if(auth()->check() && auth()->user()->role == 'student')
                    <span> @{{ contactInfo.name }}: @lang('profile.modal.message') </span>


                    <div class="input-container">

                        <div class="select-container">
                            <div class="input-text">
                                <img class="modal-icon" src="/new/img/teacher/graduate.png" alt="icon">
                                @lang('profile.modal.studiesSelect')
                            </div>
                            <select ng-model="selectedStudy" class="modal-select">
                                <optgroup label="@{{level.level.name}}" ng-repeat="level in schoolStudies">
                                    <option ng-repeat="study in level.studies" value="@{{study.study.id}}">@{{
                                        study.study.name }}</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="select-container">
                            <div class="input-text">
                                <img class="modal-icon" src="/new/img/teacher/team.png" alt="icon">@lang('profile.modal.statusSelect')
                            </div>
                            <select ng-model="selectedStatus" class="modal-select cursor-hand">
                                <option value="connected">@lang('panel/schools/resource.students.active')</option>
                                <option value="allumni">@lang('panel/schools/resource.students.alumni')</option>
                            </select>
                        </div>
                    </div>

                    @elseif(auth()->check() && auth()->user()->role == 'teacher')
                    <span>@{{ contactInfo.name }}: Με τη σύνδεση σας, το δημόσιο προφίλ σας θα φαίνεται στο
                        εκπαιδευτικό ίδρυμα</span>

                    <div class="input-container">
                        <div class="select-container">
                            <div class="input-text">
                                <img class="modal-icon" src="/new/img/teacher/graduate.png" alt="icon">Περιγραφή
                                Βασικής Ειδικότητας/Σπουδών
                            </div>
                            <input type="text" ng-model="selectedStudy" class="modal-select" />
                        </div>

                        <div class="select-container">
                            <div class="input-text">
                                <img class="modal-icon" src="/new/img/teacher/team.png" alt="icon" style="height: 45px">Επιλογή
                                Κατάστασης
                            </div>
                            <select ng-model="selectedStatus" class="modal-select cursor-hand">
                                <option value="connected">@lang('panel/schools/resource.teachers.active')</option>
                                <option value="allumni">@lang('panel/schools/resource.teachers.alumni')</option>
                            </select>
                        </div>
                    </div>

                    @endif


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                    <button type="button" ng-click="sendRequest()" data-dismiss="modal" class="btn btn-info"
                        ng-class="[{'disabledButton': !(selectedStudy && selectedStatus)}]" ng-disabled="!(selectedStudy && selectedStatus)">@lang('profile.modal.send')</button>
                </div>
            </div>
        </div>
    </div>