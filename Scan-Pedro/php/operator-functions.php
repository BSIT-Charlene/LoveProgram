<?php
function fetchOperatorData($conn, $searchCondition, $offset, $resultsPerPage) {
  $query = "SELECT * FROM operators
            INNER JOIN barangay ON operators.barangay_id = barangay.barangay_id
            INNER JOIN toda ON operators.toda_id = toda.toda_id
            WHERE $searchCondition
            LIMIT $offset, $resultsPerPage";

  $result = mysqli_query($conn, $query);

  $operatorData = array();
  while ($row = mysqli_fetch_assoc($result)) {
      $operatorData[] = $row;
  }

  return $operatorData;
}

function getTotalOperatorCount($conn, $searchCondition) {
  $queryTotal = "SELECT COUNT(*) AS total FROM operators WHERE $searchCondition";
  $resultTotal = mysqli_query($conn, $queryTotal);
  $rowTotal = mysqli_fetch_assoc($resultTotal);
  
  return $rowTotal['total'];
}
?>