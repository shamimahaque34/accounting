
           
            
                        <table>
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Rate</th>
                                <th>Type</th>
                              
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($taxes as $tax)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tax->name}}</td>
                                    <td>{{ $tax->rate}}</td>
                                    <td>{{ $tax->type}}</td>

                                   
                                   
                                </tr>
                            @endforeach
                           
                            </tbody>
                        </table>
                 
       

