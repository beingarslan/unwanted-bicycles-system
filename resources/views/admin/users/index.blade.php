<x-base-layout>
    @section('styles')
        <link href="{{ asset('demo1/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('demo1/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('demo1/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @endsection

    <div class="card">
        <div class="card-body py-4">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">User</th>
                        <th class="min-w-125px">Address</th>
                        <th class="min-w-125px">Joined At</th>
                        <th class="min-w-125px">Status</th>
                        <th class="text-end min-w-100px">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                </tbody>
            </table>
        </div>
    </div>

    @section('scripts')
        <script src="{{ asset('demo1/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script src="{{ asset('demo1/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('demo1/js/scripts.bundle.js') }}"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function() {
                $.noConflict();
                var table = $('#kt_table_users').DataTable({
                    responsive: false,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('admin.users.list') }}",
                    },
                    // "language": {
                    //     "processing": '<div class="loadingio-spinner-reload-lvqyb9tp5ng"><div class="ldio-m3bo9uw3yb"><div><div></div><div></div><div></div></div></div></div>',
                    // },
                    columns: [{
                            data: 'first_name',
                            name: 'first_name'
                        },
                        {
                            data: 'zip_code',
                            name: 'zip_code'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: '_table_user_actions',
                            name: '_table_user_actions',
                            orderable: false,
                            searchable: false
                        }
                    ],
                    drawCallback: function(settings) {

                    }
                });
                $('#SearchBar').on('keyup', function() {
                    table.search(this.value).draw();
                });
            });
        </script>
    @endsection

</x-base-layout>
