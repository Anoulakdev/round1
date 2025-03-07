<?php
include '../config.php';
$query = "SELECT sum(sc.nsc_result) as scres, nc.nc_id, nc.nc_name, nc.nc_age, nc.nc_lat, nc.nc_phak, nc.nc_part, nc.nc_pic FROM nscore as sc right join newcandidate as nc on sc.nc_id = nc.nc_id group by nc.nc_name order by scres DESC, nc.nc_id ASC";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$sql10 = "SELECT count(DISTINCT m_id) as mid FROM nscore";
$result10 = $conn->query($sql10);
$row10 = $result10->fetch_assoc();
$mid = $row10['mid'];

$sql11 = "SELECT count(nc_id) as cncid FROM newcandidate";
$result11 = $conn->query($sql11);
$row11 = $result11->fetch_assoc();
$cncid = $row11['cncid'];

?>
<table class="table table-bordered" id="table">
    <thead>
        <tr class="text-center align-middle" style="height: 80px;">
            <th class="fs-3">ລ/ດ</th>
            <th class="fs-3">ຮູບ​ພາບ</th>
            <th class="fs-3">ຊື່​ຜູ້​ສະ​ໝັກ</th>
            <th class="fs-3">ອາ​ຍຸ</th>
            <th class="fs-3">ຕຳ​ແໜ່ງພັກ</th>
            <!-- <th class="fs-3">​ຕຳ​ແໜ່ງ​ລັດ</th> -->
            <th class="fs-3">​ຄະ​ແນນໄດ້</th>
            <th class="fs-3">​ຄະ​ແນນ​ເສຍ</th>
            <th class="fs-3">ສະ​ເລ່ຍ​ຄະ​ແນນ​ເສຍ</th>
        </tr>
    </thead>
    <tbody class="align-middle">
        <?php $i = 1; ?>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td class="text-center fs-4"><?= $i++; ?></td>
                <td class="fs-4 text-center"><img src="../uploads/<?= $row['nc_pic']; ?>" width="75" height="80" class="rounded-circle"></td>
                <td class="fs-4"><?= $row['nc_name']; ?></td>
                <td class="fs-4 text-center"><?= $row['nc_age']; ?></td>
                <td class="fs-4 text-center"><?= $row['nc_phak']; ?></td>
                <!-- <td class="fs-4 text-center"><?= $row['nc_lat']; ?></td> -->
                <?php if ($row['scres']) { ?>
                    <td class="text-center fs-4 fw-bold"><?= $row['scres']; ?></td>
                <?php } else { ?>
                    <td class="text-center fs-4 fw-bold">0</td>
                <?php } ?>

                <?php if ($row['scres']) { ?>
                    <td class="text-center fs-4 fw-bold">
                        <?php $scres = $row['scres'];
                        $tores = $mid - $scres;
                        ?> <?= $tores; ?>
                    </td>
                <?php } else { ?>
                    <td class="text-center fs-4 fw-bold"><?= $mid; ?></td>
                <?php } ?>


                <?php if ($row['scres']) { ?>
                    <td class="text-center fs-4 fw-bold"><?php $scres = $row['scres'];
                                                            $tores = $mid - $scres;
                                                            $percent = ($tores / $mid) * 100;
                                                            ?> <?= number_format($percent, 2); ?> %</td>
                <?php } else { ?>
                    <td class="text-center fs-4 fw-bold"><?php if ($mid) {
                                                                $scres = $row['scres'];
                                                                $tores = $mid - $scres;
                                                                $percent = ($tores / $mid) * 100;
                                                            } else {
                                                                $percent = '0.00';
                                                            } ?> <?= number_format($percent, 2); ?> %</td>
                <?php } ?>

            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <?php
        $query1 = "SELECT sum(nsc_result) as scres FROM nscore";
        $stmt1 = $conn->prepare($query1);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        ?>
        <?php while ($row1 = $result1->fetch_assoc()) { ?>
            <tr class="text-center align-middle" style="height: 80px;">
                <th colspan="5" class="fs-3">ລວມ​ຄະ​ແນນ​ທັງ​ໝົດ</th>
                <?php if ($row1['scres']) { ?>
                    <th class="text-center fs-3 fw-bold"><?= $row1['scres']; ?></th>
                <?php } else { ?>
                    <th class="text-center fs-3 fw-bold">0</th>
                <?php } ?>

                <?php if ($row1['scres']) { ?>
                    <th class="text-center fs-3 fw-bold"><?php $scres = $row1['scres'];
                                                            $multi = $mid * $cncid;
                                                            $tores = $multi - $scres;
                                                            ?> <?= $tores; ?></th>
                <?php } else { ?>
                    <th class="text-center fs-3 fw-bold">0</th>
                <?php } ?>
                <th class="text-center fs-3 fw-bold"></th>
            </tr>
        <?php } ?>
    </tfoot>
</table>

<?php
$stmt->close();
$result->close();
$result10->close();
$result11->close();
$stmt1->close();
$result1->close();
$conn->close();
?>