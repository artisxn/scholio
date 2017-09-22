


{{--Styling on panel/layouts//main.blade.php--}}




<a href="/panel/users/student/studentCv"  class="top-img tool {{ request()->path() == 'panel/users/student/studentCv' ? 'img-active' : ''}}">
    <img src="/panel/assets/images/steps/skills2.png" alt="student image" class="top-image">
    <span class="tooltiptext4 tool5">@lang('panel/students/navigation.cv')</span>
</a>

<a href="/panel/users/student/mySchools"  class="top-img tool {{ request()->path() == 'panel/users/student/mySchools' ? 'img-active' : ''}}">
    <img src="/new/img/univ.png" alt="student image" class="top-image">
    <span class="tooltiptext4 tool5" style="">@lang('panel/students/navigation.schools')</span>
</a>

<a href="/panel/dashboard"  class="top-img tool {{ request()->path() == 'panel/dashboard' ? 'img-active' : ''}}">
    <img src="/panel/assets/images/steps/step3-open.png" alt="student image" class="top-image">
    <span class="tooltiptext4 tool5" style="">@lang('panel/students/navigation.my-admissions')</span>
</a>

<a href="/panel/users/student/review/show"  class="top-img tool {{ request()->path() == 'panel/users/student/review/show' ? 'img-active' : ''}}">
    <img src="/panel/assets/images/steps/stars.png" alt="student image" class="top-image">
    <span class="tooltiptext4 tool5" style="">@lang('panel/students/navigation.my-reviews')</span>
</a>