
{{--Styling on panel/layouts//main.blade.php--}}
    <a href="/panel/school/students"  class="top-img tool {{ request()->path() == 'panel/school/students' ? 'img-active' : ''}}">
        <img src="/new/img/student2.png" alt="student image" class="top-image">
        <span class="tooltiptext4">@lang('panel/schools/topbar.students')</span>
    </a>
    <a href="/panel/school/teachers"  class="top-img tool {{ request()->path() == 'panel/school/teachers' ? 'img-active' : ''}}">
       <img src="/new/img/teacher.png" alt="teacher image" class="top-image">
        <span class="tooltiptext4">@lang('panel/schools/topbar.teachers')</span>
    </a>
     <a href="/panel/school/studies"  class="top-img tool {{ request()->path() == 'panel/school/studies' ? 'img-active' : ''}}">
         <img src="/panel/assets/images/steps/step3-skills2.png" alt="skills image" class="top-image">
         <span class="tooltiptext4">@lang('panel/schools/topbar.studies')</span>
     </a>

     <a href="/panel/school/profile/images"  class="top-img tool {{ request()->path() == 'panel/school/profile/images' ? 'img-active' : ''}}">
         <img src="/panel/assets/images/steps/photo.png" alt="photos image" class="top-image">
         <span class="tooltiptext4">@lang('panel/schools/topbar.photos')</span>
     </a>

     <a href="/panel/school/scholarships/view"  class="top-img tool {{ request()->path() == 'panel/school/scholarships/view' ? 'img-active' : ''}}">
         <img src="/new/img/trophyB.png" alt="trophy image" class="top-image">
         <span class="tooltiptext4">@lang('panel/schools/topbar.scholarships')</span>
     </a>

     <a href="/panel/school/scholarships/request"  class="top-img tool {{ request()->path() == 'panel/school/scholarships/request' ? 'img-active' : ''}}">
         <img src="/panel/assets/images/steps/terms.png" alt="view image" class="top-image">
         <span class="tooltiptext4">@lang('panel/schools/topbar.admissions')</span>
     </a>

    <a href="/panel/dashboard"  class="top-img tool  {{ request()->path() == 'panel/dashboard' ? 'img-active' : ''}}">
        <img src="/panel/assets/images/steps/stars.png" alt="photos image" class="top-image">
        <span class="tooltiptext4">@lang('panel/schools/topbar.reviews')</span>
    </a>
