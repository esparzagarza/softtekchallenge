<?php

namespace src\classes;

class helpers {

    public static function turtleVariants(): array {
        return ['Turtle', 'turtle', 'TURTLE', 'Turtles', 'turtles', 'TURTLES', 'tortoise'];
    }

    public static function formatResponse($status, $message, $data = []): array
    {
        return [ 'status' => $status, 'message' => $message, 'data' => $data ];
    }

    public static function returnToAction(array $response): void
    {
        echo json_encode($response, http_response_code($response['status'])) . "\n\n";
    }
}