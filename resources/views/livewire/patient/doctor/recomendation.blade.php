<div>
    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>Recommendations</h3>
            <p class="text-muted">List of my Recommedations.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <div id="dashboard-daterangepicker" class="btn btn-outline-light">
                <span></span>
            </div>

        </div>
    </div>
    <div class="row">
        @if(count($recommendations)>0)
        <div class="alert alert-warning" role="alert">
           You dont have any running recommendations registered
        </div>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Recommendations</h6>
            <div class="table-responsive">
                <table id="recent-orders" class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Insurance type</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($recommendations as $value)
                            <tr>
                                <td>
                                    {{ $value->date_applied }}
                                </td>
                                <td>{{ $value->insurance_cover }}</td>
                                
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
