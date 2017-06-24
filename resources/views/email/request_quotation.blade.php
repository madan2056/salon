<html>


<body>

<table border="1" cellpadding="10" cellspacing="10" style="border-collapse:collapse;width:400px;">
    <tbody>

    <tr>
        <td style="width:40%"><b>Full Name</b></td>
        <td style="width:60%">{{ $data['full_name'] }}</td>
    </tr>
    <tr>
        <td style="width:40%"><b>Email</b></td>
        <td style="width:60%">{{ $data['email'] }}</td>
    </tr>
    <tr>
        <td style="width:40%"><b>Phone Number: </b></td>
        <td style="width:60%">{{ $data['phone_number'] }}</td>
    </tr>
    <tr>
        <td style="width:40%"><b>Address: </b></td>
        <td style="width:60%">{{ $data['address'] }}</td>
    </tr>
    <tr>
        <td style="width:40%"><b>Service: </b></td>
        <td style="width:60%">{{ $service }}</td>
    </tr>
    <tr>
        <td style="width:40%"><b>Quantity: </b></td>
        <td style="width:60%">{{ $data['quantity'] }}</td>
    </tr>
    <tr>
        <td style="width:40%"><b>More Detail: </b></td>
        <td style="width:60%">{{ nl2br($data['detail']) }}</td>
    </tr>

    </tbody>
</table>

</body>

</html>