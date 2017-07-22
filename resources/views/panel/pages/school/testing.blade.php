<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css">

<style>
    body{background: #eee}
    .container{background: #eaeaea;}

    @media(min-width: 1600px){
        .container{width: 1400px;}
    }
    @media(min-width: 1800px){
        .container{width: 1600px;}
    }
    @media(min-width: 2000px){
        .container{width: 1800px;}
    }

    /* ===================================================== */
    /* ==================                =================== */
    /* ===================================================== */
    *, *:before, *:after {box-sizing:  border-box !important;}
    .row {
        -moz-column-width: 25em;
        -webkit-column-width: 25em;
        -moz-column-gap: .5em;
        -webkit-column-gap: .5em;
    }
    .panel {
        display: inline-block;
        margin:  .5em;
        padding:  0;
        width:98%;
        border: 1px solid #008da5; border-radius: 4px; text-align: center; box-shadow: 0 0 11px #bbb;
    }
    .content{min-height: 20px; padding: 10px}
    .counter{color: #00839b; font-size: 130%; margin: 0 3px 0 15px}
    .text{color: #008da5;  font-size: 120%}


    /* ===================================================== */
    /* ==================                =================== */
    /* ===================================================== */

    .masonry { /* Masonry container */
        column-count: 5;
        column-gap: 1em;
    }

    .item { /* Masonry bricks or child elements */
        border: 1px solid #008da5; border-radius: 4px; text-align: center; box-shadow: 0 0 11px #bbb;
        padding: 10px 7px;;
        display: inline-block;
        margin: 0 0 1em;
        width: 100%;
    }


    @media(max-width: 1200px){
        .masonry {  column-count: 4;}
    }
    @media(max-width: 900px){
        .masonry {  column-count: 3;}
    }
    @media(max-width: 650px){
        .masonry {  column-count: 2;}
    }
    @media(max-width: 510px){
        .masonry {  column-count: 1;}
    }
</style>


<body>
<div class="container">
    <h3>Masonry Bootstrap Panels</h3>
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">Title</div>
            <div class="panel-body">
                <a href="{{ url('/panel/school/students') }}">
                    <div class="content">
                        <img src="/new/img/student2.png" alt="student image" height="45px">
                        <span class="counter">12</span>
                        <span class="text">Μαθητές</span>
                    </div>
                </a>
                Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                Quisque mauris augue, gravida a libero. Aenean sit amet felis
                dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                Aliquam in felis sit amet augue.
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Title</div>
            <div class="panel-body">
                <a href="{{ url('/panel/school/students') }}">
                    <div class="content">
                        <img src="/new/img/teacher.png" alt="student image" height="45px">
                        <span class="counter">23</span>
                        <span class="text">Καθηγητές</span>
                    </div>
                </a>
                Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                Quisque mauris augue orci quis tortor imperdiet venenatis.
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">Title</div>
            <div class="panel-body">
                <a href="{{ url('/panel/school/students') }}">
                    <div class="content">
                        <img src="/panel/assets/images/steps/step3-skills2.png" alt="student image" height="45px">
                        <span class="counter">34</span>
                        <span class="text">Ειδικότητες</span>
                    </div>
                </a>
                Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                Quisque mauris augue orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                Aliquam in felis sit amet augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                Quisque mauris augue, gravida a libero. Aenean sit amet felis
                dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                Aliquam in felis sit amet augue.
            </div>
        </div>

         <div class="panel panel-default">
                <div class="panel-heading">Title</div>
                <div class="panel-body">
                    <a href="{{ url('/panel/school/students') }}">
                        <div class="content">
                            <img src="/new/img/trophy4.png" alt="student image" height="45px">
                            <span class="counter">43</span>
                            <span class="text">Υποτροφίες</span>
                        </div>
                    </a>
                    Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                    Quisque mauris augue.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Title</div>
                <div class="panel-body">
                    <a href="{{ url('/panel/school/students') }}">
                        <div class="content">
                            <img src="/panel/assets/images/steps/terms.png" alt="student image" height="45px">
                            <span class="counter">54</span>
                            <span class="text">Αιτήσεις</span>
                        </div>
                    </a>

                    Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                    Quisque mauris augue orci quis tortor imperdiet venenatis. Aenean sit amet felis
                    dolor, in sagittis nisi.
                </div>
            </div>


        </div>


    <div class="masonry">
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="item"> Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue, gravida a libero. Aenean sit amet felis
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
            Aliquam in felis sit amet augue.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis tortor imperdiet venenatis. Aenean sit amet felis
            dolor, in sagittis nisi.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis
        </div>
        <div class="item"> Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue, gravida a libero. Aenean sit amet felis
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
            Aliquam in felis sit amet augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue, gravida a libero. Aenean sit amet felis
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
            Aliquam in felis sit amet augue.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis tortor imperdiet venenatis. Aenean sit amet felis
            dolor, in sagittis nisi.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="item"> Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue, gravida a libero. Aenean sit amet felis
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
            Aliquam in felis sit amet augue.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis tortor imperdiet venenatis. Aenean sit amet felis
            dolor, in sagittis nisi.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis tortor imperdiet venenatis. Aenean sit amet felis
            dolor, in sagittis nisi.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="item"> Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue, gravida a libero. Aenean sit amet felis
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
            Aliquam in felis sit amet augue.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis tortor imperdiet venenatis. Aenean sit amet felis
            dolor, in sagittis nisi.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis
        </div>
        <div class="item"> Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue, gravida a libero. Aenean sit amet felis
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
            Aliquam in felis sit amet augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue, gravida a libero. Aenean sit amet felis
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis tortor imperdiet venenatis. Aenean sit amet felis
            dolor, in sagittis nisi.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="item"> Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue, gravida a libero. Aenean sit amet felis
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
            Aliquam in felis sit amet augue.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis tortor imperdiet venenatis. Aenean sit amet felis
            dolor, in sagittis nisi.
        </div>
        <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue orci quis
        </div>
    </div>


</div>
</body>
