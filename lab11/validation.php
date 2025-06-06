<?php

function validateLength($value, $maxLength) {
    return is_string($value) && mb_strlen($value) <= $maxLength;
}

function validateTimestamp($timestamp, $allowFuture = false) {
    if (!is_numeric($timestamp)) return false;
    $currentTime = time();
    return ($allowFuture) 
        ? ($timestamp >= 0) 
        : ($timestamp >= 0 && $timestamp <= $currentTime);
}

function validateType($value, $type) {
    switch ($type) {
        case 'int': return is_int($value);
        case 'string': return is_string($value);
        default: return false;
    }
}

function validateUserIdExists($userId, $users) {
    $userIds = array_column($users, 'id');
    return in_array($userId, $userIds, true);
}

function validateUsersData($users) {
    $userIds = [];
    foreach ($users as $user) {
        $requiredFields = ['id', 'name', 'avatar', 'createdAt'];
        foreach ($requiredFields as $field) {
            if (!isset($user[$field])) {
                throw new Exception("Отсутствует поле '$field' у пользователя");
            }
        }

        $checks = [
            'id' => validateType($user['id'], 'int') && $user['id'] > 0,
            'name' => validateType($user['name'], 'string') && 
                      validateLength($user['name'], 50) && 
                      !empty(trim($user['name'])),
            'avatar' => validateType($user['avatar'], 'string') && 
                       validateLength($user['avatar'], 255),
            'description' => (!isset($user['description']) || 
                            (validateType($user['description'], 'string') && 
                             validateLength($user['description'], 200))),
            'createdAt' => validateTimestamp($user['createdAt'], true)
        ];

        if (in_array(false, $checks, true)) {
            throw new Exception("Невалидные данные пользователя ID: {$user['id']}");
        }

        if (in_array($user['id'], $userIds)) {
            throw new Exception("Дубликат ID пользователя: {$user['id']}");
        }
        $userIds[] = $user['id'];
    }
}

function validatePostsData($posts, $users) {
    $postIds = [];
    foreach ($posts as $post) {
        $requiredFields = ['id', 'user_id', 'images', 'description', 'likes', 'date'];
        foreach ($requiredFields as $field) {
            if (!isset($post[$field])) {
                throw new Exception("Отсутствует поле '$field' у поста");
            }
        }

        $checks = [
            'id' => validateType($post['id'], 'int') && $post['id'] > 0,
            'user_id' => validateUserIdExists($post['user_id'], $users),
            'images' => is_array($post['images']) && 
                       count($post['images']) > 0 &&
                       array_reduce($post['images'], function($carry, $img) {
                           return $carry && validateType($img, 'string') && 
                                  validateLength($img, 255);
                       }, true),
            'description' => validateType($post['description'], 'string') && 
                            validateLength($post['description'], 500) && 
                            (!empty(trim($post['description']))),
            'likes' => validateType($post['likes'], 'int') && $post['likes'] >= 0,
            'date' => validateTimestamp($post['date'])
        ];

        if (in_array(false, $checks, true)) {
            throw new Exception("Невалидные данные поста ID: {$post['id']}");
        }

        if (in_array($post['id'], $postIds)) {
            throw new Exception("Дубликат ID поста: {$post['id']}");
        }
        $postIds[] = $post['id'];
    }
}