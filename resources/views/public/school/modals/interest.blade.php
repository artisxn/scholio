<div id="interest-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="panel " style="background-color: #324c5a; height: 90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;">
                    <div class="panel-heading" style="height: 55px; color: #fff">
                        <button type="button" class="btn pull-right modal-close" data-dismiss="modal">
                            x

                        </button>
                        <img src="/new/img/logoNX-light-m.webp" alt="scholio logo" class="pull-left sc-logo"
                            style="margin-top: 14px;">
                        <h3 class="pull-left panel-title" style="margin: 20px 0 0 15px;">Αίτημα
                            Ενδιαφέροντος</h3>
                    </div>

                </div>
                <div class="panel-body">

                    <div class="clearfix"></div>

                    <div class="select-container">
                        <div class="input-text-interest">Ονοματεπώνυμο
                        </div>
                        <input type="text" ng-model="interestName" class="modal-select" />
                    </div>
                    <div class="select-container">
                        <div class="input-text-interest">
                            Τηλεφωνο
                        </div>
                        <input type="text" ng-model="interestTel" class="modal-select" />
                    </div>
                    <div class="select-container">
                        <div class="input-text-interest">
                            Email
                        </div>
                        <input type="text" ng-model="interestEmail" class="modal-select" />
                    </div>


                    <div class="select-container">
                        <div class="input-text">
                            <img class="modal-icon" src="/new/img/teacher/graduate.png" alt="icon">
                            @lang('profile.modal.studiesSelect')
                        </div>
                        <select ng-model="interestStudy" class="modal-select">
                            <optgroup label="@{{level.level.name}}" ng-repeat="level in schoolStudies">
                                <option ng-repeat="study in level.studies" value="@{{study.study.id}}">@{{
                                    study.study.name }}</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="">
                        <input type="radio" ng-model="interestStudent" value="student"> Μαθητής<br>
                        <input type="radio" ng-model="interestStudent" value="guardian"> Γονέας<br>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input ng-model="checkbox" id="checkbox-signup" type="checkbox" name="terms"
                                    onclick="checkboxClicked()" required>
                                <label for="checkbox-signup">@lang('register-step2.accept')<a href="{{ url('terms') }}">
                                        <span class=" orange-hover">@lang('register-step2.terms')</span></a></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin-bottom: 40px;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                        <button type="button" ng-click="sendInterest()" data-dismiss="modal" class="btn btn-info"
                            ng-class="[{'disabledButton': !(interestStudy && interestName)}]" ng-disabled="!(interestName && interestTel && interestEmail && interestStudy && checkbox)">@lang('profile.modal.send')</button>
                    </div>
                </div>