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

                            @foreach($customers as $customer)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->name}}</td>
                                    <td>{{ $customer->email}}</td>
                                    <td>{{ $customer->phone}}</td>
                                    <td>{{ $customer->website}}</td>
                                    <td>{{ $customer->reference}}</td>
                                    <td>{{ $customer->tax_number}}</td>
                                    <td>{{ $customer->currency->name ?? ''}}</td>
                                    <td>{{ $customer->address}}</td>
                                    <td>{{ $customer->town}}</td>
                                    <td>{{ $customer->postal_code}}</td>
                                    <td>{{ $customer->state}}</td>
                                    <td>{{ $customer->country}}</td>

                                   
                                   
                                </tr>
                            @endforeach
                           
                            </tbody>
                        </table>