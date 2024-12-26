<h2>Hey, It's me {{$data->name}}</h2>
  <table class="table caption-top table-bordered" style="border-collapse: collapse; width:600px;">
    <tbody>
      <tr>
        <td style="border: 1px solid #000; padding: 8px;"><strong>First Name</strong></td>
      </tr>
  
       <tr>
        <td style="border: 1px solid #000; padding: 8px;">{{ $data->first_name }}</td>
      </tr>
     <tr>
        <td style="border: 1px solid #000; padding: 8px;"><strong>Last Name</strong></td>
      </tr>
      <tr>
        <td style="border: 1px solid #000; padding: 8px;">{{ $data->last_name }}</td>
      </tr>
       <tr>
        <td style="border: 1px solid #000; padding: 8px;"><strong>Email</strong></td>
      </tr>
       <tr>
        <td style="border: 1px solid #000; padding: 8px;">{{ $data->email }}</td>
      </tr>
        <tr>
        <td style="border: 1px solid #000; padding: 8px;"><strong>Message</strong></td>
      </tr>
       <tr>
        <td style="border: 1px solid #000; padding: 8px;">{{ $data->message }}</td>
      </tr>
    </tbody>
  </table>