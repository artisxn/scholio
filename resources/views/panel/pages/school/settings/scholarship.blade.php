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

input:checked + .slider {
  background-color: #00bcd4;
}

input:focus + .slider {
  box-shadow: 0 0 1px #00bcd4;
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
    .title{font-size: 140%; font-weight: 300;}
    .texts{ margin: 20px 0 0 0;}
    .switches{ margin: 9px 0 0 0;}
    .switch{ margin: 10px 0 0 0;}

    .fa-linear4{-webkit-text-stroke: 0.5px black;
        color: transparent; margin-right: 10px;}
    hr{border-color: #888}
</style>
@endsection

@section('content')


    <div class="" style="max-width: 600px; margin-left: 20px;">
        <div class="row  title">
            <i class="fa fa-cog hidden-xs" style="margin-right: 20px"></i>
            <span>Επιλογές Αίτησης Υποτροφίας</span>

        </div>

        <div class="row">
            <div class="" style="width: 500px; float: left">
                {{-- @foreach($fields as $field) --}}
                <div class="texts"> <i class="fa-linear4"></i>Ονοματεπώνυμο Μαθητή</div>
                <div class="texts"> <i class="fa-linear4"></i>Email Μαθητή</div>
                @foreach($categories as $category)
                  <h4>{{ $category->name }}</h4>
                  @foreach($category->fields as $field)
                   <div class="texts"> <i class="{{ $field->icon }} fa-linear4"></i>{{ $field->name }}</div>
                  @endforeach
                @endforeach
            </div>

            <div class="switches " style="max-width: 100px ; float: left">
            <label class="switch">
                <input type="checkbox" checked disabled>
                <div class="slider round"></div>
            </label>
            <label class="switch">
                <input type="checkbox" checked disabled>
                <div class="slider round"></div>
            </label>
                @foreach($categories as $category)
                  <h4>&nbsp;</h4>
                  @foreach($category->fields as $field)
                   <label class="switch">
                       <input type="checkbox" onchange="change(this)" name="{{ $field->slug }}" {{ auth()->user()->info->settings->{$field->slug} ? 'checked' : '' }}>
                       <div class="slider round"></div>
                   </label>
                  @endforeach
                @endforeach

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
