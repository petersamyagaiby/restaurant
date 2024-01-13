@extends('../layout/nav')

@section('title')
    My Last Bookings
@endsection

@section('basic-section')

<section class="container booking py-3">
    <div class="hero-container">
        <div class="booking-header text-center pb-5">
            <h1>My Bookings</h1>
        </div>
        <div class="booking-table">
            @if($bookings->isEmpty())
                <p>No bookings found.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Total Persons</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->date }}</td>
                                <td>{{ $booking->time }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->phone }}</td>
                                <td>{{ $booking->total_person }}</td>
                                <td>
                                    @if($booking->status === 0)
                                        Pending
                                    @elseif($booking->status === 1)
                                        Approved
                                    @elseif($booking->status === 2)
                                        Declined
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</section>
@endsection