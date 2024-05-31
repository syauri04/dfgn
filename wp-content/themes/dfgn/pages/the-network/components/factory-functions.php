<?php

include 'factory-card.css.php';

function createFactoryEntry($data)
{
    ob_start();
    include __DIR__ . '/factory-card.php';
    ob_flush();
    flush();
    $entry = ob_get_clean();
    return $entry;
}

function createFactoryModal()
{
    ob_start();
    include __DIR__ . '/factory-card-modal.php';
    ob_flush();
    flush();
    $modal_content = ob_get_clean();
    return $modal_content;
}


?>
