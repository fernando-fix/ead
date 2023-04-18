<?php

namespace src\handlers;

use src\models\Log;

class LogHandler
{
    public static function add(Log $log)
    {
        Log::insert(
            [
                'id' => $log->getId(),
                'user_id' => $log->getUserId(),
                'type' => $log->getType(),
                'description' => $log->getDescription(),
                'created_at' => $log->getCreatedAt()
            ]
        )
            ->execute();
    }
}
