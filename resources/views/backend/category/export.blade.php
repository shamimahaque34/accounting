<table>
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Color</th>
                               
                              
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name}}</td>
                                    <td>{{ $category->type}}</td>
                                    <td>{{ $category->color}}</td>
                                    

                                   
                                   
                                </tr>
                            @endforeach
                           
                            </tbody>
                        </table>
                 