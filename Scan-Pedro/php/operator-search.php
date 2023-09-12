<?php
require 'config.php';
require 'operator-functions.php';

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$searchCondition = !empty($searchTerm) ? "operator_given LIKE '%$searchTerm%'" : "1=1";

$resultsPerPage = 1;
$currentPage = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($currentPage - 1) * $resultsPerPage;

$totalOperators = getTotalOperatorCount($conn, $searchCondition);
$totalPages = ceil($totalOperators / $resultsPerPage);

$operatorData = fetchOperatorData($conn, $searchCondition, $offset, $resultsPerPage);

foreach ($operatorData as $index => $data) {
    ?>
    <tr data-row-index="<?php echo $index; ?>" class="operator-row">
        <td class="operator-id"><?php echo $data['operator_id']; ?></td>
        <td class="operator-name"><?php echo $data['operator_given'] . ' ' . $data['operator_middle'] . ' ' . $data['operator_surname'] . ' ' . $data['operator_suffix']; ?></td>
        <td class="barangay"><?php echo $data['barangay_name']; ?></td>
        <td>Total Units No. 1</td>
        <td>Total Drivers No. 1</td>
        <td class="toda"><?php echo $data['toda_name']; ?></td>
        <td>Franchise Validity No. 1</td>
    </tr>
    <?php
}
?>
