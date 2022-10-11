
           
            
                        <table>
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Sku</th>
                                <th>Description</th>
                                <th>Sale Price</th>
                                <th>Purchase Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>Tax</th>
                              
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->sku}}</td>
                                    <td>{{ $item->description}}</td>
                                    <td>{{ $item->sale_price}}</td>
                                    <td>{{ $item->purchase_price}}</td>
                                    <td>{{ $item->quantity}}</td>
                                    <td>{{ $item->category->name ?? ''}}</td>
                                    <td>{{ $item->tax->name ?? ''}}</td>

                                   
                                   
                                </tr>
                            @endforeach
                           
                            </tbody>
                        </table>
                 
       

