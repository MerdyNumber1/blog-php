<?php
class Model_Post extends Model {
    public function get_data($data = null) {
        $content = array(
            "1" => "Пост 1",
            "2" => "Пост 2",
            "3" => "Пост 3",
            "4" => "Пост 4",
            "5" => "Пост 5",
            "6" => "Пост 6",
            "7" => "Пост 7",
            "8" => "Пост 8",
            "9" => "Пост 9",
        );
        return array($content[$data]);
    }
}