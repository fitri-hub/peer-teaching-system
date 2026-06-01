<h1>Admin Dashboard</h1>

<table border="1">
    <tr>
        <th>Data</th>
        <th>Jumlah</th>
    </tr>
    <tr>
        <td>Total Users</td>
        <td>{{ $totalUsers }}</td>
    </tr>
    <tr>
        <td>Total Tutors</td>
        <td>{{ $totalTutors }}</td>
    </tr>
    <tr>
        <td>Total Mata Pelajaran</td>
        <td>{{ $totalSubjects }}</td>
    </tr>
    <tr>
        <td>Total Booking</td>
        <td>{{ $totalBookings }}</td>
    </tr>
    <tr>
        <td>Booking Pending</td>
        <td>{{ $pendingBookings }}</td>
    </tr>
    <tr>
        <td>Booking Approved</td>
        <td>{{ $approvedBookings }}</td>
    </tr>
    <tr>
        <td>Booking Rejected</td>
        <td>{{ $rejectedBookings }}</td>
    </tr>
</table>