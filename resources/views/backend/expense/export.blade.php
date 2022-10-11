<table>
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Date</th>
                                <th>Payment Method</th>
                                <th>Account</th>
                                <th>Amount</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Vendor</th>
                                <th>Number</th>
                                <th>Reference</th>
                               
                              
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($expenses as $expense)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $expense->date}}</td>
                                    <td>{{ $expense->payment_method}}</td>
                                    <td>{{ $expense->account}}</td>
                                    <td>{{ $expense->amount}}</td>
                                    <td>{{ $expense->description}}</td>
                                    <td>{{ $expense->category}}</td>
                                    <td>{{ $expense->customer}}</td>
                                    <td>{{ $expense->number}}</td>
                                    <td>{{ $expense->reference}}</td>
                                </tr>
                            @endforeach
                           
                            </tbody>
                        </table>