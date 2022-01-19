<div class="navigation-menu-body">
    <ul>
        <li>
            <a href={{route('patient.home')}}>
                <span class="nav-link-icon">
                    <i data-feather="pie-chart"></i>
                </span>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a class="{{Request::segment(2)=='insurance' ? 'active' : null}}" href="{{route('patient.insurance')}}">
                <span class="nav-link-icon">
                    <i data-feather="message-circle"></i>
                </span>
                <span>Insurance</span>
                
            </a>
        </li>
        <li>
            <a class="{{Request::segment(2)=='notes' ? 'active' : null}}" href="{{route('patient.notes')}}" href="{{route('patient.notes')}}">
                <span class="nav-link-icon">
                    <i data-feather="mail"></i>
                </span>
                <span>Notes</span>
            </a>
        </li>
    
        <li>
            <a class="{{Request::segment(2)=='appointment' ? 'active' : null}}" href="{{route('patient.appointment')}}">
                <span class="nav-link-icon">
                    <i data-feather="calendar"></i>
                </span>
                <span>Appointments</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i data-feather="shopping-cart"></i>
                </span>
                <span>My History</span>
            </a>
            <ul>
                <li>
                    <a href="orders.html">Medical History</a>
                </li>
                <li>
                    <a href="products.html">Family History</a>
                </li>
                <li>
                    <a href="product-detail.html">Medication History</a>
                </li>
                <li>
                    <a href="product-detail.html">Alergies History</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i data-feather="edit-3"></i>
                </span>
                <span>Doctor Reviews</span>
            </a>
            <ul style="display: block">
                <li>
                    <a href="basic-forms.html">Vital Signs</a>
                </li>
                <li>
                    <a href="custom-forms.html">Physical Exams</a>
                </li>
                <li>
                    <a href="advanced-forms.html">Recommendations</a>
                </li>
                
            </ul>
        </li>

    </ul>
</div>