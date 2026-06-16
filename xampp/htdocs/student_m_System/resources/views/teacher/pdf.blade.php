<!DOCTYPE html>
<html>
<head>
    <title>Teachers Report</title>

    <style>
        body {
            font-family: DejaVu Sans, Arial, sans-serif;
            font-size: 11px;
            color: #2d3436;
        }

        .header {
            text-align: center;
            background: linear-gradient(135deg, #4F46E5, #6D28D9);
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .header h2 {
            margin: 0;
            font-size: 22px;
        }

        .header p {
            margin: 5px 0 0;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            border-radius: 6px;
            overflow: hidden;
        }

        th {
            background: #4F46E5;
            color: white;
            padding: 10px;
            font-size: 12px;
            text-align: left;
        }

        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background: #f8f9fa;
        }

        tr:hover {
            background: #e9ecef;
        }

        .badge {
            background: #dfe6e9;
            padding: 3px 6px;
            border-radius: 4px;
            font-size: 10px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 10px;
            color: #636e72;
        }
    </style>
</head>

<body>


<div style="text-align:center; margin-bottom:15px;">
    <h2 style="margin:0; color:#4F46E5;">Teacher Details</h2>
    <p style="margin:0; font-size:12px;">School Management System Report</p>
</div>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Phone</th>
        <th>NIC</th>
        <th>DOB</th>
        <th>Address</th>
    </tr>
    </thead>

    <tbody>
    @foreach($teachers as $teacher)
        <tr>
            <td>{{ $teacher->id }}</td>
            <td><span class="badge">{{ $teacher->title }}</span></td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->email }}</td>
            <td>{{ $teacher->course }}</td>
            <td>{{ $teacher->phone }}</td>
            <td>{{ $teacher->nic }}</td>
            <td>{{ $teacher->dob }}</td>
            <td>{{ $teacher->address }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="footer">
    © {{ date('Y') }} School Management System | Generated Report
</div>

</body>
</html>
