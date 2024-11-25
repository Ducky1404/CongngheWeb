<?php
function getFlowers() {
    return json_decode(file_get_contents('flower.json'), true);
}

function saveFlowers($flowers) {
    file_put_contents('flower.json', json_encode($flowers, JSON_PRETTY_PRINT));
}

function addFlower($name, $description, $image) {
    $flowers = getFlowers();
    $flowers[] = ['name' => $name, 'description' => $description, 'image' => $image];
    saveFlowers($flowers);
}

function deleteFlower($id) {
    $flowers = getFlowers();
    unset($flowers[$id]);
    saveFlowers(array_values($flowers));
}

function editFlower($id, $name, $description, $image) {
    $flowers = getFlowers();
    $flowers[$id] = ['name' => $name, 'description' => $description, 'image' => $image ?: $flowers[$id]['image']];
    saveFlowers($flowers);
}

function uploadImage($file) {
    if ($file['error'] == 0) {
        $path = 'img/' . basename($file['name']);
        move_uploaded_file($file['tmp_name'], $path);
        return $path;
    }
    return null;
}
