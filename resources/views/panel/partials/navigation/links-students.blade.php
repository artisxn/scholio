<li class="text-muted menu-title">Διαχειριση</li>
                            <li class="has_sub">
                                <a href="#" class=""><i class="ion-android-user-menu"></i><span> Προφίλ </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('students-profile') }}">Στοιχεία Επικοινωνίας</a></li>
                                    <li><a href="{{ route('students-my-schools') }}">Τα Εκπαιδευτήριά μου</a></li>
                                    <li><a href="">Το Βιογραφικό μου</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" >
                                    <i class="ion-trophy"></i>
                                    <span> Υποτροφίες </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">Αιτήματα</a></li>
                                    <li><a href="">Απαντήσεις</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class=""><i class="ion-ios7-star-half"></i><span> Αξιολογήσεις </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/panel/users/review/show') }}">Προβολή</a></li>
                                </ul>
                            </li>
