@extends('share_admin.master')
@section('title')
    <div class="page-title-icon">
        <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
    </div>
    <div>User Management
        <div class="page-title-subheading">

        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <table class="table table-striped" id="table_user">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">First</th>
                            <th scope="col" class="text-center">Last</th>
                            <th scope="col" class="text-center">Full Name</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col" class="text-center">Is Email</th>
                            <th scope="col" class="text-center">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete? This thing can not complete.
                <input type="text" class="form-control" placeholder="Nhập vào id cần xóa" id="idDeleteUser" hidden>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="accpectDelete" class="btn btn-danger" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
@section('js')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            function loadTable() {
                $.ajax({
                    url: '/admin/user/getdata',
                    type: 'get',
                    success: function(res) {
                        var list_user = res.list;
                        var content_table = '';
                        $.each(list_user, function(key, value) {
                            content_table += '<tr>';
                            content_table += '<th class="text-center"  scope="row">' + (key +
                                1) + '</th>';
                            content_table += '<td class="text-center"> ' + value.ho_lot +
                                ' </td>';
                            content_table += '<td class="text-center"> ' + value.ten + ' </td>';
                            content_table += '<td class="text-center"> ' + value.ho_va_ten +
                                ' </td>';
                            content_table += '<td class="text-center"> ' + value.email +
                                ' </td>';
                            content_table += '<td class="text-center"> ' + value.is_email +
                                ' </td>';
                            content_table += '<td class="text-center text-nowrap">';
                            content_table +=
                                '<button class="btn btn-danger delete mr-1" data-iddelete="' +
                                value.id +
                                '" data-toggle="modal" data-target="#deleteModal">Delete</button>';
                            // content_table += '<button class="btn btn-primary edit mr-1" data-idedit=' + value.id + ' data-toggle="modal" data-target="#editModal">Edit</button>';
                            content_table += '</td>';
                            content_table += '</tr>';
                        });

                        $("#table_user tbody").html(content_table);
                    },
                });
            };
            loadTable();
            $('body').on('click', '.delete', function() {
                var getId = $(this).data('iddelete');
                $("#idDeleteUser").val(getId);
            });

            $("#accpectDelete").click(function() {
                var id = $("#idDeleteUser").val();
                $.ajax({
                    url: '/admin/user/delete/' + id,
                    type: 'get',
                    success: function(res) {
                        if (res.status) {
                            toastr.success('User has been deleted successfully!');
                            loadTable();
                        } else {
                            toastr.error('User does not exist!');
                        }
                    },
                });
            });
        });
    </script>
@endsection
