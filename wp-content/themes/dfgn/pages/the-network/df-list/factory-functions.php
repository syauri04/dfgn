<?php
function createFactoryEntry($data)
{
    ob_start();
    include 'factory-card.php';
    $entry = ob_get_clean();
    return $entry;
}

function createFactoryModal()
{
    ob_start();
    include 'factory-card-modal.php';
    $modal_content = ob_get_clean();
    return $modal_content;
}
?>