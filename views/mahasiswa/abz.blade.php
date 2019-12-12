
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Aksi</th>
                                //coba
                                <th scope="col">Coba</th>
                                //coba 2
                                <th scope="col">Coba 2</th>
				// halo apa kabar
				<th scope="col">baik2 saja</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $mahasiswa as $mhs)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$mhs->nama}}</td>
                                <td>{{$mhs->nim}}</td>
                                <td>{{$mhs->email}}</td>
                                <td>{{$mhs->jurusan}}</td>
                                <td>
                                    <a href="" class="badge badge-primary">edit</a>
                                    <a href="" class="badge badge-danger">delete</a>
                                </td>
                                //coba
                                <td>hai</td>
                                <td>hai lagi</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
