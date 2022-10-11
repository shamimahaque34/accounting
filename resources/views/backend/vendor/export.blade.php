
           
            
                        <table>
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Website</th>
                                <th>Reference</th>
                                <th>Tax Number</th>
                                <th>Currency</th>
                                <th>Address</th>
                                <th>Town</th>
                                <th>Postal Code</th>
                                <th>State</th>
                                <th>Country</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($vendors as $vendor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $vendor->name}}</td>
                                    <td>{{ $vendor->email}}</td>
                                    <td>{{ $vendor->phone}}</td>
                                    <td>{{ $vendor->website}}</td>
                                    <td>{{ $vendor->reference}}</td>
                                    <td>{{ $vendor->tax_number}}</td>
                                    <td>{{ $vendor->currency->name ?? ''}}</td>
                                    <td>{{ $vendor->address}}</td>
                                    <td>{{ $vendor->town}}</td>
                                    <td>{{ $vendor->postal_code}}</td>
                                    <td>{{ $vendor->state}}</td>
                                    <td>{{ $vendor->country}}</td>
                                   
                                   
                                </tr>
                            @endforeach
                           
                            </tbody>
                        </table>
                 
       

