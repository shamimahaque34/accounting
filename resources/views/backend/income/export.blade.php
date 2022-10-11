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
                                <th>Customer</th>
                                <th>Number</th>
                                <th>Reference</th>
                               
                              
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($incomes as $income)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $income->date}}</td>
                                    <td>{{ $income->payment_method}}</td>
                                    <td>{{ $income->account}}</td>
                                    <td>{{ $income->amount}}</td>
                                    <td>{{ $income->description}}</td>
                                    <td>{{ $income->category}}</td>
                                    <td>{{ $income->vendor}}</td>
                                    <td>{{ $income->number}}</td>
                                    <td>{{ $income->reference}}</td>
                                </tr>
                            @endforeach
                           
                            </tbody>
                        </table>