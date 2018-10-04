<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>schol.io | Terms</title>




    <!--====== CSS  Styles =======-->
    @include('public.styles')


    <!-- Profile  CSS -->
    <link href="/new/css/terms.css" rel="stylesheet">


    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>


    <style>
        body {
            background-color: #F1F4F5;
        }
        h1{font-size: 170%; font-weight: 300; color: #667; margin-top: 50px;}
        h3{font-size: 130%; font-weight: 400; color: #778; margin-top: 45px;}
        h5{font-size: 115%; font-weight: 400; color: #997; margin-top: 25px;}
        .dropdown-menu{background-color: #eee; padding-top: 20px}
        .mainBody{min-height: 1100px;}
        .outerBox{min-height: 800px; background: #fafafa; border: 1px solid #ccc; border-radius: 6px; width: 80%;  margin: 120px auto 50px auto; padding: 30px;}
        .terms{color: #999; text-indent: 50px; line-height: 180%; word-spacing: 3px; text-align: justify;}

        .terms::first-letter {
            font-size: 130%;
        }


        @media( max-width: 620px){
            .outerBox{width: 90%;}
        }
        @media( max-width: 560px){
            .outerBox{width: 98%;}
        }
    </style>

</head>
<body>



<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header " id="header" style="z-index: 2">

    <div class="container" style="">
        <div class="row scholarship-profile-nav-row">

            <div class="pull-left visible-lg visible-md nav-web ">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="{{asset('new/img/logoNX.webp')}}"  class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <img src="{{asset('new/img/logoNX-m.webp')}}" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="pull-right visible-md visible-lg" >
                <ul class="nav navbar-nav navbar-right sc-landing-menu" >

                    <li class="" style="margin-top: 16px">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="selectpicker" data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-white">
                                <option style="color: black" data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                <option style="color: black" data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                            </select>
                        </form>
                    </li>

                    <li class="sc-landing-menu-item">
                        <a href="{{url('public/scholarships')}}" class="btn-change-search">
                            <i class="fa fa-trophy margin-right-5"></i>
                            @lang('schools.navigation.search_scholarship')
                        </a>
                    </li>
                    <li class="sc-landing-menu-item" style="margin-right: -12px">
                        <a href="{{url('public/schools')}}" class="btn-change-search">
                            <i class="fa fa-university margin-right-5"></i>
                            @lang('scholarships.search_institution')
                        </a>
                    </li>


                    @if(auth()->check())
                        <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-orange sc-t-white" style="margin-right: -12px">@lang('main.navigation.admin')</button></a></li>
                        <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white ">@lang('main.navigation.logout')</button></a></li>
                    @else
                        <li><a href="{{ url('/register/role') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white" style="margin-right: -12px">@lang('main.navigation.register')</button></a></li>
                        <li><a href="{{ url('/login') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white">@lang('main.navigation.login')</button></a></li>
                    @endif
                </ul>
            </div>


            <!-- Mobile Menu -->
            <div class="col-xs-6 visible-sm visible-xs " style="z-index: 6000; height: 20px;">
                <div class="">
                    <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                        <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                            <img src="{{asset('new/img/collapse-dark2.webp')}}" alt="scholio logo"  style="height:22px; margin-top: 7px;">
                            {{--<img src="{{asset('new/img/collapse-dark.png')}}" alt="scholio logo">--}}
                        </div>
                    </div>
                </div>

            </div>

            <!-- ======= Sandwich Menu =======-->
            @include('public.sandwich-menu-scholarshipProfile')

        </div>  <!-- row -->
    </div><!-- container-->


</header>

<div class="container mainBody">
    <div class="outerBox">

        <h1>@lang('terms.termsOfUse')</h1>

        <h3>@lang('terms.titles.a')</h3>
        <p class="terms">@lang('terms.terms.1')</p>
        <p class="terms">@lang('terms.terms.2')</p>
        <p class="terms">@lang('terms.terms.3')</p>
        <p class="terms">@lang('terms.terms.4')</p>
        <p class="terms">@lang('terms.terms.5')</p>

        <h3>@lang('terms.titles.b')</h3>
        <p class="terms">@lang('terms.terms.6')</p>
        <p class="terms">@lang('terms.terms.7')</p>


        <h3>@lang('terms.titles.c')</h3>
        <h5>@lang('terms.titles.c1')</h5>
        <p class="terms">@lang('terms.terms.8')</p>
        <p class="terms">@lang('terms.terms.9')</p>
        <p class="terms">@lang('terms.terms.10')</p>
        <p class="terms">@lang('terms.terms.11')</p>
        <p class="terms">@lang('terms.terms.12')</p>
        <h5>@lang('terms.titles.c2')</h5>
        <p class="terms">@lang('terms.terms.13')</p>
        <h5>@lang('terms.titles.c3')</h5>
        <p class="terms">@lang('terms.terms.14')</p>
        <h5>@lang('terms.titles.c4')</h5>
        <p class="terms">@lang('terms.terms.15')</p>


        <h3> IV. Κατάταξη Εκπαιδευτικών Ιδρυμάτων και Υποτροφιών</h3>
        <p class="terms">
            Με την επιφύλαξη της προνομιακής προβολής των Επιχειρήσεων βάσει των παρόντων όρων, το schol.io δε προκρίνει, εγκρίνει ή υποδεικνύει τα Εκπαιδευτικα Ιδρύματα ή/και τις παρεχόμενες από αυτές υποτροφίες, τα χαρακτηριστικά, ιδιοκτήτες, τιμές ή πολιτικές αυτών.
            Δεν αποτελεί και δεν θα πρέπει να θεωρείται μέσο υπόδειξης ή έγκρισης (της τιμής, του επιπέδου υπηρεσιών ή της βαθμολογίας) οποιασδήποτε διαθέσιμης στην Πλατφόρμα Επιχείρησης η/και υποτροφίας. Οι διαθέσιμες φωτογραφίες και τα κείμενα που συνοδεύουν τις Επιχειρήσεις και τις παρεχόμενες από αυτές υπηρεσίες εκπαίδευσης,
            αποσκοπούν αποκλειστικά και μόνο στην περιγραφή αυτών και σε καμία περίπτωση δεν είναι ή θεωρούνται υπόδειξη εκ μέρους του schol.io.

            Η σειρά με την οποία εμφανίζονται τα Εκπαιδευτικά Ιδρύματα και οι παρεχόμενες από αυτά εκπαιδευτικές υπηρεσίες και υποτροφίες στην Πλατφόρμα, καθορίζεται αυτόματα και μονομερώς από το schol.io. Το schol.io επιφυλάσσεται του δικαιώματός της να διαφοροποιήσει μονομερώς τον τρόπο εμφάνισης των
            Εκπαιδευτικών Ιδρυμάτων ή/και των εκπαιδευτικών υπηρεσιών και υποτροφιών, ενημερώνοντας τα Μέλη με σχετική ανάρτηση στο δικτυακό τόπο, όπως ορίζεται στους παρόντες Γενικούς Όρους αναφορικά με την τροποποίηση των παρόντων.
        </p>
        <h3>V. Τιμολογιακή Πολική</h3>
        <h5>Χρήστες</h5>
        <p class="terms">Για όλους τους χρήστες (μαθητές, καθηγητές και γονείς) όλες οι προσφερόμενες υπηρεσίες της πλατφόρμας του schol.io, όπως η αναζήτηση εκπαιδευτικών ιδρυμάτων και υποτροφιών, η εγγραφή μέλους και η δημιουργία βιογραφικού του, η αίτηση και η διεκδικιση υποτροφίας παρέχονται εντελώς δωρεάν.</p>

        <h5>Εκπαιδευτικά Ιδρύματα</h5>
        <p class="terms">
            Για κάθε εκπαιδευτικό ίδρυμα η δημιουργία του "βασικού προφίλ" (το οποίο περιλαμβάνει τα στοιχεία επικοινωνίας, χάρτη, φωτογραφιές προβολής, και λίγα λόγια για το εκπαιδευτικό ίδρυμα) είναι δωρεάν. Το "premium profile" που προσφέρει επιπλέον το schol.io δίνει τη δυνατότητα στα εκπαιδευτικά ιδρύματα να συνδέσουν στο προφίλ τους, το υπάρχον δυναμικό (μαθητές και καθηγητές), να λάβουν testimonials και να έχουν τη δυνατότητα να προβάλουν στο προφίλ δυναμικά πληροφορίες σύμφωανα με τις επιλογές τους. Το "premium profile" προσφέρεται στα εκπαιδευτικά ιδρύματα με μηνιαία συνδρομή.
            Η δυνατότητα δημιουργίας, προβολής και διαχείρισης των υποτροφιών προσφέρεται δωρεάν στα εκπαιδευτικά ιδρύματα, τα οποία πληρώνουν μόνο για τις αιτήσεις ενδιαφέροντος που έχουν λάβει, ή για τις αιτήσεις υποτροφιών και η χρέωση γίνεται ανά αίτηση. 
        </p>

        <br>
        <br>
        <p class="terms">
            Τελευταία ενημέρωση 31.05.2018
        </p>

        <h3>VI. Νομική Υπόσταση schol.io</h3>

        <h5>Γενικά</h5>
        <p class="terms">
            Η δραστηριότητα του schol.io εξαντλείται στην προβολή εκπαιδευτκών υπηρεσιών κσι υποτροφιών εκ μέρους των Επιχειρήσεων στους Χρήστες, δεν κατέχει και δε διευθύνει καμία Εκπαιδευτική Επιχείρηση και δεν παρέχει η ίδια υπηρεσίες εκπαίδευσης, ούτε και παρέχει εγγυήσεις για την ποιότητα των σπουδών των Επιχειρήσεων που θα παρέχουν αυτές στους Χρήστες και αντιστρόφως για την έγκυρη παρουσίαση των αιτήσεων/βιογραφικών των Χρηστών στην Επιχείρηση κατά την δηλωθείσα αίτηση, για το ήθος και τη διαγωγή τους, ούτε και για την πλήρη και ολοσχερή εξόφληση της επιχείρησης κατά την αποχώρησή του από αυτή.
        </p>

        <h5>Δικαιώματα και Υποχρώσεις του schol.io</h5>
        <p class="terms">
            Περάν των όσων περιπτώσεων αναφέρονται στους παρόντες Γενικούς Όρους αναφορικά με τη διαγραφή Λογαριασμού Μέλους, το schol.io ρητά επιφυλάσσεται του δικαιώματός της κατά την απόλυτη διακριτική της ευχέρεια να απενεργοποιήσει προσωρινά το Λογαριασμό του Μέλους άμεσα και αζημίως, σε περίπτωση που αυτή κρίνει ότι ο Χρήστης έχει παραβιάσει οποιονδήποτε όρο του παρόντος, ή έχει ληξιπρόθεσμες οφειλές προς αυτή και μέχρις ότου άρει την παράβαση εντός διαστήματος που το schol.io κατά την απόλυτη διακριτική της ευχέρεια του έχει τάξει. Σε περίπτωση μη συμμόρφωσης του, το schol.io δύναται να απενεργοποιήσει οριστικά το Λογαριασμό του Μέλους, επιφυλασσόμενης ρητά παντός νομίμου δικαιώματός της συμπεριλαμβανομένου και του δικαιώματος για αποκατάστασης οποιασδήποτε ζημίας έχει τυχόν υποστεί από τις πράξεις ή/και παραλήψεις του Χρήστη σύμφωνα με τα ανωτέρω.

Ρητά συμφωνείται ότι το Μέλος δεν δύναται να αξιώσει την ανόρθωση οποιαδήποτε ζημίας του από την απενεργοποίηση της Υπηρεσία σύμφωνα με τις ως άνω διατάξεις, ακόμη και σε περίπτωση που οι ενδείξεις στις οποίες βασίστηκε το schol.io για τη διαγραφή του Λογαριασμού ήταν εσφαλμένες, καθόσον αναγνωρίζει και αποδέχεται ότι τα αυτοματοποιημένα μέσα που χρησιμοποιεί το schol.io για την εξεύρεση τυχόν παράνομων ή αντισυμβατικών δραστηριοτήτων των Μελών, βασίζονται είτε σε γενικές τυποποιημένες/αυτοματοποιημένες εντολές ενός προγράμματος λογισμικού το οποίο ενδέχεται να περιλαμβάνει ή/και να προβεί σε σφάλματα, είτε και σε καταγγελίες άλλων Μελών.

Εξυπακούεται ότι το Μέλος που έχει διαγραφεί από την Υπηρεσία απαγορεύεται να γίνει μέλος ξανά της Υπηρεσίας με τα ίδια ή άλλα στοιχεία εκτός και αν το schol.io συναινέσει ρητώς προς τούτο. Προς τον σκοπό αυτό το Μέλος συναινεί το schol.io να διατηρεί τα προσωπικά του στοιχεία στο σύστημά της προκειμένου να είναι σε θέση να ταυτοποιήσει τυχόν μεταγενέστερη προσπάθεια εγγραφής του.
        </p>




    </div>

</div>



<!-- Footer -->
    @include('public.footer')
</body>
</html>