<div>
    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>Doctors Exams</h3>
            <p class="text-muted">List of exams.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <div id="dashboard-daterangepicker" class="btn btn-outline-light">
                <span></span>
            </div>
        
        </div>
    </div>
    <div class="row">
        @if(count($exam)>0)
        <div class="alert alert-warning" role="alert">
            You dont have any running exams 
        </div>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Recent Orders</h6>
            <div class="table-responsive">
                <table id="recent-orders" class="table">
                    <thead>
                        <tr>
                            <th>Date Applied</th>
                            <th>Exam Type</th>
                            <th>Description</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($exam as $value)
                            <tr>
                                <td>
                                    {{ $value->date_applied }}
                                </td>
                                <td>{{ $value->insurance_cover }}</td>
                                <td>{{ $value->payment_method }}</td>
                                <td>
                                    <span class="badge bg-secondary-bright text-secondary">{{ $value->status }}</span>
                                </td>
                                <td>{{ $value->deposit_amount }}</td>
                                <td class="text-right">
                                    {{ $value->period }}
                                </td>
                                <td><span class="fa fa-trash"></span> Remove</td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="">No Record Found</td>
                            </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>

