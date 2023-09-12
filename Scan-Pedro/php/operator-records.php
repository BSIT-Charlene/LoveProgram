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
?>
