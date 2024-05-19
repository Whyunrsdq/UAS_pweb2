@extends('back.layout.dashboard')

@section('content')
   
 <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    @if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
                <div class="container px-6 py-8 mx-auto">
                    <div class="flex justify-between">
                    <h1 class="text-3xl font-medium text-black">Pesan Masuk</h1>
                    <form action="admin/cari" method="GET">
                    <div class="relative mt-1 flex">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
							clip-rule="evenodd"></path>
					</svg>
				</div>
				<input type="text" id="table-search" name="cari" value="" class="bg-white border border-gray-300 text-black text-sm rounded-lg block w-50 pl-10 p-2.5" placeholder="Search for items">
                <button class="py-3 px-5 bg-gray-900 text-white rounded-lg ml-1">Cari</button>
        </div>
    </form>
                    </div>
                    
    
                    <div class="mt-8">
    
                    </div>
    
                    <div class="flex flex-col mt-8">
                        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                            <div
                                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-t-lg">
                                <table class="min-w-full">
                                    <thead>
                                        <tr >
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-white uppercase border-b border-gray-200 bg-gray-900">
                                                No</th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-white uppercase border-b border-gray-200 bg-gray-900">
                                                Nama</th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-white uppercase border-b border-gray-200 bg-gray-900">
                                                Email</th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-white uppercase border-b border-gray-200 bg-gray-900">
                                                Pesan</th>
                                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-white uppercase border-b border-gray-200 bg-gray-900">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
               $counter = 1; // inisialisasi counter
              @endphp
            @foreach ($bukutamus as $data)
            <tr>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-black">{{ $counter++ }}</td>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-black">{{ $data->nama }}</td>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-black">{{ $data->email }}</td>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-black">{{ $data->pesan }}</td>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                  <div class="flex flex-wrap gap-2 px-3 justify-center">
                {{-- <a href="{{ url('/back/portofolio/delete/'.$data->id) }}" class="btn btn-danger">Delete</a> --}}
                
                <a href="{{ url('admin/update/'.$data->id) }}" class="bg-green-500 text-white p-2 rounded" >Update</a>
                <a href="{{ url('/admin/delete/'.$data->id) }}" class="bg-red-500 text-white p-2 rounded">Delete</a>
                </div>
              </td>
            </tr>
            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
  </div>
</div>
 @if($message = Session::get('delete'))
    <script>
        Swal.fire({
            title: "Data Berhasil Di Delete",
            //text: "{{ Session::get('delete') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
 @if($message = Session::get('update'))
    <script>
        Swal.fire({
            title: "Data Berhasil Di Update",
            //text: "{{ Session::get('update') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
<script>
  function confirmDelete(url) {
    Swal.fire({
      title: "Are you sure?",
      text: "to delete this data",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect to the delete URL
        window.location.href = url;
      }
    });
  }
</script>
@endsection