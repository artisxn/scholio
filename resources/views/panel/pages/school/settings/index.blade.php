@extends('panel.layouts.main')

@section('styles')
<style>
    /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
@endsection

@section('content')

    Social-Links:
    <label class="switch">
      <input type="checkbox" onchange="change(this)" name="social" {{auth()->user()->info->settings->social ? 'checked' : ''}}>
      <div class="slider round"></div>
    </label>

<br />

    Map:
    <label class="switch">
      <input type="checkbox" onchange="change(this)" name="map" {{auth()->user()->info->settings->map ? 'checked' : ''}}>
      <div class="slider round"></div>
    </label>

<br />

    About:
    <label class="switch">
      <input type="checkbox" onchange="change(this)" name="about" {{auth()->user()->info->settings->about ? 'checked' : ''}}>
      <div class="slider round"></div>
    </label>

<br />

    Studies:
    <label class="switch">
      <input type="checkbox" onchange="change(this)" name="studies" {{auth()->user()->info->settings->studies ? 'checked' : ''}}>
      <div class="slider round"></div>
    </label>

<br />

    Scholarships:
    <label class="switch">
      <input type="checkbox" onchange="change(this)" name="scholarships" {{auth()->user()->info->settings->scholarships ? 'checked' : ''}}>
      <div class="slider round"></div>
    </label>

<br />

    Reviews:
    <label class="switch">
      <input type="checkbox" onchange="change(this)" name="reviews" {{auth()->user()->info->settings->reviews ? 'checked' : ''}}>
      <div class="slider round"></div>
    </label>

<br />

    Teachers:
    <label class="switch">
      <input type="checkbox" onchange="change(this)" name="teachers" {{auth()->user()->info->settings->teachers ? 'checked' : ''}}>
      <div class="slider round"></div>
    </label>

<br />

    Statistics:
    <label class="switch">
      <input type="checkbox" onchange="change(this)" name="statistics" {{auth()->user()->info->settings->statistics ? 'checked' : ''}}>
      <div class="slider round"></div>
    </label>

<br />

    Info:
    <label class="switch">
      <input type="checkbox" onchange="change(this)" name="info" {{auth()->user()->info->settings->info ? 'checked' : ''}}>
      <div class="slider round"></div>
    </label>

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
