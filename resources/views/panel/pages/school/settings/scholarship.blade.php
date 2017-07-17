@extends('panel.layouts.main')

@section('styles')
<style>
    /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 24px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 10px;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .2s;
  transition: .2s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 2px;
  bottom: 2px;
  background-color: white;
  -webkit-transition: .2s;
  transition: .2s;
}

input:checked + .slider {background-color: #00bcd4;  }

input:focus + .slider {box-shadow: 0 0 1px #00bcd4;  }

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round { border-radius: 34px;  }
.slider.round:before { border-radius: 50%;  }

    .texts{ margin: 25px 0 0 0;}
    .switch{ margin-top: -22px; float: right}
    .text{ color: #999; max-width: 440px; font-size: 120%; font-weight: 300; line-height: 115%;}

    .fa-linear4{-webkit-text-stroke: 0.5px black; color: transparent; margin-right: 10px;}
    hr{border-color: #888; margin-bottom: -20px}
    .title {font-size: 150%; font-weight: 300; color: #00bcd4}

    .top-pad{ margin-top: 50px; margin-bottom: -20px;}

    .container-out{max-width: 550px; margin-left: 15px;}
    .container-left{width: 440px;}
    .diss:hover{cursor: not-allowed!important;}

      @media  (max-width: 480px) {
        .container-out{margin-left: 5px;}
        .container-left {width: 340px;}
    }
    @media  (max-width: 380px) {
        .container-out{margin-left: 5px;}
        .container-left {width: 99%;}
        .texts {width: 290px;}
    }




</style>
@endsection

@section('content')


    <div class="container-out">
        <div class="row ">
            <h3 style="font-weight: 300;"><i class="fa fa-trophy " style="margin-right: 15px"></i>@lang('settings.admissions.title')</h3>
            <p class="text">@lang('settings.admissions.subtitle')</p>
        </div>

        <div class="row">
            <div class="container-left">
                {{-- @foreach($fields as $field) --}}
                <div class="texts" style="margin-top: 8px;"> <i class="fa fa-user fa-linear4"></i>@lang('settings.admissions.name')</div>
                <label class="switch" style="opacity: 0.4">
                    <input type="checkbox" checked disabled>
                    <div class="slider round diss"></div>
                </label>
                <div style="margin-top: -10px; ">
                    <div class="texts"> <i class="fa fa-envelope fa-linear4"></i>@lang('settings.admissions.email')</div>
                    <label class="switch" style="opacity: 0.4">
                        <input type="checkbox" checked disabled>
                        <div class="slider round diss"></div>
                    </label>
                </div>

                <div class="">
                    @foreach($categories as $category)
                        {{--@if($category->id<5)--}}
                            <div class="top-pad title">{{ $category->name }}</div>
                            <hr>
                            @foreach($category->fields as $field)
                                <div class="texts"> <i class="{{ $field->icon }} fa-linear4"></i>
                                  @lang('settings.admissions.' . $field->slug )
                                </div>
                                <label class="switch">
                                    <input type="checkbox" onchange="change(this)" name="{{ $field->slug }}" {{ auth()->user()->info->settings->{$field->slug} ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                            @endforeach
                        {{--@endif--}}
                    @endforeach
                </div>
            </div>


        </div>

    </div>









@endsection

@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': Scholio.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

    function change(check){
        // console.log(check.name);
        axios.post('/api/school/settings', {
            section: check.checked,
            name: check.name
        })
      .then(function (response) {
        console.log(response.data);
      })
      .catch(function (error) {
        console.log(error);
      });
    }
</script>
@endsection
