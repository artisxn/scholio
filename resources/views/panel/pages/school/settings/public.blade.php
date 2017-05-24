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
        .switch{ margin: 11px 0 0 0;}

        .fa-linear4{-webkit-text-stroke: 0.5px black;
            color: transparent; margin-right: 10px;}
        hr{border-color: #888}
    </style>
@endsection

@section('content')
    <div class="" style="max-width: 560px; margin-left: 20px;">
        <div class="row  title">
            <i class="fa fa-cog" style="margin-right: 20px"></i>
            <span>Επιλογές Δημόσιου Προφίλ</span>

        </div>

        <div class="row">
            <div class="" style="width: 220px; float: left">
                <div class="texts"> <i class="fa fa-twitter fa-linear4"></i>Social-Links:</div>
                <div class="texts"> <i class="fa fa-phone fa-linear4"></i>Επικοινωνία</div>
                <div class="texts"> <i class="fa fa-bar-chart fa-linear4"></i>Στατιστικά</div>
                <div class="texts"> <i class="fa fa-map fa-linear4"></i>Χάρτης</div>
                <hr>
                <div class="texts"> <i class="fa fa-info-circle fa-linear4"></i>Σχετικά</div>
                <div class="texts"> <i class="fa fa-book fa-linear4"></i>Σπουδές</div>
                <div class="texts"> <i class="fa fa-trophy fa-linear4"></i>Υποτροφίες</div>
                <div class="texts"> <i class="fa fa-star fa-linear4"></i>Αξιολογήσεις</div>
                <div class="texts"> <i class="fa fa-graduation-cap fa-linear4"></i>Διδάσκοντες</div>
            </div>

            <div class="switches " style="max-width: 100px ; float: left">
                <label class="switch">
                    <input type="checkbox" onchange="change(this)" name="social" {{auth()->user()->info->settings->social ? 'checked' : ''}}>
                    <div class="slider round"></div>
                </label>
                <label class="switch">
                    <input type="checkbox" onchange="change(this)" name="info" {{auth()->user()->info->settings->info ? 'checked' : ''}}>
                    <div class="slider round"></div>
                </label>
                <label class="switch">
                    <input type="checkbox" onchange="change(this)" name="statistics" {{auth()->user()->info->settings->statistics ? 'checked' : ''}}>
                    <div class="slider round"></div>
                </label>
                <label class="switch">
                    <input type="checkbox" onchange="change(this)" name="map" {{auth()->user()->info->settings->map ? 'checked' : ''}}>
                    <div class="slider round"></div>
                </label>

                <hr style="margin: 11px 0 7px -3px; width: 65px;">

                <label class="switch">
                    <input type="checkbox" onchange="change(this)" name="about" {{auth()->user()->info->settings->about ? 'checked' : ''}}>
                    <div class="slider round"></div>
                </label>
                <label class="switch">
                    <input type="checkbox" onchange="change(this)" name="studies" {{auth()->user()->info->settings->studies ? 'checked' : ''}}>
                    <div class="slider round"></div>
                </label>
                <label class="switch">
                    <input type="checkbox" onchange="change(this)" name="scholarships" {{auth()->user()->info->settings->scholarships ? 'checked' : ''}}>
                    <div class="slider round"></div>
                </label>
                <label class="switch">
                    <input type="checkbox" onchange="change(this)" name="reviews" {{auth()->user()->info->settings->reviews ? 'checked' : ''}}>
                    <div class="slider round"></div>
                </label>
                <label class="switch">
                    <input type="checkbox" onchange="change(this)" name="teachers" {{auth()->user()->info->settings->teachers ? 'checked' : ''}}>
                    <div class="slider round"></div>
                </label>

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
