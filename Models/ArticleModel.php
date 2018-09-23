<?php

namespace Models;

class ArticleModel
{
    const BD = 'data';

    public function getAll()
    {
        return $this->extractData(scandir(self::BD));
    }

    public function getById($id)
    {
        return file_get_contents("./data/article_$id.txt");
    }

    private function extractData(array $arr)
    {
        $res = [];
        foreach ($arr as $item) {
            $buffer = [];
            if ($item != '.' && $item != '..') {
                $buffer['name'] = explode('.', $item)[0];
                $buffer['id'] = explode('_', $buffer['name'])[1];
                $res[$buffer['id']]['id'] = $buffer['id'];
                $res[$buffer['id']]['name'] = $buffer['name'];
            }
        }

        return $res;
    }
}