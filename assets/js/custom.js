const base_url = window.location.origin;
$('.row-site').click(function () {

    let id = $(this).data('id');

    $.ajax({
        url: base_url+'/tower/tower/getSite',
        type: "POST",
        data: { id: id },
        dataType: "json",
        success: function (data) {
            $('#formUpdateSite').attr('action', base_url+'/tower/tower/update/' + data.id);
            $('#m_id').val(data.id);
            $('#m_project_id').val(data.project_id);
            $('#m_site_name_po').val(data.site_name_po);
            $('#m_site_name_tenant').val(data.site_name_tenant);
            $('#m_site_id').val(data.site_id);
            $('#m_site').val(data.site_name_tenant);
            $('#m_name').val(data.site_id);
            $('#m_start').val(data.start);
            $('#m_done').val(data.done);
            $('#m_tenant').val(data.tenant);
            $('#m_type_tower').val(data.type_tower);
            $('#m_height').val(data.height);
            $('#m_alamat').val(data.alamat);
            $('#m_latitude').val(data.latitude);
            $('#m_longitude').val(data.longitude);
            $('#m_pekerjaan').val(data.pekerjaan);
            $('#m_area').val(data.area);
            $('#m_mitra').val(data.mitra);
            $('#m_atp_done').val(data.atp_done);
            $('#m_atp_date').val(data.atp_date);
            $('#m_executive_general_manager').val(data.executive_general_manager);
            $('#m_manager_construction').val(data.manager_construction);
            $('#m_gm_area_office').val(data.gm_area_office);
            $('#m_manager_const').val(data.manager_const);
            $('#m_project_management').val(data.project_management);
            $('#m_waspang_area').val(data.waspang_area);

            $('#btn_update').attr('href', base_url + '/tower/update/' + data.id);
            $('#btn_delete').attr('href', base_url + '/tower/delete/' + data.id);

            $('#siteModal').modal('show');

        }
    });

    $('#btn_delete').click(function (e) {
        e.preventDefault();
        $id = $(this).data('id');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + '/tower/tower/delete',
                    type: "POST",
                    data: { id: id },
                    dataType: "json",
                    success: function (data) {
                        if (data == 1) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            });
                            setTimeout(location.reload(true), 3000)
                        }
                      

                    }
                });

             
            }
        });
    })

});