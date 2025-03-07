<?php include 'oc_action.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ຜູ້​ສະ​ໝັກຊຸດ​ເກົ່າ</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include '../style/stylesheet.php'; ?>

    <style>
        .scrollable-table {
            width: 100%;
            overflow-x: auto;
        }

        .scrollable-table table {
            width: 100%;
            white-space: nowrap;
        }
    </style>


</head>

<body>

    <!-- ======= Header ======= -->
    <?php include '../navbar/navbar_a.php'; ?>

    <!-- ======= Sidebar ======= -->
    <?php include '../sidebar/sidebar_a.php'; ?>

    <main id="main" class="main">
        <div class="container-fluid">



            <div class="pagetitle py-2">
                <h1>ຜູ້​ສະ​ໝັກຊຸດ​ເກົ່າ</h1>

            </div><!-- End Page Title -->

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">

                                <div class="modal fade" id="addModal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">ເພີ່ມຜູ້ສະ​ໝັກ</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="row g-3" action="oc_action" method="post" enctype="multipart/form-data">
                                                    <div class="col-md-12">
                                                        <label for="oc_name" class="form-label">ຊື່ ແລະ ນາມ​ສະ​ກຸນ</label>
                                                        <input type="text" name="oc_name" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_age" class="form-label">​ອາຍ​ຸ</label>
                                                        <input type="number" name="oc_age" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_tribe" class="form-label">ຊົນ​ເຜົ່າ</label>
                                                        <input type="text" name="oc_tribe" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_religion" class="form-label">ສາດ​ສະ​ໜາ</label>
                                                        <input type="text" name="oc_religion" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_saman" class="form-label">​ລະ​ດັບ​ການ​ສຶກ​ສາ(ສາ​ມັນ)</label>
                                                        <input type="text" name="oc_saman" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_level" class="form-label">​ລະ​ດັບ​ການ​ສຶກ​ສາ(ຊັ້ນ)</label>
                                                        <input type="text" name="oc_level" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_subject" class="form-label">​ລະ​ດັບ​ການ​ສຶກ​ສາ(​ສາ​ຂາ​ວິ​ຊາ​ສະ​ເພາະ)</label>
                                                        <input type="text" name="oc_subject" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_theory" class="form-label">​ລະ​ດັບ​ການ​ສຶກ​ສາ(​ທິດ​ສະ​ດີ)</label>
                                                        <input type="text" name="oc_theory" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_agephak" class="form-label">​ອາຍ​ຸ​ພັກ</label>
                                                        <input type="text" name="oc_agephak" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_agelat" class="form-label">​ອາຍ​ຸການ</label>
                                                        <input type="text" name="oc_agelat" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_phak" class="form-label">​ຕຳ​ແໜ່ງ​ພັກ</label>
                                                        <input type="text" name="oc_phak" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_lat" class="form-label">​ຕຳ​ແໜ່ງ​ລັດ</label>
                                                        <input type="text" name="oc_lat" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_part" class="form-label">ມາ​ຈາກ​ໜ່ວຍ</label>
                                                        <input type="text" name="oc_part" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="oc_pic" class="form-label">ຮູບ​ພາບ</label>
                                                        <input type="file" name="oc_pic" class="form-control">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">​ປິດ</button>
                                                        <button type="submit" name="add" class="btn btn-primary">ເພີ່ມ​ຂໍ້​ມູນ</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addModal">
                                    ເພີ່ມຜູ້ສະ​ໝັກ
                                </button>

                                <?php
                                $query = "SELECT * FROM oldcandidate";
                                $stmt = $conn->prepare($query);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $data = array();
                                while ($row = $result->fetch_assoc()) {
                                    $data[] = $row;
                                }
                                ?>
                                <!-- Default Table -->
                                <div class="scrollable-table">
                                    <table class="table" id="example">
                                        <thead class="table-light text-center align-middle">
                                            <tr>
                                                <th rowspan="2">ລ/ດ</th>
                                                <th rowspan="2">ຮູບ​ພາບ</th>
                                                <th rowspan="2">ຊື່ ແລະ ນາມ​ສະ​ກຸນ</th>
                                                <th rowspan="2">​ອາຍ​ຸ</th>
                                                <th rowspan="2">ຊົນ​ເຜົ່າ</th>
                                                <th rowspan="2">​ສາດ​ສະ​ໜາ</th>
                                                <th colspan="4">ລະ​ດັບ​ການ​ສຶກ​ສາ</th>
                                                <th rowspan="2">ອາ​ຍຸ​ພັກ</th>
                                                <th rowspan="2">ອາ​ຍຸການ</th>
                                                <th rowspan="2">ຕຳ​ແໜ່ງພັກ</th>
                                                <th rowspan="2">ຕຳ​ແໜ່ງລັດ</th>
                                                <th rowspan="2">ມາ​ຈາກ​ໜ່ວຍ</th>
                                                <th rowspan="2">#</th>
                                            </tr>
                                            <tr>
                                                <th>ສາ​ມັນ</th>
                                                <th>​ຊັ້ນ</th>
                                                <th>​ສາ​ຂາ​ວິ​ສາ​ສະ​ເພາະ</th>
                                                <th>​ທິດ​ສະ​ດີ</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center align-middle">
                                            <?php $i = 1; ?>
                                            <?php foreach ($data as $row) { ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td>
                                                        <?php if ($row['oc_pic'] != "") { ?>
                                                            <img src="../uploads/<?= $row['oc_pic']; ?>" width="60" height="65" class="rounded-circle">
                                                        <?php } else { ?>
                                                            <img src="../assets/img/profile-picture.jpg" alt="Profile" width="60" height="65" class="rounded-circle">
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-start"><?= $row['oc_name']; ?></td>
                                                    <td><?= $row['oc_age']; ?></td>
                                                    <td><?= $row['oc_tribe']; ?></td>
                                                    <td><?= $row['oc_religion']; ?></td>
                                                    <td><?= $row['oc_saman']; ?></td>
                                                    <td><?= $row['oc_level']; ?></td>
                                                    <td><?= $row['oc_subject']; ?></td>
                                                    <td><?= $row['oc_theory']; ?></td>
                                                    <td><?= $row['oc_agephak']; ?></td>
                                                    <td><?= $row['oc_agelat']; ?></td>
                                                    <td><?= $row['oc_phak']; ?></td>
                                                    <td><?= $row['oc_lat']; ?></td>
                                                    <td><?= $row['oc_part']; ?></td>
                                                    <td>
                                                        <a href="#edit_<?= $row['oc_id']; ?>" type="button" class="btn btn-primary" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
                                                        <a data-id="<?= $row['oc_id']; ?>" href="oc_action?delete=<?= $row['oc_id']; ?>" type="button" class="btn btn-danger delete-btn"><i class="bi bi-trash"></i></a>
                                                    </td>
                                                </tr>

                                                <div class="modal fade" id="edit_<?= $row['oc_id']; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">ແກ້​ໄຂຜູ້ສະ​ໝັກ</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="row g-3" action="oc_action" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="oc_id" value="<?= $row['oc_id']; ?>">

                                                                    <div class="col-md-12">
                                                                        <label for="oc_name" class="form-label">ຊື່ ແລະ ນາມ​ສະ​ກຸນ</label>
                                                                        <input type="text" name="oc_name" value="<?= $row['oc_name']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_age" class="form-label">​ອາ​ຍຸ</label>
                                                                        <input type="text" name="oc_age" value="<?= $row['oc_age']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_tribe" class="form-label">ຊົນ​ເຜົ່າ</label>
                                                                        <input type="text" name="oc_tribe" value="<?= $row['oc_tribe']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_religion" class="form-label">​ສາດ​ສະ​ໜາ</label>
                                                                        <input type="text" name="oc_religion" value="<?= $row['oc_religion']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_saman" class="form-label">​ລະ​ດັບ​ການ​ສຶກ​ສາ(ສາ​ມັນ)</label>
                                                                        <input type="text" name="oc_saman" value="<?= $row['oc_saman']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_level" class="form-label">​ລະ​ດັບ​ການ​ສຶກ​ສາ(ຊັ້ນ)</label>
                                                                        <input type="text" name="oc_level" value="<?= $row['oc_level']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_subject" class="form-label">​ລະ​ດັບ​ການ​ສຶກ​ສາ(​ສາ​ຂາ​ວິ​ຊາ​ສະ​ເພາະ)</label>
                                                                        <input type="text" name="oc_subject" value="<?= $row['oc_subject']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_theory" class="form-label">​ລະ​ດັບ​ການ​ສຶກ​ສາ(​ທິດ​ສະ​ດີ)</label>
                                                                        <input type="text" name="oc_theory" value="<?= $row['oc_theory']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_agephak" class="form-label">ອາ​ຍຸ​ພັກ</label>
                                                                        <input type="text" name="oc_agephak" value="<?= $row['oc_agephak']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_agelat" class="form-label">ອາ​ຍຸ​ການ</label>
                                                                        <input type="text" name="oc_agelat" value="<?= $row['oc_agelat']; ?>" class="form-control">
                                                                    </div>

                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_phak" class="form-label">​ຕຳ​ແໜ່ງ​ພັກ</label>
                                                                        <input type="text" name="oc_phak" value="<?= $row['oc_phak']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_lat" class="form-label">​ຕຳ​ແໜ່ງ​ລັດ</label>
                                                                        <input type="text" name="oc_lat" value="<?= $row['oc_lat']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_part" class="form-label">ມາ​ຈາກ​ໜ່ວຍ</label>
                                                                        <input type="text" name="oc_part" value="<?= $row['oc_part']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12 mt-2">
                                                                        <label for="oc_pic" class="form-label">ຮູບ​ພາບ</label>
                                                                        <input type="hidden" name="oldpic" value="<?= $row['oc_pic']; ?>">
                                                                        <input type="file" name="oc_pic" class="form-control mb-2">
                                                                        <?php if ($row['oc_pic'] != "") { ?>
                                                                            <img src="../uploads/<?= $row['oc_pic']; ?>" width="120" class="rounded-circle">
                                                                        <?php } else { ?>
                                                                            <img src="../assets/img/profile-picture.jpg" alt="Profile" width="120" class="rounded-circle">
                                                                        <?php } ?>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">​ປິດ</button>
                                                                        <button type="submit" name="update" class="btn btn-success">ອັບ​ເດດ​ຂໍ້​ມູນ</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Default Table Example -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main><!-- End #main -->



    <?php include '../style/script.php'; ?>

    <script>
        $(function() {
            $("#example").DataTable({
                "oLanguage": {
                    "sProcessing": "ກຳລັງດຳເນີນການ...",
                    "sLengthMenu": "ສະແດງ _MENU_ ແຖວ",
                    "sZeroRecords": "ບໍ່ມີຂໍ້ມູນຄົ້ນຫາ",
                    "sInfo": "ສະແດງ _START_ ຖີງ _END_ ຈາກ _TOTAL_ ແຖວ",
                    "sInfoEmpty": "ສະແດງ 0 ຖີງ 0 ຈາກ 0 ແຖວ",
                    "sInfoFiltered": "(ຈາກຂໍ້ມູນທັງໝົດ _MAX_ ແຖວ)",
                    "sSearch": "ຄົ້ນຫາ :",
                    "oPaginate": {
                        "sFirst": "ເລີ່ມຕົ້ນ",
                        "sPrevious": "ກັບຄືນ",
                        "sNext": "ຕໍ່ໄປ",
                        "sLast": "ສຸດທ້າຍ"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
        $(".delete-btn").click(function(e) {
            let userId = $(this).data('id');
            e.preventDefault();
            deleteConfirm(userId);
        })

        function deleteConfirm(userId) {
            Swal.fire({
                title: 'ຕ້ອງການຈະລົບຂໍ້ມູນອອກບໍ່?',

                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ຕົກລົງ',
                cancelButtonText: 'ຍົກເລີກ',
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: 'oc_action',
                                type: 'GET',
                                data: 'delete=' + userId,
                            })
                            .done(function() {
                                Swal.fire({
                                    title: 'ລົບຂໍ້ມູນສຳເລັດແລ້ວ',

                                    icon: 'success',
                                }).then(() => {
                                    document.location.href = 'oldcandidate';
                                })
                            })
                            .fail(function() {
                                Swal.fire('Oops...', 'Something went wrong with ajax !', 'error')
                                window.location.reload();
                            });
                    });
                },
            });
        }
    </script>

</body>

</html>