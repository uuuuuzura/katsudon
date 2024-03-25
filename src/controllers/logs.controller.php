<?php

require (__DIR__ . '/../models/log.model.php');

$logData = $db->query("SELECT label, date, type, cardsReceived, cardsSubmitted FROM LOGS")->fetchAll();
$logs = array_map(function ($log) {
    return new Log($log['label'], $log['date'], $log['type'], $log['cardsReceived'], $log['cardsSubmitted']);
}, $logData);

function renderActivityLogs(array $logs)
{
    $activityLogs = array_filter($logs, function ($log) {
        return $log->type === 'activity'; });

    foreach ($activityLogs as $log) {
        $log->renderLog();
    }
}

function renderTradingLogs(array $logs)
{
    $activityLogs = array_filter($logs, function ($log) {
        return $log->type === 'trading'; });

    foreach ($activityLogs as $log) {
        $log->renderLog();
    }
}

require __DIR__ . '/../views/logs.view.php';